// const body = document.DOMContentLoaded();

const myData = async () => {
  const response = await fetch(
    `https://test-api.codingbootcamp.cz/api/14278748/events`
  );
  const events = await response.json();
  console.log(events);

  //  In your HTML document, create a section dedicated to navigation and using JavaScript, loop through the categories in the data that you just retrieved and create a menu-item for each of them.

  // category.data.forEach((element) => {
  //   const productElem = document.createElement("div");
  //   productElem.innerHTML = `
  //       <div class='menu'>${element}</div>  `;
  //   document.body.appendChild(productElem);
  //   // find an element on the page
  //   // let myElement = document.querySelector(".menu");
  //   // add an event listener, waiting for the 'click' event
  //   productElem.addEventListener("click", (e) => {
  //     loadArticles(e.target.innerHTML);
  //   });
  // });
};

// const loadArticles = async (category) => {
//   console.log(category);

//   const response = await fetch(
//     `https://test-api.codingbootcamp.cz/api/14278748/events`
//   );
//   const data = await response.json();
//   console.log(data);
// };

myData();

// Load the appropriate articles
// In your HTML document, prepare a space where the articles list will be.

// In the function loadArticles, run an AJAX request to https://classes.codingbootcamp.cz/assets/classes/602/guardian.php?cat=science, where you exchange the word science with the actual name of the category that was passed to this function.

// Use the response data to display a list of articles from the selected category.

// Try clicking various categories to see the appropriate articles loading.
