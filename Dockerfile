# 使用官方的 Nginx 映像作為基礎
FROM nginx

# 安裝 PHP 和相關套件
RUN apt-get update && \
    apt-get install -y php8.2-fpm

# 複製 Nginx 配置檔案到映像中
COPY default.conf /etc/nginx/conf.d/default.conf

# 複製 PHP 程式碼到映像中
COPY index.php /usr/share/nginx/html/index.php

COPY start.sh /start.sh
RUN chmod +x /start.sh 

EXPOSE 80

CMD ["/start.sh"]
