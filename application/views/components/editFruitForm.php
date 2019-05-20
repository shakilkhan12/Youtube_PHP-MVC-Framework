<h2>Update Fruit Form</h2>
<form action="<?php echo BASEURL;?>/profile/updateFruit" method="POST">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Fruit Name..." value="<?php echo $data['data']->name; ?>">
<div class="error">
    <?php if($data['nameError']): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="number" name="price" class="form-control" placeholder="Fruit Price..." value="<?php echo $data['data']->price; ?>">
<div class="error">
    <?php if($data['priceError']): echo $data['priceError']; endif;?>
</div>
<input type="hidden" name="hiddenId" value="<?php echo $data['data']->id; ?>">
</div>

<div class="form-group">
<select name="quality" class="form-control" value="<?php echo $data['data']->quality; ?>">
    <option value="">Select Quality</option>
    <option value="a">A</option>
    <option value="b">B</option>
    <option value="c">C</option>
</select>
<div class="error">
    <?php if($data['qualityError']): echo $data['qualityError']; endif;?>
</div>
</div>

<div class="form-group">
    <input type="submit" value="Update Fruit" class="btn btn-primary">
</div>

</form>