#!/bin/sh

FILTER="${1:-*}"

# ${FILTER} must stay UNQUOTED: a quoted expansion is never glob-expanded, so
# the default "*" would make this path a literal string matching nothing and
# the whole loop would silently do nothing.
for D in src/Component/${FILTER}/Tests/fixtures/*; do
    if [ -d "${D}/generated" ]; then
        rm -r "${D}/generated"
    fi
done
