<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo_ver.png');  ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800">
    <nav class="grid grid-cols-2 space-x-4 bg-gray-900 ">
        <div class="flex space-x-5">
            <a href="<?= site_url("shop") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Home</a>
            <a href="<?= site_url("admin/barang") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Barang</a>
            <a href="<?= site_url("admin/supplier") ?>" class="font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white justify-left">Supplier</a>
        </div>
        <div class="flex w-[725px] justify-end">
            <?php
                $this->load->model('auth_model');
                if($this->auth_model->current_user()){
                    echo "<a href='".site_url('auth/logout')."' class='font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white '>Logout</a>
                    <a href='".site_url('admin/dashboard')."' class='font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-emerald-500 '>Admin</a>";
                }else{
                    echo "<a href='".site_url('auth/login')."' class='font-bold px-3 py-4 hover:bg-teal-500 hover:text-slate-100 ease-in-out duration-100 text-white '>Login</a>";
                }
            ?>
        </div>
    </nav>

    <h2 class="font-bold font-serif text-white">
        <marquee behavior="" direction="">
            Selamat datang 
            <?php 
                 foreach ($all_data as $a)
                 {
                     echo $a->name;
                }
                 
             ?>
        </marquee>
    </h2>


</body>
</html>