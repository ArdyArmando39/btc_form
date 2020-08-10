<!DOCTYPE html>
<html>

<head>
    <title>PAGE 1</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
    </nav>
    <div class="container mt-5 mb-5">
        <div class="card p-4">
        <h2 class="mt-1 mb-5"></h2>
            <?php echo validation_errors(); ?>
            <?php echo form_open('app/form/page1'); ?>
          
            <nav class="navbar navbar-light bg-info ">
        <h4 class="navbar mb-0 h5 text-white py-1">PRODUCT INFORMATION</h4>

      </nav>
      <br>

      
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">REPORT NUMBER </label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" name="report_number" value="EF.QR.12" style="margin-bottom:15px">
                </div>
            </div>
            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">EVALUATION ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  name="evaluation_id" value="<?php echo (get_cookie('eval')) !== null ? get_cookie('eval') : null; ?>"  placeholder="diisi dari code yg di generete CLARA Q" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('number'); ?>
            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">NIK-NAME</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"g name="nik_name" value="<?php echo (get_cookie('nik')) !== null ? get_cookie('nik') : null; ?>" placeholder="diambil dari HRMS" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('number'); ?>
            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">DATE</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl" placeholder="" value="<?php echo (get_cookie('tgl')) !== null ? get_cookie('tgl') : null; ?>" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('number'); ?>

			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">CONNECTIONS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="connections" value="<?php echo (get_cookie('connections')) !== null ? get_cookie('connections') : null; ?>"  placeholder="Diambil dari masterlist" style="margin-bottom:15px">
                </div>
            </div>

			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">OD SIZE (Inch)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="od_size" placeholder="ex 26.00(Inch)" value="<?php echo (get_cookie('od')) !== null ? get_cookie('od') : null; ?>" style="margin-bottom:15px">
                </div>
			</div>
			
			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MASSES (lb/ft)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="masses" placeholder="ex. 26.00" value="<?php echo (get_cookie('masses')) !== null ? get_cookie('masses') : null; ?>" style="margin-bottom:15px">
                </div>
			</div>
			
			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GRADE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="grade" placeholder="ex. L-8019CR" value="<?php echo (get_cookie('grade')) !== null ? get_cookie('grade') : null; ?>" style="margin-bottom:15px">
                </div>
            </div>
			
			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">PIPE/CT NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pipe" placeholder="ex.CT.27" value="<?php echo (get_cookie('pipe')) !== null ? get_cookie('pipe') : null; ?>" style="margin-bottom:15px">
                </div>
            </div>
			
			<div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">WO NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="wo_number" placeholder="ex.WEF12345" value="<?php echo (get_cookie('wo_number')) !== null ? get_cookie('wo_number') : null; ?>" style="margin-bottom:15px">
                </div>
            </div>

            <button href="<?php echo prefix_url;?>app/form/page2" class="btn  btn-primary">Next</button>
        </div>
    </div>
    </form>
</body>

</html>