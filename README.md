# Tarix | Gestão Pública Inteligente
> Sistema de Tarifação Telefônica, Gestão de Energia Elétrica e Água e Esgoto para órgãos públicos.

## Tecnologias:
- PHP 7.2.7
- Laravel
- Vagrant
- Git

### Sistema Operacional recomendado para desenvolvedores do projeto:
#### Ubuntu 18.04 LTS

## Configurando sua Homestead

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
vagrant box add laravel/homestead
==> box: Loading metadata for box 'laravel/homestead'
    box: URL: https://vagrantcloud.com/laravel/homestead
==> box: Adding box 'laravel/homestead' (v6.2.0) for provider: vmware_desktop
    box: Downloading: https://vagrantcloud.com/laravel/boxes/homestead/versions/6.2.0/providers/vmware_desktop.box
==> box: Box download is resuming from prior download progress
==> box: Successfully added box 'laravel/homestead' (v6.2.0) for 'vmware_desktop'!
```


## Contribuindo

1. Faça o Fork (<https://github.com/dieisonborges/tarix/fork>)
2. Crtie um branch (`git checkout -b feature/fooBar`)
3. Commit suas alterações (`git commit -am 'Add some fooBar'`)
4. Envie o branch (`git push origin feature/fooBar`)
5. Crie um novo Pull Request


  
  
  

