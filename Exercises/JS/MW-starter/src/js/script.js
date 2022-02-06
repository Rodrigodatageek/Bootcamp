import { ProgressBar } from "./ProgressBar";

document.addEventListener("DOMContentLoaded", () => {
  // @TODO no.1 create new instance of ProgressBar and append its right one property to body element
  // (done)
  const progressBar = new ProgressBar();
  document.body.appendChild(progressBar.element);
  console.log(ProgressBar);

  // @TODO no.2 fix missing icon on plus button
  // (done)
});
