<?php $this->load->view('element/head');?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Pelanggan Index
                <small>List Pelanggan</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="<?php echo site_url('pelanggan/create');?>">Input Pelanggan</a></li>
                        <li role="presentation" class="active"><a href="<?php echo site_url('pelanggan');?>">List Pelanggan</a></li>
                    </ul>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Table Pelanggan</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="<?php echo site_url('pelanggan?search=true');?>" method="GET">
                                <input type="hidden" class="form-control" name="search" value="true"/>
                                <div class="box-body pad">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="id">Code Pelanggan</label>
                                            <input type="text" class="form-control" name="id" value="<?php echo !empty($_GET['id']) ? $_GET['id'] : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="customer_name">Nama Pelanggan</label>
                                            <input type="text" class="form-control" name="customer_name" value="<?php echo !empty($_GET['customer_name']) ? $_GET['customer_name'] : '';?>"/>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="submit">&nbsp</label>
                                            <input type="submit" value="Submit" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="submit">&nbsp</label>
                                            <a href="<?php echo site_url('pelanggan/export_csv');?>" class="form-control btn btn-default"><i class="fa fa-file-excel-o"></i> Export Excel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Code ID</th>
                                    <th>Pelanggan Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if(isset($pelanggans) && is_array($pelanggans)){ ?>
                                    <?php foreach($pelanggans as $pelanggan){?>
                                        <tr>
                                            <td><?php echo $pelanggan->id;?></td>
                                            <td><?php echo $pelanggan->customer_name;?></td>
                                            <td><?php echo $pelanggan->customer_phone;?></td>
                                            <td><?php echo $pelanggan->customer_address;?></td>
                                            <td>
                                                <a href="<?php echo site_url('pelanggan/edit').'/'.$pelanggan->id;?>" class="btn btn-xs btn-primary">Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete this pelanggan?');" href="<?php echo site_url('pelanggan/delete').'/'.$pelanggan->id;?>" class="btn btn-xs btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Code ID</th>
                                    <th>Pelanggan Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $this->load->view('element/footer');?>