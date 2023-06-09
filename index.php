<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Password Generator</title>
</head>

<body>

    <!-- parte php -->
    <?php
        include "./funzioni.php";
        $quantitaCaratteri = $_GET["lunghezzaPs"];
    ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Strong Password Generator</h1>
                    <h2>Genera una password sicura</h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form action="./index.php" method="GET">

                        <div class="form-floating">
                            <select class="form-select" name="lunghezzaPs" id="lunghezzaPs" na aria-label="Floating label select example">
                                <option selected value="0">Scegli la quantità di caratteri </option>
                                <option value="5">Cinque</option>
                                <option value="10">Dieci</option>
                                <option value="15">Quindici</option>
                            </select>
                            <label for="lunghezzaPs"></label>
                        </div>

                        <button type="submit">Invia</button>
                        <button type="reset">Cancella</button>

                    </form>

                    <div><?php echo generaPs($quantitaCaratteri) ?></div>
                </div>
            </div>
        </div>
    </main>



</body>

</html>