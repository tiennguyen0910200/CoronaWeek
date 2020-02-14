drop database if exists CoronaDatabase;
create database CoronaDatabase;
use CoronaDatabase;

create table Inf(
id int auto_increment primary key,
names varchar(255),
percent float,
img varchar(255),
price float
);
insert into Inf value(1,"Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU",28,"../Database/mln.jpg","11500000"),
                     (2,"Máy lọc nước Kangaroo Hydrogen KG100HG không vỏ",34,"../Database/mln2.jpg","9100000"), 
                     (3,"Máy lọc nước Kangaroo Hydrogen KG100HB vỏ tủ VTU",33,"../Database/mln3.jpg","9700000");

