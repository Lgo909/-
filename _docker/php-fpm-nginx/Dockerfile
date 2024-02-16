FROM serversideup/php:8.2-fpm-nginx

#####################################
# Set Timezone
#####################################

ARG TIME_ZONE=Europe/Moscow
ENV TIME_ZONE ${TIME_ZONE}
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone

EXPOSE 80 443