<fieldset>

    <label for={{ $for }} class="block font-bold">{{ $slot }}
        <span class="text-gray-400 font-normal">{{ $note }}</span>
    </label>

    @if ($type == 'textarea')

    <textarea id={{ $for }} name={{ $for }} {{ $attributes->class(["w-full py-2 px-3 rounded-lg border border-gray-300 dark:bg-white/10 focus:border-secondary dark:border-black
        dark:focus:border-secondary focus:outline-none"]) }}
        rows="4">
    </textarea>

    @elseif ($type == 'select')

    <select name={{ $for }} id={{ $for }} {{ $attributes->class(["w-full py-2 px-3 rounded-lg border border-gray-300
        dark:bg-white/10 focus:border-secondary dark:border-black
        dark:focus:border-secondary focus:outline-none"]) }}>
        @foreach ( explode(',', $values) as $value)
        <option value="{{ trim($value) }}" {{ $loop->index == 1 ? 'selected' : '' }}>{{ trim($value) }}</option>
        @endforeach
    </select>

    @else


    <input type={{ $type }} id={{ $for }} name={{ $for }} {{ $attributes->class(
    ["w-full py-2 px-3 rounded-lg border border-gray-300 dark:bg-white/10 focus:border-secondary dark:border-black
    dark:focus:border-secondary focus:outline-none"])
    }} />

    @endif



</fieldset>