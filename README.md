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

_app = Flask(__name__)_

_app.config['SECRET_KEY'] = 'ajengduarrr!'_

_socketio = SocketIO(app)_

Pada kode diatas akan menciptakan sebuah objek aplikasi Flask (app) dan objek SocketIO (socketio). Kemudian untuk fungsi dari _['SECRET_KEY']_ ialah untuk melindungan sesi aplikasi Flask.

_chat_rooms = {}_

Kode diatas ialah berfungsi untuk membuat sebuah variabel berbentuk objek yang dapat menampung data room dari aplikasi chat.

@app.route('/')
def index():
    return render_template('index.html')

Kode ini memiliki fungsi route utama yang merender template 'index.html' saat pengguna mengakses halaman utama aplikasi.

_@app.route('/chat', methods=['POST'])
def chat():
    username = request.form.get('username')
    room = request.form.get('room')
    return render_template('chat.html', username=username, room=room)_

Kode ini adalah route yang merespons data form yang disubmit oleh pengguna saat mereka masuk ke ruang obrol. Data ini kemudian digunakan untuk merender template 'chat.html' dengan informasi username dan room.

@socketio.on('joined')
def handle_joined(data):
    username = data['username']
    room = data['room']
    join_room(room)
    socketio.emit('status', {'msg': username + ' has entered the room.'}, room=room)

Event handler ini menangani peristiwa ketika pengguna bergabung ke dalam ruangan obrol. user akan bergabung ke ruangan menggunakan join_room dan mengirim pesan ke semua pengguna di ruangan melalui socketio.emit.
