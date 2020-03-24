#!/usr/bin/env bash
set -e

use_path_repository_in_composer () {
    sed -i 's/"require": {/"repositories": [{"type": "path", "url": "..\/*"}], \0/' $1/composer.json
    sed -i 's/\("jane\-php\/[a-z\-]*"\)\:\s\"\^[0-9\.]*\"/\1\: \"\*\@dev\"/' $1/composer.json
}

install_component () {
    printf "🌱 $1 👇\n"
    composer update --no-progress --no-suggest --ansi --prefer-stable --working-dir $1 $2
}

for i in $(find src -maxdepth 2 -type f -name composer.json -printf '%h\n' | sort); do
    use_path_repository_in_composer "$i"
done

for i in $(find src -maxdepth 2 -type f -name phpunit.xml -printf '%h\n' | sort); do
    install_component "$i" $1
done
