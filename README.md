# Tugas Praktikum 4 DPBO 2024

## Janji

Bismillah
Saya Themy Sabri Syuhada dengan NIM 2203903. Demi keberkahan-Nya, saya berjanji mengerjakan tugas praktikum 4 DPBO dengan jujur dan tidak melakukan kecurangan seperti yang telah dispesifikasikan.
Aamiin.

## Desain Program

1. Model (Model.php)
   Berisi kelas MemberModel yang bertanggung jawab untuk berinteraksi dengan basis data. Di sini, kita memiliki metode untuk menambah, mengambil, memperbarui, dan menghapus data anggota dari tabel mvc. Pada tahap perubahan, ditambahkan metode baru untuk menghapus anggota dan relasi antara tabel anggota dan aktivitas anggota.
2. Controller (Controller.php)
   Berisi kelas Controller yang bertindak sebagai perantara antara model dan view. Di sini, kita memanggil metode dari model untuk melakukan operasi CRUD pada data anggota. Pada tahap perubahan, ditambahkan metode baru untuk menghapus anggota dan menambahkan relasi antara tabel anggota dan aktivitas anggota.
3. View (index.php, create.php, edit.php)
   Berisi tampilan pengguna untuk menampilkan data, membuat anggota baru, dan memperbarui anggota. Tampilan ini menggunakan Bootstrap untuk tata letak yang responsif dan ramah pengguna. Pada tahap perubahan, tombol delete dimodifikasi untuk memperbarui relasi antara tabel anggota dan aktivitas anggota, dan menambahkan fitur notifikasi penghapusan.
4. Router (delete.php)
   Berisi kode untuk menangani operasi penghapusan anggota. Ketika pengguna mengklik tombol delete pada halaman index, mereka diarahkan ke file delete.php yang memproses penghapusan data anggota dan kemudian mengarahkan mereka kembali ke halaman utama setelah menampilkan pesan konfirmasi.

## Alur Program

1. Ketika pengguna membuka halaman utama (index.php), aplikasi memuat daftar anggota dari basis data dan menampilkannya dalam tabel.
2. Pengguna memiliki opsi untuk menambah anggota baru dengan mengklik tombol "Add New" yang mengarahkan mereka ke halaman create.php.
3. Di halaman create.php, pengguna dapat mengisi formulir dengan detail anggota baru dan mengirimkan formulir untuk membuat anggota baru. Setelah pengguna mengklik tombol "Submit", data anggota baru akan dimasukkan ke dalam basis data.
4. Pengguna juga dapat memperbarui detail anggota yang ada dengan mengklik tombol "Edit" di samping setiap entri anggota. Ini akan membawa mereka ke halaman edit.php di mana mereka dapat memperbarui detail anggota dan menyimpan perubahan.
5. Ketika pengguna mengklik tombol "Delete" di samping setiap entri anggota di halaman utama (index.php), aplikasi akan menghapus anggota yang sesuai dari basis data dan menampilkan pesan konfirmasi penghapusan.
6. Setelah penghapusan, halaman utama akan diperbarui secara otomatis untuk mencerminkan perubahan dalam basis data.
