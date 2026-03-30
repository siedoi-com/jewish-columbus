const postSliders = document.querySelectorAll('.posts');
if (postSliders.length > 0) {
    postSliders.forEach(slider => {
        new Splide(slider.querySelector('.splide'), {
            perPage: 3,         
            gap: '6rem',      
            pagination: false,   
            arrows: false,       
            padding: {
                right: 0
            },
            breakpoints: {
                960: {
                    perPage: 2, 
                    padding: {
                        right: '20%'
                    }
                },
                640: {
                    perPage: 1, 
                }
            }
        }).mount(); 
    });
}