<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharma Assist Shop</title>
    <link rel="shortcut icon" href="<?= base_url('assets/img/logo_ver.png');  ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url("assets/css/shop.css") ?>">
</head>
<body class="bg-gray-800 h-screen">
<nav class="mx-auto z-20 bg-gray-900 shadow fixed top-0 xl:w-full w-full">
    <div class="
      container
      mx-auto
      flex
      items-center
      justify-around
      py-5
      xl:py-0
      xl:justify-around">
      <a href="" class="
        focus:outline-none
        focus-visible:ring-2
        ring-neutral-900
        rounded-sm
    
        hover:opacity-75
        transition-opacity
        animate__animated animate__flipInX
      " aria-label="Go to homepage">
        <img src="<?= base_url("assets/img/logo_hori.png") ?>" class="w-40 xl:w-52" alt="Morent Logo">
      </a>
      <div class="flex justify-end ">
        <a href="<?= base_url("shop") ?>" role="menuitem" class="
                py-1
                mx-6
                focus:outline-none
                hidden" href="" id="cartLg2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#94a3b8" class="w-6 h-6 hover:fill-Blue transition-colors duration-300">
                  <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                </svg>
              </a>

              <button id="menu" class="
                xl:hidden
                focus:outline-none
                focus-visible:ring-2
                ring-neutral-900
                rounded-sm
                text-neutral-900
                hover:text-neutral-600
                transition-colors
                " aria-expanded="false" aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
      </div>
      

      <div role="menubar" class="
        hidden
        flex-col
        absolute
        right-0
        left-0
        top-16
        bg-gray-900
        text-center
        text-lg
        p-6
        items-center
        xl:flex
        xl:flex-row
        xl:justify-around
        xl:static
        xl:shadow-none
        xl:w-1/2
        ">
        <a role="menuitem" class="
            py-1
            px-4
            text-white
            hover:text-white/60
            duration-300
            " href="">Home</a>

        <!-- Hover Dropdown -->
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center group z-50" id="wrapHover1">
          <a role="menuitem" class="group px-4 py-1 text-white group-hover:text-white/60 hover:text-white/60 transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav1">
            Medicine
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute right-[35rem] top-[3.8rem] dropdown-menu xl:w-max w-full bg-gray-800/95 text-base  py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-gray-800 flex flex-col self-center" id="ulNav1">
            <li class="flex self-center xl:self-start w-full xl:px-4 xl:pr-20 xl:pb-2 pb-0 px-0 pr-0 border-b-2 border-white/10">
              <h6 class="text-white font-semibold text-md bg-transparent">
                <span>Medicine</span> 
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-700 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Pills</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-700 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Herbs</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- End Hover Dropdown -->

        <a role="menuitem" class="
            py-1
            px-4
            text-white           
            hover:text-white/60
            duration-300
            " href="<?= base_url() ?>">About Us</a>

        <!-- Hover Dropdown -->
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center group z-50" id="wrapHover2">
          <a role="menuitem" class="group px-4 py-1 text-white/90 hover:text-white/60 group-hover:text-white/60 transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav2">
            Help
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute top-[3.8rem] right-[22rem] dropdown-menu xl:w-max w-full bg-gray-800/95 text-base  py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-gray-800 flex flex-col self-center" id="ulNav2">
            <li class="flex self-center xl:self-start w-full xl:px-4 xl:pb-2 xl:pr-20 px-0 pb-0 pr-0 border-b-2 border-white/10">
              <h6 class="text-white font-semibold text-md bg-transparent">
                Help
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-700 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>About Our Medicine</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-700 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Terms and Privacy Policy</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-white hover:bg-gray-700 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Contact Us</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- End Hover Dropdown -->

        <div class="flex gap-4 ml-5">
            
            <a href="#wishlist" role="menuitem" class="group" href="" id="cartLg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
            </a>
            <a href="#cart" class="group">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFF" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </a>
        </div>
        

        <?php

        if($num_rows > 0){
            echo "
            <div class='flex mx-6 gap-4 text-white'>
                <a href='". base_url('admin/dashboard')."' class='hover:text-white/60 duration-300'>Admin</a>
                <a href='". base_url('auth/logout')."' class='hover:text-white/60 duration-300' >Logout</a>
            </div>
            ";
        }else{
            echo "
            <div class='flex mx-6 gap-4 text-white'>
                <a href='". base_url('auth/login')."' class='hover:text-white/60 duration-300'>Login</a>
                <a href='". base_url('auth/register')."' class='hover:text-white/60 duration-300' >Logout</a>
            </div>
            ";
        }

        ?>
    

      </div>
    </div>
  </nav>

  <!-- Item 1 -->
  <div class="group absolute left-64 top-32 overflow-hidden duration-300 hover:shadow-xl hover:shadow-black/30 w-[20rem] h-[20rem] rounded-md" id="div1">
      <div class="absolute h-full w-full group-hover:scale-110 duration-300 flex justify-center items-center">
        <img class="h-fit w-fit object-cover duration-300" src="<?= base_url("assets/img/Mentats.png") ?>" alt="Mentats" />
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 duration-500"></div>
      <div class="absolute inset-0 flex translate-y-1/2 flex-col gap-2 items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
        <h1 class="font-dmserif text-xl font-bold text-white">Mentats</h1>
        <button
          class="rounded-lg px-2 py-2 text-white/70 cursor-pointer hover:bg-gray-800/40 bg-white/20 hover:text-white hover:border-white/5 duration-300 transition-colors text-sm capitalize text-white hover:shadow hover:shadow-black/60"
          onclick="item1(0)"
        >
          See More
        </button>
      </div>
      <div class="w-1/2 fixed flex flex-col items-center gap-10 justify-center -z-50 top-[22%] right-32">
        <div class="text-white text-5xl duration-200 font-semibold fadeUp ease-in-out">Mentats</div>
        <div class="text-white text-2xl duration-200 font-semibold fadeUp ease-in-out delay-[50ms]">
        The chalky red tablets manufactured by Med-Tek Laboratories were a popular recreational drug that was favored by consumers for their effect on creativity. The active ingredient is a powerful nootropic that increases memory-related functions and speeds up other mental processes.
        </div>
        <div class="flex self-start gap-2 fadeUp text-white duration-200">
          <div class="px-3 bg-gray-800 rounded-full duration-200 fadeUp">Pill</div>
        </div>
        <button
          class="self-start fadeUp rounded-full px-4 py-2 text-white/70 cursor-pointer hover:bg-gray-800 bg-gray-900/95 hover:text-white hover:border-white/5 duration-200 text-sm capitalize text-white hover:shadow hover:shadow-black/60 delay-[125ms]"
        >
          Source Code
        </button>
      </div>
    </div>
    <!-- Item 2 -->
    <!-- Item 1 -->
    <div class="group absolute right-64 top-32 overflow-hidden duration-300 hover:shadow-xl hover:shadow-black/30 w-[20rem] h-[20rem] rounded-md" id="div2">
      <div class="absolute h-full w-full group-hover:scale-110 duration-300 flex justify-center items-center">
        <img class="h-fit w-fit object-cover duration-300" src="<?= base_url("assets/img/Peelz.png") ?>" alt="Peelz" />
      </div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70 duration-500"></div>
      <div class="absolute inset-0 flex translate-y-1/2 flex-col gap-2 items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
        <h1 class="font-dmserif text-xl font-bold text-white">Morent</h1>
        <button
          class="rounded-lg px-2 py-2 text-white/70 cursor-pointer hover:bg-gray-800/40 bg-white/20 hover:text-white hover:border-white/5 duration-300 transition-colors text-sm capitalize text-white hover:shadow hover:shadow-black/60"
          onclick="item1(1)"
        >
          See More
        </button>
      </div>
      <div class="w-1/2 fixed flex flex-col items-center gap-10 justify-center -z-50 top-[22%] right-32">
        <div class="text-white text-5xl duration-200 font-semibold fadeUp ease-in-out">Morent</div>
        <div class="text-white text-2xl duration-200 font-semibold fadeUp ease-in-out delay-[50ms]">Morent is a car ordering website, using the PHP language along with the codeigniter 3 framework.</div>
        <div class="flex self-start gap-2 fadeUp text-white duration-200">
          <div class="px-3 bg-gray-800 rounded-full duration-200 fadeUp">PHP</div>
          <div class="px-3 bg-gray-800 rounded-full duration-200 fadeUp delay-100">HTMl</div>
          <div class="px-3 bg-gray-800 rounded-full duration-200 fadeUp delay-[125ms]">CSS</div>
          <div class="px-3 bg-gray-800 rounded-full duration-200 fadeUp delay-[125ms]">Codeigniter</div>
        </div>
        <button
          class="self-start fadeUp rounded-full px-4 py-2 text-white/70 cursor-pointer hover:bg-gray-800 bg-gray-900/95 hover:text-white hover:border-white/5 duration-200 text-sm capitalize text-white hover:shadow hover:shadow-black/60 delay-[125ms]"
        >
          Source Code
        </button>
      </div>
    </div>
    
  <script src="<?= base_url("assets/js/shop.js") ?>"></script>
  <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>