<html>
    <head>
        <title>My first page</title>
        <?php
        include ('file.php');
        include ('header.php');
        ?>
        <script src="calc.js"></script>
    </head>

    <body>
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1>Моя вторая страница</h1>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Число1</span>
                            <input type="text" id="num1" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Число2</span>
                            <input type="text" id="num2" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="button" id="add" class="btn btn-outline-primary">+</button>
                            <button type="button" id="subtract" class="btn btn-outline-primary">-</button>
                            <button type="button" id="multiply" class="btn btn-outline-primary">*</button>
                            <button type="button" id="divide" class="btn btn-outline-primary">/</button>
                        </div>
                        <h4>Result:   <span class="badge bg-secondary" id="result"></span></h4>

                    </div>
                </div>
            </div>
        </div>
    </body>

</html>