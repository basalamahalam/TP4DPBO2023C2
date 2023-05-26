# TUGASPRAKTIKUM3DPBO2023
### Saya Muhammad Alam Basalamah NIM 2101677 mengerjakan TP3 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Tugas
1. Buatlah database berdasarkan kode tersebut
2. Ubah arsitektur project tersebut menggunakan MVC
3. Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
4. Buat CRUD dari tabel  baru tersebut

## Desain Database
![designtp4](https://github.com/basalamahalam/TP4DPBO2023C2/assets/101177095/438a831b-ee63-4739-9cee-ef9cce136e28)

## Alur Program

Get Members:
1. Masuk kedalam Halaman members
2. Pada bagian Templates khususnya index.html yang menampilkan halaman members, dia akan memanggil methode render() yang ada pada Members.views.php dengan cara mereplace bagian 'DATA_TABEL' dengan list data members yang diberikan perintah foreach sehingga members tersebut akan ditampilkan sesuai dengan banyaknya members itu sendiri
3. Nah, Members.views.php sendiri mendapatkan data dari Controller ke Models dari members.

Add Members:
1. Input Data
2. Data akan diberikan ke index.php lalu data tersebut akan diberikan ke methode add() pada Controller yaitu Members.controllers.php
3. Data tersebut akan diteruskan ke methode add() yang ada pada kelas model yaitu Members.class.php oleh Members.controller.php
4. Eksekusi Query

Edit Members:
1. Isi form dengan data yang dimilik oleh subjek yang akan diubah dengan mengisi bagian FORM_UPDATE pada bagian indexUpdate.html oleh methode renderUpdate() yang ada pada Members.Views.php
2. Ubah Data
3. Data akan diberikan ke index.php lalu data tersebut akan diberikan ke methode edit() pada Members.controllers.php
4. Data tersebut akan diteruskan ke methode Update() yang ada pada Members.Models.php
5. Eksekusi Query

Hapus Members:
1. Pilih Data yang akan didelete
2. Data yang akan didelete yaitu id uniquenya akan diberikan ke methode delete() yang ada pada Members.controllers.php
3. Data tersebut akan diteruskan ke methode Delete() yang ada pada Members.Models.php
4. Eksekusi Query

*TAMBAHAN: UNTUK BAGIAN PARTAI TIDAK JAUH BEDA SECARA ALUR PROGRAMNYA, HANYA PERBEDAAN DALAM FILENYA SAJA.*

## Video Preview
https://github.com/basalamahalam/TP4DPBO2023C2/assets/101177095/a6a70f4c-0460-4aa8-8f33-80d6d9e03de3
