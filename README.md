# TugasWeb-P10-BlogCRUD

## Tugas Rutin 10 — Blog CRUD Laravel

Project ini merupakan aplikasi Blog sederhana yang dibuat menggunakan Laravel. 
Aplikasi ini menerapkan konsep CRUD (Create, Read, Update, Delete) untuk mengelola data postingan blog.

## Identitas

- Nama: Anandita Wulanda Limbong
- Program Studi: Ilmu Komputer
- Kelas: C

## Teknologi yang Digunakan

- Laravel 9
- PHP 8
- MySQL
- Blade Template
- XAMPP
- Bootstrap/HTML & CSS sederhana

## Fitur

- Menampilkan daftar post
- Menambahkan post
- Melihat detail post
- Mengedit post
- Menghapus post
- Validasi form
- Menampilkan pesan sukses
- Pagination
- Blade Component
- Route Resource
- Route Model Binding

## Struktur Utama

```text
app/
├── Http/
│   └── Controllers/
│       └── PostController.php
├── Models/
│   └── Post.php
└── View/
    └── Components/

database/
└── migrations/
    └── create_posts_table.php

resources/
└── views/
    ├── components/
    │   ├── alert.blade.php
    │   └── card.blade.php
    ├── layouts/
    │   └── app.blade.php
    └── posts/
        ├── index.blade.php
        ├── create.blade.php
        ├── show.blade.php
        └── edit.blade.php

routes/
└── web.php
