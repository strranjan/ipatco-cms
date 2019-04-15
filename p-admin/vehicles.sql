CREATE TABLE `vehicles` (
  `vehicles_id` int(11) NOT NULL,
  `vehicles_post` int(11) NOT NULL,
  `vehicles_for` varchar(20) NOT NULL,
  `vehicles_type` int(11) NOT NULL,
  `vehicles_company` int(11) NOT NULL,
  `vehicles_model` int(11) NOT NULL,
  `vehicles_description` text NOT NULL,
  `vehicles_engine` int(11) DEFAULT NULL,
  `vehicles_varient` varchar(100) DEFAULT NULL,
  `vehicles_insurance` varchar(50) DEFAULT NULL,
  `vehicles_km` int(11) DEFAULT NULL,
  `vehicles_ownership` varchar(50) DEFAULT NULL,
  `vehicles_fuel` varchar(50) DEFAULT NULL,
  `vehicles_body` varchar(50) DEFAULT NULL,
  `vehicles_transmission` varchar(50) DEFAULT NULL,
  `vehicles_launched_year` int(11) DEFAULT NULL,
  `vehicles_color` varchar(50) DEFAULT NULL,
  `vehicles_price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicles_id`);

ALTER TABLE `vehicles`
  MODIFY `vehicles_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;