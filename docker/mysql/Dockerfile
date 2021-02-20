FROM mysql:8.0

ENV MYSQL_DATABASE=zaico_books_db \
    MYSQL_USER=zaico_books_db \
    MYSQL_PASSWORD=Zai_ngin_46 \
    MYSQL_ROOT_PASSWORD=Zai_ngin_46 \
    TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 755 /etc/mysql/conf.d/my.cnf