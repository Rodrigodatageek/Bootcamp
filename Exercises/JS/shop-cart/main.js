const myFunction = () => {
  let myElement = document.querySelector("#button");
  let myinput = document.querySelector("#input").value;
  myElement.textContent = myinput + " added to the  cart";
  myElement.className = "btn__green";
};

// let myElement2 = document.querySelector("input").value;

// console.log(myElement2);
