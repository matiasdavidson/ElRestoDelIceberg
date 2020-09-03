window.addEventListener('load', function(){

  var inputs = document.querySelectorAll('.quantity')


  inputs.forEach(function(input){
    var price = input.nextElementSibling.innerText
    var priceSanitize = price.replace('$', '')

    input.addEventListener('change', function(){
      var totalItemPrice = parseInt(priceSanitize) * this.value;
      console.log(this.lastChild);
      this.nextSibling.nextSibling.innerText = '$' + totalItemPrice;

      //console.log(Array.from(document.querySelectorAll('.productPrice')));
      var total = Array.from(document.querySelectorAll('.productPrice')).reduce(function(totalPrice, itemPrice){
        console.log(itemPrice);
        // var priceSanitize = itemPrice.replace('$', '')
        // return totalPrice += priceSanitize
      });

      document.querySelector('.total').innerText = total;
    })
  })



})
