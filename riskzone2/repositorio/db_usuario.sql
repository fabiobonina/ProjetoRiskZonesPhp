CREATE TABLE usuarios(
    id int(6) NOT NULL auto_increment,
    nome varchar(100) NOT NULL default '',
    email varchar(100) NOT NULL default '',
    usuario varchar(32) NOT NULL default '',
    senha varchar(32) NOT NULL default '',
    sexo varchar(32) NOT NULL default '',
    raca varchar(32) NOT NULL default '',
    data_nascimento datetime NOT NULL default '0000-00-00 00:00:00',
    data_cadastro datetime NOT NULL default '0000-00-00 00:00:00',
    data_ultimo_login datetime NOT NULL default '0000-00-00 00:00:00',
    nivel_usuario enum('0','1','2') NOT NULL default '0',
    ativado enum('0','1') NOT NULL default '0',
    PRIMARY KEY  (id)
)