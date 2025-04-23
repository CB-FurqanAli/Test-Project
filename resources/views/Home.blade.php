<x-layout>

    <div class="flex">
        <!-- Sidebar -->
        <div class="hidden md:flex flex-col w-[240px] border-r border-gray-200">
            <div class=" md:fixed w-[240px] flex flex-col min-h-screen">
                <div>
                    <div class="mx-2">
                        <div class="p-4 w-44">
                            <div class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 ">
                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                     xmlns="http://www.w3.org/2000/svg"
                                     class="mr-2">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M14.998 8.19A2.908 2.908 0 0 0 16 6v-.1c0-.316-.031-.631-.094-.94l-.63-3.12-.003-.012c-.124-.524-.35-1.013-.774-1.36C14.07.118 13.545 0 13 0H3c-.545 0-1.07.119-1.499.468-.425.347-.65.835-.774 1.36l-.003.012-.63 3.12A4.75 4.75 0 0 0 0 5.9V6c0 .88.39 1.65 1.002 2.191A.76.76 0 0 0 1 8.25v5.5A2.25 2.25 0 0 0 3.25 16h9.5A2.25 2.25 0 0 0 15 13.75v-5.5c0-.02 0-.04-.002-.06ZM1.564 5.257l.625-3.095c.081-.336.185-.47.26-.53.072-.059.215-.131.551-.131h2.14l-.22 4.333v.019c0 .908-.754 1.667-1.71 1.667C2.206 7.519 1.5 6.78 1.5 6v-.1c0-.216.021-.432.064-.644Zm4.855.613.222-4.37H9.36l.222 4.37C9.57 6.81 8.84 7.518 8 7.518s-1.572-.707-1.58-1.65Zm4.662-.036L10.86 1.5H13c.336 0 .48.072.55.13.075.062.18.195.26.531l.626 3.095c.043.212.064.428.064.644V6c0 .78-.708 1.519-1.71 1.519-.956 0-1.71-.76-1.71-1.667v-.02Zm1.71 3.186a3.228 3.228 0 0 1-2.445-1.114A3.033 3.033 0 0 1 8 9.019a3.033 3.033 0 0 1-2.347-1.114A3.226 3.226 0 0 1 3.21 9.018c-.242 0-.48-.025-.709-.075V11.5h11V8.943c-.23.05-.467.076-.71.076ZM2.5 13.75V13h11v.75a.75.75 0 0 1-.75.75h-9.5a.75.75 0 0 1-.75-.75Z"
                                          fill="#6C7688"></path>
                                </svg>


                                <h1 class="font-normal">New business</h1>
                            </div>
                        </div>
                        <nav class="px-2 py-4">
                            <ul>
                                <li>
                                    <a href="#"
                                       class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600">
                                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                                             viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                             class="mr-3 focus:text-indigo-600">
                                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M3 16a2.5 2.5 0 0 1-2.5-2.5V5.548a2 2 0 0 1 .862-1.644L6.486.356A2 2 0 0 1 7.625 0h.75a2 2 0 0 1 1.139.356l5.124 3.548a2 2 0 0 1 .862 1.644V13.5A2.5 2.5 0 0 1 13 16H3Zm2-1.5H3a1 1 0 0 1-1-1V5.548a.5.5 0 0 1 .215-.411L7.34 1.589a.5.5 0 0 1 .285-.089h.75a.5.5 0 0 1 .285.089l5.125 3.548a.5.5 0 0 1 .215.41V13.5a1 1 0 0 1-1 1h-2V8a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v6.5Zm1.5 0h3v-6h-3v6Z"></path>
                                        </svg>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600">

                                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                                             viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                             class="focus:text-indigo-600 mr-3">
                                            <path
                                                d="M1 2a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 1 2Zm0 8a.75.75 0 0 1 .75-.75h5a.75.75 0 0 1 0 1.5h-5A.75.75 0 0 1 1 10Zm2.25-4.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5h-7.5ZM2.5 14a.75.75 0 0 1 .75-.75h4a.75.75 0 0 1 0 1.5h-4A.75.75 0 0 1 2.5 14Z"
                                                fill="currentColor"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M16 11.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.5 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <span>Balances</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600">
                                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                                             viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                             class="focus:text-indigo-600 mr-3">
                                            <path
                                                d="M9.714 6.693a.75.75 0 1 0 1.106 1.014l2.933-3.2a.75.75 0 0 0 0-1.013L10.82.294a.75.75 0 1 0-1.106 1.013l1.781 1.943H4.6A3.75 3.75 0 0 0 .85 7v.067a.75.75 0 1 0 1.5 0V7A2.25 2.25 0 0 1 4.6 4.75h6.895l-1.78 1.943ZM6.286 9.307A.75.75 0 0 0 5.18 8.293l-2.932 3.2a.75.75 0 0 0 0 1.014l2.932 3.2a.75.75 0 1 0 1.106-1.014l-1.78-1.942H11.4A3.75 3.75 0 0 0 15.15 9v-.067a.75.75 0 0 0-1.5 0V9a2.25 2.25 0 0 1-2.25 2.25H4.505l1.78-1.944Z"
                                                fill="currentColor"></path>
                                        </svg>
                                        <span>Transactions</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600">
                                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                                             viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                             class="focus:text-indigo-600 mr-3">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M2.5 14.4h11a.4.4 0 0 0 .4-.4 3.4 3.4 0 0 0-3.4-3.4h-5A3.4 3.4 0 0 0 2.1 14c0 .22.18.4.4.4Zm0 1.6h11a2 2 0 0 0 2-2 5 5 0 0 0-5-5h-5a5 5 0 0 0-5 5 2 2 0 0 0 2 2ZM8 6.4a2.4 2.4 0 1 0 0-4.8 2.4 2.4 0 0 0 0 4.8ZM8 8a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <span>Customers</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100 focus:text-indigo-600">
                                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                                             viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                             class="focus:text-indigo-600 mr-3">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M7.973 0a2 2 0 0 0-.894.211L1.607 2.947A2 2 0 0 0 .5 4.737v6.568a2 2 0 0 0 1.052 1.761l4.782 2.575A3 3 0 0 0 7.757 16h.488a3 3 0 0 0 1.422-.359l4.781-2.575a2 2 0 0 0 1.052-1.76v-6.57a2 2 0 0 0-1.105-1.789L8.922.211A2 2 0 0 0 8.03 0h-.056ZM14 11.306V5.62L8.75 8.448v5.964c.07-.025.14-.056.206-.091l4.781-2.575a.5.5 0 0 0 .263-.44ZM8.252 1.553l5.257 2.629-2.06 1.109-5.38-2.898 1.68-.84a.5.5 0 0 1 .224-.053h.056a.5.5 0 0 1 .223.053ZM4.756 3.05 2.491 4.182 8 7.148l2.184-1.176L4.756 3.05ZM7.25 8.448 2 5.622v5.683a.5.5 0 0 0 .263.44l4.782 2.576c.066.035.134.066.204.09V8.449Z"
                                                  fill="currentColor"></path>
                                        </svg>
                                        <span>Product catalog</span>
                                    </a>
                                </li>
                            </ul>

                            <div class="mt-8">
                                <h3 class="px-2 text-xs font-semibold text-gray-500 tracking-wider">Products</h3>
                                <ul>
                                    <li>
                                        <div
                                            class="text-gray-600 relative w-full">
                                            <!-- Dropdown using CSS only (checkbox hack) -->
                                            <div>
                                                <!-- Hidden checkbox to track state -->
                                                <input type="checkbox" id="dropdown-toggle" class="hidden peer">

                                                <!-- Dropdown Header (Label for checkbox) -->
                                                <label for="dropdown-toggle"
                                                       class="flex items-center justify-between cursor-pointer hover:bg-gray-100 text-sm px-3 py-1 rounded-lg mt-1">
                                                    <div class="flex items-center">
                                                        <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             class="mr-3">
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M0 3.884c0-.8.545-1.476 1.306-1.68l.018-.004L10.552.213c.15-.038.3-.055.448-.055.927.006 1.75.733 1.75 1.74V4.5h.75A2.5 2.5 0 0 1 16 7v6.5a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 0 13.5V3.884ZM10.913 1.67c.199-.052.337.09.337.23v2.6H2.5c-.356 0-.694.074-1 .208v-.824c0-.092.059-.189.181-.227l9.216-1.984.016-.004ZM1.5 7v6.5a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-11a1 1 0 0 0-1 1Z"
                                                                  fill="#6C7688"></path>
                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                  d="M10.897 1.673 1.681 3.657c-.122.038-.181.135-.181.227v.824a2.492 2.492 0 0 1 1-.208h8.75V1.898c0-.14-.138-.281-.337-.23m0 0-.016.005Zm-9.59.532 9.23-1.987c.15-.038.3-.055.448-.055.927.006 1.75.733 1.75 1.74V4.5h.75A2.5 2.5 0 0 1 16 7v6.5a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 0 13.5V3.884c0-.8.545-1.476 1.306-1.68l.018-.004ZM1.5 13.5V7a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v6.5a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1ZM13 10.25c0 .688-.563 1.25-1.25 1.25-.688 0-1.25-.55-1.25-1.25 0-.688.563-1.25 1.25-1.25.688 0 1.25.562 1.25 1.25Z"
                                                                  fill="#6C7688"></path>
                                                        </svg>
                                                        <span>Payments</span>
                                                    </div>

                                                    <span data-arrow="true" data-testid="payments-arrow"><svg
                                                            data-arrow="true" aria-hidden="true" width="8" height="8"
                                                            viewBox="0 0 8 8"
                                                            xmlns="http://www.w3.org/2000/svg"><path
                                                                fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M.606 2.334a.75.75 0 0 0-.022 1.06l2.875 3a.75.75 0 0 0 1.082 0L7.416 3.4a.75.75 0 0 0-1.082-1.038L4 4.79 1.667 2.357a.75.75 0 0 0-1.06-.022Z"
                                                                fill="#6C7688"></path></svg></span>
                                                </label>

                                                <!-- Dropdown Content -->
                                                <div class="hidden peer-checked:block border-t border-gray-100">
                                                    <ul class="py-1">
                                                        <li class="hover:bg-gray-100">
                                                            <a href="#"
                                                               class="block cursor-pointer text-sm px-3 py-1 rounded-lg text-gray-700 focus:text-indigo-600 ml-7">Overview</a>
                                                        </li>
                                                        <li class="hover:bg-gray-100">
                                                            <a href="#"
                                                               class="block cursor-pointer text-sm px-3 py-1 rounded-lg text-gray-700 focus:text-indigo-600 ml-7">Subscriptions</a>
                                                        </li>
                                                        <li class="hover:bg-gray-100">
                                                            <a href="#"
                                                               class="block cursor-pointer text-sm px-3 py-1 rounded-lg text-gray-700 focus:text-indigo-600 ml-7">Invoices</a>
                                                        </li>
                                                        <li class="hover:bg-gray-100">
                                                            <a href="#"
                                                               class="block cursor-pointer text-sm px-3 py-1 rounded-lg text-gray-700 focus:text-indigo-600 ml-7">Meters</a>
                                                        </li>
                                                        <li class="hover:bg-gray-100">
                                                            <a href="#"
                                                               class="block cursor-pointer text-sm px-3 py-1 rounded-lg text-gray-700 focus:text-indigo-600 ml-7">Revenue
                                                                recovery</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>


                                    <li>
                                        <a href="#"
                                           class="text-sm flex items-center justify-between px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100">
                                            <div class="flex items-center">
                                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-3">
                                                    <path
                                                        d="M0 2.25A2.25 2.25 0 0 1 2.25 0h7.5A2.25 2.25 0 0 1 12 2.25v6a.75.75 0 0 1-1.5 0v-6a.75.75 0 0 0-.75-.75h-7.5a.75.75 0 0 0-.75.75v10.851a.192.192 0 0 0 .277.172l.888-.444a.75.75 0 1 1 .67 1.342l-.887.443A1.69 1.69 0 0 1 0 13.101V2.25Z"
                                                        fill="#6C7688"></path>
                                                    <path
                                                        d="M5 10.7a.7.7 0 0 1 .7-.7h4.6a.7.7 0 1 1 0 1.4H7.36l.136.237c.098.17.193.336.284.491.283.483.554.907.855 1.263.572.675 1.249 1.109 2.365 1.109 1.18 0 2.038-.423 2.604-1.039.576-.626.896-1.5.896-2.461 0-.99-.42-1.567-.807-1.998a.75.75 0 1 1 1.115-1.004C15.319 8.568 16 9.49 16 11c0 1.288-.43 2.54-1.292 3.476C13.838 15.423 12.57 16 11 16c-1.634 0-2.706-.691-3.51-1.64-.386-.457-.71-.971-1.004-1.472L6.4 12.74v2.56a.7.7 0 1 1-1.4 0v-4.6ZM2.95 4.25a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75ZM3.7 6.5a.75.75 0 0 0 0 1.5h4.6a.75.75 0 0 0 0-1.5H3.7Z"
                                                        fill="#6C7688"></path>
                                                </svg>
                                                <span>Billing</span>
                                            </div>
                                            <span data-arrow="true" data-testid="payments-arrow"><svg
                                                    data-arrow="true" aria-hidden="true" width="8" height="8"
                                                    viewBox="0 0 8 8"
                                                    xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M.606 2.334a.75.75 0 0 0-.022 1.06l2.875 3a.75.75 0 0 0 1.082 0L7.416 3.4a.75.75 0 0 0-1.082-1.038L4 4.79 1.667 2.357a.75.75 0 0 0-1.06-.022Z"
                                                        fill="#6C7688"></path></svg></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm flex items-center justify-between px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100">
                                            <div class="flex items-center">
                                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-3">
                                                    <path
                                                        d="M14 1.875a.875.875 0 0 0-1.75 0v8.75a.875.875 0 0 0 1.75 0v-8.75Z"
                                                        fill="#6C7688"></path>
                                                    <path
                                                        d="M2.6 1.875a.8.8 0 1 0-1.6 0V13.2A1.8 1.8 0 0 0 2.8 15h11.827a.8.8 0 0 0 0-1.6H2.8a.2.2 0 0 1-.2-.2V1.875Z"
                                                        fill="#6C7688"></path>
                                                    <path
                                                        d="M9.125 3.5c.483 0 .875.392.875.875v6.25a.875.875 0 0 1-1.75 0v-6.25c0-.483.392-.875.875-.875ZM6 6.875a.875.875 0 1 0-1.75 0v3.75a.875.875 0 0 0 1.75 0v-3.75Z"
                                                        fill="#6C7688"></path>
                                                </svg>
                                                <span>Reporting</span>
                                            </div>
                                            <span data-arrow="true" data-testid="payments-arrow"><svg
                                                    data-arrow="true" aria-hidden="true" width="8" height="8"
                                                    viewBox="0 0 8 8"
                                                    xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M.606 2.334a.75.75 0 0 0-.022 1.06l2.875 3a.75.75 0 0 0 1.082 0L7.416 3.4a.75.75 0 0 0-1.082-1.038L4 4.79 1.667 2.357a.75.75 0 0 0-1.06-.022Z"
                                                        fill="#6C7688"></path></svg></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="text-sm flex items-center justify-between px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100">
                                            <div class="flex items-center">
                                                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     class="mr-3">
                                                    <path
                                                        d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm5.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm-11 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"
                                                        fill="#6C7688"></path>
                                                </svg>
                                                <span>More</span>
                                            </div>
                                            <span data-arrow="true" data-testid="payments-arrow"><svg
                                                    data-arrow="true" aria-hidden="true" width="8" height="8"
                                                    viewBox="0 0 8 8"
                                                    xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M.606 2.334a.75.75 0 0 0-.022 1.06l2.875 3a.75.75 0 0 0 1.082 0L7.416 3.4a.75.75 0 0 0-1.082-1.038L4 4.79 1.667 2.357a.75.75 0 0 0-1.06-.022Z"
                                                        fill="#6C7688"></path></svg></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Bottom section -->
                <div class="mt-auto p-4">
                    <a href="#" class="text-sm flex items-center px-3 py-1 text-gray-600 rounded-lg hover:bg-gray-100">
                        <svg data-testid="primary-nav-item-icon" aria-hidden="true" width="16" height="16"
                             viewBox="0 0 16 16"
                             xmlns="http://www.w3.org/2000/svg"
                             class="mr-3">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M13 2.5H3A1.5 1.5 0 0 0 1.5 4v8A1.5 1.5 0 0 0 3 13.5h10a1.5 1.5 0 0 0 1.5-1.5V4A1.5 1.5 0 0 0 13 2.5ZM3 1a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H3Z"
                                  fill="#6C7688"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3.43 4.512a.75.75 0 0 1 1.058-.081l3.5 3a.75.75 0 0 1 0 1.138l-3.5 3a.75.75 0 1 1-.976-1.138L6.348 8 3.512 5.57a.75.75 0 0 1-.081-1.058ZM8 10.75a.75.75 0 0 1 .75-.75h3.5a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75Z"
                                  fill="#6C7688"></path>
                        </svg>
                        <span>Developers</span>
                    </a>
                </div>
            </div>
        </div>
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
