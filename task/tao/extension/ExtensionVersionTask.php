<?php

require_once "phing/Task.php";

class ExtensionVersionTask extends Task 
{

    private $extension = null;
    
    private $taoPath = null;
    
    private $versionProp = null;
    
    public function setVersionProp($versionprop)
    {
        $this->versionprop = $versionprop;
    }

    public function setExtension($extension) 
    {
        $this->extension = $extension;
    }
    

    public function setTaoPath($str) 
    {
        $this->taoPath = $str;
    }

    public function main() 
    {
        if(is_null($this->extension)){
			throw new Exception("Extension is missing");
		}
		if(is_null($this->taoPath)){
			throw new Exception("Indicate your taoplatform rootpath in taoPath");
		}
        $manifestPath = $this->taoPath . DIRECTORY_SEPARATOR . $this->extension . DIRECTORY_SEPARATOR . 'manifest.php' ;
        if(!is_file($manifestPath)){
            throw new Exception($manifestPath . " do not exsist");
        }
        $manifest = require_once $manifestPath;
        if(!isset($manifest['version'])){
            throw new Exception('Could not find manifest in version');
        }
        if(!is_null($this->versionprop)){
            $this->project->setProperty($this->versionprop, $manifest['version']);
        }
        echo 'Version found :' . $manifest['version'] ;
    }
}