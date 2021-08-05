--task 1
SELECT category, description FROM products;
--task 2
SELECT id, customer_id, employee_id, ship_city FROM orders WHERE ship_city='Chicago';
--task 3
SELECT * FROM orders WHERE payment_type!='Check';
--task 4
SELECT * FROM orders WHERE payment_type='Credit Card';
--task 5
SELECT DISTINCT ship_city FROM orders;
--task 6
SELECT * FROM orders WHERE shipping_fee>100;
--task 7
SELECT COUNT(DISTINCT ship_city) FROM orders;
--task 8
SELECT id, ship_name, shipping_fee+taxes AS shipping_taxes FROM orders;
--task 9
SELECT id, first_name, last_name, business_phone FROM customers WHERE job_title='Owner';
--task 10
SELECT * FROM orders WHERE order_date>'2006-03-24 00:00:00';
