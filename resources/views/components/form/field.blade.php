<fieldset>
    <label for="{{ $for }}" class="block font-semibold">
        {{ $slot }}
        @if(!empty($note))
            <span class="text-gray-400 font-normal">{{ $note }}</span>
        @endif
    </label>

    @php
        $baseClasses = "mt-2 w-full rounded-lg border border-gray-200 bg-white py-2 px-3 focus:outline-none focus:ring-2 focus:ring-brand-gold/30 focus:border-brand-gold";
    @endphp

    @if ($type === 'textarea')
        <textarea
            id="{{ $for }}"
            name="{{ $for }}"
            rows="4"
            {{ $attributes->class([$baseClasses]) }}
        >{{ old($for) }}</textarea>

    @elseif ($type === 'select')
        <select
            id="{{ $for }}"
            name="{{ $for }}"
            {{ $attributes->class([$baseClasses]) }}
        >
            {{-- Placeholder option --}}
            <option value="" disabled {{ old($for) ? '' : 'selected' }}>
                Select one…
            </option>

            @foreach (explode(',', $values) as $value)
                @php $v = trim($value); @endphp
                <option value="{{ $v }}" {{ old($for) === $v ? 'selected' : '' }}>
                    {{ $v }}
                </option>
            @endforeach
        </select>

    @else
        <input
            type="{{ $type }}"
            id="{{ $for }}"
            name="{{ $for }}"
            value="{{ old($for) }}"
            {{ $attributes->class([$baseClasses]) }}
        />
    @endif
</fieldset>