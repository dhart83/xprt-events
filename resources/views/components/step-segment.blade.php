<div {{ $attributes->merge([
    'class' =>
    'step relative grid lg:grid-cols-2 gap-16 max-w-6xl pt-16 pb-24 md:p-16 md:pb-24 mx-auto border-b md:border-b-0
    md:border-l border-gray-400'
    ])}}>
    <div class="flex flex-col justify-between gap-6">
        <h3 class="font-sans font-bold text-[22px] m-0">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-secondary to-primary">
                Step. {{ $step }}
            </span>
        </h3>
        <h4 class="text-3xl md:text-[40px] font-sans font-semibold m-0 leading-[3rem]">{{ $title }}</h4>
        <div>
            @if (isset($left))
            {{ $left }}
            @else
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum voluptas rem, explicabo
                temporibus eveniet illo sint voluptates unde animi expedita delectus eligendi, earum
                tenetur! Quis suscipit praesentium quae nobis placeat.</p>
            @endif
        </div>
        {{ $cta }}
    </div>
    <div class="flex justify-center items-center">
        @if (isset($right))
        {{ $right }}
        @else
        <img src={{ asset('assets/images/no-image.svg') }} alt="">
        @endif
    </div>
</div>