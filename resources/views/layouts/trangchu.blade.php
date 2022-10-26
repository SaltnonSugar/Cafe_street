<!doctype html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> Cafe Street</title>
    {{--   css custom --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
</head>
<body>
{{-- header --}}
<header>
    <div class="nav">
        {{--     logo --}}
        <div class="logo">
            <a href="#">
                <img src="{{url('img/logo_coffe.png')}}" alt="Logo">
            </a>
        </div>
        {{--     menu --}}
        <div class="menu">
            <a href="">Home page</a>
            <a href="#menu">Products</a>
            <a href="">Feedback</a>
        </div>
        {{--     search + cart --}}
        <form action="#" method="get">
            <div class="relative drop-shadow-xl">
                <i class="fa-solid fa-magnifying-glass flex absolute inset-y-0 left-0 items-center pl-3 pt-3 pointer-events-none w-5 h-5 text-gray-500 dark:text-gray-400"></i>
                <input type="text" id="email-address-icon"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Cappuccino">
            </div>
        </form>
{{--        cart + login--}}
        <div>
            <a href="#"
               class="text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 <span class="material-symbols-outlined">
                shopping_cart
                </span>
            </a>
            <a href="login"
               class="text-white bg-yellow-300 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                 <span class="material-symbols-outlined">
                person
                </span>
            </a>
        </div>
    </div>
    {{--     slogan --}}
    <div class="flex flex-row font-semibold mt-12 justify-around items-center">
        <div class="content ">
            <h1 class="text-4xl leading-normal mb-10">Enjoy your <span class="text-4xl text-amber-500">coffee </span>
                <br> before your activity</h1>
            <p>Boost your productivity and build your mood <br> with a glass of coffee in the morning </p>
            <br>
            <button
                class="text-white bg-amber-800 hover:bg-yellow-600 font-medium rounded-full text-sm px-6 py-2 text-center inline-flex items-center mr-8">
                Order now
            </button>
            <button><a href="" class="text-xs">More menu</a></button>
        </div>
        <div class="icon">
            <img src="{{url('img/img-hero.png')}}" alt="" class="h-60">
        </div>
    </div>
    <div class="popular_products mt-10">
        <h2 class="font-semibold text-2xl pl-16 mb-4">Popular Now >>></h2>
        {{--     cards --}}
        <div class="cards flex flex-row justify-center gap-4">
            <div class="card rounded-lg bg-white w-fit drop-shadow-2xl p-4 pb-6 outline outline-4 outline-yellow-100">
                {{--             img --}}
                <img src="{{url('img/img_product_3.png')}}" alt="product">
                {{--             name + price --}}
                <h3 class="text-gray-900 text-xl font-medium my-6">Name-price(K)</h3>
                {{--             tag --}}
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left mr-2 leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Hot</span>
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Cold</span>
                <a href="#">
                    <img src="{{url('img/Order-icon.png')}}"
                         alt="" class="inline-block float-right">
                </a>
            </div>
            <div class="card rounded-lg bg-white w-fit drop-shadow-2xl p-4 pb-6 outline outline-4 outline-yellow-100">
                {{--             img --}}
                <img src="{{url('img/img_product_3.png')}}" alt="product">
                {{--             name + price --}}
                <h3 class="text-gray-900 text-xl font-medium my-6">Name-price(K)</h3>
                {{--             tag --}}
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left mr-2 leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Hot</span>
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Cold</span>
                <a href="#">
                    <img src="{{url('img/Order-icon.png')}}"
                         alt="" class="inline-block float-right">
                </a>
            </div>
            <div class="card rounded-lg bg-white w-fit drop-shadow-2xl p-4 pb-6 outline outline-4 outline-yellow-100">
                {{--             img --}}
                <img src="{{url('img/img_product_3.png')}}" alt="product">
                {{--             name + price --}}
                <h3 class="text-gray-900 text-xl font-medium my-6">Name-price(K)</h3>
                {{--             tag --}}
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left mr-2 leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Hot</span>
                <span
                    class="px-6 py-2 border-2 border-yellow-500 text-yellow-500 font-medium text-xs float-left leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Cold</span>
                <a href="#">
                    <img src="{{url('img/Order-icon.png')}}"
                         alt="" class="inline-block float-right">
                </a>
            </div>
        </div>
    </div>
    {{-- service --}}
    <div class="service flex flex-row justify-center gap-20 mt-20 text-center">
        <div class="serviceCard">
            <img src="{{url('img/service_1.png')}}" style="height: 160px; width: 160px">
            <h4 class="font-bold">Choose your coffee</h4>
            <p>There are 20+ coffees for you</p>
        </div>
        <div class="serviceCard">
            <img src="{{url('img/service_2.png')}}">
            <h4 class="font-bold">We delivery it to you</h4>
            <p>Choose delivery service</p>
        </div>
        <div class="serviceCard">
            <img src="{{url('img/service_3.png')}}">
            <h4 class="font-bold">Enjoy your coffee</h4>
            <p>Choose delivery service</p>
        </div>
    </div>
    {{--     About us --}}
    <div class="aboutUs mt-36 mb-10 relative">
        {{--         img --}}
        <div style="width: 40%" id="img_aboutUs">
            <img src="{{url('img/about_us.png')}}" alt=""
                 class="rounded-lg drop-shadow-2xl outline outline-4 outline-amber-50">
        </div>
        <div style="width: 40%" id="comment_aboutUs">
            <h2 class="text-2xl font-semibold m-8">About us</h2>
            <span
                class="text-md font-medium m-8 text-left block">We provide quality coffee, and ready to deliver.</span>
            <span class="text-md m-8 text-left block">We are a company that makes and distributes delicious drinks. our main product is made with a secret recipe and available in stores worldwide.</span>
            <br>
            <button
                class="text-white bg-amber-800 hover:bg-yellow-600 font-medium rounded-full text-sm px-6 py-2 text-center inline-flex items-center m-8">
                Get your coffee
            </button>
        </div>
    </div>
    {{--     Special menu for you --}}
    <h2 class="font-semibold text-2xl pl-16 mb-4" id="menu">Special menu for you</h2>
    <div class="flex flex-row flex-wrap gap-6 justify-center">
        @foreach($products as $row)
            <div class="card rounded-lg bg-white w-fit drop-shadow-2xl p-4 pb-6 outline outline-4 outline-yellow-100">
                {{--             img --}}
                <img src="{{asset($row->img )}}" alt="product">
                {{--             name + price --}}
                <h3 class="text-gray-900 text-xl font-medium my-6">{{$row->name}} - {{$row->price}}(K)</h3>
                <h3>{{$row->description}}</h3>
                <a href="#">
                    <img src="{{url('img/Order-icon.png')}}"
                         alt="" class="inline-block float-right">
                </a>
            </div>
        @endforeach
    </div>
    {{--     Subscribe --}}
    <div class="mt-10 flex flex-col items-center justify-center" id="footer">
        <p class="text-stone-50 text-2xl ">Subscribe to get 50% discount price</p>
        <form action="#">
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                    </svg>
                </div>
                <input type="text" id="email-address-icon"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-96 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Your Email!">
            </div>
        </form>
    </div>
</header>
</body>
</html>
