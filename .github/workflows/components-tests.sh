#!/usr/bin/env bash
set -e

run_tests () {
    printf "🌱 $1 👇\n"

    $1/vendor/bin/phpunit $1

    if [ $? -ne 0 ]; then exit 1; fi
}

for i in $(find src -maxdepth 2 -type f -name phpunit.xml -printf '%h\n' | sort); do
    run_tests "$i"
done
