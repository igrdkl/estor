// $(function() {
//     $('.add-to-cart').on('click', function(e){


//         e.preventDefault();
        
//         let id = $(this).data('id');

//         console.log(id);

//         $.ajax({
//             url: 'basket-view',
//             type: 'POST',
//             data: {cart: 'add', id: 'id'},
//             success: function(res){
//                 console.log(res);
//             },
//             error: function(){
//                 allert('Error');
//             }
//         });
//     });
// });