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
`php artisan queue:listen` 