FROM axllent/mailpit:latest

#####################################
# Set Timezone
#####################################

ARG TIME_ZONE=Europe/Moscow
ENV TIME_ZONE ${TIME_ZONE}
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone

EXPOSE 1025 8025