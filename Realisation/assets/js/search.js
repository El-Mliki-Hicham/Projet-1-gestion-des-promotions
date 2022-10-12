$(document).ready(function () {
    $('#search').keyup(function () {
      var input = $(this).val();
      // alert(input);

      if (input != ' ') {
        $.ajax({
          url: "Data_Acess/search.php",
          method: "POST",
          data: {
            input: input
          },
          success: function (data) {
            $('#searchData').html(data);
          }
        });

      }

    });
  });