import logo from "./logo.svg";
import "./App.css";
import books from "./books.json";

function App() {
  return (
    <div>
      {books.map((book) => (
        <div key={book.isbn}>
          <h2>{book.title}</h2>
        </div>
      ))}
    </div>
  );
}

export default App;
