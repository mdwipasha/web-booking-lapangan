# Web Booking Lapangan
Sebuah **aplikasi web untuk pemesanan dan manajemen lapangan olahraga** berbasis **Laravel**.  
Tujuannya untuk mempermudah pengguna dalam mencari, melihat detail, dan melakukan booking lapangan secara online — mirip sistem marketplace untuk sewa lapangan futsal, badminton, basket, dan lainnya.

> 🚧 **Status:** Dalam tahap pengembangan awal (belum selesai)  

---

## ✨ Fitur Utama (Rencana)
- ✅ **Autentikasi pengguna** (login & register)
- ✅ **Halaman daftar lapangan**
- ✅ **Detail lapangan** dengan foto dan deskripsi
- ✅ **Sistem booking jadwal lapangan**
- 🚧 **Integrasi pembayaran (Midtrans)**
- 🚧 **Dashboard admin (Filament Panel)**
- 🚧 **Manajemen jadwal & transaksi**
- 🚧 **Integrasi AI Recommendation**

## ⚙️ Teknologi yang Digunakan

- **Framework:** Laravel 12  
- **Frontend:** Blade + TailwindCSS  
- **Admin Panel:** Filament v4 
- **Payment Gateway:** Midtrans (akan diintegrasikan)  
- **Library pendukung:** Alpine.js, Livewire, Breeze 

---

## 🚀 Cara Instalasi & Menjalankan

```bash
# 1. Clone repository
git clone https://github.com/mdwipasha/web-booking-lapangan.git

# 2. Masuk ke folder project
cd web-booking-lapangan

# 3. Install dependencies
composer install
npm install && npm run dev

# 4. Generate app key
php artisan key:generate

# 5. Konfigurasi database di .env

# 6. Migrasi database
php artisan migrate --seed

# 7. Jalankan server lokal
php artisan serve
```
---

## 🧠 Catatan 
Project ini masih terus dikembangkan — jadi tampilan dan fitur mungkin akan berubah seiring waktu.  
Tujuan utama web ini lebih ke **latihan skill fullstack** dan **menambah portofolio pribadi**, bukan untuk tujuan komersial (setidaknya untuk saat ini).

---

## 💡 Status: On Development 🚧

Stay tuned — update akan dilakukan secara bertahap begitu fitur-fitur utama mulai stabil.

---

Enjoy coding & semangat terus! Kalau butuh tambahan fitur atau ada ide lain, tinggal kabarin aja. 🚀
