@if ($errors->has($input) )
    <span class="help-block text-danger">
        {{ $errors->first($input) }}
    </span>
@endif