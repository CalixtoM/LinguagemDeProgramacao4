<?php 



?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <title>Metodo Get</title>
    </head>
    <body>
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <form action="post-busca.php" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label>Senha:</label>
                                <input type="password" name="pw" class="form-control">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center" style="padding-top: 1%;">
                                <button type="submit" class="btn btn-success">Logar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>