@props([
    'title' => '',
    'required' => true,
    'name' => '',
    'class' => '',
    'value' => '',
])

<div class="form-group mb-2">
    <label class="form-label">
        {{ $title }} @if($required) <span class="text-danger">*</span>  @endif
    </label>
    <textarea rows="10" class="form-custom-control text-area {{ $class }}" name="{{ $name }}" name="{{ $name }}" @if($required) required @endif>{{ $value }}</textarea>
    @error($name)
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
</div>