<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading Spinner Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS for custom spinner */
        #loading-spinner {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Loading Spinner Example</h1>
        <button id="load-data" class="btn btn-primary">Load Data</button>
        <div id="loading-spinner" class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div id="data-container"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#load-data').click(function () {
                // Show the loading spinner
                $('#loading-spinner').show();

                // Simulate an AJAX request (replace this with your actual AJAX request)
                setTimeout(function () {
                    // Hide the loading spinner
                    $('#loading-spinner').hide();

                    // Display the loaded data
                    $('#data-container').html('<p>Data has been loaded successfully.</p>');
                }, 2000); // Simulated 2-second delay
            });
        });
    </script>
</body>
</html>
