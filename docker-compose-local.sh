#!/bin/bash

PWD=$(cd $(dirname $0) && pwd)

# Create Network
COUNT_DOCKER_NETWORK="$(docker network ls -f name=dinner-app -q | wc -l | sed 's/^[ \t]*//')"
if [ $COUNT_DOCKER_NETWORK != "1" ]; then
    docker network create dinner-app
fi

# Install Vendor
if [ ! -d "$PWD/src/vendor" ]; then
    $PWD/composer.sh --ignore-platform-reqs install
fi

docker-compose -p dinner-app -f $PWD/.local/docker-compose-local/docker-compose.yml $@