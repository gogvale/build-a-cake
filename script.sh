#!/bin/bash
cd $1

find . -maxdepth 1 -name "*.html" -exec sed -i 's/\.html/\.php/g' "{}" \;                   # Replace nav links with PHP
sed -i 's/\.html/\.php/g' ./sitemap.xml                                         # Update sitemap with PHP
find . -maxdepth 1 -name "*.html" -exec sh -c 'mv "$1" "${1%.html}.php"' _ {} \;     # Replace files with PHP

# Replace cart special chars
sed -i 's/<!-- Start: Cart-Item -->/<?php foreach ($cart->items() as $item) : ?>/g' cart.php
sed -i 's/<!-- End: Cart-Item -->/<?php endforeach ?>/g' cart.php
sed -i "s/&#39;/'/g" *.php
sed -i 's/&quot;/"/g' *.php


sed -i 's/<!-- Start: Start List -->/<?php foreach ($cart->items() as $item) : ?>/g' checkout.php
sed -i 's/<!-- End: Start List -->/<?php endforeach ?>/g' checkout.php
