@extends('client.layouts.index')
@section('body-client')

<div id="homePage"></div>
<script src='../assets/js/jquery.js'></script>
<script type="text/javascript" src="{{ URL::asset('dist/js/backend/client/JS_Home.js') }}"></script>
<script type="text/javascript">
    var baseUrl = "{{ url('') }}";
    console.log(123)
    var JS_Home = new JS_Home(baseUrl, 'client', 'home');
    $(document).ready(function($) {
        JS_Home.loadIndex(baseUrl);
    })
</script>
@endsection
