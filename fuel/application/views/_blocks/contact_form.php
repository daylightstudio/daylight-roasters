<?=$form->js_output(); //not sure if I necessarily need this... ?>
<form action="<?=$form->form_action?>" method="post" novalidate data-validate="true" class="form" >
<?php foreach($fields as $field) : ?>
<div class="form-field">
    <?=$field['label']?>
    <p><?=$field['field']?></p>
</div>
<?php endforeach; ?>
 
<input name="return_url" id="return_url" value="<?=$form->return_url?>" type="hidden">
<input name="form_url" id="form_url" value="<?=current_url()?>" type="hidden">
<?=$__antispam___field?>
<input value="Send" type="submit">

</form>