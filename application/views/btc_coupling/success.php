<!DOCTYPE html>
<html>

<head>
    <title>SUCCESS</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
</head>

<body style="background-color:gainsboro">

    <nav class="navbar navbar-light bg-success justify-content-center">
        <h1 class="navbar mb-0 h4 text-white py-3 justify-content-centers">BUTTRESS THREAD INSPECTION REPORT - COUPLING</h1>
    </nav>
    <div class="container mt-5">
        <div class="card p-4" style="margin-top: 200px; background-color:mediumseagreen; border-color:green">
            <div class="text-center text-white">
                <h3>INPUT SUCCESS</h3>
            </div>
            <div class="card-content text-justify h5 mt-4 text-white">
                Terima kasih Telah Mengisi Form Pengecekan
            </div>
            <div class="row container mt-5">

                <a href="<?php echo prefix_url;?>app/form/history" class="btn btn-secondary mr-3"> Back to History</a>
                <a class="btn btn-danger" target="blank" href=" <?php echo base_url('app/form/print/' . get_cookie('eval')) ?>"> <i class="fa fa-print"></i> Print</a> &nbsp;
                <!-- Button trigger modal -->
                        
            </div>

    
        </div>

    </div>
</body>

</html>