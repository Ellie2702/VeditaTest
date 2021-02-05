CREATE DATABASE TestProducts;

USE TestProducts;

CREATE TABLE Products
(
	ID int PRIMARY KEY AUTO_INCREMENT,
    PRODUCT_ID int NOT NULL,
    PRODUCT_NAME nvarchar(100) NOT NULL,
    PRODUCT_PRICE decimal(10,2) NOT NULL,
    PRODUCT_ARTICLE nvarchar(15) NOT NULL,
    PRODUCT_QUANTITY int NOT NULL,
    DATE_CREATE datetime NOT NULL,
    BOOL_HIDE bool 
);

INSERT INTO `products` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`, `BOOL_HIDE`) VALUES
(1, 'Шоколадный фонтан Tristar ', '2499.00', 'CF-1603', 5, '2021-02-05 17:28:14', 0),
(22, 'Набор для фондю VITESSE', '3000.00', 'VS-1866', 6, '2021-02-05 17:28:14', 0),
(33, 'Шоколадный фонтан Clatronic', '5000.00', 'SKB 3248', 8, '2021-02-05 18:18:30', 0),
(123, 'Зеркальная камера Canon EOS', '27999.00', '2000D', 19, '2021-02-05 20:45:32', 0),
(326, 'Зеркальная камера Nikon', '35659.00', 'AF-P', 4, '2021-02-05 20:46:25', 0);