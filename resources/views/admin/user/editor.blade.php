@extends('../../master/admin')

@section('content')

	<h2>User Editor</h2>
			
	<p>Hier können Sie einen neuen User anlegen!</p>				
	{!! isset($user) ? Form::model($user, array('url' => 'users/save')) : Form::open(array('url' => 'users/save')) !!}
	{!! Form::hidden('id') !!}
		<table>
			<tr>
				<td><b>Username</b></td>
				<td width="20"></td>
				<td>{!! Form::text('username') !!}</td>
			</tr>
			<tr>
				<td><b>Vorname</b></td>
				<td width="20"></td>
				<td>{!! Form::text('vorname') !!}</td>
			</tr>
			<tr>
				<td><b>Name</b></td>
				<td width="20"></td>
				<td>{!! Form::text('name') !!}</td>
			</tr>
			<tr>
				<td><b>Email</b></td>
				<td width="20"></td>
				<td>{!! Form::text('email') !!}</td>
			</tr>
			<tr>
				<td><b>Passwort</b></td>
				<td width="20"></td>
				<td>{!! Form::password('password') !!}</td>
			</tr>
			<tr>
				<td><b>Passwort wiederholen</b></td>
				<td width="20"></td>
				<td>{!! Form::password('passwordWiederholen') !!}</td>
			</tr>
		</table>
		{!! Session::has('info') ? '<p><span style="color: red;">'.Session::get('info').'</span></p>' : '' !!}
		<p>
			{!! Form::Submit('Speichern') !!}
			{!! HTML::Link('users', 'zurück') !!}
		</p>
	{!! Form::close() !!}
@stop

@section('rightSide')

	<h3>User Bereich</h3>			
				
	<p>
		Füllen Sie die Felder aus und klicken anschließend auf speichern
	</p>	

@stop