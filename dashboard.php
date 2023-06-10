<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <main>
        <input type="checkbox" id="check">
        <label for="check">
            <i class='bx bx-x' id="btn"></i>
            <i class='bx bx-menu' id="open"></i>
        </label>
        <div class="sidebar">
            <div class="top">
                Rekap Nilai
            </div>
            <ul>
                <li><a href="dashboard.php"><i class='bx bxs-dashboard'> Dashboard</i></a></li>
                <li><a href="tampil.php"><i class='bx bxs-user-circle'> Nilai</i></a></li>
                <li><a href="logout.php"><i class='bx bx-log-out'> Keluar</i></a></li>
            </ul>
        </div>

        <div>
            <h1>Selamat Datang</h1>
            <p>Anda telah berhasil login!</p>
        </div>
    </main>
</body>

</html>
