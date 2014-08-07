$(document).on('submit', '.ajaxform', function(e) {
     $.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: $(this).serialize(),
        success: function(html) {
        alert('ok');
        }
    });
    e.preventDefault();
});