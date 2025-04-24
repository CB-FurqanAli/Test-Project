<x-layout>

    <div class="flex">
        <!-- Sidebar -->
      <x-sidebar href="#"></x-sidebar>
        <!-- Main Content -->
        <div class="md:flex-1 ">
            <div class=" max-w-7xl mx-auto">
                <!-- Header -->
                <header class="bg-white z-50 fixed max-w-7xl w-full">
                    <div class="flex items-center justify-between px-4 py-3">
                        <div class="flex items-center">
                            <div class="relative mx-auto text-gray-600 ml-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                     <svg class="w-3.5 h-3.5 text-gray-600 dark:text-white" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                              d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                    </svg>
                    </span>
                                <input
                                    class="bg-gray-100 focus:outline-0 rounded-md pl-7 pr-4 py-2 text-sm font-mono w-[560px] placeholder-gray-600"
                                    type="search"
                                    placeholder="Search">
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex items-center space-x-2 mr-4">
                                <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Test mode</span>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div
                                        class="relative w-11 h-6 bg-gray-100 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-gray-50 dark:peer-focus:ring-[#E09366] rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-100 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-[#E09366] peer-checked:bg-[#E09366] dark:peer-checked:bg-[#E09366]"></div>
                                </label>
                            </div>

                            <button class="p-2 mr-1 text-gray-600 rounded-full hover:bg-gray-100">
                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.25 0a.75.75 0 0 1 .75.75V3h2.25a.75.75 0 0 1 0 1.5H13V7a.75.75 0 0 1-1.5 0V4.5H9A.75.75 0 0 1 9 3h2.5V.75a.75.75 0 0 1 .75-.75ZM5 2H2a.5.5 0 0 0-.5.5v3A.5.5 0 0 0 2 6h3a.5.5 0 0 0 .5-.5v-3A.5.5 0 0 0 5 2ZM2 .5a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2Zm3 10H2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5ZM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H2Zm8.5 1.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5Zm-2 .5a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2v-3Z"
                                          clip-rule="evenodd" fill="#474E5A"></path>
                                </svg>
                            </button>
                            <button class="p-2 mr-1 text-gray-600 rounded-full hover:bg-gray-100">
                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M6.886 4.923c-.232.25-.386.63-.386 1.122a.75.75 0 1 1-1.5 0c0-.803.254-1.57.788-2.144C6.33 3.32 7.1 3 8 3c.9 0 1.67.32 2.212.901.534.574.788 1.341.788 2.144 0 1.234-.869 1.922-1.436 2.332-.094.068-.178.127-.255.181-.19.134-.33.233-.449.343a.64.64 0 0 0-.11.121V9.5a.75.75 0 0 1-1.5 0V9c0-.563.326-.956.593-1.202.198-.183.457-.364.672-.516l.17-.121c.559-.404.815-.693.815-1.116 0-.492-.154-.872-.386-1.122C8.888 4.68 8.533 4.5 8 4.5c-.533 0-.888.18-1.114.423Z"
                                          fill="#474E5A"></path>
                                    <path d="M9 12a1.001 1.001 0 0 1-2 0 1.001 1.001 0 0 1 2 0Z"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8 14.5A6.5 6.5 0 1 0 1.5 8c0 1.022.179 1.608.603 2.399.316.59.407 1.313.178 2.003l-.66 1.976 1.977-.659a2.541 2.541 0 0 1 2.004.178c.79.424 1.376.603 2.398.603ZM8 16a8 8 0 1 0-8-8c0 1.29.25 2.117.78 3.107.136.252.168.549.078.82l-.807 2.42a1 1 0 0 0-.051.315V15a1 1 0 0 0 1 1h.338a1 1 0 0 0 .316-.051l2.419-.807c.271-.09.568-.057.82.078.99.53 1.817.78 3.107.78Z"
                                          fill="#474E5A"></path>
                                </svg>
                            </button>

                            <button class="p-2 mr-1 text-gray-600 relative rounded-full hover:bg-gray-100">
                                <div
                                    class="bg-blue-500 border border-white h-2 w-2 absolute  top-1.5 right-1.5 rounded-full"></div>
                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M5.005 13H2.79a1.792 1.792 0 0 1-1.628-2.532l.477-1.051a11.583 11.583 0 0 0 1.01-4.018l.027-.41A5.34 5.34 0 0 1 8 0a5.34 5.34 0 0 1 5.324 4.989l.027.41a11.6 11.6 0 0 0 1.01 4.018l.477 1.05A1.787 1.787 0 0 1 13.21 13h-2.215c0 1.657-1.34 3-2.995 3a2.997 2.997 0 0 1-2.995-3Zm-2.48-1.912.478-1.05a13.086 13.086 0 0 0 1.14-4.539l.027-.41A3.84 3.84 0 0 1 8 1.5a3.84 3.84 0 0 1 3.83 3.589l.027.41c.104 1.57.49 3.107 1.14 4.538l.477 1.051a.291.291 0 0 1-.264.412H2.79a.291.291 0 0 1-.264-.412ZM6.504 13a1.499 1.499 0 1 0 2.995 0H6.503Z"
                                          fill="#474E5A"></path>
                                </svg>
                            </button>

                            <button class="p-2 mr-1 text-gray-600 rounded-full hover:bg-gray-100">
                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                     xmlns="http://www.w3.org/2000/svg"
                                     class="⚙   as-3m as-3n as-3o as-15 as-3p as-6e as-6f ⚙1bbw8ge">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 1.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Z"
                                          fill="#474E5A"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M7.41 14.5h1.18l.053-.832a1.753 1.753 0 0 1 1.08-1.509 1.752 1.752 0 0 1 1.83.303l.625.552.836-.835-.552-.626a1.752 1.752 0 0 1-.303-1.83 1.753 1.753 0 0 1 1.509-1.08l.832-.052V7.409l-.832-.052a1.753 1.753 0 0 1-1.509-1.08 1.752 1.752 0 0 1 .303-1.83l.552-.625-.836-.836-.625.552a1.752 1.752 0 0 1-1.83.303 1.753 1.753 0 0 1-1.08-1.509L8.59 1.5H7.409l-.052.832a1.753 1.753 0 0 1-1.08 1.509 1.752 1.752 0 0 1-1.83-.303l-.625-.552-.836.836.552.625a1.753 1.753 0 0 1-1.205 2.91L1.5 7.41v1.182l.832.052a1.753 1.753 0 0 1 1.509 1.08 1.752 1.752 0 0 1-.303 1.83l-.552.625.836.836.625-.552a1.752 1.752 0 0 1 1.83-.303 1.753 1.753 0 0 1 1.08 1.509l.052.832Zm-2.896-.122c.064-.04.125-.085.183-.136l.742-.655a.252.252 0 0 1 .264-.042.25.25 0 0 1 .157.216l.062.989a1.34 1.34 0 0 0 .07.35c.18.526.679.9 1.26.9h1.495a1.334 1.334 0 0 0 1.331-1.25l.062-.989a.253.253 0 0 1 .157-.216.252.252 0 0 1 .263.042l.743.655a1.338 1.338 0 0 0 .297.199c.5.244 1.117.156 1.528-.256l1.057-1.057a1.334 1.334 0 0 0 .057-1.825l-.655-.742a.252.252 0 0 1-.042-.264.253.253 0 0 1 .216-.157l.989-.062a1.341 1.341 0 0 0 .35-.07c.526-.18.9-.679.9-1.26V7.252a1.334 1.334 0 0 0-1.25-1.331l-.989-.062a.253.253 0 0 1-.216-.157.252.252 0 0 1 .042-.264l.655-.742a1.34 1.34 0 0 0 .199-.297c.244-.5.156-1.117-.256-1.528l-1.057-1.057a1.334 1.334 0 0 0-1.825-.057l-.742.655a.252.252 0 0 1-.264.042.253.253 0 0 1-.157-.216l-.062-.989a1.34 1.34 0 0 0-.07-.35A1.33 1.33 0 0 0 8.749 0H7.252a1.334 1.334 0 0 0-1.331 1.25l-.062.989a.253.253 0 0 1-.157.216.252.252 0 0 1-.264-.042l-.742-.655a1.34 1.34 0 0 0-.297-.199 1.334 1.334 0 0 0-1.528.256L1.815 2.872a1.334 1.334 0 0 0-.057 1.825l.655.743c.064.072.08.174.042.263a.253.253 0 0 1-.216.157l-.989.062a1.34 1.34 0 0 0-.35.07c-.526.18-.9.679-.9 1.26v1.495a1.334 1.334 0 0 0 1.25 1.331l.989.062c.096.006.18.068.216.157a.252.252 0 0 1-.042.264l-.655.742a1.344 1.344 0 0 0-.199.297c-.244.5-.156 1.117.256 1.528l1.057 1.057a1.334 1.334 0 0 0 1.642.193Z"
                                          fill="#474E5A"></path>
                                </svg>
                            </button>

                            <div class="w-5 h-5 bg-[#675DFF] text-white rounded-full flex items-center justify-center my-1">
                                <svg aria-hidden="true" width="12" height="12" viewBox="0 0 12 12"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.85 1a.85.85 0 1 0-1.7 0v4.15H1a.85.85 0 0 0 0 1.7h4.15V11a.85.85 0 1 0 1.7 0V6.85H11a.85.85 0 1 0 0-1.7H6.85V1Z"
                                        fill="white"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="pl-4 py-28">
                    <!-- Activate Payments Section -->
                    <div class="flex justify-between items-start mb-14">
                        <div class="max-w-3xl">
                            <h1 class="text-3xl font-bold text-black">Activate payments on your account</h1>
                            <p class="text-gray-600 text-xl mt-2 font-semibold">
                                Fill out your business profile to accept payments. Any progress you make will be saved,
                                so you can always finish later.
                            </p>
                            <button
                                class="mt-5 bg-indigo-600 text-white px-4 py-2 font-semibold rounded-lg flex items-center">
                                Activate payments
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <!-- Decorative elements - more accurate to the image -->
                            <svg viewBox="0 0 296 140" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 style="width: 296px; height: 140px;">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M0 116.007V62.9168L238.444 12.2339V65.3238L0 116.007Z" fill="#80e9ff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M86.9833 139.062V85.9719L296.001 41.5439V94.6339L86.9833 139.062Z"
                                      fill="#7a73ff"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M238.445 65.3237L86.7902 97.5589V86.0127L238.445 53.7776V65.3237Z"
                                      fill="#0048e5"></path>
                            </svg>
                        </div>
                    </div>

                    <!-- Today Section -->
                    <div class="mb-24">
                        <h2 class="text-3xl font-bold text-black pb-3 border-b border-gray-300">Today</h2>

                        <div class="flex gap-6 mt-10 max-w-full">
                            <!-- Gross Volume Chart -->
                            <div class="flex-1">
                                <h3 class="text-sm text-gray-700 font-medium mb-2">Gross volume</h3>
                                <!-- Empty div for chart with a line drawing -->
                                <div class="h-40 bg-blue-50 relative">
                                    <!-- SVG line chart - simplified version of the one in the image -->
                                    <svg viewBox="0 0 400 100" class="w-full h-full">
                                        <path d="M0,80 Q50,75 100,70 T200,60 T300,40 T400,30" fill="none" stroke="#6B7280"
                                              stroke-width="1.5"/>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex flex-col max-w-sm w-full space-y-16">
                                <!-- GBP Balance -->
                                <div class="">
                                    <h3 class="text-sm text-gray-700 font-medium mb-4">GBP balance</h3>
                                    <div class="h-[1px] w-5 bg-gray-500"></div>
                                </div>

                                <!-- Payouts -->
                                <div class="border-t pt-6">
                                    <h3 class="text-sm text-gray-700 font-medium mb-4">Payouts</h3>
                                    <div class="h-[1px] w-5 bg-gray-500"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Your Overview Section -->
                    <div class="border-b border-gray-300">

                        <h2 class="text-3xl font-bold text-black">Your overview</h2>

                        <div class="flex flex-wrap items-center justify-between my-4">
                            <div class="flex items-center space-x-3 flex-wrap">
                                <button
                                    class="border border-gray-300 rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-[3px] focus:ring-[#B8D9EF]">
                                    Last 7 days
                                </button>
                                <span class="text-gray-600 text-sm">compared to</span>
                                <button
                                    class="border border-gray-300 rounded-lg px-3 py-1 text-sm flex items-center focus:outline-none focus:ring-[3px] focus:ring-[#B8D9EF]">
                                    Previous period
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M19 9l-7 7-7-7"/>
                                    </svg>
                                </button>
                                <button
                                    class="border border-gray-300 rounded-lg pl-3 py-1 text-sm flex items-center focus:outline-none focus:ring-[3px] focus:ring-[#B8D9EF]">
                                    Daily
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5"
                                         stroke="currentColor" class="size-6 ml-2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"/>
                                    </svg>

                                </button>
                            </div>
                            <div class="flex items-center space-x-2 mt-4 sm:mt-0">
                                <button
                                    class="border border-gray-300 rounded-lg px-3 py-1 text-sm flex items-center focus:outline-none focus:ring-[3px] focus:ring-[#B8D9EF]">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                         viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Add
                                </button>
                                <button
                                    class="border border-gray-300 rounded-lg px-3 py-1 text-sm flex items-center focus:outline-none focus:ring-[3px] focus:ring-[#B8D9EF]">
                                    <svg aria-hidden="true" width="12" height="12" viewBox="0 0 12 12"
                                         xmlns="http://www.w3.org/2000/svg" class="mr-2">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M11.368 4.49a.997.997 0 0 1 .632.93v1.16a1 1 0 0 1-.917.996l-.819.069a.126.126 0 0 0-.105.078.126.126 0 0 0 .02.13l.53.627a.999.999 0 0 1-.056 1.353l-.82.82a1 1 0 0 1-1.353.056l-.628-.53a.126.126 0 0 0-.13-.02.126.126 0 0 0-.077.105l-.069.819A1 1 0 0 1 6.58 12H5.42a1 1 0 0 1-.996-.917l-.069-.819a.126.126 0 0 0-.078-.105.126.126 0 0 0-.13.02l-.627.53a1.002 1.002 0 0 1-1.353-.056l-.82-.82a1 1 0 0 1-.056-1.354l.53-.627a.126.126 0 0 0 .02-.13.126.126 0 0 0-.105-.077l-.819-.069A1 1 0 0 1 0 6.58V5.42a1 1 0 0 1 .917-.996l.819-.069a.126.126 0 0 0 .105-.078.126.126 0 0 0-.02-.13l-.53-.627a1 1 0 0 1 .056-1.353l.82-.82a1 1 0 0 1 1.353-.056l.628.53a.123.123 0 0 0 .13.02.126.126 0 0 0 .077-.105l.069-.819A1 1 0 0 1 5.42 0h1.16a1 1 0 0 1 .996.917l.069.819a.126.126 0 0 0 .078.105.124.124 0 0 0 .13-.02l.627-.53a1 1 0 0 1 1.353.056l.82.82a1 1 0 0 1 .056 1.353l-.53.628a.126.126 0 0 0-.02.13.126.126 0 0 0 .105.077l.82.069a1 1 0 0 1 .284.066Zm-1.762-1.6-.382.451a1.376 1.376 0 0 0 .937 2.261l.589.05v.699l-.59.049a1.376 1.376 0 0 0-.936 2.26l.382.452-.495.495-.451-.382a1.376 1.376 0 0 0-2.261.936l-.05.59H5.65l-.049-.59a1.376 1.376 0 0 0-2.26-.936l-.452.382-.495-.495.382-.451A1.376 1.376 0 0 0 1.84 6.4l-.59-.05v-.7l.59-.049a1.376 1.376 0 0 0 .936-2.26l-.382-.452.495-.495.451.382a1.376 1.376 0 0 0 2.261-.936l.05-.59h.699l.049.59a1.376 1.376 0 0 0 2.26.936l.452-.382.495.495Z"
                                              fill="#373C46"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M6 7.25a1.25 1.25 0 1 0 0-2.5 1.25 1.25 0 0 0 0 2.5ZM6 8.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"
                                              fill="#373C46"></path>
                                    </svg>
                                    Edit
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">Payments</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg aria-hidden="false" aria-label="Hidden" width="14" height="14"
                                                 viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" class="ml-1">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M14.53 2.53a.75.75 0 0 0-1.06-1.06l-1.366 1.365C10.871 2.172 9.444 1.75 8 1.75c-2.007 0-3.977.814-5.445 1.956C1.114 4.828 0 6.396 0 8c0 1.604 1.114 3.172 2.555 4.294l.051.04L1.47 13.47a.75.75 0 1 0 1.06 1.06l1.366-1.365c1.233.663 2.66 1.085 4.104 1.085 2.007 0 3.977-.814 5.445-1.956C14.886 11.172 16 9.604 16 8c0-1.604-1.114-3.172-2.555-4.294a7.156 7.156 0 0 0-.051-.04L14.53 2.53Zm-3.542 1.422C10.05 3.514 9.018 3.25 8 3.25c-1.618 0-3.273.667-4.524 1.64C2.2 5.884 1.5 7.065 1.5 8s.699 2.116 1.976 3.11c.066.051.133.102.202.152l1.375-1.375a3.5 3.5 0 0 1 4.835-4.835l1.1-1.1ZM8.782 6.158A2 2 0 0 0 6.159 8.78l2.623-2.623Zm-3.77 5.89 7.31-7.31c.069.05.136.1.202.152C13.8 5.884 14.5 7.065 14.5 8s-.699 2.116-1.976 3.11c-1.251.973-2.906 1.64-4.524 1.64-1.018 0-2.05-.264-2.988-.702Z"
                                                      fill="#6B7280"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-5 min-w-full mt-4">

                                    <div>
                                        <div class="bg-gray-100 h-4 w-full rounded"></div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="bg-gray-100 h-4 w-32 rounded"></div>
                                        <div class="bg-gray-100 h-4 w-20 rounded"></div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="bg-gray-100 h-4 w-40 rounded"></div>
                                        <div class="bg-gray-100 h-4 w-44 rounded"></div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="bg-gray-100 h-4 w-28 rounded"></div>
                                        <div class="bg-gray-100 h-4 w-16 rounded"></div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="bg-gray-100 h-4 w-20 rounded"></div>
                                        <div class="bg-gray-100 h-4 w-12 rounded"></div>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="bg-gray-100 h-4 w-24 rounded"></div>
                                        <div class="bg-gray-100 h-4 w-16 rounded"></div>
                                    </div>
                                </div>
                            </div>


                            <!-- Border after each item on small screens -->
                            <div class="block border-b border-gray-300 md:hidden"></div>

                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">Gross volume</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="bg-[#EBEEF1] text-gray-700 text-xs px-2 py-1 rounded">0.0%</span>
                                </div>

                                <div class="flex items-center mb-3">
                                    <div class="text-gray-700 text-lg mr-2">£0.00</div>
                                    <div class="text-sm text-gray-500 mt-1">£0.00 previous period</div>
                                </div>

                                <div class="flex gap-2">
                                    <div class=" text-xs self-end text-gray-500 border-b border-gray-300 ">£0.00</div>
                                    <div class="flex-1 text-2xl items-center bg-blue-200 h-40">graph</div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1 pl-10">
                                        <div>Apr 4</div>
                                        <div>Today</div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">View
                                        more</a>
                                    <div class="text-xs text-gray-500">Updated 4:22 PM</div>
                                </div>
                            </div>
                            <!-- Border after each item on small screens -->
                            <div class="block border-b border-gray-300 col-span-full lg:hidden"></div>

                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">Net volume from sales</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="bg-[#EBEEF1] text-gray-700 text-xs px-2 py-1 rounded">0.0%</span>
                                </div>

                                <div class="flex items-center mb-3">
                                    <div class="text-gray-700 text-lg mr-2">£0.00</div>
                                    <div class="text-sm text-gray-500 mt-1">£0.00 previous period</div>
                                </div>

                                <div class="flex gap-2">
                                    <div class=" text-xs self-end text-gray-500 border-b border-gray-300 ">£0.00</div>
                                    <div class="flex-1 text-2xl items-center bg-blue-200 h-40">graph</div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1 pl-10">
                                        <div>Apr 4</div>
                                        <div>Today</div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">View
                                        more</a>
                                    <div class="text-xs text-gray-500">Updated 4:22 PM</div>
                                </div>
                            </div>

                            <!-- Border after each item on small screens -->
                            <!-- Border after Row 1 on large screens -->
                            <div class="block border-b border-gray-300 md:hidden lg:block lg:col-span-3"></div>

                            <!-- Row 2 -->
                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">New customers</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="bg-[#EBEEF1] text-gray-700 text-xs px-2 py-1 rounded">0.0%</span>
                                </div>

                                <div class="flex items-center mb-3">
                                    <div class="text-gray-700 text-lg mr-2">0</div>
                                    <div class="text-sm text-gray-500 mt-1">0 previous period</div>
                                </div>

                                <div class="flex gap-2">
                                    <div class=" text-xs self-end text-gray-500 border-b border-gray-300 ">0</div>
                                    <div class="flex-1 text-2xl items-center bg-blue-200 h-40">graph</div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1 pl-10">
                                        <div>Apr 4</div>
                                        <div>Today</div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">View
                                        more</a>
                                    <div class="text-xs text-gray-500">Updated 4:22 PM</div>
                                </div>
                            </div>

                            <!-- Border after each item on small screens -->
                            <div class="block border-b border-gray-300 col-span-full lg:hidden"></div>

                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">Gross volume</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="bg-[#EBEEF1] text-gray-700 text-xs px-2 py-1 rounded">0.0%</span>
                                </div>

                                <div class="flex items-center mb-3">
                                    <div class="text-gray-700 text-lg mr-2">£0.00</div>
                                    <div class="text-sm text-gray-500 mt-1">£0.00 previous period</div>
                                </div>

                                <div class="flex gap-2">
                                    <div class=" text-xs self-end text-gray-500 border-b border-gray-300 ">£0.00</div>
                                    <div class="flex-1 text-2xl items-center bg-blue-200 h-40">graph</div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1 pl-10">
                                        <div>Apr 4</div>
                                        <div>Today</div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">View
                                        more</a>
                                    <div class="text-xs text-gray-500">Updated 4:22 PM</div>
                                </div>
                            </div>

                            <!-- Border after each item on small screens -->
                            <!-- Border after Row 1 on medium screens -->
                            <div class="block border-b border-gray-300  md:hidden"></div>

                            <div class="max-w-lg p-4">
                                <div class="flex items-center space-x-1 mb-1">
                                    <div class="flex items-center">
                                        <h2 class="font-bold text-black text-md">Gross volume</h2>
                                        <div class="ml-1 text-gray-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <span class="bg-[#EBEEF1] text-gray-700 text-xs px-2 py-1 rounded">0.0%</span>
                                </div>

                                <div class="flex items-center mb-3">
                                    <div class="text-gray-700 text-lg mr-2">£0.00</div>
                                    <div class="text-sm text-gray-500 mt-1">£0.00 previous period</div>
                                </div>

                                <div class="flex gap-2">
                                    <div class=" text-xs self-end text-gray-500 border-b border-gray-300 ">£0.00</div>
                                    <div class="flex-1 text-2xl items-center bg-blue-200 h-40">graph</div>
                                </div>

                                <div class="mb-4">
                                    <div class="flex justify-between text-xs text-gray-500 mt-1 pl-10">
                                        <div>Apr 4</div>
                                        <div>Today</div>
                                    </div>
                                </div>

                                <div class="flex justify-between items-center">
                                    <a href="#" class="text-sm text-indigo-500 hover:text-indigo-700 font-medium">View
                                        more</a>
                                    <div class="text-xs text-gray-500">Updated 4:22 PM</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
