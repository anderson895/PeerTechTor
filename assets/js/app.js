$(document).ready(function () {



    $("#frmLoginGuidance").submit(function (e) {
        e.preventDefault();
    
        $('.spinner').show();
        $('#btnLoginGuidance').prop('disabled', true);
        
        var formData = $(this).serializeArray(); 
        formData.push({ name: 'requestType', value: 'LoginAdmin' });
        var serializedData = $.param(formData);
    
        // Perform the AJAX request
        $.ajax({
            type: "POST",
            url: "backend/end-points/controller.php",
            data: serializedData,  
            success: function (response) {
    
                var data = JSON.parse(response);
                console.log(response);
    
                if (data.status === "success") {
                    alertify.success('Login Successful');
    
                    // Delay redirect by 2 seconds to allow message display
                    setTimeout(function() {
                        window.location.href = "admin/index.php";
                    }, 2000);  
    
                }else if(data.status === "error"){
    
                  console.log(data)
                  $('.spinner').hide();
                  $('#btnLoginGuidance').prop('disabled', false);
                  alertify.error(data.message);
    
                } else {
                    $('.spinner').hide();
                    $('#btnLoginGuidance').prop('disabled', false);
                    console.error(response); 
                    alertify.error('Registration failed, please try again.');
                }
            },
        });
    });


 
  $("#frmLoginStudent").submit(function (e) {
    e.preventDefault();

    $('.spinner').show();
    $('#btnLoginStudent').prop('disabled', true);
    
    var formData = $(this).serializeArray(); 
    formData.push({ name: 'requestType', value: 'LoginStudent' });
    var serializedData = $.param(formData);

    // Perform the AJAX request
    $.ajax({
        type: "POST",
        url: "backend/end-points/controller.php",
        data: serializedData,  
        success: function (response) {

            var data = JSON.parse(response);

            if (data.status === "success") {
                alertify.success('Login Successful');

                // Delay redirect by 2 seconds to allow message display
                setTimeout(function() {
                    window.location.href = "student/index.php";
                }, 2000);  

            }else if(data.status === "error"){

              console.log(data)
              $('.spinner').hide();
              $('#btnLoginStudent').prop('disabled', false);
              alertify.error(data.message);

            } else {
                $('.spinner').hide();
                $('#btnLoginStudent').prop('disabled', false);
                console.error(response); 
                alertify.error('Registration failed, please try again.');
            }
        },
        error: function () {
            $('.spinner').hide();
            $('#btnLoginStudent').prop('disabled', false);
            alertify.error('An error occurred. Please try again.');
        }
    });
});







 
  $("#FrmRegister").submit(function (e) {
    e.preventDefault();

    $('.spinner').show();
    $('#btnRegister').prop('disabled', true);
    
    var formData = $(this).serializeArray(); 
    formData.push({ name: 'requestType', value: 'Signup' });
    var serializedData = $.param(formData);

    // Perform the AJAX request
    $.ajax({
        type: "POST",
        url: "backend/end-points/controller.php",
        data: serializedData,  
        success: function (response) {

            console.log(response);
            var data = JSON.parse(response);

            if (data.status === "success") {
                alertify.success('Registration Successful');

                // Delay redirect by 2 seconds to allow message display
                setTimeout(function() {
                    window.location.href = "student.php";
                }, 2000);  

            } else if (data.status === "LRN_ALREADY") {
                alertify.error(data.message);

                $('.spinner').hide();
                $('#btnRegister').prop('disabled', false);

            } else {
                $('.spinner').hide();
                $('#btnRegister').prop('disabled', false);
                console.error(response); 
                alertify.error('Registration failed, please try again.');
            }
        },
        error: function () {
            $('.spinner').hide();
            $('#btnRegister').prop('disabled', false);
            alertify.error('An error occurred. Please try again.');
        }
    });
});

  
  
  
  
  });
  
  
  
  
  
  
  
  