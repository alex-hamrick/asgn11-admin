<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($bird)) {
  redirect_to(url_for('/bird-staff/views/index.php'));
}
?>

<dl>
  <dt>Name</dt>
  <dd><input type="text" name="bird[common_name]" value="<?= $bird->common_name; ?>" /></dd>
</dl>

<dl>
  <dt>Habitat</dt>
  <dd><input type="text" name="bird[habitat]" value="<?= $bird->habitat; ?>" /></dd>
</dl>

<dl>
  <dt>Food</dt>
  <dd><input type="text" name="bird[food]" value="<?= $bird->food; ?>" /></dd>
</dl>

<dl>
  <dt>Conservation Level</dt>
  <dd>
    <select name="bird[conservation_id]">
			<option value=""></option>
    <?php foreach(Bird::CONSERVATION_OPTIONS as $con_id => $con_name) { ?>
      <option value="<?php echo $con_id; ?>" <?php if ($bird->conservation_id == $con_id) {echo 'selected';} ?>> <?php echo $con_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>


<dl>
  <dt>Backyard Tips</dt>
  <dd><textarea name="bird[backyard_tips]" rows="5" cols="50"><?= $bird->backyard_tips; ?></textarea></dd>
</dl>
