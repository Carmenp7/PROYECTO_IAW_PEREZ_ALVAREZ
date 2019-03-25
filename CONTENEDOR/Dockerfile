FROM iestriana/lamp
MAINTAINER Carmen Perez Alvarez
ENV password=2asirtriana
RUN echo "START"
RUN apt-get -y update
ADD 000-default.conf /etc/apache2/sites-available/
ADD iniciarservicios.sh /usr/bin/
RUN apt-get install -y git
WORKDIR /var/www/html/
RUN rm -rf index.html
RUN echo "<?php header('Location: ./PROYECTO_IAW_PEREZ_ALVAREZ/Proyecto%20Final/index.php')?>" > index.php
#Clonacion del repositorio
RUN echo "Clonacion de repositorio";
RUN git clone https://github.com/Carmenp7/PROYECTO_IAW_PEREZ_ALVAREZ.git
RUN chown -R www-data:www-data /var/www/html/PROYECTO_IAW_PEREZ_ALVAREZ/
EXPOSE 80/udp
EXPOSE 80/tcp
EXPOSE 3306/tcp
#Iniciar sevicios
RUN chmod 755 /usr/bin/inicioservicio.sh
ADD carga.sql /usr/bin
CMD /usr/bin/inicioservicio.sh

