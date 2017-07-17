# Revue-FFS
### STOP READING THIS IF YOU ALREADY HAVE HOMESTEAD RUNNING OR ON WINDOWS
### YOU DONT NEED IT JUST USE YOUR TRASHY VM

# Guide to laravel (without VM) mainly for mac os user
 
Update to php7, if you are on mac theres a brew guide
highly recommed you use brew unless you like wasting time then compile from source
```sh
brew tap homebrew/dupes
brew tap homebrew/versions
brew tap homebrew/homebrew-php
```

might or might not be needed
```sh
brew unlink php56
brew install php70
```

paste this into .bash_profile/.bash_user or something along the lines mac os use .bash_profile
```sh
export PATH="$(brew --prefix homebrew/php/php71)/bin:$PATH"
```

reloads the script
```sh
source .bash_profile
php --version
```

### install composer
this is a dependency manager
paste these commands
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
```

/usr/local/bin this is where they store your command line stuff
if you want to uninstall it find that folder and look for composer
```sh
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
```

gets rid of the installation file
```sh
php -r "unlink('composer-setup.php');"
```

paste into .bash_profile or whatever .bashrc you have so it links it
```sh
export PATH="$HOME/.composer/vendor/bin:$PATH"
source .bash_profile
```

check if link exist
```sh
composer --version
```

### Install laravel
```sh
composer global require "laravel/installer"
```

### Start a new proj
blog is the name of the project
```sh
laravel new blog
```

something it automatically does everything for you sometimes it doesn't i dont know why
but if it doesn't follow these steps
in the proj file
```sh
composer update
```

paste these stuff into a text file called .env
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:mbtwxmMlEzmk4OgBs+KRajPWcFP6mNyzyZhlxeBjBss=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=admin
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
```

### generate new key
```sh
php artisan key:generate
```

### test
You should get a welcome page
```sh
php artian serve
```
