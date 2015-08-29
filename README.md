## Docker WordPress Seed

### Requirements

* [Docker](https://www.docker.com/)
* [NodeJS 0.12+](nodejs.org)

Docker is used for setting up the php & mysql environment. if possible, it will be a powerful development-deployment pipeline.
The [Docker Machine](https://github.com/docker/machine) will be easy to use the Docker in OS which is not CoreOS.

NodeJS, modern frontend development must to be required. 
The [NVM](https://github.com/creationix/nvm) will be helpful for managing NodeJS environment.

### Usage

Only for Mac OS user, [Homebrew](http://brew.sh/) will be useful to install development tools.

#### Setup Docker Environment

```
$ brew install docker-machine
```

Then. [VirtualBox](https://www.virtualbox.org/wiki/Downloads) are needed too.

```
$ docker-machine create -d virtualbox dev
$ docker-machine env dev
```

If the OS be restarted, re-run:

```
$ docker-machine start dev
$ docker-machine env dev
```

Finally, we can use `docker` now.

#### Node Environment

```
$ brew install nvm
$ nvm install 0.12
```

That's all.

#### Start WordPress and MySQL

[Docker Compose](https://github.com/docker/compose) is a

```
$ brew install docker-compose
```

And path to project folder

```
$ docker-compose build && docker-compose up
```
or
```
$ npm start
```

Enter an docker container

```
$ docker ps
$ docker exec -it <CONTAINER_ID> bash  
```

Notice: docker port forwarding is only about the docker machine and it's containers

If we want to access localhost with some port, 
we need to set the port forwarding in virtual box, 
to make the port could be usable in OS.

```
$ VBoxManage controlvm <DOCKER_MACHINE_NAME> natpf1 "<PORT_NAME>,tcp,127.0.0.1,<PORT>,,<PORT>"
```
We can use like below. if the docker machine is not running, user `modifyvm` instead of `controlvm`

```
$ VBoxManage controlvm dev natpf1 "tcp-port-3306,tcp,127.0.0.1,3306,,3306"
$ VBoxManage controlvm dev natpf1 "tcp-port-8080,tcp,127.0.0.1,8080,,8080"
```

In this project, we could run `./bin/virtualbox-port-forwarding.sh` to fix it.

#### Start Frontend Development

```
$ npm install -g gulp
```

And path to project folder

```
$ npm install 
$ gulp dev
```

Of course, make sure the wordpress and mysql is running.

Then, open <http://127.0.0.1:8080/>