$('#tableusuarios').DataTable();
var tableusuarios;

document.addEventListener('DOMContentLoaded',function(){
    tableusuarios = $('#tableusuarios').DataTable({
       "aProcessing": true,
       "aServerSide": true,
       "language": {
          "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
       },
 
       "ajax":{
          "url":"./modelos/table_usuarios.php",
          "dataSrc":"",
       },
       "columns":[
          {"data":"id"},
          {"data":"name"},
          {"data":"usuario"},
          {"data":"correo"},
          {"data":"estado"},
          {"data":"acciones"},
       ],
       "responsive": true,
       "bDestroy":true,
       "iDisplayLength":10,
       "order": [[0,"asc"]]
     });
 })

function openModal(){
    $('#modaladdUser').modal('show');
}