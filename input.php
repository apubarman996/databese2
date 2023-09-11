<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body style="padding: 50px;"><br>
    <div class="card" style="padding: 30px;">
        <div class="card-body">
            <h1>Input Hare</h1><hr>
            <form action="test.php" method="get">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Number One</label>
                    <input type="text" name="num1" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Number Two</label>
                    <input type="text"  name="num2" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sum</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>