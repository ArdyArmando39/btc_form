<!DOCTYPE html>
<html>

<head>
    <title>PAGE 2</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

</head>

<body>

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4">

            <?php echo validation_errors(); ?>
            <?php echo form_open('app/form/page2'); ?>
            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">VISUAL</h4>
            </nav>
            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">

                    <div class="form-check">
                        <label class="radio-inline">
                            <input type="radio" name="visual" value="Accept" <?= (get_cookie('visual') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <label class="mt-1 mb-5" class="radio-inline">
                            <input type="radio" name="visual" value="Reject" <?= (get_cookie('visual') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>
                    </div>
                </div>
            </div>

            <?php echo form_error('visual'); ?>

            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD PROFILE (COMB)</h4>
            </nav>
            <br>




            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number1" value="<?php echo (get_cookie('gage1')) !== null ? get_cookie('gage1') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="comb" value="Accept" <?= (get_cookie('comb') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" value="Reject" name="comb" <?= (get_cookie('comb') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>

                </div>
            </div>

            <?php echo form_error('gage_number1'); ?>

            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">THEREAD PROFIL (GO NO GO)</h4>

            </nav>
            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">GAGE NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gage_number2" value="<?php echo (get_cookie('gage2')) !== null ? get_cookie('gage2') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="thread_profile" value="Accept" <?= (get_cookie('thread_profile') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" name="thread_profile" value="Reject" <?= (get_cookie('thread_profile') == 'Reject') ? "checked" : null  ?> name="thread_profile"> &nbsp; &nbsp; REJECT</label>

                </div>
            </div>

            <?php echo form_error('gage_number2'); ?>

            <nav class="navbar navbar-light bg-info ">
                <h4 class="navbar mb-0 h5 text-white py-1">CAST</h4>

            </nav>
            <br>

            <div class="form-group row">
                <label type="text" class="col-sm-2 col-form-label">OVERLAY NUMBER</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="overlay_number" value="<?php echo (get_cookie('overlay')) !== null ? get_cookie('overlay') : null; ?>" placeholder="ex.CT27" style="margin-bottom:15px">
                </div>
                <label type="text" class="col-sm-2 col-form-label">STATUS</label>
                <div class="col-sm-10">
                    <label class="radio-inline">
                        <input type="radio" name="optradio" value="Accept" <?= (get_cookie('optradio') == 'Accept') ? "checked" : null  ?>> &nbsp; &nbsp; ACCEPT</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="mt-1 mb-5" class="radio-inline">
                        <input type="radio" value="Reject" name="optradio" <?= (get_cookie('optradio') == 'Reject') ? "checked" : null  ?>> &nbsp; &nbsp; REJECT</label>

                </div>
            </div>

            <?php echo form_error('overlay_number'); ?>
            <br>
            <a class="btn btn-default" href="<?php echo prefix_url;?>app/form/page1" role="button">Previous</a> &nbsp;
            <button class="btn btn-primary" href="<?php echo prefix_url;?>app/form/page3"> Next</button> &nbsp;
            </form>

        </div>
    </div>



</body>

</html>