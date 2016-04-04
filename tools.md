TAO build process
=================


(https://github.com//phing-task-tao/compare/develop)
(https://github.com//extension-tao-delivery/compare/develop)
(https://github.com//extension-tao-lti/compare/develop)
(https://github.com//extension-tao-itemqti/compare/develop)
(https://github.com//extension-tao-testqti/compare/develop) 
(https://github.com//extension-tao-testtaker/compare/develop) 
(https://github.com//extension-tao-outcomeui/compare/develop) 
(https://github.com//extension-tao-ltideliveryprovider/compare/develop) 
(https://github.com//extension-tao-outcomerds/compare/develop) 
(https://github.com//extension-tao-dac-simple/compare/develop)
(https://github.com//extension-tao-itemqti-pci/compare/develop)
(https://github.com//extension-tao-itemqti-pic/compare/develop) 
(https://github.com//extension-tao-group/compare/develop) 
(https://github.com//extension-tao-outcomelti/compare/develop) 
(https://github.com//extension-tao-itemhtml/compare/develop) 
(https://github.com//extension-tao-item/compare/develop) 
(https://github.com//extension-tao-funcacl/compare/develop) 
(https://github.com//generis/compare/develop)
(https://github.com//extension-tao-test/compare/develop) 
(https://github.com//extension-tao-testlinear/compare/develop)
(https://github.com//extension-tao-outcome/compare/develop) 
(https://github.com//tao-core/compare/develop)
(https://github.com//extension-tao-community/compare/develop) 
(https://github.com//extension-tao-devtools/compare/develop) 
(https://github.com//extension-tao-revision/compare/develop) 
(https://github.com//extension-tao-workspace/compare/develop) 
(https://github.com//extension-tao-mediamanager/compare/develop) 
(https://github.com//extension-tao-theming-platform/compare/develop) 
(https://github.com//extension-tao-act/compare/develop)
(https://github.com//extension-tao-backoffice/compare/develop)
(https://github.com//extension-tao-proctoring/compare/develop)
(https://github.com//extension-tao-clientdiag/compare/develop)
    
    
    
    composer require oat-sa/tao-build:
    
    vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/deploy-test-package/ -Dextension=taoRevision create_release_one  
