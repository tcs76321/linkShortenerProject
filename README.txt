Trevor's linkShortenerProject

Pages/Actions:

Deployment Instructions:

-Create DigitalOcean ubuntu 20.04 droplet
-Set namecheap dns to custom and point at the three DigitalOcean DNSs
-Add domain to droplet on Digital Ocean
-Log into server remotely as root
-add a new user and give permissions -aG sudo
-enable and update ufw for http https and OpenSSH
-Logout and back in as new user
-sudo apt update and upgrade
-install nginx
-allow nginx http through the ufw
-install mysql and secure the installation
-install php7.4-cli
-sudo apt install php-fpm php-mysql
-create a new file under /etc/nginx/sites-available/
-fill it with appropriate data
-install composer
-create mysql database
-create user
-create new dir under /var/www/
-cd to into it
-clone this repo
-change the .env file at APP_ENV to be prod and add a line APP_DEBUG=0
-install phpxml
-composer install
-!change the .env file at APP_SECRET=... this is critical for security!
-update .env database config which should be different for security!
-run migrations
-finalize the /etc/nginx/sites-available/something file
-take a breath and hope



Notes:
If you are happening to be recreating this please include as a critical step the generation of your own bitly API access token thank you and replace that within the appropriate controller
