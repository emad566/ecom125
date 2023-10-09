<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>

        <ul class="sidebar-menu">

            <x-admin.aside.header >Dashboard</x-admin.aside.header>
            <x-admin.aside.link route="admin.dashboard" link="dashboard" icon="fas fa-pencil-ruler">{{ __('Dashboard') }}</x-admin.aside.link>
            <x-admin.aside.menu :title="__('Manage Website')" link="manages*" href="" icon="fas fa-cog">
                <x-admin.aside.link route="admin.sliders" link="manages/sliders">{{ __('Slider') }}</x-admin.aside.link>
            </x-admin.aside.menu>
            <x-admin.aside.menu :title="__('Manage Categories')" link="categories*" href="" icon="fas fa-box">
                <x-admin.aside.link route="admin.categories.index" link="categories/index">{{ __('Categories') }}</x-admin.aside.link>
            </x-admin.aside.menu>
            <x-admin.aside.menu :title="__('Manage Products')" link="products*" href="" icon="fas fa-box">
                <x-admin.aside.link route="admin.brands.index" link="products/brands/index">{{ __('Brands') }}</x-admin.aside.link>
                <x-admin.aside.link route="admin.products.index" link="products/index">{{ __('Products') }}</x-admin.aside.link>
            </x-admin.aside.menu>



{{--            <x-admin.aside.link active="" href="" icon="fas fa-pencil-ruler">Credits</x-admin.aside.link>--}}
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
