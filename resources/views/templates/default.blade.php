<html>
<head>
    <title>Blog321 - @yield('title')</title>



    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Compiled and minified JavaScript -->


    <!-- Add the CSRF token in a meta tag to have it easily in JS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .firstdiv {
            background-color: #cccccc;

            box-shadow: 5px 0px 5px black;

        }
        body {
            background-color: #1b6d85;
        }
        .random {
            background-color: #cccccc;
            margin-left: 5px;
            margin-right: 5px;
            margin-bottom: 5px;
        }
        .contenu {
            margin: 5px;
        }

    </style>

</head>
<body>
    @component('elements.public-menu')
    @endcomponent

    <div class =" container-fluid">
    <div class ="contenu row">


            <div class="col-md-2 random">
                @component('elements.random')
                @endcomponent
            </div>
            <div class="col-md-8 firstdiv " >


                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if(Session::has('message'))
                    <div class="message">
                        <div class="message-header">Information</div>
                        <div class="message-body">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif

                <h1 class="title">@yield('title')</h1>

                <!-- Erreurs de validation -->
                @if($errors->any())
                    <div class="message is-danger">
                        <div class="message-header">Erreur de formulaire</div>
                        <div class="message-body">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                    @yield('content')

            </div>


        <div class="col-md-2">
            @component('elements.lasts_comments')
            @endcomponent

        </div>
    </div>
    </div>

    <div class="col-md-12">
    @component('elements.footer')
    @endcomponent
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</body>
</html>