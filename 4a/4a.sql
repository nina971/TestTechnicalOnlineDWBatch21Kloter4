SELECT Cars.*,Customer.* FROM Cars,Customer where Cars.id = Customer.id AND Customer.id = 1
SELECT * FROM Cars
SELECT Cars.name as nama_mobil, Brand.name as brand_mobil FROM Cars,Brand WHERE Cars.id = Brand.id


INSERT INTO `Cars` (`id`, `name`, `brand_id`, `image`, `color`, `description`, `create_time`, `update_time`, `stock`) VALUES (NULL, 'Suzuki Ertiga', '3', 'images2.jpg', 'Dark Grey', 'Mesin : 1462 cc\r\nTenaga : 103 hp\r\nTempat Duduk : 7 Kursi\r\nMesin Transmisi : Manual\r\nTorsi : 138 Nm\r\nJenis Bahan Bakar : Bensin', '2020-02-02', '2021-02-11', '5');

INSERT INTO `Customer` (`id`, `name`, `email`, `address`) VALUES (NULL, 'Martis Siahaan', 'martis@gmail.com', 'St. Los Angeles N.12 U.S.A');


INSERT INTO `Brand` (`id`, `name`) VALUES (NULL, 'Nissan');
