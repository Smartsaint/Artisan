<style>
    @media (max-width: 768px) {
      .md\:flex {
        flex-direction: column;
      }
      .md\:w-1\/2 {
        width: 100%;
      }
    }

    @media (min-width: 769px) and (max-width: 1024px) {
      .md\:w-1\/2 {
        width: 48%;
      }
    }
  </style>
<div class="p-6 bg-white">
<div class="items-center justify-center p-4 bg-white md:p-12">
<h1 class="text-4xl font-bold text-center">Featured Jobs</h1>
<p class="text-center md:p-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
</div>

<div class="gap-10 p-4 bg-white md:p-12 md:flex">


    <div class="max-w-sm mb-8 bg-white rounded-lg shadow-lg md:mb-0 md:w-1/2 lg:w-1/4">
        <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown3" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown3" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10">
        <div class="w-24 h-24 mb-3 bg-gray-200 rounded-full shadow-lg" ></div>
        <h5 class="mb-1 font-bold text-gray-900 ">Database Programmer</h5>
        <span class="text-sm font-semibold text-gray-500">Maximoz Team</span>
        <div>
          <div class="flex mt-4">
           <span class="flex gap-5">
            <svg width="29" height="24" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_49_2399)">
                <path d="M14.1309 7.83985C10.7294 7.83985 7.7843 10.2023 7.04642 13.5228L4.62995 24.3969C4.61222 24.4767 4.60328 24.5581 4.60328 24.6399C4.60328 25.2584 5.10472 25.7598 5.72328 25.7598H22.5384C22.6202 25.7598 22.7016 25.7509 22.7814 25.7332C23.3852 25.599 23.766 25.0007 23.6318 24.3969L21.2153 13.5228C20.4774 10.2023 17.5323 7.83985 14.1309 7.83985ZM14.1309 5.59985C18.5822 5.59985 22.4363 8.69151 23.402 13.0369L25.8184 23.911C26.221 25.7225 25.0788 27.5173 23.2673 27.9198C23.028 27.973 22.7836 27.9998 22.5384 27.9998H5.72328C3.8676 27.9998 2.36328 26.4955 2.36328 24.6399C2.36328 24.3947 2.39011 24.1503 2.44329 23.911L4.85976 13.0369C5.82539 8.69151 9.67951 5.59985 14.1309 5.59985Z" fill="#A9A9A9"/>
                <path d="M16.3709 12.3198C16.9895 12.3198 17.4909 12.8213 17.4909 13.4398C17.4909 14.0584 16.9895 14.5598 16.3709 14.5598H13.5709C13.2617 14.5598 13.0109 14.8106 13.0109 15.1198C13.0109 15.4291 13.2617 15.6798 13.5709 15.6798H14.6909C16.2373 15.6798 17.4909 16.9334 17.4909 18.4798C17.4909 20.0262 16.2373 21.2798 14.6909 21.2798H11.8909C11.2724 21.2798 10.7709 20.7784 10.7709 20.1598C10.7709 19.5413 11.2724 19.0398 11.8909 19.0398H14.6909C15.0002 19.0398 15.2509 18.7891 15.2509 18.4798C15.2509 18.1706 15.0002 17.9198 14.6909 17.9198H13.5709C12.0245 17.9198 10.7709 16.6662 10.7709 15.1198C10.7709 13.5734 12.0245 12.3198 13.5709 12.3198H16.3709Z" fill="#A9A9A9"/>
                <path d="M13.011 11.1999C13.011 10.5813 13.5124 10.0799 14.131 10.0799C14.7495 10.0799 15.251 10.5813 15.251 11.1999V13.4399C15.251 14.0584 14.7495 14.5599 14.131 14.5599C13.5124 14.5599 13.011 14.0584 13.011 13.4399V11.1999Z" fill="#A9A9A9"/>
                <path d="M15.251 22.3999C15.251 23.0184 14.7495 23.5199 14.131 23.5199C13.5124 23.5199 13.011 23.0184 13.011 22.3999V20.1599C13.011 19.5413 13.5124 19.0399 14.131 19.0399C14.7495 19.0399 15.251 19.5413 15.251 20.1599V22.3999Z" fill="#A9A9A9"/>
                <path d="M12.9308 6.30392C13.1605 6.87824 12.8812 7.53004 12.3069 7.75977C11.7325 7.9895 11.0807 7.71015 10.851 7.13583L8.61101 1.53583C8.24701 0.625829 9.14482 -0.279727 10.0579 0.0764517C10.8966 0.403606 11.5217 0.559878 11.8909 0.559878C11.9828 0.559878 12.059 0.540236 12.2253 0.469561C12.2695 0.450797 12.3213 0.42789 12.443 0.374064C13.0223 0.120198 13.4798 -0.000122447 14.1309 -0.000122447C14.7805 -0.000122447 15.2453 0.120518 15.8265 0.371934C15.9739 0.436508 16.0328 0.462191 16.085 0.483664C16.2286 0.542794 16.2976 0.559878 16.3709 0.559878C16.7185 0.559878 17.3492 0.4022 18.212 0.0733324C19.1239 -0.274297 20.0133 0.629663 19.6508 1.53583L17.4108 7.13583C17.1811 7.71015 16.5293 7.9895 15.9549 7.75977C15.3806 7.53004 15.1013 6.87824 15.331 6.30392L16.7403 2.78061C16.6116 2.79343 16.4885 2.79988 16.3709 2.79988C15.9622 2.79988 15.6234 2.71608 15.2321 2.55494C15.1548 2.52312 15.0701 2.48618 14.9371 2.42782C14.6129 2.28755 14.4292 2.23988 14.1309 2.23988C13.8355 2.23988 13.662 2.28549 13.3421 2.42569C13.2322 2.47437 13.1626 2.50512 13.1014 2.53114C12.6819 2.7094 12.331 2.79988 11.8909 2.79988C11.7726 2.79988 11.6497 2.79374 11.5218 2.78153L12.9308 6.30392Z" fill="#A9A9A9"/>
                </g>
                <defs>
                <clipPath id="clip0_49_2399">
                <rect width="28" height="28" fill="white" transform="translate(0.130859)"/>
                </clipPath>
                </defs>
                </svg>
                <p class="text-sm font-semibold text-gray-700">$14,000 - $25,000</p>
                 <p class="text-sm text-gray-400 ">/monthly</p>
           </span>
          </div>

          <div class="flex mt-4">
            <span class="flex gap-5">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.1309 0C7.06484 0 2.94336 4.12148 2.94336 9.1875C2.94336 10.8091 3.3718 12.4034 4.18231 13.7979C4.37127 14.123 4.58248 14.4398 4.8102 14.7396L11.7317 24H12.53L19.4515 14.7397C19.6792 14.4398 19.8904 14.1231 20.0794 13.7979C20.8899 12.4034 21.3184 10.8091 21.3184 9.1875C21.3184 4.12148 17.1969 0 12.1309 0ZM12.1309 12.2344C10.4508 12.2344 9.08398 10.8675 9.08398 9.1875C9.08398 7.50745 10.4508 6.14062 12.1309 6.14062C13.8109 6.14062 15.1777 7.50745 15.1777 9.1875C15.1777 10.8675 13.8109 12.2344 12.1309 12.2344Z" fill="#A9A9A9"/>
                    </svg>

                 <p class="text-sm font-semibold text-gray-700">Lagos, Nigeria</p>
                  <p class="ml-auto text-sm text-gray-400">View more</p>
            </span>
           </div>

          <div class="flex items-center justify-between gap-5 mt-4 md:mt-6">
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white ">
                <svg width="56" height="55" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.130859" width="60" height="60" rx="30" fill="#FF5353"/>
                    <g clip-path="url(#clip0_49_2419)">
                    <path d="M35.7559 20.0547C32.9131 20.0547 31.0867 21.9148 30.1309 23.5861C29.175 21.9148 27.3486 20.0547 24.5059 20.0547C20.8982 20.0547 18.1309 22.8177 18.1309 26.4824C18.1309 30.456 21.5979 33.1621 26.7752 37.2593C29.3103 39.2637 29.4732 39.416 30.1309 39.9447C30.6676 39.5133 30.9646 39.2533 33.4865 37.2593C38.6638 33.1621 42.1309 30.456 42.1309 26.4824C42.1309 22.8178 39.3635 20.0547 35.7559 20.0547Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_49_2419">
                    <rect width="24" height="24" fill="white" transform="translate(18.1309 18)"/>
                    </clipPath>
                    </defs>
                    </svg>

            </a>
            <a href="#" class="px-8 py-2 text-sm font-medium text-gray-900 rounded-xl bg-btn-light">Apply Now</a>
        </div>
        </div>
    </div>


