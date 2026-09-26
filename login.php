<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - RS Sehat Sentosa</title>

    <link rel="stylesheet" href="style.css">

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

        .admin-login-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .admin-login-page::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            top: -150px;
            left: -150px;
        }

        .admin-login-page::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            bottom: -120px;
            right: -100px;
        }

        .admin-login-card {
            width: 100%;
            max-width: 950px;
            min-height: 570px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 2;
        }

        /* BAGIAN KIRI */

        .admin-login-left {
            width: 45%;
            background: linear-gradient(160deg, #123c73, #147fc1);
            color: white;
            padding: 55px 45px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .admin-icon {
            width: 80px;
            height: 80px;

            background: rgba(255, 255, 255, 0.18);

            border-radius: 20px;

            display: flex;
            justify-content: center;
            align-items: center;

            font-size: 42px;

            margin-bottom: 25px;
        }

        .admin-login-left h1 {
            font-size: 32px;
            margin: 0 0 15px;
        }

        .admin-login-left p {
            font-size: 15px;
            line-height: 1.8;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .admin-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 12px 0;
            font-size: 14px;
        }

        .admin-info span {
            width: 32px;
            height: 32px;

            border-radius: 50%;

            background: rgba(255, 255, 255, 0.18);

            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* BAGIAN KANAN */

        .admin-login-right {
            width: 55%;
            padding: 55px 65px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            margin-bottom: 30px;
        }

        .login-title small {
            color: #147fc1;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 13px;
        }

        .login-title h2 {
            margin: 8px 0;
            font-size: 30px;
            color: #172b4d;
        }

        .login-title p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        .admin-form-group {
            margin-bottom: 20px;
        }

        .admin-form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .admin-input {
            width: 100%;
            padding: 15px 17px;

            border: 1px solid #dce3ec;
            border-radius: 12px;

            font-size: 14px;

            outline: none;

            transition: 0.3s;

            background: #f8fafc;
        }

        .admin-input:focus {
            border-color: #147fc1;
            background: white;

            box-shadow: 0 0 0 4px rgba(20, 127, 193, 0.1);
        }

        .admin-login-button {
            width: 100%;

            border: none;

            padding: 16px;

            border-radius: 12px;

            background: linear-gradient(135deg, #123c73, #147fc1);

            color: white;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;

            margin-top: 5px;
        }

        .admin-login-button:hover {
            transform: translateY(-2px);

            box-shadow: 0 10px 25px rgba(20, 127, 193, 0.25);
        }

        .admin-note {
            margin-top: 20px;

            padding: 12px 15px;

            background: #f0f7ff;

            border-left: 4px solid #147fc1;

            border-radius: 8px;

            color: #5b6777;

            font-size: 12px;

            line-height: 1.6;
        }

        .back-home {
            text-align: center;
            margin-top: 22px;
        }

        .back-home a {
            color: #147fc1;
            text-decoration: none;

            font-size: 14px;
            font-weight: bold;
        }

        .back-home a:hover {
            text-decoration: underline;
        }

        /* HP */

        @media (max-width: 768px) {

            .admin-login-page {
                padding: 20px;
            }

            .admin-login-card {
                flex-direction: column;
                max-width: 500px;
            }

            .admin-login-left,
            .admin-login-right {
                width: 100%;
            }

            .admin-login-left {
                padding: 35px 30px;
            }

            .admin-login-left h1 {
                font-size: 25px;
            }

            .admin-login-right {
                padding: 35px 30px;
            }

            .login-title h2 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

    <div class="admin-login-page">

        <div class="admin-login-card">

            <!-- BAGIAN KIRI -->
            <div class="admin-login-left">

                <div class="admin-icon">
                    🏥
                </div>

                <h1>RS Sehat Sentosa</h1>

                <p>
                    Selamat datang di halaman administrator
                    RS Sehat Sentosa. Silakan masuk untuk
                    mengelola data pasien dan informasi rumah sakit.
                </p>

                <div class="admin-info">
                    <span>✓</span>
                    <div>Kelola data pasien</div>
                </div>

                <div class="admin-info">
                    <span>✓</span>
                    <div>Lihat data pendaftaran</div>
                </div>

                <div class="admin-info">
                    <span>✓</span>
                    <div>Kelola informasi rumah sakit</div>
                </div>

            </div>


            <!-- BAGIAN KANAN -->
            <div class="admin-login-right">

                <div class="login-title">

                    <small>AREA ADMINISTRATOR</small>

                    <h2>Selamat Datang 👋</h2>

                    <p>
                        Silakan masuk untuk mengakses dashboard admin.
                    </p>

                </div>


                <form action="proses_login.php" method="POST">

                    <div class="admin-form-group">

                        <label for="username">
                            Username
                        </label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            class="admin-input"
                            placeholder="Masukkan username admin"
                            required>

                    </div>


                    <div class="admin-form-group">

                        <label for="password">
                            Password
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="admin-input"
                            placeholder="Masukkan password admin"
                            required>

                    </div>


                    <button
                        type="submit"
                        class="admin-login-button">

                        🔐 MASUK SEBAGAI ADMIN

                    </button>

                </form>


                <div class="admin-note">

                    <strong>ℹ️ Informasi Admin</strong>
                    <br>

                    Gunakan akun administrator yang telah
                    terdaftar pada sistem.

                </div>


                <div class="back-home">

                    <a href="index.html">
                        ← Kembali ke halaman utama
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>