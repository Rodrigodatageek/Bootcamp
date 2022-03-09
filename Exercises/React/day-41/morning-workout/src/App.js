import logo from "./logo.svg";
import "./App.css";
import ProductList from "./ProductList";
import Header from "./Header";
import "./design/aperture/css/main.css";
import Footer from "./Footer";

function App() {
  return (
    <div id="page">
      <Header></Header>
      <ProductList></ProductList>
      <Footer></Footer>
    </div>
  );
}

export default App;
