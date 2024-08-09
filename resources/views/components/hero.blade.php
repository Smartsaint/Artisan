<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partial-Viewport Slider with Tailwind CSS</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-container {
            width: 100vw;
            height: 80vh; /* Adjust the height here */
            overflow: hidden;
        }
        .slider {
            display: flex;
            transition: transform 0.5s ease;
            height: 100%;
        }
        .slider-item {
            min-width: 100vw;
            height: 100%;
            box-sizing: border-box;
        }
        img{
            height: 26rem;

        }

        .bg-transparent-90 {
            background-color: rgba(255, 255, 255, 0.919);
          }

          @media (max-width: 768px) {
            .slider-item {
                flex-direction: column;
                padding: 8px;
                margin-top: 15px;
            }

            .slider-container {
                width: 100vw;
                height: 100vh; /* Adjust the height here */
                overflow: hidden;
            }

            .slider-item .flex-1 {
                padding: 8px;
            }

            .slider-item h1 {
                font-size: 1.75rem; /* Adjust font size for mobile */
                text-align: center;
            }

            .slider-item p {
                text-align: center;
            }

            .slider-item .flex {
                gap: 6px;

            }

            {{--  .slider-item .absolute {
                position: ; /* Remove absolute positioning on mobile */
                margin-top: 13rem;
            }  --}}

            {{--  .slider-item .absolute svg {
                display: flex;
                margin: 16px auto;
                max-width: 100%;
                height: auto;
            }  --}}
        }

    </style>
</head>
<body class="flex items-center justify-center mb-12 bg-white auto">

