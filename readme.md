docker-composer up -d

Для доступа к установки плагинов:
docker container exec -it ${name_container} bash
chown -Rf www-data.www-data /var/www/html/
