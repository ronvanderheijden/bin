#!/bin/bash

set -o pipefail -C

image=binphp

run() { 
    docker run --rm -ti -v "$PWD":/code -w /code $image "$@"
}

case "$1" in

    # build the dev image
    build) 
        docker build \
            --build-arg COMPOSER_VERSION=2.6.6 \
            --build-arg PHP_VERSION=8.3.6-cli-bookworm \
            --tag $image \
            "$HOME"/code/bin/
        exit 0
    ;;

    # run bash in dev image
    bash) run "$1" && exit ;;

    # run composer commands from current directory
    composer) run "$@" && exit ;;

    # run symfony commands from current directory
    symfony) run "$@" && exit ;;

    # run php commands
    *) run php "$@" && exit ;;
esac
