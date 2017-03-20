FROM sany2k8/nps-survay-php7-apache
MAINTAINER Sany Ahmed <sany2k8@gmail.com>

COPY . /var/www/html/
COPY apache2.conf /etc/apache2/apache2.conf

# Enable apache mods.
RUN a2enmod php7.0
RUN a2enmod rewrite

RUN chmod -R 744 /var/www/html/ && \
    chown www-data -R /var/www/html/ && \
    chown www-data -R /var/www/html/assets && \
    chown www-data -R /var/www/html/protected/runtime

RUN rm -rf /var/www/html/index.html

# Expose apache.
EXPOSE 80


# By default start up apache in the foreground, override with /bin/bash for interative.
CMD /usr/sbin/apache2ctl -D FOREGROUND
