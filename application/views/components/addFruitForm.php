<h2>Add Fruit Form</h2>
<form action="<?php echo BASEURL;?>/profile/fruitStore" method="POST">
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Fruit Name..." value="<?php if($data['name']): echo $data['name']; endif; ?>">
<div class="error">
    <?php if($data['nameError']): echo $data['nameError']; endif;?>
</div>
</div>
<div class="form-group">
<input type="number" name="price" class="form-control" placeholder="Fruit Price..." value="<?php if($data['price']): echo $data['price']; endif; ?>">
<div class="error">
    <?php if($data['priceError']): echo $data['priceError']; endif;?>
</div>
</div>

<div class="form-group">
<select name="quality" class="form-control" value="<?php if($data['quality']): echo $data['quality']; endif; ?>">
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
    <input type="submit" value="Add Fruit" class="btn btn-primary">
</div>

</form>