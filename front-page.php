<?php
/*
========================
    Home Page
========================
*/
?>



<?php get_header() ?>


<div id="slider" >
    
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/slider-1.jpg"class="img-fluid dobject-fit-cover ">

    <div id="left_arrow" class="opas"><img class="arrow" src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow-l.png "></div>
    <div id="right_arrow" class="opas"><img class="arrow" src="<?php echo get_template_directory_uri() ;?>/assets/images/arrow-r.png "></div>
</div>

<div class="row py-2 margin-b main-link">

    <div class="col-lg-4 offset-lg-1 col-md-5 link kontakt-link"> 
        <img class="img-fluid py-3" src="https://ujeb.se/nruBsV">
    </div>

    <div id="kontakt" class="col-lg-6 col-md-7  center link kontakt-link">
        <h1 class="text-center mb-lg-2 mt-lg-5">KONTAKT</h1>
        <p> only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  </p>
    </div>


</div>

<div class="row py-2 margin-b main-link">

    <div class="col-lg-6 col-md-7 offset-lg-1 center link o_nas-link">
        <h1 class="text-center mb-lg-2 mt-lg-5">O NAS</h1>
        <p> only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  </p>
    </div>

    <div class="col-lg-4  col-md-5 link o_nas-link"> 
    <img class="img-fluid py-3" src="https://tiny.pl/wz516">
    </div>

</div>


<div class="row py-2 margin-b main-link">

    <div class="col-lg-4 offset-lg-1 col-md-5 link blog-link"> 
        <img class="img-fluid py-3" src="https://ujeb.se/nruBsV">
    </div>

    <div id="kontakt" class="col-lg-6 col-md-7  center link blog-link">
        <h1 class="text-center mb-lg-2 mt-lg-5">BLOG</h1>
        <p> only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.  </p>
    </div>


</div>


<script>



// bg-image
document.body.style.backgroundImage = 'url(<?php echo get_template_directory_uri(); ?>/assets/images/tileable_wood_texture.png)';


/*
==========================
 SLIDER
==========================
*/
let slide_nr = 1
let timeloud = null;
let hide = null;
let show = null;

document.querySelector("#left_arrow").addEventListener('click', () => {
    rm_change_slide(-2);
});
document.querySelector("#right_arrow").addEventListener('click', () => {
    rm_change_slide(0);
});

function rm_hide() {

    clearTimeout(hide);

    document.querySelectorAll("#slider > img")[0].classList.remove('poj');
    document.querySelectorAll("#slider > img")[0].classList.add('zanik');
}
function rm_show() {

    clearTimeout(show);

    document.querySelectorAll("#slider > img")[0].classList.remove('zanik');
    document.querySelectorAll("#slider > img")[0].classList.add('poj');
}


function rm_change_slide(nr = 0) {
    slide_nr++;
    slide_nr = slide_nr + nr;

    if (slide_nr < 1) slide_nr = 3;
    if (slide_nr > 3) slide_nr = 1;

    let slide = "https://localhost/wp-content/themes/roofmaster/assets/images/slider-" + slide_nr + ".jpg";
    document.querySelectorAll("#slider > img")[0].src = slide;

    hide = setTimeout("rm_hide()", 4000);

    if (timeloud) {
        clearTimeout(timeloud);
    }
    timeloud = setTimeout("rm_change_slide()", 5000);

    show = setTimeout("rm_show()", 100);
}
</script>
<?php get_footer()?>
