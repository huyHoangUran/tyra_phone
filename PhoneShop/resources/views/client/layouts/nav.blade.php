<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('list_products') }}" class="nav-link dropdown-toggle"
                                data-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">

                                <li class="nav-item"><a class="nav-link" href="{{ route('list_products') }}">Shop</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>

                    <ul class="nav-shop">
                        <li class=" filter-bar-search">
                            <form action="">
                                <input type="text" placeholder="Search">
                                <button><i class="ti-search"></i></button>
                            </form>
                        </li>
                        <li class="nav-item"><button><span class="nav-shop__circle"><a
                                        href="{{ route('list_cart') }}"><i
                                            class="ti-shopping-cart"></i></a></span></button> </li>
                        <li class="nav-item">
                            @auth
                                {{ auth()->user()->name }}
                            @else
                                <a href="{{ route('login') }}">Đăng nhập

                                </a>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

{{-- <div class="hidden sm:flex sm:items-center sm:ml-6">
    <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
        <div @click="open =! open">
            <button
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                <div>Hoang Nguyen</div>

                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </button>
        </div>

        <div x-show="open" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg origin-top-right right-0" @click="open = false">
            <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white dark:bg-gray-700">
                <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                    href="http://127.0.0.1:8000/profile">Profile</a>

                <!-- Authentication -->
                <form method="POST" action="http://127.0.0.1:8000/logout">
                    <input type="hidden" name="_token" value="dUtaGy7V1Acxy721ycrQ41gDPDNWCuMufvWTeoDK">
                    <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out"
                        href="http://127.0.0.1:8000/logout"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">Log
                        Out</a>
                </form>
            </div>
        </div>
    </div>
</div> --}}
