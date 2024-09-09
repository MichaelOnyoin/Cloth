<!DOCTYPE html>
<html>

<head>

    <title>How to Load data using jQuery AJAX in Select2 – CodeIgniter 4</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body>

    <div class="container" style="margin-top: 40px;">
        <div class="panel panel-primary">
            <div class="panel-heading">CodeIgniter 4 Load Data using jQuery AJAX in Select2</div>
            <div class="panel-body">
                <p>
                    <label>Select Name in database</label>
                </p>
                <select name="dd_name" id="dd_name" class="form-group">
                    <option value='0'>-- Select name --</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script type='text/javascript'>
        $(document).ready(function() {

            // Initialize select2
            $("#dd_name").select2({
                ajax: {
                    url: "<?= site_url('names') ?>",
                    type: "post",
                    delay: 100,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            query: params.term, // search term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response.data
                        };
                    },
                    cache: true
                }
            });

        });
    </script>

</body>

</html>