<input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />
<input type="hidden" name="view" value="<?php echo isset($view) ? $view : ""; ?>" />


<?php foreach($fetch_data as $data) { ?>

<div class="form-group">

    <label for="name" class="<?php echo $label_column; ?>">Employe Name</label>
    <div class="<?php echo $field_column; ?>">
     
      <select class="form-control" name="employee_id" readonly>
        
         <option value="<?php echo $data->uId; ?>"><?php echo $data->first_name.' '.$data->last_name; ?></option>

       </select>

    </div>

</div>

  <br><br>

       
<div class="form-group">

    <label for="name" class="<?php echo $label_column; ?>">Date</label>
    <div class="<?php echo $field_column; ?>">
        
        <input type="Date" name="date" class="form-control" value="<?php echo $data->date; ?>">

    </div>

</div> 
    


<br><br>

<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Category List</label>
    <div class="<?php echo $field_column; ?>">
        
       
      <select class="form-control" name="category_id">
         <option value="<?php echo $data->cId; ?>"><?php echo $data->name; ?></option>

         <?php foreach ($category_data as $cData) {  
                
                 if($cData->id != $data->cId) {
         ?>

          <option value="<?php echo $cData->id; ?>"><?php echo $cData->name; ?></option>
          
        <?php } } ?>  
         
      </select>

    </div>
</div>

<br><br>

<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Points</label>
    <div class="<?php echo $field_column; ?>">
        
        <input type="text" name="marks" class="form-control" value="<?php echo $data->marks; ?>">

    </div>
</div>


<?php } ?>

