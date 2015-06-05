@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Projects</div>

                <div class="panel-body" data-module="dashboard">
                    @if ( !$clients->count() )
                        There are no projects at the moment
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                @foreach($clients as $client)
                                    <tr>
                                        <th>
                                            <a href="{{ route('clients.show', $client->slug) }}">{{ $client->name }}</a>
                                        </th>
                                    </tr>
                                    @if($client->projects->count())
                                        @foreach($client->projects as $project)
                                            <tr>
                                                <td class="col-xs-12">
                                                    <a href="{{ route('clients.projects.show', [$client->slug, $project->slug ]) }}">- {{ $project->name }}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
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
