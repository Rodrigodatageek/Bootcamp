import { RatingWidget } from "./rating-widget.js";

//waiting for the document to get ready
document.addEventListener("DOMContentLoaded", () => {
  const rating = new RatingWidget("The Godfather");
  document.body.appendChild(rating.element);
  const rating2 = new RatingWidget("GoodFellas");
  document.body.appendChild(rating2.element);
  const rating3 = new RatingWidget("Inception");
  document.body.appendChild(rating3.element);
  const rating4 = new RatingWidget("Hackers");
  document.body.appendChild(rating4.element);
});
