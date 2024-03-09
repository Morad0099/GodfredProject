<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMS</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    {{-- <link rel="icon" type="image/x-icon" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="/images/favicon-16x16.png"> --}}
    <link rel="manifest" href="/site.webmanifest">


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-9/yo9wSc6fapZfN1caEV3ZuYG2CjkOrK/Ep5Cn6CmCQZlqJKQcBLbJciykFx4uIb/uG4tfcIjzZW1DOmW7JMI5A=="
        crossorigin="anonymous" />

    <!-- Typicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.10/typicons.min.css"
        integrity="sha512-3m4Wv8l7Qt9p7qBRohZlPm5bTsOLpBGRcaUxwL0c8FX9HKehaaGmq2MDW1SdolC1l6DTFJi86uyX63mZYYQVpA=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- endinject -->
    <!-- Plugin js for this page-->
    {{-- <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js/dist/Chart.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>



    <!-- Leaflet CSS -->
    {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> --}}

    <!-- Add your additional stylesheets, scripts, or other head content here -->
    <style>
        body {
            padding-top: 56px;
            /* Adjust the top padding to match the height of your navbar */
        }

        @media (min-width: 768px) and (max-width: 991px) {
            #sidebar {
                width: 55px;
                /* Adjust the width for smaller screens */
            }

            #content {
                margin-left: 55px;
                /* Adjust the margin for smaller screens */
            }

            #sidebar.collapsed {
                margin-left: 0;
                /* Adjust the margin for smaller screens */
            }
        }

        #sidebar {
            position: fixed;
            width: 250px;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #fff;
            /* Set white background */
            color: #000;
            /* Set black text color */
            padding-top: 150px;
            /* Adjust the top padding to match the height of your navbar */
            transition: margin-left 0.3s;
            z-index: 1;
            /* Ensure the sidebar is above other content */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            /* Optional: Add a box shadow */
        }

        #sidebar ul li a:hover {
            background-color: #27595a;
            /* Hover color */
        }

        #sidebar.active {
            width: 55px;
        }

        #sidebar.card {
            /* Additional styling for the card */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add other card styling as needed */
        }

        #sidebar ul li.active a {
            background-color: #27595a;
            /* Set the background color for the active tab */
            color: #fff !important;
            /* Set text color for the active tab */
        }

        #content {
            margin-left: 250px;
        }

        #sidebar.collapsed {
            margin-left: -250px;
        }

        .nav-link {
            color: #000 !important;
            /* Set black text color for links */
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #27595a;
        }

        .modal {
            z-index: 1050;
            /* Adjust the value as needed */
        }

        #excelFile {
            display: none;
            /* Hide the actual file input */
        }

        .custom-excel-btn {
            display: inline-block;
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            background-image: none;
            border: 1px solid #27595a;
            border-radius: 4px;
            color: #fff;
            background-color: #27595a;
            border-color: #27595a;
        }

        .nav-tabs {
            border-bottom: 2px solid #dee2e6;
            margin-bottom: 20px;
        }

        .nav-tabs .nav-item {
            margin-bottom: -1px;
        }

        .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .nav-link.active {
            color: #007bff;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }

        .nav-tabs .nav-link:hover {
            border-color: #dee2e6 #dee2e6 #ddd;
        }

        .tab-content {
            border: 1px solid #dee2e6;
            border-top: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background-color: #f8f9fa;
        }

        .custom-dropdown {
            position: relative;
        }

        .dropdown-list {
            position: absolute;
            top: 100%;
            left: 0;
            width: calc(100% - 2px);
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ccc;
            border-top: none;
            display: none;
            z-index: 1000;
            background-color: #fff;
        }

        .dropdown-item {
            padding: 8px 12px;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #f2f2f2;
        }

        .btn-group {
            display: flex;
            align-items: center;
            /* Align buttons vertically */
        }

        .btn-group .btn {
            margin-right: 5px;
            /* Adjust the spacing between buttons */
        }
    </style>

</head>

<body>

    <!-- Include Bootstrap JS and Popper.js from CDN -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Leaflet JS -->
    {{-- <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> --}}

    <script>
        // JavaScript to handle sidebar collapse/expand
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('collapsed');
            });
            // logic to set the current tab as active based on the URL
            var currentPath = window.location.pathname;
            var activeTab = $('#sidebar ul li a[href="' + currentPath + '"]').parent();

            // Remove existing "active" class from all tabs
            $('#sidebar ul li').removeClass('active');

            // Add "active" class to the current tab
            activeTab.addClass('active');
        });
    </script>
</body>

</html>
