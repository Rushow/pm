<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            
              <br>
      
    <?php 
        
        $attributes = array('name' => 'formAdd', 'id' => 'formAdd');
        $hidden = array('is submit' => 1);

        echo form_open('team_point/getRecords', $attributes, $hidden); 

    ?>

          <div class="row">
             <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          
                <div class="form-group col-lg-3 col-sm-3 col-md-3">
                    
                    <label>Month</label>
                    <select class="form-control" name="month">

                        <option value="0">Select</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>

                    </select>
                        
                 </div>

                <div class="form-group col-lg-3 col-sm-3 col-md-3">
                       
                     <label>Year</label>
                     <select class="form-control" name="year">

                        <option value="0">Select</option>
                       
                       <?php 
       
                            $year = 2017;
                            $i = 0;

                            for($i; $i<14; $i++){
                             
                                $result = $year + $i;
                        ?>

                         <option value="<?php echo $result; ?>"><?php echo $result; ?></option>

                        <?php } ?>

                     </select>
                        
                </div>
                  
                  <button type="submit" class="btn btn-primary" id="btnSave" style="margin-top: 22px; padding-left: 25px; padding-right: 25px;"><span class="fa fa-check-circle"></span>  Search</button>

                </div>
            </div>

        <?php echo form_close(); ?>

         <h1>Team Points</h1>

          <table class="display table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%"> 
            
                 <tr>
                     <th>No.</th>
                     <th>Name</th>
                     <th>Marks</th>
                     <th>Month</th>
                     <th>Year</th>
                   
                 </tr>     
                 
                 <?php if(isset($data)) { 
                  
                  $i = 1;
                 foreach($data as $mark) { ?>
                      <tr>
                        <td><?php echo $i.'.'; ?></td>
                        <td><?php echo $mark->first_name.' '.$mark->last_name; ?></td>
                        <td><?php echo $mark->mark; ?></td>
                        <td><?php echo $month = date('M'); ?></td>
                        <td><?php echo $year = date('Y'); ?></td>
                        
                    </tr> 
                 <?php $i++; } } else {  ?>
                 
                 <?php $i = 1;
                 foreach($marks as $mark) { ?>
                      <tr>
                        <td><?php echo $i.'.'; ?></td>
                        <td><?php echo $mark->first_name.' '.$mark->last_name; ?></td>
                        <td><?php echo $mark->mark; ?></td>
                        <td><?php echo $month = date('M'); ?></td>
                        <td><?php echo $year = date('Y'); ?></td>
                        
                    </tr> 
                 <?php $i++; }  } ?>
                
          </table>

            <br><br>

    </div>
</div>

<script>
      
     $(document).ready(function(){

        $("#btnSave").click(function(event){
                $("#formAdd").submit();
                    
            });
      });

</script>




