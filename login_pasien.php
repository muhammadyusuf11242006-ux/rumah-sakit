<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Pasien - RS Sehat Sentosa</title>

    <link rel="stylesheet" href="style.css">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #0d6efd, #00b4d8);
            min-height: 100vh;
        }

        .patient-login-page {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        /* Lingkaran dekorasi */
        .patient-login-page::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            top: -150px;
            left: -150px;
        }

        .patient-login-page::after {
            content: "";
            position: absolute;
            width: 350px;
            height: 350px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
            bottom: -120px;
            right: -100px;
        }

        .patient-login-card {
            width: 100%;
            max-width: 950px;
            min-height: 570px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.20);
            position: relative;
            z-index: 2;
        }

        /* BAGIAN KIRI */
        .patient-login-left {
            width: 45%;
            background: linear-gradient(160deg, #0759c9, #00a8cc);
            color: white;
            padding: 55px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }

        .hospital-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.18);
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 42px;
            margin-bottom: 25px;
            backdrop-filter: blur(5px);
        }

        .patient-login-left h1 {
            font-size: 32px;
            margin: 0 0 15px;
        }

        .patient-login-left p {
            font-size: 15px;
            line-height: 1.8;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .login-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 12px 0;
            font-size: 14px;
        }

        .login-info span {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.18);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* BAGIAN KANAN */
        .patient-login-right {
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
            color: #0d6efd;
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

        .patient-form-group {
            margin-bottom: 20px;
        }

        .patient-form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
        }

        .patient-input {
            width: 100%;
            padding: 15px 17px;
            border: 1px solid #dce3ec;
            border-radius: 12px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
            background: #f8fafc;
        }

        .patient-input:focus {
            border-color: #0d6efd;
            background: white;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.10);
        }

        .patient-login-button {
            width: 100%;
            border: none;
            padding: 16px;
            border-radius: 12px;
            background: linear-gradient(135deg, #0d6efd, #009ec9);
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 5px;
        }

        .patient-login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(13, 110, 253, 0.25);
        }

        .back-home {
            text-align: center;
            margin-top: 22px;
        }

        .back-home a {
            color: #0d6efd;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-home a:hover {
            text-decoration: underline;
        }

        .patient-note {
            margin-top: 20px;
            padding: 12px 15px;
            background: #f0f7ff;
            border-left: 4px solid #0d6efd;
            border-radius: 8px;
            color: #5b6777;
            font-size: 12px;
            line-height: 1.6;
        }

        /* RESPONSIVE HP */
        @media (max-width: 768px) {

            .patient-login-page {
                padding: 20px;
            }

            .patient-login-card {
                flex-direction: column;
                max-width: 500px;
            }

            .patient-login-left,
            .patient-login-right {
                width: 100%;
            }

            .patient-login-left {
                padding: 35px 30px;
            }

            .patient-login-left h1 {
                font-size: 25px;
            }

            .patient-login-right {
                padding: 35px 30px;
            }

            .login-title h2 {
                font-size: 25px;
            }
        }

        .register-link {
    text-align: center;
    margin-top: 20px;
    color: #777;
    font-size: 14px;
}

.register-link a {
    color: #147fc1;
    font-weight: bold;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}
.register-link {
    text-align: center;
    margin-top: 20px;
    color: #777;
    font-size: 14px;
}

.register-link a {
    color: #0d6efd;
    font-weight: bold;
    text-decoration: none;
}

.register-link a:hover {
    text-decoration: underline;
}
    </style>

</head>

<body>

    <div class="patient-login-page">

        <div class="patient-login-card">

            <!-- BAGIAN KIRI -->
            <div class="patient-login-left">

                <div class="hospital-icon">
                    🏥
                </div>

                <h1>RS Sehat Sentosa</h1>

                <p>
                    Selamat datang di layanan pasien
                    RS Sehat Sentosa. Silakan masuk
                    menggunakan NIK dan nomor HP
                    yang telah didaftarkan.
                </p>

                <div class="login-info">
                    <span>✓</span>
                    <div>Data pasien tersimpan dengan aman</div>
                </div>

                <div class="login-info">
                    <span>✓</span>
                    <div>Akses informasi pendaftaran</div>
                </div>

                <div class="login-info">
                    <span>✓</span>
                    <div>Layanan rumah sakit lebih mudah</div>
                </div>

            </div>


            <!-- BAGIAN KANAN -->
            <div class="patient-login-right">

                <div class="login-title">

                    <small>AREA PASIEN</small>

                    <h2>Selamat Datang 👋</h2>

                    <p>
                        Masuk untuk melihat data pendaftaran Anda.
                    </p>

                </div>


                <form
                    action="proses_login_pasien.php"
                    method="POST"
                >

                    <div class="patient-form-group">

                        <label for="nik">
                            Nomor Induk Kependudukan (NIK)
                        </label>

                        <input
                            type="text"
                            id="nik"
                            name="nik"
                            class="patient-input"
                            placeholder="Masukkan 16 digit NIK"
                            maxlength="16"
                            required
                        >

                    </div>


                    <div class="patient-form-group">

                        <label for="no_hp">
                            Nomor Handphone
                        </label>

                        <input
                            type="text"
                            id="no_hp"
                            name="no_hp"
                            class="patient-input"
                            placeholder="Contoh: 081234567890"
                            required
                        >

                    </div>


                    <button
                        type="submit"
                        class="patient-login-button"
                    >
                        🔐 MASUK SEBAGAI PASIEN
                    </button>

                </form>


                <div class="patient-note">

                    <strong>ℹ️ Informasi</strong><br>

                    Gunakan NIK dan nomor HP yang sama
                    saat melakukan pendaftaran pasien.

                </div>


                <div class="back-home">
                  <div class="register-link">
                        Belum terdaftar sebagai pasien?
                        <a href="register_pasien.php">Daftar sekarang

                    <a href="index.html">
                        ← Kembali ke halaman utama
                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>