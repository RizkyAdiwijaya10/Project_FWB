Here's the formatted version of your restaurant reservation system documentation:

```markdown
## <p align="center" style="margin-top: 0;">SISTEM RESERVASI RESTORAN</p>

<p align="center">
  <img src="/public/LogoUnsulbar.png" width="300" alt="LogoUnsulbar" />
</p>

### <p align="center">RIZKY ADIWIJAYA</p>

### <p align="center">D022045</p></br>

### <p align="center">FRAMEWORK WEB BASED</p>

### <p align="center">2025</p>

---

## 🧑‍🤝‍🧑 Role dan Hak Akses

| Role         | Akses                                                                              |
|--------------|-----------------------------------------------------------------------------------|
| **Admin**    | Mengelola data pengguna, kategori menu, item menu, reservasi, laporan transaksi, dan penunjukan chef |
| **Customer** | Melihat menu, melakukan reservasi, memesan makanan, melihat riwayat pesanan, memberikan permintaan khusus |
| **Chef**     | Melihat daftar pesanan, memperbarui status pesanan, melihat item menu yang ditugaskan |

---

## 🗃️ Struktur Database

### 1. Tabel `users`

| Field          | Tipe Data        | Keterangan                              |
|----------------|------------------|----------------------------------------|
| id             | bigint (PK)      | ID unik                                |
| nama           | varchar          | Nama lengkap user                      |
| email          | varchar (unique) | Alamat email                           |
| password       | varchar          | Password terenkripsi                   |
| role           | enum             | admin, customer, chef (default: customer) |
| no_hp          | varchar          | Nomor telepon (opsional)               |
| alamat         | text             | Alamat lengkap (opsional)              |
| remember_token | varchar          | Token untuk remember me                |
| created_at     | timestamp        | Tanggal dibuat                         |
| updated_at     | timestamp        | Tanggal update                         |

### 2. Tabel `kategori`

| Field      | Tipe Data   | Keterangan                     |
|------------|-------------|-------------------------------|
| id         | bigint (PK) | ID kategori                   |
| nama       | varchar     | Nama kategori                 |
| slug       | varchar     | URL-friendly version dari nama |
| deskripsi  | text        | Penjelasan tentang kategori   |
| created_at | timestamp   | Tanggal dibuat                |
| updated_at | timestamp   | Tanggal update                |

### 3. Tabel `menu_items`

| Field        | Tipe Data   | Keterangan                     |
|--------------|-------------|-------------------------------|
| id           | bigint (PK) | ID menu                       |
| kategori_id  | bigint (FK) | Relasi ke `kategori`          |
| nama         | varchar     | Nama menu item                |
| slug         | varchar     | URL-friendly version dari nama |
| deskripsi    | text        | Detail tentang menu           |
| harga        | decimal     | Harga menu (2 digit desimal)  |
| gambar       | varchar     | Path/link ke gambar menu      |
| is_available | boolean     | Status ketersediaan           |
| created_at   | timestamp   | Tanggal dibuat                |
| updated_at   | timestamp   | Tanggal update                |

### 4. Tabel `reservasi`

| Field            | Tipe Data   | Keterangan                      |
|------------------|-------------|--------------------------------|
| id               | bigint (PK) | ID reservasi                   |
| user_id          | bigint (FK) | Relasi ke `users`              |
| tanggal_reservasi| date        | Tanggal reservasi              |
| waktu_reservasi  | time        | Jam reservasi                  |
| jumlah_tamu      | integer     | Jumlah orang                   |
| special_request  | text        | Permintaan khusus              |
| status           | enum        | pending, confirmed, cancelled  |
| created_at       | timestamp   | Tanggal dibuat                 |
| updated_at       | timestamp   | Tanggal update                 |

### 5. Tabel `orders`

| Field        | Tipe Data   | Keterangan                      |
|--------------|-------------|--------------------------------|
| id           | bigint (PK) | ID pesanan                     |
| user_id      | bigint (FK) | Relasi ke `users`              |
| reservasi_id | bigint (FK) | Relasi ke `reservasi`          |
| total_harga  | decimal     | Total harga pesanan            |
| status       | enum        | Status pesanan                 |
| catatan      | text        | Catatan khusus                 |
| created_at   | timestamp   | Tanggal dibuat                 |
| updated_at   | timestamp   | Tanggal update                 |

### 6. Tabel `order_items`

| Field           | Tipe Data   | Keterangan                      |
|-----------------|-------------|--------------------------------|
| id              | bigint (PK) | ID item pesanan                |
| order_id        | bigint (FK) | Relasi ke `orders`             |
| menu_item_id    | bigint (FK) | Relasi ke `menu_items`         |
| quantity        | integer     | Jumlah item yang dipesan       |
| price           | decimal     | Harga per item                |
| special_request | text        | Permintaan khusus untuk item   |
| created_at      | timestamp   | Tanggal dibuat                 |
| updated_at      | timestamp   | Tanggal update                 |

---

## 🔗 Relasi Antar Tabel

| Tabel Asal  | Tabel Tujuan | Relasi       | Penjelasan                                    |
|-------------|--------------|-------------|----------------------------------------------|
| users       | reservasi    | one-to-many | Satu user bisa memiliki banyak reservasi     |
| users       | orders       | one-to-many | Satu user bisa memiliki banyak pesanan       |
| kategori    | menu_items   | one-to-many | Satu kategori bisa memiliki banyak menu      |
| reservasi   | orders       | one-to-many | Satu reservasi bisa memiliki banyak pesanan  |
| orders      | order_items  | one-to-many | Satu order bisa memiliki banyak item pesanan |
| menu_items  | order_items  | one-to-many | Satu menu bisa muncul di banyak order        |
```
