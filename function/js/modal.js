$(document).ready(function() {
    // Open Modal
    $("#Show_create_report_modal").click(function() {
        $("#create_report_modal").fadeIn();
    });

    // Close Modal
    $("#Hide_create_report_modal").click(function() {
        $("#create_report_modal").fadeOut();
    });

    // Close Modal when clicking outside the modal content
    $("#create_report_modal").click(function(event) {
        if ($(event.target).is("#create_report_modal")) {
            $("#create_report_modal").fadeOut();
        }
    });
});