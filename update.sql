use icandy;

alter table produtos add imagem varchar(30);

update produtos set imagem = "./imgs/torta.jpg"
where id_produto = 1;

update produtos set imagem = "./imgs/bolo.jpg"
where id_produto = 2;

update produtos set imagem = "./imgs/bolo2.jpg"
where id_produto = 3;

update produtos set imagem = "./imgs/torta2.jpg"
where id_produto = 4;

update produtos set imagem = "./imgs/cupcake.jpg"
where id_produto = 5;

update produtos set imagem = "./imgs/cupcake2.jpg"
where id_produto = 6;

update produtos set imagem = "./imgs/cheesecake.jpg"
where id_produto = 7;

update produtos set imagem = "./imgs/cheesecake2.png"
where id_produto = 8;

update produtos set imagem = "./imgs/bolo3.jpg"
where id_produto = 9;