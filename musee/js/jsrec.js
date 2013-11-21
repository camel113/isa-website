$(document).ready(function(){
    $('#up').click(function(){
        $(this).replaceWith('<img src="'+localStorage["image1"]+'"/>')
    })
    $('body').html('<img src="'+localStorage["image1"]+'"/>');
})

