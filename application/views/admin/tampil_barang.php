<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo_ver.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="
    https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

</head>

<body class="bg-gray-800">
    <nav class="grid grid-cols-2 space-x-4 bg-gray-900 ">
            <div class="flex space-x-5">
                <a href="<?= site_url("shop") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Home</a>
                <a href="<?= site_url("admin/barang") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-emerald-500 justify-left">Barang</a>
                <a href="<?= site_url("admin/supplier") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Supplier</a>
            </div>
            <div class="flex w-[725px] justify-end">
                <a href="<?= site_url("auth/logout")?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white ">Logout</a>
                <a href="<?= site_url("admin/dashboard") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-emerald-500 ">Admin</a>";
            </div>
        </nav>

        <div class="flex justify-center m-5">
            <div class="mr-[270px] text-2xl font-bold text-white">
                <h1>Data Barang</h1>
            </div>
            <div class="mb-3 text-white">
                <a href="<?php echo site_url('admin/barang/simpan') ?>" class="bg-gray-900 rounded-lg p-2 hover:bg-gray-900/60 text-white">Tambah Data</a>
            </div>
        </div>
        <div class="mx-20">
            <table id="table_id" class="table table-striped text-white text-center">
                <thead>
                    <tr>
                        <th class="border text-center">ID Barang</th>
                        <th class="border text-center">Nama Barang</th>
                        <th class="border text-center">Jenis Barang</th>
                        <th class="border text-center">Stok</th>
                        <th class="border text-center">Harga</th>
                        <th class="border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($barang as $s) : ?>
                        <tr>
                            <td class="border text-white"><?php echo $s->id_barang ?></td>
                            <td class="border text-white"><?php echo $s->nama_barang ?></td>
                            <td class="border text-white"><?php echo $s->jenis_barang ?></td>
                            <td class="border text-white"><?php echo $s->stok ?></td>
                            <td class="border text-white">Rp.<?php echo number_format($s->harga); ?></td>
                            <td class="border text-white">
                                <a class="group text-white" href="<?php echo site_url('admin/barang/ubah/' . $s->id_barang) ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white/70 w-6 h-6 inline duration-300">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                    </svg>
                                </a>
                                <a class="group text-white" href="<?php echo site_url('admin/barang/hapus/' . $s->id_barang) ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="group-hover:text-white/70 w-6 h-6 inline duration-300">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>

                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table_id').DataTable({
                    paging: false,
                    ordering: false,
                    info: false,
                });
            });
        </script>
</body>

</html>