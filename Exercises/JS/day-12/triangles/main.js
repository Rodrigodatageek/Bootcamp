const square = (number) => number * number;
const hypotenuse = (a, b) => Math.sqrt(square(a) + square(b));

const abs = (number) => {
  if (number >= 0) {
    return number;
  }
  return -number;
};
