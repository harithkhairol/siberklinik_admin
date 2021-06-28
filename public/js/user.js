// $(".open").on("click", function() {
//   $(".popup-overlay, .popup-content").addClass("active");
// });

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".delete-modal").on("click", function() {

    let email = $(this).data('email');
    
    $("#modal").removeClass("hidden");
    $("#modal-headline").text("Delete "+email+"?");
    $("#modal-content").text("Are you sure you want to delete "+email+"?");
    $('#modal-button').val(email);

});

$("#modal-button").on("click", function() {

    let email = $('#modal-button').val();

    $('#modal-action').attr("action", '/user/'+email+'/delete');
    
});


$(".close-modal").on("click", function() {
  $("#modal").addClass("hidden");
});
