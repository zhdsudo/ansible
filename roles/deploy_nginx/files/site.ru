server {
    listen 80;
    root /var/www/site.ru;
    server_name site.ru www.site.ru;
    
    access_log /var/www/logs/nginx_access.log;
    error_log /var/www/logs/nginx_error.log;
    
    index index.html index.htm index.php;
    
    include /etc/nginx/templates/apache24.conf;
    include /etc/nginx/templates/wp-includes.conf;
}
