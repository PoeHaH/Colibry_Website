( function() {

    // Mobile menu
    var mobToggle = document.querySelector('.nav-trigger-mobile');
    var backDrop = document.querySelector('.nav-backdrop');
    var mobileLinks = document.querySelectorAll('.nav-mobile a');
    var navMobile = document.querySelector('.nav-mobile');

    if( mobToggle ) {
        mobToggle.addEventListener('click', function() {
            navMobile.style.display = 'block';
            navMobile.classList.add('active');
            backDrop.style.display = 'block';
        });
    }

    if(backDrop) backDrop.addEventListener('click', function() {
        navMobile.classList.remove('active');
        backDrop.style.display = 'none';
    });

    if( mobileLinks ) {
            mobileLinks.forEach(function(el){
            el.addEventListener('click', function(e){
                navMobile.classList.remove('active');
                backDrop.style.display = 'none';
            });
        });
    }

    // Anchor links smooth scrolling
    var links = document.querySelectorAll('nav a[href^="#"], a.smooth, .btn.smooth');
    if(links){

        links.forEach(function(link) {
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
    if( splide ) {
        new Splide( '.splide', {
            type   : 'loop',
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
        } ).mount(  window.splide.Extensions );
    }

} )();