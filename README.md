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

## What is included

### composer
```sh
Usage: composer command [options] [arguments]

Example:
  composer init
  composer install
  composer update
```

### php
```sh
Usage: php <command>

Example:
  php build
  php -r "echo date('Y-m-d');"
  php info.php
```

### symfony
```sh
Usage: symfony <command>

Example:
  symfony security:check
  symfony check:requirements
```

### symfony
```sh
Usage: symfony <command>

Example:
  symfony security:check                  # Check security issues in project dependencies
  symfony check:requirements              # Check requirements
```

### wd
```sh
Usage: wd <directory>

Example:
  wd bin
```

### invoice
```sh
Usage: invoice <...minutes>

Example:
  invoice 30 40 60
```
