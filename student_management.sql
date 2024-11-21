-- Create Database
CREATE DATABASE IF NOT EXISTS student_management;

-- Use the Database
USE student_management;

-- Create Table for Students
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(15),
    course VARCHAR(100)
);

-- Insert Sample Data (Optional)
INSERT INTO students (name, email, phone, course) VALUES
('John Doe', 'john@example.com', '1234567890', 'Computer Science'),
('Jane Smith', 'jane@example.com', '2345678901', 'Electrical Engineering'),
('Alex Brown', 'alex@example.com', '3456789012', 'Mechanical Engineering');
