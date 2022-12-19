<select name="{{ $fieldname }}" class=" browser-default select filterable">
    <option value="">{{ $text }}</option>
    @foreach ($options as $value => $label)
    <option value="{{ $value }}" @selected($value == $selected)>{{ $label }}</option>
    @endforeach
</select>
