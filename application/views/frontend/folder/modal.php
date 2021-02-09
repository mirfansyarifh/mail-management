<!-- <div class="modal fade" tabindex="-1" id="myModal" role="dialog"> -->
<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Mark Datails of <?php echo $marks[0]['name']; ?></h4>
      </div>
      <div class="modal-body">
        <table class="table table-striped">
        <tbody>
            <?php
                if(isset($marks) && is_array($marks) && count($marks)): $i=1;
                foreach ($marks as $key => $data) { 
                ?>
            <tr>
              <td>Name</td>
              <td><?php echo $data['name']; ?></td>
            </tr>
            <tr>
              <td>Language</td>
              <td><?php echo $data['language']; ?></td>
            </tr>
            <tr>
              <td>English</td>
              <td><?php echo $data['english']; ?></td>
            </tr>
            <tr>
              <td>Maths</td>
              <td><?php echo $data['maths']; ?></td>
            </tr>
            <tr>
              <td>Science</td>
              <td><?php echo $data['science']; ?></td>
            </tr>
            <tr>
              <td>S Science</td>
              <td><?php echo $data['s_science']; ?></td>
            </tr>
            
          <?php 
            }
            endif;   
        ?>
        </tbody>
    </table>
      </div>
    </div>
  </div>
</div>