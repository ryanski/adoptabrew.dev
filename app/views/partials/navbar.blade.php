<header>
	<div id="navbar" class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
				{{-- <span class='span-logo'>
				 </span> --}}
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href = "{{{ action("IdeasController@index") }}}">Ideas</a></li>
						<li><a href = "{{{ action('BrewsController@index') }}}">Brews</a></li>
						<li><a href = "{{{ action('HomeController@getLogin') }}}">Login</a></li>
						<li><a href ="{{{ action('HomeController@userLogout') }}}">Logout</a></li>
					</ul>
				</div>
			</div>	 
	</div>
<header>