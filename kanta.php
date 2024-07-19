<?php

DROP TABLE IF EXISTS tarjouspyynto;

CREATE TABLE tarjouspyynto (
idpyynto        INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nimi            VARCHAR(50),
puhelinnumero   VARCHAR(20), -- Lisää tämä sarake
email           VARCHAR(50) NOT NULL,
viesti          TEXT,
lahetetty TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
  






GRANT SELECT, INSERT, UPDATE, DELETE ON elokuvat TO 'db_lsaarinen'@'localhost','db_kseppone'@'localhost';
GRANT SELECT, INSERT, UPDATE, DELETE ON elokuvat TO 'db_kseppone'@'localhost';


GRANT INSERT ON kseppone.tarjouspyynto TO 'db_kseppone'@'localhost';
FLUSH PRIVILEGES;


?>