<script>
    $(document).ready(function() {
        toastr.options.timeOut = 5000;
        
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('info'))
            toastr.info('{{ Session::get('info') }}');
        @elseif(Session::has('warning'))
            toastr.warning('{{ Session::get('warning') }}');
        @endif




        @if(count($errors) > 0)

            @foreach($errors->all() as $error)

                toastr.error('{{ $error }}');

            @endforeach

        @endif
    });

</script>

