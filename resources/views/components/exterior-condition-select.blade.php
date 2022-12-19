<select name="{{ $fieldname }}" class="select border-0 filterable">
    <option value="">{{ $text }}</option>
    @foreach ($options as $value => $label)
    <option value="{{ $value }}" @selected($value == $selected)>{{ $label }}</option>
    @endforeach
</select>
