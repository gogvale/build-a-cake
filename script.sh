#!/bin/bash
cd $1

find . -name '*.html' -exec sed -i 's/\.html/\.php/g' "{}" \;
find . -name '*.xml' -exec sed -i 's/\.html/\.php/g' "{}" \;
find . -depth -name "*.html" -exec sh -c 'mv "$1" "${1%.html}.php"' _ {} \;