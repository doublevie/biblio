
function reserver(x){
$('.modal-body').html('تحميل  <i class="fa fa-spin fa-spinner"></i>');
// console.log('searching');
  $('#modal').modal('show');

$('.modal-body').html('<p>تأكيد حجز الكتاب</p> <a href="#" onclick="reservConfirmed('+x+')" class="btn btn-success btn-block" role="button">حجز الكتاب</a> ');
// $('.modal-body').html(' ');


}


function reservConfirmed(x){
  $('.modal-body').html('تحميل  <i class="fa fa-spin fa-spinner"></i>');
  $('.modal-body').load('inc/reserver.php?ouv='+x);
}
