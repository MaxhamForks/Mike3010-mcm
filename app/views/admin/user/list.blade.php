@extends('../../master/admin')

@section('content')

	<h2>User Bereich</h2>
			
	<p>Willkommen im Admin Bereich!</p>				
	<p>Folgende Benutzer sind angelegt:</p>
	<table>
		<tr>
			<th>Username</th>
			<th></th>
			<th>Name</th>
			<th></th>
			<th>Vorname</th>
			<th></th>
			<th>Email</th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
		@foreach($users as $user)
		
			<tr>
				<td>{{ $user->username }}</td>
				<td width="20"></td>
				<td>{{ $user->name }}</td>
				<td width="20"></td>
				<td>{{ $user->vorname }}</td>
				<td width="20"></td>
				<td>{{ $user->email }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('users/edit/'.$user->getKey(), 'bearbeiten') }}</td>
				<td width="20"></td>
				<td>{{ HTML::Link('users/delete/'.$user->getKey(), 'löschen') }}</td>
			</tr>	
	
		@endforeach
	</table>
	<p style="text-align: right;">{{ HTML::Link('users/create', 'Neuen Benutzer anlegen') }}</p>
@stop

@section('rightSide')

	<h3>User Bereich</h3>			
				
	<p>
		Übersicht über die User
	</p>	

@stop