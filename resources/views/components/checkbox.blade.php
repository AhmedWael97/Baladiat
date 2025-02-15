
@props([
    'title' => '',
    'type' => 'text',
    'required' => true,
    'name' => '',
    'class' => '',
    'value' => '',
])

<div class="form-check {{ $class }}">
    <label class="form-check-label" >
        {{ $title }}
    </label>
    <input class="form-check-input " type="checkbox" name="{{ $name }}" value="{{ $value }}">
    
</div>