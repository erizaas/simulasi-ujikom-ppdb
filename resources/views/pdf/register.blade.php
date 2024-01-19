<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Berhasil</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 100px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        .info {
            display: flex;
            justify-content: center; /* Center-align content horizontally */
            align-items: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }
        .registration-details {
            flex: 1;
            padding: 20px;
        }
        .registration-details p {
            margin: 0;
            margin-bottom: 10px;
        }
        .registration-photo {
            flex: 1;
            text-align: center;
        }
        .registration-photo img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{asset('assets/img/wikrama-logo.png')}}" alt="Smk Wikrama" class="logo">
        <h1>Registrasi Berhasil!</h1>
        <div class="info">
            <div class="registration-details">
                <p>Nama: {{ $nama }}</p>
                <p>Email: {{ $email }}</p>
                <p>Jenis Kelamin: {{ $jenis_kelamin }}</p>
                <p>Asal Sekolah: {{ $asal_sekolah }}</p>
                <p>Minat Jurusan: {{ $minat_jurusan }}</p>
            </div>
        </div>
    </div>
</body>
</html>
