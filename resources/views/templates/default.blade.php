<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Subarashii - @yield('title')</title>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet'
          type='text/css'>


    <style>

        .firstdiv {
            border-radius: 10px;
            background-color: #cccccc;
            padding: 0.5em;
            opacity: 0.8;

        }

        body {
            background-image: url('{{asset('img/anime-membre.jpg')}}');
            background-repeat: no-repeat;
            background-size: cover;

        }

        .contenu {
            margin-top: 5%;
            margin-left: 5%;
            margin-right: 5%;
        }

        #logo {
            width: 200px;
            height: 50px;

        }

        h1 {
            margin-top: 0px;
        }

        .container-fluid {

            padding-left: 0px;
            padding-right: 0px;

        }


        .image-anime {
            max-width: 40%;
            height: auto;
            margin-left: 30%;

        }

        .image-anime-random {
            max-width: 100%;
            height: auto;

        }

        .titre-anime {
            color: black;
            font-size: 50px;
        }

        .basdepage {

            background-color: #cccccc;
            opacity: 0.8;

            margin-top: 20%;

        }

        .block-central {
            margin-left:20px;
            margin-right: 20px;
            margin-top:20px;
        }

@yield('style')
    </style>


</head>
<body>
@component('elements.public-menu')
@endcomponent

<div class=" container-fluid block-central">
    <div class="contenu row">


        <div class="col-md-4 col-xs-4 col-lg-4">
            <div class="firstdiv">
                @component('elements.random')
                @endcomponent
            </div>
        </div>
        <div class="col-md-5 col-xs-5 col-lg-5">
            <div class="firstdiv">

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

                <h1 class="text-center">@yield('title')</h1>

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
        </div>


        <div class="col-md-3 col-xs-3 col-lg-3">
            <div class="firstdiv">
                @component('elements.lasts_comments')
                @endcomponent
            </div>
        </div>
    </div>


    <div class="col-md-12 basdepage">
        @component('elements.footer')
        @endcomponent
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"
        integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>


</body>
</html>
