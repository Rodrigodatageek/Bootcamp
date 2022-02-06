const checkPassword = () => {
  let password = document.querySelector("#password").value;
  if (password < 10) {
    alert("good job");
  } else {
    alert("you mess up!!!");
  }
};
