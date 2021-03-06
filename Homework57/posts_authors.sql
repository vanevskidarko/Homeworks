CREATE TABLE authors(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `name` VARCHAR(50));

CREATE TABLE books(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
`name` VARCHAR(50),
author_id INT,  CONSTRAINT fk_author_id
FOREIGN KEY (author_id) REFERENCES authors(id)
ON DELETE CASCADE
);

