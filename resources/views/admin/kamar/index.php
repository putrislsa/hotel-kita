<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        body {
            font-family: goudy old style !important;
        }

        body table {
            font-family: goudy old style !important;
        }

        body .navs {
            font-family: century !important;
        }
    </style>
    <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 class="page-header" style="color: darkolivegreen!important;">
        <center>
            DATA KAMAR</center>
    </h1>
    <ol class="breadcrumb">
        <li><a href="?pg=dashboard">Home</a></li>
        <li><a href="?pg=datakamar">Kamar</a></li>
        <li><a href="?pg=datafasilitaskamar"> Fasilitas Kamar</a></li>
        <li><a href="?pg=datafasilitashotel">Fasilitas Hotel</a></li>

    </ol>
    <!-- ======================================================================== -->

    <table border=0>
        <td width="550px"><i><a href="?pg=tambah_kamar" class="btn btn-success"><i class="fa fa-plus">Tambah
                        Kamar</a></i>
        </td>
        <td>
            <form method="POST">

                <label><i> Pencarian Data : </i> </label>
                <input type="text" name="nama" placeholder="cari nama kamar">
        </td>
        <td>
            <input type="submit" name="cari" value="cari" class="btn btn-success">
            </i>
            </form>
        </td>
    </table>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kamar</th>
                <th>Foto Kamar</th>
                <th>Jumlah Kamar</th>
                <th>Harga Kamar</th>
                <th>Deskripsi Kamar</th>
                <th>Tipe kamar</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>


        <tbody>
        </tbody>
    </table>
</body>

</html>
