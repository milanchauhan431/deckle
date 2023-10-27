<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h2 class="card-title">Country List</h2>

                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="fas fa-plus"></i> Add Country
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table id="countryTable" class="table table-bordered ssTable" data-url="countries/getDTRows">
                            <thead class="thead-success">
                                <tr>
                                    <th style="width:10%;">Action</th>
                                    <th style="width:5%;">#</th>
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
                className: 'noExport text-center',
                orderable: false,
                width : "10%",
                render: function (data, type, full, meta) {
                    return "Action";
                }
            },
            {
                data: null,
                className: 'text-center',
                orderable: false,
                width : "5%",
                render: function (data, type, full, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { "data": "countryName", "name": "countryName", className : 'text-left' }
        ]
    }

    initTable(tableOptions);
});
//reportTable("countryTable");
</script>