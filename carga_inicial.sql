
SELECT * from tipo_moto;

INSERT INTO tipo_moto VALUES (3, "Ciudad", 15);

CREATE TABLE IF NOT EXISTS moto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    color VARCHAR(255) NOT NULL,
    tanque INT NOT NULL,
    cilindrada INT NOT NULL,
    id_tipo_moto int NOT NULL
)

drop table moto

select * from moto

insert into moto (color, tanque, cilindrada, id_tipo_moto) values ("rojo", 15, 250, 1 ), ("verde", 13, 200, 3), ("negro", 20, 300, 2)

select * from moto

alter table moto ADD CONSTRAINT 'fk_moto_tipo_moto' FOREIGN KEY (`id_tipo_moto`) REFERENCES `tipo_moto` (`id`) ON DELETE restrict ON UPDATE restrict;

update moto set color= 'verde' where id = 1
update moto set color= 'rojo' where id = 1

delete from moto where id =1

select * from moto

insert into moto(color, tanque, cilindrada, id_tipo_moto) values('rojo', 15, 250,1)
 
CREATE TABLE IF NOT EXISTS usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(255) NOT NULL,
    contrasenia VARCHAR (255) NOT NULL
)

alter table moto ADD CONSTRAINT 'fk_moto_tipo_moto' FOREIGN KEY (`id_tipo_moto`) REFERENCES `tipo_moto` (`id`) ON DELETE restrict ON UPDATE restrict;




