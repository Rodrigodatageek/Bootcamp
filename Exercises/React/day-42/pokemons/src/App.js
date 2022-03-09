import "./App.css";
import { useEffect, useState } from "react";

function App() {
  const url = "https://pokeapi.co/api/v2/pokemon?offset=0&limit=5";

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    console.log(result);
  };

  useEffect(() => {
    fetchData();
  });

  return (
    <div>
      <h1>Hello World</h1>
      <h2>{results[0]}</h2>
    </div>
  );
}

export default App;
