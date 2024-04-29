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
  composer init    # Creates a basic composer.json file in current directory
  composer install # Installs the project dependencies from the composer.lock file if present, or falls back on the composer.json
  composer update  # Updates your dependencies to the latest version according to composer.json, and updates the composer.lock file
```

### php
```sh
Usage: php <command>

Example:
  php build                               # build php image
  php -r "echo date('Y-m-d') . PHP_EOL;"  # run php code
  php info.php                            # execute php file
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
