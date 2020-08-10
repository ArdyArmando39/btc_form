<!DOCTYPE html>
<html>

<head>
    <title>PAGE 6</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - PIN END</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('app/pin_end/page6'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THREAD TAPER (PERFECT THEREAD)</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_perfect" value="inch" <?= (get_cookie('theread_perfect') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_perfect" value="mm" <?= (get_cookie('theread_perfect') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('theread_perfect'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number9" value="<?php echo (get_cookie('gage_number9')) !== null ? get_cookie('gage_number9') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number11'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance7" value="<?php echo (get_cookie('min_tolerance7')) !== null ? get_cookie('min_tolerance7') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance7'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance4" value="<?php echo (get_cookie('max_tolerance4')) !== null ? get_cookie('max_tolerance4') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance4'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS 1</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results15" value="<?php echo (get_cookie('results15')) !== null ? get_cookie('results15') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results15'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS 2</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results16" value="<?php echo (get_cookie('results16')) !== null ? get_cookie('results16') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results16'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results17" value="Accept" <?= (get_cookie('results17') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results17" value="Reject" <?= (get_cookie('results17') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results17'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD TAPER (IMPERFECT THEREAD)</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_imperfect" value="inch" <?= (get_cookie('theread_imperfect') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_imperfect" value="mm" <?= (get_cookie('theread_imperfect') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('theread_imperfect'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number10" value="<?php echo (get_cookie('gage_number10')) !== null ? get_cookie('gage_number10') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number10'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance8" value="<?php echo (get_cookie('min_tolerance8')) !== null ? get_cookie('min_tolerance8') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance8'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance5" value="<?php echo (get_cookie('max_tolerance5')) !== null ? get_cookie('max_tolerance5') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance5'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results18" value="<?php echo (get_cookie('results18')) !== null ? get_cookie('results18') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results18'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results19" value="Accept" <?= (get_cookie('results19') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results19" value="Reject" <?= (get_cookie('results19') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results19'); ?>

            <a class="btn btn-default" href="<?php echo prefix_url;?>app/pin_end/page5" role="button">Previous</a> &nbsp;
            <button class="btn btn-primary" href="<?php echo prefix_url;?>app/pin_end/page7"> Next</button> &nbsp;


            </form>
        </div>
    </div>
</body>

</html>