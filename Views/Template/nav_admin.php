
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= BASE_URL(); ?>/images/avatar1.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= ($_SESSION['userData']['nombre']) ?></p>
          <p class="app-sidebar__user-designation"><?= ($_SESSION['userData']['nombrerol']) ?></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li>
            <a class="app-menu__item" href="<?= BASE_URL(); ?>/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Panel de Control Principal</span>
            </a>
        </li>
        
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= BASE_URL(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li>
                <!-- <li><a class="treeview-item" href="<?php // echo BASE_URL(); ?>/roles"><i class="icon fa fa-circle-o"></i>Roles</a></li>
                <li><a class="treeview-item" href="<?php // echo // BASE_URL(); ?>/permisos"><i class="icon fa fa-circle-o"></i>Permisos</a></li> -->
            </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Roles</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <!-- <li><a class="treeview-item" href="<?php //echo BASE_URL(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li> -->
                <li><a class="treeview-item" href="<?= BASE_URL(); ?>/roles"><i class="icon fa fa-circle-o"></i>Roles</a></li>
                <!-- <li><a class="treeview-item" href="<?php // BASE_URL(); ?>/permisos"><i class="icon fa fa-circle-o"></i>Permisos</a></li> -->
            </ul>
        </li>

        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Permisos</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <!-- <li><a class="treeview-item" href="<?php //echo BASE_URL(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li> -->
                <!-- <li><a class="treeview-item" href="<?php // BASE_URL(); ?>/roles"><i class="icon fa fa-circle-o"></i>Roles</a></li> -->
                <li><a class="treeview-item" href="<?php echo BASE_URL(); ?>/permisos"><i class="icon fa fa-circle-o"></i>Permisos</a></li>
            </ul>
        </li>

       
        <li>
            <a class="app-menu__item" href="docs.html">
                <i class="app-menu__icon fa fa-file-code-o"></i>
                <span class="app-menu__label">Docs</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="<?php echo BASE_URL(); ?>/dashboard/perfil">
                <i class="app-menu__icon fa fa-file-code-o"></i>
                <span class="app-menu__label">Perfil Usuario</span>
            </a>
        </li>

        <li>
            <a class="app-menu__item" href="<?= BASE_URL(); ?>/logouut">
                <i class="app-menu__icon fa fa-file-code-o"></i>
                <span class="app-menu__label">Cerrar sesion</span>
            </a>
        </li>

      </ul>
    </aside>