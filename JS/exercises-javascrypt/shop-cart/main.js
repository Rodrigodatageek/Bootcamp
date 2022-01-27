const myFunction = () => {
  alert("Product added to cart");
  let myElement = document.querySelector("#button");
  let myElement2 = document.querySelector("input").value;
  myElement.textContent = myElement2 + " pieces in cart";
  console.log(myElement2);
};
