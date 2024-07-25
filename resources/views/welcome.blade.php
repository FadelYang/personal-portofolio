<x-guest-layout>
    <x-slot name="slot">
        <main class="container relative h-screen mx-auto overflow-y-auto snap-y snap-mandatory snap-container">
            {{-- hero section --}}
            <div class="flex h-[calc(100vh-80px)] snap-start">
                <div class="m-auto space-y-12 text-center">
                    <h1 class="text-4xl font-black text-black h1" id="headingHero"></h1>
                    <h2 class="max-w-2xl text-4xl font-black text-black h2 h1" id="secondaryHeadingHero">
                    </h2>
                    <button class="text-white btn btn-neutral">See My Works</button>
                </div>
            </div>
            {{-- latest works section --}}
            <div class="space-y-14 snap-start">
                <h1 class="text-4xl font-black text-center">My Latest Work</h1>
                <div class="flex flex-wrap items-center justify-center gap-3">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="rounded-none shadow-xl card bg-base-100 w-96">
                            <figure>
                                <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                                    alt="Shoes" />
                            </figure>
                            <div class="space-y-4 card-body">
                                <h2 class="text-2xl font-bold card-title">
                                    Project Title
                                </h2>
                                <p class="text-lg">If a dog chews shoes whose shoes does he choose?</p>
                                <div class="card-actions">
                                    <div class="text-white badge badge-neutral">Tag Category</div>
                                    <div class="text-white badge badge-neutral">Tag Category</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="flex items-center justify-center">
                    <button class="text-white btn btn-neutral">View More</button>
                </div>
            </div>
        </main>

    </x-slot>
</x-guest-layout>
