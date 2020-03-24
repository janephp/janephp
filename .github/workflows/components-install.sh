#!/usr/bin/env bash
set -e

use_path_repository_in_composer () {
    cd $1

    sed -i 's/"require": {/"repositories": [{"type": "path", "url": "..\/*"}], \0/' composer.json
    sed -i 's/\("jane\-php\/[a-z\-]*"\)\:\s\"\^[0-9\.]*\"/\1\: \"\*\@dev\"/' composer.json

    cd -
}

install_component () {
    printf "🌱 $1 👇\n"
    cd $1 ; composer update --no-progress --no-suggest --ansi --prefer-stable $2 ; cd -
}

for i in $(find src -maxdepth 2 -type f -name composer.json -printf '%h\n' | sort); do
    use_path_repository_in_composer "$i"
done

for i in $(find src -maxdepth 2 -type f -name phpunit.xml -printf '%h\n' | sort); do
    install_component "$i" $1
done
