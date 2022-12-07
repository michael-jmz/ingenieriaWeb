
CREATE TABLE mastocas (
                mascota_id INT AUTO_INCREMENT NOT NULL,
                nombre VARCHAR(30) NOT NULL,
                edad INT NOT NULL,
                raza VARCHAR(30) NOT NULL,
                PRIMARY KEY (mascota_id)
);


CREATE TABLE personal (
                persona_id INT AUTO_INCREMENT NOT NULL,
                nombre VARCHAR(50) NOT NULL,
                apellido VARCHAR(50) NOT NULL,
                direccion VARCHAR(100) NOT NULL,
                correo VARCHAR(50) NOT NULL,
                cedula INT NOT NULL,
                PRIMARY KEY (persona_id)
);


CREATE TABLE mascota_personal (
                mascota_peronsal_id INT AUTO_INCREMENT NOT NULL,
                mascota_id INT NOT NULL,
                persona_id INT NOT NULL,
                PRIMARY KEY (mascota_peronsal_id)
);


ALTER TABLE mascota_personal ADD CONSTRAINT mastocas_mascota_personal_fk
FOREIGN KEY (mascota_id)
REFERENCES mastocas (mascota_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE mascota_personal ADD CONSTRAINT personal_mascota_personal_fk
FOREIGN KEY (persona_id)
REFERENCES personal (persona_id)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
