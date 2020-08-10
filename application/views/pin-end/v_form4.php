<!DOCTYPE html>
<html>

<head>
  <title>PAGE 4</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-light bg-success justify-content-center">
    <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - PIN END</h1>
  </nav>
  <div class="container mt-5">
    <div class="card p-4">
      <?php echo validation_errors(); ?>
      <?php echo form_open('app/pin_end/page4'); ?>


      <nav class="navbar navbar-light bg-info ">
        <h4 class="navbar mb-0 h5 text-white py-1">STAMP LENGTH (A1)</h4>

      </nav>
      <br>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">UNIT</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="length_A1" value="inch" <?= (get_cookie('length_A1') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-2 mb-1" class="radio-inline">
            <input type="radio" name="length_A1" value="mm" <?= (get_cookie('length_A1') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
        </div>
      </div>
      <?php echo form_error('length_A1'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gage_number5" value="<?php echo (get_cookie('gage_number5')) !== null ? get_cookie('gage_number5') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('gage_number5'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="min_tolerance3" value="<?php echo (get_cookie('min_tolerance3')) !== null ? get_cookie('min_tolerance3') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('min_tolerance3'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="results5" value="<?php echo (get_cookie('results5')) !== null ? get_cookie('results5') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('results5'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">STATUS</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="results6" value="Accept" <?= (get_cookie('results6') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-1 mb-5" class="radio-inline">
            <input type="radio" name="results6" value="Reject" <?= (get_cookie('results6') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
        </div>
      </div>

      <?php echo form_error('results6'); ?>


      <nav class="navbar navbar-light bg-info ">
        <h4 class="navbar mb-0 h5 text-white py-1">RUN OUT</h4>
      </nav>
      <br>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">UNIT</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="run_out" value="inch" <?= (get_cookie('run_out') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-2 mb-1" class="radio-inline">
            <input type="radio" name="run_out" value="mm" <?= (get_cookie('run_out') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
        </div>
      </div>
      <?php echo form_error('run_out'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gage_number6" value="<?php echo (get_cookie('gage_number6')) !== null ? get_cookie('gage_number6') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('gage_number6'); ?>


      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="min_tolerance4" value="<?php echo (get_cookie('min_tolerance4')) !== null ? get_cookie('min_tolerance4') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('min_tolerance4'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="max_tolerance1" value="<?php echo (get_cookie('max_tolerance1')) !== null ? get_cookie('max_tolerance1') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('max_tolerance1'); ?>


      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="results7" value="<?php echo (get_cookie('results7')) !== null ? get_cookie('results7') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('results7'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">STATUS</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="results8" value="Accept" <?= (get_cookie('results8') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-1 mb-5" class="radio-inline">
            <input type="radio" name="results8" value="Reject" <?= (get_cookie('results8') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
        </div>
      </div>


      <?php echo form_error('results8'); ?>



      <br>

      <a class="btn btn-default" href="<?php echo prefix_url;?>app/pin_end/page3" role="button">Previous</a> &nbsp;
      <button class="btn btn-primary" href="<?php echo prefix_url;?>app/pin_end/page5"> Next</button> &nbsp;

    </div>
    </form>

  </div>


</body>

</html>