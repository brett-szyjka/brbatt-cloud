FROM nextcloud:19.0.10-fpm
COPY ./config /var/www/html/config
COPY ./themes /var/www/html/themes
RUN chmod -R 766 /var/www/html/config
RUN chmod -R 766 /var/www/html/themes
RUN chown -R 1033 /var/www/html/config
RUN chown -R 1033 /var/www/html/themes

