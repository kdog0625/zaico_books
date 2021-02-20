FROM mysql:8.0

ENV MYSQL_DATABASE=${DB_DATABASE}\
    MYSQL_USER=${DB_USERNAME}\
    MYSQL_PASSWORD=${DB_PASSWORD}\
    MYSQL_ROOT_PASSWORD=${DB_PASSWORD_ROOT} \
    TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 755 /etc/mysql/conf.d/my.cnf