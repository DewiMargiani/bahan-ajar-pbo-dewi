## Nama Kelompok
Idznii Sholekha (G1F022001)
Dewi Margiani (G1F022037)
Diajeng Noviana Sari (G1F022065)

## Program yang kami jalankan adalah Server ruang obrolan menggunakan Python: Menggunakan ide soket dan threading, skrip ini membantu menyiapkan Ruang Obrolan sederhana yang memungkinkan beberapa klien untuk terhubung. Kode ini bekerja dengan ide soket dan threading.

## Source Code
from flask import Flask, render_template, request, redirect, url_for 

from flask_socketio import SocketIO, join_room, leave_room 

app = Flask(__name__)
app.config['SECRET_KEY'] = 'ajengduarrr!'
socketio = SocketIO(app)

chat_rooms = {}

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/chat', methods=['POST'])
def chat():
    username = request.form.get('username')
    room = request.form.get('room')
    return render_template('chat.html', username=username, room=room)

@socketio.on('joined')
def handle_joined(data):
    username = data['username']
    room = data['room']
    join_room(room)
    socketio.emit('status', {'msg': username + ' has entered the room.'}, room=room)

@socketio.on('send_message')
def handle_send_message(data):
    username = data['username']
    message = data['message']
    room = data['room']
    socketio.emit('receive_message', {'username': username, 'message': message}, room=room)

@socketio.on('left')
def handle_left(data):
    username = data['username']
    room = data['room']
    leave_room(room)
    socketio.emit('status', {'msg': username + ' has left the room.'}, room=room)

if __name__ == '__main__':
    socketio.run(app, debug=True)

## Penjelasan Source Code
_from flask import Flask, render_template, request, redirect, url_for_
Pada kode diatas berfungsi untuk mengimport library dari dalam flask agar dapat digunakan service web menggunakan bahasa pemrograman python kemudian digunakan juga _render_template_ untuk menampilkan file html. Kemudian dengan kode _request_ berfungsi untuk menampung inputan dari html dan _url_for_ artinya untuk menjalankan form ke dalam routing yang kita inginkan.

_from flask_socketio import SocketIO, join_room, leave_room_
Pada kode diatas import statement itu seperti membuka kotak alat. Nah, dari kotak alat Flask SocketIO, kita ambil beberapa alat spesifik, yaitu SocketIO, join_room, dan leave_room. SocketIO itu ibaratnya alat utama yang bisa kita gunakan untuk bikin layanan obrolan atau notifikasi langsung. Terus, join_room digunakan buat masuk ke dalam ruang percakapan tertentu, kayak masuk ke dalam ruang obrolan. Sementara leave_room digunakan buat keluar dari ruang obrolan. Jadi, dengan alat-alat ini, kita bisa masuk dan keluar dari ruangan obrolan sesuai kebutuhan.
