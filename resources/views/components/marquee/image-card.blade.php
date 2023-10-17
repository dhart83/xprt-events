<div class="relative w-40 md:w-52 lg:w-60 xl:w-72 bg-gray-900 text-white rounded-lg overflow-hidden">
    <!-- Full-size image -->

    <img src="{{ $src }}" alt="Image" class="w-full h-auto object-cover object-center" />

    <!-- Black fading overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black via-10% to-transparent to-60%"></div>

    <!-- Card content -->
    <div class="absolute bottom-0 left-0 right-0 px-4 py-2">
        <!-- Small title -->
        <h2 class="text-sm lg:text-lg text-center font-semibold mb-0">{{ $slot }}</h2>
        <!-- Additional text or content -->
        {{-- <p>Your text content goes here.</p> --}}
    </div>
</div>