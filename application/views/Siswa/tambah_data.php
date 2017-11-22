<h3>Tambah Data Siswa</h3>
<?php
echo form_open('Siswa/tambah_data');
?>
<table class="table table-bordered">
    <tr><td width="120">NIM</td>
        <td><input type="text" class="form-control" name="nim" placeholder="masukan nim">
       </td></tr>
    <tr><td>NAMA SISWA</td><td>
            <input type="text" class="form-control" name="nama_siswa" placeholder="nama siswa">
        </td></tr>
    <tr><td>ALAMAT</td>
        <td><input type="text" class="form-control" name="alamat" placeholder="masukan alamat siswa">
       </td></tr>
    <tr><td colspan="2">
            <button type="submit" class="btn btn-primary btn-sm" name="submit">Simpan</button>
        <?php echo anchor('Siswa','Kembali')?></td></tr>
</table>
</form>