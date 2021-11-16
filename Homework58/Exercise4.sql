CREATE TABLE teachers(
teacher_id INT NOT NULL AUTO_INCREMENT UNIQUE PRIMARY KEY ,
`name` VARCHAR(50) ,
manager_id INT);

ALTER TABLE teachers ADD CONSTRAINT fk_teachers FOREIGN KEY (manager_id) REFERENCES teachers(teacher_id);
