document.getElementById("buttonSubmit").onclick = function () {
  let inputNumber = document.getElementById("userInput").value;
  if (inputNumber > 59 || inputNumber < 1) {
    alert("Wrong input, please select number between 1 and 59.");
    return 1;
  }
  let numberColumn = inputNumber % 10;
  let numberRow = Math.floor(inputNumber / 10);
  switch (parseInt(numberRow)) {
    case 0:
      numberRow = "A";
      break;
    case 1:
      numberRow = "B";
      break;
    case 2:
      numberRow = "C";
      break;
    case 3:
      numberRow = "D";
      break;
    case 4:
      numberRow = "E";
      break;
    case 5:
      numberRow = "F";
      break;
  }
  alert("Your seat number is " + numberRow + numberColumn + ".");
};
