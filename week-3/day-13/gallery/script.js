const images = document.querySelectorAll("img");
images.forEach((element, index) => {
  let urls = [];
  let alts = [];
  const src = element.src;
  const alt = element.alt;
  urls.push(src);
  alts.push(alt);
  // console.log(src);
  // console.log(alts);
  console.log(urls.length);
});
