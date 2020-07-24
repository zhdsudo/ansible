server {
    listen 80;
    root /var/www/site-2.ru/;
    server_name site-2.ru www.site-2.ru;
   
    index index.html index.htm index.php;

    access_log /var/www/logs/nginx2_access.log;
    error_log /var/www/logs/nginx2_error.log;


    include /etc/nginx/templates/apache24.conf;
}
