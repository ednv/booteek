# booteek
              
 What's next? 
              

  * Run your application:
    1. Go to the project directory
    2. Create your code repository with the git init command
    3. Download the Symfony CLI at https://symfony.com/download to install a development web server

  * Read the documentation at https://symfony.com/doc

              
 What's next? 
              

  * You're ready to send emails.

  * If you want to send emails via a supported email provider, install
    the corresponding bridge.
    For instance, composer require mailgun-mailer for Mailgun.

  * If you want to send emails asynchronously:

    1. Install the messenger component by running composer require messenger;
    2. Add 'Symfony\Component\Mailer\Messenger\SendEmailMessage': amqp to the
       config/packages/messenger.yaml file under framework.messenger.routing
       and replace amqp with your transport name of choice.

  * Read the documentation at https://symfony.com/doc/master/mailer.html

                        
 Database Configuration 
                        

  * Modify your DATABASE_URL config in .env

  * Configure the driver (postgresql) and
    server_version (13) in config/packages/doctrine.yaml

              
 How to test? 
              

  * Write test cases in the tests/ folder
  * Run php bin/phpunit

#####################################################

 php bin/console assets:install

 php bin/console make:controller
 php bin/console make:entity
 php bin/console make:migration
 php bin/console doctrine:migrations:migrate

 php bin/console make:admin:crud
 