-- Run this in phpMyAdmin to create the database and table

CREATE DATABASE IF NOT EXISTS pdo_transactions;

USE pdo_transactions;

CREATE TABLE IF NOT EXISTS transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    qty INT NOT NULL,
    total DECIMAL(10,2) NOT NULL
);
