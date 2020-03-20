#!/usr/bin/env bash

run_tests () {
    printf "🌱 $1 👇\n"
    cd $1

    vendor/bin/phpunit

    if [ $? -ne 0 ]
    then
        exit 1
    fi

    cd -
}
export -f run_tests

for i in $(find src -maxdepth 2 -type f -name phpunit.xml -printf '%h\n' | sort); do
    run_tests "$i"
done

exit 0
