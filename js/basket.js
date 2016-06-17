$(document).ready(function() {


    function refreshSmallBasket() {

      $.ajax({
        url: '/guitar_shop_oop/mod/basket_small_refresh.php',
        dataType: 'json',
        succes: function(data) {
            $.each(data, function(k, v) {
                $("#basket_left . " + k + " span").text(v);
            });
        },
        error: function(data) {
            alert("Error occured");
        }
      });
    }

    if($(".add_to_basket").length > 0) {
       $(".add_to_basket").click(function(){

          var trigger = $(this);
          var param = trigger.attr("rel");
          var item = param.split("_");

          $.ajax ({

              type: 'POST',             // Sending request
              url:  '/guitar_shop_oop/mod/basket.php',  // The file to which send
              dataType: 'json',         // get back the array in ajax call
              data: ({ id : item[0], job  : item[1]}),
              succes: function(data) {   // executes the function

              },
              error: function(data) {
                alert("Error ~basket~");
              }
          });

          return false;
     });
    }
});
