<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Integrasi Data</title>
    <style>
        body { 
            font-family: 'Segoe UI', sans-serif; 
            background: #fff5f7; 
            color: #5d4037; 
            padding: 50px; 
            display: flex; 
            justify-content: center; 
        }
        .card { 
            background: white; 
            padding: 40px; 
            border-radius: 20px; 
            box-shadow: 0 10px 25px rgba(255, 182, 193, 0.5); 
            max-width: 600px; 
            border-top: 10px solid #ff80ab; 
            text-align: center;
        }
        h1 { color: #d81b60; }
        .box { background: #fce4ec; padding: 15px; border-radius: 10px; margin: 20px 0; font-weight: bold; }
        .btn { display: inline-block; padding: 10px 20px; margin: 5px; background: #ff4081; color: white; text-decoration: none; border-radius: 25px; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Sistem Integrasi Data</h1>
        <p>Proyek PjBL: Pipeline ETL & REST API</p>
        <div class="box">
            Arsitektur: ETL → Data Warehouse → REST API
        </div>
        <p>Klik tombol di bawah untuk cek data API:</p>
        <a class="btn" href="/api/dim-mahasiswa">Data Mahasiswa</a>
        <a class="btn" href="/api/dim-prodi">Data Prodi</a>
        <a class="btn" href="/api/dim-jenis-org">Data Jenis Org</a>
        <a class="btn" href="/api/dim-surat">Data Surat</a>
    </div>
</body>
</html>