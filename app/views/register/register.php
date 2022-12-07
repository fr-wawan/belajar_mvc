<h1 class="text-center my-5">Registrasi User</h1>

<div class="text-center w-50 m-auto mt-5">
    <form action="<?= BASEURL; ?>/Auth/registrasiUser" method="post">

        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" class="form-control mb-3">
        </div>

        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control mb-3">
        </div>
        <div>
            <label for="password2">Password :</label>
            <input type="password" name="password2" id="password2" class="form-control mb-3">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>