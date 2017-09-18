@extends('templates.admin')

@section('title', 'Edition d\'un Anime')

@section('content')
    {!! Form::model($anime, ['route'=>['AdminAnimeUpdate', $anime->id] ,'enctype'=>"multipart/form-data"]) !!}

    {!! Form::label('title') !!}
    {!! Form::text('title') !!}
    <br>
    {!! Form::label('status') !!}
    {!! Form::text('status') !!}
    <br>
    {!! Form::label('pictures') !!}
    {!! Form::file('pictures') !!}
    <br>
    {!! Form::label('vod') !!}
    {!! Form::text('vod') !!}
    <br>
    {!! Form::label('summary') !!}
    {!! Form::textarea('summary') !!}
    <br>
    {!! Form::label('note') !!}
    {!! Form::text('note') !!}
    <br>
    {!! Form::label('season') !!}
    {!! Form::text('season') !!}
    <br>
    {!! Form::label('episode') !!}
    {!! Form::text('episode') !!}
    <br>
    {!! Form::label('licenced') !!}
    {!! Form::text('licenced') !!}
    <br>
    {!! Form::label('genre') !!}
    {!! Form::select('anime.genres[]', $genres, null, ['multiple'=>true]) !!}
    <br>
    {!! Form::label('release_date') !!}
    <div class="container">
        <div class="col-sm-6" style="height:130px;">
            <div class="form-group">
                <div class='input-group date' id='dateTimeRelease'>
                    <input type='text' class="form-control" name="release_date">
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
                </div>
            </div>
        </div>
    </div>

    <br>
    {!! Form::label('end_date') !!}
    <div class="container">
        <div class="col-sm-6" style="height:130px;">
            <div class="form-group">
                <div class='input-group date' id='dateTimeEnd'>
                    <input type='text' class="form-control" name="end_date"/>
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection

@section('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" />
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/fr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
        $(function () {
            var config = {
                viewMode: 'years',
                format: 'YYYY/MM/DD'
            }
            $('#dateTimeRelease').datetimepicker(config);
            $('#dateTimeEnd').datetimepicker(config);
        });
    </script>
@endsection