function mostra_dialog(div, data, modalId=''){
					
    if (data != ''){
        
        jQuery(div).html(data);
        jQuery(div).hide();
    }
    
    var modal = new Custombox.modal({
      content: {
        effect: 'fadein',
        target: div,
        id: modalId
      }
    });

    // Open
    modal.open();
}

jQuery('.select2').select2();


function notificationDialog(title, msg){

  jQuery('#notificationDialogTitle').html(title);
  jQuery('#notificationDialogBody').html(msg);

  jQuery("#notificationDialog").modal("show");
}

jQuery('body').on('click', '.notificationDialogBtn', function (){
  jQuery('#notificationDialogTitle').html('');
  jQuery('#notificationDialogBody').html('');

  jQuery("#notificationDialog").modal("hide");
})