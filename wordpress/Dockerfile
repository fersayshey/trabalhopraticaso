MAINTAINER Fernanda <fssilva@inf.ufsm.br>

# Apache
RUN apt-get update
RUN apt-get -y install apache2

# PHP
RUN apt-get -y install python-software-properties
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update
RUN apt-get -y install php7.0
RUN apt-get -y install libapache2-mod-php7.0 php7.0-curl php7.0-json

CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]