<div class="post-view">
    <p>
        <a href="<?php echo base_url ('backend/folder/edit/'.$folder->folder_id) ?>" class ="btn btn-warning btn-xs"><i class ="fa fa-edit"></i> Edit </a>
        <?php include ('delete.php')?>
       
    </p>
<div class="body-content">
    <center>
<hr>
    <h3><?php echo $folder->folder_name?> </h3>
    <br>
    <div>

    <img  src="<?php echo base_url('assets/upload/folderimage/'.$folder->folder_cover)?> " class ="img img-responsive" width="50%">

    </div>
    </center>


