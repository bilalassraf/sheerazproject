$(document).ready(function() {
var table = $('#example').DataTable({
lengthChange: false,
buttons: ['copy', 'excel', 'pdf', 'colvis']
});

table.buttons().container()
.appendTo('#example_wrapper .col-md-6:eq(0)');

// $('.users-list').select2({
// placeholder: 'Select an User'
// });
});
