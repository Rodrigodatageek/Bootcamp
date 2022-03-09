import "./App.css";
import { useEffect, useState } from "react";
import Cocktail from "./components/Cocktail";

function App() {
  const [cocktail, setCocktail] = useState(null);
  const url = "https://www.thecocktaildb.com/api/json/v1/1/random.php";

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    console.log(result.drinks);
    result &&
      result.drinks &&
      !!result.drinks.lenght &&
      setCocktail(result.drinks[0]);
  };

  return (
    <div>
      {cocktail.length > 0 && (
        <ul>
          {cocktail.map((cocktail) => (
            <li key={idDrink}></li>
          ))}
        </ul>
      )}
    </div>
  );
}

export default App;
