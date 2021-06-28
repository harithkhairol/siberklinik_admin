$(document).ready(function() { 

    var d = new Date();
    var n = d.getHours();
    
    function refreshAt(hours, minutes, seconds) {

        var now = new Date();
        var then = new Date();

        if(now.getHours() > hours || (now.getHours() == hours && now.getMinutes() > minutes) || now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) 
        {
            then.setDate(now.getDate() + 1);
        }
        
        then.setHours(hours);
        then.setMinutes(minutes);
        then.setSeconds(seconds);

        var timeout = (then.getTime() - now.getTime());
        
        setTimeout(function() { window.location.reload(true); }, timeout);

    }  

    refreshAt(n+1,0,0);  
       

});

//removes the "active" class to .popup and .popup-content when the "Close" button is clicked 
$(".delete-modal").on("click", function() {

    let id = $(this).data('id');
    let title = $(this).data('title');
    
    $("#modal").removeClass("hidden");
    $("#modal-headline").text("Delete appointment "+title+"?");
    $("#modal-content").text("Are you sure you want to delete appointment "+title+"?");
    $('#modal-button').val(id);

});

$("#modal-button").on("click", function() {

    let id = $('#modal-button').val();

    $('#modal-action').attr("action", url+'appointment/'+id+'/delete');
    
});


$(".close-modal").on("click", function() {
  $("#modal").addClass("hidden");
});