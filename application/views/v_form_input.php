<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Input/cetak'); ?>" 
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mahasiswa</th>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td><input type="text" name="NIS" id="nis"></td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
