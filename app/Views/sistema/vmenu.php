        </section>

        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - CONTENTS -->

        <!-- HEADER -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <header class="header">
            <div class="header__inner">

                <!-- Brand -->
                <div class="header__brand">
                    <div class="brand-wrap">

                        <!-- Brand logo -->
                        <a href="http://xura-inc.com" class="brand-img stretched-link" target="_blank">
                            <img src="<?php echo base_url("img/xurav2.png") ?>" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                        </a>

                        <!-- Brand title -->
                        <div class="brand-title">XuraInc</div>

                        <!-- You can also use IMG or SVG instead of a text element. -->

                    </div>
                </div>
                <!-- End - Brand -->

                <div class="header__content">

                    <!-- Content Header - Left Side: -->
                    <div class="header__content-start">

                        <!-- Navigation Toggler -->
                        <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                            <i class="demo-psi-view-list"></i>
                        </button>

                        <!-- Searchbox -->
                        <div class="header-searchbox">

                            <!-- Searchbox toggler for small devices -->
                            <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                                <i class="demo-psi-magnifi-glass"></i>
                            </label>

                            <!-- Searchbox input -->
                            <div class="fs-2 text"><b>Bienvenido:</b> <?= $session->datos." (".$session->usuario.")" ?></div>
                        </div>
                    </div>
                    <!-- End - Content Header - Left Side -->

                    <!-- Content Header - Right Side: -->
                    <div class="header__content-end">

                        <!-- Mega Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <!--
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-label="Megamenu dropdown" aria-expanded="false">
                                <i class="demo-psi-layout-grid"></i>
                            </button>
                            -->

                            <!-- Mega Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-end p-3 mega-dropdown">
                                <div class="row">
                                    <div class="col-md-3">

                                        <!-- Pages List Group -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-file fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Pages</h5>
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action">Profile</a>
                                            <a href="#" class="list-group-item list-group-item-action">Search Result</a>
                                            <a href="#" class="list-group-item list-group-item-action">FAQ</a>
                                            <a href="#" class="list-group-item list-group-item-action">Screen Lock</a>
                                            <a href="#" class="list-group-item list-group-item-action">Maintenance</a>
                                            <a href="#" class="list-group-item list-group-item-action">Invoices</a>
                                            <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Disabled Item</a>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- Mailbox list group -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item d-flex align-items-center border-bottom mb-2">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-mail fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">Mailbox</h5>
                                            </div>
                                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                                Inbox <span class="badge bg-danger rounded-pill">14</span>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">Read Messages</a>
                                            <a href="#" class="list-group-item list-group-item-action">Compose</a>
                                            <a href="#" class="list-group-item list-group-item-action">Template</a>
                                        </div>

                                        <!-- News -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item d-flex align-items-center border-bottom">
                                                <div class="flex-shrink-0 me-2">
                                                    <i class="demo-pli-calendar-4 fs-4"></i>
                                                </div>
                                                <h5 class="flex-grow-1 m-0">News</h5>
                                            </div>
                                            <small class="list-group-item">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic dolore unde autem, molestiae eum laborum aliquid at commodi cum? Blanditiis.
                                            </small>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- List Group -->
                                        <div class="list-group list-group-borderless">
                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-data-settings fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Data Backup</a>
                                                        <span class="badge bg-success rounded-pill ms-auto">40%</span>
                                                    </div>
                                                    <small class="text-muted">Current usage of disks for backups.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-support fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Support</a>
                                                    <small class="text-muted">Have any questions ? please don't hesitate to ask.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-computer-secure fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Security</a>
                                                    <small class="text-muted">Our devices are secure and up-to-date.</small>
                                                </div>
                                            </div>

                                            <div class="list-group-item list-group-item-action d-flex align-items-start">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class="demo-pli-map-2 fs-2"></i>
                                                </div>
                                                <div class="flex-grow-1 ">
                                                    <a href="#" class="h6 d-block mb-1 stretched-link text-decoration-none">Location</a>
                                                    <small class="text-muted">From our location up here, we kept in close touch.</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <!-- Simple gallery -->
                                        <div class="d-grid gap-2 ps-5 pe-2">
                                            <div class="row g-1 rounded-3 overflow-hidden">
                                                <div class="col-6 mt-0">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-1.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6 mt-0">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-3.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-2.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-4.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-6.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                                <div class="col-6">
                                                    <img class="img-fluid" src="./assets/img/megamenu/img-5.jpg" alt="thumbnails" loading="lazy">
                                                </div>
                                            </div>
                                            <a href="#" class="btn btn-primary">Browse Gallery</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End - Mega Dropdown -->

                        <!-- Notification Dropdown -->
                        <div class="dropdown">

                            <!-- Toggler --> 
                            <!--
                            <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="Notification dropdown" aria-expanded="false">
                                <span class="d-block position-relative">
                                    <i class="demo-psi-bell"></i>
                                    <span class="badge badge-super rounded bg-danger p-1">
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </span>
                            </button>
                            -->

                            <!-- Notification dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-300px">
                                <div class="border-bottom px-3 py-2 mb-3">
                                    <h5>Notifications</h5>
                                </div>

                                <div class="list-group list-group-borderless">

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-data-settings text-muted fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Your storage is full</a>
                                            <small class="text-muted">Local storage is nearly full.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-file-edit text-blue-200 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Writing a New Article</a>
                                            <small class="text-muted">Wrote a news article for the John Mike</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <i class="demo-psi-speech-bubble-7 text-green-300 fs-2"></i>
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <a href="#" class="h6 mb-0 stretched-link text-decoration-none">Comment sorting</a>
                                                <span class="badge bg-info rounded ms-auto">NEW</span>
                                            </div>
                                            <small class="text-muted">You have 1,256 unsorted comments.</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="./assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Lucy Sent you a message</a>
                                            <small class="text-muted">30 minutes ago</small>
                                        </div>
                                    </div>

                                    <!-- List item -->
                                    <div class="list-group-item list-group-item-action d-flex align-items-start mb-3">
                                        <div class="flex-shrink-0 me-3">
                                            <img class="img-xs rounded-circle" src="./assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                        </div>
                                        <div class="flex-grow-1 ">
                                            <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jackson Sent you a message</a>
                                            <small class="text-muted">1 hours ago</small>
                                        </div>
                                    </div>

                                    <div class="text-center mb-2">
                                        <a href="#" class="btn-link">Show all Notifications</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End - Notification dropdown -->

                        <!-- User dropdown -->
                        <div class="dropdown">

                            <!-- Toggler -->
                            <?php
                                $user = explode(",",ucwords(strtolower($session->datos)));
                                $user = $user[0]."...";
                            ?>
                            <button class="header__btn btn btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                                <i class="demo-psi-male"></i>
                                &nbsp;<?=$user; ?>
                            </button>

                            <!-- User dropdown menu -->
                            <div class="dropdown-menu dropdown-menu-end w-md-450px">

                                <!-- User dropdown header -->
                                <div class="d-flex align-items-center border-bottom px-3 py-2">
                                    <div class="flex-shrink-0">
                                        <img 
                                            class="img-sm rounded-circle" 
                                            src="<?=base_url("img/usuario.webp");?>" alt="Profile Picture" loading="lazy"
                                        >
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h5 class="mb-0"><?= ucwords(strtolower($session->datos)); ?></h5>
                                        <span class="text-muted fst-italic"><?= "Usuario: ".$session->usuario;  ?></span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">

                                        <!-- Simple widget and reports -->
                                        <div class="list-group list-group-borderless mb-3">
                                            <div class="list-group-item text-center border-bottom mb-3">
                                                <p class="h1 display-1 text-green">
                                                    <img src="<?= base_url("img/".$logo); ?>" alt="" width="100%">
                                                </p>
                                                <!--
                                                <p class="h6 mb-0"><i class="demo-pli-basket-coins fs-3 me-2"></i>
                                                </p>
                                                <small class="text-muted">You have new orders</small>
                                                -->
                                            </div>
                                            <!--<div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                <b>Inicio de sesion:</b>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Fecha:
                                                <small class="fw-bolder text-danger"><?= $session->ini_fecha; ?></small>
                                            </div>
                                            <div class="list-group-item py-0 d-flex justify-content-between align-items-center">
                                                Hora:
                                                <small class="fw-bolder text-danger"><?= $session->ini_hora; ?></small>
                                            </div>
                                            -->
                                        </div>

                                    </div>
                                    <div class="col-md-5">

                                        <!-- User menu link -->
                                        <div class="list-group list-group-borderless h-100 py-3">
                                            <a 
                                                href="#" 
                                                class="list-group-item list-group-item-action" 
                                                onclick="$('#misDatos').modal('show');"
                                            >
                                                <i class="demo-pli-male fs-5 me-2"></i> Mis datos
                                            </a>
                                            <a 
                                                href="#" 
                                                class="list-group-item list-group-item-action"
                                                onclick="$('#cambiarClave').modal('show');"
                                            >
                                                <i class="ti ti-key fs-5 me-2"></i> Cambiar clave
                                            </a>
                                            <a 
                                                href="#" 
                                                class="list-group-item list-group-item-action"
                                                onclick="$('#contacto').modal('show');"
                                            >
                                                <i class="demo-pli-computer-secure fs-5 me-2"></i> Contacto
                                            </a>
                                            <a 
                                                href="#" 
                                                class="list-group-item list-group-item-action"
                                                onclick="$('#cerrarSesion').modal('show');"
                                            >
                                                <i class="demo-pli-unlock fs-5 me-2"></i> Cerrar sesión
                                            </a>
                                            <br>
                                            <b>Inicio de sesión:</b>
                                            <div class="text-right">
                                                <small class="fw-bolder text-danger"><?= $session->ini_fecha; ?></small>    
                                                <br>
                                                <small class="fw-bolder text-danger"><?= $session->ini_hora; ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End - User dropdown -->

                        <!-- Sidebar Toggler -->
                        <!--
                        <button class="sidebar-toggler header__btn btn btn-icon btn-sm" type="button" aria-label="Sidebar button">
                            <i class="demo-psi-dot-vertical"></i>
                        </button>
                        -->

                    </div>
                </div>
            </div>
        </header>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - HEADER -->

        <!-- MAIN NAVIGATION -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <nav id="mainnav-container" class="mainnav">
            <div class="mainnav__inner">

                <!-- Navigation menu -->
                <div class="mainnav__top-content scrollable-content pb-5">

                    <!-- Profile Widget -->
                    <div class="mainnav__profile mt-3 d-flex3">

                        <div class="mt-2 d-mn-max"></div>

                        <!-- Profile picture  -->
                        <div class="mininav-toggle text-center py-2">
                            <img 
                                class="mainnav__avatar img-md border" 
                                src="<?=base_url("img/".$logo); ?>" 
                                alt="Profile Picture"
                            >
                        </div>

                        <div class="mininav-content collapse d-mn-max">
                            <div class="d-grid">

                                <!-- User name and position -->
                                <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                                    <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                        <h6 class="mb-0 me-3"><?=ucwords(strtolower($session->datos)); ?></h6>
                                    </span>
                                    <small class="text-muted"><?= "Usuario: ".$session->usuario; ?></small>
                                </button>

                                <!-- Collapsed user menu -->
                                <div id="usernav" class="nav flex-column collapse">
                                    <a href="#" class="nav-link" onclick="$('#misDatos').modal('show');">
                                        <i class="demo-pli-male fs-5 me-2"></i>
                                        <span class="ms-1">Mis datos</span>
                                    </a>
                                    <a href="#" class="nav-link" onclick="$('#cambiarClave').modal('show');">
                                        <i class="ti ti-key fs-5 me-2"></i>
                                        <span class="ms-1">Cambiar clave</span>
                                    </a>
                                    <a href="#" class="nav-link" onclick="$('#contacto').modal('show');">
                                        <i class="demo-pli-computer-secure fs-5 me-2"></i>
                                        <span class="ms-1">Contacto</span>
                                    </a>
                                    <a href="#" class="nav-link" onclick="$('#cerrarSesion').modal('show');">
                                        <i class="demo-pli-unlock fs-5 me-2"></i>
                                        <span class="ms-1">Cerrar sesión</span>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- End - Profile widget -->

                    <!-- Navigation Category -->
                    <?php foreach ($roles2 as $reg): ?>
                    <div class="mainnav__categoriy py-1">
                        <ul class="mainnav__menu nav flex-column">
                            <li class="nav-item has-sub">
                                <a href="#" class="mininav-toggle nav-link active collapsed">
                                    <i class="<?php echo $reg[0]["icono"]; ?> fs-5 me-2"></i>
                                    <span class="nav-label ms-1"><?php echo $reg[0]["modulo"]; ?></span>
                                </a>
                                <ul class="mininav-content nav collapse show">
                                    <?php foreach ($reg as $r): ?>
                                    <li class="nav-item">
                                        <a 
                                            href="#" 
                                            class="nav-link"
                                            onclick="cargarFuncion(
                                                '<?php echo $r["url"]; ?>',
                                                '<?php echo $r["modulo"]; ?>',
                                                '<?php echo $r["nombre"]; ?>',
                                                '<?php echo $r["descripcion"] ?>'
                                                )"
                                        >
                                            <span><?php echo $r["rol"]; ?></span>
                                        </a>
                                    </li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                        </ul>

                        
                    </div>
                    <?php endforeach ?>

                    <!-- Widget -->
                    <div class="mainnav__profile">

                        <!-- Widget buttton form small navigation -->
                        <div class="mininav-toggle text-center py-2 d-mn-min">
                            <i class="demo-pli-monitor-2"></i>
                        </div>

                        <div class="d-mn-max mt-5"></div>

                        <!-- Widget content -->
                        <div class="mininav-content collapse d-mn-max">
                            <!--<h6 class="mainnav__caption px-3 fw-bold">Server Status</h6>
                            <ul class="list-group list-group-borderless">
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">CPU Usage</p>
                                        <span class="badge bg-info rounded">35%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-label="CPU Progress" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li class="list-group-item text-reset">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <p class="mb-2 me-auto">Bandwidth</p>
                                        <span class="badge bg-warning rounded">73%</span>
                                    </div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 73%" aria-label="Bandwidth Progress" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                            <div class="d-grid px-3 mt-3">
                                <a href="#" class="btn btn-sm btn-success">View Details</a>
                            </div>
                        </div>
                        -->
                    </div>
                    <!-- End - Profile widget -->

                </div>
                <!-- End - Navigation menu -->

                <!-- Bottom navigation menu -->
                <!--
                <div class="mainnav__bottom-content border-top pb-2">
                    <ul id="mainnav" class="mainnav__menu nav flex-column">
                        <li class="nav-item has-sub">
                            <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                                <i class="demo-pli-unlock fs-5 me-2"></i>
                                <span class="nav-label ms-1">Cerrar sesión</span>
                            </a>
                            <ul class="mininav-content nav flex-column collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">This device only</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">All Devices</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Lock screen</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                -->
                <!-- End - Bottom navigation menu -->

            </div>
        </nav>
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - MAIN NAVIGATION -->

        <!-- SIDEBAR -->
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <aside class="sidebar">
            <div class="sidebar__inner scrollable-content">

                <!-- This element is only visible when sidebar Stick mode is active. -->
                <div class="sidebar__stuck align-item-center mb-3 px-4">
                    <p class="m-0 text-danger">Close the sidebar =></p>
                    <button type="button" class="sidebar-toggler btn-close btn-lg rounded-circle ms-auto" aria-label="Close"></button>
                </div>

                <!-- Sidebar tabs nav -->
                <div class="sidebar__wrap">
                    <nav class="px-3">
                        <div class="nav nav-callout nav-fill flex-nowrap" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav-chat" type="button" role="tab" aria-controls="nav-chat" aria-selected="true">
                                <i class="d-block demo-pli-speech-bubble-5 fs-3 mb-2"></i>
                                <span>Chat</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-reports" type="button" role="tab" aria-controls="nav-reports" aria-selected="false">
                                <i class="d-block demo-pli-information fs-3 mb-2"></i>
                                <span>Reports</span>
                            </button>

                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-settings" type="button" role="tab" aria-controls="nav-settings" aria-selected="false">
                                <i class="d-block demo-pli-wrench fs-3 mb-2"></i>
                                <span>Settings</span>
                            </button>
                        </div>
                    </nav>
                </div>
                <!-- End - Sidebar tabs nav -->

                <!-- Sideabar tabs content -->
                <div class="tab-content sidebar__wrap" id="nav-tabContent">

                    <!-- Chat tab Content -->
                    <div id="nav-chat" class="tab-pane fade py-4 show active" role="tabpanel" aria-labelledby="nav-chat-tab">

                        <!-- Family list group -->
                        <h5 class="px-3">Family</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="./assets/img/profile-photos/2.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Stephen Tran</a>
                                    <small class="text-muted">Available</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="./assets/img/profile-photos/8.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Betty Murphy</a>
                                    <small class="text-muted">Iddle</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="./assets/img/profile-photos/7.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Brittany Meyer</a>
                                    <small class="text-muted">I think so!</small>
                                </div>
                            </div>

                            <div class="list-group-item list-group-item-action d-flex align-items-start mb-2">
                                <div class="flex-shrink-0 me-3">
                                    <img class="img-xs rounded-circle" src="./assets/img/profile-photos/4.png" alt="Profile Picture" loading="lazy">
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" class="h6 d-block mb-0 stretched-link text-decoration-none">Jack George</a>
                                    <small class="text-muted">Last seen 2 hours ago</small>
                                </div>
                            </div>

                        </div>
                        <!-- End - Family list group -->

                        <!-- Friends Group -->
                        <h5 class="d-flex mt-5 px-3">Friends <span class="badge bg-success ms-auto">587 +</span></h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-success rounded-circle p-1"></span>
                                Joey K. Greyson
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-info rounded-circle p-1"></span>
                                Andrea Branden
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-warning rounded-circle p-1"></span>
                                Johny Juan
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <span class="d-inline-block bg-secondary rounded-circle p-1"></span>
                                Susan Sun
                            </a>
                        </div>
                        <!-- End - Friends Group -->

                        <!-- Simple news widget -->
                        <div class="px-3">
                            <h5 class="mt-5">News</h5>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui consequatur ipsum porro a repellat eaque exercitationem necessitatibus esse voluptate corporis.</p>
                            <small class="fst-italic">Last Update : Today 13:54</small>
                        </div>
                        <!-- End - Simple news widget -->

                    </div>
                    <!-- End - Chat tab content -->

                    <!-- Reports tab content -->
                    <div id="nav-reports" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-reports-tab">

                        <!-- Billing and Resports -->
                        <div class="px-3">
                            <h5 class="mb-3">Billing &amp Reports</h5>
                            <p>Get <span class="badge bg-danger">$15.00 off</span> your next bill by making sure your full payment reaches us before August 5th.</p>

                            <h5 class="mt-5 mb-0">Amount Due On</h5>
                            <p>August 17, 2028</p>
                            <p class="h1">$83.09</p>

                            <div class="d-grid">
                                <button class="btn btn-success" type="button">Pay now</button>
                            </div>
                        </div>
                        <!-- End - Billing and Resports -->

                        <!-- Additional actions nav -->
                        <h5 class="mt-5 px-3">Additional Actions</h5>
                        <div class="list-group list-group-borderless">
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-information me-2 fs-5"></i>
                                Services Information
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-mine me-2 fs-5"></i>
                                Usage
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-credit-card-2 me-2 fs-5"></i>
                                Payment Options
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <i class="demo-pli-support me-2 fs-5"></i>
                                Messages Center
                            </a>
                        </div>
                        <!-- End - Additional actions nav -->

                        <!-- Contact widget -->
                        <div class="px-3 mt-5 text-center">
                            <div class="mb-3">
                                <i class="demo-pli-old-telephone display-4 text-primary"></i>
                            </div>
                            <p>Have a question ?</p>
                            <p class="h5 mb-0"> (415) 234-53454 </p>
                            <small><em>We are here 24/7</em></small>
                        </div>
                        <!-- End - Contact widget -->

                    </div>
                    <!-- End - Reports tab content -->

                    <!-- Settings content -->
                    <div id="nav-settings" class="tab-pane fade py-4" role="tabpanel" aria-labelledby="nav-settings-tab">

                        <!-- Account settings -->
                        <h5 class="px-3">Account Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbPersonalStatus">Show my personal status</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbPersonalStatus" class="form-check-input" type="checkbox" checked>
                                    </div>
                                </div>
                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbOfflineContact">Show offline contact</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbOfflineContact" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                            </div>

                            <div class="list-group-item mb-1">
                                <div class="d-flex justify-content-between mb-1">
                                    <label class="form-check-label" for="_dm-sbInvisibleMode">Invisible Mode</label>
                                    <div class="form-check form-switch">
                                        <input id="_dm-sbInvisibleMode" class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</small>
                            </div>

                        </div>
                        <!-- End - Account settings -->

                        <!-- Public Settings -->
                        <h5 class="mt-5 px-3">Public Settings</h5>
                        <div class="list-group list-group-borderless">

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbOnlineStatus">Online Status</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbOnlineStatus" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMuteNotifications">Mute Notifications</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMuteNotifications" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                            <div class="list-group-item d-flex justify-content-between mb-1">
                                <label class="form-check-label" for="_dm-sbMyDevicesName">Show my device name</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sbMyDevicesName" class="form-check-input" type="checkbox" checked>
                                </div>
                            </div>

                        </div>
                        <!-- End - Public Settings -->

                    </div>
                    <!-- End - Settings content -->

                </div>
                <!-- End - Sidebar tabs content -->

            </div>
        </aside>
        
        <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
        <!-- END - SIDEBAR -->

    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - PAGE CONTAINER -->

    <!-- SCROLL TO TOP BUTTON -->
    <div class="scroll-container">
        <a href="#root" class="scroll-page rounded-circle ratio ratio-1x1" aria-label="Scroll button"></a>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SCROLL TO TOP BUTTON -->

    <!-- BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-boxedBgContent" class="_dm-boxbg offcanvas offcanvas-bottom" data-bs-backdrop="false" data-bs-scroll="true" tabindex="-1">
        <div class="offcanvas-body p-4">

            <!-- Content Header -->
            <div class="offcanvas-header border-bottom p-0 pb-3">
                <div>
                    <h4 class="offcanvas-title">Background Images</h4>
                    <span class="text-muted">Add an image to replace the solid background color</span>
                </div>
                <button type="button" class="btn-close btn-lg text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <!-- End - Content header -->

            <!-- Collection Of Images -->
            <div id="_dm-boxedBgContainer" class="row mt-3">

                <!-- Blurred Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Blurred</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/blurred/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Blurred Background Images -->

                <!-- Polygon Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Polygon &amp; Geometric</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/polygon/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Polygon Background Images -->

                <!-- Abstract Background Images -->
                <div class="col-lg-4">
                    <h5 class="mb-4">Abstract</h5>
                    <div class="_dm-boxbg__img-container d-flex flex-wrap">
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/1.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/2.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/3.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/4.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/5.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/6.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/7.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/8.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/9.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/10.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/11.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/12.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/13.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/14.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/15.jpg" alt="Background Image" loading="lazy">
                        </a>
                        <a href="#" class="_dm-boxbg__thumb ratio ratio-16x9">
                            <img class="img-responsive" src="./assets/premium/boxed-bg/abstract/thumbs/16.jpg" alt="Background Image" loading="lazy">
                        </a>
                    </div>
                </div>
                <!-- End - Abstract Background Images -->

            </div>
            <!-- End - Collection Of Images -->

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - BOXED LAYOUT : BACKGROUND IMAGES CONTENT [ DEMO ] -->

    <!-- SETTINGS CONTAINER [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-settingsContainer" class="_dm-setting-container offcanvas offcanvas-end rounded-start" tabindex="-1">
        <button id="_dm-settingsToggler" class="_dm-btn-settings btn btn-sm btn-dark p-2 rounded-0 rounded-start shadow-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-settingsContainer" aria-label="Customization button" aria-controls="_dm-settingsContainer">
            <i class="demo-psi-gear fs-1"></i>
        </button>

        <div class="offcanvas-body py-0">
            <div class="_dm-setting-container__content row">
                <div class="col-lg-3 p-4">

                    <h5 class="fw-bold pb-3 mb-2">Layouts</h5>

                    <!-- OPTION : Centered Layout -->
                    <h6 class="mb-2 pb-1">Layouts</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-fluidLayoutRadio">Fluid Layout</label>
                        <div class="form-check form-switch">
                            <input id="_dm-fluidLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Boxed layout -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-boxedLayoutRadio">Boxed Layout</label>
                        <div class="form-check form-switch">
                            <input id="_dm-boxedLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Boxed layout with background images -->
                    <div id="_dm-boxedBgOption" class="opacity-50 d-flex align-items-center pt-1 mb-2">
                        <label class="form-label flex-fill mb-0">Background for boxed</label>
                        <button id="_dm-boxedBgBtn" class="btn btn-icon btn-primary btn-xs" type="button" data-bs-toggle="offcanvas" data-bs-target="#_dm-boxedBgContent" disabled>
                            <i class="demo-psi-dot-horizontal"></i>
                        </button>
                    </div>

                    <!-- OPTION : Centered Layout -->
                    <div class="d-flex align-items-start pt-1 mb-2">
                        <label class="form-check-label flex-fill text-nowrap" for="_dm-centeredLayoutRadio">Centered Layout <br><span class="badge bg-danger">New in v.3.0</span></label>
                        <div class="form-check form-switch">
                            <input id="_dm-centeredLayoutRadio" class="form-check-input ms-0" type="radio" name="settingLayouts" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Transition timing -->
                    <h6 class="mt-4 mb-2 py-1">Transitions</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <select id="_dm-transtiionSelect" class="form-select" aria-label="select transition timing">
                            <option value="in-quart">In Quart</option>
                            <option value="out-quart">Out Quart</option>
                            <option value="in-back">In Back</option>
                            <option value="out-back">Out Back</option>
                            <option value="in-out-back" selected="true">In Out Back</option>
                            <option value="steps">Steps</option>
                            <option value="jumping">Jumping</option>
                            <option value="rubber">Rubber</option>
                        </select>
                    </div>

                    <!-- OPTION : Sticky Header -->
                    <h6 class="mt-4 mb-2 py-1">Header</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stickyHeaderCheckbox">Sticky header</label>
                        <div class="form-check form-switch">
                            <input id="_dm-stickyHeaderCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Additional Offcanvas -->
                    <h6 class="mt-4 mb-2 py-1">Additional Offcanvas <span class="badge bg-danger">New in BS v.5.0</span></h6>
                    <p>Select the offcanvas placement.</p>
                    <div class="text-nowrap">
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-top">Top</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-end">Right</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-bottom">Btm</button>
                        <button type="button" class="_dm-offcanvasBtn btn btn-sm btn-primary" value="offcanvas-start">Left</button>
                    </div>

                </div>
                <div class="col-lg-3 p-4 bg-gray-300">

                    <h5 class="fw-bold pb-3 mb-2">Sidebars</h5>

                    <!-- OPTION : Sticky Navigation -->
                    <h6 class="mb-2 pb-1">Navigation</h6>
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stickyNavCheckbox">Sticky navigation</label>
                        <div class="form-check form-switch">
                            <input id="_dm-stickyNavCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Navigation Profile Widget -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-profileWidgetCheckbox">Widget Profile</label>
                        <div class="form-check form-switch">
                            <input id="_dm-profileWidgetCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Mini navigation mode -->
                    <div class="d-flex align-items-center pt-3 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-miniNavRadio">Min / Collapsed Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-miniNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Maxi navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-maxiNavRadio">Max / Expanded Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-maxiNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off" checked>
                        </div>
                    </div>

                    <!-- OPTION : Push navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-pushNavRadio">Push Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-pushNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Slide on top navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-slideNavRadio">Slide on top (default)</label>
                        <div class="form-check form-switch">
                            <input id="_dm-slideNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Slide on top navigation mode -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-revealNavRadio">Reveal Mode</label>
                        <div class="form-check form-switch">
                            <input id="_dm-revealNavRadio" class="form-check-input ms-0" type="radio" name="navigation-mode" autocomplete="off">
                        </div>
                    </div>

                    <h6 class="mt-4 mb-2 py-1">Right sidebar</h6>

                    <!-- OPTION : Disable sidebar backdrop -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-disableBackdropCheckbox">Disable backdrop</label>
                        <div class="form-check form-switch">
                            <input id="_dm-disableBackdropCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Static position -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-staticSidebarCheckbox">Static position</label>
                        <div class="form-check form-switch">
                            <input id="_dm-staticSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Stuck sidebar -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-stuckSidebarCheckbox">Stuck Sidebar </label>
                        <div class="form-check form-switch">
                            <input id="_dm-stuckSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Unite Sidebar -->
                    <div class="d-flex align-items-center pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-uniteSidebarCheckbox">Unite Sidebar</label>
                        <div class="form-check form-switch">
                            <input id="_dm-uniteSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                    <!-- OPTION : Pinned Sidebar -->
                    <div class="d-flex align-items-start pt-1 mb-2">
                        <label class="form-check-label flex-fill" for="_dm-pinnedSidebarCheckbox">Pinned Sidebar <span class="badge bg-danger">New in v3.0</span></label>
                        <div class="form-check form-switch">
                            <input id="_dm-pinnedSidebarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                        </div>
                    </div>

                </div>
                <div id="dm_colorSchemesContainer" class="col-lg-6 p-4">
                    <h5 class="fw-bold pb-3 mb-2">Color Schemes</h5>

                    <div class="row mb-3 pb-3">
                        <div class="col-md-6">

                            <div class="d-flex align-items-start position-relative">
                                <div class="flex-shrink-0 me-3">
                                    <div class="_dm-color-box bg-light"></div>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" data-dir="light" data-single="true" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Light</a>
                                    <small class="text-muted">Completely bright color themes.</small>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="d-flex align-items-start position-relative">
                                <div class="flex-shrink-0 me-3">
                                    <div class="_dm-color-box bg-dark"></div>
                                </div>
                                <div class="flex-grow-1 ">
                                    <a href="#" data-dir="dark" data-hd="expanded" class="_dm-themeColors schemes-btn h6 d-block mb-0 stretched-link text-decoration-none">Dark</a>
                                    <small class="text-muted">Completely dark color themes.</small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row text-center my-3">

                        <!-- Expanded Header -->
                        <div class="col-md-4">
                            <h6 class="m-0">Expanded Header</h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/expanded-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy active" type="button" data-dir="all-headers/navy" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="expanded"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="expanded"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="expanded"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="expanded"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fair Header -->
                        <div class="col-md-4">
                            <h6 class="m-0">Fair Header</h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/fair-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Full Header</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/full-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir=""></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center mb-3">
                        <div class="col-md-4">
                            <h6 class="m-0">Primary Nav</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/navigation.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="primary-nav/gray" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="primary-nav/navy" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="primary-nav/ocean" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="primary-nav/lime" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="primary-nav/violet" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="primary-nav/orange" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="primary-nav/teal" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="primary-nav/corn" data-hd="fair"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="primary-nav/cherry" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="primary-nav/coffee" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="primary-nav/pear" data-hd="fair"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="primary-nav/night" data-hd="fair"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Brand</h6>

                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/brand.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="brand/gray"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="brand/navy"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="brand/ocean"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="brand/lime"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="brand/violet"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="brand/orange"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="brand/teal"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="brand/corn"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="brand/cherry"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="brand/coffee"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="brand/pear"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="brand/night"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h6 class="m-0">Tall Header <span class="badge bg-danger">New in v3.0</span></h6>
                            <div class="_dm-colorShcemesMode">

                                <!-- Scheme Button -->
                                <button type="button" class="btn shadow-none">
                                    <img src="<?=$base; ?>/assets/img/color-schemes/tall-header.png" alt="color scheme illusttration" loading="lazy">
                                </button>

                                <!-- Scheme Colors -->
                                <div class="_dm-colorSchemesMode__colors">
                                    <div class="d-flex flex-wrap justify-content-center">
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-gray" type="button" data-dir="all-headers/gray" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-navy" type="button" data-dir="" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-ocean" type="button" data-dir="all-headers/ocean" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-lime" type="button" data-dir="all-headers/lime" data-hd="fair,expanded,border"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-violet" type="button" data-dir="all-headers/violet" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-orange" type="button" data-dir="all-headers/orange" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-teal" type="button" data-dir="all-headers/teal" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-corn" type="button" data-dir="all-headers/corn" data-hd="fair,expanded,border"></button>

                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-cherry" type="button" data-dir="all-headers/cherry" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-coffee" type="button" data-dir="all-headers/coffee" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-pear" type="button" data-dir="all-headers/pear" data-hd="fair,expanded,border"></button>
                                        <button class="_dm-themeColors _dm-box-xs _dm-bg-night" type="button" data-dir="all-headers/night" data-hd="fair,expanded,border"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h5 class="mt-5 fw-bold">Scrollbars</h5>
                    <p>Hides native scrollbars and creates custom styleable overlay scrollbars.</p>
                    <div class="row">
                        <div class="col-5">

                            <!-- OPTION : Apply the OverlayScrollBar to the body. -->
                            <div class="d-flex align-items-center pt-1 mb-2">
                                <label class="form-check-label flex-fill" for="_dm-bodyScrollbarCheckbox">Body scrollbar</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-bodyScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                                </div>
                            </div>

                            <!-- OPTION : Apply the OverlayScrollBar to content containing class .scrollable-content. -->
                            <div class="d-flex align-items-center pt-1 mb-2">
                                <label class="form-check-label flex-fill" for="_dm-sidebarsScrollbarCheckbox">Navigation and Sidebar</label>
                                <div class="form-check form-switch">
                                    <input id="_dm-sidebarsScrollbarCheckbox" class="form-check-input ms-0" type="checkbox" autocomplete="off">
                                </div>
                            </div>

                        </div>
                        <div class="col-7">

                            <div class="alert alert-warning" role="alert">
                                Please consider the performance impact of using any scrollbar plugin.
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - SETTINGS CONTAINER [ DEMO ] -->

    <!-- OFFCANVAS [ DEMO ] -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div id="_dm-offcanvas" class="offcanvas" tabindex="-1">

        <!-- Offcanvas header -->
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Offcanvas Header</h5>
            <button type="button" class="btn-close btn-lg text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas content -->
        <div class="offcanvas-body">
            <h5>Content Here</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eos nihil earum aliquam quod in dolor, aspernatur obcaecati et at. Dicta, ipsum aut, fugit nam dolore porro non est totam sapiente animi recusandae obcaecati dolorum, rem ullam cumque. Illum quidem reiciendis autem neque excepturi odit est accusantium, facilis provident molestias, dicta obcaecati itaque ducimus fuga iure in distinctio voluptate nesciunt dignissimos rem error a. Expedita officiis nam dolore dolores ea. Soluta repellendus delectus culpa quo. Ea tenetur impedit error quod exercitationem ut ad provident quisquam omnis! Nostrum quasi ex delectus vero, facilis aut recusandae deleniti beatae. Qui velit commodi inventore.</p>
        </div>

    </div>

    <?php
        $clase="bg-secondary text-white";
    ?>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="misDatos">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Mis datos de cuenta de usuario</h5>
                    <?php $datos=explode(",",$session->datos); ?>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width:30%!important" class="<?php echo $clase; ?>">Usuario:</td>
                                <td style="width:70%!important"><?php echo $session->usuario; ?></td>
                            </tr>
                            <tr>
                                <td  class="<?php echo $clase; ?>">Nombres:</td>
                                <td><?php echo $datos[0]; ?></td>
                            </tr>
                            <tr>
                                <td class="<?php echo $clase; ?>">Apellidos:</td>
                                <td><?php echo $datos[1]; ?></td>
                            </tr>
                            <tr>
                                <td class="<?php echo $clase; ?>">Inicio de sesión:</td>
                                <td>
                                    <?php echo $session->ini_fecha; ?> <?php echo $session->ini_hora; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="cambiarClave">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="mb-3">Cambio de clave</h5>
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <div class="form-floating">
                                <input id="anterior" type="password" class="form-control" placeholder="*" autocomplete="off">
                                <label for="anterior" class="text-primary bold">Ingrese su clave actual</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input id="nueva" type="password" class="form-control" placeholder="*" autocomplete="off">
                                <label for="nueva" class="text-secondary bold">Ingrese su nueva clave</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input id="repite" type="password" class="form-control" placeholder="*" autocomplete="off">
                                <label for="repite" class="text-secondary bold">Repita su nueva clave</label>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="cambiarClave()">Cambiar clave</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="contacto">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Datos de contacto</h5>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="width:30%!important" class="<?php echo $clase; ?>">Contacto:</td>
                                <td style="width:70%!important"><?php echo $contacto_datos; ?></td>
                            </tr>
                            <tr>
                                <td  class="<?php echo $clase; ?>">Celular</td>
                                <td><?php echo $contacto_celular; ?></td>
                            </tr>
                            <tr>
                                <td class="<?php echo $clase; ?>">Email:</td>
                                <td><?php echo $contacto_email; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="cerrarSesion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Cerrar Sesión</h5>
                    <p>¿Esta seguro de cerrar su sesión en la aplicación?</p>
                    <div class="row">
                        <div class="col-sm-12 text-end">
                            <button 
                                type="button" 
                                class="btn btn-danger" 
                                data-bs-dismiss="modal"
                            >Cancelar</button>
                            <a 
                                href="<?php echo base_url("/cerrarsesion"); ?>"
                                type="button" 
                                class="btn btn-primary"
                            >Cerrar sesión</a>  
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="alertar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="" id="alertarAlert">
                        <i id="alertarIcono" class="ti-alert fs-3"></i>
                        <span id="alertarMensaje" class="fs-5 text-primary"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" id="openCargar">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?= $system_name; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="spinner-border spinner-border-sm text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </span>
                    <span id="openCargarMensaje" class="fs-5 text-primary"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- END - OFFCANVAS [ DEMO ] -->

    <!-- JAVASCRIPTS -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->


</body>

</html>