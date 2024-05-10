
<html>
<head>
    <title>Form Input Mahasiswa</title>
</head>
<body>
    <center>
        <Form action="<?= base_url('dlemas/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form input Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>    
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Isikan data">
                    <div class="invalid-feedback"><?=form_error('nama')?></div>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="NIS" id="NIS" placeholder="Isikan data">
                    <div class="invalid-feedback"><?=form_error('NIS')?></div>  
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="Kelas" id="Kelas" placeholder="Isikan data">
                    <div class="invalid-feedback"><?=form_error('Kelas')?></div>  
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="Tanggal_Lahir" id="Tanggal_Lahir" placeholder="yyyy-mm-dd">
                    <div class="invalid-feedback"><?=form_error('Tanggal_Lahir')?></div>  
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="Tempat_Lahir" id="Tempat_Lahir" placeholder="Isikan data">
                    <div class="invalid-feedback"><?=form_error('Tempat_Lahir')?></div>  
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="Alamat" id="Alamat" placeholder="Isikan data">
                    <div class="invalid-feedback"><?=form_error('Alamat')?></div>  
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="laki-laki">Laki laki</label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
                    <div class="invalid-feedback"><?=form_error('jenis_kelamin')?></div>  
                </td>
            </tr>
            <tr> 
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="Agama" id="Agama">
                        <option value="">Pilih </option>
                        <option value="Islam">Islam</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghuchu">Konghuchu</option>
                    </select>
                    <div class="invalid-feedback"><?=form_error('Agama')?></div> 
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