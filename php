#!/bin/bash

set -o pipefail -C

if [ $1 = "build" ]; then
    docker build -t binphp ~/code/bin/
    exit 0
fi

docker run --rm -ti -v `pwd`:/code -w /code binphp php "$@"
