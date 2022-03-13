import React from "react";

const Cocktail = ({ cocktail }) => {
  const { strDrink } = cocktail;
  return (
    <div>
      <h1>{strDrink}</h1>
    </div>
  );
};

export default Cocktail;
