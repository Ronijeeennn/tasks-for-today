-- Tasks for Today: database export for the LIVE server (InfinityFree phpMyAdmin).
-- Select your database first, then Import this file.
-- (No CREATE DATABASE / USE lines, so it works on shared hosting.)

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

-- "Today" in Philippine time (UTC+8), regardless of the host's server timezone.
SET @now   = CONVERT_TZ(UTC_TIMESTAMP(), '+00:00', '+08:00');
SET @today = DATE(@now);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review for midterms',                'done',        @today,                          @now),
('Finish laboratory activities',       'in_progress', @today,                          @now),
('Play games with my friends',         'pending',     @today,                          @now),
('Deploy the app to free hosting',     'pending',     @today,                          @now),
('Answer assignments',                 'done',        DATE_SUB(@today, INTERVAL 1 DAY), @now),
('Read chapter on CodeIgniter models', 'done',        DATE_SUB(@today, INTERVAL 2 DAY), @now),
('Prepare for group meeting',          'pending',     DATE_ADD(@today, INTERVAL 1 DAY), @now),
('Advance study',                      'pending',     DATE_ADD(@today, INTERVAL 2 DAY), @now),
('Work on the capstone project',       'pending',     DATE_ADD(@today, INTERVAL 3 DAY), @now);

INSERT INTO users (username, full_name, email, created_at) VALUES
('ronijen', 'Ronijen A. Antonio', 'raantonio1@fit.edu.ph', @now);
