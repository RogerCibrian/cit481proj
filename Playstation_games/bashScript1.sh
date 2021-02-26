#!/bin/bash

for i in *.php; do
sed -i -e '/3.3.7\/js\/bootstrap.min.js/a\\<script src="https:\/\/kit.fontawesome.com\/961faa2e94.js" crossorigin="anonymous"><\/script>' < $i;
done
