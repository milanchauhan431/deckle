<?php $this->load->view('includes/header'); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default">
                <div class="card-header">
                    <h2 class="card-title">City List</h2>

                    <div class="card-tools">
                        <button type="button" class="btn btn-outline-primary">
                            <i class="fas fa-plus"></i> Add City
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table id="citiesTable" class="table table-bordered">
                            <thead class="thead-success">
                                <tr>
                                    <th style="width:10%;">Action</th>
                                    <th style="width:5%;">#</th>
                                    <th>City Name</th>
                                    <th>State Name</th>
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
reportTable("citiesTable");
</script>