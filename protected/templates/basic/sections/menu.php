<div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="<?php echo ($this->route->is() == '/') ? 'active' : '' ?>"><a
                href="{{ $this->url->to('') }}">Home</a></li>
        <li class=""><a target="_blank" href="{{ echo $this->url->baseUrl() }}corlate.php">Corlate</a></li>
        <li class=""><a target="_blank" href="{{ echo $this->url->baseUrl() }}margo.php">Margo</a></li>
        <li class=""><a target="_blank" href="{{ echo $this->url->baseUrl() }}sbadmin.php">SB Admin 2</a></li>
        <li class=""><a target="_blank" href="{{ echo $this->url->baseUrl() }}adminlte.php">AdminLTE</a></li>
        <!-- Add new Menu -->
        <!--
            <li class="<?php echo ($this->route->is() == 'user') ? 'active' : '' ?>"><a href="{{ $this->url->to('user') }}">User</a></li>
            -->
    </ul>
</div><!--/.nav-collapse -->