<select class="form-control" name="target_audience" {{ $attributes }}>

    @foreach ($options as $option)
        <option value="{{ $option }}" {{ $option == $selected ? 'selected' : '' }}>
            {{ $option == 'students' ? 'Studenten' : ($option == 'teachers' ? 'Docenten' : 'Leden') }}
        </option>
    @endforeach

</select>