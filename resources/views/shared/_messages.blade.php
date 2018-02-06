@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{$msg}}">
                <a href="#" class="close" data-dismiss="flash-message">
                    &times;
                </a>
                {{session()->get($msg)}}
            </p>
        </div>
        @endif
    @endforeach