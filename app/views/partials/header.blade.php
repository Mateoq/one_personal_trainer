<!-- <div id="header_principal">
    <img src="{{ asset('images/logo4.png') }}" style="margin-bottom: 10px"/>

    <div class="container">
        <nav class="navbar navbar-default" role="navigation" style="background-color: #86B404; border-color: #FFFFFF; color: #ffffff">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">One Personal Trainer</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" >
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Como Funciona</a></li>
                    <li><a href="#">Objetivos</a></li>
                    <li><a href="#">Entrenadores</a></li>
                    <li><a href="#">Contrata un plan</a></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>{{ link_to('/logout', 'Logout') }}</li>
                    @else
                        <li>{{ link_to('/login', 'Login') }}</li>
                    @endif
                    
                </ul>
            </div>
        </nav>
    </div>
        
</div> -->

<div id="mainHeader">
    <div class="container">
        <nav class="navbar oneNavbar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="oneHeaderNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    {{ link_to("/", "", array("class" => "navbar-brand oneicon-logo-footer")) }}
                </div>

                <div id="oneHeaderNavbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Entrenadores</a>
                        </li>
                        <li>
                            <a href="#">¿Cómo Funciona?</a>
                        </li>
                        <li>
                            <a href="#">Entrenamiento Virtual</a>
                        </li>
                        <li>
                            {{ link_to("planes/presencial", "Entrenamiento Presencial") }}
                        </li>
                    </ul>

                    <ul class="nav nav-bar navbar-right">
                        @if(Auth::check())
                            <li>{{ link_to('/logout', 'Logout') }}</li>
                        @else
                            <li>{{ link_to('/login', 'Login') }}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row oneHeaderBreadcrumbRow">
            <div class="col-md-8 oneHeaderBreadcrumb">
                {{ Breadcrumbs::render() }}
            </div>
            <div class="col-md-4 oneHeaderSocialNetworks">
                <div class="col-md-7 oneHeaderSocialNetworksTitle">
                    Únete a nuestra comunidad
                </div>
                <div class="col-md-2 oneHeaderSocialNetworksIcon">
                    <a href="#" class="oneicon-instagram"></a>
                </div>
                <div class="col-md-2 oneHeaderSocialNetworksIcon">
                    <a href="#" class="oneicon-facebook"></a>
                </div>
            </div>
        </div>
    </div>
</div>