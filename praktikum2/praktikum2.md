# Langkah-langkah kegiatan praktikum 2

### Buat database dengan nama akademik

* `SELECT` * `FROM` akademik;

### Buat tabel dengan nama mahasiswa di dalam database akademik
* `USE` akademik;
* `CREATE` table mahasiswa ('nim' varchar(5),'nama' varchar(50),'jkel' varchar(1),'alamat' text,'tgllhr' date,Primary Key ('nim'));

### Tambahkan data di dalam tabel mahasiswa
* `INSERT INTO` mahasiswa `VALUES` ('MHS01', 'Siti Aminah',’P’, 'SOLO', '1995-10-01');
* `INSERT INTO` mahasiswa `VALUES` ('MHS02', 'Rita', ‘P’,'SOLO', '1999-01-01');
* `INSERT INTO` mahasiswa `VALUES` ('MHS03', 'Amirudin',’L’, 'SEMARANG', '1998-08-11');
* `INSERT INTO` mahasiswa `VALUES` ('MHS04', 'Siti Maryam',’P’, 'JAKARTA', '1995-04-15');

### Tampilkan data berdasarkan kriteria tertentu
* `SELECT` * `FROM` mahasiswa;
* `SELECT` * `FROM` mahasiswa `WHERE` alamat=’SOLO’;