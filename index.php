<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Scraper</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js defer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>


     <!-- CSS -->
     <style>
        html {
            background: url("background.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        body {
            background: none;
        }

        .container {
            text-align: center;
            margin-top: 100px;
            width: 450px;
        }

        input {
            margin: 20px 0;
        }

        #weather {
            margin-top: 15px;
        }
     </style>
</head>

<body>
    <div class="container">
        <h1 class="text-white">What's the weather?</h1>
        <form class="text-white" action="" method="post">
            <fieldset class="form-group">
                <label for="city">Enter city name.</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="E.g., London, Tokio">
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="weather"></div>
    </div>
</body>

</html>