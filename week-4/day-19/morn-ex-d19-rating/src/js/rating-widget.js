export class RatingWidget {
  constructor(name) {
    this.name = name;
    this.element = document.createElement("div");
    this.createWidget();
  }

  createWidget() {
    this.element.className = "rating";
    this.element.innerHTML = `<h2>${this.name}</h2><div class="rating__value">0</div>
      <div class="rating__stars">
        <div class="rating__star"></div>
        <div class="rating__star"></div>
        <div class="rating__star"></div>
        <div class="rating__star"></div>
        <div class="rating__star"></div>
      </div>`;
    const stars = this.element.querySelectorAll(".rating__star");
    let textRating = this.element.querySelector(".rating__value");
    stars.forEach((star, index) => {
      star.addEventListener("click", (e) => {
        //removing the styling for all the stars
        stars.forEach((element) => {
          element.classList.remove("rating__star--on");
        });

        //getting the order
        const order = index + 1;
        //changing the text in the text
        textRating.textContent = order;
        //adding the styling for every star with index lower than the order
        for (let i = 0; i < order; i++) {
          stars[i].classList.add("rating__star--on");
        }

        console.log(textRating);
        console.log(order);
      });
    });

    const data = async () => {
      const rating_subject = { textRating };
      const rating__value = { order };
      const url = "https://test-api.codingbootcamp.cz/api/c6c3495a/ratings";

      const myResponse = await fetch(
        "https://test-api.codingbootcamp.cz/api/c6c3495a/ratings",
        {
          method: "POST",
          body: JSON.stringify(data),
          headers: {
            "Content-Type": "application/json",
          },
        }
      );
      const myUsableResponse = await myResponse.json();
      console.log(myUsableResponse);
    };
  }
}


cost calling new RatingWidget();