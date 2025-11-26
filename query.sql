-- 1. Tampilkan nama_siswa dan nis saja dari tabel siswa
SELECT nama_siswa, nis
FROM siswa;

-- 2. Tampilkan siswa yang hobi-nya 'Membaca'
SELECT *
FROM siswa
WHERE hobi = 'Membaca';

-- 3. Tampilkan siswa yang lahir setelah tahun 2010
SELECT *
FROM siswa
WHERE YEAR(tgl_lahir) > 2010;

-- 4. Tampilkan 3 siswa pertama berdasarkan id
SELECT *
FROM siswa
ORDER BY id
LIMIT 3;

-- 5. Tampilkan siswa dengan nama mengandung huruf 'a'
SELECT *
FROM siswa
WHERE nama_siswa LIKE '%a%';

-- 6. Urutkan siswa berdasarkan nama dari A–Z
SELECT *
FROM siswa
ORDER BY nama_siswa ASC;

-- 7. Urutkan siswa berdasarkan tanggal lahir paling muda → paling tua
SELECT *
FROM siswa
ORDER BY tgl_lahir DESC;

-- 8. Tampilkan siswa yang nomor teleponnya dimulai dengan '0812'
SELECT *
FROM siswa
WHERE no_telp LIKE '0812%';

-- 9. Tampilkan siswa yang alamatnya mengandung kata 'Jl'
SELECT *
FROM siswa
WHERE alamat LIKE '%Jl%';

-- 10. Tampilkan siswa yang hobinya bukan 'Sepak Bola'
SELECT *
FROM siswa
WHERE hobi <> 'Sepak Bola';

-- 11. Hitung jumlah siswa yang memiliki hobi 'Menggambar'
SELECT CO
 