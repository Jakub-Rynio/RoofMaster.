/*
==========================
    MENU
==========================
*/
let flag = false;

document.querySelector('#mob_menu').addEventListener('click', rm_show_menu);

function rm_show_menu() {
    if (flag == false) {
        flag = true;
        document.querySelector("#mobile_menu_box").style.cssText = "display: block";
    } else {
        flag = false;
        document.querySelector("#mobile_menu_box").style.cssText = "display: none";
    }
}
//document.querySelectorAll("#slider > img")[0].src = 'https://localhost/wp-content/themes/roofmaster/assets/images/slider-3.jpg'
//slider



/*
==========================
    LINKS
==========================
*/
var kontakt = document.querySelectorAll('.kontakt-link');

kontakt.forEach(adding_link => adding_link.addEventListener("click", function(){
    window.location.href = "/kontakt";
}));


var o_nas = document.querySelectorAll('.o_nas-link');

o_nas.forEach(adding_link => adding_link.addEventListener("click", function(){
    window.location.href = "/o-nas";
}));


var blog = document.querySelectorAll('.blog-link');

blog.forEach(adding_link => adding_link.addEventListener("click", function(){
    window.location.href = "/Blog";
}));
