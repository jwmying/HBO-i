<select class="form-control news-filters" name="news_filters[]" multiple>

    @foreach ($filters as $filter)
        <option {{ in_array($filter->name, $selected) ? 'selected' : '' }}>{{ $filter->name }}</option>
    @endforeach
    
</select>