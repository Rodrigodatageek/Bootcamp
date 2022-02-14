// const greeting = () => {
//   const nameElement = document.querySelector("#username");
//   const par = document.querySelector("#greet");
//   const name = nameElement.value;
//   par.textContent = "Hello There! " + name;
//   par.style.color = "white";
//   par.style.backgroundColor = "red";
// };

// const Highlighted = () => {
//   const par1 = document.querySelector("#par1");
//   par1.className = "highlighted";
// };

// const paragraphs = document.querySelectorAll("p");
// const arrayOfParagraphs = Array.from(paragraphs);

// arrayOfParagraphs.forEach((element, index) => {
//   console.log(element);
// });

const unorderedList = document.querySelectorAll("li");
unorderedList.forEach((element, index) => {
  const list = element.innerHTML;
  console.log(list);
});
