create table funcionario(
	id int auto_increment not null,
	nome text not null,
    cpf text not null,
    email text not null,
    senha text not null,
    data_nascimento text not null,
    data_admissao text not null,
	primary key(id)
);
create table batida(
	id int auto_increment not null,
	id_funcionario int not null,
	horario text not null,
	data_batida text not null,
	primary key(id)
);



php artisan make:migration create_funcionario_table  --create=funcionario
php artisan make:migration create_batida_table  --create=batida