<div class="mt-12 slider-container md:relative">
    <div class="slider">
        <div class="slider-item md:flex items-center justify-between bg-[#f8f9fd] w-full p-12">
            <div class="flex-1 p-4">
                <h1 class="text-6xl font-bold text-dark">
                    Find out <span class="text-blue"> talented <br> freelancer</span> with better <br> review faster
                </h1>
                <p class="mt-2 break-words">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="flex items-center gap-6 mt-4">
                    <a href="#" class="px-5 py-2 text-sm font-medium text-center text-white bg-btn rounded-3xl">Discover Now</a>
                    <span class="p-1 bg-white rounded-full">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_18_50)">
                                <path d="M12.1309 0C5.50348 0 0.130859 5.37262 0.130859 12C0.130859 18.6274 5.50348 24 12.1309 24C18.7587 24 24.1309 18.6274 24.1309 12C24.1309 5.37262 18.7587 0 12.1309 0ZM12.1309 21.6C6.83741 21.6 2.53086 17.2935 2.53086 12C2.53086 6.70655 6.83741 2.4 12.1309 2.4C17.4243 2.4 21.7309 6.70655 21.7309 12C21.7309 17.2935 17.4243 21.6 12.1309 21.6Z" fill="#5F4BDB"/>
                                <path d="M16.4951 11.1596L10.6756 7.79961C9.87541 7.33785 9.2207 7.71562 9.2207 8.63961V15.3596C9.2207 16.2836 9.87541 16.6618 10.6756 16.1996L16.4951 12.8396C17.2952 12.3778 17.2952 11.6214 16.4951 11.1596Z" fill="#5F4BDB"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_18_50">
                                    <rect width="24" height="24" fill="white" transform="translate(0.130859)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </span>
                    <p>Watch Demo</p>
                </div>
            </div>
            <div class="md:flex-1 ">
                  <span class="md:mt-[8rem] absolute">
                    <svg width="37" height="66" viewBox="0 0 37 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="3.24407" cy="3.11321" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="18.1874" cy="3.11321" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="33.1308" cy="3.11321" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="3.24407" cy="18.0566" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="18.1874" cy="18.0566" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="33.1308" cy="18.0566" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="3.24407" cy="32.9999" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="18.1874" cy="32.9999" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="33.1308" cy="32.9999" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="3.24407" cy="47.9433" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="18.1874" cy="47.9433" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="33.1308" cy="47.9433" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="3.24407" cy="62.8866" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="18.1874" cy="62.8866" r="3.11321" fill="#5F4BDB"/>
                        <circle cx="33.1308" cy="62.8866" r="3.11321" fill="#5F4BDB"/>
                        </svg>

                </span>

                <span class="absolute md:right-[15rem]  " >
                    <svg width="127" height="136" viewBox="0 0 127 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_18_114)">
                        <path d="M102.131 101.224C111.52 101.224 119.131 93.6127 119.131 84.2239V35C119.131 25.6112 111.52 18 102.131 18L54.1309 18C44.742 18 37.1309 25.6112 37.1309 35L37.1309 101.224H102.131Z" fill="white"/>
                        <path d="M46.3232 92L55.5156 101.192L37.1309 110V101.192L46.3232 92Z" fill="white"/>
                        </g>
                        <g clip-path="url(#clip0_18_114)">
                        <path d="M78.7812 35.6133V83.6094C91.9161 83.4703 102.52 72.779 102.52 59.6113C102.52 46.4437 91.9161 35.7524 78.7812 35.6133Z" fill="#FFB739"/>
                        <path d="M78.7803 35.6133C78.6934 35.6123 78.6065 35.6113 78.5195 35.6113C65.265 35.6113 54.5195 46.3568 54.5195 59.6113C54.5195 72.8659 65.265 83.6113 78.5195 83.6113C78.6065 83.6113 78.6934 83.6104 78.7803 83.6094C89.7807 83.4433 98.6564 72.7626 98.6564 59.6113C98.6564 46.4601 89.7807 35.7794 78.7803 35.6133Z" fill="#FFD17E"/>
                        <path d="M93.8274 56.7139H92.3787L78.5195 70.8868H90.9044C93.619 67.9079 95.2761 63.9495 95.2761 59.6112V58.1626C95.2761 57.3658 94.6242 56.7139 93.8274 56.7139Z" fill="#09213D"/>
                        <path d="M64.6611 56.7139H63.2124C62.4156 56.7139 61.7637 57.3658 61.7637 58.1626V59.6113C61.7637 63.9491 63.4205 67.9072 66.1346 70.886L89.6265 69.6241C91.3549 66.8288 92.3794 63.3619 92.3794 59.6113L64.6611 56.7139Z" fill="#233952"/>
                        <path d="M90.903 70.8853C87.8733 74.2106 83.5272 76.315 78.6973 76.3653L89.6243 69.623C90.0724 70.021 90.4993 70.442 90.903 70.8853Z" fill="#FF2B59"/>
                        <path d="M89.6238 69.6239C87.1282 73.6599 83.1646 76.2965 78.6968 76.3661C78.6379 76.3671 78.578 76.3671 78.5182 76.3671C73.6168 76.3671 69.2011 74.252 66.1328 70.8871C69.2002 67.5204 73.6168 65.4053 78.5182 65.4053C82.7744 65.4053 86.6656 67.0008 89.6238 69.6239Z" fill="#FF4E51"/>
                        <path d="M89.4819 56.7139L88.0332 61.0599H90.9306C91.7274 61.0599 92.3793 60.408 92.3793 59.6112V56.7139H89.4819Z" fill="#FFEAC3"/>
                        <path d="M89.4811 56.7139V59.6112C89.4811 60.408 88.8292 61.0599 88.0324 61.0599H66.1088C65.3121 61.0599 64.6602 60.408 64.6602 59.6112V56.7139H89.4811Z" fill="white"/>
                        <path d="M70.4546 46.5732C69.6545 46.5732 69.0059 47.2219 69.0059 48.0219V52.368C69.0059 53.1681 69.6545 53.8167 70.4546 53.8167C71.2546 53.8167 71.9032 53.1681 71.9032 52.368V48.0219C71.9032 47.2219 71.2547 46.5732 70.4546 46.5732Z" fill="#233952"/>
                        <path d="M86.5835 46.5732C85.7834 46.5732 85.1348 47.2219 85.1348 48.0219V52.368C85.1348 53.1681 85.7834 53.8167 86.5835 53.8167C87.3835 53.8167 88.0321 53.1681 88.0321 52.368V48.0219C88.0321 47.2219 87.3835 46.5732 86.5835 46.5732Z" fill="#233952"/>
                        <path d="M64.6596 53.8163C65.4597 53.8163 66.1083 53.1677 66.1083 52.3676C66.1083 51.5675 65.4597 50.9189 64.6596 50.9189C63.8595 50.9189 63.2109 51.5675 63.2109 52.3676C63.2109 53.1677 63.8595 53.8163 64.6596 53.8163Z" fill="#FF4E51"/>
                        <path d="M92.3784 53.8163C93.1785 53.8163 93.8271 53.1677 93.8271 52.3676C93.8271 51.5675 93.1785 50.9189 92.3784 50.9189C91.5783 50.9189 90.9297 51.5675 90.9297 52.3676C90.9297 53.1677 91.5783 53.8163 92.3784 53.8163Z" fill="#FF4E51"/>
                        </g>
                        <defs>
                        <filter id="filter0_d_18_114" x="0.130859" y="0" width="156" height="166" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="19"/>
                        <feGaussianBlur stdDeviation="18.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.243137 0 0 0 0 0.207843 0 0 0 0 0.470588 0 0 0 0.03 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_18_114"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_18_114" result="shape"/>
                        </filter>
                        <clipPath id="clip0_18_114">
                        <rect width="48" height="48" fill="white" transform="translate(54.5195 35.6113)"/>
                        </clipPath>
                        </defs>
                        </svg>

                </span>

                <span class="absolute md:right-[13rem] right-[4rem] md:mt-[9rem] mt-[1rem]">
                    <svg width="35" height="34" viewBox="0 0 35 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.1309" cy="17" r="17" fill="#B2C3FF"/>
                        </svg>

                </span>

                <span class="absolute md:right-[7rem] right-[0rem]  md:mt-[12rem] mt-[10%] mb-">
                    <svg width="163" height="159" viewBox="0 0 283 279" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_9_24)">
                        <rect x="39.1309" y="28" width="204" height="201" rx="17" fill="white"/>
                        </g>
                        <rect x="75.1309" y="58" width="13" height="140.854" rx="6.5" fill="#EEEEEE"/>
                        <rect x="75.1309" y="136.946" width="13" height="62.0541" rx="6.5" fill="url(#paint0_linear_9_24)"/>
                        <rect x="105.131" y="58" width="13" height="140.854" rx="6.5" fill="#EEEEEE"/>
                        <rect x="105.131" y="168.142" width="13" height="30.7125" rx="6.5" fill="url(#paint1_linear_9_24)"/>
                        <rect x="135.131" y="58" width="13" height="140.854" rx="6.5" fill="#EEEEEE"/>
                        <rect x="135.131" y="141.665" width="13" height="57.1889" rx="6.5" fill="url(#paint2_linear_9_24)"/>
                        <rect x="165.131" y="58" width="13" height="140.854" rx="6.5" fill="#EEEEEE"/>
                        <rect x="165.131" y="110.953" width="13" height="87.9014" rx="6.5" fill="url(#paint3_linear_9_24)"/>
                        <rect x="195.131" y="58" width="13" height="140.854" rx="6.5" fill="#EEEEEE"/>
                        <rect x="195.131" y="77.0625" width="13" height="121.791" rx="6.5" fill="url(#paint4_linear_9_24)"/>
                        <defs>
                        <filter id="filter0_d_9_24" x="0.130859" y="0" width="282" height="279" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="11"/>
                        <feGaussianBlur stdDeviation="19.5"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.07 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_9_24"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_9_24" result="shape"/>
                        </filter>
                        <linearGradient id="paint0_linear_9_24" x1="81.6309" y1="136.946" x2="81.6309" y2="199" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC188"/>
                        <stop offset="1" stop-color="#FA7C61"/>
                        </linearGradient>
                        <linearGradient id="paint1_linear_9_24" x1="111.631" y1="168.142" x2="111.631" y2="198.854" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC188"/>
                        <stop offset="1" stop-color="#FA7C61"/>
                        </linearGradient>
                        <linearGradient id="paint2_linear_9_24" x1="141.631" y1="141.665" x2="141.631" y2="198.854" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC188"/>
                        <stop offset="1" stop-color="#FA7C61"/>
                        </linearGradient>
                        <linearGradient id="paint3_linear_9_24" x1="171.631" y1="110.953" x2="171.631" y2="198.855" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC188"/>
                        <stop offset="1" stop-color="#FA7C61"/>
                        </linearGradient>
                        <linearGradient id="paint4_linear_9_24" x1="201.631" y1="77.0625" x2="201.631" y2="198.854" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFC188"/>
                        <stop offset="1" stop-color="#FA7C61"/>
                        </linearGradient>
                        </defs>
                        </svg>

                </span>

                <span class="absolute md:right-[13rem] right-[16%] bottom-[17%] md:bottom-[7rem]">
                    <svg width="45" height="44" viewBox="0 0 55 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="27.1309" cy="27" r="27" fill="#5F4BDB"/>
                        </svg>

                </span>

                <span class="absolute md:right-[8rem] right-[0rem] md:bottom-[5rem] bottom-[8rem]">
                    <svg width="37" height="37" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="2.31033" cy="23.1018" r="2.17947" transform="rotate(-90 2.31033 23.1018)" fill="#CCCCCC"/>
                        <circle cx="2.31033" cy="33.7219" r="2.17947" transform="rotate(-90 2.31033 33.7219)" fill="#CCCCCC"/>
                        <circle cx="2.31033" cy="44.342" r="2.17947" transform="rotate(-90 2.31033 44.342)" fill="#CCCCCC"/>
                        <circle cx="2.31033" cy="12.6408" r="2.17947" transform="rotate(-90 2.31033 12.6408)" fill="#CCCCCC"/>
                        <circle cx="2.31033" cy="2.17893" r="2.17947" transform="rotate(-90 2.31033 2.17893)" fill="#CCCCCC"/>
                        <circle cx="12.7713" cy="23.1018" r="2.17947" transform="rotate(-90 12.7713 23.1018)" fill="#CCCCCC"/>
                        <circle cx="12.7713" cy="33.7219" r="2.17947" transform="rotate(-90 12.7713 33.7219)" fill="#CCCCCC"/>
                        <circle cx="12.7713" cy="44.342" r="2.17947" transform="rotate(-90 12.7713 44.342)" fill="#CCCCCC"/>
                        <circle cx="12.7713" cy="12.6408" r="2.17947" transform="rotate(-90 12.7713 12.6408)" fill="#CCCCCC"/>
                        <circle cx="12.7713" cy="2.17893" r="2.17947" transform="rotate(-90 12.7713 2.17893)" fill="#CCCCCC"/>
                        <circle cx="23.2342" cy="23.1018" r="2.17947" transform="rotate(-90 23.2342 23.1018)" fill="#CCCCCC"/>
                        <circle cx="23.2342" cy="33.7219" r="2.17947" transform="rotate(-90 23.2342 33.7219)" fill="#CCCCCC"/>
                        <circle cx="23.2342" cy="44.342" r="2.17947" transform="rotate(-90 23.2342 44.342)" fill="#CCCCCC"/>
                        <circle cx="23.2342" cy="12.6408" r="2.17947" transform="rotate(-90 23.2342 12.6408)" fill="#CCCCCC"/>
                        <circle cx="23.2342" cy="2.17893" r="2.17947" transform="rotate(-90 23.2342 2.17893)" fill="#CCCCCC"/>
                        <circle cx="33.6951" cy="23.1018" r="2.17947" transform="rotate(-90 33.6951 23.1018)" fill="#CCCCCC"/>
                        <circle cx="33.6951" cy="33.7219" r="2.17947" transform="rotate(-90 33.6951 33.7219)" fill="#CCCCCC"/>
                        <circle cx="33.6951" cy="44.342" r="2.17947" transform="rotate(-90 33.6951 44.342)" fill="#CCCCCC"/>
                        <circle cx="33.6951" cy="12.6408" r="2.17947" transform="rotate(-90 33.6951 12.6408)" fill="#CCCCCC"/>
                        <circle cx="33.6951" cy="2.17893" r="2.17947" transform="rotate(-90 33.6951 2.17893)" fill="#CCCCCC"/>
                        <circle cx="44.156" cy="23.1018" r="2.17947" transform="rotate(-90 44.156 23.1018)" fill="#CCCCCC"/>
                        <circle cx="44.156" cy="33.7219" r="2.17947" transform="rotate(-90 44.156 33.7219)" fill="#CCCCCC"/>
                        <circle cx="44.156" cy="44.342" r="2.17947" transform="rotate(-90 44.156 44.342)" fill="#CCCCCC"/>
                        <circle cx="44.156" cy="12.6408" r="2.17947" transform="rotate(-90 44.156 12.6408)" fill="#CCCCCC"/>
                        <circle cx="44.156" cy="2.17893" r="2.17947" transform="rotate(-90 44.156 2.17893)" fill="#CCCCCC"/>
                        </svg>

                </span>
                <div class="">

 <div class="flex bg-white absolute md:mt-0 mt-[13rem] md:bottom-9 p-3 rounded-lg gap-2 ">
  <div>

    <span class="">
        <img src="/img/placeholder.svg" alt="" class="w-20 h-20">
    </span>
  </div>
  <div class="justify-between">
    <h1 class="font-bold ">David</h1>
    <p class="text-sm">Electrician</p>
    <div class="flex mt-2">
        <svg class="w-4 h-4 text-star ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
        </svg>
        <svg class="w-4 h-4 text-star ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
        </svg>
        <svg class="w-4 h-4 text-star ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
        </svg>
        <svg class="w-4 h-4 text-star ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
        </svg>
        <svg class="w-4 h-4 text-gray-300 ms-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
        </svg>
    </div>
