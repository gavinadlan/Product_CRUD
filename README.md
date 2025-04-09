# 🛠️ Technical Test - Web Development Intern (Aksesmu)

Aplikasi sederhana untuk mengelola data **Produk** menggunakan Laravel 11, Tailwind CSS, dan MySQL, sesuai dengan ketentuan dari tim rekrutmen **PT Sumber Trijaya Lestari (Aksesmu)**.

## 🔧 Tech Stack

-   Laravel 11
-   Tailwind CSS
-   MySQL
-   Blade Templates

## ✅ Fitur Aplikasi

-   **List Produk**: Menampilkan semua produk dalam bentuk tabel.
-   **Tambah Produk**: Form untuk menambahkan produk baru dengan validasi.
-   **Edit Produk**: Mengedit data produk yang sudah ada.
-   **Hapus Produk**: Menghapus produk dari database dengan konfirmasi.
-   **Seeder**: Berisi minimal 5 data produk awal.

## ⚙️ Struktur Tabel Product

-   `id` (Primary Key, Auto Increment)
-   `name` (String, max: 100 karakter)
-   `description` (Text, optional)
-   `price` (Decimal, 10,2)
-   `stock` (Integer, default: 0)
-   `created_at` & `updated_at` (Timestamps)

---

## 🚀 Cara Menjalankan Project

```bash
# Clone repo
git clone https://github.com/username/nama-repo.git
cd nama-repo

# Install dependency
composer install
npm install && npm run build

# Copy file env dan generate key
cp .env.example .env
php artisan key:generate

# Atur konfigurasi database di file .env
# Contoh:
# DB_DATABASE=produk_db
# DB_USERNAME=root
# DB_PASSWORD=

# Jalankan migrasi & seeder
php artisan migrate --seed

# Jalankan server
php artisan serve
```
