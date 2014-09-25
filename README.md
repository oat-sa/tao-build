TAO build process
=================

Build the package
-----------------

 - Download package-tao from github
 - Switch to develop branch
 - Retrieve all extensions and dependencies using composer
 - Create a zip package
 

Quality checks
--------------

  - Generate dependency report with other software metrics using [PHP_Depend](http://pdepend.org)
  - Look for several potential problems within the source [PHP Mess Detector](http://phpmd.org)
  - Find duplicate code using [PHPCPD](https://github.com/sebastianbergmann/phpcpd)
  - Measuring the size and analyzing the structure of the project using [PHPLOC](https://github.com/sebastianbergmann/phploc)
  - Tokenises PHP, JavaScript and CSS files and detects violations of a defined set of coding standards using [PHP_CodeSniffer]( http://github.com/squizlabs/PHP_CodeSniffer). Ruleset considered are defined in conf/phpcs.xml


Unit Test
---------

  - Install the platform with all extensions
  - Run Unit test according to configration store in conf/phpunit_mysql.xml
  - Generate code coverage report
