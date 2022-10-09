# INSTALASI

Cara instalasi sebagai berikut :
1. silahkan clone dari github
2. jika sudah, buka terminal (CMD) sesuai dengan direktori folder aplikasinya, lalu buat folder "vendor" dengan mengetik "composer install"
3. setelah itu silahkan buat file ".env", untuk isi dari file nya bisa copy di file ".env.example"
4. Buat database
5. setelah itu, masukkan nama database di bagian "DB_DATABASE" sesuai dengan database yang sudah dibuat
6. jika sudah, silahkan ketik "php artisan migrate", lalu klik enter dan tunggu sampai selesai
7. setelah itu, silahkan ketik "php artisan db:seed", lalu klik enter dan tunggu
pemberitahuan "seeding database"
8. Jika sudah, silahkan ketik "php artisan config:cache", jika sudah, baru ketik "php artisan key:generate"
9. jika muncul pemberitahuan berupa "Application key set succesfully", maka install aplikasi nya sudah selesai
10. Silahkan nyalakan server untuk menjalankan aplikasinya dengan cara ketik "php artisan serve" di terminal dan nyalakan "apache" dan "mySQL" di xampp
11. jika sudah, silahkan buka browser dan jalankan aplikasinya.