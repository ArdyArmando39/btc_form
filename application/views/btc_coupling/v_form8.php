<!DOCTYPE html>
<html>

<head>
    <title>PAGE 8</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('app/form/page8'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD DIAMETER</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_diameter" value="inch" <?= (get_cookie('theread_diameter') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_diameter" value="mm" <?= (get_cookie('theread_diameter') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('theread_diameter'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number13" value="<?php echo (get_cookie('gage_number13')) !== null ? get_cookie('gage_number13') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number13'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance11" value="<?php echo (get_cookie('min_tolerance11')) !== null ? get_cookie('min_tolerance11') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance11'); ?>

            <?php echo form_error('optradio'); ?>
            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance8" value="<?php echo (get_cookie('max_tolerance8')) !== null ? get_cookie('max_tolerance8') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance8'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_results" value="<?php echo (get_cookie('min_results')) !== null ? get_cookie('min_results') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_results'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> MAX RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_results" value="<?php echo (get_cookie('max_results')) !== null ? get_cookie('max_results') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_results'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> AVERAGE </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="average1" value="<?php echo (get_cookie('average1')) !== null ? get_cookie('average1') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('average1'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results25" value="Accept" <?= (get_cookie('results25') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results25" value="Reject" <?= (get_cookie('results25') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results25'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD OVALITY</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="theread_ovality" value="inch" <?= (get_cookie('theread_ovality') == 'inch') ? "checked" : null  ?> > &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="theread_ovality" value="inch" <?= (get_cookie('theread_ovality') == 'mm') ? "checked" : null  ?> > &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('optradio'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number14" value="<?php echo (get_cookie('gage_number14')) !== null ? get_cookie('gage_number14') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance9" value="<?php echo (get_cookie('max_tolerance9')) !== null ? get_cookie('max_tolerance9') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance9'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">RESULTS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results26" value="<?php echo (get_cookie('results26')) !== null ? get_cookie('results26') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results26'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results27" value="Accept" <?= (get_cookie('results27') == 'Accept') ? "checked" : null  ?> > &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results27" value="Reject" <?= (get_cookie('results27') == 'Reject') ? "checked" : null  ?> > &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('optradio'); ?>


            <a class="btn btn-default" href="<?php echo prefix_url;?>app/form/page7" role="button">Previous</a> &nbsp;
            <button class="btn btn-primary" href="<?php echo prefix_url;?>app/form/page9"> Next</button> &nbsp;


            </form>
        </div>
    </div>
</body>

</html>