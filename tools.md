TAO build process
=================

    http://github.com//extension-tao-delivery/compare/develop
    http://github.com//extension-tao-lti/compare/develop
    http://github.com//extension-tao-itemqti/compare/develop
    http://github.com//extension-tao-testqti/compare/develop 
    http://github.com//extension-tao-testtaker/compare/develop 
    http://github.com//extension-tao-outcomeui/compare/develop 
    http://github.com//extension-tao-ltideliveryprovider/compare/develop 
    http://github.com//extension-tao-outcomerds/compare/develop 
    http://github.com//extension-tao-dac-simple/compare/develop
    http://github.com//extension-tao-itemqti-pci/compare/develop
    http://github.com//extension-tao-itemqti-pic/compare/develop 
    http://github.com//extension-tao-group/compare/develop 
    http://github.com//extension-tao-outcomelti/compare/develop 
    http://github.com//extension-tao-itemhtml/compare/develop 
    http://github.com//extension-tao-item/compare/develop 
    http://github.com//extension-tao-funcacl/compare/develop 
    http://github.com//generis/compare/develop
    http://github.com//extension-tao-test/compare/develop 
    http://github.com//extension-tao-testlinear/compare/develop
    http://github.com//extension-tao-outcome/compare/develop 
    http://github.com//tao-core/compare/develop
    http://github.com//extension-tao-community/compare/develop 
    http://github.com//extension-tao-devtools/compare/develop 
    http://github.com//extension-tao-revision/compare/develop 
    http://github.com//extension-tao-workspace/compare/develop 
    http://github.com//extension-tao-mediamanager/compare/develop 
    http://github.com//extension-tao-theming-platform/compare/develop 
    http://github.com//extension-tao-act/compare/develop
    http://github.com//extension-tao-backoffice/compare/develop
    http://github.com//extension-tao-proctoring/compare/develop
    http://github.com//extension-tao-clientdiag/compare/develop
    
    
    
    composer require oat-sa/tao-build:
    
    vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/deploy-test-package/ -Dextension=taoRevision create_release_one  
