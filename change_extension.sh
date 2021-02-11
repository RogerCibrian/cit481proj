#!/bin/bash
for i in *.html; do mv "$i" "${i/.html}".php; done
