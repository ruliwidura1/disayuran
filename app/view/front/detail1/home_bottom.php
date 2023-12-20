let div_modal_add_to_cart = document.getElementById("div_modal_add_to_cart");
let modal_add_to_cart = new bootstrap.Modal(div_modal_add_to_cart);

let btn_add_to_cart = document.getElementsByClassName("btn-add-to-cart");

// Loop through each element with the class "btn-add-to-cart"
for (let i = 0; i < btn_add_to_cart.length; i++) {
  btn_add_to_cart[i].addEventListener("click", function() {
    modal_add_to_cart.show();
  });
}
