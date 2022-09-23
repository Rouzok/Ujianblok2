<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba Coba</title>
    <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
</head>


<body>
    <div class=" w-max" id="wrapHover">
        <a role="menuitem" class=" px-4 py-1 text-neutral-900 hover:text-neutral-500 transition duration-300 ease-in-out flex items-center justify-center" href="#" type="button" id="hoverNav2">
            <span>Latest News</span> 
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 ml-1.5 rotate-0 transition-transform duration-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>

        </a>
        <ul class="hidden absolute top-[1.1rem] right-[45rem] dropdown-menu min-w-max bg-white text-base z-50 py-2 list-none text-left rounded-lg shadow-lg bg-clip-padding border-none" id="ulNav2">
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


    <script>
    const wrap = document.getElementById("wrapHover");
    const ul = document.getElementById("ulNav2");
    wrap.onmouseover = function(){ul.classList.remove("hidden");}
    wrap.onmouseleave = function(){ul.classList.add("hidden");}
</script>
</body>

</html>