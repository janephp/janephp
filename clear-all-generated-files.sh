#!/bin/sh

for D in src/Component/*/Tests/fixtures/*; do
    if [ -d "${D}" ]; then
        rm -r "${D}/generated"
    fi
done
