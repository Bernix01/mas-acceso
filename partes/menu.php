<?php
use mas_acceso\util\Functions as FNC;
    ?>
<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img alt="Logo" src="/img/logo.gif"></a>
        </div>
        <div id="custom-search-input" class="barra-busqueda">
            <div class="input-group col-sm-offset-1 col-md-10">
                <input type="text" class="form-control input-lg" placeholder="Buscar lugar" />
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left clear-right">
                <li <?php echo FNC::isActive("lugares", __FILE__) ? "class=\"active\"" : " asd"; ?>>
                    <a href="/lugares/">Lugares</a>
                </li>
                <li>
                    <a href="/categorias/">Categorías</a>
                </li>
                <li>
                    <a href="/nosotros/">Nosotros</a>
                </li>
                <li>
                    <a href="/contacto/">Contacto</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/login/">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
