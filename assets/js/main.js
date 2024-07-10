
/*owl carousel-start */
$('.owl-carousel').owlCarousel({
    
    rtl: true,
    loop: true,
    margin: 50,
    nav: true,
    navText: [`<div class='nav-button owl-prev'><i class="fa-solid fa-3x fa-arrow-left main-color-1"></i></div>`, `<div class='nav-button owl-prev'><i class="fa-solid fa-3x fa-arrow-right main-color-1"></i></div>`],
    responsive: {
        0: {
            stagePadding: 0,
            items: 1
        },
        600: {
            stagePadding: 170,
            items: 1
        },
        1000: {
            stagePadding: 200,
            items: 1
        }
    }
})


/*owl carousel-end */


/*counterup with jquery-headerContent-start */
$(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 50,
        time: 1000
    });
})
/*counterup with jquery-headerContent-end */

/*wowJs plugin-start */
new WOW({ animateClass: 'animate__animated' }).init();
/*wowJs plugin-end */


/*datetimePicker plugin-start */
$("#filter-date").persianDatepicker({
    formatDate: "YYYY-0M-0D"
});

$('#timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '10',
    maxTime: '6:00pm',
    defaultTime: '',
    startTime: '10:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
/*datetimePicker plugin-end */


