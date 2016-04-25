#!/bin/bash

extensions=(*)
pwd=$(pwd)

for ((i=0; i<${#extensions[@]}; i++)); do
# Verify if : extension is a directory, a manifest exists in this extension directory,
#             the directory is the the config/data/vendor or test directory
  if [[ -d ${extensions[$i]}
  && -f ${extensions[$i]}/manifest.php 
  && ${extensions[$i]} != "config" 
  && ${extensions[$i]} != "data" 
  && ${extensions[$i]} != "vendor" 
  && ${extensions[$i]} != "tests" ]];
  then
   composer=${extensions[$i]}/composer.json
   compoExtension=$(sed -rn 's/^\s*"name"\s*:\s*"(oat-sa.*)".*$/\1/p' $composer)
   url=https://github.com/$compoExtension/compare/develop
   echo "Repo ${extensions[$i]}"
   echo $url
   nothing=$(curl -s $url | grep -c "anything to compare.")
   if [ "$nothing" != "0" ]; then
     echo OK
   else
     echo UPDATE REQUIRED
     echo "vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=$pwd -Dextension=${extensions[$i]} create_release_one"
   fi
  fi
done