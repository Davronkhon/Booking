<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg  ')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
             <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-users"></i>
                        <p>
                        Пользаватели
                            </p>
                        <i class="fas fa-angle-left right"></i>


                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                        <i class="fas fa-user check"></i>
                            <p>Список пользователей</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.create') }}" class="nav-link">
                        <i class="fas fa-user-plus"></i>
                            <p>Добавить пользователя</p>
                        </a>
                    </li>
                </ul>
            </li>
           </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-menorah"></i>
                    <p>
                        Категории еды
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('foodcat.index') }}" class="nav-link">
                            <i class="fas fa-list-ol"></i>
                            <p>Список блюд</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('foodcat.create') }}" class="nav-link">
                            <i class="fas fa-book-medical"></i>
                            <p>Добавить блюда</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-utensils"></i>
                    <p>
                        Категория ресторанов
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('rest.index') }}" class="nav-link">
                            <i class="far fa-window-restore"></i>
                            <p>Список категория ресторанов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rest.create') }}" class="nav-link">
                            <i class="far fa-calendar-plus"></i>
                            <p>Добавить категория ресторана</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-mug-hot"></i>
                    <p>
                        Рестораны
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('restaurant.index') }}" class="nav-link">
                            <i class="fas fa-registered"></i>
                            <p>Список ресторанов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('restaurant.create') }}" class="nav-link">
                            <i class="fas fa-notes-medical"></i>
                            <p>Добавить рестораны</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-portrait"></i>
                    <p>
                        Клиенты
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('client.index') }}" class="nav-link">
                            <i class="fas fa-address-card"></i>
                            <p>Список клиентов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('client.create') }}" class="nav-link">
                            <i class="fas fa-user-tie"></i>
                            <p>Добавить клиента</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-book-reader"></i>
                    <p>
                        Меню
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('food.index') }}" class="nav-link">
                            <i class="fas fa-book"></i>
                            <p>Список блюд</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('food.create') }}" class="nav-link">
                            <i class="fas fa-cookie-bite"></i>
                            <p>Добавить блюда</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fab fa-bootstrap"></i>
                    <p>
                        Бронировать место
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('place.index') }}" class="nav-link">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Список мест</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('place.create') }}" class="nav-link">
                            <i class="fas fa-chair"></i>
                            <p>Бронировать место</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fab fa-shopify"></i>
                    <p>
                        Заказать
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('booking.index') }}" class="nav-link">
                            <i class="fas fa-clipboard-list"></i>
                            <p>Список заказов</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('booking.create') }}" class="nav-link">
                            <i class="fas fa-cart-arrow-down"></i>
                            <p>Сделать заказ</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>


        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-shipping-fast"></i>
                    <p>
                        Pаспоряжение
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('order.index') }}" class="nav-link">
                            <i class="fas fa-layer-group"></i>
                            <p>Список распоряжение</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('order.create') }}" class="nav-link">
                            <i class="fas fa-notes-medical"></i>
                            <p>Сделать распоряжение</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>
е    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
