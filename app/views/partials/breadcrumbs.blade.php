@if ($breadcrumbs)
    <ul class="breadcrumb oneBreadcrumbs">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                
                @if ($breadcrumb->title == "Home")
                	<li><a href="{{{ $breadcrumb->url }}}"><span class="oneicon-home"></span></a></li>
                @else
					<li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
				@endif
				<li><span class="oneicon-breadcrumbArrow"></span></li>
            @else
                @if ($breadcrumb->title == "Home")
                	<li class="active"><span class="oneicon-home"></span></li>
                	<li><span class="oneicon-breadcrumbArrow"></span></li>
                	<li class="active">Bienvenido al Entrenamiento Virtual de One Personal Trainer</li>
                @else
					<li class="active">{{{ $breadcrumb->title }}}</li>
					<li><span class="oneicon-breadcrumbArrow"></span></li>
				@endif

            @endif
            
        @endforeach
    </ul>
@endif