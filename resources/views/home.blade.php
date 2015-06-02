@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<div class="row">
                        <div class="col xs 24">
                            <div class="form-group">
                                <select class="projects" name="projects" class="form-control" >
                                    @foreach($projects as $project)
                                        <option>{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
