// navbar
var navbar2 = document.getElementById('navbar');
var navbar2Gap = document.getElementById('navbar-gap');
navbar2Gap.style.height = navbar2.clientHeight + "px";

// burger menu
var dropdownTrigger = document.getElementById('dropdown-trigger');
var navItem = document.getElementById('nav-item');
dropdownTrigger.addEventListener('click', function() {
	navItem.classList.toggle('active');
});