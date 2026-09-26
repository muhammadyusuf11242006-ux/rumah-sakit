<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Admin - RS Sehat Sentosa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #123c73, #1d8ccf);
            min-height: 100vh;
        }

        .register-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 25px;
        }

        .register-card {
            width: 100%;
            max-width: 480px;
            background: white;
            padding: 45px;
            border-radius: 25px;
            box-shadow: 0 25px 60px rgba(0,0,0,.2);
        }

        .register-icon {
            text-align: center;
            font-size: 50px;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            color: #172b4d;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #dce3ec;
            border-radius: 10px;
            outline: none;
            font-size: 14px;
            background: #f8fafc;
        }

        input:focus {
            border-color: #147fc1;
            background: white;
            box-shadow: 0 0 0 4px rgba(20,127,193,.1);
        }

        button {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #123c73, #147fc1);
            color: white;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
            margin-top: 5px;
        }

        button:hover {
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

        .login-link a {
            color: #147fc1;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="register-page">

        <div class="register-card">

            <div class="register-icon">
                🏥
            </div>

            <h1>Daftar Admin</h1>

            <p class="subtitle">
                Buat akun administrator RS Sehat Sentosa
            </p>

            <form action="proses_register_admin.php" method="POST">

                <div class="form-group">

                    <label>Username</label>

                    <input
                        type="text"
                        name="username"
                        placeholder="Masukkan username"
                        required>

                </div>

                <div class="form-group">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        placeholder="Masukkan password"
                        required>

                </div>

                <div class="form-group">

                    <label>Konfirmasi Password</label>

                    <input
                        type="password"
                        name="konfirmasi_password"
                        placeholder="Ulangi password"
                        required>

                </div>

                <button type="submit">
                    📝 DAFTAR AKUN
                </button>

            </form>

            <div class="login-link">

                Sudah punya akun?

                <a href="login.php">
                    Login sekarang
                </a>

            </div>

        </div>

    </div>

</body>

</html>