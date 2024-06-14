<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">Tampil Data Mahasiswa</th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <td>NIS</td>
                <th>:</th>
                <td><?= $nis; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kls; ?></td>
            </tr>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td><?= $sks; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('Input'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
