## Cara Clone Repository

Untuk melakukan clone repository ikuti langkah berikut:

1. Clone repository di folder yang kalian inginkan.

```console
git clone https://github.com/Arbaniasfi18/TubesPI_Kel4_APIUMKM.git
```

2. Install vendor dengan menggunakan composer (pastikan sudah ada composer di sistem).

```console
composer install
```

3.  Buat file baru dengan nama ".env". Setelah itu copy semua yang ada di file ".env.example", kemudian paste ke dalam file ".env".
4.  Generate APP_KEY.

```console
php artisan key:generate
```

5. Buat database mysql dengan nama tubes_pi.
6. Jalankan migrate.

```console
php artisan migrate --seed
```

7. Jalankan laravel.

```console
1. php artisan serve
```

## Cara Kontribusi

Untuk melakukan kontribusi ikuti langkah berikut:

1. Buat branch baru sesuai dengan jobdesc masing-masing.

```console
// Penamaan branch
<nama>
Contoh: arbani

// Membuat branch
git branch namaBranch (contoh: git branch arbani)

// Pindah ke branch
git checkout namaBranch (contoh: git checkout arbani)

// Hapus branch
git branch -d namaBranch (contoh: git branch -d arbani)
```

2. Buat kodingan untuk fitur yang sudah dibagikan.
3. Pastikan kodingan tidak ada **error** dan tidak mempengaruhi kodingan lain secara **fatal**.
4. Menambahkan file dari working directory ke staging index

```console
git add .

// Menambahkan file tertentu
git add index.blade.php
```

5. Mengecek status dari repository

```console
git status
```

6. Commit file
   Pastikan pesan commit yang dikirim sesuai dengan fitur yang dibuat:

-   feat: Menambahkan fitur, halaman, dan komponen baru.
-   fix: Menyelesaikan dan menghilangkan bug atau error.
-   test: Semua hal yang berkaitan dengan testing.
-   docs: Semua hal yang berkaitan dengan dokumentasi.
-   chore: Semua hal yang berkaitan dengan maintenance.

```console
git commit -m "pesan commit"

// Commit sesuai kategori
git commit -m "feat: add competition page"
git commit -m "fix: fix hide modal when button is pressed"
```

7. Push file ke repository. Jangan langsung push ke main, push ke branch sesuai yang kalian kerjakan.

```console
// Mengerjakan component
git push -u origin arbani
```

8. Lakukan pull request untuk di review dan di merge ke main branch.

## Mengambil update code dari Github

1. Pull update code

```console
git pull origin main
```

2. Jika terdapat merge conflict silakan dikabarin ke grup.
