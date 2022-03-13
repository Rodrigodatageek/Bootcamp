import "./App.css";
import RandomCat from "./components/RandomCat";
import { useEffect, useState } from "react";

function App() {
  const [fact, setFact] = useState("");
  const [count, setCount] = useState(0);
  const url = "https://cat-fact.herokuapp.com/facts/random";

  useEffect(() => {
    const timer = setTimeout(() => {
      console.log("Hello, World!");
      setCount(count + 1);
      setFact(`Hello, World! ${count}`);
    }, 1000);
    return () => clearTimeout(timer);
  });

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    result && setFact(result.text);
  };

  return (
    <div className="App">
      <RandomCat title={fact} />
    </div>
  );
}

export default App;
