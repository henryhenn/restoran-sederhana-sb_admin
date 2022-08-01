<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">EMS <sup>V.1.0</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
		<a class="nav-link" href="index.html">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Nav Item - Charts -->
	<li class="nav-item {{ request()->routeIs('foods.*') ? 'active' : '' }}">
		<a class="nav-link" href="{{ route('foods.index') }}">
			<i class="fas fa-utensils"></i>
			<span>Foods</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<li class="nav-item {{ request()->routeIs('categories.*') ? 'active' : '' }}">
		<a class="nav-link" href="{{ route('categories.index') }}">
			<i class="fas fa-fw fa-list"></i>
			<span>Categories</span></a>
	</li>
</ul>
