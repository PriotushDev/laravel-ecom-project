<!-- Sidebar -->
<div data-simplebar>
    <ul class="side-nav">

        <li class="side-nav-item">
            <a href="{{route('dashboard')}}" class="side-nav-link">
                <i class="ri-dashboard-2-line"></i>
                <span> Dashboard </span>
            </a>
        </li>



        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPagesinvoice" aria-expanded="false" aria-controls="sidebarPagesinvoice" class="side-nav-link">
                <i class="ri-article-line"></i>
                <span>Category Module</span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarPagesinvoice">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('category.add')}}">Add Category</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('category.manage')}}">Manage Category</a>
                    </li>
                </ul>
            </div>
        </li>


        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                <i class="ri-stack-line"></i>
                <span> Sub Category Module</span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarPages">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('sub.category.create')}}">Add Sub Category</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('sub.category.index')}}">Manage Sub Category</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                <i class="ri-account-circle-line"></i>
                <span> Brand Module </span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarPagesAuth">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('brand.create')}}">Add Brand</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('brand.index')}}">Manage Brand</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                <i class="ri-table-line"></i>
                <span> Unit Module </span>
                <span class="menu-arrow"></span>


            </a>
            <div class="collapse" id="sidebarTables">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('unit.create')}}">Add Unit</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('unit.index')}}">Manage Unit</a>
                    </li>
                </ul>
            </div>
        </li>



        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                <i class="ri-briefcase-line"></i>
                <span> Product Module </span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarBaseUI">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('product.create')}}">Add Product</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="{{route('product.index')}}">Manage Product</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                <i class="ri-compass-3-line"></i>
                <span> Order Module </span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarExtendedUI">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="extended-portlets.html">Manage Order</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="extended-scrollbar.html">Add Order</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                <i class="ri-contrast-drop-2-line"></i>
                <span> Customer Module </span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarIcons">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="icons-remixicons.html">Manage Customer</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                <i class="ri-pie-chart-2-line"></i>
                <span> Courier </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="sidebarCharts">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="charts-apex.html">Add Courier</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="charts-chartjs.html">Manage Courier</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="side-nav-item">
            <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                <i class="ri-survey-line"></i>
                <span> User Module </span>
                <span class="menu-arrow"></span>

            </a>
            <div class="collapse" id="sidebarForms">
                <ul class="side-nav-second-level">
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="form-elements.html">Add User</a>
                    </li>
                    <li class="side-nav-item">
                        <a class="side-nav-link" href="form-advanced.html">Manage User</a>
                    </li>
                </ul>
            </div>
        </li>

    </ul>
</div>
