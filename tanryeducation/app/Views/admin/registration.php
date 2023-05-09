<?= $this->include('admin/template/header'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-0">
        <h1 class="h3 mb-0 text-gray-800">Registration Data</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-0">
            <div class="card-body">

                <!-- Table -->
                <div class="card shadow mb-0">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>E-mail</th>
                                    <th>Phone Number/WA</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>Teacher</td>
                                    <td>Chrome 71.0.3578.98</td>
                                    <td>1 minute ago</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Student</td>
                                    <td>Chrome 71.0.3578.98</td>
                                    <td>10 minutes ago</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Parent</td>
                                    <td>Chrome 71.0.3578.98</td>
                                    <td>1 hour ago</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Student</td>
                                    <td>Chrome 71.0.3578.98</td>
                                    <td>1 day ago</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Teacher</td>
                                    <td>Chrome 71.0.3578.98</td>
                                    <td>3 days ago</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->


<?= $this->include('admin/template/footer'); ?>