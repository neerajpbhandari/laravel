	<h1>Authors Home Page</h1>

	@if(isset($name))
		{{ $name }} <br/>
	@else
		No Name Found<br/>
	@endif

	{{ $age }}<br/>
	{{ $location }}<br/>
	{{ $speciality }}