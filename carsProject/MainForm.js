$(document).on("click", "#carbutton", function () {
  if ($("#nameCar").val() != "") {
    var Carform = $("#Carform").serialize();
    $.ajax({
      method: "POST",
      url: "search.php",
      data: Carform,
      success: function (data) {
        $data1 = jQuery.parseJSON(data); //decode from jason to array .

        $image = $data1[0].image;
        $nameCar = $data1[0].nameCar;

        debugger;

        document.getElementById("myImage").src = $image;
      },
    });
  } else {
    alert("Please input field to car");
  }
});

$(document).on("click", "#carbuttonsql", function () {
  if ($("#nameCarToSql").val() != "" && $("#urlImage").val() != "") {
    var Carform = $("#Carform").serialize();

    $.ajax({
      method: "POST",
      url: "save.php",
      data: Carform,
      success: function (data) {
        debugger;
        alert(data);
        // $data1 = jQuery.parseJSON(data); //decode from jason to array .
      },
    });
  } else {
    alert("Please input field to car");
  }
});

$(document).on("click", "#carbuttonsqldelete", function () {
  if ($("#nameCarToSql").val() != "") {
    var Carform = $("#Carform").serialize();

    $.ajax({
      method: "POST",
      url: "delete.php",
      data: Carform,
      success: function (data) {
        debugger;
        alert(data);
        // $data1 = jQuery.parseJSON(data); //decode from jason to array .
      },
    });
  } else {
    alert("Please input field to car");
  }
});
