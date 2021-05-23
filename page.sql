drop database page;
CREATE database page;
USE page;

CREATE table users (
id int unsigned primary key auto_increment,
name varchar (255) not null default '',
email varchar (255) unique not null,
password varchar (255),
time_created timestamp
);

CREATE table info (
id int unsigned primary key auto_increment,
year int,
month int,
ip varchar (255),
button_id int,
count_of_clicks int,
time_created timestamp
);

INSERT INTO `users` (`name`, `email`, `password`)
VALUES
('admin', 'admin@gmail.com', 'admin');

INSERT INTO `info` (`year`, `month`, `ip`, `button_id`, `count_of_clicks`)
VALUES
('1996', '01', '10.6.92.135', '5', '1'),
('1936', '02', '10.6.92.235', '2', '5' ),
('1986', '03', '10.6.92.135', '3', '7' ),
('2001', '04', '10.6.92.145', '4', '11' ),
('2020', '05', '10.6.92.135', '5', '50' ),
('1786', '06', '10.6.92.136', '6', '534' ),
('1986', '09', '10.6.92.137', '7', '4555' );