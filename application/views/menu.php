<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT</h1>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-6"></div>
            <div class="col-6">
                <form class="form-inline" action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" placeholder="Search">
                        <button type="submit" class="btn btn-primary ml-2">Search</button>
                        <button class="btn btn-primary ml-2">History</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4 mt-2 p-2">
                <a class="btn btn-success col-md-12 py-3 text-white" href="<?php echo prefix_url."app/pin_end"; ?>">BTC PIN-END</a>
            </div>
            <div class="col-4 mt-2 p-2">
                <a class="btn btn-success col-md-12 py-3 text-white" href="<?php echo prefix_url."app/btc_coupling"; ?>">BTC COUPLING</a>
            </div>
            <div class="col-4 mt-2 p-2">
                <a class="btn btn-success col-md-12 py-3 text-white" href="<?php echo prefix_url."app/form"; ?>">BTC PIN-END</a>
            </div>
            <div class="col-4 mt-2 p-2">
                <a class="btn btn-success col-md-12 py-3 text-white" href="<?php echo prefix_url."app/form"; ?>">BTC PIN-END</a>
            </div>
        </div>
    </div>

</body>

</html>