@props([
    'title' => '',
    'type' => 'text',
    'required' => true,
    'name' => '',
    'class' => '',
    'value' => '',
    'step' => '0.0001'
])

<div class="form-group mb-2">
    <label class="form-label">
        {{ $title }} @if($required) <span class="text-danger">*</span>  @endif
    </label>
    <input type="{{ $type }}" @if($type == 'number') step="{{ $step }}" @endif value="{{ $value }}" name="{{ $name }}" @if($required) required @endif class="form-custom-control {{ $class }}" />

    @error($name)
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
</div>