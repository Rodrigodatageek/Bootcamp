import React from "react";

const Header = () => {
  return (
    <div>
      <header>
        <img
          src="https://classNamees.codingbootcamp.cz/assets/classNamees/workouts/aperture.png"
          alt="Aperture science"
          className="logo"
        />

        <div className="user">
          <span>chell@aperture.sc</span>
          <br />
          <a href="#">logout</a>
        </div>

        <nav>
          <a href="#">Home</a>
          <a href="#" className="current">
            Products
          </a>
          <a href="#">Stores</a>
          <a href="#">Customers</a>
        </nav>
      </header>
    </div>
  );
};

export default Header;
