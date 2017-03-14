# NPS Survay
This project contains configuration of "NPS Survay System"

## How To Use:

1.  Install latest docker (if you already don't have it)
2.  Pull the latest image from docker hub using  docker pull sany2k8/nps-survay-php7-apache
3.  git clone https://github.com/sany2k8/nps-survay-app.git
4.  cd nps-survay-app
5.  docker run -d --name nps-survay-app -v $(pwd):/var/www/html sany2k8/nps-survay-php7-apache
6.  docker inspect --format '{{ .NetworkSettings.IPAddress }}' nps-survay-app
7.  http://your.container.ip:80 e.g: http://172.17.0.2:80
