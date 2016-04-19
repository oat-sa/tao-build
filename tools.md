How to release a new version of a TAO extension 
----------

#Initial setup

 - Retrieve an update package of all your extensions you want to release 
 - Retrieve tao-build tools

    `composer require oat-sa/tao-build`
    
 - Initialize tao-build root
 
    `vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/package-tao init`

**Warning : Nerver commmit tao-build in deploy-test-package, it will make the deployment failed**

#Release

*JS, CSS and Language should be compiled for the extension*

 - Create the release branch for your extension *myTaoExtension*

    `vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/package-tao -Dextension=myTaoExtension create_release_one`
    
This script will fetch develop from github and create a branch release-?version_number? according to manifest of the extensions and push that branch to github. If every thing went well you will have the following output

> TAO Tools > create_release_one:

> [gitcheckout] git-checkout command: /usr/bin/git checkout 'develop'
[gitcheckout] git-checkout: checkout "/home/lionel/workspace/package-tao/funcAcl" repository
Your branch is up-to-date with 'composer/develop'.
Version found :2.7.2 [gitfetch] git-fetch command: /usr/bin/git fetch --all
[gitfetch] git-fetch: branch "/home/lionel/workspace/package-tao/funcAcl" repository
 [gitfetch] git-fetch output: Fetching origin
Fetching composer
  [gittag] git-tag command: /usr/bin/git tag -l 'v2.7.2'
 [gittag] git-tag: tags for "/home/lionel/workspace/package-tao/funcAcl" repository
   [gittag] git-tag output: 
     [echo] 
 [gitcheckout] git-checkout command: /usr/bin/git checkout 'develop'
 [gitcheckout] git-checkout: checkout "/home/lionel/workspace/package-tao/funcAcl" repository
 [gitcheckout] git-checkout output: M    manifest.php
 Your branch is up-to-date with 'composer/develop'.
 [gitcheckout] git-checkout command: /usr/bin/git checkout -b 'release-2.7.2'
 [gitcheckout] git-checkout: checkout "/home/lionel/workspace/package-tao/funcAcl" repository
  [gitpush] git-push: pushing to origin release-2.7.2:release-2.7.2
  [gitpush] git-push command: /usr/bin/git push -q 'origin' 'release-2.7.2:release-2.7.2'
  [gitpush] git-push: complete
  [gitpush] git-push output: 

If manifest is not up-to-date or no update have occurs since last release, you will have following output

> TAO Tools > create_release_one:

> [gitcheckout] git-checkout command: /usr/bin/git checkout 'develop'
[gitcheckout] git-checkout: checkout "/home/lionel/workspace/package-tao/funcAcl" repository
[gitcheckout] git-checkout output: Your branch is up-to-date with 'composer/develop'.
Version found :2.7.1 [gitfetch] git-fetch command: /usr/bin/git fetch --all
 [gitfetch] git-fetch: branch "/home/lionel/workspace/package-tao/funcAcl" repository
 [gitfetch] git-fetch output: Fetching origin
Fetching composer
   [gittag] git-tag command: /usr/bin/git tag -l 'v2.7.1'
   [gittag] git-tag: tags for "/home/lionel/workspace/package-tao/funcAcl" repository
   [gittag] git-tag output: v2.7.1
     [echo] tag v2.7.1 already exists skip v2.7.1

In that case either no change occurs, so no release is needed, or developers forgot to update the manifest and update scripts so you will have to do it yourself

    cd myTaoExtension

 - modify manifest.php
 - modify scripts/update/Updater.php

`git add manifest.php sripts/update/Updater.php`
`git commit -m "bump versoin to ???"`
`git push origin release-???`

 - Create PR release-??? to master
 - Merge PR into master
 - Merge back master to develop

`git checkout master`
`git pull origin master`
`git checkout develop`
`git pull origin develop`
`git merge master`

 - Solve conflict if any

`git push origin develop`

 - Create and push tag
 - Create release on github