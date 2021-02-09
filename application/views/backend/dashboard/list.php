<div>
<div class="row">

<!-- Folder BOX -->
<div class="col-lg-6 col-6">
<div class="small-box bg-success">
  <div class="inner">
    <h3><?php echo $countfolder ?> </h3>

    <p>Folders</p>
  </div>
  <div class="icon">
    <i class="ion ion-stats-bars"></i>
  </div>
  <a href="<?php echo base_url(). 'backend/folder'?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<!-- File BOX -->
<div class="col-lg-6 col-6">
<div class="small-box bg-warning">
  <div class="inner">
  <h3><?php echo $countfile ?> </h3>

    <p>Files</p>
  </div>
  <div class="icon">
    <i class="ion ion-stats-bars"></i>
  </div>
  <a href="<?php echo base_url(). 'backend/file'?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

</div>
</div>
