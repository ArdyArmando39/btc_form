<!DOCTYPE html>
<html>

<head>
  <title>PAGE 3</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-light bg-success justify-content-center">
    <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
  </nav>
  <div class="container mt-5">
    <div class="card p-4">

      <?php echo validation_errors(); ?>
      <?php echo form_open('app/form/page3'); ?>

      <nav class="navbar navbar-light bg-info ">
        <h4 class="navbar mb-0 h5 text-white py-1">COUPLING LENGTH (NL)</h4>
      </nav>
      <br>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">UNIT</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="coupling_nl" value="inch" <?= (get_cookie('coupling_nl') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-2 mb-1" class="radio-inline">
            <input type="radio" name="coupling_nl" value="mm" <?= (get_cookie('coupling_nl') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
        </div>
      </div>
      <?php echo form_error('coupling_nl'); ?>
      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gage_number3" value="<?php echo (get_cookie('gage_number3')) !== null ? get_cookie('gage_number3') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('gage_number3'); ?>


      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="min_tolerance1" value="<?php echo (get_cookie('min_tolerance1')) !== null ? get_cookie('min_tolerance1') : null; ?>"  placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('min_tolerance1'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="results1" value="<?php echo (get_cookie('results1')) !== null ? get_cookie('results1') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('results1'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">STATUS</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="results2" value="Accept" <?= (get_cookie('results2') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-1 mb-5" class="radio-inline">
            <input type="radio" name="results2" value="Reject" <?= (get_cookie('results2') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
        </div>
      </div>

      <?php echo form_error('results2'); ?>

      <nav class="navbar navbar-light bg-info ">
        <h4 class="navbar mb-0 h5 text-white py-1">DIAMETER RECESS (Q)</h4>

      </nav>
      <br>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">UNIT</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="diameter_q" value="inch" <?= (get_cookie('diameter_q') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-2 mb-1" class="radio-inline">
            <input type="radio" name="diameter_q" value="mm" <?= (get_cookie('diameter_q') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
        </div>
      </div>
      <?php echo form_error('diameter_q'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="gage_number4" value="<?php echo (get_cookie('gage_number4')) !== null ? get_cookie('gage_number4') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('gage_number4'); ?>


      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="min_tolerance2" value="<?php echo (get_cookie('min_tolerance2')) !== null ? get_cookie('min_tolerance2') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('min_tolerance2'); ?>

      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="results3" value="<?php echo (get_cookie('results3')) !== null ? get_cookie('results3') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
        </div>
      </div>
      <?php echo form_error('results2'); ?>
      <div class="form-group row">
        <label type="text" class="col-sm-2 col-form-label">STATUS</label>
        <div class="col-sm-10">
          <label class="radio-inline">
            <input type="radio" name="results4" value="Accept" <?= (get_cookie('results4') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
          <label class="mt-1 mb-5" class="radio-inline">
            <input type="radio" name="results4" value="Reject" <?= (get_cookie('results4') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
        </div>
      </div>

      <?php echo form_error('results4'); ?>


      <br>
      <a class="btn btn-default" href="<?php echo prefix_url;?>app/form/page2" role="button">Previous</a> &nbsp;
      <button class="btn btn-primary" href="<?php echo prefix_url;?>app/form/page4"> Next</button> &nbsp;


      </form>
    </div>
  </div>
  </div>
</body>

</html>