
<table id="data" name="user" class="table table-bordered table-striped"> 
 <thead>
    <tr>
    <th>Nomor</th>
    <th>Surat</th>
    <th>Tanggal Masuk</th>
   
    </tr>
  </thead>
  <tbody>
    <?php $no=0; foreach ($surat->result_array() as $key ) { $no++; ?>
   <TR>
    <td><?php echo $no ?></td>
    <td><?php echo $key['srt_masuk']; ?></td>
    <td><?php echo $key['tgl']; ?></td>
   
    <td>
      <a href="<?php echo base_url('index.php/administrator/edit/'.$key['idt_user'])?>" class="btn btn-success">
      <span class="fa fa-edit"> </span>  edit
      </a>
       <a href="<?php echo base_url('index.php/administrator/hapus/'.$key['idt_user'])?>" class="btn btn-danger">
      <span class="fa fa-trash"> </span>  hapus
      </a>
    </td>
   </TR> 
<?php }?>
 </tbody>
</table>