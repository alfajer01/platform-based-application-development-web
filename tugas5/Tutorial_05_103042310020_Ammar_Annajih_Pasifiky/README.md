# Tutorial 05 - PHP Framework

Nama: Ammar Annajih Pasifiky  
NIM: 103042310020

Project ini dibuat untuk menyelesaikan exercise pada materi Lecture Note 5.1 - Intro PHP Framework menggunakan Laravel.

Isi yang dikerjakan:
- membuat `Lat1Controller`
- membuat method `index()` dan `method2()`
- membuat view `v_latihan1.blade.php`
- membuat view `v_latihan2.blade.php`
- menambahkan route `/lat1` dan `/lat1/m2`

Cara menjalankan:

Jika menggunakan Herd:
1. buka terminal dan masuk ke folder project ini
2. jalankan `herd link tutorial05-ammar` dari dalam folder project jika belum pernah link
3. buka:
   - `http://tutorial05-ammar.test/lat1`
   - `http://tutorial05-ammar.test/lat1/m2`

Jika menggunakan PHP biasa:
1. jalankan `composer install` jika folder `vendor` belum ada
2. jalankan `copy .env.example .env`
3. jalankan `php artisan key:generate`
4. jalankan `php artisan serve`
5. buka:
   - `http://127.0.0.1:8000/lat1`
   - `http://127.0.0.1:8000/lat1/m2`
