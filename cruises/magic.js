$.ajax({type:'POST', 
url: 'booking.php', 
data:$('#overlay_form').serialize(), 
success: function(response) {
    $('#ContactForm').find('.form_result').html(response);
}});