<div class="bg-white ">

<div class="items-center justify-center p-12 mt-12 bg-white ">

    <div class="container bg-white md:mx-auto md:p-6" id="news-card">
        <div class="flex flex-col lg:flex-row lg:items-center lg:space-x-6">
            <!-- Text Section -->
            <div class="w-full mb-6 text-center lg:w-1/2 lg:mb-0 lg:text-left" id="text-section">
                <span class="text-sm text-gray-500">News!</span>
                <h2 class="mt-2 text-4xl font-bold text-gray-800">German Frigate Deploys on Indo-Pacific Mission</h2>
                <p class="mt-4 text-gray-600">
                    Germany dispatched a frigate to the Indo-Pacific region Monday for the first time in almost 20 years, a move that could put strain on Berlins delicate relationship with Beijing.
                </p>
                <button class="w-full px-12 py-2 mt-6 text-white transition rounded-full sm:w-auto bg-btn hover:bg-purple-700">
                    Read more
                </button>
            </div>

            <!-- Image Section -->
            <div class="w-full lg:w-1/2">
                <img src="img/Rectangle 9.png" alt="Newspaper Image" class="object-cover w-full h-full rounded-lg" id="image-section">
            </div>
        </div>
    </div>



    <!-- Trending Section with Navigation Buttons -->
    <div class="flex justify-between p-6 mx-auto bg-white">
        <h2 class="text-xl font-bold text-gray-800">Trending</h2>
        <div class="flex items-center space-x-4">
            <button class="p-4 border border-gray-200 rounded-full" onclick="prevNews()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="p-4 border border-gray-200 rounded-full" onclick="nextNews()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>



    </div>

    <div class="grid grid-cols-1 gap-4 bg-white md:grid-cols-3">


<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="img/Rectangle 11.png" alt="" />
    </a>
    <div class="p-5">
            <p class="mb-3 text-xs font-semibold text-pop">Technology - 12 August 2021</p>

            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">NCI Information Systems wins  US Navy’s Seaport-NxG contract</h5>
<a href="" class="text-xs font-semibold text-btn-orange">Read Article</a>
    </div>
</div>






</div>

<div class="mt-4">
    {{--  {{ $cards->links() }}  --}}
</div>
    </div>

    <script>
        const news = [
            {
                title: "German Frigate Deploys on Indo-Pacific Mission",
                description: "Germany dispatched a frigate to the Indo-Pacific region Monday for the first time in almost 20 years, a move that could put strain on Berlin’s delicate relationship with Beijing.",
                image: "https://via.placeholder.com/300x200",
            },
            {
                title: "New Space Race Heats Up as China Plans Moon Mission",
                description: "China is ramping up its space program, aiming to put astronauts on the moon by the 2030s. This move could reignite competition with other spacefaring nations.",
                image: "https://via.placeholder.com/300x200/FF0000/FFFFFF",
            },
            {
                title: "Global Markets Rally Amid Economic Recovery Signs",
                description: "Stock markets worldwide surged today as investors grew optimistic about global economic recovery, driven by positive employment data.",
                image: "img/Rectangle 9.png",
            }
        ];

        let currentNewsIndex = 0;

        function updateNews() {
            const textSection = document.getElementById('text-section');
            const imageSection = document.getElementById('image-section');
            const newsItem = news[currentNewsIndex];

            textSection.querySelector('h2').textContent = newsItem.title;
            textSection.querySelector('p').textContent = newsItem.description;
            imageSection.src = newsItem.image;
        }

        function nextNews() {
            currentNewsIndex = (currentNewsIndex + 1) % news.length;
            updateNews();
        }

        function prevNews() {
            currentNewsIndex = (currentNewsIndex - 1 + news.length) % news.length;
            updateNews();
        }
    </script>

    @include('components.footer')
