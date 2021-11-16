CREATE TABLE items(
item_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50),
item_type_id INT NOT NULL
);

CREATE TABLE item_types(
item_type_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50)
);

CREATE TABLE order_items(order_id INT,
item_id INT );

CREATE TABLE orders(
order_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
customer_id INT
);

CREATE TABLE customers ( 
customer_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50),
birthday DATE ,
city_id INT NOT NULL
);

CREATE TABLE cities(	
city_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(50)
);

ALTER TABLE items ADD CONSTRAINT fk_item_type FOREIGN KEY (item_type_id) REFERENCES item_types(item_type_id);

ALTER TABLE orders ADD CONSTRAINT fk_customer_id FOREIGN KEY (customer_id) REFERENCES customers(customer_id);

ALTER TABLE customers ADD CONSTRAINT fk_city_id FOREIGN KEY (city_id) REFERENCES cities(city_id);

ALTER TABLE order_items ADD CONSTRAINT fk_order_id FOREIGN KEY (order_id) REFERENCES orders(order_id);

ALTER TABLE order_items ADD CONSTRAINT item_id FOREIGN KEY (item_id) REFERENCES items(item_id);
