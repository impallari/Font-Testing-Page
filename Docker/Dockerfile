FROM php:8.2-cli-alpine

RUN apk add --no-cache git

RUN git clone https://github.com/impallari/Font-Testing-Page.git /usr/src/font-testing

WORKDIR /usr/src/font-testing

CMD [ "php", "-S", "0.0.0.0:8080" ]
