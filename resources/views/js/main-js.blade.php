<script>
  document.addEventListener("DOMContentLoaded", () => {
    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
      const title = item.querySelector('.accordion-title');
      const content = item.querySelector('.accordion-content');

      title.addEventListener('click', () => {
        content.classList.toggle('hidden');
        title.classList.toggle('no-show');
      });
    });

    $('.tabs button').on('click', function(){
      let target = $(this).attr('data-tabs-target');
      $('.tabs button').removeClass('active');
      $(this).addClass('active');
      $('.tab').addClass('hidden');
      $(target).removeClass('hidden');
    });

    $('button.menu').on('click', function(){
      let target = $(this).attr('data-menu-target');
      if ($(target).hasClass('hidden')) {
        $(target).removeClass('hidden');
      }else{
        $(target).addClass('hidden');
      }
    });

    $('button.nav-menu').on('click', function(){
      let target = $(this).attr('data-nav-target');
      if ($(target).hasClass('hidden')) {
        $(target).removeClass('hidden');
      }else{
        $(target).addClass('hidden');
      }
    });
  });
</script>