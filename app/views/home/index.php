<h1 class="text-center my-5">Tabel Data User</h1>

<table class="table text-center">
    <tr>
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    <?php foreach ($data['user'] as $user) : ?>
        <tr>

            <td><?= $user['nama'] ?></td>
            <td><?= $user['username'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['password'] ?></td>
            <td><?= $user['status'] ?></td>
            <td>
                <a href="<?= BASEURL; ?>/home/ubah/<?= $user['id'] ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                        <path d="M16 5l3 3" />
                        <path d="M9 7.07a7.002 7.002 0 0 0 1 13.93a7.002 7.002 0 0 0 6.929 -5.999" />
                    </svg>
                </a>
                <a href="<?= BASEURL; ?>/home/hapus/<?= $user['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="4" y1="7" x2="20" y2="7" />
                        <line x1="10" y1="11" x2="10" y2="17" />
                        <line x1="14" y1="11" x2="14" y2="17" />
                        <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                        <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                    </svg></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<div class="text-center my-5">
    <button type="submit" class="btn btn-success "><a href="<?= BASEURL; ?>/home/tambah" class="nav-link">New Data</a></button>
</div>