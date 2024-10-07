@if(Session::has('message'))

    <div class="alert alert-success" role="alert">

        <h4 style="color: #045c01"><strong>Parabéns!</strong> {!! Session::get('message') !!}</h4>
    </div>

@endif
