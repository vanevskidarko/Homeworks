CREATE TABLE clients(
id INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
client_name VARCHAR(100),
project_id INT;

CREATE TABLE projects(
id INT NOT NULL PRIMARY KEY,
client_id INT NOT NULL,
project_lead_id INT NOT NULL
);

CREATE TABLE employees (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(50),
last_name VARCHAR(50),
project_id INT NOT NULL
);

ALTER TABLE clients ADD CONSTRAINT project_fk 
FOREIGN KEY (project_id) REFERENCES projects(id);

ALTER TABLE projects ADD CONSTRAINT client_fk
FOREIGN KEY (client_id) REFERENCES clients(id);

ALTER TABLE employees ADD CONSTRAINT project_lead_fk
FOREIGN KEY (project_id) REFERENCES projects(project_lead_id);