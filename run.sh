#!/bin/bash

if ! command -v docker &> /dev/null
then
    echo "Please install Docker."
    echo "More info can be found here https://docs.docker.com/get-docker/."
    exit
fi


docker run -it --rm --name php-81-example -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:8.1.0RC6-cli php $1