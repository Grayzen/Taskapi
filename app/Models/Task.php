<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'title',
        'type',
        'condition',
        'amount',
        'country',
        'done'
    ];

    protected $casts = [
        'condition' => 'array',
        'amount' => 'array'
      ];
}
