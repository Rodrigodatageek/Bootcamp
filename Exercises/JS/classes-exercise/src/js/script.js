class Product {
  constructor(name, price, quantity) {
    this.name = name;
    this.price = price;
    this.quantity = quantity;
  }

  sell() {
    if (this.quantity > 0) {
      this.quantity -= 1;
    }
  }

  store(count) {
    this.quantity += count;
  }
}

const products = [
  new Product("Balls", 300, 10),
  new Product("Flying discs", 25, 30),
  new Product("Goal posts", 150, 19),
  new Product("Nets", 10, 50),
  new Product("Racquets", 15, 100),
  new Product("Bags", 50, 140),
  new Product("Footwear", 50, 40),
];

const productList = document.querySelector(".product-list");

products.forEach((product) => {
  const productElm = document.createElement("div");
  productElm.className = "product";
  productElm.innerHTML = `
  <div class="product__name">${product.name}</div>
  <div class="product__price">${product.price} CZK</div>
  <div class="product__quantity">${product.quantity} in stock</div>
  <button class="btn-buy">Buy</button>`;

  const btnBuy = productElm.querySelector(".btn-buy");
  const quantityElement = productElm.querySelector(".product__quantity");

  btnBuy.addEventListener("click", () => {
    product.sell();
    quantityElement.textContent = sports.quantity + " in stock";
  });

  productList.appendChild(productElm);
});

//     getFullName() {
//         return `${this.firstName} ${this.middleName[0]}. ${this.lastName}`;
//     }

//     isAdult() {
//         return this.age >= 18;
//     }
