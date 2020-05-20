CREATE DATABASE IF NOT EXISTS  trabalhoSD;
USE trabalhoSD;

CREATE TABLE IF NOT EXISTS quarentena (
  id int(14) AUTO_INCREMENT,
  atividade VARCHAR(300),
  descricao VARCHAR(222),
  PRIMARY KEY (id)

);

insert INTO quarentena VALUE(0, 'Sair nos finais de semana', ' regularmente' );

insert INTO quarentena VALUE(0, 'ir para praia', ' regularmente' );

insert INTO quarentena VALUE(0, 'sair mais com os amigos', ' frequentemente' );

insert INTO quarentena VALUE(0, 'beber nos finais de semana', ' as vezes' );

insert INTO quarentena VALUE(0, 'passar em todas as materias', ' prioridade' );

insert INTO quarentena VALUE(0, 'finalizar meu TCC', ' prioridade' );

insert INTO quarentena VALUE(0, 'andar na rua sem mascara', ' todo dia' );

insert INTO quarentena VALUE(0, 'comprar roupas novas', ' prioridade' );

insert INTO quarentena VALUE(0, 'fazer dieta', ' necessidade' );

insert INTO quarentena VALUE(0, 'cortar o cabelo', ' prioridade' );












