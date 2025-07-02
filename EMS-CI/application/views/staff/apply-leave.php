  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Leave Management
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Leave Management</a></li>
        <li class="active">Apply Leave</li>
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
              <h3 class="box-title">Apply Leave</h3>
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
                    <label for="exampleInputPassword1">Membership/Fellowship</label>
                    <input type="text" name="txtmembership" class="form-control" placeholder="membership/fellowship">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Research Grants/Funded Projects</label>
                    <input type="text" name="txtresearchgrants" class="form-control" placeholder="research grants">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>Proof Attachment</label>
                    <input type="file" name="filephoto" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">patents filed/published</label>
                    <input type="text" name="txtpatentfiled" class="form-control" placeholder="patents filed">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Any Steps taken for Resource Generation through consultancy </label>
                    <input type="text" name="txtresourcegeneration" class="form-control" placeholder="resource generation">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">conference papers published during the year under review</label>
                    <input type="text" name="txtpaperpublished" class="form-control" placeholder="conference papers">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>proof attachment2</label>
                    <input type="file" name="filephoto" class="form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">additional cources done</label>
                    <input type="text" name="txtpaperpublished" class="form-control" placeholder="additional cources">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label>proof attachment3</label>
                    <input type="file" name="filephoto" class="form-control">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">proposed performance objectives during previous year</label>
                    <input type="text" name="txtproposedperformance" class="form-control" placeholder="proposed performance">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Self-Assessment on achievements on the objective at 17 above</label>
                    <input type="text" name="txtpaperpublished" class="form-control" placeholder="self-assessment">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">action plans for next 12 months</label>
                    <input type="text" name="txtpaperpublished" class="form-control" placeholder="action plans">
                  </div>
                </div>
                

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">details of the subject:(semester,subject,classes taken,sylabus covered,pass%)</label>
                    <textarea name="txtdescription" class="form-control" placeholder="subject details"></textarea>
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