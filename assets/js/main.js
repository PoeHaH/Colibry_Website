(function () {

    // Mobile menu
    var mobToggle = document.querySelector('.nav-trigger-mobile');
    var backDrop = document.querySelector('.nav-backdrop');
    var mobileLinks = document.querySelectorAll('.nav-mobile a');
    var navMobile = document.querySelector('.nav-mobile');

    if (mobToggle) {
        mobToggle.addEventListener('click', function () {
            navMobile.style.display = 'block';
            navMobile.classList.add('active');
            backDrop.style.display = 'block';
        });
    }

    if (backDrop) backDrop.addEventListener('click', function () {
        navMobile.classList.remove('active');
        backDrop.style.display = 'none';
    });

    if (mobileLinks) {
        mobileLinks.forEach(function (el) {
            el.addEventListener('click', function (e) {
                navMobile.classList.remove('active');
                backDrop.style.display = 'none';
            });
        });
    }

    // Anchor links smooth scrolling
    var links = document.querySelectorAll('nav a[href^="#"], a.smooth, .btn.smooth');
    if (links) {

        links.forEach(function (link) {
            link.addEventListener('click', function (event) {

                var href = this.getAttribute('href');

                var targetElement = document.querySelector(href);
                if (targetElement) {

                    e.preventDefault();

                    var offsetTop = targetElement.offsetTop;

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Customer logo slider
    var splide = document.querySelector('.splide');
    if (splide) {
        new Splide('.splide', {
            type: 'loop',
            perPage: 10,
            breakpoints: {
                1200: { perPage: 10 },
                1024: { perPage: 8 },
                800: { perPage: 6 },
                640: { perPage: 4 },
                359: { perPage: 2 },
            },
            arrows: false,
            pagination: false,
            drag: false,
            pauseOnHover: true,
            autoScroll: {
                speed: .75,
            },
        }).mount(window.splide.Extensions);
    }

})();

//Glossary Toggler
document.addEventListener("DOMContentLoaded", function () {
    var accordions = document.querySelectorAll(".glossary-toggle");

    accordions.forEach(function (accordion) {
        accordion.addEventListener("click", function () {
            var expanded = this.getAttribute("aria-expanded") === "true";
            // Close all accordions
            accordions.forEach(function (a) {
                a.setAttribute("aria-expanded", "false");
                a.nextElementSibling.style.maxHeight = null;
            });
            // Open the clicked accordion if it was not already expanded
            if (!expanded) {
                this.setAttribute("aria-expanded", "true");
                this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + "px";
            }
        });
    });
});

//dynamic text
document.addEventListener("DOMContentLoaded", function () {
    const dynamicWordElement = document.getElementById("dynamic-word");
    const dynamicWords = ["moment", "kanaal", "persoon", "boodschap"];
    let index = 0;

    setInterval(() => {
        dynamicWordElement.textContent = dynamicWords[index];
        dynamicWordElement.classList.remove("fall-animation");
        void dynamicWordElement.offsetWidth;
        dynamicWordElement.classList.add("fall-animation");
        index = (index + 1) % dynamicWords.length;
    }, 2000);
});


//Colibry Logo Animation
function toggleSVGs() {
    const svg1 = document.getElementById('svg1');
    const svg2 = document.getElementById('svg2');

    // Get the visibility of the first SVG
    const svg1Visible = svg1.style.display !== 'none';

    // Toggle the visibility of the SVGs
    if (svg1Visible) {
        svg1.style.display = 'none';
        svg2.style.display = 'block';
    } else {
        svg1.style.display = 'block';
        svg2.style.display = 'none';
    }
}

// Call the toggleSVGs function at regular intervals (e.g., every 3 seconds)
setInterval(toggleSVGs, 3000); // Adjust the interval as needed