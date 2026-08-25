#!/bin/sh

FILTER="${1:-*}"

for D in src/Component/"${FILTER}"/Tests/fixtures/*; do
    if [ -d "${D}" ]; then
        rm -r "${D}/generated"
    fi
done
