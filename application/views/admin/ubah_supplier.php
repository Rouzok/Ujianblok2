<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Codeigniter</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo_ver.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-800">
        <nav class="grid grid-cols-2 space-x-4 bg-gray-900 ">
            <div class="flex space-x-5">
                <a href="<?= site_url("shop") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Home</a>
                <a href="<?= site_url("admin/barang") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Barang</a>
                <a href="<?= site_url("admin/supplier") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-emerald-500 justify-left">Supplier</a>
            </div>
            <div class="flex w-[725px] justify-end">
                <a href="<?= site_url("auth/logout")?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white ">Logout</a>
                <a href="<?= site_url("admin/dashboard") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-emerald-500 ">Admin</a>";
            </div>
        </nav>
    <div class="card mx-10 my-10 bg-gray-700">
        <div class="card-header bg-gray-900 text-white">
            <h1> Ubah Data Supplier </h1>
        </div>
        <form action="" method="post">
            <?= validation_errors(); ?>
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label text-white">Pilih Barang</label>
                    <select name="id_barang" id="" class="form-control">
                        <option value="<?php echo $supplier->id_barang ?>"><?php echo $supplier->nama_barang ?>/ <?php echo $supplier->jenis_barang ?> </option>
                        <?php foreach ($list as $s) : ?>
                            <option value="<?= $s->id_barang  ?>"><?= $s->nama_barang ?>/<?= $s->jenis_barang ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" value="<?php echo $supplier->jumlah ?>">
                    <input type="text" name="id_supplier" class="form-control" value="<?php echo $supplier->id_supplier ?>" hidden>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Simpan" class="btn bg-blue-500 text-slate-100">
                </div>
        </form>
    </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>