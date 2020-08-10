<!DOCTYPE html>
<html>

<head>
    <title>PAGE 7</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - PIN END</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('app/pin_end/page7'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD LEAD</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_lead" value="inch" <?= (get_cookie('theread_lead') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_lead" value="mm" <?= (get_cookie('theread_lead') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('theread_lead'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number11" value="<?php echo (get_cookie('gage_number11')) !== null ? get_cookie('gage_number11') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number11'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance9" value="<?php echo (get_cookie('min_tolerance9')) !== null ? get_cookie('min_tolerance9') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance9'); ?>

           
            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance6" value="<?php echo (get_cookie('max_tolerance6')) !== null ? get_cookie('max_tolerance6') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance6'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results20" value="<?php echo (get_cookie('results20')) !== null ? get_cookie('results20') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results20'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results21" value="<?php echo (get_cookie('results21')) !== null ? get_cookie('results21') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results21'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results22" value="Accept" <?= (get_cookie('results22') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results22" value="Reject" <?= (get_cookie('results22') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results22'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD CUMMULATIVE LEAD</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_cummulative" value="inch" <?= (get_cookie('theread_cummulative') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_cummulative" value="mm" <?= (get_cookie('theread_cummulative') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('theread_cummulative'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number12" value="<?php echo (get_cookie('gage_number12')) !== null ? get_cookie('gage_number12') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number12'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance10" value="<?php echo (get_cookie('min_tolerance10')) !== null ? get_cookie('min_tolerance10') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance10'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance7" value="<?php echo (get_cookie('max_tolerance7')) !== null ? get_cookie('max_tolerance7') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance7'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results23" value="<?php echo (get_cookie('results23')) !== null ? get_cookie('results23') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results23'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results24" value="Accept" <?= (get_cookie('results24') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results24" value="Reject" <?= (get_cookie('results24') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results24'); ?>

            <a class="btn btn-default" href="<?php echo prefix_url;?>app/pin_end/page6" role="button">Previous</a> &nbsp;
            <button class="btn btn-primary" href="<?php echo prefix_url;?>app/pin_end/page8"> Next</button> &nbsp;


            </form>
        </div>
    </div>
</body>

</html>