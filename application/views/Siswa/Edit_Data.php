<h3>Edit Data Siswa</h3>
<?php echo form_open('Siswa/edit'); ?>
<input type="hidden"  name="id" value="<?php echo $tampil['id_siswa']?>" >
<table>
    <table>
    <tr><td width="120">NIM</td>
        <td><input type="text"  name="nim" value="<?php echo $tampil['nim']   ?>">
       </td></tr>
    <tr><td>NAMA SISWA</td><td>
            <input type="text"  name="nama_siswa" value="<?php echo $tampil['nama']?>">
        </td></tr>
    <tr><td>ALAMAT</td>
        <td><input type="text"  name="alamat" value="<?php echo $tampil['alamat']   ?>">
       </td></tr>
    <tr><td colspan="2">
            <button type="submit"  name="submit">Update</button>
        <?php echo anchor('Siswa','Kembali')?></td></tr>
</table>

    
    
</table>