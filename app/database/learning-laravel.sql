create table if not exists users(
    `id` int(11) unsigned primary key auto_increment,
    `username` varchar(50) unique not null,
    `password` varchar(255) not null
) ENGINE=InnoDB;
