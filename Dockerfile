FROM nginx
RUN apt-get update && \
    apt-get install -y php8.2-fpm

COPY default.conf /etc/nginx/conf.d/default.conf
COPY index.php /usr/share/nginx/html/index.php
COPY www.conf /etc/php/8.2/fpm/pool.d/www.conf 

COPY start.sh /start.sh
RUN chmod +x /start.sh 


EXPOSE 80

CMD ["/start.sh"]
