<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libaas Assignment</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="./index.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <h1>Libaas Assignment</h1>
            <p class="lead">Get Name and Price of Cryptocurrencies.</p>
        </div>

        <div class="row">
            <div class="col-md-4 ">
                <button class="btn btn-primary btn-lg d-flex justify-content-start align-content-center align-items-center" id="getData" type="button">
                    <span id="btn-text">Get Data</span> 
                </button>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-5" id="add-table">
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./index.js"></script>
</body>

</html>