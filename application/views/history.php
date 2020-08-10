<!DOCTYPE html>
<html>

<head>
    <title>HISTORY</title>
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

                <a href="<?php echo prefix_url;?>app/form/page1" class="btn btn-secondary">Create a New Form</a> <br>

                <!-- Button trigger modal -->
               <button type="button" class="btn btn-primary " style="margin-top: 20px" data-toggle="modal" data-target=".bd-example-modal-lg">Cetak Riwayat</button>

            </div>

            <!-- Large modal -->

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">History</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Report Title</th>
                                        <th scope="col">Report Number</th>
                                        <th scope="col">Evaluation</th>
                                        <th scope="col">Name - NIK </th>
                                        <th scope="col">Date </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $n = 1;
                                    foreach ($data as $baris) {
                                        echo "<tr>";
                                        echo "<td>" . $n . "</td>";
                                        echo "<td>" . $baris->report_title . "</td>";
                                        echo "<td>" . $baris->report_number . "</td>";
                                        echo "<td>" . $baris->evaluation . "</td>";
                                        echo "<td>" . $baris->name_nik . "</td>";
                                        echo "<td>" . $baris->date . "</td>";
                                        echo "<td><a class='btn btn-danger' target='blank' href='" . base_url('app/form/print/' . $baris->evaluation) . "'>print</a></td>";
                                        echo "</tr>";
                                        $n++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</body>

</html>
