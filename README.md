# XD Fiesta 2019
Repository for Alihgae

### Kalau Mau Kerja, Ikuti Langkah Ini!
1. Fork Repositori Ini
2. Git clone dulu

```sh
$ git clone https://github.com/akhmadrizki/XDFiesta2019.git
```

3. Tambahkan upstream pada hasil clone tersebut

```sh
$ git remote add upstream https://github.com/akhmadrizki/XDFiesta2019.git
```

4. Copy file .env.example menjadi .env

5. Install seluruh package agar bisa dijalankan

```sh
$ composer install
```

6. Setup database. Lalu isi konfigurasinya di `.env` sesuai pengaturan database. Contoh:

```sh
...
DB_DATABASE=db_xd
DB_USERNAME=root
DB_PASSWORD=
...
```

7. Jalankan command berikut:

```sh
$ php artisan key:generate
$ composer dump-autoload
$ php artisan migrate --seed
$ php artisan storage:link
```
8. Jalankan command berikut kalo mau buat seeder:
```sh
$ php artisan db:seed
```

9. Jika ingin menjalankan aplikasi, jalankan command berikut:

```sh
$ php artisan serve
```
### Berikut langkah-langkah yang wajib dilakukan dalam proses kerja

1. Selalu pull upstream setiap ingin memulai mengembangkan
```sh
$ git pull upstream master
```
2. Buat branch baru pada setiap fitur yang dikembangkan. Contoh:
```sh
$ git branch feature/add-login // Contoh saat membuat branch untuk fitur baru
$ git branch bug/fix-menu // Contoh saat membuat branch untuk fix bug
```
3. Jika sudah selesai pekerjaannya git add dlu
```sh
$ git add .
```
4. Selanjutnya Commit pekerjaan anda
```sh
$ git commit -m "your commit"
```
5. Setiap selesai, push ke repo hasil clone anda
```sh
$ git push origin {nama-branch}
```
6. Jika sudah siap untuk dibawa ke repository utama. Lakukanlah Pull Request dari branch anda ke branch `master`. Sebelum pull request pastikan branch sudah bersih. Jika ada conflict silahkan perbaiki conflict tersebut. Pastikan buat judul dan deskripsi yang baik agar mudah dipahami!
7. Semangat!!!
