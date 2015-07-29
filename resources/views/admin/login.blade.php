@extends('../master/admin')

@section('content')

	<h2>Login</h2>
			
	<p>Bitte loggen Sie sich ein!</p>				
	{{ Form::open(array('url' => 'login/login')) }}
	
		<table>
			<tr>
				<td>Username</td>
				<td width="20"></td>
				<td>{{ Form::text('username') }}</td>
			</tr>
			<tr>
				<td>Passwort</td>
				<td width="20"></td>
				<td>{{ Form::password('password') }}</td>
			</tr>
		</table>
		{{ Form::submit('Einloggen') }}
	
		{{ Session::has('info') ? '<p><span style="color: red;">'.Session::get('info').'</span></p>' : '' }}
	
	{{ Form::close() }}
@stop

@section('rightSide')

	<h3>Login</h3>			
				
	<p>
		Sie müssen sich einloggen um den Admin Bereich betreten zu können!
	</p>	

@stop