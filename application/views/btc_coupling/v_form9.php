<!DOCTYPE html>
<html>

<head>
    <title>PAGE 9</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('app/form/page9'); ?>


            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">STAND OF </h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="stand_of" value="inch" <?= (get_cookie('stand_of') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="stand_of" value="mm" <?= (get_cookie('stand_of') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('stand_of'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number15" value="<?php echo (get_cookie('gage_number15')) !== null ? get_cookie('gage_number15') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number15'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance12" value="<?php echo (get_cookie('min_tolerance12')) !== null ? get_cookie('min_tolerance12') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance12'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance10" value="<?php echo (get_cookie('max_tolerance10')) !== null ? get_cookie('max_tolerance10') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance10'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results28" value="<?php echo (get_cookie('results28')) !== null ? get_cookie('results28') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results28'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results29" value="Accept" <?= (get_cookie('results29') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results29" value="Reject" <?= (get_cookie('results29') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results29'); ?>

            <nav class="navbar navbar-light bg-info ">
            <h4 class="navbar mb-0 h5 text-white py-1">SEAL RING GROOVE A </h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="seal_a" value="inch" <?= (get_cookie('seal_a') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="seal_a" value="mm" <?= (get_cookie('seal_a') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('seal_a'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number16" value="<?php echo (get_cookie('gage_number16')) !== null ? get_cookie('gage_number16') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number16'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance13" value="<?php echo (get_cookie('min_tolerance13')) !== null ? get_cookie('min_tolerance13') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance13'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance11" value="<?php echo (get_cookie('max_tolerance11')) !== null ? get_cookie('max_tolerance11') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance11'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results30" value="<?php echo (get_cookie('results30')) !== null ? get_cookie('results30') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results30'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results31" value="Accept" <?= (get_cookie('results31') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results31" value="Reject" <?= (get_cookie('results31') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results31'); ?>

            <nav class="navbar navbar-light bg-info ">
            <h4 class="navbar mb-0 h5 text-white py-1">SEAL RING GROOVE B </h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="seal_b" value="inch" <?= (get_cookie('seal_b') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="seal_b" value="mm" <?= (get_cookie('seal_b') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('seal_b'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number17" value="<?php echo (get_cookie('gage_number17')) !== null ? get_cookie('gage_number17') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number17'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance14" value="<?php echo (get_cookie('min_tolerance14')) !== null ? get_cookie('min_tolerance14') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance14'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance12" value="<?php echo (get_cookie('max_tolerance12')) !== null ? get_cookie('max_tolerance12') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance12'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results32" value="<?php echo (get_cookie('results32')) !== null ? get_cookie('results32') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results32'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results33" value="Accept" <?= (get_cookie('results33') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results33" value="Reject" <?= (get_cookie('results33') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results33'); ?>

            <nav class="navbar navbar-light bg-info ">
            <h4 class="navbar mb-0 h5 text-white py-1">SEAL RING GROOVE C </h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">UNIT</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="seal_c" value="inch" <?= (get_cookie('seal_c') == 'inch') ? "checked" : null  ?>> &nbsp; &nbsp; inch</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="seal_c" value="mm" <?= (get_cookie('seal_c') == 'mm') ? "checked" : null  ?>> &nbsp; &nbsp; mm</label>
                </div>
            </div>
            <?php echo form_error('seal_c'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number18" value="<?php echo (get_cookie('gage_number18')) !== null ? get_cookie('gage_number18') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('gage_number18'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MIN.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="min_tolerance15" value="<?php echo (get_cookie('min_tolerance15')) !== null ? get_cookie('min_tolerance15') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('min_tolerance15'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">MAX.TOLERANCE</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="max_tolerance13" value="<?php echo (get_cookie('max_tolerance13')) !== null ? get_cookie('max_tolerance13') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('max_tolerance13'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> RESULTS </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="results28" value="<?php echo (get_cookie('results28')) !== null ? get_cookie('results28') : null; ?>" placeholder="ex.0.001" style="margin-bottom:15px">
                </div>
            </div>
            <?php echo form_error('results28'); ?>


            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="results29" value="Accept" <?= (get_cookie('results29') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="results29" value="Reject" <?= (get_cookie('results29') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>

            <?php echo form_error('results29'); ?>



            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">SUMMARY</h4>
            </nav>

            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">PRODUCT STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="product_status" value="Accept" <?= (get_cookie('product_status') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-2 mb-1" class="radio-inline">
                        <input type="radio" name="product_status" value="Reject" <?= (get_cookie('product_status') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                </div>
            </div>
            <?php echo form_error('product_status'); ?>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label"> REMARK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="remark" value="<?php echo (get_cookie('remark')) !== null ? get_cookie('remark') : null; ?>" placeholder="" style="margin-bottom:15px">
                </div>
            </div>


            <a class="btn btn-default" href="<?php echo prefix_url;?>app/form/page8" role="button">Previous</a> &nbsp;

            <input class="btn btn-success" type="submit" value="Submit"> &nbsp;



            </form>

        </div>
</body>

</html>