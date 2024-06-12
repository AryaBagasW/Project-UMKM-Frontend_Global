<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #e1e1e1;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 0;
            left: 0;
            box-sizing: border-box;
        }

        .header h1 {
            margin: 0;
            font-size: 1.5em;
        }

        .header p {
            margin: 0;
            font-size: 0.9em;
            color: #666;
        }

        .container-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            padding-top: 60px; /* Adjust according to header height */
            box-sizing: border-box;
        }

        .container {
            width: 90%;
            max-width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .form-container {
            width: 100%;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-direction: column; /* Changed to column */
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        label {
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        .input-container {
            position: relative;
            width: 100%;
            margin-bottom: 10px; /* Adjusted margin */
            max-width: 400px;
        }

        input[type="text"] {
            padding: 10px 10px 10px 40px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-sizing: border-box;
        }

        .input-container img {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
        }

        button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin-top: 10px; /* Added margin */
        }

        button:hover {
            background-color: darkgreen;
        }

        #account-check {
            margin-top: 10px; /* Adjusted margin */
            font-size: 0.9em;
        }

        #account-check span {
            color: green;
            cursor: pointer;
            font-weight: bold;
        }

        #form-message {
            font-size: 0.9em;
            color: #666;
            margin-top: 10px; /* Adjusted margin */
            text-align: center;
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>
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
