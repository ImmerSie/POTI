create table products(
    product_id int(10) NOT NULL,
    product_name varchar(20),
    unit_price float(8,2),
    unit_quantity varchar(15),
    in_stock int(10),
    PRIMARY KEY (product_id)
)

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1000, 'Fish Fingers', 2.55, '500 gram', 1500);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1001, 'Fish Fingers', 5.00, '1000 gram', 750);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1002, 'Hamburger Patties', 2.35, 'Pack 10', 1200);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1003, 'Shelled Prawns', 6.90, '250 gram', 300);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1004, 'Tub Ice Cream', 1.80, '1 Litre', 800);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(1005, 'Tub Ice Cream', 3.40, '2 Litre', 1200);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(2000, 'Panadol', 3.00, 'Pack 24', 2000);

INSERT INTO products(product_id, product_name, unit_price, unit_quantity, in_stock)
VALUES(2001, 'Panadol', 5.50, 'Bottle 50', 1000);
