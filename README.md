# NPS Survay

This project contains configuration of "NPS Survay System". Net Promoter Score (NPS) is a management tool that can be used to gauge the loyalty of a company's customer relationships. 

## How To Setup:

1.  Install latest docker (if you already don't have it)
2.  Pull the latest image from docker hub using  `docker pull sany2k8/nps-survay-php7-apache`
3.  git clone https://github.com/sany2k8/nps-survay-app.git
4.  `cd nps-survay-app`
5.  `docker run -d --name nps-survay-app -e DB_HOST='54.255.176.74' -e DB_PORT='5432' -v $(pwd):/var/www/html sany2k8/nps-survay-php7-apache`
6.  `docker inspect --format '{{ .NetworkSettings.IPAddress }}' nps-survay-app`
7.  http://your.container.ip:80 e.g: http://172.17.0.2:80

## How To Use:

# Survay
**Add Survay:** Store customer satisfaction research data.

**Manage Survay:** Manage survay data with some basic CRUD (create, read, update & delete) functionality.

# User

**Add User:** Create new user who is going to manage this NPS system from backend.

**View User:** Manage all the currently existing users of this NPS system.
