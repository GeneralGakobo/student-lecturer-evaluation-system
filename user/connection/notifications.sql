


CREATE TABLE IF NOT EXISTS `inf` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `notifications_name` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `active` varchar(50) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `inf` (`n_id`, `notifications_name`, `message`,`active`) VALUES
('', '', '','');

-- --------------------------------------------------------

