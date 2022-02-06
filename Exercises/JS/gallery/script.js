const images = document.querySelectorAll("img");
const arrayImages = Array.from(images);

arrayImages.forEach((e) => {
  let alt = e.src;
  console.log(alt);
});
