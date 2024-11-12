The MySQL command-line is a powerful interface for managing MySQL databases directly using SQL commands. With it, you can perform tasks like creating databases, managing tables, querying data, and configuring database settings.

Getting Started with the MySQL Command-Line
Accessing MySQL Command-Line

To access the MySQL command-line, open a terminal (or Command Prompt) and enter:
bash
Copy code
mysql -u username -p
Replace username with your MySQL username (e.g., root). After entering your username, you’ll be prompted to enter your password.
Basic MySQL Commands

Show Databases: Lists all databases available in the MySQL instance.

#    
SHOW DATABASES;
Create a Database: Creates a new database.

#    
CREATE DATABASE database_name;
Use a Database: Selects a database to start using it.

#    
USE database_name;
Show Tables: Lists all tables in the currently selected database.

#    
SHOW TABLES;
Describe Table: Displays the structure of a specific table, including column names and data types.

#    
DESCRIBE table_name;
Table Management Commands

Create a Table: Defines a new table with specified columns and data types.

#    
CREATE TABLE table_name (
  column1 datatype,
  column2 datatype,
  ...
);
Example:

#    
CREATE TABLE Employees (
  EmployeeID INT PRIMARY KEY,
  Name VARCHAR(50),
  Department VARCHAR(50)
);
Insert Data into Table: Adds new records to a table.

#    
INSERT INTO table_name (column1, column2, ...)
VALUES (value1, value2, ...);
Select Data from Table: Retrieves data from a table.

#    
SELECT * FROM table_name;
Example with condition:

#    
SELECT Name, Department FROM Employees WHERE Department = 'HR';
Update Data in Table: Modifies existing records.

#    
UPDATE table_name
SET column1 = value1, column2 = value2
WHERE condition;
Delete Data from Table: Removes records based on a condition.

#    
DELETE FROM table_name WHERE condition;
Database Administration Commands

Grant Permissions: Grants privileges to a user.

#    
GRANT ALL PRIVILEGES ON database_name.* TO 'username'@'localhost';
Show Users: Lists MySQL users.

#    
SELECT user, host FROM mysql.user;
Change User Password: Updates a user’s password.

#    
ALTER USER 'username'@'localhost' IDENTIFIED BY 'new_password';
Exiting MySQL Command-Line

To exit, simply type:
#    
EXIT;
Tips for MySQL Command-Line
End each command with a semicolon ;.
Use \c to cancel a command if you make a mistake before hitting enter.
Use \h for help, and \u to re-enter the current database.


Password-- TPh.VSjC8QJ4_JpO