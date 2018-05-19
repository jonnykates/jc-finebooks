<script>
  $('.main-navigation li').on('click mouseover', function() {
    $(this).find('ul').show();
  });

  $('.main-navigation li').on('mouseleave', function() {
    $(this).find('ul').hide();
  });

  $('body').click(function(e) {
    var target = $(e.target);
    if(!target.is('.main-navigation li')) {
      $('.main-navigation li ul').hide();
    }
  })
</script>