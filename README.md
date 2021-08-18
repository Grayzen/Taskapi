# Taskapi
Task API

Endpoints and parameters;

1. POST - api/v1/create

    - title = string

  - type = enum("common_ops", "invoice_ops", "custom_ops")
  
  - condition = string (task_id)
  
  - if type is invoice_ops these parameters will be active also
  
  - currency = ₺, €, $, £ - these currencies allowed for now
  
  - quantity - integer
  
  - if type is custom_ops these parameters will be active also
  
  - country - TR, EN, FR, NL - these countries allowed for now
  
2. POST - api/v1/addcondition

  - task = string (task_id)
  - condition = string (task_id for condition)

3. GET - api/v1/list

  - Listing all tasks

4. GET - api/v1/listorder

  - Listing completed tasks by order

5. GET - api/v1/done

  - task = string (task_id) For completing tasks by task_id


