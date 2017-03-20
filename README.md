# NPS Survay

This project contains configuration of "NPS Survay System". Net Promoter Score (NPS) is a management tool that can be used to gauge the loyalty of a company's customer relationships. 

## How To Setup:

1.  Install latest docker (if you already don't have it e.g `curl -fsSL https://get.docker.com | sh` ).
2.  Pull the latest image from docker hub using, `docker pull sany2k8/nps-survay-php7-apache`
3.  Clone the Repo using, `git clone https://github.com/sany2k8/nps-survay-app.git`
4.  Go to project directory using `cd nps-survay-app`
5.  Run the container using, `docker run -d --name nps-survay-app -p 80:80 -v $(pwd):/var/www/html sany2k8/nps-survay-php7-apache`
6.  Change permissions for **assets** and **runtime** directory using, `sudo chmod 777 assets protected/runtime -R` 
7.  Check the container IP using, `docker inspect --format '{{ .NetworkSettings.IPAddress }}' nps-survay-app`
8.  Browser URL like,  http://your.container.ip:80 e.g: http://172.17.0.2:80

## Using Build:

If you want to build from `Dockerfile` then try this way, 

`$ docker build -t sany2k8/nps-survay-app .`

`$ docker run -d sany2k8/nps-survay-app`



**N.B** :  The best practice for docker container running is to use **ENV** variables e.g `docker run -d --name nps-survay-app -e DB_HOST='54.255.176.74' -e DB_PORT='5432' -p 80:80 -v $(pwd):/var/www/html sany2k8/nps-survay-php7-apache`


## How To Use:

### Survay

**Add Survay:** Store customer satisfaction research data.

**Manage Survay:** Manage survay data with some basic CRUD (create, read, update & delete) functionality.

### User

**Add User:** Create new user who is going to manage this NPS system from backend.

**View User:** Manage all the currently existing users of this NPS system.
