//waiting for the DOM to load
document.addEventListener("DOMContentLoaded", () => {
  //accessing the button and the paragraph
  const button = document.querySelector(".button");
  const text = document.querySelector(".quote");

  //adding the functionality to the button
  button.addEventListener("click", () => {
    getJoke(text);
  });
});

//function that fetches the data and adds them to an element
const getJoke = async (HTMLElement) => {
  try {
    //getting the response
    const response = await fetch("https://api.chucknorris.io/jokes/random");
    //converting the response into the json
    const responseData = await response.json();

    //adding the response to the HTML element
    HTMLElement.innerHTML = `<img src="${responseData.icon_url}" alt="Chuck Norris icon">${responseData.value}`;
  } catch (e) {
    console.log(`There was an error: ${e}`);
  } finally {
  }
};
