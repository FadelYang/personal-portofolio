<x-guest-layout>
    <x-slot name="slot">
        <main class="container relative h-screen mx-auto">
            {{-- hero section --}}
            <div class="flex h-[calc(100vh-80px)]">
                <div class="m-auto space-y-12 text-center">
                    <h1 class="text-4xl font-black text-black h1" id="headingHero"></h1>
                    <h2 class="max-w-2xl text-4xl font-black text-black h2 h1" id="secondaryHeadingHero">
                    </h2>
                    <button class="text-white btn btn-neutral">See My Works</button>
                </div>
            </div>
            {{-- latest works section --}}
            <div class="max-w-5xl mx-auto space-y-14 mb-14">
                <h1 class="text-4xl font-black text-center">My Latest Work</h1>
                <div class="flex flex-wrap items-center justify-center gap-3">
                    @for ($i = 0; $i < 9; $i++)
                        <div class="rounded-none shadow-xl card bg-base-100 w-80" data-aos="fade-up">
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
                <div class="flex items-center justify-center" data-aos="fade-up">
                    <button class="text-white btn btn-neutral">View More</button>
                </div>
            </div>
            {{-- collab section --}}
            <div class="flex">
                <div class="m-auto space-y-12 text-center">
                    <h1 class="text-4xl font-black text-black h1">I'm Open For Collaboration</h1>
                    <h2 class="max-w-lg text-4xl font-black text-black h2 h1">
                        Need someone to convert your design into fully operate web? or need manpower for your next
                        project? I’m here to give you a hand 😉
                    </h2>
                    <button class="text-white btn btn-neutral">Contact Me</button>
                </div>
            </div>
        </main>

    </x-slot>
</x-guest-layout>
