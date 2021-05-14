<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body class="">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">LARAVEL DATATABLES DATE RANGE</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="start_date" placeholder="Start Date" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-info text-white" id="basic-addon1"><i
                                        class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" id="end_date" placeholder="End Date" readonly>
                        </div>
                    </div>
                </div>
                <div>
                    <button id="filter" class="btn btn-outline-info btn-sm">Filter</button>
                    <button id="reset" class="btn btn-outline-warning btn-sm">Reset</button>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless display nowrap" id="records" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Standard</th>
                                        <th>Percentage</th>
                                        <th>Result</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <!-- Datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Datatables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js">
    </script>
    <!-- Momentjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>
        $(function() {
            $("#start_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
            $("#end_date").datepicker({
                "dateFormat": "yy-mm-dd"
            });
        });

        // Fetch records
        function fetch(start_date, end_date) {
            $.ajax({
                url: "{{ route('students/records') }}",
                type: "GEt",
                data: {
                    start_date: start_date,
                    end_date: end_date
                },
                dataType: "json",
                success: function(data) {
                    // Datatables
                    var i = 1;
                    $('#records').DataTable({
                        "data": data.students,
                        // buttons
                        "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
                            "<'row'<'col-sm-12'tr>>" +
                            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                        "buttons": [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        // responsive
                        "responsive": true,
                        "columns": [{
                                "data": "id",
                                "render": function(data, type, row, meta) {
                                    return i++;
                                }
                            },
                            {
                                "data": "name"
                            },
                            {
                                "data": "standard",
                                "render": function(data, type, row, meta) {
                                    return `${row.standard}th Standard`;
                                }
                            },
                            {
                                "data": "percentage",
                                "render": function(data, type, row, meta) {
                                    return `${row.percentage}%`;
                                }
                            },
                            {
                                "data": "result"
                            },
                            {
                                "data": "created_at",
                                "render": function(data, type, row, meta) {
                                    return moment(row.created_at).format('DD-MM-YYYY');
                                }
                            }
                        ]
                    });
                }
            });
        }

        fetch();

        // Filter
        $(document).on("click", "#filter", function(e) {
            e.preventDefault();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            if (start_date == "" || end_date == "") {
                alert("Both date required");
            } else {
                $('#records').DataTable().destroy();
                fetch(start_date, end_date);
            }
        });

        // Reset
        $(document).on("click", "#reset", function(e) {
            e.preventDefault();
            $("#start_date").val(''); // empty value
            $("#end_date").val('');
            $('#records').DataTable().destroy();
            fetch();
        });

    </script>
</body>

</html>
