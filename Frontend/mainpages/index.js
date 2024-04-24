// Code to display mini navbar dropdwon list
const userIcon = document.getElementById("user_icon");
const userAdd = document.getElementById("displayUserAdd");


// if (userAdd && userIcon) {
  userIcon.addEventListener("click", () => {
    if (
      userAdd.style.display === "block") {
      userAdd.style.display = "none";
    } else {
      userAdd.style.display = "block";
    }
  });
// }

//Code to display product menu
const viewMenubtn = document.getElementById('viewMenubtn');
const productMenuDisplay = document.getElementById('productMenuDisplay');
const exitIcon = document.getElementById('exitIcon');

viewMenubtn.addEventListener('click', () => {
    productMenuDisplay.style.display = 'block';
  });

// Code to exit Product menu
exitIcon.addEventListener('click', ()=>{
    productMenuDisplay.style.display = 'none';
})


