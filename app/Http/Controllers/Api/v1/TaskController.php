<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function create(Request $req)
    {
        $tasks = Task::all();
        $limit = 5000;
        if($tasks->count() >= $limit)
            return response()->json("Task records have reached the max limit of ".$limit);

        $this->validate($req,[
            'title' => 'required|unique:tasks',
            'type' => 'in:common_ops,invoice_ops,custom_ops|nullable',
            'condition' => 'nullable|exists:tasks,id'
        ]);

        $task = new Task;
        $task->id = str_replace(' ', '_',strtolower($req->title));
        $task->title = $req->title;
        $task->condition = $req->condition;
        if($req->type)
            $task->type = $req->type;
        if($req->type == "invoice_ops"){
            $currencies = ['₺','€','$','£'];
            $array = Arr::add(['currency' => $req->currency], 'quantity', $req->quantity);
            if(in_array($req->currency, $currencies))
                $task->amount = $array;
            else{
                $allCurrencies = "";
                foreach ($currencies as $currency) {
                    $allCurrencies .= $currency.', ';
                }
                return response()->json("Currency can be just ".$allCurrencies." currencies!");
            }
        }
        if($req->type == "custom_ops"){
            $countries = ['TR','EN','FR','NL'];
            if(in_array(strtoupper($req->country), $countries))
                $task->country = strtoupper($req->country);
            else{
                $allCountries = "";
                foreach ($countries as $country) {
                    $allCountries .= $country.', ';
                }
                return response()->json("Countries can be just ".$allCountries." Countries!");
            }
        }

        if($task->save())
            return response()->json("Task Created");
        else
            return response()->json("Data Problem");

    }
    public function addcondition(Request $req)
    {
        $this->validate($req,[
            'task' => 'exists:tasks,id',
            'condition' => 'exists:tasks,id',
        ]);


        if($req->task == $req->condition)
            return response()->json("Task and condition can not be same");

        $task = Task::find($req->task);

        if($task->condition == NULL){

            $task->condition = $req->condition;

            if($task->save())
                    return response()->json("Condition Added");
                else
                    return response()->json("Data Problem");
        }
        else{

            if(is_array($task->condition))
                $stack = $task->condition;
            else
                $stack = [$task->condition];

            if(in_array($req->condition, $stack))
                return response()->json("Condition Already Added");
            else{
                array_push($stack, $req->condition);
                $task->condition = $stack;

                if($task->save())
                    return response()->json("Condition Added");
                else
                    return response()->json("Data Problem");
            }

        }

    }
    public function list()
    {
        // return DB::table('tasks')->get()->filter();
        $tasks = Task::all();
        if(count($tasks))
            return $tasks;
        else
            return response()->json("There is no any tasks yet!");
    }
    public function listorder()
    {
        $listOrder = Task::where('done', 1)->orderBy('updated_at', 'desc')->get();
        if(count($listOrder))
            return $listOrder;
        else
            return response()->json("There is no any completed task yet!");
    }

    public function done(Request $req)
    {
        $task = Task::find($req->task);


        if(!$task)
            return response()->json("Task is not exist!");
        elseif($task->done == 1)
            return response()->json("Task is already done");
        elseif($task->condition != NULL){
            if(is_array($task->condition)){
                $conditions = [];
                foreach ($task->condition as $value) {
                    $condition = Task::find($value);
                    if($condition->done != 1)
                        $conditions[$condition->title] = $condition->done;
                }
                if(in_array(0, $conditions)){
                    foreach($conditions as $key => $value)
                        return response()->json($key ." must finish first for completing this task!");
                }
                else{
                        $task->done = 1;
                        $task->updated_at = now();
                        $task->save();
                        return response()->json("Task completed");
                }
            }
            else{
                $condition = Task::find($task->condition);
                if($condition->done != 1)
                        return response()->json($condition->title ." must finish first for completing this task!");
                    else{
                        $task->done = 1;
                        $task->updated_at = now();
                        $task->save();
                        return response()->json("Task completed");
                    }
            }
        }
        else{

            $task->done = 1;
            $task->updated_at = now();
            $task->save();

            return response()->json("Task completed");
        }
    }
}
