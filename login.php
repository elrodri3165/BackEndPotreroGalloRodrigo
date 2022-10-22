<!DOCTYPE html>
<html lang="es">

<?php require 'head.php';?>

<body>
    <div class="container">
       
        <?php require 'nav.php';?>

        <form method="post" action="validar.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
    
            <button type="submit" class="btn btn-primary">Validar</button>
        </form>
        
        <div class="resultado">
            
            
        </div>

    </div>
</body>

</html>
