@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Projects</div>

                <div class="panel-body">
                    @if ( !$projects->count() )
                        There are no projects at the moment
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                @foreach($projects as $project)
                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('clients.destroy', $project->client->slug))) !!}
                                    <tr>
                                        <td class="col-xs-10">
                                            <a href="{{ route('clients.projects.show', [$project->client->slug, $project->slug ]) }}">{{ $project->name }}</a> -
                                            {{ $project->client->name }}
                                        </td>
                                        <td class="col-xs-2 text-center">
                                            {!! link_to_route('clients.projects.edit', 'edit', [$project->client->slug, $project->slug]) !!}
                                            {!! Form::submit('delete') !!}
                                        </td>
                                    </tr>
                                    {!! Form::close() !!}
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
			</div>
		</div>
	</div>
</div>
@endsection
