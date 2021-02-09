
<p>
<a href="<?php echo base_url ('backend/file/add'); ?>" class="btn btn-success btn-lg">
<i class="fa fa-plus">	</i> Tambah Baru
</a>
</p> 
<?php 
// Notifikasi 
if($this->session->flashdata('sukses')){
    echo '<p class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</p>';
}
?>
<table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>NO</th>
                <th>NAMA FILE</th>
                <th>FOLDER FILE</th>
                <th>NOMOR FILE</th>
                <th>KODE FILE</th>
                <th>TAHUN</th>
                <th>URUTAN</th>
                <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($file as $file) { ?>

            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $file->file_name ?></td>
                <td><?php echo $file->folder_name ?></td>
                <td><?php echo $file->ref_numb ?></td>
                <td><?php echo $file->file_code ?></td>
                <td><?php echo $file->file_year ?></td>
                <td><?php echo $file->file_numb ?></td>
                <td>
                <a href="<?php echo base_url ('backend/file/edit/'.$file->file_id) ?>" class ="btn btn-warning btn-xs"><i class ="fa fa-edit"></i> Edit </a>
                <a href="<?php echo base_url ('backend/file/detail/'.$file->file_id) ?>" class ="btn btn-success btn-xs"><i class ="fa fa-eye"></i> View </a>
                                    <?php include ('delete.php')?>
                </td>
            </tr>
<?php $no++;} ?>
</tbody>
</table>