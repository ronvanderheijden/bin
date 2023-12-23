#!/bin/bash

docker run --rm -ti -v `pwd`:/code -w /code golang:1.21.5-bullseye go "$@"
