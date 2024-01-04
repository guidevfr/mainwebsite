window.addEventListener("load", (e)=>{
    const loader = document.querySelector(".loader")

    loader.classList.add("loaderHidden");



})

// MODAL
let modal = document.querySelector("#myModal");
let btn = document.querySelector("#myBtn");
let span = document.querySelector(".close");
if (btn) {
    btn.addEventListener('click', (e) => {
        e.preventDefault()
        modal.style.display = "block";
    })
    span.addEventListener('click', (e) => {
        modal.style.display = "none";
    })

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.style.display = "none"
        }
    })
} else {

}



//MODAL DES COMMANDES
let order = document.querySelectorAll(".order12");
let orderModal = document.querySelector('#orderModal')
if (order) {
    for (let i = 0; i < order.length;i++) {
        order[i].addEventListener('click', (e)=> {
            e.preventDefault()
            orderModal.style.display = "block";
            setTimeout(function () {
                reloadPageOrder()
            }, 2000)
        })
    }
} else {
}



//SUITE MODAL DES COMMANDES : RAFRAICHIR LA PAGE
function reloadPageOrder () {
    const modalreload = document.querySelector('#modalreload')
    modalreload.textContent = 'La page va se rafraîchir dans 3 secondes.';

    setTimeout(function () {
        location.reload();
    }, 3000);
}

// MENU BURGER
const menuBarIcon = document.querySelector("#menuBar");
const closeIcon = document.querySelector("#closeIcon");
const menuBarContent = document.querySelector(".menubarcontent");

menuBarIcon.addEventListener('click', () => {
    console.log('coucou')
    menuBarContent.classList.toggle('showmenubarcontent');
    closeIcon.classList.toggle('noshow');
    menuBarIcon.classList.toggle('noshow');
});

closeIcon.addEventListener('click', () => {
    menuBarContent.classList.toggle('showmenubarcontent');
    closeIcon.classList.toggle('noshow');
    menuBarIcon.classList.toggle('noshow');
});



