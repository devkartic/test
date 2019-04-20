<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Easy Drag and Drop HTML Table Rows With jQuery</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/starter-template/starter-template.css" rel="stylesheet">
</head>

<body>

<main role="main" class="container">

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Row</th>
            <th>Name</th>
            <th>ID Number</th>
            <th>Location</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>01</td>
            <td>Rahim Hawkins</td>
            <td>1640060874099</td>
            <td>Bursa</td>
            <td>May 29, 2017</td>
        </tr>
        <tr>
            <td>02</td>
            <td>Carter James</td>
            <td>1672062705399</td>
            <td>Geer</td>
            <td>Mar 30, 2019</td>
        </tr>
        <tr>
            <td>03</td>
            <td>Merritt Fernandez</td>
            <td>1669120981299</td>
            <td>Gooik</td>
            <td>Jun 3, 2017</td>
        </tr>
        <tr>
            <td>04</td>
            <td>Ross Robbins</td>
            <td>1640092139299</td>
            <td>Lint</td>
            <td>Mar 22, 2018</td>
        </tr>
        <tr>
            <td>05</td>
            <td>Allistair Warren</td>
            <td>1690102625999</td>
            <td>Bicester</td>
            <td>Dec 22, 2017</td>
        </tr>
        <tr>
            <td>06</td>
            <td>Yoshio Finch</td>
            <td>1643051322099</td>
            <td>Baulers</td>
            <td>Sep 15, 2018</td>
        </tr>
        </tbody>
    </table>

</main><!-- /.container -->

<!-- Bootstrap & Core Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<script>
    $('tbody').sortable();
</script>

</body>
</html>
