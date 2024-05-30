<div {{ $attributes->merge(['class' => 'max-w-[510px] w-full mb-12 lg:mb-20 md:mx-auto md:text-center']) }}>
    <span class="text-secondary mb-2 block text-lg font-semibold">
        {{ $subHeading }}
    </span>
    <h2 class="mb-4 font-bold text-3xl sm:text-4xl md:text-[40px]">
        {{ $slot }}
    </h2>
    @if ($description != '')
    <p class="">
        {{ $description }}
    </p>
    @endif
</div>