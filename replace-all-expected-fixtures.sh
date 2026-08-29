#!/bin/sh

FILTER="${1:-*}"

# ${FILTER} must stay UNQUOTED: a quoted expansion is never glob-expanded, so
# the default "*" would make this path a literal string matching nothing and
# the whole loop would silently do nothing.
for D in src/Component/${FILTER}/Tests/fixtures/*; do
    if [ -d "${D}" ]; then
        if [ -f "${D}/expected.manifest.json" ]; then
            echo "skipping ${D}: snapshot-manifest fixture, use 'castor jane:snapshot-manifest' instead"
            continue
        fi
        rm -r "${D}/expected"
        cp -R "${D}/generated" "${D}/expected"
    fi
done
