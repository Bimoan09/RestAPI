<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<<<<<<< HEAD

=======
>>>>>>> master
**clone**
_git clone_ https://github.com/Bimoan09/RestAPI.git
 
 Download laravel baca petunjuknya https://laravel.com/docs/5.5/
 
**Setting Database**

* DB_DATABASE=todo ( Sesuaikan nama database anda)
* DB_USERNAME=root ( Sesuaikan nama usernama database anda)
* DB_PASSWORD=bimo ( Sesuaikan pasword database anda)

* _composer update_
* _php artisan migrate_

| URL                         | HTTP METHODS  | KETERANGAN  |
|---|---|---|
|localhost:8000/api/pegawai   `| GET          | Menampilkan Smua data pegawai |
|localhost:8000/api/pegawai/1  | GET          | Menampilkan data pegawai dengan ID 1  |
|localhost:8000/api/pegawai    | POST         | Menambah data pegawai|
|localhost:8000/api/pegawai/1  | PUT          | Merubah/edit data pegawai dengan ID 1  |
|localhost:8000/api/pegawai/1  | DELETE       | Menghapus data pegawai dengan ID 1  |

**Akses menggunakan CURL**

Method **GET**
* _curl -X GET http://localhost:8000/api/pegawai/_  => Memanggil semua data pegawai

#HASIL
[{"id":1,"name":"Bimo","email":"bimoan09@gmail.com","department":"Engginer","alamat":"Semarang","created_at":"2018-01-29 09:28:34","updated_at":"2018-01-29 11:49:26"},{"id":3,"name":"madi","email":"madi@gmail.com","department":"engineer","alamat":"Jogja","created_at":"2018-01-29 09:29:32","updated_at":"2018-01-29 09:29:32"},{"id":4,"name":"dina","email":"dina@gmail.com","department":"Accounting","alamat":"Semaranng","created_at":"2018-01-29 09:31:05","updated_at":"2018-01-29 09:31:05"},{"id":6,"name":"sanjaya","email":"sanjaya2@gmail.com","department":"GA","alamat":"Solo","created_at":"2018-01-29 09:33:13","updated_at":"2018-01-29 09:33:13"},{"id":7,"name":"Bima","email":"Bima@gmail.com","department":"GA","alamat":"Solo","created_at":"2018-01-29 09:33:37","updated_at":"2018-01-29 09:33:37"},{"id":10,"name":"sudi","email":"sudi@gmail.com","department":"GA","alamat":"Solo","created_at":"2018-01-29 09:52:45","updated_at":"2018-01-29 09:52:45"},{"id":12,"name":"mira","email":"mira@gmail.com","department":"GA","alamat":"Solo","created_at":"2018-01-29 10:02:55","updated_at":"2018-01-29 10:02:55"},{"id":13,"name":"anggi","email":"anggi@gmail.com","department":"Engginer","alamat":"jogja","created_at":"2018-01-29 10:12:23","updated_at":"2018-01-29 10:12:23"},{"id":16,"name":"sumadi","email":"sumadi@gmail.com","department":"Engginer","alamat":"semarang","created_at":"2018-01-29 10:46:37","updated_at":"2018-01-29 10:46:37"}]bimo@bimo-HP-Laptop-15-bw0xx:/var/www/html/IL

* _curl -X GET http://localhost:8000/api/pegawai/1_  => Memanggil data pegawai dengan ID 1
#HASIL
{"id":1,"name":"Bimo","email":"bimoan09@gmail.com","department":"Engginer","alamat":"Semarang","created_at":"2018-01-29 09:28:34","updated_at":"2018
---------------------------------------------------------------------------------------------------------------------------
Method POST
* curl -i -X POST -H "Content-Type:application/json" http://localhost:8000/api/pegawai -d '{"name":"sasa","email":"sasa@gmail.com","password":"12345","department":"Accounting","alamat":"tasik "}'

#HAsil
HTTP/1.1 201 Created
Host: localhost:8000
Date: Mon, 29 Jan 2018 13:37:59 +0000
Connection: close
X-Powered-By: PHP/7.1.13-1+ubuntu14.04.1+deb.sury.org+1
Cache-Control: no-cache, private
Date: Mon, 29 Jan 2018 13:37:59 GMT
Content-Type: application/json
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 57
*{"name":"sasa","email":"sasa@gmail.com","department":"Accounting","alamat":"tasik","updated_at":"2018-01-29 13:37:59","created_at":"2018-01-29 13:37
----------------------------------------------------------------------------------------------------------------------------
**Method PUT**
* curl -i -X PUT -H "Content-Type:application/json" http://localhost:8000/api/pegawai/3 -d '{"id":2, name":"mudiman","email":"mudiman@gmail.com","password":"12345","department":"Accounting","alamat":"tasik "}'

* #Hasil
* HTTP/1.1 200 OK
Host: localhost:8000
Date: Mon, 29 Jan 2018 20:43:15 +0700
Connection: close
X-Powered-By: PHP/7.1.13-1+ubuntu14.04.1+deb.sury.org+1
Cache-Control: no-cache, private
Date: Mon, 29 Jan 2018 13:43:15 GMT
Content-Type: text/html; charset=UTF-8
X-RateLimit-Limit: 60
X-RateLimit-Remaining: 59
-----------------------------------------------------------------------------------------------------------------------------
 Methods DELETE
* curl -v -X DELETE http://localhost:8000/api/pegawai/21 =. Menghapus pegawai dengan ID 21

* HASIL
* < HTTP/1.1 200 OK
< Host: localhost:8000
< Date: Tue, 30 Jan 2018 02:47:30 +0000
< Connection: close
< X-Powered-By: PHP/7.1.13-1+ubuntu14.04.1+deb.sury.org+1
< Cache-Control: no-cache, private
< Date: Tue, 30 Jan 2018 02:47:30 GMT
< Content-Type: application/json
< X-RateLimit-Limit: 60
< X-RateLimit-Remaining: 58
< 
* Closing connection 0
<<<<<<< HEAD
=======

>>>>>>> master
