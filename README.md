Symfony2 all in one
====================
About
--------------
This repo contains symfony2 with all bundles, that you need for project startup.

Installation
--------------

Requires: php5, mysql

1. Clone repo to local directory.

    `git clone https://github.com/serhiobb/symfony
2. Run Composer install

    `composer install`
3. Edit `app/config/parameters.yml` to setup database
4. Create database schema.
    
    `./app/console doctrine:schema:create`
5. Add superuser

    `./app/console fos:user:create %username% --super-admin`
    
Login to admin at /admin/login

Acccess Dashboard at /admin/dashboard
