Use master
go

create database Haitianite
go

Use haitianite
go

drop table publicaciones
drop table comentarios
drop table publike
--drop table comentarios

--Creando la tabla Usuarios
Create table usuarios (user_id int identity primary key, username varchar(30),user_nombre varchar(30),
	user_apellido varchar(30), user_mail varchar(50))
go

--Creando la tabla publicaciones
Create table publicaciones (pub_id int identity primary key, pub_cat varchar(30) not null,
	pub_text varchar(500), pub_img varchar(30), pub_date datetime)
go

--Creando la tabla Comentarios
Create table comentarios (comment_id int identity primary key, pub_id int not null,
	user_id int not null, content varchar(255), comment_date datetime,
		foreign key(pub_id) references publicaciones (pub_id),
			foreign key(user_id) references usuarios (user_id) 
)
go

--Creando la tabla me gusta de publicaciones
Create table publike (pub_id int not null, user_id int not null, like_date datetime
	primary key(pub_id, user_id), foreign key(pub_id) references publicaciones (pub_id),
		foreign key(user_id) references usuarios (user_id) )
go

insert into publicaciones (pub_cat, pub_img) values ('Education','Mandela', getdate())
insert into publicaciones (pub_cat, pub_img) values ('Education','Malcolm', getdate())
insert into publicaciones (pub_cat, pub_img) values ('Education','Aristotle', getdate())
insert into publicaciones (pub_cat, pub_img) values ('Education','MartinLuterKing', getdate())
insert into publicaciones (pub_cat, pub_img) values ('Humour','Bekann', getdate())
insert into publicaciones (pub_cat, pub_img) values ('Humour','stad', getdate())