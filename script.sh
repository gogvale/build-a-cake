#!/bin/bash
cd $1

find . -maxdepth 1 -name "*.html" -exec sed -i 's/\.html/\.php/g' "{}" \;                   # Replace nav links with PHP
sed -i 's/\.html/\.php/g' ./sitemap.xml                                         # Update sitemap with PHP
find . -maxdepth 1 -name "*.html" -exec sh -c 'mv "$1" "${1%.html}.php"' _ {} \;     # Replace files with PHP

# Replace cart special chars
sed -i 's/<!-- Start: Cart-Item -->/<?php foreach ($cart->items() as $item) : ?>/g' cart.php
sed -i 's/<!-- End: Cart-Item -->/<?php endforeach ?>/g' cart.php
sed -i "s/&#39;/'/g" cart.php