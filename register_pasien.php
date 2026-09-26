<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Pasien - RS Sehat Sentosa</title>

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

        .register-page {
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;

            padding: 25px;
        }

        .register-card {
            width: 100%;
            max-width: 600px;

            background: white;

            padding: 40px;

            border-radius: 25px;

            box-shadow: 0 25px 60px rgba(0,0,0,.2);
        }

        .register-icon {
            text-align: center;
            font-size: 50px;
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
            margin-bottom: 17px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 7px;
            color: #333;
        }

        input,
        select,
        textarea {

            width: 100%;

            padding: 13px;

            border: 1px solid #dce3ec;

            border-radius: 10px;

            outline: none;

            font-size: 14px;

            background: #f8fafc;
        }

        input:focus,
        select:focus,
        textarea:focus {

            border-color: #0d6efd;

            background: white;

            box-shadow: 0 0 0 4px rgba(13,110,253,.1);
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {

            width: 100%;

            padding: 15px;

            border: none;

            border-radius: 10px;

            background: linear-gradient(135deg, #0d6efd, #00a8cc);

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

            color: #0d6efd;

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

        <h1>Daftar Pasien</h1>

        <p class="subtitle">
            Daftarkan diri Anda sebagai pasien RS Sehat Sentosa
        </p>


        <form action="proses_register_pasien.php" method="POST">


            <div class="form-group">

                <label>Nama Lengkap</label>

                <input
                    type="text"
                    name="nama"
                    placeholder="Masukkan nama lengkap"
                    required>

            </div>


            <div class="form-group">

                <label>NIK</label>

                <input
                    type="text"
                    name="nik"
                    maxlength="16"
                    placeholder="Masukkan 16 digit NIK"
                    required>

            </div>


            <div class="form-group">

                <label>Jenis Kelamin</label>

                <select name="jenis_kelamin" required>

                    <option value="">
                        -- Pilih Jenis Kelamin --
                    </option>

                    <option value="Laki-laki">
                        Laki-laki
                    </option>

                    <option value="Perempuan">
                        Perempuan
                    </option>

                </select>

            </div>


            <div class="form-group">

                <label>Tanggal Lahir</label>

                <input
                    type="date"
                    name="tanggal_lahir"
                    required>

            </div>


            <div class="form-group">

                <label>Alamat</label>

                <textarea
                    name="alamat"
                    placeholder="Masukkan alamat lengkap"
                    required></textarea>

            </div>


            <div class="form-group">

                <label>Nomor HP</label>

                <input
                    type="text"
                    name="no_hp"
                    placeholder="Contoh: 081234567890"
                    required>

            </div>


            <div class="form-group">

                <label>Layanan</label>

                <select name="layanan" required>

                    <option value="">
                        -- Pilih Layanan --
                    </option>

                    <option value="Poli Umum">
                        Poli Umum
                    </option>

                    <option value="Poli Gigi">
                        Poli Gigi
                    </option>

                    <option value="Poli Anak">
                        Poli Anak
                    </option>

                    <option value="Poli Penyakit Dalam">
                        Poli Penyakit Dalam
                    </option>

                </select>

            </div>


            <button type="submit">

                📝 DAFTAR SEBAGAI PASIEN

            </button>

        </form>


        <div class="login-link">

            Sudah terdaftar?

            <a href="login_pasien.php">
                Login sekarang
            </a>

        </div>

    </div>

</div>

</body>

</html>