@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">Clients</div>

                <div class="panel-body" data-module="dashboard">
                    @if ( !$clients->count() )
                        There are no Clients at the moment
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                @foreach($clients as $client)
                                    <tr>
                                        <td>
                                            <a href="{{ route('clients.show', $client->slug) }}">{{ $client->name }}</a>
                                        </td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
			</div>
		</div>
        <div class="col-xs-6">
            <div class="panel panel-default">
                <div class="panel-heading">Projects</div>

                <div class="panel-body" data-module="dashboard">
                    @if ( !$projects->count() )
                        There are no projects at the moment
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                @foreach($projects as $project)
                                    <tr>
                                        <td>
                                            <a href="{{ route('clients.projects.show', [$project->client->slug, $project->slug ]) }}">{{ $project->name }} - {{ $project->client->name }}</a>
                                        </td>
                                    </tr>
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
