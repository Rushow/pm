<input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />
<input type="hidden" name="view" value="<?php echo isset($view) ? $view : ""; ?>" />



<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Employe Name</label>
    <div class="<?php echo $field_column; ?>">
     
      <select class="form-control" name="employee_id">
         <option value="0">Select</option>
        <?php 
          
          foreach ($user_datas as $data) { ?>
               
              <option value="<?php echo $data->id; ?>"><?php echo $data->first_name.' '.$data->last_name; ?></option>
              
         <?php } ?>

       </select>

    </div>
</div>

  <br><br>

       
<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Date</label>
    <div class="<?php echo $field_column; ?>">
        
        <input type="Date" name="date" class="form-control">

    </div>
</div> 
    


<br><br>

<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Category List</label>
    <div class="<?php echo $field_column; ?>">
        
       
      <select class="form-control" name="category_id">
         <option value="0">Select</option>
        <?php 
          
          foreach ($category_datas as $data) { ?>
               
              <option value="<?php echo $data->id; ?>"><?php echo $data->name; ?></option>
              
         <?php } ?>

         </select>

    </div>
</div>

<br><br>

<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Points</label>
    <div class="<?php echo $field_column; ?>">
        
        <input type="text" name="marks" placeholder="Points" class="form-control">

    </div>
</div>

