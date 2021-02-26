#!/bin/bash

for i in *.php; do
cat last_scripts.txt >> $i;
done
