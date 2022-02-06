Let's look at the exercise with alerts again. But this time, let's begin with some HTML code.

Create a simple index.html, style.css and script.js. Insert this HTML code into the body:

<div class="alerts">
    <div class="alert" data-type="error">
        <div class="alert__text">Unable to access resource. User is not authorized.</div>
        <div class="alert__close">&times;</div>
    </div>
    <div class="alert" data-type="error">
        <div class="alert__text">You are missing proper user permissions.</div>
        <div class="alert__close">&times;</div>
    </div>
    <div class="alert" data-type="success">
        <div class="alert__text">Administrators have been notified of this action.</div>
        <div class="alert__close">&times;</div>
    </div>
    <div class="alert" data-type="warning">
        <div class="alert__text">Administrators have been notified of this action.</div>
        <div class="alert__close">&times;</div>
    </div>
</div>
Into your CSS code, add these rules:

.alert.alert--error {
background-color: red;
color: white;
}
.alert.alert--warning {
background-color: orange;
color: white;
}
.alert.alert--success {
background-color: green;
color: white;
}
In your script.js do these things:

find all .alert elements on the page
find the value in their data-type attributes
based on the value, add the appropriate class name to the alert element (using .classList.add())
