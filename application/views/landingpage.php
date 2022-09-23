<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Document</title>
  <style>

  </style>
</head>

<body>
  <nav class="mx-auto bg-white shadow">
    <div class="
      container
      mx-auto
      flex
      items-center
      justify-around
      py-5
      md:py-5
      lg:py-0
      lg:justify-center
    ">
      <a href="" class="
        focus:outline-none
        focus-visible:ring-2
        ring-neutral-900
        rounded-sm
        lg:top-4.5
        z-50
        hover:opacity-75
        transition-opacity
      " aria-label="Go to homepage">
        <img src="<?= base_url("assets/img/logo_hori.png") ?>" class="w-24 md:w-28 lg:w-28" alt="Morent Logo">
      </a>
      <button id="menu" class="
        lg:hidden
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
      <div role="menubar" class="
        hidden
        flex-col
        absolute
        z-40
        right-0
        left-0
        top-16
        bg-white
        text-center
        text-lg
        p-6
        items-center
        lg:flex
        lg:flex-row
        lg:justify-end
        lg:static
        lg:shadow-none
        lg:w-1/2
        
        ">
        <a role="menuitem" class="
            py-1
            px-4
            text-neutral-900
            hover:text-white
            duration-300
            focus:outline-none
            " href="">Home</a>

        <!-- test -->
        <div class="w-max " id="wrapHover1">
          <a role="menuitem" class=" px-4 py-1 text-neutral-900 hover:text-neutral-500 transition duration-300 ease-in-out flex items-center justify-center w-max" href="#" type="button" id="hoverNav1">
            About Us
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 rotate-0 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden absolute right-[40rem] top-[3.8rem] dropdown-menu min-w-max bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg bg-clip-padding border-none transition duration-300" id="ulNav1">
            <li>
              <h6 class="text-gray-900 font-semibold text-sm py-2 px-4 pr-20 block w-full whitespace-nowrap bg-transparent">
                About Us
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>Pharma-Assist at a Glance</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>History</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>Vision & Mision</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- test -->

        <a role="menuitem" class="
            py-1
            px-4
            text-neutral-900
            hover:text-white
            duration-300
            focus:outline-none
            " href="">Product</a>

        <!-- test -->
        <div class="w-max" id="wrapHover2">
          <a role="menuitem" class=" px-4 py-1 text-neutral-900 hover:text-neutral-500 transition duration-300 ease-in-out flex items-center justify-center w-max" href="#" type="button" id="hoverNav2">
            Latest News
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 rotate-0 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden absolute top-[3.8rem] right-[26rem] dropdown-menu min-w-max bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg bg-clip-padding border-none" id="ulNav2">
            <li>
              <h6 class="text-gray-900 font-semibold text-sm py-2 px-4 pr-20 block w-full whitespace-nowrap bg-transparent">
                Latest News
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>News</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>Press Release</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100 transition duration-300 ease-in-out flex items-center" href="#">
                <span>React</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- test -->

        <a role="menuitem" class="
                py-1
                mx-6
                focus:outline-none
                " href="">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#94a3b8" class="w-6 h-6 hover:fill-[#FD841F] transition-colors duration-300">
            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
          </svg>
        </a>

      </div>
    </div>
  </nav>

  <section id="carousel">
    <div class="">
      <div class="max-w-full mx-auto relative" x-data="{
        activeSlide: 1,
        slides: [
          {id: 1, title: 'Slide 1', src: '<?= base_url("assets/img/morent.png") ?>'},
          {id: 2, title: 'Slide 2', src: '<?= base_url("assets/img/mobil1.png") ?>'},
          {id: 3, title: 'Slide 3', src: '<?= base_url("assets/img/mobil2.png") ?>'},
          {id: 4, title: 'Slide 4', src: '<?= base_url("assets/img/mobil3.png") ?>'},
          {id: 5, title: 'Slide 5', src: '<?= base_url("assets/img/mobil4.png") ?>'}
        ],
        loop(){
            setInterval(() => {this.activeSlide = this.activeSlide === 5 ? 1 : this.activeSlide + 1}, 3000)
        }
      }" x-init="loop">
        <template x-for="(slide in slides" : key="slide.id">
          <div x-show="activeSlide === slide.id" class="p-24 h-80 flex justify-center text-white">
            <div>
              <img :src="slide.src" class="object-cover " width="300" />
            </div>
          </div>
        </template>

        <div class="absolute flex inset-0">
          <div class="flex items-center justify-start w-1/2">
            <button class="bg-slate-300 hover:bg-slate-200 text-black font-bold rounded-full w-10 h-10 shadow-md flex items-center justify-center ml-14 transition duration-300" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-end w-1/2">
            <button class="bg-slate-300 hover:bg-slate-200 text-black font-bold rounded-full w-10 h-10 shadow-md flex items-center justify-center mr-14 transition duration-300" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>

            </button>
          </div>
        </div>

        <div class="absolute w-full flex items-center justify-center px-4 py-5">
          <template x-for="(slide in slides" : key="slide.id">
            <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out
            hover:bg-slate-500 hover:shadow-lg" :class="{
             'bg-slate-600' : activeSlide === slide.id, 
             'bg-slate-300' : activeSlide !== slide.id, 
            }" x-on:click="activeSlide = slide.id"></button>
          </template>
        </div>


      </div>
    </div>
  </section>
</body>

<script src="<?= base_url("assets/js/main.js") ?>"></script>

</html>