$(document).ready(function(){

});

function initTable(tableOptions,formData = {}){
	var tableOptions = tableOptions || {pageLength: 25,'stateSave':false};
	var dataSet = formData;
	ssDatatable($('.ssTable'),tableOptions,dataSet);
}