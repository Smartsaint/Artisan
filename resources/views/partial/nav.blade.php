
<nav class="bg-[#f8f9fd] fixed w-full z-20 top-0 start-0  z-1000 ">
    <div class="flex flex-wrap items-center justify-around max-w-screen-xl p-4 mx-auto z-100">

    <div class="flex gap-6 space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse">
        <div class="relative hidden md:block ">
            <div class="absolute inset-y-0 flex items-center pointer-events-none end-2 ps-3 ">
              <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
              <span class="sr-only">Search icon</span>
            </div>
            <input type="text" id="search-navbar" class="block w-full p-2 px-12 text-sm text-gray-900 border border-gray-300 rounded-full ps-10 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search here...">
          </div>

          <div class="flex gap-6 mt-">
            <div class="">
                <a href=""  type="button" class="px-5 py-2 text-sm font-medium text-center text-dark bg-btn-light rounded-3xl">Log In</a>
        </div>
            <div class="">
                <a href=""  type="button" class="py-2 text-sm font-medium text-center text-white px-7 bg-btn rounded-3xl">Sign Up</a>
        </div>
        </div>

        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 " aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
      <ul class="flex flex-col p-4 mt-4 font-medium rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
        <li>
          <a href="#" class="block px-3 py-2 text-sm text-dark ">Home</a>
        </li>
        <li>
          <a href="#" class="block px-3 py-2 text-sm rounded text-dark ">Blog</a>
        </li>
        <li>
          <a href="#" class="block px-3 py-2 text-sm rounded text-dark ">Become a member</a>
        </li>

      </ul>

      <div class="relative mt-3 md:hidden" >
        <div class="absolute inset-y-0 flex items-center pointer-events-none end-2 ps-3 ">
          <svg class="w-4 h-4 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">Search icon</span>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 text-sm text-gray-900 rounded-full ps-10 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search...">
      </div>
    </div>
    </div>
    </div>
  </nav>