</div>

{{-- card 2  --}}



<div class="max-w-sm mb-8 bg-white rounded-lg shadow-lg md:mb-0 md:w-1/2 lg:w-1/4">
    <div class="flex justify-end px-4 pt-4">
    <button id="dropdownButton" data-dropdown-toggle="dropdown2" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
        <span class="sr-only">Open dropdown</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdown2" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2" aria-labelledby="dropdownButton">
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
        </li>
        </ul>
    </div>
</div>
<div class="flex flex-col items-center pb-10">
    <div class="w-24 h-24 mb-3 bg-gray-200 rounded-full shadow-lg" ></div>
    <h5 class="mb-1 font-bold text-gray-900 ">Database Programmer</h5>
    <span class="text-sm font-semibold text-gray-500">Maximoz Team</span>
    <div>
      <div class="flex mt-4">
       <span class="flex gap-5">
        <svg width="29" height="24" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_49_2399)">
            <path d="M14.1309 7.83985C10.7294 7.83985 7.7843 10.2023 7.04642 13.5228L4.62995 24.3969C4.61222 24.4767 4.60328 24.5581 4.60328 24.6399C4.60328 25.2584 5.10472 25.7598 5.72328 25.7598H22.5384C22.6202 25.7598 22.7016 25.7509 22.7814 25.7332C23.3852 25.599 23.766 25.0007 23.6318 24.3969L21.2153 13.5228C20.4774 10.2023 17.5323 7.83985 14.1309 7.83985ZM14.1309 5.59985C18.5822 5.59985 22.4363 8.69151 23.402 13.0369L25.8184 23.911C26.221 25.7225 25.0788 27.5173 23.2673 27.9198C23.028 27.973 22.7836 27.9998 22.5384 27.9998H5.72328C3.8676 27.9998 2.36328 26.4955 2.36328 24.6399C2.36328 24.3947 2.39011 24.1503 2.44329 23.911L4.85976 13.0369C5.82539 8.69151 9.67951 5.59985 14.1309 5.59985Z" fill="#A9A9A9"/>
            <path d="M16.3709 12.3198C16.9895 12.3198 17.4909 12.8213 17.4909 13.4398C17.4909 14.0584 16.9895 14.5598 16.3709 14.5598H13.5709C13.2617 14.5598 13.0109 14.8106 13.0109 15.1198C13.0109 15.4291 13.2617 15.6798 13.5709 15.6798H14.6909C16.2373 15.6798 17.4909 16.9334 17.4909 18.4798C17.4909 20.0262 16.2373 21.2798 14.6909 21.2798H11.8909C11.2724 21.2798 10.7709 20.7784 10.7709 20.1598C10.7709 19.5413 11.2724 19.0398 11.8909 19.0398H14.6909C15.0002 19.0398 15.2509 18.7891 15.2509 18.4798C15.2509 18.1706 15.0002 17.9198 14.6909 17.9198H13.5709C12.0245 17.9198 10.7709 16.6662 10.7709 15.1198C10.7709 13.5734 12.0245 12.3198 13.5709 12.3198H16.3709Z" fill="#A9A9A9"/>
            <path d="M13.011 11.1999C13.011 10.5813 13.5124 10.0799 14.131 10.0799C14.7495 10.0799 15.251 10.5813 15.251 11.1999V13.4399C15.251 14.0584 14.7495 14.5599 14.131 14.5599C13.5124 14.5599 13.011 14.0584 13.011 13.4399V11.1999Z" fill="#A9A9A9"/>
            <path d="M15.251 22.3999C15.251 23.0184 14.7495 23.5199 14.131 23.5199C13.5124 23.5199 13.011 23.0184 13.011 22.3999V20.1599C13.011 19.5413 13.5124 19.0399 14.131 19.0399C14.7495 19.0399 15.251 19.5413 15.251 20.1599V22.3999Z" fill="#A9A9A9"/>
            <path d="M12.9308 6.30392C13.1605 6.87824 12.8812 7.53004 12.3069 7.75977C11.7325 7.9895 11.0807 7.71015 10.851 7.13583L8.61101 1.53583C8.24701 0.625829 9.14482 -0.279727 10.0579 0.0764517C10.8966 0.403606 11.5217 0.559878 11.8909 0.559878C11.9828 0.559878 12.059 0.540236 12.2253 0.469561C12.2695 0.450797 12.3213 0.42789 12.443 0.374064C13.0223 0.120198 13.4798 -0.000122447 14.1309 -0.000122447C14.7805 -0.000122447 15.2453 0.120518 15.8265 0.371934C15.9739 0.436508 16.0328 0.462191 16.085 0.483664C16.2286 0.542794 16.2976 0.559878 16.3709 0.559878C16.7185 0.559878 17.3492 0.4022 18.212 0.0733324C19.1239 -0.274297 20.0133 0.629663 19.6508 1.53583L17.4108 7.13583C17.1811 7.71015 16.5293 7.9895 15.9549 7.75977C15.3806 7.53004 15.1013 6.87824 15.331 6.30392L16.7403 2.78061C16.6116 2.79343 16.4885 2.79988 16.3709 2.79988C15.9622 2.79988 15.6234 2.71608 15.2321 2.55494C15.1548 2.52312 15.0701 2.48618 14.9371 2.42782C14.6129 2.28755 14.4292 2.23988 14.1309 2.23988C13.8355 2.23988 13.662 2.28549 13.3421 2.42569C13.2322 2.47437 13.1626 2.50512 13.1014 2.53114C12.6819 2.7094 12.331 2.79988 11.8909 2.79988C11.7726 2.79988 11.6497 2.79374 11.5218 2.78153L12.9308 6.30392Z" fill="#A9A9A9"/>
            </g>
            <defs>
            <clipPath id="clip0_49_2399">
            <rect width="28" height="28" fill="white" transform="translate(0.130859)"/>
            </clipPath>
            </defs>
            </svg>
            <p class="text-sm font-semibold text-gray-700">$14,000 - $25,000</p>
             <p class="text-sm text-gray-400 ">/monthly</p>
       </span>
      </div>

      <div class="flex mt-4">
        <span class="flex gap-5">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1309 0C7.06484 0 2.94336 4.12148 2.94336 9.1875C2.94336 10.8091 3.3718 12.4034 4.18231 13.7979C4.37127 14.123 4.58248 14.4398 4.8102 14.7396L11.7317 24H12.53L19.4515 14.7397C19.6792 14.4398 19.8904 14.1231 20.0794 13.7979C20.8899 12.4034 21.3184 10.8091 21.3184 9.1875C21.3184 4.12148 17.1969 0 12.1309 0ZM12.1309 12.2344C10.4508 12.2344 9.08398 10.8675 9.08398 9.1875C9.08398 7.50745 10.4508 6.14062 12.1309 6.14062C13.8109 6.14062 15.1777 7.50745 15.1777 9.1875C15.1777 10.8675 13.8109 12.2344 12.1309 12.2344Z" fill="#A9A9A9"/>
                </svg>

             <p class="text-sm font-semibold text-gray-700">Lagos, Nigeria</p>
              <p class="ml-auto text-sm text-gray-400">View more</p>
        </span>
       </div>

      <div class="flex items-center justify-between gap-5 mt-4 md:mt-6">
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white ">
            <svg width="56" height="55" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.130859" width="60" height="60" rx="30" fill="#FF5353"/>
                <g clip-path="url(#clip0_49_2419)">
                <path d="M35.7559 20.0547C32.9131 20.0547 31.0867 21.9148 30.1309 23.5861C29.175 21.9148 27.3486 20.0547 24.5059 20.0547C20.8982 20.0547 18.1309 22.8177 18.1309 26.4824C18.1309 30.456 21.5979 33.1621 26.7752 37.2593C29.3103 39.2637 29.4732 39.416 30.1309 39.9447C30.6676 39.5133 30.9646 39.2533 33.4865 37.2593C38.6638 33.1621 42.1309 30.456 42.1309 26.4824C42.1309 22.8178 39.3635 20.0547 35.7559 20.0547Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_49_2419">
                <rect width="24" height="24" fill="white" transform="translate(18.1309 18)"/>
                </clipPath>
                </defs>
                </svg>

        </a>
        <a href="#" class="px-8 py-2 text-sm font-medium text-gray-900 rounded-xl bg-btn-light">Apply Now</a>
    </div>
    </div>
