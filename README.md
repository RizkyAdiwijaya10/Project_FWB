## <p align="center" style="margin-top: 0;">Website Profil Informatics Study Club</p>

<p align="center">
  <img src="/public/LogoUnsulbar.png" width="300" alt="LogoUnsulbar" />
</p>

### <p align="center">MICHAEL AGUSTIN</p>

### <p align="center">D0223310</p></br>

### <p align="center">Framework Web Based</p>

### <p align="center">2025</p>

---

## 🧑‍🤝‍🧑 Role dan Hak Akses

| Role         | Akses                                                                              |
| ------------ | ---------------------------------------------------------------------------------- |
| **Anggota**  | Akses landing page + Mengunggah karya                                              |
| **Pengurus** | Semua akses Anggota + Kelola anggota, testimoni, log aktivitas, bisa aprrove karya |
| **Admin**    | Semua akses Pengurus + Kelola user dan landing page                                |

---

## 🗃️ Struktur Database

### 1. Tabel `users`

| Field      | Tipe Data        | Keterangan               |
| ---------- | ---------------- | ------------------------ |
| id         | bigint (PK)      | ID unik                  |
| name       | varchar          | Nama pengguna            |
| email      | varchar (unique) | Email pengguna           |
| password   | varchar          | Password terenkripsi     |
| role       | enum             | anggota, pengurus, admin |
| nim        | char             | NIM anggota              |
| angkatan   | year             | Tahun angkatan           |
| created_at | timestamp        | Tanggal dibuat           |
| updated_at | timestamp        | Tanggal update           |

### 2. Tabel `creations`

| Field      | Tipe Data   | Keterangan                      |
| ---------- | ----------- | ------------------------------- |
| id         | bigint (PK) | ID creations                    |
| user_id    | foreign key | Relasi ke `users`               |
| nama_user  | varchar     | Diambil dari `users`            |
| title      | varchar     | Judul karya                     |
| deskripsi  | text        | Deskripsi karya                 |
| image_path | varchar     | Path gambar karya               |
| divisi     | enum        | Website, Mobile, IoT, UI/UX, AI |
| status     | enum        | Status dari karya postingan     |
| created_at | timestamp   | Tanggal dibuat                  |
| updated_at | timestamp   | Tanggal update                  |

### 3. Tabel `blogs`

| Field      | Tipe Data   | Keterangan           |
| ---------- | ----------- | -------------------- |
| id         | bigint (PK) | ID karya             |
| user_id    | foreign key | Relasi ke `users`    |
| nama_user  | varchar     | Diambil dari `users` |
| title      | varchar     | Judul karya          |
| deskripsi  | text        | Deskripsi karya      |
| image_path | varchar     | Path gambar karya    |
| created_at | timestamp   | Tanggal dibuat       |
| updated_at | timestamp   | Tanggal update       |

### 4. Tabel `landing_page_contents`

| Field      | Tipe Data   | Keterangan                   |
| ---------- | ----------- | ---------------------------- |
| id         | bigint (PK) | ID karya                     |
| section    | enum        | deskripsi, visi, misi        |
| content    | text        | Isi dari konten landing page |
| image_path | varchar     | Path konten                  |
| created_at | timestamp   | Tanggal dibuat               |
| updated_at | timestamp   | Tanggal update               |

### 5. Tabel `activity_logs`

| Field      | Tipe Data   | Keterangan                                  |
| ---------- | ----------- | ------------------------------------------- |
| id         | bigint (PK) | ID log                                      |
| user_id    | foreign key | Relasi ke `users`                           |
| aktivitas  | text        | Deskripsi aktivitas (misal: "unggah karya") |
| created_at | timestamp   | Tanggal dan waktu aktivitas                 |

### 6. Tabel `faqs`

| Field      | Tipe Data   | Keterangan                      |
| ---------- | ----------- | ------------------------------- |
| id         | bigint (PK) | ID FAQ                          |
| pertanyaan | text        | Pertanyaan umum dari user       |
| jawaban    | text        | Jawaban dari tim pengurus/admin |
| created_at | timestamp   | Tanggal dibuat                  |
| updated_at | timestamp   | Tanggal diperbarui              |

### 7. Tabel `sosmeds`

| Field      | Tipe Data   | Keterangan          |
| ---------- | ----------- | ------------------- |
| id         | bigint (PK) | ID sosial media     |
| instagram  | varchar     | URL ke sosial media |
| facebook   | varchar     | URL ke sosial media |
| github     | varchar     | URL ke sosial media |
| created_at | timestamp   | Tanggal dibuat      |
| updated_at | timestamp   | Tanggal diperbarui  |

### 8. Tabel `testimonials`

| Field      | Tipe Data   | Keterangan             |
| ---------- | ----------- | ---------------------- |
| id         | bigint (PK) | ID testimoni           |
| nama       | varchar     | Nama pemberi testimoni |
| pesan      | text        | Isi testimoni          |
| created_at | timestamp   | Tanggal dibuat         |
| updated_at | timestamp   | Tanggal diperbarui     |

### 9. Tabel `member_creations`

| Field       | Tipe Data   | Keterangan            |
| ----------- | ----------- | --------------------- |
| id          | bigint (PK) | ID creations          |
| user_id     | foreign key | Relasi ke `users`     |
| creation_id | foreign key | relasi ke `creations` |

## 🔗 Relasi Antar Tabel

| Tabel Asal      | Tabel Tujuan     | Relasi       | Penjelasan                                    |
| --------------- | ---------------- | ------------ | --------------------------------------------- |
| users(pengurus) | blogs            | one-to-many  | Satu user(pengurus) dapat membuat banyak blog |
| users           | activity_logs    | one-to-many  | Aktivitas dicatat per user                    |
| sosmeds         | users            | one-to-one   | Satu akun sosmed per user                     |
| ----------      | ---------------- | -----------  | --------------------------------------------- |
| users           | member_creations | one-to-many  | Satu user dapat memiliki banyak member karya  |
| creations       | member_creations | one-to-many  | Satu karya dapat memiliki banyak member karya |
| users           | creations        | many-to-many | Dihubungkan oleh tabel member_creations       |

---
