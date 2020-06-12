@section('scripts')

    @if(count($errors) >0)
        @foreach ($errors->all() as  $error)
            <div class="alert alert-danger ">
                {{$error}}
            </div>
        @endforeach
    @endif  

    @if (Session::has('Success'))
        <script>
            swal("One more step!","{!! session('Success')!!}" ,"success")
        </script>
    @endif

@endsection