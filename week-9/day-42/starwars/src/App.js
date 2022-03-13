import "./App.css";
import { useEffect, useState } from "react";

function App() {
  const [film, setFilm] = useState([]);
  const url = "https://swapi.dev/api/films/";

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    setFilm(result.results);
    console.log(result);
  };

  useEffect(() => {
    fetchData();
  }, []);

  return (
    <div className="container">
      <ul>
        {film.map((item) => (
          <li>{item.title}</li>
        ))}
      </ul>
    </div>
  );
}

export default App;
