# Tutorial 06 - PHP Database

Nama: Ammar Annajih Pasifiky  
NIM: 103042310020

Project ini dibuat untuk menerapkan materi database, session, authentication, dan model relationship menggunakan Laravel.

Fitur yang dikerjakan:
- authentication login dan register
- session login Laravel
- protected route untuk dashboard dan products
- tabel `products` dan `variants`
- relationship `Product hasMany Variant`
- relationship `Variant belongsTo Product`

Route utama:
- `/` untuk landing page
- `/login` untuk login
- `/register` untuk register
- `/dashboard` untuk halaman protected setelah login
- `/products` untuk melihat data product dan variant

Pembagian halaman:
- Public page:
  - `/`
  - `/login`
  - `/register`
- Protected page:
  - `/dashboard`
  - `/products`
  - `/profile`

Cara menjalankan:

Jika menggunakan Herd:
1. buka terminal dan masuk ke folder project ini
2. jalankan `composer install` jika diperlukan
3. jalankan `npm install`
4. jalankan `npm run build`
5. jalankan `php artisan migrate --seed`
6. jalankan `herd link tutorial06-ammar` jika perlu
7. buka domain `.test` project ini

Jika menggunakan PHP biasa:
1. jalankan `composer install` jika diperlukan
2. jalankan `npm install`
3. jalankan `npm run build`
4. jalankan `php artisan migrate --seed`
5. jalankan `php artisan serve`

Cara menjalankan test:
1. pastikan dependency project sudah terpasang
2. jalankan:

```bash
php artisan test
```

Test ini digunakan untuk memeriksa authentication, protected routes, dan akses halaman utama project.

Akun demo:
- Email: `ammar@example.com`
- Password: `password`
