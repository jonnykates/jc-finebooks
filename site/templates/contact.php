<?php snippet('header') ?>

<div class="col--main">
  <?= $page->text()->kirbytext() ?>

<?php
  $enquiryRelatesTo = "";
  $enquiryAuthor = "";
  if(get('title')) {
    $enquiryRelatesTo = get('title');
    $enquiryAuthor = get('author');
  }
?>

<?php if(get('title')){ ?>
  <div class="enquiry-summary">
    <a class="clear-enquiry" href="/contact">X</a>
    <span>Enquiring about</span>
    <h3><strong><?= $enquiryAuthor ?></strong>, <?= $enquiryRelatesTo ?></h3>
  </div>
<?php } ?>

<form action="<?php echo $page->url()?>#form" method="post" class="form__contact">

    <label for="name" class="required">Name</label>
    <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>

    <label for="email" class="required">E-Mail</label>
    <input type="email" name="email" id="email" value="<?php $form->echoValue('email') ?>" required/>

    <span style="display: none;">
      <label for="enquiring-about">Enquiring about</label>
      <input type="text" name="enquiring-about" id="enquiring-about" value="<?= $enquiryRelatesTo ?>" />
    </span>

    <label for="company">Company or institution</label>
    <input type="text" name="company" id="company" value="<?php $form->echoValue('company') ?>" />

    <label>Interested in</label>
    <label class="checkbox-wrapper"><input type="checkbox" name="interests[1]" value="European Architecture">European Architecture<br /></label>
    <label class="checkbox-wrapper"><input type="checkbox" name="interests[2]" value="British Architecture">British Architecture<br /></label>

    <label for="other-interests">Any other relevant areas of interest?</label>
    <input type="text" name="other-interests" id="other-interests" value="<?php $form->echoValue('other-interests') ?>" placeholder="E.g. Modern Books and Manuscripts" />

    <label for="message">Message</label>
    <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>

    <label><input type="checkbox" name="opt-in" id="opt-in" value="<?php $form->echoValue('opt-in') ?>" checked>Please contact me about relevant books in the future</label>
    <input type="hidden" name="opt-in" id="opt-in" value="no" />

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