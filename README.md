## Nama Kelompok
Idznii Sholekha (G1F022001)

Dewi Margiani (G1F022037)

Diajeng Noviana Sari (G1F022065)

### Program yang kami jalankan adalah Server ruang obrolan menggunakan Python: Menggunakan ide soket dan threading, skrip ini membantu menyiapkan Ruang Obrolan sederhana yang memungkinkan beberapa klien untuk terhubung. Kode ini bekerja dengan ide soket dan threading.

## Source Code
<img width="540" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/163c6261-90d9-4a3e-8223-4dd1a1dc84dc">

## Penjelasan Source Code
<img width="295" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/15126959-ed52-468f-bf79-0fe059007cb2">

Pada kode diatas berfungsi untuk mengimport library dari dalam flask agar dapat digunakan service web menggunakan bahasa pemrograman python kemudian digunakan juga 
_render_template_ untuk menampilkan file html. Kemudian dengan kode _request_ berfungsi untuk menampung inputan dari html dan _url_for_ artinya untuk menjalankan form ke dalam routing yang kita inginkan.

<img width="248" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/40d81c6e-92f7-4192-89ea-0d776b664fcc">

Pada kode diatas import statement itu seperti membuka kotak alat. Nah, dari kotak alat Flask SocketIO, kita ambil beberapa alat spesifik, yaitu SocketIO, join_room, dan leave_room. SocketIO itu ibaratnya alat utama yang bisa kita gunakan untuk bikin layanan obrolan atau notifikasi langsung. Terus, join_room digunakan buat masuk ke dalam ruang percakapan tertentu, kayak masuk ke dalam ruang obrolan. Sementara leave_room digunakan buat keluar dari ruang obrolan. Jadi, dengan alat-alat ini, kita bisa masuk dan keluar dari ruangan obrolan sesuai kebutuhan.

<img width="188" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/c2225d0c-939f-49fc-9c29-9694c78e82a2">

Pada kode diatas akan menciptakan sebuah objek aplikasi Flask (app) dan objek SocketIO (socketio). Kemudian untuk fungsi dari _['SECRET_KEY']_ ialah untuk melindungan sesi aplikasi Flask.

<img width="73" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/1d2ef1b8-0d2f-4288-a182-8b4f1b9a01a1">

Kode diatas ialah berfungsi untuk membuat sebuah variabel berbentuk objek yang dapat menampung data room dari aplikasi chat.

<img width="184" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/19cc5e0e-2109-44eb-9ed2-fc3dde9c1c15">

Kode ini memiliki fungsi route utama yang merender template 'index.html' saat pengguna mengakses halaman utama aplikasi.

<img width="291" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/17efdb60-b3ee-465c-b1e0-7026133d41e7">

Kode ini adalah route yang merespons data form yang disubmit oleh pengguna saat mereka masuk ke ruang obrol. Data ini kemudian digunakan untuk merender template 'chat.html' dengan informasi username dan room.

<img width="360" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/f566ef5e-9720-4bf3-ad9d-24339c95d833">

Pada kode diatas merupakan penjelasan dari Event handler yang menangani peristiwa ketika pengguna bergabung ke dalam ruangan obrol. user akan bergabung ke ruangan menggunakan join_room dan mengirim pesan ke semua pengguna di ruangan melalui socketio.emit.

<img width="384" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/6a66ea94-3eed-4b3e-ba46-1736cf0c84db">

Pada kode diatas merupakan Event handler yang menangani peristiwa ketika pengguna mengirim pesan. 
Pesan tersebut kemudian disiarkan ke semua pengguna di ruangan dengan menggunakan socketio.emit.

<img width="333" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/b8715d94-ffdb-4283-84ea-864187c5fcfd">

Pada kode diatas merupakan Event handler yang menangani peristiwa ketika pengguna keluar dari ruangan obrol. Mereka meninggalkan ruangan menggunakan leave_room dan mengirim pesan ke semua pengguna di ruangan melalui socketio.emit.

<img width="178" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/6faae5fb-7861-4f0c-b10d-28c2386a41f6">

Pada kode diatas merupakan kode yang akan  menjalankan aplikasi Flask menggunakan SocketIO. Jika aplikasi dijalankan langsung (bukan diimpor sebagai modul), maka mode debug akan diaktifkan.
