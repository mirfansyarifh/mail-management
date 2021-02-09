<div class="post-view">
    <p>
        <a href="<?php echo base_url ('backend/file/edit/'.$file->file_id) ?>" class ="btn btn-warning btn-xs"><i class ="fa fa-edit"></i> Edit </a>
        <?php include ('delete.php')?>
       
    </p>
<div class="body-content">
<hr>
    <h3 style="text-align:center" ><?php echo $file->file_name?> </h3>
    <br>
    <div>

    <p>
        <?php echo $file->file_body ?>
    </p>

    </div>


