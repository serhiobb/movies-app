#Sonata ChinookDb Showcase
====================

Installation
--------------

Requires: php5, mysql

1. Clone repo to local directory.
2. Run Composer install

    `composer install`
3. Edit `app/config/parameters.yml` to setup database
4. Create database schema.
    
    `./app/console doctrine:schema:create`
5. Add superuser

    `./app/console fos:user:create %username% --super-admin`
    
Login to admin at /admin/login