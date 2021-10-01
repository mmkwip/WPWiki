// remove all link of Category Menu
var links = document.getElementsByClassName("menu-item-object-category");

Array.from(links).forEach((link) => {
    link.firstChild.removeAttribute("href");
});

// Mobile Navigation
function openMobile() {
  document.getElementById('mainMenu').style.transform = 'translateX(0%)';
  document.getElementById('closeIcon').style.display = 'block';
  document.getElementById('openIcon').style.display = 'none';
}

function closeMobile() {
  document.getElementById('mainMenu').style.transform = 'translateX(-100%)';
  document.getElementById('closeIcon').style.display = 'none';
  document.getElementById('openIcon').style.display = 'block';
}
