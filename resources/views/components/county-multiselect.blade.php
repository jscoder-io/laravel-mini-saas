<select name="{{ $fieldname }}" class="select border-0" multiple data-mdb-placeholder="County"  data-mdb-filter="true">
    @foreach ($options as $value => $label)
    <option value="{{ $value }}" @selected(in_array($value, $selected))>{{ $label }}</option>
    @endforeach
</select>
