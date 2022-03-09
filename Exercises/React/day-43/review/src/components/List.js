import React from "react";

const List = ({ users = [] }) => {
  return;
  <>
    {users.map((element) => (
      <p>{element.name}</p>
    ))}
  </>;
};

export default List;
