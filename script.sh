#!/bin/bash
cd $1

cp *.html docs
find . -maxdepth 1 -name "*.html" -exec sed -i 's/\.html/\.php/g' "{}" \;                   # Replace nav links with PHP
sed -i 's/\.html/\.php/g' ./sitemap.xml                                         # Update sitemap with PHP
find . -maxdepth 1 -name "*.html" -exec sh -c 'mv "$1" "${1%.html}.php"' _ {} \;     # Replace files with PHP