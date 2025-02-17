$(document).ready(function() {




    $('.delete-btn').click(function() {
        var reportId = $(this).data('id');

        $("#reportId").val(reportId);
        
      
        $('#RemoveReportModal').fadeIn();
    });
    

    $('#CloseRemoveReportModal').click(function() {
        $('#RemoveReportModal').fadeOut();
    });











    $('.view-btn').click(function() {
        var message = $(this).data('message');
        var image = $(this).data('image');
        
        $('#report-message').text(message);
        
        if (image) {
            $('#report-image-container').show();  // Changed to show
            $('#report-image').attr('src', '../upload_messages/' + image);
        } else {
            $('#report-image-container').hide();  // Changed to hide
        }
        
        $('#ViewReportModal').show();  // Changed to show
    });
    
    $('#CloseReportModal').click(function() {
        $('#ViewReportModal').hide();  // Changed to hide
    });
    



















    
    $("#frmRemoveReport").submit(function (e) {
        e.preventDefault();

        $('.spinner').show();
        $('#btnRemoveReport').prop('disabled', true);

        var formData = new FormData(this); // Gamitin ang FormData para sa files
        formData.append('requestType', 'RemoveReport'); // Dagdagan ng custom data

        

        $.ajax({
            type: "POST",
            url: "backend/end-points/controller.php",
            data: formData,
            processData: false,  // Huwag i-process ang data (para sa files)
            contentType: false,  // Huwag mag-set ng content type (automatic na hahandle ito)
            success: function (response) {
                console.log(response);
                if (response === "success") {
                    alertify.success('Remove Successful');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $('.spinner').hide();
                    $('#btnRemoveReport').prop('disabled', false);
                    console.log(response);
                    alertify.error('Registration failed, please try again.');
                }
            },
        });
    });
    


    
    
});
