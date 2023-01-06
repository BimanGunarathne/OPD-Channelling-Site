function navFunction() {
    var navbar = document.getElementById("mynav");
    if (navbar.className === 'nav') {
        navbar.className += " responsive";
    } else {
        navbar.className = "nav";
    }
}