# Taskapi
Task API

Endpoint and parameters;

POST - api/v1/create
  title = string
  type = enum("common_ops", "invoice_ops", "custom_ops")
  condition = string (task_id)
  - if type is invoice_ops these parameters will be active also -
  currency = ₺, €, $, £ - these currencies allowed for now
  quantity - integer
  - if type is custom_ops these parameters will be active also -
  country - TR, EN, FR, NL - these countries allowed for now

POST - api/v1/addcondition

GET - api/v1/list

GET - api/v1/listorder

GET - api/v1/done/{task}


