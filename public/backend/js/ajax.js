$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

})
.on('change', '#pref', function(e){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    e.preventDefault();
    var pref_id = [];
    $("#pref :selected").each(function() {
        pref_id.push($(this).val());
    });
    var url = $('#ajax_route').val();
    var type = "POST";
    $.ajax({
        type: type,
        url: url,
        data: {
            pref_id:pref_id
        },
        dataType: 'json',
        success: function (data) {
          $('#area').html(data).prop('disabled', false);
        },
        error: function (data) {
            alert('error')
        }
    });
})
.on('click', '.sidebar-heading', function (e) {
    e.preventDefault();
    $(this).toggleClass('active');
    $(this).next('ul').slideToggle();
})
.on('click','.delete_img', function (e) {
    e.preventDefault();
    const this_img = $(this)
    img_id = $(this).attr('data-id');
    resolve_url = $('input[name=img_ajax]').val();
    $.ajax({
        type: "post",
        url: resolve_url,
        data: {
            img_id : img_id
        },
        dataType: 'json',
        success: function (data) {
            if(data == true){
                this_img.closest('.img_action').remove()
            }
        }
    });
})