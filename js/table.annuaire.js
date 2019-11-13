
/*
 * Editor client script for DB table annuaire
 * Created by http://editor.datatables.net/generator
 */

(function($){
	
var loc = window.location.pathname;
var dir = loc.substring(0, loc.lastIndexOf('/'));
window.alert(dir);

$(document).ready(function() {
	var editor = new $.fn.dataTable.Editor( {
		ajax: '../php/table.annuaire.php',
		table: '#annuaire',
		fields: [
			{
				"label": "first_name:",
				"name": "first_name"
			},
			{
				"label": "last_name:",
				"name": "last_name"
			},
			{
				"label": "email:",
				"name": "email"
			},
			{
				"label": "phone:",
				"name": "phone"
			},
			{
				"label": "address:",
				"name": "address"
			},
			{
				"label": "postal:",
				"name": "postal"
			},
			{
				"label": "city:",
				"name": "city"
			}
		]
	} );

	var table = $('#annuaire').DataTable( {
		dom: 'Bfrtip',
		ajax: '../php/table.annuaire.php',
		columns: [
			{
				"data": "first_name"
			},
			{
				"data": "last_name"
			},
			{
				"data": "email"
			},
			{
				"data": "phone"
			},
			{
				"data": "address"
			},
			{
				"data": "postal"
			},
			{
				"data": "city"
			}
		],
		select: true,
		lengthChange: false,
		buttons: [
			{ extend: 'create', editor: editor },
			{ extend: 'edit',   editor: editor },
			{ extend: 'remove', editor: editor }
		]
	} );
} );

}(jQuery));

