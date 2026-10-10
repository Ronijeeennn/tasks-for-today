-- Database export (alternative to running migrations + seeder).
-- Import in phpMyAdmin. On free hosting, create the database in the control panel
-- first, delete the first 2 lines below, and import into that database.
CREATE DATABASE IF NOT EXISTS tasks_for_today CHARACTER SET utf8mb4;
USE tasks_for_today;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  status VARCHAR(20) NOT NULL DEFAULT 'pending',
  task_date DATE NOT NULL,
  created_at DATETIME NOT NULL
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

-- Dates are relative to CURDATE() so "today" tasks always exist when you import.
INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review lecture notes for IT0049',    'done',        CURDATE(),                           NOW()),
('Finish laboratory activity',         'in_progress', CURDATE(),                           NOW()),
('Push project to GitHub',             'pending',     CURDATE(),                           NOW()),
('Deploy the app to free hosting',     'pending',     CURDATE(),                           NOW()),
('Submit assignment form',             'done',        DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Read chapter on CodeIgniter models', 'done',        DATE_SUB(CURDATE(), INTERVAL 2 DAY), NOW()),
('Prepare for group meeting',          'pending',     DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Study for the quiz',                 'pending',     DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW()),
('Work on the final project proposal', 'pending',     DATE_ADD(CURDATE(), INTERVAL 3 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('demo_user', 'Juan Dela Cruz', 'juan.delacruz@example.com', NOW());
