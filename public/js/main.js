// navbar
var navbar = document.getElementById('navbar');
var navbarGap = document.getElementById('navbar-gap');
navbarGap.style.height = navbar.clientHeight + "px";

// burger menu
var dropdownTrigger = document.getElementById('dropdown-trigger');
var navItem = document.getElementById('nav-item');
dropdownTrigger.addEventListener('click', function() {
	navItem.classList.toggle('active');
});