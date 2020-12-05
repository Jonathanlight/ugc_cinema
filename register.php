
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">

    <!-- Custom styles for this template -->
    <link href="assets/css/signidn.css" rel="stylesheet">
  </head>

  <body>

  <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>

            <div class="form-inline my-2 my-lg-0">
                <a href="login.php" class="btn btn-success my-2 my-sm-0 mr-3" >Connexion</a>
                <a href="register.php" class="btn btn-secondary my-2 my-sm-0" >Inscription</a>
            </div>
        </div>
        </nav>
    </header>

    <form class="form-signin col-md-4">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>

        <select class="custom-select custom-select-sm mb-3">
            <option selected>Genre</option>
            <option value="H">Homme</option>
            <option value="F">Femme</option>
        </select>

        <label for="username" class="col-form-label">Username</label>
        <input type="name" id="username" class="form-control" placeholder="Username" required>

        <label for="email" class="col-form-label">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email" required >

        <label for="dateNaissance" class="col-form-label">date de Naissance</label>
        <input type="date" class="form-control" id="dateNaissance">
        
        <label for="password" class="col-form-label">Mot de passe</label>
        <input type="password" id="password" class="form-control" placeholder="xxxxxxx" required>

        <label for="passwordConfirmed" class="col-form-label">Mot de passe de confirmation</label>
        <input type="password" id="passwordConfirmed" class="form-control" placeholder="xxxxxxx" required>
        
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="true"> Condition générale d'utilisation
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>
</body>
</html>
