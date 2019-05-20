<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quality</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>

      <?php foreach($data as $fruit): ?>

      <tr>
          <td><?php echo ucwords($fruit->name); ?></td>
          <td><?php echo $fruit->price . " pkr"; ?></td>
          <td><?php echo ucwords($fruit->quality); ?></td>
          <td><a href="<?php echo BASEURL; ?>/profile/edit_fruit/<?php echo $fruit->id; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $fruit->id; ?>" class="btn btn-danger">Delete</a></td>
      </tr>

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>