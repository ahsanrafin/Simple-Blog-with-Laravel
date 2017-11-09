@extends('layouts.app')


	@section('content')
		<h1>Meena Bazar Online Shop</h1>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae illo dolorem quia commodi, suscipit voluptas eaque veritatis. Dolorem facere nihil, repellat blanditiis rem, id sunt ut velit alias, vitae sed.
		</p>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur repellendus nulla in dolor neque asperiores atque! Id explicabo, reiciendis unde possimus quisquam, fugit! Ipsum reiciendis incidunt possimus hic pariatur temporibus.
		</p>
		<img src="{{resource_path()}}/assets/image/2.jpg" alt="image">
	@endsection


	@section('sidebar')
	@parent
	<p>The is In stead of sidebar</p>
	@endsection