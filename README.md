## Nama Kelompok
Idznii Sholekha (G1F022001)

Dewi Margiani (G1F022037)

Diajeng Noviana Sari (G1F022065)

### Program yang kami jalankan adalah Server ruang obrolan menggunakan Python: Menggunakan ide soket dan threading, skrip ini membantu menyiapkan Ruang Obrolan sederhana yang memungkinkan beberapa klien untuk terhubung. Kode ini bekerja dengan ide soket dan threading.

## Source Code
<img width="540" alt="image" src="https://github.com/DewiMargiani/bahan-ajar-pbo-dewi/assets/150019055/163c6261-90d9-4a3e-8223-4dd1a1dc84dc">

## Penjelasan Source Code
_from flask import Flask, render_template, request, redirect, url_for_

Pada kode diatas berfungsi untuk mengimport library dari dalam flask agar dapat digunakan service web menggunakan bahasa pemrograman python kemudian digunakan juga 
_render_template_ untuk menampilkan file html. Kemudian dengan kode _request_ berfungsi untuk menampung inputan dari html dan _url_for_ artinya untuk menjalankan form ke dalam routing yang kita inginkan.

_from flask_socketio import SocketIO, join_room, leave_room_

Pada kode diatas import statement itu seperti membuka kotak alat. Nah, dari kotak alat Flask SocketIO, kita ambil beberapa alat spesifik, yaitu SocketIO, join_room, dan leave_room. SocketIO itu ibaratnya alat utama yang bisa kita gunakan untuk bikin layanan obrolan atau notifikasi langsung. Terus, join_room digunakan buat masuk ke dalam ruang percakapan tertentu, kayak masuk ke dalam ruang obrolan. Sementara leave_room digunakan buat keluar dari ruang obrolan. Jadi, dengan alat-alat ini, kita bisa masuk dan keluar dari ruangan obrolan sesuai kebutuhan.
