import { useEffect, userState } from "react";
import "./App.css";
import List from "./components/List";

const App = () => {
  const [list, setlist] = userState([]);

  useEffect(() => {
    setlist(["Adrien", "Lucian", "Matej", "Rodrigo", "Amelia"])
  }, [] );

  return (
    <div className="App">
      <List users={list} />
    </div>
  );
};

export default App;
