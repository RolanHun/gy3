<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="csrf-token" content=<?php $token = csrf_token();
                                    echo $token; ?>>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../ajax.js"></script>
    <script src="../ingatlan.js"></script>
    <link rel="stylesheet" href="../ingatlanok.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="container-fluid">
    <div id="INGATLANOK">

        <h3>Ajánlataink</h3>
        <div class="fejlec container">
            <div class="row">
                <div class="col">Kategória</div>
                <div class="col">Leírás</div>
                <div class="col">Hirdetés Dátuma</div>
                <div class="col">Tehermentes</div>
                <div class="col">Fénykép</div>
            </div>

        </div>
        <div class="ingatlanok  ">

        </div>
        <div class="form m-auto">
        <h3>Új hírdetés elküldése</h3>
        <div class="">
            <div class="form-control ">
                <p>Ingatlan kategóriája</p>
                <select id="kategoriak">
                    <option>Kérem válasszon</option>
                </select>
            </div>

            <div class="form-control ">
                <p>Hirdetés dátuma</p>
                <input type="date" id="datum" />
            </div>
            <div class="form-control  ">
                <p>Ingatlan leírása</p>
                <textarea class="w-100" id="leiras">

                </textarea>
            </div>
            <div class=" ">
                <input type="checkbox" id="tehermentes" />
                <label>Tehermentes ingatlan</label>
            </div>
            <div class="form-control  ">
                <p>Fénykép az ingatlanról</p>
                <input type="text" id="kep" class="w-100" />
            </div>
            <div class=" ">
                <button class="btn btn-primary btn-small kuldes">Küldés</button>
            </div>
        </div>
    </div>
    </div>
    
</body>

</html>