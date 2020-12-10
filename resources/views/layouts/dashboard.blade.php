<!doctype html>
<html lang="en">
@include('layouts.head')
<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		@include('layouts.topbar')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		@include('layouts.sidebar')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		<div class="main">

			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					@include('layouts.cards')
					<!-- END OVERVIEW -->
					@include('layouts.graphs')

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

		<div class="clearfix"></div>
		@include('layouts.footer')
	</div>
	<!-- END WRAPPER -->

	@include('layouts.javascript')

</body>
</html>