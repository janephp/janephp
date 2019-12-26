#!/bin/sh

for D in src/*/Tests/fixtures/*; do
    if [ -d "${D}" ]; then
        rm -r "${D}/expected"
	cp -R "${D}/generated" "${D}/expected"
    fi
done
