FROM serversideup/php:8.2-cli

#####################################
# Set Timezone
#####################################

ARG TIME_ZONE=Europe/Moscow
ENV TIME_ZONE ${TIME_ZONE}
RUN ln -snf /usr/share/zoneinfo/$TIME_ZONE /etc/localtime && echo $TIME_ZONE > /etc/timezone

# Установить Node.js и npm с использованием nvm, если переменная INSTALL_NODE установлена в true
ARG INSTALL_NODE=false
# Задать переменную окружения для версии Node.js (по умолчанию --lts)
ARG NODE_VERSION=--lts
# Устанавливаем nvm (Node Version Manager), если INSTALL_NODE=true
ENV NVM_DIR /root/.nvm
RUN if [ "$INSTALL_NODE" = "true" ]; then \
    curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.38.0/install.sh | bash && \
    /bin/bash -c "source $NVM_DIR/nvm.sh && nvm install $NODE_VERSION" && \
    /bin/bash -c "source $NVM_DIR/nvm.sh && npm install -g npm"; \
    fi