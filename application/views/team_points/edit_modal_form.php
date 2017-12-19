<div id="error_msg" class="val_error" style="color: red; padding-left: 30px;"></div>
<?php $attributes = array('name' => 'formEdit', 'id' => 'formEdit');
      $hidden = array('is submit' => 1);

      foreach ($fetch_data as $data) {
        
          $id = $data->rId;
      }
      
      echo form_open('team_point/updatePoint/'. $id, $attributes, $hidden);

?>
 
    <div class="modal-body clearfix">
    <?php $this->load->view("team_points/edit_point_form_fields"); ?>
   </div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> Close</button>
    <button type="submit" class="btn btn-primary" id="btnSave"><span class="fa fa-check-circle"></span> Save</button>
</div>

<?php echo form_close(); ?>

<script>
      
     
      $(document).ready(function(){
            $("#btnSave").click(function(event){
                $("#formEdit").submit();
                    
            });
      });


</script>





