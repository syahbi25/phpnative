-- Buat Database
CREATE DATABASE IF NOT EXISTS mvc_db;

-- Gunakan Database
USE mvc_db;

-- Buat Tabel Users
CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telepon VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Data Sample
INSERT INTO users (nama, email, telepon) VALUES
('John Doe', 'john@example.com', '08123456789'),
('Jane Smith', 'jane@example.com', '08234567890'),
('Bob Johnson', 'bob@example.com', '08345678901'),
('Alice Williams', 'alice@example.com', '08456789012'),
('Charlie Brown', 'charlie@example.com', '08567890123');
