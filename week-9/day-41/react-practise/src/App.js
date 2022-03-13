import { React, useState } from "react";
import Counter from "./Counter";

export default function App() {
  return (
    <div className="counter">
      <h1>React Counter</h1>
      <Counter />
      <Counter />
      <Counter />
    </div>
  );
}
