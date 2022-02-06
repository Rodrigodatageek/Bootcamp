// const square = (num1) => {
//   let result = num1 * num1;
//   return result;
// };

// // console.log(square(5));

// const hypotenuse = (a, b) => {
//   return Math.sqrt(square(a) + square(b));
// };

// console.log(hypotenuse(4, 3));

// const abs = (num) => {
//   if (num >= 0) {
//     return num;
//   } else {
//     return -num;
//   }
// };

// console.log(abs(0));

const spread3 = (a, b, c) => {
  let largestNum;
  let smallerNum;
  if (a >= b && a >= c) {
    largestNum = a;
  } else if ( b >= a && b >= c) {
    largestNum = b;
  } else {
    largestNum = c;
}
