@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>Clients</span>
                        {!! link_to_route('clients.create', '',[], ['class' => 'glyphicon glyphicon-plus pull-right', 'title' => 'Create Client']) !!}
                    </div>

                    <div class="panel-body">
                        @if ( !$clients->count() )
                            There are no clients
                        @else
                            <div class="row">
                                @foreach($clients as $client)
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('clients.destroy', $client->slug))) !!}
                                        <div class="col-xs-10">
                                            <a href="{{ route('clients.show', $client->slug) }}">{{ $client->name }}</a>
                                        </div>
                                        <div class="col-xs-1">
                                            {!! link_to_route('clients.edit', '', [$client->slug], ['class' => 'glyphicon glyphicon-edit']) !!}
                                        </div>
                                        <div class="col-xs-1">
                                            {!! Form::submit('delete', ['class' => 'glyphicon glyphicon-trash']) !!}
                                        </div>
                                    {!! Form::close() !!}
                                @endforeach
                            </div>
                        @endif
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
