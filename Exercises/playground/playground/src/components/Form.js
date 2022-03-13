import React from 'react';
import {useState} from 'react'
 
const Form = () => {
    const [name, setName] = useState('');
 
    const handleNameChange = (e) => {
      setName(e.target.value);
    }
 
    const handleSubmit = (e) => {
      e.preventDefault();
      alert('A name was submitted: ' + name);  
    }


    return (
        <>
          <form onSubmit={handleSubmit}>
            <label>
            Name:
            <input type="text" value={name} onChange={handleNameChange} />
            </label>
            <input type="submit" value="Submit" />
        </form>  
        </>
      );
}


export default Form;