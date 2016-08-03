@if(Session::has('loginmessage'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('loginmessage') }}</p>
@endif


@if(Session::has('apploginmessage'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('apploginmessage') }}</p>
@endif


@if(Session::has('resetmessage'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('resetmessage') }}</p>
@endif


@if(Session::has('resetmessage2'))
    <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('resetmessage2') }}</p>
@endif



@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>

            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif