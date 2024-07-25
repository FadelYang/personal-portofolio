<nav class="container sticky top-0 z-50 flex items-center justify-between px-4 py-4 mx-auto bg-white lg:max-w-5xl ">
    <a class="text-3xl font-bold leading-none" href="#">
        F
    </a>
    <div class="lg:hidden">
        <button class="flex items-center p-3 text-black navbar-burger">
            <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul
        class="absolute hidden space-x-10 transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-24">
        <li><a href="#" class="text-xl font-black text-black hover:text-black/70">Home</a></li>
        <li><a href="#" class="text-xl font-black text-black hover:text-black/70">Works</a></li>
        <li><a href="#" class="text-xl font-black text-black hover:text-black/70">Blogs</a></li>
    </ul>
    <div class="hidden lg:block">
        <a class="font-bold text-white transition duration-200 hidden-sm btn btn-neutral" href="#">Contact
            Me!</a>
    </div>

</nav>
<div class="relative z-50 hidden navbar-menu">
    <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
    <nav class="fixed top-0 bottom-0 left-0 flex flex-col w-5/6 max-w-sm px-6 py-6 overflow-y-auto bg-white border-r">
        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                F
            </a>
            <button class="navbar-close">
                <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1"><a href="#" class="text-xl font-black text-black hover:text-black/70">Home</a>
                </li>
                <li class="mb-1"><a href="#" class="text-xl font-black text-black hover:text-black/70">Works</a>
                </li>
                <li class="mb-1"><a href="#" class="text-xl font-black text-black hover:text-black/70">Blogs</a>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a href="#" class="font-bold text-white transition duration-200 hidden-sm btn btn-neutral">Contact
                    Me!</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2021</span>
            </p>
        </div>
    </nav>
</div>
