@if (session('errors'))
    <div class="toast" role="alert" aria-live="assertive" data-delay="10000" aria-atomic="true" id="errors"
         style="position:fixed; bottom: 1vh; right: 2vh; z-index: 1000;">
        <div class="toast-header" style="background: #e3342f; color: #fff;">
            <strong class="mr-auto">Error!</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true" style="color: #fff">&times;</span>
            </button>
        </div>

        <div class="toast-body" style="color: #000;">
            @foreach(session('errors')->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    </div>
    <script>
        $('#errors').toast('show')
    </script>
@endif
