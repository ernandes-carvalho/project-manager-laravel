# README

# Configurações do novo repositorio git

Baixar e instalar o git bash versão 2.14.1 para windows, o programa vai permitir configurar o ambiente
link: https://git-scm.com/downloads
Após fazer a instalação: navegar até a pasta do projeto pelo promp e executar os comando abaixo, tenha certeza que estão dentro do diretório.

git init
git remote add origin '{local onde se encontra o projeto}'
git flow init
git fetch && git checkout master
git push -u origin master
git config core.autocrlf true
git pull

# Comandos Git Bash

# Exemplo - mensagem

git pull => Pegar os arquivos e atualizações do repositório remoto;
git add => Adiciona os arquivos alterados no repositório local para ser enviados ao repositório remoto;
git commit -m "mensagem" => Comita os arquivos que foram adicionados;
git push => Envia as alterações do repositório local para o repositório remoto.

OBS: Os commits devem ser no branch 'develop' e sempre que for executado em um commit é necessário executar o git push.
