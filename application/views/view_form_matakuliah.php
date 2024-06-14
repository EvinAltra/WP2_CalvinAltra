<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('Matakuliah/cetak'); ?>" 
        method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah</th>
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
                    <th>Kelas</th>
                    <td>:</td>
                    <td><input type="text" name="kls" id="kls"></td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td><select name="agama" id="agama">
                    <option value="Pilih" name="" id="">Pilih</option>
                    <option value="Islam" name="agama" id="agama">Islam</option>
                    <option value="Hindu" name="agama" id="agama">Hindu</option>
                    <option value="Hindu" name="agama" id="agama">Budha</option>
                    <option value="Kristen" name="agama" id="agama">Kristen</option>
                    </td>
                    </select>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td><input type="text" name="tmpt" id="tmpt"></td>
                </tr>
                <tr>
                   <th> <label for="tanggal">Pilih tanggal:</label></th>
                   <td>:</td>
                    <td><input type="date" id="tanggal" name="tanggal"></td>
                    <!-- <td><input type="submit" value="Submit"></td> -->
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" id="kelamin" name="kelamin" value="Laki-Laki">
                        <label for="Laki-Laki">Laki-Laki</label><br>
                        <input type="radio" id="kelamin" name="kelamin" value="Perempuan">
                        <label for="Perempuan">Perempuan</label><br>
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
