TAO build process
=================

Build the package
-----------------

 - download package-tao from github
 - switch to develop branch
 - retrieve all extensions and dependencies using composer
 - create a zip package
 

Quality checks
--------------

PHP_Depend 
Calculate software metrics
http://pdepend.org/

PHPMD
PHP Mess Detector
http://phpmd.org/

PHPCPD 
Find duplicate code
https://github.com/sebastianbergmann/phpcpd

PHPLOC
Measuring the size and analyzing the structure of the project
https://github.com/sebastianbergmann/phploc

PHP_CodeSniffer
Tokenises PHP, JavaScript and CSS files and detects violations of a defined set of coding standards
https://github.com/squizlabs/PHP_CodeSniffer
