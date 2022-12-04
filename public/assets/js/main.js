document.addEventListener("DOMContentLoaded", function (event) {
  window.onscroll = function () {
    scrollFunction();
  };
  /* SCROLL TO TOP BUTTON */
  const button = document.getElementById("scroll");
  const formHeight = document.getElementById("start").offsetTop;
  const bottom = $(".col__item").last().offset().top;

  console.log(bottom);

  $("#scroll").on("click", function (event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: formHeight,
      },
      800
    );
  });

  function scrollFunction() {
    if (
      document.body.scrollTop > bottom ||
      document.documentElement.scrollTop > bottom
    ) {
      button.className = "scroll scroll_visible";
    } else {
      button.className = "scroll";
    }
  }
});

$(document).ready(function () {
  // $("#compareModal").modal();
  $(".disclosure_link").on("click", function () {
    $(".disclosure_box").show();
  });

  $(".x-btn").on("click", function () {
    $(".disclosure_box").hide();
  });

  $(".close").on("click", function () {
    $(".disclosure_box").hide();
  });

  $(".sp-trig").mouseover(function () {
    console.log("how");
    $(".speech-bubble-ds").show();
  });

  $(".sp-trig").mouseout(function () {
    $(".speech-bubble-ds").hide();
  });

  // $(".compareBtn").on("click", function () {
  //   var vindex = $(this).attr("data-index");
  //   var vtype = $(this).attr("data-type");

  //   $.ajax({
  //     type: "GET",
  //     url: "popupdetail.php",
  //     data: { index: vindex, type: vtype },
  //     dataType: "json",
  //     success: function (d) {
  //        console.log(d);
  //       if (d.valid === false) {
  //         //
  //       } else {
  //         $(".leftcontainer").html(d.content);
  //         $(".cTitle").text(d.title);
  //       }
  //       $("#compareModal").modal("show");
  //     },
  //   });
  // });
  $(".compareBtn").on("click", function (e) {
    e.preventDefault();
    var vid = $(this).attr("data-id");

  $.ajax({
    type: "GET",
    url: "/popupdetail/"+vid,
    success: function (d) {
      
        $("#modelContentBox").html(d);
      $("#compareModal").modal("show");
    }
  });
});
});
