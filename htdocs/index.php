<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">    
      <div class="row">
        <form action="valida.php" method="post" enctype="multipart/form-data">
                
                <input type="file" name="input_file"
        		placeholder="Select a file ...">

          	<button class="btn btn-info btn-block" type="submit">Entrar</button>
        </form>
      </div>
    </div>
  </body>
</html>