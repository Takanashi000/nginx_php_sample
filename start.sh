#!/bin/bash

service php8.2-fpm start

chmod -R 777 /var/run/php

nginx -g "daemon off;"
