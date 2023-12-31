<div class="dashboard_sidebar">
        <span class="close_icon">
          <i class="far fa-bars dash_bar"></i>
          <i class="far fa-times dash_close"></i>
        </span>
    <a href="dashboards.html" class="dash_logo"><img src="{{asset('user/assets/images/logo.png')}}" alt="logo" class="img-fluid"></a>
    <ul class="dashboard_link">
        <li><a wire:navigate class="active" href="{{ route('vendor.dashboard') }}"><i class="fas fa-tachometer"></i>Dashboard</a></li>
        <li><a wire:navigate href="dashboard_order.html"><i class="fas fa-list-ul"></i> Orders</a></li>
        <li><a wire:navigate href="dashboard_download.html"><i class="far fa-cloud-download-alt"></i> Downloads</a></li>
        <li><a wire:navigate href="dashboard_review.html"><i class="far fa-star"></i> Reviews</a></li>
        <li><a wire:navigate href="dashboard_wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li>
        <li><a wire:navigate href="{{ route('vendor.profile') }}"><i class="far fa-user"></i> My Profile</a></li>
        <li><a wire:navigate href="dashboard_address.html"><i class="fal fa-gift-card"></i> Addresses</a></li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#"  onclick="event.preventDefault(); this.closest('form').submit();"
                   class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                </a>
            </form>
        </li>
    </ul>
</div>
