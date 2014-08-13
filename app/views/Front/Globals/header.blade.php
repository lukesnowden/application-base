

		@if( Session::has( 'error_message' ) )
			<p class="error">{{ Session::get( 'error_message' ) }}</p>
		@endif

		{{ $loginForm or '<a href="/auth/logout">Logout</a>' }}