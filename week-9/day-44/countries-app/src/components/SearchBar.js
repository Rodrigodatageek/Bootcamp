import React from 'react';
import { useEffect, useState } from "react";


const SearchBar = ( {country} ) => {

    const [searchInput, setSearchInput] = useState("");

    const handleChange = (e) => {
        e.preventDefault();
        setSearchInput(e.target.value);
      };
      if (searchInput.length > 0) {
          country.filter((country) => {
          return country.name.match(searchInput);
      });
      }
      
    return (
        <div>
        <input 
        type="text" 
        placeholder="Search here" 
        onChange={handleChange} 
        value={searchInput} />
        

        {/* {country.map((country, i) => {

            return (
                <tr>
                    <td>{country.name}</td>
                </tr>
            )
        
            })} */}
        

        </div>
  )
}

export default SearchBar;