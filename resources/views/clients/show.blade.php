@extends('app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span>{{ $client->name }}</span>
                        <div class="pull-right">
                        {!! link_to_route('clients.projects.create', '', $client->slug, ['class' => 'glyphicon glyphicon-plus', 'title' => 'Create Project']) !!}
                        </div>
                    </div>

                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(!$client->projects->count())
                            There are no projects for this client
                        @else
                            <div class="row">
                                @foreach($client->projects as $project)
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('clients.projects.destroy', $client->slug, $project->slug))) !!}
                                        <div class="col-xs-10">
                                            <a href="{{ route('clients.projects.show', [$client->slug, $project->slug]) }}">{{ $project->name }}</a>
                                        </div>
                                        <div class="col-xs-1">
                                            {!! link_to_route('clients.projects.edit', '', array($client->slug, $project->slug), array('class' => 'glyphicon glyphicon-edit')) !!}
                                        </div>
                                        <div class="col-xs-1">
                                            {!! Form::submit('delete', array('class' => 'glyphicon glyphicon-trash')) !!}
                                        </div>
                                    {!! Form::close() !!}
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="panel-footer">
                        {!! link_to_route('clients.index', 'Back to Clients') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection