<div class="mb-2">
    @if ($label ?? null)
        <label class="label">
            {{ $label }}
        </label>
    @endif

    <input autocomplete="off" type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $name }}"
        class="w-full border-gray-300 border-2 rounded-lg" placeholder="{{ $placeholder ?? '' }}"
        value="{{ $attributes['valueText'] }}" {{ $required ?? false ? 'required' : '' }}>
    <div>

        @error($name)
            <p class="error-label" role="alert">{{ $message }}</p>
        @enderror
    </div>
</div>
