<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h2 class="card-title">Country List</h2>

                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-info waves-effect waves-light addNew press-add-btn permission-write" data-button="both" data-modal_id="modal-sm" data-function="addCountry" data-form_id="countryForm" data-form_title="Add Country" data-api_slug="Country/saveCountry">
                            <i class="fas fa-plus"></i> Add Country
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table id="countryTable" class="table table-bordered ssTable ssTable-cf" data-url="countries/getDTRows">
                            <thead class="thead-success">
                                <tr>
                                    <th><i class="fas fa-bolt"></i></th>
                                    <th style="width:5%;">#</th>
                                    <!-- <th>Date</th> -->
                                    <th>Country Name</th>
                                </tr>
                            </thead>
                        </table>
                    </div>                        
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('includes/footer'); ?>
<script>
$(document).ready(function(){
    var tableOptions = {
        pageLength: 25,
        'stateSave':false,
        columns: [
            {
                data: null,
                className: 'noExport text-center no_filter actioncol',
                orderable: false,
                searchable: false,
                render: function (data, type, full, meta) {
                    return actionBtn(data);
                }
            },
            {
                data: null,
                className: 'text-center no_filter',
                orderable: false,
                searchable: false,
                width : "5%",
                render: function (data, type, full, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            //{ data : "date", name : "date", className : 'text-center' },
            { data : "countryName", name : "countryName", className : 'text-left' }
        ],
        /* columnDefs: [ 
            { targets: 2, render: $.fn.dataTable.render.moment('YYYY-MM-DD HH:mm:ss', 'DD-MM-YYYY hh:mm:ss A') }
        ], */
    };

    initTable(tableOptions);
});

function actionBtn(data){
    var editParam = {'postData':{'id' : data.id},'modal_id' : 'modal-md', 'form_id' : 'editCountry', 'title' : 'Update Country'};
    var editBtn = '<a class="btn btn-xs btn-outline-success btn-edit permission-modify" href="javascript:void(0)" title="Edit" onclick="edit('+editParam+');"><i class="ti-pencil-alt"></i></a>';

    var deleteParam = {'postData':{'id' : data.id},'message' : 'Country'};
    var deleteBtn = '<a class="btn btn-xs btn-outline-danger btn-delete permission-remove" href="javascript:void(0)" onclick="trash('+deleteParam+');" title="Remove"><i class="ti-trash"></i></a>';

    return getActionButton(editBtn + ' ' + deleteBtn);
}
</script>