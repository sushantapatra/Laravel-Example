# Laravel Redis Queue | Install Redis On Windows 

## Create Laravel Project
`composer create-project laravel/laravel laravelExample`

## Create Mail with View Html file
`php artisan make:mail SendTestMail --markdown=emails.testmail` 

## Create Job 
`php artisan make:job SendMailJob` 

## Create Job table
`php artisan queue:table` 

## Create Job/queue Listen/send mail
`php artisan queue:listen or php artisan queue:work --timeout=0` 

## Redis Database using to send Email
### Redis Installations on Windows System and Laravel
Open Powershell as Administrator and run this command to enable Windows Subsystem  for Linux(WSL):
`Enable-WindowsOptionalFeature -Online -FeatureName Microsoft-Windows-Subsystem-Linux`

Lunch Microsoft Windows Store:
`install ubuntu`
`sudo apt-add-repository ppa:redislabs/redis`
`sudo apt-get update`
`sudo apt-get upgrade`
`sudo apt-get install redis-server`
`sudo systemctl enable redis-server.service`

Test Redis:
`redis-cli`
`set user:1 "Test User1"`
`get user:1`

`sudo service redis-server stop`
`sudo service redis-server start`
`sudo service redis-server restart`
`sudo service redis-server status`

### Install Redis in Laravel
`composer require predis/predis`


# Large CSV data insert in database using Queue and Job
`php artisan make:model Pincode -m`
`php artisan queue:batches-table` 
