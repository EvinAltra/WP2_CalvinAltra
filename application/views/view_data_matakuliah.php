<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <th>:</th>
                <td><?=$nama; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?=$kls; ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><?=$nim; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?=$agama;?></td>
            </tr>
            <tr>
                <td>tempat Lahir</td>
                <td>:</td>
                <td><?=$tmpt; ?></td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td>:</td>
                <td><?=$tanggal; ?></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td>:</td>
                <td><?=$alamat; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?=$kelamin; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
