-- Create the BC_database
CREATE DATABASE BC_database;

-- Create the items table
CREATE TABLE items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    -- type of candle (tower, design, ect)
    item_type VARCHAR(255) NOT NULL,
    --SMell
    item_smell VARCHAR(255) NOT NULL,
    -- number in minutes
    item_burn_time INT NOT NULL,
    item_price DECIMAL(10, 2) NOT NULL
);

-- Create the orders tavle
CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT,
    quantity INT NOT NULL,
    total_cost DECIMAL(10, 2) NOT NULL,
    order_date DATE NOT NULL,
    customer_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (item_id) REFERENCES items(item_id)

);
