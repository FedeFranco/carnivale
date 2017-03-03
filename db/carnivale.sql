drop table if exists usuarios cascade;

create table usuarios (
    id         bigserial    constraint pk_usuarios primary key,
    nombre     varchar(15)  not null constraint uq_usuarios_nombre unique,
    password   varchar(60)  not null,
    email      varchar(255) not null,
    token      varchar(32),
    activacion varchar(32),
    created_at timestamptz  default current_timestamp
);

drop table if exists agrupaciones cascade;
create table agrupaciones(
    id bigserial constraint pk_agrupaciones primary key,
    nombre varchar(20) not null,
    descripcion text,
    anio_ac date default current_date,
    categoria_id bigint constraint fk_agrupaciones_categorias references categorias(id)
                    on delete no action on update cascade
);

drop table if exists categorias cascade;
create table categorias(
    id bigserial constraint pk_categorias primary key,
    nombre_categoria varchar(12) not null
);
