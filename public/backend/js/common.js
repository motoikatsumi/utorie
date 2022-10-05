$(document).ready(function(){
  $('.navbar-nav .nav-item').each(function () {
    if ($(this).hasClass('active')) {
      $(this).closest('.nav-itemlist').show();
      $(this).closest('.nav-itemlist').prev(':not(.nav-itemlist)').addClass('active');
    }
  }) 

  $('.panel-actions a:not(.addnew), .panel-actions button[type="submit"]').click(function(e){
    e.preventDefault();
    var dataaction = $(this).data('action');
    var btnname = $(this).attr('name');
    var itemChecked = [];
    $('.selectable-item').each(function(){
      if($(this).is(':checked')){
        itemChecked.push($(this).attr('name'));
      }
    });

    $(this).closest('form').find('input[name="id"]').val(itemChecked.toString());

    if(itemChecked.length == 0) {
      alert('You need to select at least item for this action'); //you need to select item before process this button;
      return false;
    }

    if(btnname.indexOf('apply_role') > -1 && itemChecked.length > 5) {
      alert('You can\'t change role for more than 5 users at the same time'); //cannot edit more than 20 items together;
      return false;
    }

    if(!confirm("Are you sure with this action?")){ //make sure to change content;
        return false
    }

    if(itemChecked.length > 0) {
      $(this).closest('form').submit();
    }

  });

  //alert show and closel
  setTimeout(() => {
    $('.alert').fadeOut();
  }, 3000);
  $('.selectable-all').click(function(){
    $('.selectable-item').prop('checked', this.checked);
  });

  $('.tablelist tbody tr').click(function(){
    var isCheck = $(this).find('.selectable-item').is(':checked');
    $(this).find('.selectable-item').prop('checked', !isCheck);
  });
  $('.tablelist tbody tr .selectable-item').click(function(){
    var isCheck = $(this).find('.selectable-item').is(':checked');
    $(this).find('.selectable-item').prop('checked', !isCheck);
  });


  $('input.save_edit').click(function(e){
    if(!confirm("このコンテンツで送信してもよろしいですか？")){ //are you sure to edit with content above?
      return false
    }
    $(this).closest('form').submit();
  });

  $('.btn-outline-danger[name="delete"]').click(function(e){
    if(!confirm("これらのアイテムを削除してもよろしいですか？")){ //are you sure to remove selected items?
      return false
    }    
  });


  $('.btn-cloneitem').click(function(e){
    e.preventDefault();
    var clonetbody = $(this).closest('form').find('table tbody').first().html();
    $(this).closest('form').find('table').append('<tbody>'+clonetbody+'</tbody>');
  });


  $('body').on('change','.selectChangeBrand', function(){
    var brand_id = $(this).val();
    console.log(brand_id);
    var selectchange = $(this);
    $.post('./ajaxListCat.php', {brand_id},function() {
    }).done(function(data){
      selectchange.closest('tbody').find('.catshow').html(data);
    }).fail(function(){

    });
  });
})
 