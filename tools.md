TAO build process
=================

    http://github.com/oat-sa/extension-tao-delivery/compare/develop
    http://github.com/oat-sa/extension-tao-lti/compare/develop
    http://github.com/oat-sa/extension-tao-itemqti/compare/develop
    http://github.com/oat-sa/extension-tao-testqti/compare/develop 
    http://github.com/oat-sa/extension-tao-testtaker/compare/develop 
    http://github.com/oat-sa/extension-tao-outcomeui/compare/develop 
    http://github.com/oat-sa/extension-tao-ltideliveryprovider/compare/develop 
    http://github.com/oat-sa/extension-tao-outcomerds/compare/develop 
    http://github.com/oat-sa/extension-tao-dac-simple/compare/develop
    http://github.com/oat-sa/extension-tao-itemqti-pci/compare/develop
    http://github.com/oat-sa/extension-tao-itemqti-pic/compare/develop 
    http://github.com/oat-sa/extension-tao-group/compare/develop 
    http://github.com/oat-sa/extension-tao-outcomelti/compare/develop 
    http://github.com/oat-sa/extension-tao-itemhtml/compare/develop 
    http://github.com/oat-sa/extension-tao-item/compare/develop 
    http://github.com/oat-sa/extension-tao-funcacl/compare/develop 
    http://github.com/oat-sa/generis/compare/develop
    http://github.com/oat-sa/extension-tao-test/compare/develop 
    http://github.com/oat-sa/extension-tao-testlinear/compare/develop
    http://github.com/oat-sa/extension-tao-outcome/compare/develop 
    http://github.com/oat-sa/tao-core/compare/develop
    http://github.com/oat-sa/extension-tao-community/compare/develop 
    http://github.com/oat-sa/extension-tao-devtools/compare/develop 
    http://github.com/oat-sa/extension-tao-revision/compare/develop 
    http://github.com/oat-sa/extension-tao-workspace/compare/develop 
    http://github.com/oat-sa/extension-tao-mediamanager/compare/develop 
    http://github.com/oat-sa/extension-tao-theming-platform/compare/develop 
    http://github.com/oat-sa/extension-tao-act/compare/develop
    http://github.com/oat-sa/extension-tao-backoffice/compare/develop
    http://github.com/oat-sa/extension-tao-proctoring/compare/develop
    http://github.com/oat-sa/extension-tao-clientdiag/compare/develop
    
    
    
    composer require oat-sa/tao-build:
    
    vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/deploy-test-package/ -Dextension=taoRevision create_release_one  
