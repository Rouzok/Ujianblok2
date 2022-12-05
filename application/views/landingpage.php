<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?= base_url("assets/img/logo_ver.png") ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  
  <title>Ujian Blok2 | Kelompok 4</title>
  <style>

  </style>
</head>

<body>

<!-- Navbar fixed top-0 z-50 w-full-->
<nav class="mx-auto bg-white shadow fixed top-0 z-50 xl:w-full w-full">
    <div class="
      container
      mx-auto
      flex
      items-center
      justify-around
      py-5
      xl:py-0
      xl:justify-center
    ">
      <a href="" class="
        focus:outline-none
        focus-visible:ring-2
        ring-neutral-900
        rounded-sm
        z-50
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
        z-40
        right-0
        left-0
        top-16
        bg-white
        text-center
        text-lg
        p-6
        items-center
        xl:flex
        xl:flex-row
        xl:justify-end
        xl:static
        xl:shadow-none
        xl:w-1/2
        ">
        <a role="menuitem" class="
            py-1
            px-4
            text-neutral-900
            hover:text-Blue
            duration-300
            " href="">Home</a>

        <!-- Hover Dropdown -->
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center" id="wrapHover1">
          <a role="menuitem" class="group px-4 py-1 text-neutral-900 hover:text-Blue transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav1">
            About Us
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute right-[35.5rem] top-[3.8rem] dropdown-menu xl:w-max w-full bg-slate-50 text-base z-50 py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-slate-100 flex flex-col self-center" id="ulNav1">
            <li class="flex self-center xl:self-start w-max xl:px-4 px-0">
              <h6 class="text-gray-900 font-semibold text-md bg-transparent">
                <span>About Us</span> 
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-neutral-900 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Pharma-Assist at a Glance</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-neutral-900 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>History</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-neutral-900 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Vision & Mision</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- End Hover Dropdown -->

        <a role="menuitem" class="
            py-1
            px-4
            text-neutral-900 
            hover:text-Blue
            duration-300
            " href="">Product</a>

        <!-- Hover Dropdown -->
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center" id="wrapHover2">
          <a role="menuitem" class="group px-4 py-1 text-neutral-900 hover:text-Blue transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav2">
            Latest News
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute top-[3.8rem] right-[22rem] dropdown-menu xl:w-max w-full bg-slate-50 text-base z-50 py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-slate-100 flex flex-col self-center" id="ulNav2">
            <li class="flex self-center xl:self-start w-max xl:px-4 px-0 xl:pr-20 pr-0">
              <h6 class="text-gray-900 font-semibold text-md bg-transparent">
                Latest News
              </h6>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>News</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>Press Release</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item text-sm py-2 px-4 font-normal w-full whitespace-nowrap bg-transparent text-gray-700 hover:text-Blue hover:bg-gray-100 transition duration-300 ease-in-out flex items-center justify-center xl:justify-start" href="#">
                <span>React</span>
              </a>
            </li>

          </ul>
        </div>
        <!-- End Hover Dropdown -->

        <a href="<?= base_url("shop") ?>" role="menuitem" class="
                py-1
                mx-6" href="" id="cartLg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#94a3b8" class="w-6 h-6 hover:fill-Blue transition-colors duration-300">
            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
          </svg>
        </a>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Carousel -->
  <section id="carousel">
    <div class="">
      <div class="max-w-full mx-auto relative xl:-mt-[1.5rem] mt-16 xl:-mb-12 -mb-0" x-data="{
        activeSlide: 1,
        slides: [
          {id: 1, title: 'Slide 1', src: '<?= base_url("assets/img/Mentats_carou.png") ?>'},
          {id: 2, title: 'Slide 2', src: '<?= base_url("assets/img/Peelz_carou.png") ?>'},
          {id: 3, title: 'Slide 3', src: '<?= base_url("assets/img/Triherbal_carou.png") ?>'},
          {id: 4, title: 'Slide 4', src: '<?= base_url("assets/img/Buffout_carou.png") ?>'}
        ],
        loop(){
            setInterval(() => {this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1}, 7000);
        }
      }" x-init="loop()">

        <template x-for="(slide in slides" : key="slide.id">
          <div x-show="activeSlide === slide.id" class="text-white inline relative">
            <img :src="slide.src" class="object-cover w-full xl:h-full h-[14rem] scale-x-100 xl:scale-y-[.75] scale-y-1" />
          </div>
        </template>

        <div class="absolute flex inset-0">
          <div class="flex items-center justify-start w-1/2">
            <button class="bg-slate-200 hover:bg-Blue text-black hover:text-white font-bold rounded-full xl:w-10 xl:h-10 w-5 h-5 shadow-md flex items-center justify-center xl:ml-14 ml-4 transition duration-300" x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:w-5 xl:h-5 w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
          </div>
          <div class="flex items-center justify-end w-1/2">
            <button class="bg-slate-200 hover:bg-Blue text-black hover:text-white font-bold rounded-full xl:w-10 xl:h-10 w-5 h-5 shadow-md flex items-center justify-center xl:mr-14 mr-4 transition duration-300" x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="xl:w-5 xl:h-5 w-3 h-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>

            </button>
          </div>
        </div>

        <div class="absolute xl:w-1/3 w-1/2 xl:bottom-5 bottom-0 xl:-translate-y-[6.6rem] -translate-y-0 flex items-center justify-center xl:left-1/3 left-1/4">
          <template x-for="(slide in slides" : key="slide.id">
            <button class="flex-1 w-0 h-2 mt-4 mx-2 mb-2 rounded-full overflow-hidden transition-colors duration-200 ease-out shadow
              hover:bg-blue-400 hover:shadow-lg" :class="{
              'bg-Blue' : activeSlide === slide.id, 
              'bg-blue-100' : activeSlide !== slide.id, 
              }" x-on:click="activeSlide = slide.id">
            </button>
          </template>
        </div>


      </div>
    </div>
  </section>
  <!-- end Carousel -->

  <!-- Body 1 -->
  <section>
    <div class="mx-4 h-max mb-10" data-aos="fade-up" data-aos-duration="1000">

      <div class="flex justify-around uppercase text-Blue xl:text-4xl text-base mt-10">
        <div class="flex justify-center items-center h-2">
          <label class="tracking-tight">________________</label>
        </div>
        <h1 >SUSTAINABILITY</h1>
        <div class="flex justify-center items-center h-2">
          <label class="tracking-tight">________________</label>
        </div>
      </div>

      <div class="mt-14 flex xl:flex-row flex-col xl:gap-0 gap-6 box-border justify-center">
        <!-- max-w-base kalo card dikit -->
        
        <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <div class="bg-white max-w-xs flex flex-col justify-start" >
            <div class="w-1/4 h-1/4 flex self-center">
              <img class="w-full h-full" src="<?= base_url("assets/img/sus1.png") ?>" alt="sus1"/>
            </div>
            <div class="text-center flex justify-between flex-col">
              <h5 class="text-gray-900 text-3xl font-medium mb-2">Environmental Preservation</h5>
              <p class="text-gray-700 text-base my-2 mx-5">
              Reducing environment impact from the company's operations
              </p>
            </div>
            <div class="flex justify-center">
              <button type="button" class=" inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:bg-Blue focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
            </div>
          </div>
        </div>

        <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          <div class="bg-white max-w-xs flex flex-col justify-start">
            <div class="w-1/4 h-1/4 self-center">
              <img class="w-full h-full" src="<?= base_url("assets/img/sus2.png") ?>" alt="sus2"/>
            </div>
            <div class="text-center flex flex-col justify-between">
              <h5 class="text-gray-900 text-3xl font-medium my-2 mx-3">Inclusive Business</h5>
              <p class="text-gray-700 text-base my-2 mx-5">
              Supporting the inclusion of scientists in our research and contributing to socio-economic development of surrounding
              </p>
              <div class="flex justify-center">
                <button type="button" class=" inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:bg-Blue focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
              </div>
            </div>
          </div>
        </div>

        <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
          <div class="bg-white max-w-xs flex flex-col justify-start">
            <div class="self-center w-1/4 h-1/4">
              <img class="w-full h-full" src="<?= base_url("assets/img/sus3.png") ?>" alt="sus3"/>
            </div>
            <div class="text-center flex flex-col justify-between">
              <h5 class="text-gray-900 text-3xl font-medium my-2 mx-3">Employee Welfare</h5>
              <p class="text-gray-700 text-base my-2 mx-5">
                Upholding human rights and improving employee welfare
              </p>
              <div class="flex justify-center">
                <button type="button" class=" inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:bg-Blue focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="mt-8 flex xl:flex-row flex-col xl:gap-0 gap-6 box-border justify-center">
        <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <div class="bg-white max-w-xs flex flex-col justify-start">
              <div class="self-center w-1/4 h-1/4">
                <img class="w-full h-full" src="<?= base_url("assets/img/sus4.png") ?>" alt="sus4"/>
              </div>
              <div class="text-center flex flex-col justify-between">
                <h5 class="text-gray-900 text-3xl font-medium my-2 mx-3">Product Integrity</h5>
                <p class="text-gray-700 text-base my-2 mx-5">
                  Providing high quality, safe, and healthy products
                </p>
                <div class="flex justify-center">
                  <button type="button" class=" inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:bg-Blue focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
                </div>
              </div>
            </div>
          </div>

          <div class="flex justify-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="bg-white max-w-xs flex flex-col justify-start">
              <div class="self-center w-1/4 h-1/4">
                <img class="w-full h-full" src="<?= base_url("assets/img/sus5.png") ?>" alt="sus5"/>
              </div>
              <div class="text-center flex flex-col justify-between">
                <h5 class="text-gray-900 text-3xl font-medium my-2 mx-3">Sustainable Sourcing</h5>
                <p class="text-gray-700 text-base my-2 mx-5">
                  Ensuring a sustainable and responsible sourcing throughout supply chain
                </p>
                <div class="flex justify-center">
                  <button type="button" class=" inline-block px-6 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:bg-Blue focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- End Body 1 -->

  <!-- Body 2 (All Product) -->
  <section >
    <div class="mx-4 mt-15 h-max pt-10 pb-36 flex justify-center relative" x-data="{
        activeSlide: 1,
        slides: [
          {id: 1, title: 'Mentats', brand: '<?= base_url("assets/img/Mentats_brand.png") ?>', src: '<?= base_url("assets/img/Mentats.png") ?>', desc: 'The chalky red tablets manufactured by Med-Tek Laboratories were a popular recreational drug that was favored by consumers for their effect on creativity. The active ingredient is a powerful nootropic that increases memory-related functions and speeds up other mental processes.'},
          {id: 2, title: 'Peelz', brand: '<?= base_url("assets/img/Peelz_brand.png") ?>', src: '<?= base_url("assets/img/Peelz.png") ?>', desc: 'Genteks opioid painkiller for severe pain, if Paracetamol or Ibuprofen doesnt help. Hospital-environment only and CEDA-certified safe.'},
          {id: 3, title: 'Triherbal', brand: '<?= base_url("assets/img/Triherbal_brand.png") ?>', src: '<?= base_url("assets/img/Triherbal.png") ?>', desc: 'Consist of native plant species from the Arklay Mountains in Raccoon City. The green herb helps strengthen the natural healing process so that wounds heal faster while also having an active immune function that helps fight viral infection. The blue herb neutralizes natural toxins, while the red herb is used to enhance the effects of other herbs when mixed.'},
          {id: 4, title: 'Buffout', brand: '<?= base_url("assets/img/Buffout_brand.png") ?>', src: '<?= base_url("assets/img/Buffout.png") ?>', desc: 'Highly advanced steroids that increase strength, reflexes, and endurance. Although highly addictive, it was a popular choice among athletes. Their clandestine - and illicit - use of the drug made its use by amateurs popular and widespread. With it, they could run longer and work out harder without the burden of unnecessary training'}
        ],
        loop(){
            setInterval(() => {this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1}, 7000);
        }
      }" x-init="loop()" data-aos="fade-up" data-aos-duration="1000">
      <div class="w-full flex flex-col items-center">
        <div class="flex justify-around uppercase text-Blue xl:text-4xl text-base w-full">
          <div class="flex justify-center items-center h-2">
            <label class="tracking-tight">________________</label>
          </div>
          <h1>Our Product</h1>
          <div class="flex justify-center items-center h-2">
            <label class="tracking-tight">________________</label>
          </div>
        </div>
        <!-- Detail Product -->
        <div class="mt-7 h-max w-max xl:px-16 px-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          <template x-for="(slide in slides" : key="slide.id">
            <div x-show="activeSlide === slide.id" class="text-black">
              <div class="py-5">
                <h1 x-text="slide.title" class="text-center text-3xl font-medium"></h1>
              </div>

              <div class="flex xl:flex-row flex-col justify-center items-center space-x-10 xl:py-5 py-0">
                <img :src="slide.src" class="object-cover w-72 xl:h-full h-full xl:scale-100 scale-50" />

                <div class="flex flex-col">
                  <div class="xl:w-[30rem] w-[15rem]">
                    <p x-text="slide.desc" class="text-sm xl:text-lg font-semibold"></p>
                  </div>
                  <button type="button" class="my-5 inline-block py-3 xl:w-1/4 w-max xl:px-0 px-4 bg-blue-500 text-white text leading-tight rounded-full shadow-md hover:bg-Blue hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">See More</button>
                  
                </div>
              </div>
            </div>
          </template>
          <!-- test -->

          <div class="hidden absolute xl:w-1/2 w-full top-1/3 flex items-center justify-between xl:left-1/4 left-0" id="kiriKanan2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
              <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="block"><img src="<?= base_url("assets/img/kiri.png") ?>" alt="arrow-kiri" class="h-16 w-15 hover:opacity-75"></button>
              <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="block"><img src="<?= base_url("assets/img/kanan.png") ?>" alt="arrow-kiri" class="h-16 w-15 hover:opacity-75"></button>
          </div>

          <!-- end test -->
          
        </div>
        <!-- End Detail Product -->
      </div>

        <div class=" absolute xl:w-1/2 w-1/2 bottom-3 flex items-center justify-center xl:left-1/4 left-1/4" id="kiriKanan" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
           <button x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1" class="block"><img src="<?= base_url("assets/img/kiri.png") ?>" alt="arrow-kiri" class="h-[7.8rem] w-15 hover:opacity-75"></button>
           <template x-for="(slide in slides" : key="slide.id">
            <button class="flex-1 w-20 h-[7.8rem] mx-[.4px] overflow-hidden transition-opacity duration-300 ease-out border-2 border-slate-300 hover:opacity-100 shadow"  x-on:click="activeSlide = slide.id" :class="{
               'opacity-100' : activeSlide === slide.id, 
              'opacity-50 shadow-lg' : activeSlide !== slide.id, 
               }">
               <img :src="slide.brand" alt="" class="object-cover w-full h-full scale-75" >
            </button>  
          </template>
          <button x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1" class="block"><img src="<?= base_url("assets/img/kanan.png") ?>" alt="arrow-kiri" class="h-[7.8rem] w-15 hover:opacity-75"></button>
      </div>

    </div>
  </section>


  <section>
    <div class="mx-4 h-[80vh] pt-10 flex flex-col justify-center" data-aos="fade-up" data-aos-duration="1000">
          <div class="flex justify-around uppercase text-Blue xl:text-4xl text-base w-full">
            <div class="flex justify-center items-center h-2">
              <label class="tracking-tight">________________</label>
            </div>
            <h1>Latest News</h1>
            <div class="flex justify-center items-center h-2">
              <label class="tracking-tight">________________</label>
            </div>
          </div>
          <!-- Content -->
          <div class="mt-16 flex xl:flex-row flex-col justify-center gap-6 box-border items-center">
            <!-- card 1 -->
            <div class="flex justify-center h-56 bg-[url('../../assets/img/bg-card.png')] bg-no-repeat" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <div class="max-w-xs text-white flex flex-col justify-around">
                <div class="mx-5 mt-3">
                    <h5>6th of July, 2020</h5>
                </div>
                <div class="mx-5 text-left">
                  <p class="text-base">
                  The Umbrella Corporation releases "Triherbal", a herbal supplement to treat symptoms of the endemic Raccoon City t-Virus
                  </p>
                </div>
                <div class="mx-5">
                  <a href="#" class="pr-2 font-medium text-sm leading-tight shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">See More</a>
                </div>
              </div>
            </div>
            <!-- End card 1 -->
            <!-- card 2 -->
            <div class="flex justify-center h-56 bg-[url('../../assets/img/bg-card.png')] bg-no-repeat" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <div class="max-w-xs text-white flex flex-col justify-around">
                <div class="mx-5 mt-3">
                    <h5>15th of April, 2020</h5>
                </div>
                <div class="mx-5 text-left">
                  <p class="text-base">
                  Pharma-Assist donates 20.000 USD to assist communities and health workers in Raccoon City, Arklay County
                  </p>
                </div>
                <div class="mx-5">
                  <a href="#" class="pr-2 font-medium text-sm leading-tight shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">See More</a>
                </div>
              </div>
            </div>
            <!-- End card 2 -->
            <!-- card 3 -->
            <div class="flex justify-center h-56 bg-[url('../../assets/img/bg-card.png')] bg-no-repeat" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
              <div class="max-w-xs text-white flex flex-col justify-around">
                <div class="mx-5 mt-3">
                    <h5>18th of December, 2019</h5>
                </div>
                <div class="mx-5 text-left">
                  <p class="text-base">
                  Gentek receives positive CHMP opinion for Lupkynis (voclosporin) for the treatment of active lupus nephritis
                  </p>
                </div>
                <div class="mx-5">
                  <a href="#" class="pr-2 font-medium text-sm leading-tight shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out">See More</a>
                </div>
              </div>
            </div>
            <!-- End card 3 -->

          </div>
          <!-- End Content -->
    </div>
  </section>

  <section>
    <footer class="bg-gray-800">
      <div class="mx-0 xl:mx-64 h-max xl:h-[35vh] pt-7 xl:mt-0 mt-52">
        <div class="flex justify-between xl:flex-row flex-col text-white mx-3 mb-3 xl:gap-0 gap-2" >
          <a href="" class="
            focus:outline-none
            focus-visible:ring-2
            ring-neutral-900
            rounded-sm
            z-50
            hover:opacity-75
            transition-opacity
            xl:static flex justify-center
          " aria-label="Go to homepage">
            <img src="<?= base_url("assets/img/logo_hori.png") ?>" class="w-44 xl:w-52" alt="Morent Logo">
          </a>
          <div class="flex justify-center items-center xl:text-base text-sm">
            <label>Copyright &copy Pharma-Assist 2022 - All Right Reversed</label>
          </div>
        </div>
        <div class="w-full bg-white h-[1.2px] rounded" ></div>
        <div class="mt-2 flex xl:flex-row flex-col xl:justify-start justify-center xl:gap-4 gap-2 text-white" >
          <div class="flex justify-center xl:gap-4 gap-6">
              <a href="#" class="hover:text-Blue transition-colors duration-300">Home</a>
              <a href="#" class="hover:text-Blue transition-colors duration-300">Pharma-Assist</a>
          </div>
          <div class="flex justify-center xl:gap-4 gap-6">
            <a href="#" class="hover:text-Blue transition-colors duration-300">e-Procurement</a>
            <a href="#" class="hover:text-Blue transition-colors duration-300">Contact Us</a>
          </div>
        </div>
        <div class="flex xl:justify-between justify-around text-white xl:mt-0 mt-7">
          <div class="flex items-center" >
            <label>Phas 360 (0,00 %)</label>
          </div>
          <div class="flex justify-end items-center gap-2">
          <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-2 mb-2 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-gray-700 hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-5 h-5"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
          </button>

          <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-2 mb-2 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-gray-700 hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-5 h-5"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
          </button>

          <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light" class="inline-block p-2 mb-2 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out bg-gray-700 hover:bg-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
          </button>
          </div>
        </div>
      </div>
    </footer>
  </section>


  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="<?= base_url("assets/js/main.js") ?>"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>
</body>


</html>