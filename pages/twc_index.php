<?php 
    include_once('./twc_head.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <title>TailWindCss_TestPage</title>
</head>

<body>
<!-- Body Content 시작 -->
<div class="max-w-7xl mx-auto h-screen" >

    <!-- body 상단 시작 -->
    <div class="flex flex-row mt-5 h-2/6">

        <!-- 구역 1 시작 -->
        <div class="basis-3/5  p-8 ml-3 mb-3 relative h-80 ">

            <!-- 이미지 슬라이드 시작 -->
            <div id= "slides" class="absolute inset-0 z-0">

                <!-- Item 1 -->
                <div id="carousel-item" class="absolute inset-0 h-80">
                    <span class="absolute top-1/4 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                    <img src=".././twc_img/lg_g14961300222974_08.연미색.jpg" class="block absolute object-fill h-80 w-120 " alt="...">
                    <div class="carousel-caption hidden md:block absolute text-center align-bottom">
                        <h5 class="text-xl">First slide label</h5>
                        <p class="align-bottom">Some representative placeholder content for the first slide.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div id="carousel-item" class="absolute inset-0 h-80">
                    <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" class=" block absolute object-fill h-80 w-120  " alt="...">
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Second slide label</h5>
                        <p>Some representative placeholder content for the Second slide.</p>
                    </div> 
                </div>

                <!-- Item 3 -->
                <div id="carousel-item" class="absolute inset-0 h-80">
                    <img src=".././twc_img/lg_f14961300242496_02.물색.jpg" class=" block absolute object-fill h-80 w-120  " alt="...">
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">Third slide label</h5>
                        <p>Some representative placeholder content for the Third slide.</p>
                    </div> 
                </div>
               

                <!-- Slider 표시 -->
                <div class="flex absolute bottom-5 left-1/2 z-10 space-x-3 -translate-x-1/2">
                    <button id="carousel-indicator-1" type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1"></button>
                    <button id="carousel-indicator-2" type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false" aria-label="Slide 2"></button>
                    <button id="carousel-indicator-3" type="button" class="w-3 h-3 rounded-full bg-white" aria-current="false" aria-label="Slide 3"></button>
                </div>

                <!-- Slider 좌우 버튼 -->
                <button id="data-carousel-prev" type="button" class="prevBtn">
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 z-10 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button id="data-carousel-next" type="button" class="nextBtn">
                    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 z-10 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>

            </div>
            <!-- 이미지 슬라이드 끝 -->
        </div>
        <!-- 구역 1 끝 -->


        <!-- 구역 2 시작 -->
        <div class="basis-2/5 w-80 p-8 ml-3 mb-3 ">
            <!-- item 1-->
            <div class="mt-3 mb-3">
                <div>
                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Front of men&#039;s Basic Tee in black." class="float-left w-20 h-15">
                </div>
                <div>
                    <div>
                        <h3 class="text-sm text-gray-700">
                        <a href="#">
                            [연구자 칼럼]
                        </a>
                        </h3>
                        <p>2022년 의료기기의 혁신</p>
                    </div>
                </div>
            </div>

            <!-- item 2-->
            <div class="mt-3 mb-3" >
                <div>
                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Front of men&#039;s Basic Tee in black." class="float-left w-20 h-15">
                </div>
                <div class="ml-3">
                    <div>
                        <h3 class="text-sm text-gray-700">
                        <a href="#">
                            [연구자 칼럼]
                        </a>
                        </h3>
                        <p>2022년 의료기기의 혁신</p>
                    </div>
                </div>
            </div>

            <!-- item 3-->
            <div class="mt-3 mb-3">
                <div>
                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Front of men&#039;s Basic Tee in black." class="float-left w-20 h-15">
                </div>
                <div class="ml-3">
                    <h3 class="text-sm text-gray-700">
                    <a href="#">
                        [연구자 칼럼]
                    </a>
                    </h3>
                    <p>2022년 의료기기의 혁신</p>
                </div>
            </div>

            <!-- item 4-->
            <div class="mt-3 mb-3">
                <div>
                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Front of men&#039;s Basic Tee in black." class="float-left w-20 h-15">
                </div>
                <div>
                    <div>
                        <h3 class="text-sm text-gray-700">
                        <a href="#">
                            [연구자 칼럼]
                        </a>
                        </h3>
                        <p>2022년 의료기기의 혁신</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- 구역 2 끝 -->
    
    </div>
    <!-- body 상단 끝 -->



    <!-- body 중단 시작 -->    
    <div class="flex flex-row mt-5 h-2/6">

        <!-- 구역 3 시작 -->
        <div class="basis-3/5 w-80 p-8 ml-3 mb-3 mt-3 ">
            <p class="font-bold">유망연구실 INFORMATION</p>

            <!-- tab으로 데이터 구분해주기 -->
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class=" flex flex-wrap -mb-px">
                    <li class="tab_list  mr-2" data-tab="tab-1">
                        <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">국가통합공고</a>
                    </li>
                    <li class="tab_list active mr-2" data-tab="tab-2">
                        <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">과제/단행본</a>
                    </li>
                    <li class="tab_list mr-2" data-tab="tab-3">
                        <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">논문 및 특허</a>
                    </li>
                    <li class="tab_list mr-2" data-tab="tab-4">
                        <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">연구보고서</a>
                    </li>
                </ul>
            </div>

            <!-- tab에 따라 달라질 CONTENT -->
            <div id="tabcontent">
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="tab_content target p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">과제/단행본 <strong class="font-medium text-gray-800 dark:text-white">안에 들어갈 </strong>내용입니다.The max-w-screen-{breakpoint} classes can be used to give an element a max-width matching a specific breakpoint. These values are automatically derived from the theme.screens section of your tailwind.config.js file.</p>
                </div>
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings-example" role="tabpanel" aria-labelledby="settings-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts-example" role="tabpanel" aria-labelledby="contacts-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>
            
        </div>
        <!-- 구역 3 끝 -->
        

        <!-- 구역 4 시작 -->
        <div class="basis-2/5 w-80 p-8 ml-3 mb-3 mt-3 ">
            <p class="font-bold">추천게시물</p>
            <!-- tab으로 데이터 구분해주기 -->
            <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="tab_list mr-2">
                        <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">최신 게시물</a>
                    </li>
                    <li class="tab_list active mr-2">
                        <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">많이 본 게시물</a>
                    </li>
                    <li class="tab_list mr-2">
                        <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">공지사항</a>
                    </li>
                </ul>
            </div>

            <!-- tab에 따라 달라질 CONTENT -->
            <div id="tab_content">
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile-example" role="tabpanel" aria-labelledby="profile-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="tab_content p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard-example" role="tabpanel" aria-labelledby="dashboard-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">많이 본 게시물 <strong class="font-medium text-gray-800 dark:text-white">안에 들어갈 </strong>내용입니다.The max-w-screen-{breakpoint} classes can be used to give an element a max-width matching a specific breakpoint. These values are automatically derived from the theme.screens section of your tailwind.config.js file.</p>
                </div>
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings-example" role="tabpanel" aria-labelledby="settings-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
                <div class="tab_content hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts-example" role="tabpanel" aria-labelledby="contacts-tab-example">
                    <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                </div>
            </div>

        </div>
        <!-- 구역 4 끝 -->

    </div>
    <!-- body 중단 끝 -->


    
    <!-- body 하단 시작 -->

    <!-- 구역 5 시작 -->
    <div class="max-w-7xl mx-auto mt-5 h-2/6 p-8 ml-3 mt-3">
        <p class="font-bold float-left mr-3">Professionals</p>
        <p class="font-normal">이달에 주목할 연구실</p>

        <!-- tab으로 데이터 구분해주기 -->
        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px">
                <li class="tab_list mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">기계/물리</a>
                </li>
                <li class="tab_list active mr-2">
                    <a href="#" class="inline-block p-4 text-blue-600 rounded-t-lg border-b-2 border-blue-600 active dark:text-blue-500 dark:border-blue-500" aria-current="page">전자/전기</a>
                </li>
                <li class="tab_list mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">화학/신소재</a>
                </li>
                <li class="tab_list mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">의료/바이오</a>
                </li>
                <li class="tab_list mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">인공지능</a>
                </li>
                <li class="tab_list mr-2">
                    <a href="#" class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">통신미디어</a>
                </li>
            </ul>
        </div>

        <!-- tab에 따라 달라질 CONTENT -->
        <div class="bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">

                    <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    홍길동
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">유망연구실 디지털플랫폼 연구</p>
                        </div>

                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    이순신
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                        </div>

                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    장영실
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                        </div>
                    </div>

                    <div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    홍길동
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">유망연구실 디지털플랫폼 연구</p>
                        </div>

                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    이순신
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                        </div>

                        <div class="group relative">
                            <div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                                <img src=".././twc_img/lg_g14961300199633_011.연회색.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    장영실
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 구역 5 끝 -->
    <!-- body 하단 끝 -->

</div>
<!-- Body Content 끝 -->


<!-- java script -->
<script src = "twc_index.js"></script>

</body>
</html>


<!-- foot -->
<?php 
    include_once('./twc_foot.php')
?>