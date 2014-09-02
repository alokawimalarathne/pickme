
-- Table structure for table `pi_user`
--

CREATE TABLE IF NOT EXISTS `pi_user` (
  `us_id` int(10) NOT NULL,
  `us_reg_no` int(10) NOT NULL,
  `us_first_name` varchar(50) NOT NULL,
  `us_last_name` varchar(50) DEFAULT NULL,
  `us_email` varchar(50) NOT NULL,
  `us_password` varchar(10) NOT NULL,
  `us_confirmed` varchar(10) NOT NULL,
  `us_tp_no_land` int(10) DEFAULT NULL,
  `us_tp_no_mobile` int(10) DEFAULT NULL,
  `us_created` bigint(10) NOT NULL,
  `us_modified` bigint(10) NOT NULL,
  `us_session` varchar(40) NOT NULL,
  `us_city` varchar(20) NOT NULL,
  `us_first_access` bigint(10) NOT NULL,
  `us_last_access` bigint(10) NOT NULL,
  `us_url` varchar(30) NOT NULL,
  `us_picture` varchar(255) DEFAULT NULL,
  `us_discription1` varchar(255) NOT NULL,
  `us_discription2` varchar(255) NOT NULL,
  `us_ip` varchar(20) NOT NULL,
  `us_deleted` tinyint(1) NOT NULL,
  `us_policy_agreed` tinyint(1) NOT NULL,
  `us_visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
