$(document).ready(function () {

const getOrdersCount = () => {
    $.ajax({
      url: 'backend/end-points/get_count_report.php', // PHP file where the data is coming from
      type: 'GET',
      dataType: 'json',
      success: function(response) {
        // console.log(response);

          let unseenCount = response.Unseen;
       
          $('#unseenCount').text(unseenCount);

          if (unseenCount > 0) {
            $('#unseenCount').show();
        } else {
            $('#unseenCount').hide();
        }
   
          
          
      },
      error: function(xhr, status, error) {
          console.error("Error fetching order status counts:", error);
      }
  });
};

setInterval(() => {
    getOrdersCount();
  }, 3000);


  getOrdersCount();
});
