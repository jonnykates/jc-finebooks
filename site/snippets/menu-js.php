<script>
  $('.main-navigation li').on('click mouseover', function() {
    $(this).find('ul').show();
  });

  $('.main-navigation li').on('mouseleave', function() {
    $(this).find('ul').hide();
  });

  $('body').on('click touchend', function(e) {
    var target = $(e.target);
    if(!target.is('.main-navigation li') && !target.is('.main-navigation li ul li a') ) {
      $('.main-navigation li ul').hide();
      console.log('bang');
    }
  })
</script>