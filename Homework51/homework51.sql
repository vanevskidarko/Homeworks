SELECT * FROM customers WHERE job_title IN('Purchasing Manager', 'Purchasing Representative') AND fax_number IS NOT NULL;
SELECT id FROM orders WHERE order_date BETWEEN '2006-01-05 00:00:00' AND '2006-05-24 00:00:00' AND shipping_fee<100;
SELECT company, first_name FROM customers WHERE city IN('Seattle','New York', 'Las Vegas');
SELECT COUNT(discontinued=1) FROM products;
SELECT id, category,description FROM products WHERE category LIKE "%Ca%";
SELECT company,city country_region, zip_postal_code FROM customers WHERE address LIKE "%th%" ORDER BY company ASC;