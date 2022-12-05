<!DOCTYPE html> <!-- &copy Rouzok -->
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo_ver.png');  ?>" type="image/x-icon">
	<script src="https://cdn.tailwindcss.com"></script>
</head>
	
<body>

<nav class="mx-auto bg-gray-900 shadow fixed top-0 z-50 xl:w-full w-full">
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
            " href="<?= base_url("shop") ?>">Home</a>

        <!-- Hover Dropdown -->
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center group" id="wrapHover1">
          <a role="menuitem" class="group px-4 py-1 text-white group-hover:text-white/60 hover:text-white/60 transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav1">
            Medicine
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute right-[35rem] top-[3.8rem] dropdown-menu xl:w-max w-full bg-gray-800/95 text-base z-50 py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-gray-800 flex flex-col self-center" id="ulNav1">
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
        <div class="xl:w-max w-full flex xl-flex-row flex-col justify-center group" id="wrapHover2">
          <a role="menuitem" class="group px-4 py-1 text-white/90 hover:text-white/60 group-hover:text-white/60 transition duration-300 ease-in-out flex items-center justify-center xl:w-max w-full" href="#" type="button" id="hoverNav2">
            Help
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 group-hover:rotate-90 transition-transform duration-300">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

          </a>
          <ul class="hidden xl:absolute top-[3.8rem] right-[22rem] dropdown-menu xl:w-max w-full bg-gray-800/95 text-base z-50 py-2 list-none xl:text-left text-center rounded-lg shadow-lg bg-clip-padding transition duration-300 border-2 border-gray-800 flex flex-col self-center" id="ulNav2">
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
        
        <div class="flex mx-6 gap-4 text-white">
            <a href="<?= base_url("auth/login") ?>" class="hover:text-white/60 duration-300">Login</a>
            <a href="<?= base_url("auth/register") ?>" class="hover:text-white/60 duration-300" >Register</a>
        </div>

      </div>
    </div>
  </nav>	

	<section class="h-full gradient-form bg-gray-800 md:h-screen">
		<div class="flex justify-center mt-16 h-full">
			<div class="flex justify-center items-center flex-wrap h-65 g-6 text-gray-800">
				<div class="xl:w-10/12">
					<div class="block bg-white shadow-lg rounded-lg">
						<div class="lg:flex lg:flex-wrap g-0">
							<div class="lg:w-6/12 px-4 md:px-0">
								<div class="md:p-12 md:mx-6">
									<div class="text-center">
										<img
											class="mx-auto w-48"
											src="<?= base_url('assets/img/logo_ver.png') ?>"
											alt="logo"
										/>
										<h4 class="text-xl font-semibold mt-1 mb-12 pb-1"></h4>
									</div>
									<form method="post">
										<p class="mb-4">Please login to your account</p>
											<?php if($this->session->flashdata('message_login_error')): ?>
												<div class="invalid-feedback">	
													<?= $this->session->flashdata('message_login_error') ?> <!-- kalo pake set_flashdata()  -->
												</div>
											<?php endif ?>
										<div class="mb-4">
											<input name="username"
											type="text"
											class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none <?= form_error('username')?'is-invalid':'' ?>"
											placeholder="Username Or Email"
											value="<?= set_value('username')?>"
											/><?= form_error('username') ?>
										</div>
										<div class="mb-4">
											<input name="password"
											type="password"
											class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none <?= form_error('password')?'is-invalid':'' ?>"
											placeholder="Password"
											value="<?= set_value('password')?>"
											/><?= form_error('password') ?>
										</div>
										<div class="text-center pt-1 mb-12 pb-1">
											<input type="submit"
											class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md bg-blue-700 hover:bg-blue-800 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
											value="Login"
											data-mdb-ripple="true"
											data-mdb-ripple-color="light"/>
										</div>
										<div class="flex justify-center gap-1">Or you have account just click <a href="<?= base_url('user/daftar') ?>" class="text-blue-400 hover:text-blue-800">here</a></div>

									
									</form>
								</div>
							</div>
						<div class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
							style="background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);">
							<div class="text-white px-4 py-6 md:p-12 md:mx-6">
								<h4 class="text-xl font-semibold mb-6">We are more than just a company</h4>
								<p class="text-sm">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <!-- &copy Rouzok -->
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url("assets/js/main.js") ?>"></script>
</body>

</html>
