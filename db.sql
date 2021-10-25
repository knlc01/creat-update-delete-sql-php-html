create table `persons`(
    `id` int not null,
    `name` varchar(20) not null,
    `lastName` varchar(50) not null,
    `age` int not null
);

insert into `persons`(`id`,`name`,`lastName`,`age`) VALUES (1,"Kevin Nicolas","Lopez Cordoba",26);