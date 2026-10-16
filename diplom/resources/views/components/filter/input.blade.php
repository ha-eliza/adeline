@props(['name', 'value'])

<label class="cursor-pointer group">
    <input type="checkbox" name="{{ $name }}[]" value="{{ $value }}" class="hidden peer"
        @change="$el.closest('form').submit()" {{ in_array($value, (array) request($name, [])) ? 'checked' : '' }}>

    <span
        {{ $attributes->merge(['class' => 'px-4 py-2 border border-primary-dark uppercase text-xs transition-all peer-checked:bg-black peer-checked:text-white block']) }}>
        {{ $slot }}
    </span>

    @if($errors->has($name . '.*'))
    <span class="text-red-500 text-xs">{{ $errors->first($name . '.*') }}</span>
@endif
</label>
