<!DOCTYPE html>
<html>

<head>
  <title>PAGE 5</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-light bg-success justify-content-center">
    <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - PIN END</h1>
  </nav>
  <div class="container mt-5">
    <div class="card p-4">

      <?php echo validation_errors(); ?>
      <?php echo form_open('app/pin_end/page5'); ?>

      
        <nav class="navbar navbar-light bg-info ">
          <h4 class="navbar mb-0 h5 text-white py-1">THEREAD DEPTH</h4>
        </nav>

        <br>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">UNIT</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="theread_depth" value="inch" <?= (get_cookie('theread_depth') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <label class="mt-2 mb-1" class="radio-inline">
              <input type="radio" name="theread_depth" value="mm" <?= (get_cookie('theread_depth') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
          </div>
        </div>
        <?php echo form_error('optradio'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="gage_number7" value="<?php echo (get_cookie('gage_number7')) !== null ? get_cookie('gage_number7') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('gage_number'); ?>


        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="min_tolerance5" value="<?php echo (get_cookie('min_tolerance5')) !== null ? get_cookie('min_tolerance5') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('min_tolerance'); ?>

        <?php echo form_error('optradio'); ?>
        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="max_tolerance2" value="<?php echo (get_cookie('max_tolerance2')) !== null ? get_cookie('max_tolerance2') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('max_tolerance'); ?>


        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">RESULTS 1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="results9" value="<?php echo (get_cookie('results9')) !== null ? get_cookie('results9') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('results1'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">RESULTS 2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="results10" value="<?php echo (get_cookie('results10')) !== null ? get_cookie('results10') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('results2'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">STATUS</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="results11" value="Accept" <?= (get_cookie('results11') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <label class="mt-1 mb-5" class="radio-inline">
              <input type="radio" name="results11" value="Reject" <?= (get_cookie('results11') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
          </div>
        </div>
      
      <?php echo form_error('optradio'); ?>

      
        <nav class="navbar navbar-light bg-info ">
          <h4 class="navbar mb-0 h5 text-white py-1">THEREAD FORM</h4>
        </nav>

        <br>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">UNIT</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="theread_form" value="inch" <?= (get_cookie('theread_form') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <label class="mt-2 mb-1" class="radio-inline">
              <input type="radio" name="theread_form" value="mm" <?= (get_cookie('theread_form') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
          </div>
        </div>
        <?php echo form_error('optradio'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="gage_number8" value="<?php echo (get_cookie('gage_number8')) !== null ? get_cookie('gage_number8') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('gage_number'); ?>


        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="min_tolerance6" value="<?php echo (get_cookie('min_tolerance6')) !== null ? get_cookie('min_tolerance6') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('min_tolerance'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="max_tolerance3" value="<?php echo (get_cookie('max_tolerance3')) !== null ? get_cookie('max_tolerance3') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('min_tolerance'); ?>


        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">RESULTS1</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="results12" value="<?php echo (get_cookie('results12')) !== null ? get_cookie('results12') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('results1'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">RESULTS2</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="results13" value="<?php echo (get_cookie('results13')) !== null ? get_cookie('results13') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
          </div>
        </div>
        <?php echo form_error('results2'); ?>

        <div class="form-group row">
          <label type="text" class="col-sm-2 col-form-label">STATUS</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="results14" value="Accept" <?= (get_cookie('results14') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <label class="mt-1 mb-5" class="radio-inline">
              <input type="radio" name="results14" value="Reject" <?= (get_cookie('results14') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
          </div>
        </div>
      
      <?php echo form_error('optradio'); ?>

      <a class="btn btn-default" href="<?php echo prefix_url;?>app/pin_end/page4" role="button">Previous</a> &nbsp;
  <button class="btn btn-primary" href="<?php echo prefix_url;?>app/pin_end/page6"> Next</button> &nbsp;
  

      </form>
    </div>
  </div>
</body>

</html>