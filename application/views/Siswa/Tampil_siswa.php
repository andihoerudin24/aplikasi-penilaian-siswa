<h2>DATA SISWA</h2>
<?php echo anchor('Siswa/tambah_data','tambah_siswa')   ?>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>alamat</th>
        <th colspan="2">OPERASI</th>
    </tr>
    <?php
    $no=1;
    foreach ($record->result() as $r){
        echo "<tr>
               <td>$no</td>
               <td>$r->nim</td>
               <td>$r->nama</td>
               <td>$r->alamat</td>
               <td>".  anchor('Siswa/Edit/'.$r->id_siswa,'Edit')."</td>
               <td>".  anchor('Siswa/Hapus/'.$r->id_siswa,'Hapus')."</td>
          </tr>";
        $no++;
      }
    ?>
</table>