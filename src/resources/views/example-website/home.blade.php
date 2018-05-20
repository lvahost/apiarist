@extends('apiarist::layouts.example-website.default')
@section('page-title', 'Home')

@section('page-head')
	<!--
		Track This Page -
		You can add the code below to any laravel blade file to automatically
		track that page. Just pass the page ID as a parameter and you're good.

		Optionally, you can also directly call this function in a Controller
		or directly in a routes file. If you're feeling brave, you can make
		your own middleware as well.
	-->
	@php \thepirateorange\Apiarist\Apiarist::trackPage($page_id); @endphp
@endsection

@section('page-content')
	This page has been viewed <span>{{ $views }}</span> times.

	<div class="mb-5"></div>

	<div class="row">
		<div class="col-md-12">
			<h6>
				<i class="fa fa-info-circle"></i>
				Project Details
			</h6>

			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="bg-light">
						<tr>
							<th>Key</th>
							<th>Item</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Project Name</td>
							<td>{{ $project['project']->project_name }}</td>
						</tr>
						<tr>
							<td>Project Description</td>
							<td>{{ $project['project']->project_desc }}</td>
						</tr>
						<tr>
							<td>Bounce Rate</td>
							<td>{{ number_format($project['project']->bounce_rate) }}%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<h2 class="mb-5"></h2>

	<div class="row mb-5">
		<div class="col-md-12">
			<h6>
				<i class="fa fa-info-circle"></i>
				Individual Page Stats
			</h6>

			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="bg-light">
						<tr>
							<th>Page Title</th>
							<th>Page Description</th>
							<th>Views</th>
						</tr>
					</thead>

					<tbody>
						@foreach($page_traffic as $item)
							<tr>
								<td>{{ $item->page_title }}</td>
								<td>{{ $item->page_desc }}</td>
								<td>{{ $item->views }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
