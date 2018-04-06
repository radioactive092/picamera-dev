#!/bin/sh
processId=$(ps -ef | grep 'python main.py' | grep -v 'grep' | awk '{ printf $2 }')
echo $processId
kill $processId
