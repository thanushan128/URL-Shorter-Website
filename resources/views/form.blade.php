<html>
    <head>
        <title>URL Shortner</title>
        <link rel="stylesheet" href="{{url('assets/style.css')}}">
    </head>
    <body>
        <div id="container">
            <h2>URL Shortner</h2>
        @if (\Session::has('errors'))
            <h3 class="error">{{$errors->first('link')}}</h3>
        @endif

        @if (Session::has ('message'))
            <h3 class="error">{{Session::get('message')}};</h3>
        @endif

        @if (Session::has('link'))
            <h3 class="error"><a href="{{url(Session::get('link'))}}"> {{url(Session::get('link'))}} </a> </h3> <h3>This is your short URL!</h3>
        @endif

        <form action="{{url('/')}}" method="POST">
                <input type="text" name="link" placeholder="Insert Your URL Here And Press Enter">
                @csrf
        </form>
        </div>

    </body>
</html>
