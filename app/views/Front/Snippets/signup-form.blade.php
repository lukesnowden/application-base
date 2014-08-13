
	<div class="signup-form-view">
		{{ Form::open( array( 'route' => 'signup' ) ) }}
			<p class="email">
				{{ Form::label( 'email', 'Email:' ) }}
				{{ Form::text( 'email' ) }}
			</p>
			<p class="first-name">
				{{ Form::label( 'first_name', 'First Name:' ) }}
				{{ Form::text( 'first_name' ) }}
			</p>
			<p class="last-name">
				{{ Form::label( 'last_name', 'Last Name:' ) }}
				{{ Form::text( 'last_name' ) }}
			</p>
			<p class="screen-name">
				{{ Form::label( 'screen_name', 'Screen Name:' ) }}
				{{ Form::text( 'screen_name' ) }}
			</p>
			<p class="password">
				{{ Form::label( 'password', 'Password:' ) }}
				{{ Form::password( 'password' ) }}
			</p>
			<p class="confirm-password">
				{{ Form::label( 'password_confirmation', 'Confirm Password:' ) }}
				{{ Form::password( 'password_confirmation' ) }}
			</p>
			<p class="submit">{{ Form::submit( 'Signup' ) }}</p>
		{{ Form::close() }}
	</div>