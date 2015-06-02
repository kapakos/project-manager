@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Client - Project</div>

				<div class="panel-body">
					<div class="row">
                        <div class="col-xs-12">
                            {!! Form::select('projects', $projects, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
