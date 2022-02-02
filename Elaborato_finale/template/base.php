<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $params["title"]?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="login.js" type="text/javascript"></script>
    </head>

    <body>
      <?php ?>
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <a href="" class="navbar-brand ">Pagina del negozio</a>
        <div class="col-md-3 offset-md-4">
          <h1 class="my-auto" name="loginTitle">Login</h1>
      </div>

      </nav>

      <main>
        <?php require($params["content"]);?>
      </main>

    </body>
</html>