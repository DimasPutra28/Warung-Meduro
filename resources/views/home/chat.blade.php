@extends('layout.main')
@section('1')
    <div id="chat-container">
        <div id="chat-messages">
            <div id="chat-awal">
                <h5>Selamat Datang Di Warunk Meduro</h5>
                <h6>Silahkan Ketik Beberapa pesan ini Untuk membutuhkan bantuan</h6>
            </div>
        </div>

        <input type="text" id="user-input" placeholder="Ketik pesan...">
        <button id="send-button">Kirim</button>
    </div>

{{-- <a href="/shop">Belanja</a> --}}
@endsection
