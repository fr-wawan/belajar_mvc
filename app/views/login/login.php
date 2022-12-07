<?php

?>
<h1 class="text-center my-5">Login User</h1>

<div class="container-fluid text-center w-25 m-auto mt-5">
    <form action="<?= BASEURL; ?>/Auth/loginUser" method="post">

        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" class="form-control mb-3">
        </div>

        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control mb-3">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>