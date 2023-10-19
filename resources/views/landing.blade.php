@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/assets/slick/slick.css">
<link rel="stylesheet" href="/assets/slick/slick-theme.css">
<style>
    .illaso-absolute{
        left: calc(230px - 80px);
    }

    @media (max-width: 1199px){
        .illaso-absolute{
            left: calc(150px - 75px);
        }
    }

    @media (max-width: 1024px){
        .illaso-absolute{
            left: calc(100px - 78px);
        }
    }

    @media (max-width: 900px){
        .illaso-absolute{
            left: 40px;
        }
    }

    @media (max-width: 768px){
        .illaso-absolute{
            left: 0px;
        }
    }
</style>
@endsection
    
@section('content')
    <section id="banner" class="relative">
        <div class="banner-slider h-70vh overflow-hidden">
            <div class="relative">
                <img src="/assets/images/banner/Image1.jpeg" alt="Banner 1" class="object-center object-cover h-full w-full">
            </div>
            <div class="relative">
                <img src="/assets/images/banner/Banner.jpeg" alt="Banner 2" class="object-center object-cover h-full w-full">
            </div>
            <div class="relative">
                <img src="/assets/images/banner/Banner.jpeg" alt="Banner 2" class="object-center object-cover h-full w-full">
            </div>
            <div class="relative">
                <img src="/assets/images/banner/Banner.jpeg" alt="Banner 2" class="object-center object-cover h-full w-full">
            </div>
            <div class="relative">
                <img src="/assets/images/banner/Banner.jpeg" alt="Banner 2" class="object-center object-cover h-full w-full">
            </div>
        </div>
        <div class="absolute w-full h-1/2 bg-banner-linear bottom-0 z-0"></div>
        <div class="absolute bottom-10 lg:bottom-0 h-1/3 md:h-1/2 lg:h-full illaso-absolute">
            <img src="/assets/images/iLASSO.png" alt="illaso" class="h-full">
        </div>
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2">
            <div class="banner-desc w-screen">
                <div class="py-14 px-14 xl:px-48">
                    <div class="flex">
                        <button class="btn-secondary me-3 bg-black text-white border border-white">View</button>
                        <button class="btn-primary border border-green-500">Buy now</button>
                    </div>
                    <h1 class="text-xl md:text-3xl lg:text-5xl my-3 text-white font-bold">BLACK PINK BORN PINK World Tour Live in Kuala Lumpur</h1>
                    <div class="flex items-center font-medium">
                        <p class="text-green-100 me-3">04-03-2023, 8PM</p>
                        <p class="text-white">Kuala Lumpur, Bukit Jalil National Stadium</p>
                    </div>
                </div>
                <div class="py-14 px-14 xl:px-48">
                    <div class="flex">
                        <button class="btn-secondary me-3 bg-black text-white border border-white">View</button>
                        <button class="btn-primary border border-green-500">Buy now</button>
                    </div>
                    <h1 class="text-xl md:text-3xl lg:text-5xl my-3 text-white font-bold">BLACK PINK BORN PINK World Tour Live in Kaohshiung</h1>
                    <div class="flex items-center font-medium">
                        <p class="text-green-100 me-3">04-03-2023, 8PM</p>
                        <p class="text-white">Kaohshiung, Bukit Jalil National Stadium</p>
                    </div>
                </div>
                <div class="py-14 px-14 xl:px-48">
                    <div class="flex">
                        <button class="btn-secondary me-3 bg-black text-white border border-white">View</button>
                        <button class="btn-primary border border-green-500">Buy now</button>
                    </div>
                    <h1 class="text-xl md:text-3xl lg:text-5xl my-3 text-white font-bold">BLACK PINK BORN PINK World Tour Live in Kaohshiung</h1>
                    <div class="flex items-center font-medium">
                        <p class="text-green-100 me-3">04-03-2023, 8PM</p>
                        <p class="text-white">Kaohshiung, Bukit Jalil National Stadium</p>
                    </div>
                </div>
                <div class="py-14 px-14 xl:px-48">
                    <div class="flex">
                        <button class="btn-secondary me-3 bg-black text-white border border-white">View</button>
                        <button class="btn-primary border border-green-500">Buy now</button>
                    </div>
                    <h1 class="text-xl md:text-3xl lg:text-5xl my-3 text-white font-bold">BLACK PINK BORN PINK World Tour Live in Kaohshiung</h1>
                    <div class="flex items-center font-medium">
                        <p class="text-green-100 me-3">04-03-2023, 8PM</p>
                        <p class="text-white">Kaohshiung, Bukit Jalil National Stadium</p>
                    </div>
                </div>
                <div class="py-14 px-14 xl:px-48">
                    <div class="flex">
                        <button class="btn-secondary me-3 bg-black text-white border border-white">View</button>
                        <button class="btn-primary border border-green-500">Buy now</button>
                    </div>
                    <h1 class="text-xl md:text-3xl lg:text-5xl my-3 text-white font-bold">BLACK PINK BORN PINK World Tour Live in Kaohshiung</h1>
                    <div class="flex items-center font-medium">
                        <p class="text-green-100 me-3">04-03-2023, 8PM</p>
                        <p class="text-white">Kaohshiung, Bukit Jalil National Stadium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="category" class="bg-gray-200">
        <div class="container py-16 px-5 mx-auto">
            <div class="flex justify-between">
                <div class="flex text-xl xl:text-3xl">
                    <h1 class="capitalize font-bold me-2">browse</h1>
                    <h1 class="uppercase font-medium text-green-400">categories</h1>
                </div>
                <a href="#" class="capitalize text-sm underline-offset-4 underline me-0 md:me-28">View all (14)</a>
            </div>
            <div class="category-slider mt-10">
                <div class="text-center">
                    <img src="/assets/images/category/all.png" alt="All" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">All</p>
                    <p>123 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
                <div class="text-center">
                    <img src="/assets/images/category/art.png" alt="Art" class="rounded-full mx-auto mb-4">
                    <p class="text-xl font-bold">Arts</p>
                    <p>6 events</p>
                </div>
            </div>
        </div>
    </section>
    <section id="upcoming-events" class="bg-gray-100">
        <div class="container py-16 px-5 mx-auto">
            <div class="grid grid-cols-4 gap-4 mb-10">
                <div class="col-span-4 lg:col-span-3">
                    <div class="flex justify-between">
                        <div class="flex text-xl xl:text-3xl">
                            <h1 class="capitalize font-bold me-2">upcoming</h1>
                            <h1 class="uppercase font-medium text-green-400">events</h1>
                        </div>
                        <a href="#" class="capitalize text-sm underline-offset-4 underline me-0 md:me-28">View all (34)</a>
                    </div>
                    <div class="upcoming-events mt-10">
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img1.png" alt="Juicy Luicy. SENTIMENTAL Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Juicy Luicy. SENTIMENTAL Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img2.png" alt="AEEZ | The Fellowship : Break the wall KL Tour">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">AEEZ | The Fellowship : Break the wall KL Tour</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img3.png" alt="Ed Sheeran - Eyes Closed Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Ed Sheeran - Eyes Closed Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img4.png" alt="TAYLOR SWIFT The Eras Tour Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">TAYLOR SWIFT The Eras Tour Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img5.png" alt="BIFFY CLYRO ASIA Tour Architects">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">BIFFY CLYRO ASIA Tour Architects</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Concert de presentation de saison 2023">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Concert de presentation de saison 2023</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Alter Bridge | Pawas & Kings Malaysia Concerts 2023">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">Alter Bridge | Pawas & Kings Malaysia Concerts 2023</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Concert Marina Rebeka 2023: Royal de Wallonie Liege">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">Concert Marina Rebeka 2023: Royal de Wallonie Liege</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-1">
                    <img src="/assets/images/banner/Middle Banner.png" alt="Middle Banner" class="mb-10 w-full">
                    <img src="/assets/images/banner/Middle Banner Small.png" alt="Middle Banner Small" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <section id="videos" class="bg-black">
        <div class="container py-16 px-5 mx-auto">
            <div class="flex justify-between">
                <div class="flex text-xl xl:text-3xl">
                    <h1 class="capitalize text-white font-bold me-2">exclusive</h1>
                    <h1 class="uppercase font-medium text-green-400">videos</h1>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-4 my-10">
                <div class="col-span-3 lg:col-span-2">
                    <video id="videoElement" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controls controlsList="nodownload"></video>
                </div>
                <div class="col-span-3 lg:col-span-1 max-h-60vh overflow-auto">
                    <div class="border rounded-lg border-gray-900 p-5">
                        <div class="grid grid-cols-5 gap-4 items-center mb-3">
                            <div class="col-span-2">
                                <video preload="none" poster="/assets/images/events/Event Img2.png" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controlsList="nodownload"></video>
                            </div>
                            <div class="col-span-3 text-white">
                                <p class="text-md font-bold line-clamp-3 leading-tight">David Kushner - Daylight (Official Music Video)</p>
                                <p class="text-sm mt-2">David Kushner</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-4 items-center mb-3">
                            <div class="col-span-2">
                                <video preload="none" poster="/assets/images/events/Event Img3.png" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controlsList="nodownload"></video>
                            </div>
                            <div class="col-span-3 text-white">
                                <p class="text-md font-bold line-clamp-3 leading-tight">Superstar - Painting Pictures Live Mic Performance</p>
                                <p class="text-sm mt-2">Superstar</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-4 items-center mb-3">
                            <div class="col-span-2">
                                <video preload="none" poster="/assets/images/events/Event Img4.png" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controlsList="nodownload"></video>
                            </div>
                            <div class="col-span-3 text-white">
                                <p class="text-md font-bold line-clamp-3 leading-tight">Superstar - Painting Pictures Live Mic Performance</p>
                                <p class="text-sm mt-2">Superstar</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-4 items-center mb-3">
                            <div class="col-span-2">
                                <video preload="none" poster="/assets/images/events/Event Img5.png" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controlsList="nodownload"></video>
                            </div>
                            <div class="col-span-3 text-white">
                                <p class="text-md font-bold line-clamp-3 leading-tight">Superstar - Painting Pictures Live Mic Performance</p>
                                <p class="text-sm mt-2">Superstar</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-4 items-center mb-3">
                            <div class="col-span-2">
                                <video preload="none" poster="/assets/images/events/Event Img6.png" src="/assets/video/VENOM_ LET THERE BE CARNAGE - Official Trailer 2 (HD).mp4" class="video-element rounded-lg" controlsList="nodownload"></video>
                            </div>
                            <div class="col-span-3 text-white">
                                <p class="text-md font-bold line-clamp-3 leading-tight">Superstar - Painting Pictures Live Mic Performance</p>
                                <p class="text-sm mt-2">Superstar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="ongoing-events" class="bg-gray-100">
        <div class="container py-16 px-5 mx-auto">
            <div class="grid grid-cols-4 gap-4 mb-10">
                <div class="col-span-4 lg:col-span-3">
                    <div class="flex justify-between">
                        <div class="flex text-xl xl:text-3xl">
                            <h1 class="capitalize font-bold me-2">ongoing</h1>
                            <h1 class="uppercase font-medium text-green-400">events</h1>
                        </div>
                        <a href="#" class="capitalize text-sm underline-offset-4 underline me-0 md:me-28">View all (14)</a>
                    </div>
                    <div class="ongoing-events mt-10">
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img1.png" alt="Juicy Luicy. SENTIMENTAL Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Juicy Luicy. SENTIMENTAL Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img2.png" alt="AEEZ | The Fellowship : Break the wall KL Tour">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">AEEZ | The Fellowship : Break the wall KL Tour</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img3.png" alt="Ed Sheeran - Eyes Closed Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Ed Sheeran - Eyes Closed Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img4.png" alt="TAYLOR SWIFT The Eras Tour Live in Kuala Lumpur">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">TAYLOR SWIFT The Eras Tour Live in Kuala Lumpur</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img5.png" alt="BIFFY CLYRO ASIA Tour Architects">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">BIFFY CLYRO ASIA Tour Architects</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                            <div class="relative">
                                <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Concert de presentation de saison 2023">
                                <div class="absolute top-5 left-5">
                                    <div class="flex text-sm">
                                        <span class="badge me-3">Concert</span>
                                        <span class="badge">Music</span>
                                    </div>
                                </div>
                                <div class="absolute bottom-5 right-5">
                                    <div class="fav-icon"></div>
                                </div>
                            </div>
                            <div class="bg-white p-6">
                                <div class="flex justify-between mb-3">
                                    <div class="flex">
                                        <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                        <p class="font-bold text-sm">RM145 - RM365</p>
                                    </div>
                                    <div class="flex text-green-600 items-center text-sm">
                                        <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                        <p class="font-bold">48h32m</p>
                                    </div>
                                </div>
                                <div class="font-bold text-lg mb-2 line-clamp-2	">Concert de presentation de saison 2023</div>
                                <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                <div class="flex text-xs items-center mt-2">
                                    <p class="me-2">05-05-2023</p>
                                    <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                </div>
                                <div class="pt-4 flex">
                                    <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                    <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                </div>
                                </div>
                            </div>
                        </div>   
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Alter Bridge | Pawas & Kings Malaysia Concerts 2023">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">Alter Bridge | Pawas & Kings Malaysia Concerts 2023</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="Concert Marina Rebeka 2023: Royal de Wallonie Liege">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">Concert Marina Rebeka 2023: Royal de Wallonie Liege</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="">
                            <div class="rounded-lg hover:shadow-lg md:m-3 overflow-hidden">
                                <div class="relative">
                                    <img class="w-full" src="/assets/images/events/Event Img6.png" alt="World of Dance: Season Four Live in Kuala Lumpur">
                                    <div class="absolute top-5 left-5">
                                        <div class="flex text-sm">
                                            <span class="badge me-3">Concert</span>
                                            <span class="badge">Music</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-5 right-5">
                                        <div class="fav-icon"></div>
                                    </div>
                                </div>
                                <div class="bg-white p-6">
                                    <div class="flex justify-between mb-3">
                                        <div class="flex">
                                            <p class="text-gray-700 capitalize me-2 text-sm">from</p>
                                            <p class="font-bold text-sm">RM145 - RM365</p>
                                        </div>
                                        <div class="flex text-green-600 items-center text-sm">
                                            <div class="bg-green-600 w-2 h-2 rounded-full me-2"></div>
                                            <p class="font-bold">48h32m</p>
                                        </div>
                                    </div>
                                    <div class="font-bold text-lg mb-2 line-clamp-2	">World of Dance: Season Four Live in Kuala Lumpur</div>
                                    <p class="text-gray-700 text-sm">Kuala Lumpur, Lalaport BBCC</p>
                                    <div class="flex text-xs items-center mt-2">
                                        <p class="me-2">05-05-2023</p>
                                        <div class="bg-gray-200 text-gray-700 py-1 px-2 rounded-md font-bold">01.30 PM</div>
                                    </div>
                                    <div class="pt-4 flex">
                                        <button class="btn-secondary me-3 w-1/2" onclick="window.location.href = '/view-event'">View</button>
                                        <button class="btn-primary border border-green-500 w-1/2 hover:border-green-100 focus:border-green-900">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-span-4 lg:col-span-1">
                    <img src="/assets/images/banner/Middle Banner.png" alt="Middle Banner" class="mb-10 w-full">
                    <img src="/assets/images/banner/Middle Banner Small.png" alt="Middle Banner Small" class="w-full">
                </div>
            </div>
        </div>
    </section>
    <section id="past-events" class="bg-gray-200">
        <div class="container py-16 px-5 mx-auto">
            <div class="flex justify-between">
                <div class="flex text-xl xl:text-3xl">
                    <h1 class="capitalize font-bold me-2">past</h1>
                    <h1 class="uppercase font-medium text-green-400">events</h1>
                </div>
                <a href="#" class="capitalize text-sm underline-offset-4 underline me-0 md:me-28">View all (84)</a>
            </div>
            <div class="past-events mt-10">
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img1.png" alt="New Year’s Concert 2023 / Concert du Nouvel An 2023">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">New Year’s Concert 2023 / Concert du Nouvel An 2023</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img2.png" alt="Saturday Night Fever at The Kuala Lumpur, Malaysia">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Saturday Night Fever at The Kuala Lumpur, Malaysia</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img3.png" alt="2022 Epcot Flower & Garden Festival Guide">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">2022 Epcot Flower & Garden Festival Guide</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img4.png" alt="Comedy Show New Orleans Lakefront Arena">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Comedy Show New Orleans Lakefront Arena</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img5.png" alt="Mayday concert in Malaysia  Fly to 2022">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Mayday concert in Malaysia  Fly to 2022</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img6.png" alt="Jay Chou Concert 2022 Malaysia">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Jay Chou Concert 2022 Malaysia</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img7.png" alt="Top Music Festival to go in Aisa 2022 Live in Malaysia">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Top Music Festival to go in Aisa 2022 Live in Malaysia</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img8.png" alt="Taylor Swift: NPR Music Tiny Desk Concert">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Taylor Swift: NPR Music Tiny Desk Concert</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img9.png" alt="Salimataw 10 presents Jazz Concert">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Salimataw 10 presents Jazz Concert</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img10.png" alt="EXO Live Tour in Asia-Pacific 2022">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">EXO Live Tour in Asia-Pacific 2022</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img11.png" alt="Pink Malaysia Bukit Jalil World Tour 2022">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">Pink Malaysia Bukit Jalil World Tour 2022</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img12.png" alt="A Virtual Concert Featuring Post Malone">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">A Virtual Concert Featuring Post Malone</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="grid grid-cols-2 gap-3 mb-10">
                        <div class="col-span-1">
                            <img class="w-full" src="/assets/images/events/Past Event Img12.png" alt="A Virtual Concert Featuring Post Malone">
                        </div>
                        <div class="col-span-1">
                            <div class="rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal pe-2">
                                <div class="mb-8">
                                    <div class="font-bold mb-2 line-clamp-3 min-h-74px">A Virtual Concert Featuring Post Malone</div>
                                    <div class="text-gray-700 text-sm">
                                        <p>Kuala Lumpur, Lalaport BBCC</p>
                                        <p class="mt-2">05-05-2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-green-50">
        <div class="container py-16 px-5 mx-auto">
            <div class="text-center text-xl xl:text-3xl">
                <h1 class="capitalize font-bold me-2">Are you hosting a concert, Seminar or Sport Event? We can help</h1>
            </div>
            <div class="text-center my-5">
                <button class="btn-primary capitalize w-2/3 lg:w-1/3">Create Event Now</button>
            </div>
            <div class="flex justify-center font-bold">
                <div class="text-green-700 me-2">
                Chat with us 
                </div>
                now to get you started.
            </div>
        </div>
    </section>
@endsection

@section('script')
    @include('js.landing-js')
@endsection