</div>


</div>

{{--  card 4  --}}



<div class="max-w-sm mb-8 bg-white rounded-lg shadow-lg md:mb-0 md:w-1/2 lg:w-1/4">
    <div class="flex justify-end px-4 pt-4">
    <button id="dropdownButton" data-dropdown-toggle="dropdown1" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
        <span class="sr-only">Open dropdown</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdown1" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2" aria-labelledby="dropdownButton">
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
        </li>
        </ul>
    </div>
</div>
<div class="flex flex-col items-center pb-10">
    <div class="w-24 h-24 mb-3 bg-gray-200 rounded-full shadow-lg" ></div>
    <h5 class="mb-1 font-bold text-gray-900 ">Database Programmer</h5>
    <span class="text-sm font-semibold text-gray-500">Maximoz Team</span>
    <div>
      <div class="flex mt-4">
       <span class="flex gap-5">
        <svg width="29" height="24" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_49_2399)">
            <path d="M14.1309 7.83985C10.7294 7.83985 7.7843 10.2023 7.04642 13.5228L4.62995 24.3969C4.61222 24.4767 4.60328 24.5581 4.60328 24.6399C4.60328 25.2584 5.10472 25.7598 5.72328 25.7598H22.5384C22.6202 25.7598 22.7016 25.7509 22.7814 25.7332C23.3852 25.599 23.766 25.0007 23.6318 24.3969L21.2153 13.5228C20.4774 10.2023 17.5323 7.83985 14.1309 7.83985ZM14.1309 5.59985C18.5822 5.59985 22.4363 8.69151 23.402 13.0369L25.8184 23.911C26.221 25.7225 25.0788 27.5173 23.2673 27.9198C23.028 27.973 22.7836 27.9998 22.5384 27.9998H5.72328C3.8676 27.9998 2.36328 26.4955 2.36328 24.6399C2.36328 24.3947 2.39011 24.1503 2.44329 23.911L4.85976 13.0369C5.82539 8.69151 9.67951 5.59985 14.1309 5.59985Z" fill="#A9A9A9"/>
            <path d="M16.3709 12.3198C16.9895 12.3198 17.4909 12.8213 17.4909 13.4398C17.4909 14.0584 16.9895 14.5598 16.3709 14.5598H13.5709C13.2617 14.5598 13.0109 14.8106 13.0109 15.1198C13.0109 15.4291 13.2617 15.6798 13.5709 15.6798H14.6909C16.2373 15.6798 17.4909 16.9334 17.4909 18.4798C17.4909 20.0262 16.2373 21.2798 14.6909 21.2798H11.8909C11.2724 21.2798 10.7709 20.7784 10.7709 20.1598C10.7709 19.5413 11.2724 19.0398 11.8909 19.0398H14.6909C15.0002 19.0398 15.2509 18.7891 15.2509 18.4798C15.2509 18.1706 15.0002 17.9198 14.6909 17.9198H13.5709C12.0245 17.9198 10.7709 16.6662 10.7709 15.1198C10.7709 13.5734 12.0245 12.3198 13.5709 12.3198H16.3709Z" fill="#A9A9A9"/>
            <path d="M13.011 11.1999C13.011 10.5813 13.5124 10.0799 14.131 10.0799C14.7495 10.0799 15.251 10.5813 15.251 11.1999V13.4399C15.251 14.0584 14.7495 14.5599 14.131 14.5599C13.5124 14.5599 13.011 14.0584 13.011 13.4399V11.1999Z" fill="#A9A9A9"/>
            <path d="M15.251 22.3999C15.251 23.0184 14.7495 23.5199 14.131 23.5199C13.5124 23.5199 13.011 23.0184 13.011 22.3999V20.1599C13.011 19.5413 13.5124 19.0399 14.131 19.0399C14.7495 19.0399 15.251 19.5413 15.251 20.1599V22.3999Z" fill="#A9A9A9"/>
            <path d="M12.9308 6.30392C13.1605 6.87824 12.8812 7.53004 12.3069 7.75977C11.7325 7.9895 11.0807 7.71015 10.851 7.13583L8.61101 1.53583C8.24701 0.625829 9.14482 -0.279727 10.0579 0.0764517C10.8966 0.403606 11.5217 0.559878 11.8909 0.559878C11.9828 0.559878 12.059 0.540236 12.2253 0.469561C12.2695 0.450797 12.3213 0.42789 12.443 0.374064C13.0223 0.120198 13.4798 -0.000122447 14.1309 -0.000122447C14.7805 -0.000122447 15.2453 0.120518 15.8265 0.371934C15.9739 0.436508 16.0328 0.462191 16.085 0.483664C16.2286 0.542794 16.2976 0.559878 16.3709 0.559878C16.7185 0.559878 17.3492 0.4022 18.212 0.0733324C19.1239 -0.274297 20.0133 0.629663 19.6508 1.53583L17.4108 7.13583C17.1811 7.71015 16.5293 7.9895 15.9549 7.75977C15.3806 7.53004 15.1013 6.87824 15.331 6.30392L16.7403 2.78061C16.6116 2.79343 16.4885 2.79988 16.3709 2.79988C15.9622 2.79988 15.6234 2.71608 15.2321 2.55494C15.1548 2.52312 15.0701 2.48618 14.9371 2.42782C14.6129 2.28755 14.4292 2.23988 14.1309 2.23988C13.8355 2.23988 13.662 2.28549 13.3421 2.42569C13.2322 2.47437 13.1626 2.50512 13.1014 2.53114C12.6819 2.7094 12.331 2.79988 11.8909 2.79988C11.7726 2.79988 11.6497 2.79374 11.5218 2.78153L12.9308 6.30392Z" fill="#A9A9A9"/>
            </g>
            <defs>
            <clipPath id="clip0_49_2399">
            <rect width="28" height="28" fill="white" transform="translate(0.130859)"/>
            </clipPath>
            </defs>
            </svg>
            <p class="text-sm font-semibold text-gray-700">$14,000 - $25,000</p>
             <p class="text-sm text-gray-400 ">/monthly</p>
       </span>
      </div>

      <div class="flex mt-4">
        <span class="flex gap-5">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1309 0C7.06484 0 2.94336 4.12148 2.94336 9.1875C2.94336 10.8091 3.3718 12.4034 4.18231 13.7979C4.37127 14.123 4.58248 14.4398 4.8102 14.7396L11.7317 24H12.53L19.4515 14.7397C19.6792 14.4398 19.8904 14.1231 20.0794 13.7979C20.8899 12.4034 21.3184 10.8091 21.3184 9.1875C21.3184 4.12148 17.1969 0 12.1309 0ZM12.1309 12.2344C10.4508 12.2344 9.08398 10.8675 9.08398 9.1875C9.08398 7.50745 10.4508 6.14062 12.1309 6.14062C13.8109 6.14062 15.1777 7.50745 15.1777 9.1875C15.1777 10.8675 13.8109 12.2344 12.1309 12.2344Z" fill="#A9A9A9"/>
                </svg>

             <p class="text-sm font-semibold text-gray-700">Lagos, Nigeria</p>
              <p class="ml-auto text-sm text-gray-400">View more</p>
        </span>
       </div>

      <div class="flex items-center justify-between gap-5 mt-4 md:mt-6">
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white ">
            <svg width="56" height="55" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.130859" width="60" height="60" rx="30" fill="#FF5353"/>
                <g clip-path="url(#clip0_49_2419)">
                <path d="M35.7559 20.0547C32.9131 20.0547 31.0867 21.9148 30.1309 23.5861C29.175 21.9148 27.3486 20.0547 24.5059 20.0547C20.8982 20.0547 18.1309 22.8177 18.1309 26.4824C18.1309 30.456 21.5979 33.1621 26.7752 37.2593C29.3103 39.2637 29.4732 39.416 30.1309 39.9447C30.6676 39.5133 30.9646 39.2533 33.4865 37.2593C38.6638 33.1621 42.1309 30.456 42.1309 26.4824C42.1309 22.8178 39.3635 20.0547 35.7559 20.0547Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_49_2419">
                <rect width="24" height="24" fill="white" transform="translate(18.1309 18)"/>
                </clipPath>
                </defs>
                </svg>

        </a>
        <a href="#" class="px-8 py-2 text-sm font-medium text-gray-900 rounded-xl bg-btn-light">Apply Now</a>
    </div>
    </div>
