FROM redis:latest

#####################################
# Set Timezone
#####################################

ARG TIME_ZONE=Europe/Moscow
ENV TIME_ZONE ${TIME_ZONE}
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone

###########################################################################
# Config:
###########################################################################

RUN mkdir -p /usr/local/etc/redis

COPY general.conf /usr/local/etc/redis/redis.conf

VOLUME /data

EXPOSE 6379

