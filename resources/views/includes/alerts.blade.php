@section('scripts')
    @if (Session::has('Success'))
        <script>
            swal("One more step!","{!! session('Success')!!}" ,"success")
        </script>
    @endif

    {{-- @if (Session::has('Error'))
            <script>
                swal("","{!! session('Error')!!}")
            </script>
    @endif --}}

    @if (Session::has('Email'))

        <script>
            swal({
                title:"Your account is yet to active!",
                text: "Want the code again ? If yes, click OK",
                type:"error",
                showCancelButton: true,
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
                },
                function(){
                    setTimeout(function(){
                        $.get('/resend/code',{email: "{!! session('Email')!!}" });
                        swal("Email sent!");
                    },2000);
                }
            );
        </script>
    @endif

@endsection