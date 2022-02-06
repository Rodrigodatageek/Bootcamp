Create a simple setup with index.html, script.js and possibly style.css

Take this array of alerts:

const alerts = [
'Unable to access resource. User is not authorized.'
'You are missing proper user permissions.',
'Administrators have been notified of this action.',
'Please remain where you are, police is on the way.'
];
Use JavaScript to loop through them and generate HTML elements for them. The result should look like this:

<div class="alerts">
    <div class="alert">
        <div class="alert__text">Unable to access resource. User is not authorized.</div>
        <div class="alert__close">&times;</div>
    </div>
    <div class="alert">
        <div class="alert__text">You are missing proper user permissions.</div>
        <div class="alert__close">&times;</div>
    </div>
</div>
Attach an event listener onto every alert element. When it is clicked, add the style background-color: green and color: white directly to it.

Attach an event listener onto the alert\_\_close element of every alert element. When it is clicked, add the style display: none to the appropriate alert element.

---------------------------------- second part of the exercise --------------------------------------------

Continuing with the exercise from before, first add a bit of CSS to your CSS code:

.alert.alert--seen {
opacity: 0.5;
}
.alert.alert--error {
background-color: red;
color: white;
}
Then, change the code that is generating the HTML code so that the class alert--error is added to every alert. Do it using .classList.add()

Then attach an event listener onto every alert element. When it is clicked, add the class alert--seen to that alert. When it is clicked again, remove the class again. Do it using .classList.toggle()
