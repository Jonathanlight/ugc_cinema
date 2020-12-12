
<?php include_once('composants/public/header.php') ?>

    <form class="form-signin col-md-4" action="functions/function_login.php" method="POST">
        <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>

        <label for="username" class="col-form-label">username</label>
        <input type="email" id="username" class="form-control" placeholder="username" required autofocus>
        
        <label for="inputPassword" class="col-form-label">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block mt-5" type="submit">Login</button>
    </form>

<?php include_once('composants/public/footer.php') ?>