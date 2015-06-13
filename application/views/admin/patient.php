<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Ward</th>
          <th>Treatment Id</th>
          <th>Name</th>
          <th>Age</th>
          <th>Sex</th>
          <th>Email</th>
          <th>Progress</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach($patient_info as $pi){ ?>
        <tr>
          <td><?php echo $pi->patient_id; ?></td>
          <td><?php echo $pi->ward_id; ?></td>
          <td><?php echo $pi->treatment_id; ?></td>
          <td><?php echo $pi->patient_name; ?></td>
          <td><?php echo $pi->age; ?></td>
          <td><?php echo $pi->sex; ?></td>
          <td><?php echo $pi->patient_email; ?></td>
          <td>
              <?php
                if($pi->progress == 1){
                 
                    echo "Prescribed";
                }
                else{
                
                    echo "Pending";
                }
                 
              ?>
          </td>
          <td>
              <a href="<?php echo base_url();?>super/patient_delete/<?php echo $pi->patient_id; ?>" role="button" title="Delete" onClick="return dump();">
                  <i class="icon-remove"></i>
              </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</div>