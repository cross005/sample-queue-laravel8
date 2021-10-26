# sample-queue-laravel8
#To display the UI auth
-npm install && num run dev

#Use this endpoint to send an email
base_url/send-to-email

#To run a queue for sending an email
-php artisan queue:listen

#Test Credentials for sending an email
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=antonsample00456@gmail.com
MAIL_PASSWORD=Password!123
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=xyz@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
