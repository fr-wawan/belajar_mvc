<div class="w-25 m-auto my-5">
    <form action="<?= BASEURL; ?>/home/ubahUser" method="post">
        <input type="hidden" name="id" value="<?= $data['user']['id'] ?>">
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control mb-3" value="<?= $data['user']['nama'] ?>">
        </div>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" class="form-control mb-3" value="<?= $data['user']['username'] ?>">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control mb-3" value="<?= $data['user']['email'] ?>">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control mb-3" value="<?= $data['user']['password'] ?>">
        </div>
        <div>
            <label for="status">Status : </label>
            <input type="text" name="status" id="status" class="form-control" value="<?= $data['user']['status'] ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>