Clone of ZendSkeletonApplication - for demo purposes
=======================

Introduction
------------
This is a clone of the dafault ZF Skeleton with just a minor change in the single controller
meant to demonstrate a library loaded as a dependency.

Installation
------------

Using Composer (recommended)
----------------------------
Clone the repository and manually invoke `composer` using the shipped
`composer.phar`:

    cd my/project/dir
    git clone https://github.com/mesmerizero/application-utils-demo.git
    php composer.phar self-update
    php composer.phar install

(The `self-update` directive is to ensure you have an up-to-date `composer.phar`
available.)

Web Server Setup
----------------

### PHP CLI Server

The simplest way to get started if you are using PHP 5.4 or above is to start the internal PHP cli-server in the root directory:

    php -S 0.0.0.0:8080 -t public/ public/index.php

This will start the cli-server on port 8080, and bind it to all network
interfaces.

**Note: ** The built-in CLI server is *for development only*.

### Apache Setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

    <VirtualHost *:80>
        ServerName desired-name.localhost
        DocumentRoot /path/to/local-instalation/public
        SetEnv APPLICATION_ENV "development"
        <Directory /path/to/local-instalation/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>
