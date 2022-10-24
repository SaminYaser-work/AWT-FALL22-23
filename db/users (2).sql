#
# TABLE STRUCTURE FOR: users
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (3, 'Leonel', 'Effertz', 67, 'Ferry, Kovacek and Emmerich', '97692928421');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (4, 'Rigoberto', 'Roberts', 30, 'Hoppe, Marvin and Leffler', '50348037067');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (5, 'Devante', 'Kertzmann', 80, 'Carroll-Boehm', '98177437277');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (6, 'Xavier', 'Kiehn', 32, 'Yundt, Wilderman and Gerhold', '37360197926');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (7, 'Maurice', 'Crona', 74, 'Jaskolski-Legros', '60934531647');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (8, 'Fern', 'Von', 19, 'Pacocha-Hoppe', '78548342900');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (9, 'Rigoberto', 'Hansen', 44, 'Marvin LLC', '32953500416');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (10, 'Kip', 'Bartoletti', 65, 'Turner Inc', '74186083053');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (11, 'Toby', 'Kreiger', 38, 'Hammes, Gibson and Koch', '11341709477');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (12, 'Allan', 'Flatley', 64, 'Flatley and Sons', '40177977871');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (13, 'Beau', 'Hickle', 56, 'Johnson, Gutkowski and Ratke', '86382739618');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (14, 'Obie', 'Hansen', 25, 'Rolfson-Huels', '65909520453');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (15, 'Bertrand', 'Gorczany', 56, 'Schumm-Sipes', '54783795898');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (16, 'Ignacio', 'Little', 36, 'Schmidt-Sauer', '64572372411');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (17, 'Ernie', 'D\'Amore', 52, 'D\'Amore PLC', '26279907052');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (18, 'Lexus', 'Heaney', 78, 'Rippin PLC', '78756038513');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (19, 'Muhammad', 'Treutel', 64, 'Klocko-Mills', '25794198032');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (20, 'Emery', 'Kihn', 56, 'Padberg, Moen and Mertz', '29911857139');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (21, 'Dino', 'Legros', 58, 'Kunze, Russel and Renner', '80976637121');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (22, 'Jeramy', 'Herzog', 62, 'Toy and Sons', '68578666903');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (23, 'Wilford', 'Bergnaum', 80, 'Koepp-Boehm', '87152327762');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (24, 'Abelardo', 'Cremin', 21, 'Rogahn Group', '67337844396');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (25, 'Jess', 'Gutmann', 21, 'Schinner-Trantow', '61354623859');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (26, 'Jake', 'Bosco', 72, 'Ziemann Ltd', '70724372441');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (27, 'Kian', 'Jerde', 29, 'Bahringer-McGlynn', '61016165796');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (28, 'Nathanael', 'Lubowitz', 78, 'Schinner-Pagac', '51573335586');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (29, 'Carmelo', 'Armstrong', 41, 'Jakubowski Ltd', '69755858389');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (30, 'Kolby', 'Lehner', 55, 'Labadie-Cassin', '82021243456');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (31, 'Thurman', 'Schumm', 46, 'Rodriguez Ltd', '24901342184');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (32, 'Timmothy', 'Schulist', 67, 'Kutch, Cruickshank and Stehr', '95712409002');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (33, 'Barrett', 'Boyle', 18, 'Hamill-McClure', '21290241388');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (34, 'Henry', 'Leffler', 25, 'Kirlin-Legros', '19964422782');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (35, 'Rowland', 'Eichmann', 49, 'Huels-DuBuque', '77281799001');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (36, 'Kraig', 'Kuhn', 20, 'Kohler-Littel', '91493898464');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (37, 'Ludwig', 'Rau', 20, 'Herzog, Adams and Ratke', '99418733144');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (38, 'Keanu', 'Kunde', 18, 'Kuhic, Keebler and Dooley', '16846207984');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (39, 'Erin', 'Dicki', 23, 'Boehm, Metz and Rempel', '99245454536');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (40, 'Dayton', 'Brown', 39, 'Dicki, Lang and Berge', '92950038736');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (41, 'Jamarcus', 'Beier', 52, 'Koss Ltd', '17142352999');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (42, 'Jeremie', 'Williamson', 28, 'Skiles-Witting', '68111361025');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (43, 'Paolo', 'Hand', 52, 'Harvey-Bernhard', '15626173631');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (44, 'Stuart', 'Green', 62, 'Trantow-Lakin', '32675677537');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (45, 'Berta', 'Mitchell', 60, 'Medhurst, Heidenreich and Koch', '43652150904');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (46, 'Abe', 'DuBuque', 48, 'Koepp Ltd', '11504089211');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (47, 'Scotty', 'Tromp', 36, 'Von Group', '30530007431');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (48, 'Javon', 'Leuschke', 75, 'Hamill-Deckow', '75453116827');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (49, 'Wilford', 'Schultz', 33, 'Dach, Schmitt and Reichert', '42154015310');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (50, 'Americo', 'Hintz', 26, 'Mann Ltd', '55230920968');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (51, 'Gavin', 'Daniel', 32, 'Keebler and Sons', '52452940328');
INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `company`, `mobile`) VALUES (52, 'Curtis', 'Cole', 43, 'Jacobi Ltd', '18931622430');


