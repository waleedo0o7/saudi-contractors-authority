let allSwipers = {};

let breakpointSm = 576;
let breakpointMd = 768;
let breakpointLg = 992;
let breakpointXl = 1250;
let breakpoint2xl = 1600;

$(function () {
    toggleMobileMenu();
    toggleMobileSearch();


    $(document).on('click', '.upload-files-button', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $("#upload-files-input").click();

        const fileInput = document.getElementById("upload-files-input");
        const fileList = document.getElementById("files-list");

        fileInput.addEventListener("change", () => {
            const files = Array.from(fileInput.files);
            fileList.innerHTML = "";

            files.forEach((file) => {
                const sizeMB = (file.size / (1024 * 1024)).toFixed(2);
                const fileItem = document.createElement("div");
                fileItem.textContent = `📎 ${file.name} (${sizeMB} MB)`;
                fileList.appendChild(fileItem);
            });
        });


    });

    $(".flatpickr").flatpickr();

    $('.select2').select2();

    $('.select2-multiple').select2({
        placeholder: "Select a state",
    });




    $(document).on('click', '.dropdown.prevent-auto-close .dropdown-menu', function (e) {
        e.stopPropagation();
    });

});

function toggleMobileMenu() {
    $(".toggle-mobile-menu-button").on("click", function () {
        $(".mobile-menu-popup").toggleClass("show");
        $("body").toggleClass("overflow-hidden");

    });
}

function toggleMobileSearch() {
    $(".toggle-mobile-search-button").on("click", function () {
        $(".mobile-search").toggleClass("show");
        $("body").toggleClass("overflow-hidden");

    });
}

$('.swiper-custom:not(.swiper-initialized)').each(function (index, element) {

    let $el = $(element);
    let swiperName = `swiper${index}`;

    let nextButtonId = $el.attr('data-next-button');
    let prevButtonId = $el.attr('data-prev-button');
    let paginationId = $el.attr('data-pagination');
    let paginationType = $el.attr('data-pagination-type') || 'bullets'; // bullets - progressbar 
    let nextButton = nextButtonId ? document.getElementById(nextButtonId) : null;
    let prevButton = prevButtonId ? document.getElementById(prevButtonId) : null;
    let paginationEl = paginationId ? document.getElementById(paginationId) : null;


    let spaceBetween = $el.attr('data-space-between') || 10;

    let perView = $el.attr('data-per-view') || 3;

    let perViewMd = $el.attr('data-per-view-md') || 2;

    let perViewSm = $el.attr('data-per-view-sm') || 1;

    let perViewXs = $el.attr('data-per-view-xs') || 1;

    let effect = $el.attr('data-effect') || 'slide' // slide - fade - coverflow - creative - cards  ;


    let centeredSlides = $el.attr('data-centered-slides') || false; // true - false

    let initialSlide = $el.attr('data-initial-slide') || 0; // 0 - 1 - 2 - 3 - 4    

    let options = {
        loop: false,
        slidesPerView: perViewXs,
        spaceBetween: 5,
        effect: effect,
        centeredSlides: centeredSlides,
        initialSlide: initialSlide,

        navigation: {
            nextEl: nextButton || $el.parent().find('.swiper-button-next')[0],
            prevEl: prevButton || $el.parent().find('.swiper-button-prev')[0],
            clickable: true,
        },

        pagination: {
            el: paginationEl,
            type: paginationType,
            clickable: true,
        },

        breakpoints: {
            [breakpointSm]: {
                slidesPerView: perViewSm,
                spaceBetween: 10
            },
            [breakpointMd]: {
                slidesPerView: perViewMd,
                spaceBetween: 10
            },
            [breakpointXl]: {
                slidesPerView: perView,
                spaceBetween: spaceBetween
            }
        }

    }

    let swiperInstance = new Swiper(element, options);

    allSwipers[swiperName] = swiperInstance;
    // console.log(`Initialized ${swiperName}`);

});








function toggle(btn) {
    const submenu = btn.nextElementSibling;
    submenu.classList.toggle('d-none');
}

$(document).ready(function () {
    $('input[name="is-page-useful"]').on('change', function () {
        const selectedId = $(this).attr('id');

        if (selectedId === 'is-page-useful') {
            // المستخدم اختار "نعم"
            $('.useful-options').show();
            $('.not-useful-options').hide();
        } else {
            // المستخدم اختار "لا"
            $('.useful-options').hide();
            $('.not-useful-options').show();
        }
    });
});

$(document).ready(function () {
    $('.show-comments').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        $('.comments-content').css("display", "block");
    });
});

