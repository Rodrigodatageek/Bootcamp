import React, { useState } from "react";

const Day = ({ day }) => {
  const [visible, setVisible] = useState(true);
  return (
    <div>
      <h1
        onClick={() => {
          setVisible(!visible);
        }}
      >
        {day.day}
      </h1>
      <div className={`${visible && "hidden"}`}>{day.min}</div>
      <div className={`${visible && "hidden"}`}>{day.max}</div>
      <div className={`${visible && "hidden"}`}>{day.img}</div>
      <div className={`${visible && "hidden"}`}>{day.wind}</div>
      <div className={`${visible && "hidden"}`}>{day.humidity}</div>
      <div className={`${visible && "hidden"}`}>{day.percipitation}</div>
    </div>
  );
};

export default Day;
