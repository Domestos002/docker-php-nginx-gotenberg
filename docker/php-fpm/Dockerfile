FROM php:8.0-fpm

RUN apt-get update && apt-get install -y git zip unzip curl

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin && \
        echo "alias composer='composer'" >> /root/.bashrc && \
        composer

ARG USER=docker
ARG UID=1000
ARG GID=1000

ARG PW=docker
RUN useradd -m ${USER} --uid=${UID} && echo "${USER}:${PW}" | \
      chpasswd

USER ${UID}:${GID}
WORKDIR /home/${USER}
WORKDIR /var/www
