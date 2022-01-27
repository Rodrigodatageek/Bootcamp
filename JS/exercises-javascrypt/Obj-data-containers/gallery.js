const urls = [];
const alts = [];

const images = document.querySelectorAll("img");
images.forEach((images, src) => {
  //   console.log(images);
  //   console.log(images.src);
  //   console.log(images.alt);

  urls.push(images.src);
  alts.push(images.alt);
});
