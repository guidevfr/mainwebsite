
///////////////
// Diaporama
///////////////
$(window).on('load',function() {
    $('#diaporama1').flexslider({
        animation: "fade",
        controlNav: true,
        directionNav: true,
        animationLoop: false,
        pausePlay: true,
    });
});


const page2 = document.querySelector('#page2')
const contactbtns = document.querySelectorAll('.contactbtn');

contactbtns.forEach(contactbtn => {
    contactbtn.addEventListener('click', (e) => {
        page2.style.display = 'block';
    });
});