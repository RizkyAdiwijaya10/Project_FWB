SISTEM RESERVASI RESTORAN














RIZKY ADIWIJAYA
D0222045






FRAMEWORK WEB BASED
2025


ROLE : 
1. Admin
Berperan sebagai pengelola utama sistem restoran.
Fitur yang bisa dilakukan:
* Mengelola data pengguna.
* Menambah, mengedit, dan menghapus kategori menu.
* Menambah, mengedit, dan menghapus item menu.
* Melihat semua reservasi dan mengubah statusnya.
* Melihat laporan transaksi dan statistik restoran.
* Mengelola semua pesanan termasuk penunjukan chef.

2. Customer
Berperan sebagai pelanggan restoran yang menggunakan sistem untuk reservasi dan pemesanan makanan.
Fitur yang bisa dilakukan:
* Mendaftar dan login ke dalam sistem.
* Melihat daftar menu dan kategori makanan.
* Melakukan reservasi meja dengan memilih tanggal, waktu, jumlah tamu, dan permintaan khusus.
* Melakukan pemesanan makanan sebelum atau saat reservasi.
* Melihat riwayat pesanan dan statusnya.
* Memberikan permintaan khusus untuk makanan 

3. Chef
Berperan sebagai Koki atau juru masak yang menangani persiapan makanan.
Fitur yang bisa dilakukan:
* Melihat daftar pesanan makanan yang ditugaskan kepadanya.
* Memperbarui status pesanan dari "preparing" ? "ready" ? "delivered".
* Melihat item menu yang ditugaskan.


Tabel-tabel database beserta field dan tipe datanya.

1. Tabel Users
Field
Tipe Data
Keterangan
id
bigint (auto inc)
Primary key
nama
string
Nama lengkap user
email
string
Alamat email (unik)
password
string
Password yang di-hash
role
enum
Peran user: 'admin', 'customer', atau 'chef' (default: 'customer')
no_hp
string (nullable)
Nomor telepon (opsional)
alamat
text (nullable)
Alamat lengkap (opsional)
remember_token
string (nullable)
Token untuk remember me functionality
created_at
timestamp
Waktu pembuatan record
updated_at
timestamp
Waktu terakhir update record


2. Tabel Kategori 
Field
Tipe Data
Keterangan
id
bigint (auto inc)
Primary key
nama
string
Nama kategori
Slug
string
URL-friendly version dari nama (unik)
deskripsi
text
Penjelasan tentang kategori (opsional)
Created_at
timestamp
Waktu pembuatan record
Updated_at
timestamp
Waktu terakhir update record

Relasi antar tabel:
* kategori ke menu_items: One-to-Many (satu kategori bisa memiliki banyak menu)

3. Tabel Menu_items
Field
Tipe Data
Keterangan
id
Bigint(auto inc)
Primary key
kategori_id
bigint
Foreign key ke tabel kategori (relasi many-to-one)
nama
string
Nama menu item
slug
string
URL-friendly version dari nama (unik)
deskripsi
text
Detail tentang menu
harga
decimal(10,2)
Harga menu (2 digit desimal)
gambar
string (nullable)
Path/link ke gambar menu (opsional)
is_available
boolean
Status ketersediaan (default: true)
created_at
timestamp
Waktu pembuatan record
Updated_at
timestamp
Waktu terakhir update record

Relasi antar tabel:
* kategori ke menu_items: One-to-Many (satu kategori bisa memiliki banyak menu

4. Tabel Reservasi
Field
Tipe Data
Keterangan
id
bigint (auto inc)
Primary key
user_id
bigint
Foreign key ke tabel users (customer yang memesan)
tanggal_reservasi
date
Tanggal reservasi
waktu_reservasi
time
Jam reservasi
jumlah_tamu
integer
Jumlah orang yang akan datang
special_request
text (nullable)
Permintaan khusus (opsional)
status
enum
Status reservasi: 'pending', 'confirmed', 'cancelled' (default: 'pending')
created_at
timestamp
Waktu pembuatan record
updated_at
timestamp
Waktu terakhir update record

Relasi antar tabel:
* users ke reservasi: One-to-Many (seorang customer bisa memiliki banyak reservasi)

5. Tabel Orders
Field
Tipe Data
Keterangan
id
bigint (auto inc)
Primary key
user_id
bigint
Foreign key ke tabel users (customer yang memesan)
reservasi_id
bigint (nullable)
Foreign key ke tabel reservasi (jika terkait reservasi)
total_harga
decimal(12,2)
Total harga pesanan (12 digit, 2 desimal)
status
enum
Status pesanan: 'pending', 'preparing', 'ready', 'delivered', 'cancelled'
catatan
text (nullable)
Catatan khusus untuk pesanan (opsional)
created_at
timestamp
Waktu pembuatan record
updated_at
timestamp
Waktu terakhir update record

Relasi antar tabel:
* users ke orders: One-to-Many (seorang customer bisa memiliki banyak pesanan)
* reservasi ke orders: One-to-Many (satu reservasi bisa memiliki banyak pesanan)

6. Tabel Order_items
Field
Tipe Data
Keterangan
id
bigint (auto inc)
Primary key
order_id
bigint
Foreign key ke tabel orders
menu_item_id
bigint
Foreign key ke tabel menu_items
quantity
integer
Jumlah item yang dipesan
price
decimal(10,2)
Harga per item saat dipesan (2 digit desimal)
special_request
text (nullable)
Permintaan khusus untuk item ini (opsional)
created_at
timestamp
Waktu pembuatan record
updated_at
timestamp
Waktu terakhir update record

Relasi antar tabel:
* orders ke order_items: One-to-Many (satu order bisa memiliki banyak item)
* menu_items ke order_items: One-to-Many (satu menu bisa muncul di banyak order)


