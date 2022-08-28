let close = document.querySelectorAll(".modal-close")
let modal = document.querySelectorAll(".modal")
let modalDialog = document.querySelectorAll(".modal__dialog")

// Фильтр работ
document.body.addEventListener("click", showWorks)

function showWorks(e) {
    let portfolio__col = document.querySelectorAll(".portfolio__col")
    if (!e.target.closest(".works_nav-link")) return
    e.preventDefault()
    let link = e.target.dataset.link
    portfolio__col.forEach(i => {
        (i.dataset.work === link) ? i.style.display = "flex" : i.style.display = "none";

        if (link === "all") {
            i.style.display = "flex"
        }
    });
}

// Раскрытие и закрытие модальных окон
function showModal(elem) {
    // console.log(elem);
    openModal = document.getElementById(elem.dataset.btn)
    // console.log(openModal);
    openModal.style.display = "flex"
    setTimeout(() => {
        openModal.firstElementChild.style.transform = "rotateX(0)"
    }, 200)
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

// sliderjquery slick my works
$(function () {
    $('[data-slider="slick"]').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        arrows: false,
        dots: true
    });

    $(".slickBack").on("click", function (event) {
        event.preventDefault();
        let currentSlider = $(this).parents(
            ".modal").find('[data-slider="slick"]')
        currentSlider.slick("slickPrev")
    })
    $(".slickNext").on("click", function (event) {
        event.preventDefault();
        let currentSlider = $(this).parents(
            ".modal").find('[data-slider="slick"]')
        currentSlider.slick("slickNext")
    })
})

// sliderjquery slick reviews
let slideEl = $('.slide--parent');

slideEl.flickity({
    imagesLoaded: true,
    wrapAround: true,
    autoPlay: true,
    pauseAutoPlayOnHover: true
});


// Раскрытие навигаци
let navLink = document.querySelectorAll(".nav__link")
burger.addEventListener("click", showNav)

function showNav(event) {
    event.preventDefault()
    nav.classList.toggle("show")
    // setTimeout(function() {
    //     navLink.forEach((i) => i.classList.toggle("show__link"))
    // }, 100)
}
//Сохранение в PDF
function generatePDF() {
    const element = document.getElementById('invoice');
    var opt = {
        margin:       [1, 0],
        filename:     'my_resume.pdf',
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
// New Promise-based usage:
    html2pdf().set(opt).from(element).save();
// Old monolithic-style usage:
}

// Отправка на печать резюме
function CallPrint(strid) {
    var prtContent = document.getElementById(strid);
    var prtCSS = '<link rel="stylesheet" href="css/style.css" type="text/css" />';
    var WinPrint = window.open('','','left=50,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
    WinPrint.document.write('<div id="print" class="contentpane">');
    WinPrint.document.write(prtCSS);
    WinPrint.document.write(prtContent.innerHTML);
    WinPrint.document.write('</div>');
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
    prtContent.innerHTML=strOldOne;
}