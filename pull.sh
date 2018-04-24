#!/bin/sh
git reset --hard HEAD
git pull
mkdocs build
