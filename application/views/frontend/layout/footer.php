  </div>
  <!-- /.content-wrapper -->    
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <a>All rights
    reserved.</a>
    </div>
    <strong>Copyright &copy; 2020 <a href="<?php echo base_url('dashboard') ?>">PT SOLUSI BANGUN INDONESIA</a>.</strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/backend/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/backend/adminlte/dist/js/demo.js"></script>
<script>  
 $(document).ready(function(){  
      $('.view_file').click(function(){  
           var file_id = $(this).attr("id");  
           $.ajax({  
                url:"<?php echo base_url(); ?>frontend/folder/select",  
                method:"post",  
                data:{file_id:file_id},  
                success:function(data){  
                     $('#tempatfile').html(data);
                    //  $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>
