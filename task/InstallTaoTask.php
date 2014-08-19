<?php

require_once "phing/Task.php";

class InstallTaoTask extends Task {
	

 /**
     * The message passed in the buildfile.
     */
    private $taoPath = null;
    private $taoconfig;

    /**
     * The setter for the attribute "message"
     */
    public function setTaoPath($str) {
        $this->taoPath = $str;
    }

    /**
     * The init method: Do init steps.
     */
    public function init() {

        // nothing to do here
    }

    public function createTaoConfig(){
    	$this->taoConfig = new TaoConfig();

    	return $this->taoConfig;
    }

    /**
     * The main entry point method.
     */
    public function main() {
    	$this->install();
    }

    private function install(){
    	$installPath = $this->taoPath. '/tao/install/init.php';
        if (!is_file($installPath)) {
    		throw new Exception("InstallTaoTask require a tao package install should be found ".$autoloadPath);
    	}
    	require_once $installPath;



		$installator = new tao_install_Installator( 
			array(
				'root_path' 	=> $this->taoPath . '/',
				'install_path'	=> $this->taoPath .'/tao/install/'
			)
		);

		$installator->escapeCheck('custom_tao_ModRewrite');
		$installator->install($this->taoConfig->toArray());
    }
}
