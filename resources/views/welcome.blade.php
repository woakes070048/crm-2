@extends('common')

@section('title')
Dashboard
@endsection

@section('actions')
@endsection

@section('content')
&nbsp;
<div class="row mx-3 my-3">
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col main">
						<h3><i class="fa fa-group mr-1"></i>People</h3>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
			</ul>
			<div class="card-footer text-muted">
				<div class="form-group row">
					<div class="col">
						<label class="text-muted" for="note"><i class="text-muted fa fa-sticky-note fa-fw mr-1"></i>255</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col main">
						<h3><i class="fa fa-building mr-1"></i>Places</h3>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
			</ul>
			<div class="card-footer text-muted">
				<div class="form-group row">
					<div class="col">
						<label class="text-muted" for="note"><i class="text-muted fa fa-sticky-note fa-fw mr-1"></i>255</label>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<div class="row">
					<div class="col main">
						<h3><i class="fa fa-leaf mr-1"></i>Tasks</h3>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/1.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
				<li class="list-group-item">
					<img class="float-left rounded-circle mr-3" width="40" height="40" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" />
					<h1 class="card-title h4 pt-2"><a class="btn-text" href="#">First Last</a></h1>
				</li>
			</ul>
			<div class="card-footer text-muted">
				<div class="form-group row">
					<div class="col">
						<label class="text-muted" for="note"><i class="text-muted fa fa-sticky-note fa-fw mr-1"></i>255</label>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection