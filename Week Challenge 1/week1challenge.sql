CREATE TABLE products
  (name char(40),
   description char(60),
   price decimal(10, 2),
   imageurl char(50),
   primary key (name)
   );
   
INSERT INTO products VALUES ('Eggs','A bunch of eggs','6.99','eggs.jpg');
INSERT INTO products VALUES ('Apple','An apple','1.99','apple.jpg');