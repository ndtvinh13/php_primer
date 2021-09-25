<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>PHP Primer - <?php echo $title?> </title>
</head>
<body>
    <div class="container">
    <h2>Follow each link to the page example</h2>

    <ul class="nav">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="Index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="array.php">Simple Array and Prinouts</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="forloop.php">Simple For Loop</a></li>
        <li class="nav-item"><a class="nav-link disabled" aria-current="page" href="dowhileloop.php">Simple Do While</a></li>
        <li class="nav-item"><a class="nav-link disabled" aria-current="page" href="whileloop.php">Simple while loop</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="ifstatement.php">Simple If Statement</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="switchstatement.php">Simple Switch Statement</a></li>
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="stringmanip.php">String manipulation</a></li>
    </ul>
    </ul>

    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
    </div>