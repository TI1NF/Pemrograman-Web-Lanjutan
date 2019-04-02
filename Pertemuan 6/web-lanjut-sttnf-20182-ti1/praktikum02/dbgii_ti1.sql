CREATE database dbgii_ti1;

use dbgii_ti1;

CREATE TABLE category (
id int primary key auto_increment,
title varchar(255) NOT NULL,
description varchar(255) NOT NULL,
created_at int,
updated_at int,
created_by int,
updated_by int
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
