let portfolio__col = document.querySelectorAll(".portfolio__col")
let close = document.querySelectorAll(".modal-close")
let modal = document.querySelectorAll(".modal")
let modalDialog = document.querySelectorAll(".modal__dialog")

// Фильтр работ
document.body.addEventListener("click", showWorks)

function showWorks(e) {
    e.preventDefault()
    if (!e.target.closest(".works_nav-link")) return
    let link = e.target.dataset.link
    portfolio__col.forEach(i => {
        (i.dataset.work === link) ? i.style.display = "flex": i.style.display = "none";

        if (link === "all") {
            i.style.display = "flex"
        }
    });
}

// Раскрытие и закрытие модальных окон
function showModal(elem) {
    openModal = document.getElementById(elem.dataset.btn)
    openModal.style.display = "flex"
    setTimeout(() => { openModal.firstElementChild.style.transform = "rotateX(0)" }, 200)
    document.querySelector("body").classList.add("no__scroll")
        // openModal.firstElementChild.style.transform = "rotateX(90deg)"
}

close.forEach((i) => {
    i.addEventListener("click", closeModal)
})

//Закрываем окно при клике на маску
document.body.addEventListener("click", (event) => {
    if (!event.target.classList.contains("modal")) return
    closeModal()
})

//Закрываем окно при клике на иконку крестика
function closeModal() {
    modalDialog.forEach((i) => {
        i.style.transform = "rotateX(90deg)"
    })
    setTimeout(() => {
        modal.forEach((i) => i.style.display = "none")
        document.querySelector("body").classList.remove("no__scroll")
    }, 200)
}


// sliderjquery slick
$(function() {
    $('[data-slider="slick"]').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: true
    });

    $(".slickBack").on("click", function(event) {
        event.preventDefault();
        let currentSlider = $(this).parents(
            ".modal").find('[data-slider="slick"]')
        currentSlider.slick("slickPrev")
    })
    $(".slickNext").on("click", function(event) {
        event.preventDefault();
        let currentSlider = $(this).parents(
            ".modal").find('[data-slider="slick"]')
        currentSlider.slick("slickNext")
    })



})

// Раскрытие навигации

let navLink = document.querySelectorAll(".nav__link")

burger.addEventListener("click", showNav)

function showNav(event) {

    event.preventDefault()
    nav.classList.toggle("show")
        // setTimeout(function() {
        //     navLink.forEach((i) => i.classList.toggle("show__link"))
        // }, 100)

}