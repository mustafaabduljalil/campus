{{--Error flash messages--}}
@if ($errors->any())
    <div class="alert alert-danger" style="text-align: center;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{--Success flash messages--}}
@if ($message = \Session::get('success'))
    <div class="alert alert-success alert-block" style="text-align: center;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong style="position: relative;
    top: 9px;">{{ $message }}</strong>
    </div>
@endif
