# tarbalho SD em docker 
realizado no ubuntu fossa
Marcelo A.
n1812e-6
SI7P13

## rodando 

### instalaçoes
realizei a intalaçao do node 10 
e dei o comando npm install 
npm init 
e todas dependencias necessarios do node. 
## Construindo as imagens
contrui as imagens 
# mysql
 - realizei o banco mysql , depois criei sua imagem. 
docker build -t mysql-image -f API/db/Dockerfile .

- criei o container mysql,e defini seu armazenamento na pasta db e defini seu nome.  
docker run -d -v $(pwd)/API/db/data:/var/lib/mysql --rm --name mysql-container mysql-image

- executei o banco , para adicionar os dados.
docker exec -i mysql-container mysql -uroot -ptrabalhoSD < API/db/Script2.sql

- pronto container rodando, e dados adicionados ao banco. 

# Node 
- realizei a conexão  de banco de dados entre o node e o banco de dados defini a porta e um select para retornar valores da tabela quarentena , e criei sua imagem.
docker build -t sd-node-image -f API/Dockerfile .

- Criei um container para o node , definindo a porta que foi estabelecida na conexão , e link o container mysql para nao colocar o ip do container. 
docker run -d -v $(pwd)/API:/home/node/app -p 9001:9001 --link mysql-container --rm --name sd-node-container sd-node-image


### php 
- Criei uma pasta chama da website, adicionei o arquivo php.index , realizei um link ao container do node , para exibir o resultado com a conexao com banco, e adicionei a imagem do php.
docker build -t sd-php-image -f website/Dockerfile .
 
 - Criei o container do php definindo a porta , e linkando o container node que ja estava no ar junto com o banco . 
docker run -d -v "$(pwd)/website":/var/www/html -p 8888:80 --link sd-node-container --rm --name sd-php-container sd-php-image

- realizei um arquivo dockerignore para nao haver conflito com a pasta. 