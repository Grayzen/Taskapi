# Taskapi
Task API

Endpoint and parameters;

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

3. GET - api/v1/list

4. GET - api/v1/listorder

5. GET - api/v1/done/{task}


