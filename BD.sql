--TABLA PARA EL LOGUIN Y REGISTRO
CREATE TABLE administradores(  
    id_user int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    user_adm VARCHAR (50),
    pass_adm VARCHAR(50)
);

--PROCEDURE CUSTOMERS
DELIMITER $$

CREATE PROCEDURE selec_customers()
BEGIN
  SELECT * FROM customers;
END$$

CALL selec_customers(); 