$(document).ready(function () {
    $('.toggle-show-password-button').on('click', function (e) {

        if ($(this).parents(".form-group").find("input").attr("type") == "password") {
            $(this).parents(".form-group").find("input").attr("type", "text");
            $(this).removeClass("icon-eye-closed");
            $(this).addClass("icon-eye");
        } else {
            $(this).parents(".form-group").find("input").attr("type", "password");
            $(this).removeClass("icon-eye");
            $(this).addClass("icon-eye-closed");
        }

    });
});









$(document).ready(function () {
    applyFontSizeLevel();
});

const FONT_SIZE_LEVELS = [0.8, 0.9, 0.95, 1, 1.1, 1.2, 1.3];
const DEFAULT_LEVEL = 3;
let fontSizeLevel = parseInt(localStorage.getItem("fontSizeLevel") || DEFAULT_LEVEL, 10);

function applyFontSizeLevel() {
    const scale = FONT_SIZE_LEVELS[fontSizeLevel];
    $("html").css("--font-size-scale", scale + "");
}

function setFontSizeLevel(level) {
    fontSizeLevel = Math.max(0, Math.min(FONT_SIZE_LEVELS.length - 1, level));
    localStorage.setItem("fontSizeLevel", fontSizeLevel);
    applyFontSizeLevel();
}

$(".increaseFontSizeBtn").on("click", function () {
    setFontSizeLevel(fontSizeLevel + 1);
});

$(".decreaseFontSizeBtn").on("click", function () {
    setFontSizeLevel(fontSizeLevel - 1);
});

$(".resetFontSize").on("click", function () {
    setFontSizeLevel(DEFAULT_LEVEL);
});





$(document).on("click", "#toggleContrastBtn", function () {

    const $html = $("html");
    const isContrast = $html.toggleClass("contrast").hasClass("contrast");
    localStorage.setItem("contrastMode", isContrast ? "on" : "off");

    // If contrast mode is enabled, disable dark mode
    if (isContrast) {
        $html.removeClass("dark");
        localStorage.setItem("theme", "light");
    }
});

// On page load, restore contrast mode (but check for conflicts)
if (localStorage.getItem("contrastMode") === "on") {
    $("html").addClass("contrast").removeClass("dark");
    localStorage.setItem("theme", "light");
}



























const speakBtn = document.getElementById("speakBtn");
const readIcon = document.getElementById("readIcon");
if (speakBtn && readIcon) {
    speakBtn.addEventListener("click", () => {
        speakText("من فضلك حدد النص الذي تريد قراءته");
    });

    document.addEventListener("mouseup", (e) => {
        const selection = window.getSelection();
        const selectedText = selection.toString().trim();

        if (selectedText.length > 0) {
            const range = selection.getRangeAt(0);
            const rect = range.getBoundingClientRect();

            readIcon.style.top = `${rect.top + window.scrollY - 50}px`;
            readIcon.style.left = `${rect.left + window.scrollX}px`;
            readIcon.style.display = "block";

            readIcon.onclick = () => {
                speakText(selectedText);
                readIcon.style.display = "none";
                selection.removeAllRanges(); // Optional: Remove selection after reading
            };
        } else {
            readIcon.style.display = "none";
        }
    });
}

function speakText(text) {
    const msg = new SpeechSynthesisUtterance(text);
    msg.lang = "ar-SA";
    window.speechSynthesis.cancel(); // Stop any current speech
    window.speechSynthesis.speak(msg);
}




function speakAnyText(text) {
    const msg = new SpeechSynthesisUtterance(text);
    msg.lang = "ar-SA";
    window.speechSynthesis.cancel(); // Stop any current speech
    window.speechSynthesis.speak(msg);
}
























$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 600) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    });

    $('#toTop').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 150);
        return false;
    });
});










$(document).on('click', '.icon-copy-2', function () {
    var text = $(this).closest('.contact-card').find('.text-to-copy').html().trim();

    navigator.clipboard.writeText(text).then(function () {
        const $msg = $('<p>content copied</p>').css({
            position: 'fixed',
            top: '20px',
            left: '50%',
            transform: 'translateX(-50%)',
            background: '#222',
            color: '#fff',
            padding: '8px 16px',
            borderRadius: '4px',
            zIndex: 9999,
            margin: 0
        });
        $('body').append($msg);
        setTimeout(function () {
            $msg.fadeOut(400, function () {
                $(this).remove();
            });
        }, 3000);
    });

});


















$(document).ready(function () {


});





$(document).ready(function () {
    if (window.innerWidth > breakpointXl) {
        $('.footer .accordion-button').each(function () {
            $(this).attr("data-toggle", "none");
        });
    }
});