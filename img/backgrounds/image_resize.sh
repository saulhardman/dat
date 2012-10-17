#!/bin/bash

convert original/* -set filename:orig "%t" -format jpg -blur 0x2 'processed/%[filename:orig].jpg'