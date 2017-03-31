## How to release a new version of a TAO extension 

### Initial setup

- Move into the tao installation root path and make sure that you're on the develop branch

 - Retrieve an update package of all your extensions you want to release 
 
```shell
composer update
```

- Retrieve tao-build tools

```shell
composer require oat-sa/tao-build
``` 
    
 - Initialize tao-build root. Set your tao root path in the -Dtao.root argument.

```shell 
vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/package-tao init
```

**Warning : Never commit tao-build in deploy-test-package, it will make the deployment failed**

 - Check your package status, compare and develop branch for each extension
  
```shell
vendor/oat-sa/tao-build/bin/compareDevelop.sh
```

![compare develop and master](http://s31.postimg.org/5xa728m7v/ezgif_com_gif_maker.gif)

### Release

*JS, CSS and Language should be compiled for the extension*

 - Create the release branch for your extension *myTaoExtension*

```shell
vendor/bin/phing -f vendor/oat-sa/tao-build/tools.xml -Dtao.root=/home/lionel/workspace/package-tao -Dextension=myTaoExtension create_release_one
```
    
This script will fetch develop from github and create a branch release-?version_number? according to manifest of the extensions and push that branch to github. If every thing went well you will have the following output

![create new tag](http://s31.postimg.org/oeikkfkaj/newtag.gif)

If manifest is not up-to-date or no update have occurs since last release, you will have following output

![tag already exists](http://s31.postimg.org/aft66f1iz/tag_exit.gif)

In that case either no change occurs, so no release is needed, or developers forgot to update the manifest and update scripts so you will have to do it yourself

```shell
cd myTaoExtension
```

 - modify manifest.php
 - modify *scripts/update/Updater.php*

```shell
git add manifest.php scripts/update/Updater.php
```

```shell
git commit -m "bump versoin to ???"
```

```shell
git push origin release-???
```

 - Create PR release-??? to master
 - Merge PR into master
 - Merge back master to develop

```shell
git checkout master
```

```shell
git pull origin master
```

```shell
git checkout develop
```

```shell
git pull origin develop
```

```shell
git merge master
```

 - Solve conflict if any

```shell
git push origin develop
```

 - Create and push tag
 - Create release on github
