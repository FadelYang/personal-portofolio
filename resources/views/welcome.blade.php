<x-guest-layout>
    <x-slot name="slot">
        <main>
            {{-- hero section --}}
            <div class="flex h-[calc(100vh-80px)]">
                <div class="m-auto space-y-12 text-center">
                    <h1 class="text-4xl font-black text-black h1" id="headingHero"></h1>
                    <h2 class="max-w-2xl text-4xl font-black text-black h2 h1" id="secondaryHeadingHero">
                    </h2>
                    <button class="text-white btn btn-neutral">See My Works</button>
                </div>
            </div>
        </main>
    </x-slot>
</x-guest-layout>
