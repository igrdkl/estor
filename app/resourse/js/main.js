$(function() {
    $('.add-to-cart').on('click', function(e){


        e.preventDefault();
        let id = $(this).data('id');

        console.log(id);

        $.ajax({
            url: 'basket-cart',
            type: 'POST',
            data: {id:'id'},

            success: function(res){
                console.log(res);
            },
            error: function(){
                allert('Error');
            }
        });
    });
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    // pagination: {
    //   el: '.swiper-pagination',
    // },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });
