const myData = async () => {
  const response = await fetch(
    "https://classes.codingbootcamp.cz/assets/classes/602/guardian.php"
  );
  const data = await response.json();
  console.log(data);
};

myData();
