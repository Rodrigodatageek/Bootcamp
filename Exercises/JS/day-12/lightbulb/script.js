"use strict";

const btnElm = document.querySelector(".btn");

btnElm.addEventListener("click", () => {
  const stopElm = document.querySelector("#stop");
  const walkElm = document.querySelector("#walk");

  setTimeout(() => {
    stopElm.className = "light-stop-on light";
    walkElm.className = "light-stop-off light";
  }, 5000);
});
