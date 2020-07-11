<?php
    // koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "video_streaming");
    // ambil data dari tabel video
    $video = mysqli_query($conn, "SELECT * FROM video_tb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jawaban soal no.4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <h2>situs streaming film dumbways</h2>
    <button class="tambah">Tambah video</button>
    <br><br>
    <div class="wrap">
        
        <div class="videooo">
            <video src="video/1.mp4" controls width="400px" height="400px"></video>
            <p>video 1</p>
            <button class="hapus">hapus video</button>
        </div>
        <div class="videooo">
            <video src="video/2.mp4" controls width="400px" height="400px"></video>
            <p>video 2</p>
            <button class="hapus">hapus video</button>
        </div>
        <div class="videooo">
            <video src="video/3.mp4" controls width="400px" height="400px"></video>
            <p>video 3</p>
            <button class="hapus">hapus video</button>
        </div>
        
    </div>
    
</body>
</html>