import React from 'react';
import { useEffect} from 'react';

function App() {

  const [searchQuery, setSearchQuery] = React.useState("");
  const url = "https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=${searchQuery}";

  const fetchData = async () => {
    const resp = await fetch(url);
    const result = await resp.json();
    console.log(result);
    result && result.search && setSearchQuery(result.search);
    
  }

  useEffect(() => {
    fetchData();
  }, []);


  return (
    <div className="App">
      <h1>Hi</h1>
      
      
    </div>
  );
}

export default App;
