// navbar.js
document.addEventListener("DOMContentLoaded", function() {
    const navbarPlaceholder = document.getElementById("navbar_placeholder");
    const xhr = new XMLHttpRequest(); // Create a new XMLHttpRequest object
    xhr.open("GET", "nav.html", true); // Specify the URL of the navbar file
    xhr.onreadystatechange = function () { // Define a function to handle state changes
        if (xhr.readyState === 4 && xhr.status === 200) { // Check if the request is complete and successful
            navbarPlaceholder.innerHTML = xhr.responseText; // Set the innerHTML of the placeholder div to the response text (navbar content)
        }
    };
    xhr.send(); // Send the request
});