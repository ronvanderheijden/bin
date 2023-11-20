# Binaries

## Installation
```sh
# create directory
mkdir $HOME/code && cd $HOME/code

# clone bin repository
git clone git@github.com:ronvanderheijden/bin.git

# add directory to your $PATH
echo 'export PATH = $HOME/code/bin:$PATH' >> $HOME/.zshrc
```

## Commands

### php
```sh
# build php image
php build

# run php command
php -r 'echo date("Y-m-d");'

# run php file
php file.php
```

### composer

### wd
Directly go to a directory within the code directory.
```
Usage: wd <directory>

Example:
  wd bin
```

### invoice
```
Usage: invoice <...minutes>

Example:
  invoice 30 40 60
```

## PHP binaries

### binphp
Execute php files as binaries.
```
Usage: binphp <command>

Commands:
  build       Build a binphp image
  run         Login to the binphp container
  composer    Updates the composer packages
```
