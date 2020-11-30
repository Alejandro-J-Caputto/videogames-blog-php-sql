insert into entradas values (null, 6, 7, 'League Of Legends', 'League of Legends (also known by its acronym LoL) is a video game of
the multiplayer online battle arena (MOBA) and electronic sport genre which was developed by Riot Games for Microsoft Windows and OS X', curdate());

insert into entradas values 
(null, 5, 3, 
'GTA V', 
'Grand Theft Auto V (abbreviated as GTA V or GTA 5) is an open-world action-adventure video game developed by Rockstar North studio and distributed by Rockstar Games.',
 curdate());

 insert into entradas values 
(null, 4, 2, 
'Assassins Creed Valhalla', 
"Assassin's Creed Valhalla is a video game developed by Ubisoft Montreal and published by Ubisoft. It is the twelfth in importance and the twenty-second released within the Assassin Creed saga, and successor to the 2018 Assassin's Creed Odyssey game.",
 curdate());

 
 insert into entradas values 
(null, 3, 6, 
'FIFA 21', 
"FIFA 21 es un videojuego de simulación de fútbol del año 2020 disponible para Microsoft Windows, PlayStation 4, Xbox One y Nintendo Switch el 9 de octubre de 2020, y aparte es el primer videojuego de la serie FIFA para Google Stadia, PlayStation 5 y Xbox Series X|S.",
 curdate());

 "select usuarios.nombre, categorias.nombre, entradas.id, entradas.descripcion, entradas.titulo, entradas.fecha from entradas inner join usuarios on usuarios.id = entradas.usuario_id  inner join categorias on categorias.id = entradas.categoria_id";