</div>

<div class="flex gap-4 p-2">
    <span>
        <svg width="23" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1315 1.33301C13.2307 1.33301 10.3951 2.19319 7.98315 3.80479C5.57123 5.41638 3.69137 7.707 2.58128 10.387C1.4712 13.067 1.18075 16.0159 1.74667 18.861C2.31258 21.7061 3.70945 24.3194 5.76062 26.3706C7.81179 28.4217 10.4251 29.8186 13.2702 30.3845C16.1152 30.9504 19.0642 30.66 21.7442 29.5499C24.4242 28.4398 26.7148 26.56 28.3264 24.148C29.938 21.7361 30.7982 18.9005 30.7982 15.9997C30.7936 12.1112 29.2469 8.38338 26.4974 5.63384C23.7478 2.8843 20.02 1.3376 16.1315 1.33301ZM16.1315 27.9997C13.7581 27.9997 11.4381 27.2959 9.46467 25.9773C7.49128 24.6587 5.95321 22.7846 5.04496 20.5919C4.13671 18.3992 3.89907 15.9864 4.36209 13.6586C4.82512 11.3308 5.96801 9.19262 7.64624 7.51439C9.32447 5.83616 11.4627 4.69327 13.7904 4.23025C16.1182 3.76723 18.531 4.00487 20.7237 4.91312C22.9164 5.82137 24.7906 7.35944 26.1092 9.33283C27.4277 11.3062 28.1315 13.6263 28.1315 15.9997C28.128 19.1812 26.8626 22.2314 24.6129 24.4811C22.3632 26.7307 19.313 27.9961 16.1315 27.9997Z" fill="#30C736"/>
            <path d="M21.8956 11.6838L14.837 18.1544L11.7396 15.0571C11.6167 14.9298 11.4695 14.8282 11.3069 14.7583C11.1442 14.6884 10.9692 14.6516 10.7922 14.6501C10.6151 14.6486 10.4396 14.6823 10.2757 14.7493C10.1118 14.8164 9.96298 14.9154 9.83779 15.0406C9.7126 15.1658 9.6136 15.3146 9.54655 15.4785C9.47951 15.6424 9.44578 15.8179 9.44732 15.995C9.44885 16.172 9.48564 16.347 9.55551 16.5096C9.62539 16.6723 9.72697 16.8194 9.85432 16.9424L13.8543 20.9424C14.0973 21.1855 14.4247 21.3253 14.7683 21.3327C15.1118 21.3402 15.445 21.2147 15.6983 20.9824L23.6983 13.6491C23.9589 13.4101 24.1139 13.0773 24.1292 12.724C24.1444 12.3706 24.0187 12.0257 23.7796 11.7651C23.5406 11.5045 23.2078 11.3495 22.8545 11.3342C22.5012 11.319 22.1563 11.4447 21.8956 11.6838Z" fill="#30C736"/>
            </svg>
    </span>

    <span>
        <svg width="23" height="24" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1315 30.6673C19.0323 30.6673 21.868 29.8071 24.2799 28.1955C26.6918 26.584 28.5717 24.2933 29.6818 21.6133C30.7918 18.9334 31.0823 15.9844 30.5164 13.1393C29.9505 10.2943 28.5536 7.68093 26.5024 5.62976C24.4513 3.57859 21.8379 2.18172 18.9928 1.61581C16.1478 1.04989 13.1988 1.34034 10.5188 2.45042C7.83884 3.56051 5.54822 5.44037 3.93662 7.85229C2.32503 10.2642 1.46484 13.0999 1.46484 16.0007C1.46943 19.8891 3.01614 23.617 5.76568 26.3665C8.51522 29.116 12.2431 30.6627 16.1315 30.6673ZM16.1315 4.00066C18.5049 4.00066 20.825 4.70445 22.7984 6.02302C24.7718 7.3416 26.3098 9.21574 27.2181 11.4085C28.1263 13.6012 28.364 16.014 27.901 18.3417C27.4379 20.6695 26.295 22.8077 24.6168 24.4859C22.9386 26.1642 20.8004 27.3071 18.4726 27.7701C16.1448 28.2331 13.732 27.9955 11.5393 27.0872C9.3466 26.179 7.47246 24.6409 6.15388 22.6675C4.8353 20.6941 4.13151 18.374 4.13151 16.0007C4.13504 12.8191 5.40046 9.76895 7.65013 7.51927C9.8998 5.2696 12.95 4.00419 16.1315 4.00066Z" fill="#FF5353"/>
            <path d="M11.1873 20.9432C11.4373 21.1932 11.7764 21.3336 12.1299 21.3336C12.4835 21.3336 12.8226 21.1932 13.0726 20.9432L16.1299 17.8859L19.1873 20.9432C19.4387 21.1861 19.7755 21.3205 20.1251 21.3174C20.4747 21.3144 20.8092 21.1742 21.0564 20.927C21.3036 20.6798 21.4438 20.3453 21.4468 19.9957C21.4499 19.6461 21.3155 19.3093 21.0726 19.0579L18.0153 16.0005L21.0726 12.9432C21.3155 12.6917 21.4499 12.3549 21.4468 12.0053C21.4438 11.6557 21.3036 11.3213 21.0564 11.0741C20.8092 10.8269 20.4747 10.6867 20.1251 10.6836C19.7755 10.6806 19.4387 10.815 19.1873 11.0579L16.1299 14.1152L13.0726 11.0579C12.8211 10.815 12.4843 10.6806 12.1347 10.6836C11.7851 10.6867 11.4507 10.8269 11.2035 11.0741C10.9563 11.3213 10.8161 11.6557 10.813 12.0053C10.81 12.3549 10.9444 12.6917 11.1873 12.9432L14.2446 16.0005L11.1873 19.0579C10.9373 19.3079 10.7969 19.647 10.7969 20.0005C10.7969 20.3541 10.9373 20.6932 11.1873 20.9432Z" fill="#FF5353"/>
            </svg>

    </span>
