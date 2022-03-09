// Create a separate component for Weather. Iterate through the array of your data and display day, min & max for each day.
import weather from "./weather.json";
import Day from "./Day.js";

const Weather = () => {
  return (
    <div>
      {weather.map((day) => {
        return <Day day={day} />;
      })}
    </div>
  );
};

export default Weather;
