import "./App.css";
import { useEffect, useState } from "react";

function App() {
  const [joke, setJoke] = useState(null);
  const url = "https://v2.jokeapi.dev/joke/Any";

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    setJoke(result);
    console.log(result);
  };

  useEffect(() => {
    fetchData();
  }, []);

  return (
    <div className="container">
      {joke &&
        (joke.type == "twopart" ? (
          <div>
            <p>{joke.setup}</p>
            <br />
            <p>{joke.delivery}</p>
          </div>
        ) : (
          joke.joke
        ))}
    </div>
  );
}

export default App;
