<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesiones</title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-3">
          <div class="page-header text-center">
            <h1>Example Login Form <small>Desarrollador</small></h1>
            <form class="form-singin" action="manejador.php" method="post" >
          </div>
              <h2 class="form-singin-heading">Please sing in</h2>
              <label for="user" class="sr-only">User</label>
              <input type="text" name="user" class="form-control" placeholder="User Name" required autofocus>
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>

              <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Sing in">
            </form>

        </div>

      </div>
    </div>

  </body>
</html>
