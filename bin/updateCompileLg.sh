#!/bin/bash

if [ ! $# = 2 ]; 
then
	echo "usage: $0 TAOROOT EXT"
	exit 1
fi
TAOROOT=$1
EXT=$2

if [ ! -f $TAOROOT/$EXT/manifest.php ] ; then
	echo "usage: $0 EXT manifest not found"
	exit 1
fi
DATE=`date +%Y-%m-%d`
PWD=$(pwd)
echo $PWD
cd $TAOROOT/$EXT
git branch -D compilation_branch
git checkout -b compilation_branch
#git fetch origin spanish_translation:spanish_translation
#git checkout spanish_translation
php $TAOROOT/tao/scripts/taoTranslate.php -a updateAll -u admin -p admin -e $EXT
php $TAOROOT/tao/scripts/taoTranslate.php -a compileAll -u admin -p admin -e $EXT
git add locales
cd $PWD
