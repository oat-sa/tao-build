<?php

require_once "phing/Task.php";

class ExtensionsListTask extends Task 
{
	private $taoPath = null;

    public function setTaoPath($str) 
    {
        $this->taoPath = $str;
    }

    public function main() 
    {

    	$dir = new DirectoryIterator($this->taoPath);
    	$ext = array();
		foreach ($dir as $fileinfo) {
			$filename = $fileinfo->getFilename();

			if($fileinfo->isDir() && !$fileinfo->isDot() && $filename != 'config' && $filename != 'data'  && $filename != 'vendor'  && $filename != '.git'   && $filename != 'tests') {
				$ext[] = $filename;

			}
		}

    	echo implode($ext,',');	
	}
}    