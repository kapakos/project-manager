@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {!! link_to_route('clients.show', $client->name, [$client->slug]) !!} - {{ $project->name }} -
                        {{ $project->description }}
                    </div>

                    <div class="panel-body">
                        @if(!$project->tasks->count())
                            There are no tasks for this project
                        @else
                            <div class="row">
                                @foreach($project->tasks as $task)
                                    <div class="col-xs-4">
                                        {{ $task->name }}
                                    </div>
                                    <div class="col-xs-8">
                                        {{ $task->description }}
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection