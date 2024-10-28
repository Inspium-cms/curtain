
$('.testimonial-carousel').owlCarousel({
    loop: true,
    responsiveClass: true,
    dots: true,
    nav: false,
    autoplay: true,
    margin: 20,
    autoplayTimeout: 1000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1,
        },
        1000: {
            items: 3,
        }
    }
})
$('.service-carousel').owlCarousel({
    loop: true,
    responsiveClass: true,
    dots: true,
    nav: false,
    autoplay: true,
    margin: 20,
    autoplayTimeout: 1000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1,
        },
        1000: {
            items: 2,
        }
    }
})

document.addEventListener("DOMContentLoaded", function () {
    // Select all custom accordion buttons
    const customAccordionButtons = document.querySelectorAll('.accordion-button.custom-accordion-button');

    // Add event listeners for the collapse and expand events
    customAccordionButtons.forEach((button) => {
        const accordionCollapse = button.closest('.accordion-item').querySelector('.accordion-collapse');

        // Add listener when the accordion is shown (expanded)
        accordionCollapse.addEventListener('shown.bs.collapse', function () {
            const accordionItem = button.closest('.accordion-item.custom-accordion-item');
            // Add 'active-header' to the clicked button and 'active' to the parent accordion item
            button.classList.add('active-header');
            accordionItem.classList.add('active');
        });

        // Add listener when the accordion is hidden (collapsed)
        accordionCollapse.addEventListener('hidden.bs.collapse', function () {
            const accordionItem = button.closest('.accordion-item.custom-accordion-item');
            // Remove 'active-header' from the button and 'active' from the parent accordion item
            button.classList.remove('active-header');
            accordionItem.classList.remove('active');
        });
    });
});


// changing the accordion image dinamycially

document.addEventListener("DOMContentLoaded", function () {
    const accordionImage = document.querySelector('.accordionSideImage');
    
    // Define images corresponding to each accordion item
    const accordionImages = {
        1: 'images/shopSideImg2.png', // Image for Accordion Item #1
        2: 'images/shopSideImg.png', // Image for Accordion Item #2
        3: 'images/shopSideImg2.png', // Image for Accordion Item #3
        4: 'images/shopSideImg.png', // Image for Accordion Item #4
    };

    // Listen for when a new accordion item is opened
    document.querySelectorAll('.accordion-collapse').forEach((accordionItem, index) => {
        accordionItem.addEventListener('show.bs.collapse', function () {
            const accordionNumber = index + 1; // Get the accordion number (1-based)
            if (accordionImages[accordionNumber]) {
                accordionImage.src = accordionImages[accordionNumber]; // Change image based on accordion number
            }
        });
    });
});

