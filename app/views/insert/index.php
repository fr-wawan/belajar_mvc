<h1 class="text-center my-5">Tambah Data</h1>

<div class="text-center w-25 m-auto mt-5">
    <form action="<?= BASEURL; ?>/home/tambahUser" method="post">
        <div>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" class="form-control mb-3">
        </div>
        <div>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username" class="form-control mb-3">
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" class="form-control mb-3">
        </div>
        <div>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="form-control mb-3">
        </div>
        <div>
            <label for="status">Status : </label>
            <input type="text" name="status" id="status" class="form-control">
        </div>

        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>