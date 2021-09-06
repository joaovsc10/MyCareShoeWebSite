CREATE TABLE `log_table` (
`table_name` TEXT NOT NULL ,
`tracking_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`data_id` INT NOT NULL ,
`field` VARCHAR( 50 ) NOT NULL ,
`old_value` TEXT NOT NULL ,
`new_value` TEXT NOT NULL ,
`modified` DATETIME NOT NULL
) ENGINE = MYISAM ;

DELIMITER $$


CREATE TRIGGER `update_data11` AFTER UPDATE on `login_signup`
FOR EACH ROW
BEGIN
     IF (NEW.id != OLD.id) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "id", OLD.id, NEW.id, NOW());
    END IF;

    IF (NEW.username != OLD.username) THEN
        INSERT INTO log_table
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "username", OLD.username, NEW.username, NOW());
    END IF;

     IF (NEW.email != OLD.email) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "email", OLD.email, NEW.email, NOW());
    END IF;

    IF (NEW.created != OLD.created) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "created", OLD.created, NEW.created, NOW());
    END IF;
    
    IF (NEW.modified != OLD.modified) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "modified", OLD.modified, NEW.modified, NOW());
    END IF;

    IF (NEW.nome != OLD.nome) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "nome", OLD.nome, NEW.nome, NOW());
    END IF;

    IF (NEW.idade != OLD.idade) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "idade", OLD.idade, NEW.idade, NOW());
    END IF;

    IF (NEW.password != OLD.password) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "password", OLD.password, NEW.password, NOW());
    END IF;

    IF (NEW.funcao_id != OLD.funcao_id) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "funcao_id", OLD.funcao_id, NEW.funcao_id, NOW());
    END IF;

    IF (NEW.status != OLD.status) THEN
        INSERT INTO log_table 
            (`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("login_signup",NEW.id, "status", OLD.status, NEW.status, NOW());
    END IF;
END$$
DELIMITER ;





DELIMITER $$


CREATE TRIGGER `update_data21` AFTER UPDATE on `funcao`
FOR EACH ROW
BEGIN
     
     IF (NEW.funcao_id != OLD.funcao_id) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("funcao",NEW.funcao_id, "id", OLD.funcao_id, NEW.funcao_id, NOW());
    END IF;

     IF (NEW.funcao != OLD.funcao) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("funcao",NEW.funcao_id, "id", OLD.funcao, NEW.funcao, NOW());
    END IF;
END$$
DELIMITER ;





DELIMITER $$


CREATE TRIGGER `update_data31` AFTER UPDATE on `imagens`
FOR EACH ROW
BEGIN
     
     IF (NEW.id_imagem != OLD.id_imagem) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens",NEW.id_imagem, "id", OLD.id_imagem, NEW.id_imagem, NOW());
    END IF;

     IF (NEW.id_paciente != OLD.id_paciente) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens",NEW.id_imagem, "id", OLD.id_paciente, NEW.id_paciente, NOW());
    END IF;

    IF (NEW.nome_imagem != OLD.nome_imagem) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens",NEW.id_imagem, "id", OLD.nome_imagem, NEW.nome_imagem, NOW());
    END IF;

    IF (NEW.imagem != OLD.imagem) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens",NEW.id_imagem, "id", OLD.imagem, NEW.imagem, NOW());
    END IF;

    IF (NEW.data_hora != OLD.data_hora) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens",NEW.id_imagem, "id", OLD.data_hora, NEW.data_hora, NOW());
    END IF;
END$$
DELIMITER ;





DELIMITER $$
CREATE TRIGGER `update_data41` AFTER UPDATE on `imagens_feedback`
FOR EACH ROW
BEGIN
     
     IF (NEW.id_feedback != OLD.id_feedback) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens_feedback",NEW.id_feedback, "id", OLD.id_feedback, NEW.id_feedback, NOW());
    END IF;

     IF (NEW.id_imagem != OLD.id_imagem) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens_feedback",NEW.id_feedback, "id", OLD.id_imagem, NEW.id_imagem, NOW());
    END IF;

    IF (NEW.id_medico != OLD.id_medico) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens_feedback",NEW.id_imagem, "id", OLD.id_medico, NEW.id_medico, NOW());
    END IF;

    IF (NEW.comentario != OLD.comentario) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens_feedback",NEW.id_imagem, "id", OLD.comentario, NEW.comentario, NOW());
    END IF;

    IF (NEW.data_hora != OLD.data_hora) THEN
        INSERT INTO log_table 
            (`table_name`,`data_id` , `field` , `old_value` , `new_value` , `modified` ) 
        VALUES 
            ("imagens_feedback",NEW.id_imagem, "id", OLD.data_hora, NEW.data_hora, NOW());
    END IF;
END$$
DELIMITER ;