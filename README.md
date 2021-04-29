
Before you start, the vendor and node_modules folder must be deleted!

Run those order:

composer install
npm install
npm run prod
php artisan migrate:fresh
php artisan db:seed --class=LmsSeeder
php artisan serve

Test user_email and password:
joe@gmail.com   qqqq  (as teacher)
jim@gmail.com  qqqq    (as student) 


Unfortunately student part doesn't finished. The page is already there,the back-end interaction is not complete.
