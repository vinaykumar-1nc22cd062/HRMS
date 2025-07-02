<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Self-Appraisal Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Self-Appraisal Form</a></li>
        <li class="active">Update Form</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <?php echo validation_errors('<div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>', '</div>
          </div>'); ?>

        <?php if($this->session->flashdata('success')): ?>
          <div class="col-md-12">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Success!</h4>
                  <?php echo $this->session->flashdata('success'); ?>
            </div>
          </div>
        <?php elseif($this->session->flashdata('error')):?>
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i> Failed!</h4>
                  <?php echo $this->session->flashdata('error'); ?>
            </div>
          </div>
        <?php endif;?>

        <!-- column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">update form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open('Leave/insert'); ?>
              <div class="box-body">
               
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="txtname" class="form-control" placeholder="name">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" name="txtdesignation" class="form-control" placeholder="designation">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Date of Joining</label>
                    <input type="date" name="txtdateofjoining" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">gross salary</label>
                    <input type="text" name="txtsalary" class="form-control" placeholder="gross salary">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Acadamic Qualification</label>
                    <input type="text" name="txtqualification" class="form-control" placeholder="qualification">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">responsibilities in dept</label>
                    <input type="text" name="txtmembership" class="form-control" placeholder="responsibilities">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">workshops/trainings attended</label>
                    <input type="text" name="txtresearchgrants" class="form-control" placeholder="workshops attended">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">other achievements</label>
                    <input type="text" name="txtpatentfiled" class="form-control" placeholder="patents filed">
                  </div>
                </div>

                                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->