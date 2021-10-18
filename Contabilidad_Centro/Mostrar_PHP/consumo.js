var tabla;
function init() {
	$("#consumo_form").on("submit", function(e) {
        guardaryeditar(e);
    });
}
function guardaryeditar(e){
	e.preventDefault();
	var formData=new FormData($("#consumo_form")[0]);
	$.ajax({
			url: "../controller/consumo.php?op=guardaryeditar",
			type : "POST",
			data: formData,
			contentType: false,
			processData: false,
			success: function(datos){
				console.log(datos);	
                $('#consumo_form')[0].reset();
				$('#modalNuevo').modal('hide');
				$('#consumo_data').DataTable().ajax.reload();

                swal({
					title: "HelpDesk!",
					text: "Completado.",
					type: "success",
					confirmButtonClass: "btn-success"
				});
				
				/*Swal.fire('Guardado!','Registro Guardado Correctamente.','success');*/
			}
	});
}

function editar(ID){
	$('#mdlTitulo').html('Editar Consumo');
	$.post("../controller/consumo.php?op=mostrar",{ID : ID},function(data){
		data=JSON.parse(data);
        $('#ID').val(data.ID);
		$('#NumStand').val(data.NumStand);
		$('#DueStand').val(data.DueStand);
		$('#NoPagoLuz').val(data.NoPagoLuz);
		$('#ConEner').val(data.ConEner);
		console.log(data);
	});
	$('#modalNuevo').modal('show');
}
function eliminar(ID){
	swal({
		title: "Registro de Consumo",
		text: "Esta seguro que desea eliminar el registro?",
		type: "error",
		showCancelButton: true,
		confirmButtonClass: "btn-danger",
		confirmButtonText: "Si",
		cancelButtonText: "No",
		closeOnConfirm: false
	},	
	function(isConfirm) {
		if (isConfirm) {
			
			$.post("../controller/consumo.php?op=eliminar",{ID : ID},function(data){
			});
			$('#consumo_data').DataTable().ajax.reload();
            swal({
				title: "Consumo de servicios!",
				text: "Registro eiminado.",
				type: "success",
				confirmButtonClass: "btn-success"
	
		});
    } 
});
}
$(document).on("click","#btnNuevo",function () {
	$('#mdlTitulo').html('Nuevo Registro');
	$('#consumo_form')[0].reset();
  	$('#modalNuevo').modal('show');

});
$(document).ready(function () {
   
    console.log("enviado");
    tabla=$('#consumo_data').dataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [		          
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdf'
                ],

        "ajax":

           {
                    url: '../controller/consumo.php?op=listar',
                    type : "post",
                    dataType : "json",	
                    error: function(e){
                        console.log(e.responseText);	
                    }
                },

         "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,//Por cada 10 registros hace una paginación
        "autoWidth": false,//Ordenar (columna,orden)

        "language": {
 
                "sProcessing":     "Procesando...",
             
                "sLengthMenu":     "Mostrar _MENU_ registros",
             
                "sZeroRecords":    "No se encontraron resultados",
             
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
             
                "sInfo":           "Mostrando un total de _TOTAL_ registros",
             
                "sInfoEmpty":      "Mostrando un total de 0 registros",
             
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
             
                "sInfoPostFix":    "",
             
                "sSearch":         "Buscar:",
             
                "sUrl":            "",
             
                "sInfoThousands":  ",",
             
                "sLoadingRecords": "Cargando...",
             
                "oPaginate": {
             
                    "sFirst":    "Primero",
             
                    "sLast":     "Último",
             
                    "sNext":     "Siguiente",
             
                    "sPrevious": "Anterior"
             
                },
             
                "oAria": {
             
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
             
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
             
                }

               }//cerrando language




        }).DataTable();
       
});
init();
