status = ["Scheduled","Active","Completed","Cancelled"]

status_dropdown = document.getElementsByName("status");

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})