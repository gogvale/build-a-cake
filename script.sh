#!/bin/bash
cd $1

find . -name '*.html' -exec sed -i 's/\.html/\.php/g' "{}" \;                   # Replace nav links with PHP
sed -i 's/\.html/\.php/g' ./sitemap.xml                                         # Update sitemap with PHP
find . -depth -name "*.html" -exec sh -c 'mv "$1" "${1%.html}.php"' _ {} \;     # Replace files with PHP