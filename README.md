# lsp_ReuseFramework
Ini adalah aplikasi untuk menyimpan informasi komik menggunakan sistem CRUD dan menggunakan prinsip MVC. Aplikasi ini dibuat menggunakan Sublime, XAMPP dan CodeIgniter-3.1.13

# Koneksi Database
Pada gambar menampilkan settingan menyetel database bernama buku
![image](https://user-images.githubusercontent.com/76039896/176997732-fd5eff46-dd0f-4a2e-b897-db57d7c9bdcd.png)

# Table Pada Database Buku
Table Komik

Pada database buku terdapat table komik

![image](https://user-images.githubusercontent.com/76039896/176997746-f1c21065-b5b2-437b-a21c-f50f205adbfc.png)

# Screenshoot Kodingan Fungsi CRUD

Fungsi Melihat Data

Gambar 1

Memperlihatkan fungsi memngambil query data getDataKomik pada model M_Komik lalu menampilkan halaman home dengan data yang diambil tadi

![image](https://user-images.githubusercontent.com/76039896/176997777-325b866a-636b-458a-bc08-371ca384906d.png)

Gambar 2
Memperlihatkan fungsi getDataKomik untuk mengambil data query dari tabel komik

![image](https://user-images.githubusercontent.com/76039896/176998023-cca56981-33ee-47e1-afab-159bf7168da9.png)

Gambar3

Halaman home yang memperlihatkan looping untuk menampilkan table record yang didapat dari query $queryAllKmk yang bisa dilihat dari gambar 1

![image](https://user-images.githubusercontent.com/76039896/176997778-658c2179-1c7f-4602-8588-cb8ec781127d.png)

Fungsi Tambah

Gambar 1

Memperlihatkan fungsiTambah untuk membuat variabel penampung  data yang akan dimasukan ke array dan array data untuk di input lalu menjalankan fungsi insertDataKomik di model M_Komik dengan inputan data array $ArrInsert	

![image](https://user-images.githubusercontent.com/76039896/176997787-ca2e1c78-ca62-4c3e-912e-e84bfba130f3.png)

Gambar 2

Memperlihatkan fungsi insert data ke tabel komik dengan data $data

![image](https://user-images.githubusercontent.com/76039896/176997789-174372b5-8e26-4882-8c7c-aa81360d82f0.png)

Update Data


Gambar 1

Memperlihatkan fungsiEdit untuk membuat	variabel penampung  data yang akan dimasukan ke array dan array data data baru untuk update lalu menjalankan fungsi updateDataKomik di model M_Komik dengan inputan data array $ArrUpdate yang memiliki id $id_komik

![image](https://user-images.githubusercontent.com/76039896/176997792-86a5ca83-1a50-4531-ab22-a5a3688d013b.png)

Gambar 2

Memperlihatkan fungsi insert data update ke tabel komik dengan data $data dan yang memiliki id $id_komik

![image](https://user-images.githubusercontent.com/76039896/176997797-c21cd13e-620b-4558-9788-f5b07dc5b57f.png)

Delete Data

Gambar 1

Memperlihatkan menjalankan fungsi deleteDataKomik di model M_Komik yang memiliki id $id_komik

![image](https://user-images.githubusercontent.com/76039896/176997805-dd3a7362-c334-406d-9612-b75052b8ed12.png)

Gambar 2

Memperlihatkan fungsi menghapus data dari tabel komik yang memiliki id $id_komik

![image](https://user-images.githubusercontent.com/76039896/176997806-9a54611a-43a4-4a99-91fa-2307a043c8cd.png)

# Tes Uji Program Database

Kondisi Awal

Kondisi awal data pada halaman Home dan database

![image](https://user-images.githubusercontent.com/76039896/176997859-c4b183e5-4292-4ed0-9e37-92e77adb9afc.png)
![image](https://user-images.githubusercontent.com/76039896/176997819-0bd672c5-df20-4e32-a243-be097b94fd37.png)

Test 1 - Menambah Data

![image](https://user-images.githubusercontent.com/76039896/176998491-c640e029-4e27-4ab0-90f0-8a6d02e47374.png)
![image](https://user-images.githubusercontent.com/76039896/176998496-ecbc9aa1-7b3a-4f42-baad-22315bdf2e6c.png)

Test 2 - Mengedit Data

![image](https://user-images.githubusercontent.com/76039896/176998501-46f4b282-70d6-4606-96dd-0cf902e7a3d9.png)
![image](https://user-images.githubusercontent.com/76039896/176998507-eed45fb2-cc16-47c2-ae38-0caec76e3be9.png)
![image](https://user-images.githubusercontent.com/76039896/176998510-eed493ac-99b7-4d49-896e-7c8293cc1f54.png)
![image](https://user-images.githubusercontent.com/76039896/176998532-a38b5e91-c5fd-4207-b96b-e58706ca8a49.png)

Test 3 - Delete Data

![image](https://user-images.githubusercontent.com/76039896/176998616-dbe548bf-e243-4c28-b43c-046b439f7c7e.png)
![image](https://user-images.githubusercontent.com/76039896/176998644-8a6771a3-2db7-42e6-80a2-37442bd077a4.png)

# Flowchart

Pada mulai akan menampilkan halaman home, pada halaman home terdapat tombol tambah data akan menampilkan tabel yang berisi data komik yang tersimpan,

Ketika pengguna menekan tombol tambah, maka akan menampilkan halaman tambah dan pengguna harus menginput data. Setelah dimasukan, data akan di proses untuk di input ke dalam tabel komik pada database buku dan akan menampilkan kembali menu utama

Ketika pengguna menekan tombol edit, maka akan menampilkan halaman edit yang formnya sudah teriss dengan data data yang ingin di edit, dan pengguna harus menginput data. Setelah dimasukan, data akan di proses untuk di update ke dalam tabel komik pada database buku dan akan menampilkan kembali menu utama

Ketika pengguna menekan tombol hapus maka data akan di proses untuk di hapus

![komik](https://user-images.githubusercontent.com/76039896/176999273-1e2c5320-a963-4491-974d-4f6f30c15c5d.png)

# Dokumentasi Kodingan Dengan Komentar

MODEL

![image](https://user-images.githubusercontent.com/76039896/176999755-5652012b-bbc1-47a0-b646-6e874ac577a6.png)

CONTROLLER

![image](https://user-images.githubusercontent.com/76039896/176999760-159cc9f4-5574-4ae5-a391-e1d7b3636880.png)
![image](https://user-images.githubusercontent.com/76039896/176999769-35c2964e-39c3-429b-a739-cdbac6132d5a.png)
![image](https://user-images.githubusercontent.com/76039896/176999774-d4e132b9-820e-40bd-9328-17e5d2015c3e.png)

VIEW HOME

![image](https://user-images.githubusercontent.com/76039896/176999780-a59ca495-f716-4586-bf7e-9358ffaf7952.png)

VIEW TAMBAH

![image](https://user-images.githubusercontent.com/76039896/176999784-630e5ae1-84af-43bd-9362-ef7287532f7f.png)
![image](https://user-images.githubusercontent.com/76039896/176999798-41b9c273-7fdf-4ce1-ab49-11d6bba1dea6.png)

VIEW EDIT

![image](https://user-images.githubusercontent.com/76039896/176999806-24775ca8-81e0-4ee3-8f98-808009040a8b.png)
![image](https://user-images.githubusercontent.com/76039896/176999808-17fb2b9b-e9ff-4aef-b9be-90d2c36e7b66.png)
![image](https://user-images.githubusercontent.com/76039896/176999812-d8489349-d17f-4034-8ca0-8d993ac5d16e.png)
