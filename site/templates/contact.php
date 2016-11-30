<?php snippet('header') ?>

<div class="col--main">
  <?= $page->text()->kirbytext() ?>

<?php
  $enquiryRelatesTo = "";
  if(get('enquiry')) {
    $enquiryRelatesTo = get('enquiry');
  }
?>

<form action="<?php echo $page->url()?>#form" method="post" class="form__contact">

    <label for="name" class="required">Name</label>
    <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>

    <label for="email" class="required">E-Mail</label>
    <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>

    <label for="related-book">Related book</label>
    <input type="text" name="related-book" id="related-book" value="<?= $enquiryRelatesTo ?>" />

    <label for="message">Message</label>
    <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

    <label class="uniform__potty" for="website">Please leave this field blank</label>
    <input type="text" name="website" id="website" class="uniform__potty" />

    <a name="form"></a>
<?php if ($form->hasMessage()): ?>
    <div class="message <?php e($form->successful(), 'success' , 'error')?>">
        <?php $form->echoMessage() ?>
    </div>
<?php endif; ?>

    <button type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Submit</button>

</form>


  </div>

<?php snippet('footer') ?>