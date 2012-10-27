#!/bin/bash

convert backgrounds/original/* -set filename:orig "%t" -format jpg -blur 0x2 'backgrounds/processed/%[filename:orig].jpg'
convert content/original/* -set filename:orig "%t" -format jpg -resize 1440\> 'content/processed/%[filename:orig]@2x.jpg'
convert content/original/* -set filename:orig "%t" -format jpg -resize 1440\> -resize 50% 'content/processed/%[filename:orig].jpg'