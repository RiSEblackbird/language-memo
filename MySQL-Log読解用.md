~~~ruby
   (2.2ms)  
   SET NAMES utf8mb4,  
   @@SESSION.sql_mode = CONCAT(CONCAT(@@sql_mode, ',STRICT_ALL_TABLES'), ',NO_AUTO_VALUE_ON_ZERO'),  
   @@SESSION.sql_auto_is_null = 0, @@SESSION.wait_timeout = 2147483
   (0.3ms)  
   SELECT `schema_migrations`.`version` FROM `schema_migrations` ORDER BY `schema_migrations`.`version` ASC
Processing by ProductsController#index as */*
  Product Load (0.8ms)  SELECT `products`.* FROM `products`
  ↳ app/controllers/products_controller.rb:5:in `index'
Completed 200 OK in 15ms (Views: 5.8ms | ActiveRecord: 7.1ms | Allocations: 4965)
~~~

~~~ruby
# 抜粋
SELECT `schema_migrations`.`version` FROM `schema_migrations` ORDER BY `schema_migrations`.`version` ASC
Processing by ProductsController#index as */*
  Product Load (0.8ms)  SELECT `products`.* FROM `products`
~~~

~~~ruby
Started POST "/products" for ::1 at 2020-05-23 12:41:04 +0900
Processing by ProductsController#create as HTML
  Parameters: {"product"=>"AAAAA"}
   (0.2ms)  BEGIN
  ↳ app/controllers/products_controller.rb:9:in `create'
  Product Create (2.3ms)  INSERT INTO `products` (`product`, `created_at`, `updated_at`) VALUES ('AAAAA', '2020-05-23 03:41:04.851376', '2020-05-23 03:41:04.851376')
  ↳ app/controllers/products_controller.rb:9:in `create'
   (1.6ms)  COMMIT
  ↳ app/controllers/products_controller.rb:9:in `create'
Completed 200 OK in 38ms (Views: 1.6ms | ActiveRecord: 4.0ms | Allocations: 2467)
~~~

~~~ruby
# 抜粋
INSERT INTO `products` (`product`, `created_at`, `updated_at`) 
VALUES ('AAAAA', '2020-05-23 03:41:04.851376', '2020-05-23 03:41:04.851376')
~~~