</div>



</div>

                <img src="/img/Ellipse 39.svg" alt="Slide 1" class="md:ml-[8rem] mt-5 md:mt-[6rem] justify-center md:justify-start ">
            </div>
            </div>
        </div>

        <div class="flex items-center justify-center bg-blue-500 slider-item">
            <h2 class="text-2xl text-white">Slide 2</h2>
        </div>
        <div class="flex items-center justify-center bg-green-500 slider-item">
            <h2 class="text-2xl text-white">Slide 3</h2>
        </div>
        <div class="flex items-center justify-center bg-yellow-500 slider-item">
            <h2 class="text-2xl text-white">Slide 4</h2>
        </div>
        <div class="flex items-center justify-center bg-purple-500 slider-item">
            <h2 class="text-2xl text-white">Slide 5</h2>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-9 flex space-x-3 bottom-12 md:left-[4rem] right-[26%]">
        <button type="button" class="h-2 bg-white rounded-lg w-7" aria-label="Slide 1" data-slide-to="0"></button>
        <button type="button" class="h-2 bg-white rounded-lg w-7" aria-label="Slide 2" data-slide-to="1"></button>
        <button type="button" class="h-2 bg-white rounded-lg w-7" aria-label="Slide 3" data-slide-to="2"></button>
        <button type="button" class="h-2 bg-white rounded-lg w-7" aria-label="Slide 4" data-slide-to="3"></button>
        <button type="button" class="h-2 bg-white rounded-lg w-7" aria-label="Slide 5" data-slide-to="4"></button>
    </div>

    <button id="prev" class="absolute left-0 p-2 text-white transform -translate-y-1/2 top-1/2"></button>
    <button id="next" class="absolute right-0 p-2 text-white transform -translate-y-1/2 top-1/2"></button>
</div>

<script>
    const slider = document.querySelector('.slider');
    const slides = document.querySelectorAll('.slider-item');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    const indicators = document.querySelectorAll('[data-slide-to]');

    let currentIndex = 0;

    function showSlide(index) {
        slider.style.transform = `translateX(${-index * 100}vw)`;
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('bg-btn', i === index);
            indicator.classList.toggle('bg-white', i !== index);
        });
    }

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : slides.length - 1;
        showSlide(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex < slides.length - 1) ? currentIndex + 1 : 0;
        showSlide(currentIndex);
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            showSlide(currentIndex);
        });
    });

    showSlide(currentIndex);
</script>

</body>
</html>
