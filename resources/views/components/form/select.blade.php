<div class="mb-2">
    @if ($label ?? null)
        <label class="label">
            {{ $label }}
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $name }}" class="w-full border-gray-300 border-2 rounded-lg">
        <option value=""> {{ $placeholder ?? '' }} </option>
        @foreach ($model as $category)
            <option value="{{ $category->id }}" @if ($value == $category->id) selected @endif>
                {{ $category->name }}
            </option>
        @endforeach

    </select>


    @error($name)
        <p class="error-label" role="alert">{{ $message }}</p>
    @enderror
</div>
