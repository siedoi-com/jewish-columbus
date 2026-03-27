const postSliders = document.querySelectorAll('.posts');
if (postSliders.length > 0) {
    postSliders.forEach(slider => {
        new Splide(slider.querySelector('.splide'), {
            perPage: 3,         
            gap: '6rem',      
            pagination: false,   
            arrows: false,       
            breakpoints: {
                960: {
                    perPage: 2, 
                },
                640: {
                    perPage: 1, 
                }
            }
        }).mount(); 
    });
}