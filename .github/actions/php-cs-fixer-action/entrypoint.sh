#!/bin/sh -l

results=vendor/bin/php-cs-fixer fix $1;
echo ::set-output name=out:results;
