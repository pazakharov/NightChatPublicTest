<nav x-data="{ open: false }" class="bg-gray-700 border-b border-gray-900 col-span-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex w-full justify-end h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex-shrink-0 flex justify-self-start content-center">
                    <a href="{{ route('chat') }}" class="content-center flex">
                        <x-application-logo class="block h-10 m-auto fill-current text-gray-100" />
                    </a>
                </div>

                <!-- Navigation Links -->




              

                @guest

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex justify-self-end">
                        <x-nav-link href="{{ route('register') }}"
                            >
                            Регистрация
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link href="{{ route('login') }}" >
                            Войти с паролем
                        </x-nav-link>
                    </div>

                @endguest
            </div>
            
                @auth
                <form class="hidden" id="logoutForm" method="POST" action="{{ route('logout') }}">@csrf</form>
                <div class="flex content-center text-gray-50">
                
                
                
                <div class="my-auto pr-4 capitalize">{{ Auth::user()->name }}</div>          
                
                
                <div class="flex content-center">
                <button class="bg-gray-300 w-max-content my-auto hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                
                
                 <div class="pr-1">Выйти</div>
                 <img style="height:24px; width:24px;" src="./img/logout.svg" alt="">
                </button>
                </div>
                </div>
                
                @endauth

            


        </div>


</nav>
