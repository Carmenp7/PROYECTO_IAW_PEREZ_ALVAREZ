#!/bin/bash

/etc/init.d/apache2 start
/etc/init.d/mysql start

mysql -u root -p2asirtriana < /usr/bin/proyecto.sql

/bin/bash
