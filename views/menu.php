<?php if(isset($user) and $user['profile_page'] == "cliente.php"){ ?>

<li class="active">
    <a href="#homeFinanciero" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-chart-line"></i>
        BALANCE FINANCIERO
    </a>
    <ul class="collapse list-unstyled" id="homeFinanciero">
        <li>
            <a href="?option=financiero"><i class="fa fa-plus"></i> Balance Completo</a>
        </li>
        <li>
            <a href="?option=venta_financiero"><i class="fa fa-cogs"></i> Lucro de Ventas</a>
        </li>
    </ul>
</li>

<li class="active">
    <a href="?option=add_client">
        <i class="fa fa-user"></i>
        CLIENTES
    </a>
</li>

<li class="active">
    <a href="#homeCompras" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-shopping-cart"></i>
        COMPRAS
    </a>
    <ul class="collapse list-unstyled" id="homeCompras">
        <li>
            <a href="?option=add_compras"><i class="fa fa-plus"></i> Add Compras</a>
        </li>
        <li>
            <a href="?option=manager_compras"><i class="fa fa-cogs"></i> Gerenciar Compras</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeVentas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-dollar-sign"></i>
        VENTAS
    </a>
    <ul class="collapse list-unstyled" id="homeVentas">
        <li>
            <a href="?option=add_ventas"><i class="fa fa-plus"></i> Add Ventas</a>
        </li>
        <li>
            <a href="?option=manager_ventas"><i class="fa fa-cogs"></i> Gerenciar Ventas</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="?option=add_productos">
        <i class="fas fa-pen-square"></i>
        PRODUCTOS
    </a>
</li>

<li class="active">
    <a href="?option=stock">
        <i class="fas fa-list-alt"></i>
        STOCK
    </a>
</li>

<li class="active">
    <a href="?option=muestras">
        <i class="fas fa-magic"></i>
        MUESTRAS
    </a>
</li>

<?php } ?>

<?php if(isset($user) and $user['profile_page'] == "super_admin.php"){ ?>


<li class="active">
    <a href="?option=add_user">
        <i class="fa fa-user"></i>
        REGISTRAR USUARIO
    </a>
</li>

<?php } ?>


<?php if(isset($user) and $user['profile_page'] == "admin.php"){ ?>

<li class="active">
    <a href="?option=financiero">
        <i class="fas fa-chart-line"></i>
        BALANCE FINANCIERO
    </a>
</li>

<li class="active">
    <a href="?option=base">
        <i class="fas fa-chart-line"></i>
        PROFILES
    </a>
</li>

<li class="active">
    <a href="#homeUsers" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-user"></i>
        USUARIOS
    </a>
    <ul class="collapse list-unstyled" id="homeUsers">
        <li>
            <a href="?option=add_user"><i class="fa fa-plus"></i> Cadastrar Usuario</a>
        </li>
        <li>
            <a href="?option=manager_users"><i class="fa fa-cogs"></i> Gerenciar Usuario</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeClients" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-user"></i>
        CLIENTES
    </a>
    <ul class="collapse list-unstyled" id="homeClients">
        <li>
            <a href="?option=add_client"><i class="fa fa-plus"></i> Cadastrar Clientes</a>
        </li>
        <li>
            <a href="?option=manager_clients"><i class="fa fa-cogs"></i> Gerenciar Clientes</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeProductos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-pen-square"></i>
        PRODUCTOS
    </a>
    <ul class="collapse list-unstyled" id="homeProductos">
        <li>
            <a href="?option=add_productos"><i class="fa fa-plus"></i> Cadastrar Productos</a>
        </li>
        <li>
            <a href="?option=manager_productos"><i class="fa fa-cogs"></i> Gerenciar Productos</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeCompras" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fa fa-shopping-cart"></i>
        COMPRAS
    </a>
    <ul class="collapse list-unstyled" id="homeCompras">
        <li>
            <a href="?option=add_compras"><i class="fa fa-plus"></i> Cadastrar Compras</a>
        </li>
        <li>
            <a href="?option=manager_compras"><i class="fa fa-cogs"></i> Gerenciar Compras</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="#homeVentas" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
        <i class="fas fa-dollar-sign"></i>
        VENTAS
    </a>
    <ul class="collapse list-unstyled" id="homeVentas">
        <li>
            <a href="?option=add_ventas"><i class="fa fa-plus"></i> Cadastrar Ventas</a>
        </li>
        <li>
            <a href="?option=manager_ventas"><i class="fa fa-cogs"></i> Gerenciar Ventas</a>
        </li>        
    </ul>
</li>

<li class="active">
    <a href="?option=stock">
        <i class="fas fa-list-alt"></i>
        STOCK
    </a>
</li>

<?php } ?>

<li>
    <a href="controllers/logout.php">
        <i class="fa fa-power-off"></i>
        LOGOUT
    </a>
</li>