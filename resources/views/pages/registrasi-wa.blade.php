<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    @extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
    @include('layouts.navbars.topnav')
    <div class="header">
        <h1>UMKM</h1>
        <p id="current-date"></p>
    </div>
    <div class="container-wrapper">
        <div class="container">
            <div class="form-container">
                <form id="main-form">
                    <label for="whatsapp-number">Nomer Whatsapp*</label>
                    <div class="input-container">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
                        <input type="text" id="whatsapp-number" name="whatsapp-number" required>
                    </div>
                    <p id="form-message">Gunakan nomor Whatsapp yang masih aktif untuk menerima pesan tautan dari aplikasi</p>
                    <p id="account-check">Belum punya akun? <span onclick="redirectToRegister()">Daftar</span></p>
                    <button type="button" onclick="handleSubmit()">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function handleSubmit() {
            const hasAccount = confirm("Do you have an account?");
            if (hasAccount) {
                showLoginForm();
            } else {
                showRegisterForm();
            }
        }

        function redirectToRegister() {
            showRegisterForm();
        }

        function showRegisterForm() {
            document.getElementById('form-message').style.display = 'block'; // Show the message
            document.querySelector('button').innerText = "Kirim";
            document.getElementById('account-check').style.display = 'none';
        }

        function showLoginForm() {
            document.getElementById('form-message').style.display = 'none'; // Hide the message
            document.querySelector('button').innerText = "Masuk";
            document.getElementById('account-check').style.display = 'block';
        }

        function updateDate() {
            const dateElement = document.getElementById('current-date');
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            dateElement.innerText = now.toLocaleDateString('id-ID', options);
        }

        updateDate();
    </script>
</body>
</html>
