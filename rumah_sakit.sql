-- Membuat database
CREATE DATABASE rumah_sakit;

-- Menggunakan database
USE rumah_sakit;


-- ==========================================
-- TABEL ADMIN
-- ==========================================

CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);


-- Membuat akun admin
INSERT INTO admin (username, password)
VALUES ('admin', 'admin123');


-- ==========================================
-- TABEL PASIEN
-- ==========================================

CREATE TABLE pasien (
    id INT AUTO_INCREMENT PRIMARY KEY,

    nama VARCHAR(100) NOT NULL,

    nik VARCHAR(20) NOT NULL,

    jenis_kelamin VARCHAR(20) NOT NULL,

    tanggal_lahir DATE NOT NULL,

    alamat TEXT NOT NULL,

    no_hp VARCHAR(20) NOT NULL,

    layanan VARCHAR(100) NOT NULL,

    tanggal_daftar TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);