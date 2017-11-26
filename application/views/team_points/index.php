<div id="page-content" class="p20 clearfix">
    <div class="panel panel-default">
        <div class="page-title clearfix">
            <h1>Team Points</h1>
            <div class="title-button-group">
                <?php echo modal_anchor(get_uri("team_point/modal_form"), "<i class='fa fa-plus-circle'></i> " . 'Add Category', array("class" => "btn btn-default", "title" => lang('Add Category'))); ?>

                <?php echo modal_anchor(get_uri("team_point/point_modal_form"), "<i class='fa fa-plus-circle'></i> " . 'Add Points', array("class" => "btn btn-default", "title" => lang('Add Points'))); ?>
            </div>
        </div>

        
           <br>

            <table class="display table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%"> 
            
                 <tr>
                     <th>Name</th>
                     <th>Marks</th>
                     <th>Category</th>
                     <th>Date</th>
                     <th class="text-center option w100 sorting" tabindex="0" aria-controls="client-table" rowspan="1" colspan="1" aria-label=": activate to sort column ascending"><i class="fa fa-bars"></i></th>
                 </tr>     
                 
                 
                 <?php foreach($datas as $data) { ?>
                      <tr>
                        <td><?php echo $data->first_name.' '.$data->last_name; ?></td>
                        <td><?php echo $data->marks; ?></td>
                        <td><?php echo $data->name; ?></td>
                        <td><?php echo $data->date?></td>
                        <td class=" text-center option w100">
                        
                        <a href="" class="edit" title="Edit client" data-post-id="1" data-act="ajax-modal" data-title="Edit client" data-action-url="<?php echo base_url(); ?>index.php/team_point/edit_modal_form/<?php echo $data->id; ?>"><i class="fa fa-pencil"></i></a>

                       

                        <a href="<?php echo base_url(); ?>index.php/team_point/deletePoint/<?php echo $data->id; ?>" title="Delete client" class="delete" data-id="1" data-action="delete"><i class="fa fa-times fa-fw"></i></a></td>

                      </tr> 
                 <?php } ?>
                
          </table>

            <br><br>

    </div>
</div>



