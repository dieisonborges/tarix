# Tarix | Gestão Pública Inteligente
> Sistema de Tarifação Telefônica, Gestão de Energia Elétrica e Água e Esgoto para órgãos públicos.

## Tecnologias:
- PHP version 7.2.7
- Laravel
- Vagrant version 2.1.2
- Git version 2.17.1

### Sistema Operacional recomendado para desenvolvedores do projeto:
#### Ubuntu 18.04 LTS

## 1 - Configurando sua Homestead Laravel

### Instale o VirtualBox
_Para mais exemplos e uso, por favor consulte o [VirtualBox][https://www.virtualbox.org/]._

```sh
$ sudo apt-get install virtualbox
```
### Instale o Vagrant
_Para mais exemplos e uso, por favor consulte o [Vagrant][https://www.vagrantup.com/downloads.html]._

```sh
$ sudo dpkg -i ~/Downloads/vagrant_2.1.2_x86_64.deb
```
### Instale o GIT
_Para mais exemplos e uso, por favor consulte o [GIT][https://git-scm.com/]._

```sh
$ sudo apt-get install git
```
### Verifique se o Vagrant foi instaldo corretamente, bem como sua versão

```sh
$ vagrant -v
Vagrant 2.1.2
```
### Verifique se o Vagrant foi instaldo corretamente, bem como sua versão

```sh
$ vagrant -v
Vagrant 2.1.2
```

### Verifique se o GIT foi instaldo corretamente, bem como sua versão

```sh
$ git --version
git version 2.17.1
```

### Baixe e instale a máquina virtual (homestead), com os recursos para Laravel, pré-configurados.

```sh
$ vagrant box add laravel/homestead
```
### Escolha o provider, que é o sistema de virtualização que você irá utilizar.

```sh
$ vagrant box add laravel/homestead
==> box: Loading metadata for box 'laravel/homestead'
    box: URL: https://vagrantcloud.com/laravel/homestead
==> box: Adding box 'laravel/homestead' (v6.2.0) for provider: vmware_desktop
    box: Downloading: https://vagrantcloud.com/laravel/boxes/homestead/versions/6.2.0/providers/vmware_desktop.box
==> box: Box download is resuming from prior download progress
==> box: Successfully added box 'laravel/homestead' (v6.2.0) for 'vmware_desktop'!
```

### Verifique a instalação da Homestead (VM VirtualBox) para Laravel

```sh
$ vagrant box list
laravel/homestead (virtualbox, 6.0.0)
```

### Clone as configurações da Homestead para Laravel utilizando o repósitório do Github indicado

```sh
git clone https://github.com/laravel/homestead.git Homestead
Cloning into 'Homestead'...
remote: Counting objects: 3010, done.
remote: Compressing objects: 100% (6/6), done.
remote: Total 3010 (delta 1), reused 3 (delta 1), pack-reused 3002
Receiving objects: 100% (3010/3010), 624.04 KiB | 1.40 MiB/s, done.
Resolving deltas: 100% (1787/1787), done.
```

### Abra a pasta da HOMESTEAD e inicialize as configurações

```sh
$ cd Homestead
$ ./init.sh 
Homestead initialized!
```

### Edite o arquivo Homestead.yaml

```sh
$ nano Homestead.yaml
```

### Configurando as chaves SSH
### Responda as perguntas para gerar a chave ou
### crie um par de chaves sem frase de segurança

```sh
$ cd ~
$ ssh-keygen -t rsa -C "seuemail@seuprovedor.com"
Generating public/private rsa key pair.
Enter file in which to save the key (/home/usuario/.ssh/id_rsa): 
Enter passphrase (empty for no passphrase): 
Enter same passphrase again: 
Your identification has been saved in /home/usuario/.ssh/id_rsa.
Your public key has been saved in /home/usuario/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:giX+kKCdv5ci7cRTOj9j/nZa+HFqEylYrSGAvKPVr10 seuemail@seuprovedor.com
The key's randomart image is:
+---[RSA 2048]----+
| . .             |
|  o .            |
|    .o.. .       |
|     o. o .      |
|   .o=.oSo .     |
|.  o =o.E.o      |
|     .o..o..     |
|   .     +       |
|    o=o=o+o.     |
+----[SHA256]-----+

```
### Adicione no arquivo Homestead.yaml as configurações de acesso via browser do projeto

```sh
sites:
    - map: nomeprojeto.test
      to: /home/vagrant/Sites/nomeprojeto/public
```

### Modifique as linhas do Homestead.yaml para que as pastas da máquina virtual e sua máquina real estejam sincronizadas
### Observe que map é sua máquina real e to é sua máquina virtual

```sh
nano ~/Homestead/Homestead.yaml
```

```sh

folders:
    - map: ~/Sites
      to: /home/vagrant/Sites
      
```
### Modifique as linhas do Homestead.yaml para configurar o nome do banco de dados

    
```sh
nano ~/Homestead/Homestead.yaml
```

```sh
databases:
    - nomedobanco      
```

### Exemplo de Homestead.yaml

```sh
---
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: ~/Sites
      to: /home/vagrant/Sites

sites:
    - map: nomeprojeto.test
      to: /home/vagrant/Sites/nomeprojeto/public

databases:
    - nomedobanco

# blackfire:
#     - id: foo
#       token: bar
#       client-id: foo
#       client-token: bar

# ports:
#     - send: 50000
#       to: 5000
#     - send: 7777
#       to: 777
#       protocol: udp
```

## 2 - Inicializando e utilizando sua Homestead Laravel

### Inicialize a Homestead

```sh
$ cd ~/Homestead/
$ vagrant up
Bringing machine 'homestead-7' up with 'virtualbox' provider...
==> homestead-7: Checking if box 'laravel/homestead' is up to date...
==> homestead-7: A newer version of the box 'laravel/homestead' for provider 'virtualbox' is
==> homestead-7: available! You currently have version '6.0.0'. The latest is version
==> homestead-7: '6.1.0'. Run `vagrant box update` to update.
==> homestead-7: Clearing any previously set forwarded ports...
==> homestead-7: Clearing any previously set network interfaces...
==> homestead-7: Preparing network interfaces based on configuration...
    homestead-7: Adapter 1: nat
    homestead-7: Adapter 2: hostonly
==> homestead-7: Forwarding ports...
    homestead-7: 80 (guest) => 8000 (host) (adapter 1)
    homestead-7: 443 (guest) => 44300 (host) (adapter 1)
    homestead-7: 3306 (guest) => 33060 (host) (adapter 1)
    homestead-7: 4040 (guest) => 4040 (host) (adapter 1)
    homestead-7: 5432 (guest) => 54320 (host) (adapter 1)
    homestead-7: 8025 (guest) => 8025 (host) (adapter 1)
    homestead-7: 27017 (guest) => 27017 (host) (adapter 1)
    homestead-7: 22 (guest) => 2222 (host) (adapter 1)
==> homestead-7: Running 'pre-boot' VM customizations...
==> homestead-7: Booting VM...
==> homestead-7: Waiting for machine to boot. This may take a few minutes...
    homestead-7: SSH address: 127.0.0.1:2222
    homestead-7: SSH username: vagrant
    homestead-7: SSH auth method: private key
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
    homestead-7: Warning: Connection reset. Retrying...
    homestead-7: Warning: Remote connection disconnect. Retrying...
==> homestead-7: Machine booted and ready!
==> homestead-7: Checking for guest additions in VM...
==> homestead-7: Setting hostname...
==> homestead-7: Configuring and enabling network interfaces...
==> homestead-7: Mounting shared folders...
    homestead-7: /vagrant => /home/usuario/Homestead
    homestead-7: /home/vagrant/Sites => /home/usuario/Sites
==> homestead-7: Machine already provisioned. Run `vagrant provision` or use the `--provision`
==> homestead-7: flag to force provisioning. Provisioners marked to run always will still run.
```

### Conectando a máquina virtual (HOMESTEAD) laravel via vagrant

```sh
$ cd ~/Homestead/
$ vagrant ssh
Welcome to Ubuntu 18.04 LTS (GNU/Linux 4.15.0-20-generic x86_64)

 * Documentation:  https://help.ubuntu.com
 * Management:     https://landscape.canonical.com
 * Support:        https://ubuntu.com/advantage

  System information as of Fri Aug  3 19:32:34 UTC 2018

  System load:  0.08              Processes:           121
  Usage of /:   8.2% of 61.80GB   Users logged in:     0
  Memory usage: 19%               IP address for eth0: 10.0.2.15
  Swap usage:   0%                IP address for eth1: 192.168.10.10

 * Introducing Minimal Ubuntu for docker and clouds. 30 MB base image and
   optimised kernels on public clouds. Made for machines and containers.

   - https://bit.ly/minimal-ubuntu

 * Canonical Livepatch is available for installation.
   - Reduce system reboots and improve kernel security. Activate at:
     https://ubuntu.com/livepatch

0 packages can be updated.
0 updates are security updates.


Last login: Sat Jun  2 02:55:15 2018 from 10.0.2.2
```

### Verifique utilizando o composer se a Homestead realmente está instalado e configurado o LARAVEL

```sh
$ composer global require laravel/installer
Changed current directory to /home/vagrant/.composer
Using version ^2.0 for laravel/installer
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Nothing to install or update
Generating autoload files

```

### Criando um novo projeto LARAVEL dentro da Homestead

```sh
$ cd ~/Sites/
$ laravel new nomedoprojeto
Crafting application...
Loading composer repositories with package information
Installing dependencies (including require-dev) from lock file
Package operations: 70 installs, 0 updates, 0 removals
  - Installing doctrine/inflector (v1.3.0): Loading from cache
  - Installing doctrine/lexer (v1.0.1): Downloading (100%)         
  - Installing dragonmantank/cron-expression (v2.2.0): Downloading (100%)         
  - Installing erusev/parsedown (1.7.1): Downloading (100%)         
  - Installing vlucas/phpdotenv (v2.5.1): Downloading (100%)  
  .
  .
  .
  - Installing myclabs/deep-copy (1.8.1): Downloading (100%)         
  - Installing phpunit/phpunit (7.3.0): Downloading (100%)         
symfony/routing suggests installing doctrine/annotations (For using the annotation loader)
symfony/routing suggests installing symfony/config (For using the all-in-one router or any loader)
symfony/routing suggests installing symfony/dependency-injection (For loading routes from a service)
symfony/routing suggests installing symfony/expression-language (For using expression matching)
symfony/routing suggests installing symfony/yaml (For using the YAML loader)
symfony/event-dispatcher suggests installing symfony/dependency-injection ()
symfony/http-kernel suggests installing symfony/browser-kit ()
symfony/http-kernel suggests installing symfony/config ()
symfony/http-kernel suggests installing symfony/dependency-injection ()
symfony/console suggests installing symfony/lock ()
.
.
.
psy/psysh suggests installing ext-pdo-sqlite (The doc command requires SQLite to work.)
psy/psysh suggests installing hoa/console (A pure PHP readline implementation. You'll want this if your PHP install doesn't already support readline or libedit.)
filp/whoops suggests installing whoops/soap (Formats errors as SOAP responses)
sebastian/global-state suggests installing ext-uopz (*)
phpunit/php-code-coverage suggests installing ext-xdebug (^2.6.0)
phpunit/phpunit suggests installing ext-xdebug (*)
phpunit/phpunit suggests installing phpunit/php-invoker (^2.0)
Generating optimized autoload files
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
> @php artisan key:generate
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
Application ready! Build something amazing.  
```

### Configure o arquivo de hosts para criar a rota via nome
### Adicione a rota ao arquivo

```sh
$ sudo nano /etc/hosts
```


```sh
#Homestead LARAVEL
192.168.10.10   nomeprojeto.test
```

### Reinicie o Vagrant para atulizar as configurações

```sh
$ vagrant reload --provision
```

### Para desligar a homestead utilize

```sh
$ vagrant halt
```
## 3 - Criando páginas

### Para criar um controller utilizando o artisan

```sh
$ php artisan make:controller NomeController
Controller created successfully.
```



$ php artisan migrate:install
Migration table created successfully.

## Contribuindo

1. Faça o Fork (<https://github.com/dieisonborges/tarix/fork>)
2. Crtie um branch (`git checkout -b feature/fooBar`)
3. Commit suas alterações (`git commit -am 'Add some fooBar'`)
4. Envie o branch (`git push origin feature/fooBar`)
5. Crie um novo Pull Request


  
  
  

