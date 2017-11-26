<input type="hidden" name="id" value="<?php echo $model_info->id; ?>" />
<input type="hidden" name="view" value="<?php echo isset($view) ? $view : ""; ?>" />
<div class="form-group">
    <label for="name" class="<?php echo $label_column; ?>">Category Name</label>
    <div class="<?php echo $field_column; ?>">
        
        <input type="text" name="name" placeholder="Category" class="form-control">

    </div>
</div>

