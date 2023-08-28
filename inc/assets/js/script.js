$(document).ready(function () {
    // Add click event handler to .notif-row elements
    $('.notif-row').on('click', function () {
        // Find the associated .notif-content element within the same parent
        var content = $(this).siblings('.notif-content');
        
        // Toggle the visibility of the associated .notif-content element
        content.slideToggle();
    });
});