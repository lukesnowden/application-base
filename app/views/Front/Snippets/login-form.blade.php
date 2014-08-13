

	<div class="login-form-view">
		{{ Form::open( array( 'route' => 'login' ) ) }}
			<p class="email">
				{{ Form::label( 'email', 'Email:' ) }}
				{{ Form::text( 'email' ) }}
			</p>
			<p class="password">
				{{ Form::label( 'password', 'Password:' ) }}
				{{ Form::password( 'password' ) }}
			</p>
			<p class="submit">{{ Form::submit( 'login' ) }}</p>
		{{ Form::close() }}
	</div>