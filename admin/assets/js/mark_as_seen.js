$(document).ready(function() {
   
        $.ajax({
            url: 'backend/end-points/controller.php',  
            type: 'POST',  
            data: {
                requestType: 'mark_all_seen'  // Action parameter to identify the request
            },
            success: function(response) {
                console.log(response);
            },
            error: function() {
                alert('AJAX request failed.');
            }
        });
});