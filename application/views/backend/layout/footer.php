            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
<!-- CK EDITOR -->
<script src="<?php echo base_url() ?>assets/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
  
  CKEDITOR.replace('editor1', {
            height:300,
            filebrowserUploadUrl: '<?php echo base_url() ?>/assets/ckeditor/upload.php',
            filebrowserUploadMethod: "form",
            
  })

  // CKEDITOR.config.extraPlugins = 'justify';
  // CKEDITOR.config.extraPlugins = 'image2';
</script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>