</div>


</div>

{{--  card 4  --}}


<div class="max-w-sm mb-8 bg-white rounded-lg shadow-lg md:mb-0 md:w-1/2 lg:w-1/4">
    <div class="flex justify-end px-4 pt-4">
    <button id="dropdownButton" data-dropdown-toggle="dropdowns" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
        <span class="sr-only">Open dropdown</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
            <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
        </svg>
    </button>
    <!-- Dropdown menu -->
    <div id="dropdowns" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2" aria-labelledby="dropdownButton">
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
        </li>
        </ul>
    </div>
</div>
<div class="flex flex-col items-center pb-10">
    <div class="w-24 h-24 mb-3 bg-gray-200 rounded-full shadow-lg" ></div>
    <h5 class="mb-1 font-bold text-gray-900 ">Database Programmer</h5>
    <span class="text-sm font-semibold text-gray-500">Maximoz Team</span>
    <div>
      <div class="flex mt-4">
       <span class="flex gap-5">
        <svg width="29" height="24" viewBox="0 0 29 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_49_2399)">
            <path d="M14.1309 7.83985C10.7294 7.83985 7.7843 10.2023 7.04642 13.5228L4.62995 24.3969C4.61222 24.4767 4.60328 24.5581 4.60328 24.6399C4.60328 25.2584 5.10472 25.7598 5.72328 25.7598H22.5384C22.6202 25.7598 22.7016 25.7509 22.7814 25.7332C23.3852 25.599 23.766 25.0007 23.6318 24.3969L21.2153 13.5228C20.4774 10.2023 17.5323 7.83985 14.1309 7.83985ZM14.1309 5.59985C18.5822 5.59985 22.4363 8.69151 23.402 13.0369L25.8184 23.911C26.221 25.7225 25.0788 27.5173 23.2673 27.9198C23.028 27.973 22.7836 27.9998 22.5384 27.9998H5.72328C3.8676 27.9998 2.36328 26.4955 2.36328 24.6399C2.36328 24.3947 2.39011 24.1503 2.44329 23.911L4.85976 13.0369C5.82539 8.69151 9.67951 5.59985 14.1309 5.59985Z" fill="#A9A9A9"/>
            <path d="M16.3709 12.3198C16.9895 12.3198 17.4909 12.8213 17.4909 13.4398C17.4909 14.0584 16.9895 14.5598 16.3709 14.5598H13.5709C13.2617 14.5598 13.0109 14.8106 13.0109 15.1198C13.0109 15.4291 13.2617 15.6798 13.5709 15.6798H14.6909C16.2373 15.6798 17.4909 16.9334 17.4909 18.4798C17.4909 20.0262 16.2373 21.2798 14.6909 21.2798H11.8909C11.2724 21.2798 10.7709 20.7784 10.7709 20.1598C10.7709 19.5413 11.2724 19.0398 11.8909 19.0398H14.6909C15.0002 19.0398 15.2509 18.7891 15.2509 18.4798C15.2509 18.1706 15.0002 17.9198 14.6909 17.9198H13.5709C12.0245 17.9198 10.7709 16.6662 10.7709 15.1198C10.7709 13.5734 12.0245 12.3198 13.5709 12.3198H16.3709Z" fill="#A9A9A9"/>
            <path d="M13.011 11.1999C13.011 10.5813 13.5124 10.0799 14.131 10.0799C14.7495 10.0799 15.251 10.5813 15.251 11.1999V13.4399C15.251 14.0584 14.7495 14.5599 14.131 14.5599C13.5124 14.5599 13.011 14.0584 13.011 13.4399V11.1999Z" fill="#A9A9A9"/>
            <path d="M15.251 22.3999C15.251 23.0184 14.7495 23.5199 14.131 23.5199C13.5124 23.5199 13.011 23.0184 13.011 22.3999V20.1599C13.011 19.5413 13.5124 19.0399 14.131 19.0399C14.7495 19.0399 15.251 19.5413 15.251 20.1599V22.3999Z" fill="#A9A9A9"/>
            <path d="M12.9308 6.30392C13.1605 6.87824 12.8812 7.53004 12.3069 7.75977C11.7325 7.9895 11.0807 7.71015 10.851 7.13583L8.61101 1.53583C8.24701 0.625829 9.14482 -0.279727 10.0579 0.0764517C10.8966 0.403606 11.5217 0.559878 11.8909 0.559878C11.9828 0.559878 12.059 0.540236 12.2253 0.469561C12.2695 0.450797 12.3213 0.42789 12.443 0.374064C13.0223 0.120198 13.4798 -0.000122447 14.1309 -0.000122447C14.7805 -0.000122447 15.2453 0.120518 15.8265 0.371934C15.9739 0.436508 16.0328 0.462191 16.085 0.483664C16.2286 0.542794 16.2976 0.559878 16.3709 0.559878C16.7185 0.559878 17.3492 0.4022 18.212 0.0733324C19.1239 -0.274297 20.0133 0.629663 19.6508 1.53583L17.4108 7.13583C17.1811 7.71015 16.5293 7.9895 15.9549 7.75977C15.3806 7.53004 15.1013 6.87824 15.331 6.30392L16.7403 2.78061C16.6116 2.79343 16.4885 2.79988 16.3709 2.79988C15.9622 2.79988 15.6234 2.71608 15.2321 2.55494C15.1548 2.52312 15.0701 2.48618 14.9371 2.42782C14.6129 2.28755 14.4292 2.23988 14.1309 2.23988C13.8355 2.23988 13.662 2.28549 13.3421 2.42569C13.2322 2.47437 13.1626 2.50512 13.1014 2.53114C12.6819 2.7094 12.331 2.79988 11.8909 2.79988C11.7726 2.79988 11.6497 2.79374 11.5218 2.78153L12.9308 6.30392Z" fill="#A9A9A9"/>
            </g>
            <defs>
            <clipPath id="clip0_49_2399">
            <rect width="28" height="28" fill="white" transform="translate(0.130859)"/>
            </clipPath>
            </defs>
            </svg>
            <p class="text-sm font-semibold text-gray-700">$14,000 - $25,000</p>
             <p class="text-sm text-gray-400 ">/monthly</p>
       </span>
      </div>

      <div class="flex mt-4">
        <span class="flex gap-5">
            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1309 0C7.06484 0 2.94336 4.12148 2.94336 9.1875C2.94336 10.8091 3.3718 12.4034 4.18231 13.7979C4.37127 14.123 4.58248 14.4398 4.8102 14.7396L11.7317 24H12.53L19.4515 14.7397C19.6792 14.4398 19.8904 14.1231 20.0794 13.7979C20.8899 12.4034 21.3184 10.8091 21.3184 9.1875C21.3184 4.12148 17.1969 0 12.1309 0ZM12.1309 12.2344C10.4508 12.2344 9.08398 10.8675 9.08398 9.1875C9.08398 7.50745 10.4508 6.14062 12.1309 6.14062C13.8109 6.14062 15.1777 7.50745 15.1777 9.1875C15.1777 10.8675 13.8109 12.2344 12.1309 12.2344Z" fill="#A9A9A9"/>
                </svg>

             <p class="text-sm font-semibold text-gray-700">Lagos, Nigeria</p>
              <p class="ml-auto text-sm text-gray-400">View more</p>
        </span>
       </div>

      <div class="flex items-center justify-between gap-5 mt-4 md:mt-6">
        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white ">
            <svg width="56" height="55" viewBox="0 0 61 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.130859" width="60" height="60" rx="30" fill="#FF5353"/>
                <g clip-path="url(#clip0_49_2419)">
                <path d="M35.7559 20.0547C32.9131 20.0547 31.0867 21.9148 30.1309 23.5861C29.175 21.9148 27.3486 20.0547 24.5059 20.0547C20.8982 20.0547 18.1309 22.8177 18.1309 26.4824C18.1309 30.456 21.5979 33.1621 26.7752 37.2593C29.3103 39.2637 29.4732 39.416 30.1309 39.9447C30.6676 39.5133 30.9646 39.2533 33.4865 37.2593C38.6638 33.1621 42.1309 30.456 42.1309 26.4824C42.1309 22.8178 39.3635 20.0547 35.7559 20.0547Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_49_2419">
                <rect width="24" height="24" fill="white" transform="translate(18.1309 18)"/>
                </clipPath>
                </defs>
                </svg>

        </a>
        <a href="#" class="px-8 py-2 text-sm font-medium text-gray-900 rounded-xl bg-btn-light">Apply Now</a>
    </div>
    </div>
</div>


</div>

</div>

</div>
