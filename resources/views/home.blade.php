<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    @vite(['resources/css/app.css','resources/css/home.css'],'build')
    <title>Home</title>
</head>
<body>
<div class="topbar bg-[#006a31] w-full">
    <div class="p-1.5">
        <div class="flex justify-center align-middle text-center text-white font-medium">
            <h4>
                Chào mừng bạn đến với Dola Food!
            </h4>
        </div>
    </div>
</div>
<nav class="align-middle bg-white">
    <div class="container mx-auto py-2 flex max-h-22 items-center">
        <div class="w-2/12 h-full mr-1">
            <img src="https://bizweb.dktcdn.net/100/510/571/themes/941527/assets/logo.png?171604463336" 9
                 class="max-h-20">
        </div>
        <div class="w-4/12 relative flex h-full items-center mx-1">
            <input type="text" id="search"
                   class="bg-[#DDDDDD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   placeholder="Bạn muốn tìm gì?" required/>
            <button type="button" class="w-8 flex justify-center items-center absolute h-full right-0 focus:outline-none text-white bg-[#e31837]
                hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                <i class="fa fa-search "></i>
            </button>
        </div>
        <div class="w-6/12 flex h-full items-center justify-end align-middle gap-1.5">
            <img src="https://bizweb.dktcdn.net/100/510/571/themes/941527/assets/delivery.png?1716044633369"
                 class="h-12"
            >
            <div class="flex-col justify-content-around">
                <p class="font-bold text-black">Giao hàng tận nơi</p>
                <a href="" class="font-bold text-red-500 hover:text-green-600">0396527908</a>
            </div>
            <div
                class="icon  w-10 h-10 h-full flex justify-center items-center rounded-full bg-[#ddd] text-[#006a31]">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                     class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                    <path fill-rule="evenodd"
                          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                </svg>
            </div>
            <div
                class="icon  relative w-10 h-10 h-full flex justify-center items-center rounded-full bg-[#ddd] text-[#006a31]">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                    <path d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z"></path>
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z"></path>
                </svg>
                <span class="rounded-full bg-red-500 w-5 h-5 text-white font-bold
                 absolute bottom-7 left-6 justify-center items-center flex count count_item_pr hidden-count">0</span>
            </div>
            <button type="button" class=" mx-1 focus:outline-none text-white bg-[#e31837] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-[15px] text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt món online</button>
            <button type="button" class=" mx-1 focus:outline-none text-white bg-[#e31837] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-[15px] text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt bàn</button>
        </div>
    </div>
</nav>
<div class="h-14 bg-[#006a31]">

</div>
</body>
</html>
