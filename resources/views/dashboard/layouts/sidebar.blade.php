
<nav id="sidebar" class="bg-light">
    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('dashboard.page') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li>
            <a href="#movieSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown"><i class="fas fa-film"></i> DVD<i class="fas fa-angle-down float-right"></i></a>
            <ul class="collapse list-unstyled" id="movieSubmenu">
                <li>
                    <a href="{{ route('movie.page') }}">All DVD</a>
                </li>
                <li>
                    <a href="{{ route('addMovie.page') }}">Add New DVD</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('categories.index') }}"><i class="fas fa-sitemap"></i></i> Category</a>
        </li>

        @if (auth()->user()->id == 1)                                            
        <li>
            <a href="#employeeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown"><i class="fas fa-user-tie"></i> Employee <i class="fas fa-angle-down float-right"></i></a>
            <ul class="collapse list-unstyled" id="employeeSubmenu">
                <li>
                    <a href="{{ route('employee.page') }}">All Employee</a>
                </li>
                <li>
                    <a href="{{ route('addEmployee.page') }}">Add New Employee</a>
                </li>
            </ul>
        </li>
        @endif

        <li>
            <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown"><i class="fas fa-user"></i> Customer <i class="fas fa-angle-down float-right"></i></a>
            <ul class="collapse list-unstyled" id="customerSubmenu">
                <li>
                    <a href="{{ route('customer.page') }}">All Customer</a>
                </li>
                <li>
                    <a href="{{ route('addCustomer.page') }}">Add New Customer</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#RentSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown">
                <i class="fas fa-shopping-cart"></i> Rent a DVD <i class="fas fa-angle-down float-right"></i></a>
            <ul class="collapse list-unstyled" id="RentSubmenu">
                <li>
                    <a href="{{ route('rent.page') }}">Rent Details</a>
                </li>
                <li>
                    <a href="{{ route('addRent.page') }}">Add a Rent </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="{{ route('logout.page') }}"><i class="fas fa-sign-out-alt"></i> Log out</a>
        </li>
    </ul>
</nav>


