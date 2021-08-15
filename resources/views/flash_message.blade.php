@if ($message = Session::get('update'))
    <button class="btn btn-success me-1">{{ $message }}</button>
@endif

@if ($message = Session::get('delete'))
    <button class="btn btn-success me-1">{{ $message }}</button>
@endif

@if ($message = Session::get('create'))
    <button class="btn btn-success me-1">{{ $message }}</button>
@endif