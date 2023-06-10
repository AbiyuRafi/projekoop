<?php
class DataPage
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function displayData()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <title>Document</title>
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
            </main>
            <center>
            <div class="content">
                <h2>DATA - DATA</h2>
                <a class="btn" href="tambah.php">Tambah</a>
                <table class="table" border="1" cellpadding="10" cellspacing="0">
                    <th>Nama</th>
                    <th>Rayon</th>
                    <th>Rombel</th>
                    <th>NIS</th>
                    <th>Matematika</th>
                    <th>Prod</th>
                    <th>Pipas</th>
                    <th>Sejarah</th>
                    <th>Agama</th>
                    <th>Bindo</th>
                    <th>Aksi</th>

                    <?php
                    $no = 1;
                    $ambil = mysqli_query($this->conn, "SELECT * FROM tb_ngulang");
                    while ($data = mysqli_fetch_array($ambil)) {
                    ?>
                        <tr class="tr">
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['rayon']; ?></td>
                            <td><?php echo $data['rombel']; ?></td>
                            <td><?php echo $data['nis']; ?></td>
                            <td><?php echo $data['mtk']; ?></td>
                            <td><?php echo $data['prod']; ?></td>
                            <td><?php echo $data['pipas']; ?></td>
                            <td><?php echo $data['sejarah']; ?></td>
                            <td><?php echo $data['agama']; ?></td>
                            <td><?php echo $data['bindo']; ?></td>
                            <td>
                                <a href="hapus.php?nis=<?php echo $data['nis']; ?>">Hapus </a>
                            </td>
                        </tr>
           
        <?php
}
        ?>
            </table>
                 </div>
                   </center>
</body>
</html>
<?php
    }
}

include "connect.php";
$dataPage = new DataPage($conn);
$dataPage->displayData();
?>