const images = document.querySelectorAll("img");
let urls = [];
let alts = [];

images.forEach((images) => {
  const src = images.src;
  const alt = images.alt;

  urls.push(src);
  alts.push(alt);
});

// console.log(images.src);
// console.log(images.alt);
console.log(urls);
