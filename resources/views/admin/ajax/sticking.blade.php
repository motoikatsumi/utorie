@foreach ($stickings as $sticking)
  <option value="{{ $sticking['id'] }}">{{ $sticking['name'] }}</option>
@endforeach