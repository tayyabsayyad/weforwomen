#
# TABLE STRUCTURE FOR: register
#

DROP TABLE IF EXISTS register;

CREATE TABLE `register` (
  `r_id` int(50) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` bigint(50) NOT NULL,
  PRIMARY KEY (`r_id`),
  UNIQUE KEY `mobile_no` (`mobile_no`)
) ENGINE=InnoDB AUTO_INCREMENT=70020 DEFAULT CHARSET=latin1;

INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70000, 'Evans', 'Considine', '544738', 'Prof. Dawson Treutel', '126 Desmond Shoal\nScarlettfort, WY 58403', 'reinger.dandre@example.net', 1);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70001, 'Elaina', 'Jacobi', '25337', 'Rylee Gerhold', '24748 Pfannerstill Squares\nGleichnerbury, NV 84653', 'ystamm@example.org', 156429);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70002, 'Oswaldo', 'Jacobi', '46', 'Bridie Hirthe MD', '6991 Sophia Forks Apt. 971\nEast Letha, NJ 72710', 'jewell.turcotte@example.org', 6908604002);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70003, 'Jerad', 'Torphy', '947678972', 'Mrs. Laisha Eichmann Sr.', '206 McClure Summit Apt. 319\nDemariomouth, GA 44167', 'rosina11@example.org', 52);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70004, 'Diamond', 'Rosenbaum', '175410', 'Yasmin Pfannerstill', '841 Sporer Lights Apt. 732\nWest Amaramouth, AR 787', 'vada44@example.org', 0);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70005, 'Elmore', 'Brakus', '53159141', 'Baylee Will', '12385 Cartwright Haven Apt. 388\nHilariofort, ID 58', 'izabella86@example.com', 88);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70006, 'Eleanora', 'Brakus', '854696', 'Alanna Blick', '9450 Brown Cape Suite 470\nNew Kylieton, WV 35470', 'ocie.block@example.com', 642);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70007, 'Jacinto', 'Crona', '69875661', 'Mr. Wayne Rohan MD', '5872 Mohr Inlet\nWisozkhaven, WA 07476', 'cronin.adalberto@example.net', 36);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70009, 'Lavern', 'Hartmann', '76694552', 'Emilio Deckow', '0709 Richmond Radial\nNew Carolynton, MS 36848', 'vmcclure@example.org', 497415);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70010, 'Gunner', 'Ledner', '849552306', 'Bennett Runte', '7881 Hayes Tunnel\nNew Shawnchester, AZ 79943', 'supton@example.org', 4724386033);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70011, 'Ila', 'Purdy', '5235', 'Prof. Alyce Muller V', '33536 Jeanne Parkway\nSouth Reinaview, MD 09045-235', 'nikolas.roob@example.com', 2693256629);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70013, 'Shanel', 'Ratke', '920298', 'Beatrice Stanton II', '51990 Oren Land\nNorth Floyview, NV 35357-9921', 'kaci.little@example.com', 858362);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70014, 'River', 'Rice', '44577230', 'Miss Catherine Jacobs III', '46677 Kali Landing Apt. 360\nRosarioton, MA 66092', 'goyette.shemar@example.com', 608);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70015, 'Alison', 'Huel', '739156657', 'Danika Rutherford IV', '83640 Chesley Via\nMisaelmouth, NC 70239', 'jayce.kreiger@example.net', 993705);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70017, 'Arturo', 'Boehm', '', 'Willard Barrows', '88933 Lesch Turnpike Apt. 446\nTurcotteshire, ME 20', 'whilll@example.com', 6342228515);
INSERT INTO register (`r_id`, `f_name`, `l_name`, `country`, `gender`, `location`, `email`, `mobile_no`) VALUES (70018, 'Felicia', 'Dare', '755', 'Dr. Flossie Green', '160 Shany Common Suite 635\nKlockostad, WI 92788-63', 'fhermann@example.net', 747);


