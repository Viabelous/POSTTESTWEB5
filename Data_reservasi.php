<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Style.css?v=<?php echo time(); ?>">
    <title> Hotel Clara Stella </title>
    <meta charset="utf-8">
    <script src="jscs.js?v=<?php echo time(); ?>"></script>
</head>

<body>
    <?php
        include 'Banner.php';
        require 'koneksi.php';


    $result = mysqli_query($conn, "SELECT * FROM daftar_reservasi");
    $daftar = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $daftar[] = $row;
    }

    ?>

    <div class="blanks">
        <br>
        <table width="100%" class="Content" border=1>
            <tr>
                <th colspan=5 style='font-size: xx-large'> Daftar Reservasi Diterima </th>
            <tr>
                <th width=10%>No.</td>
                <th width=40%>Nama</td>
                <th width=40%>Tanggal</td>
                <th width=5%>Lihat</td>
                <th width=5%>Ubah</td>
            </tr>
            <?php $i = 1; foreach ($daftar as $dft): ?>
            <tr>
                <td> <?php echo $i; ?> </td>
                <td> <?php echo $dft['Nama']; ?> </td>
                <td> <?php echo $dft['Tanggal'].' Jam '.$dft['Waktu']; ?> </td>
                <td> <a href="Reservation_note.php?ID=<?php echo $dft['ID']; ?>" style='text-decoration: none'
                target="print_popup"onclick="window.open('about:blank','print_popup','width=750,height=500');">
                <img src='https://cdn.pixabay.com/photo/2017/06/21/07/51/icon-2426369_1280.png' width=20%>
                </a> </td>
                <td> <a href="Edit.php?ID=<?php echo $dft['ID']; ?>" style='text-decoration: none'>
                <img src='https://www.nicepng.com/png/full/230-2304754_windows-10-icons-for-png-files-shown-in.png' width=20%>
                </a> </td>
            </tr>
            <?php $i++; endforeach ?>
        </table>
    </div>

</body>

<footer>
    <?php
        include 'Footer.php';
    ?>
</footer>

</html>