const checkPassword = () => {
  let password = document.querySelector("#password").value;
  if ((password.lenght = 6)) {
    alert("good job");
  } else {
    alert("you mess up!!!");
  }
};
