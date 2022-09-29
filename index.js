$(document).ready(function () {
  $("#getData").click(function () {
    $.ajax({
      type: "post",
      url: "./include/callMain.php",
      dataType: "json",
      beforeSend: function (data) {
        $("#getData").prepend(
          "<span class='spinner-border' role='status' aria-hidden='true'></span>"
        );
        $('#btn-text').text('loading...');
      },
      success: function (data) {
        let result = JSON.stringify(data);
        result = JSON.parse(result);

        let table =
          '<div class="table-responsive"><table class="table table-hover table-bordered border-secondary align-middle table-striped"><tr><th scope="col">Id</th><th scope="col">Name</th><th scope="col">Price</th></tr></thead><tbody>';
        // for getting dynamic tr
        for (let i = 0; i < result.length; i++) {
          table +=
            '<tr><th scope="row">' +
            result[i].id +
            "</th><td>" +
            result[i].name +
            "</td><td>" +
            result[i].price +
            "</td></tr>";
        }

        table += "</tbody></table></div>";
        $("#add-table").html(table);
      },
      complete: function () {
        $(".spinner-border").remove();
        $('#btn-text').text('Get Data');
      }
    });
  });
});
