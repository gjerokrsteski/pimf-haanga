#!/usr/bin/env bash

docker build -t pimf-haanga-app .
docker run -d -p 1337:1337 pimf-haanga-app
