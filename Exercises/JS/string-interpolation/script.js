const first_name = "Arfred";
const last_name = "Pennyworth";
const fullname = first_name + " " + last_name;
const age = 67;
const occupation = "butler";
const place_of_residence = "Gotham";
const photo_url =
  "https://classes.codingbootcamp.cz/assets/classes/1177/alfred.jpg";

template = `<div class="employee">
    <div class="employee__photo">
        <img src="${photo_url}" alt="FULL NAME">
    </div>
    <div class="employee_info">
        <div class="employee__full-name">${fullname}</div>
        <div class="employee__occupation">${occupation}</div>
        <div class="employee__residence">${place_of_residence}</div>
        <div class="employee__age">Age:${age}</div>
    </div>
</div>`;

const value = document.querySelector(".employees");

value.innerHTML = template;

const myname = "Rodrigo";
