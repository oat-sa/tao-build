TAO build process
=================

Getting Started
---------------
  - Create your jenkins project
  - Create the file build.properties

>         release.version=nightly
>         release.source.name=TAO_${release.version}_build
>         
>         db.driver=
>         db.host=
>         db.name=
>         db.pass=
>         db.user=
> 
>         module.mode=
>         module.name=
>         module.namespace=
>         module.url=
>     
>         user.login=
>         user.pass=

  - Git clone this repository  
  - Setup phing tasks
  - Setup PMD analisys
  - Setup phploc report
  - Setup PHPCPD reports
  - Setup Code Coverage
  


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
