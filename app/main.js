
function reserver(x){
$('.modal-body').html('تحميل  <i class="fa fa-spin fa-spinner"></i>');
console.log('searching');
  $('#modal').modal('show');
  $('.modal-body').load('inc/reserver.php?ouv='+x);

}
