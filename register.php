
<?php include_once('composants/public/header.php') ?>
<?php include_once('functions/function_register.php') ?>

    <form method="POST" action="register.php" class="form-signin col-md-4">

	    <!-- Message  -->
        <?php include_once('composants/fashMessage.php') ?>

        <img class="mb-4" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Inscription</h1>

        <select name="genre" class="custom-select custom-select-sm mb-3">
            <option selected>Genre</option>
            <option value="H">Homme</option>
            <option value="F">Femme</option>
        </select>

        <label for="email" class="col-form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required >

        <label for="dateNaissance" class="col-form-label">date de Naissance</label>
        <input type="date" name="dateNaissance" class="form-control" id="dateNaissance">
        
        <label for="password" class="col-form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="xxxxxxx" required>

        <label for="passwordConfirmed" class="col-form-label">Mot de passe de confirmation</label>
        <input type="password" name="passwordConfirmed" id="passwordConfirmed" class="form-control" placeholder="xxxxxxx" required>
        
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" name="cgu" value="true"> Condition générale d'utilisation
            </label>
        </div>
        <button name="register" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
    </form>

<?php include_once('composants/public/footer.php') ?>