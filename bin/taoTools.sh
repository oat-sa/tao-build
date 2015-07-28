#!/bin/bash
if [ $# = 0 ];
then
        echo "usage: $0 TAOROOT CMD"
        exit 1
fi
TAOROOT=$1
CMD=$2
vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=$TAOROOT $CMD
