<select name="{{ $name }}"
        class="form-control select select-search{{ $classes }} {{ isset($class) ? $class : "" }}
        {{ isset($required) && !empty
($required) ? 'required' : '' }}" {{ isset($multiple) && $multiple == true ? "multiple='multiple'" : "" }}>
    @if (isset($include_blank))
        <option value="">{{ $include_blank }}</option>
    @endif
    @foreach($options as $option)
        <option{{ in_array($option['id'], explode(",", $value)) ? " selected" : "" }} value="{{ $option['id'] }}
        ">{{ htmlspecialchars($option['id']) }}</option>
    @endforeach
</select>
