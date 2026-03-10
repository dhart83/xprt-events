<fieldset>
    <label for="{{ $for }}" class="block text-sm font-semibold text-brand-navy sm:text-base">
        {{ $slot }}
        @if(!empty($note))
            <span class="ml-1 font-normal text-brand-goldText">{{ $note }}</span>
        @endif
    </label>

    @php
        $baseClasses = "mt-2 w-full rounded-xl border border-brand-navy/10 bg-white px-4 py-3 text-brand-text placeholder:text-brand-text/45 shadow-sm transition focus:border-brand-gold focus:outline-none focus:ring-2 focus:ring-brand-gold/25";
    @endphp

    @if ($type === 'textarea')
        <textarea
            id="{{ $for }}"
            name="{{ $for }}"
            rows="5"
            {{ $attributes->class([$baseClasses . ' min-h-[140px] resize-y']) }}
        >{{ old($for) }}</textarea>

    @elseif ($type === 'select')
        <select
            id="{{ $for }}"
            name="{{ $for }}"
            {{ $attributes->class([$baseClasses]) }}
        >
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