import React from "react";
import PropTypes from "prop-types";
import Button from "./Button";

const Header = ({ title }) => {
  return (
    <header className="header">
      <h1>{title}</h1>
      <Button color='green' text='Add' />
     
    </header>
  );
};

Header.defaultProps = {
  title: "Task Tracker",
};

// import prop types to make your code more robust!!
// Header.propTypes = {
//   title: PropTypes.string.isRequired,
// };

export default Header;
