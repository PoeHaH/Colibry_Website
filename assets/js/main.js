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

    // Customer logo slider
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
            speed: .25,
          },
    } ).mount(  window.splide.Extensions );

} )();