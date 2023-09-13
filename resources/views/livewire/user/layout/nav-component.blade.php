<div>
    @foreach($cats as $cat)
        @if($cat->childes->count()>0)
            <li><a class="wsus__droap_arrow" href="#"><i class="{{ $cat->icon }}"></i> {{ $cat->name }} </a>
                <ul class="wsus_menu_cat_droapdown">
                    <x-user.categories.sub-menu :childes="$cat->childes" />
                </ul>
            </li>
        @else
            <x-user.categories.link :icon="$cat->icon" :title="$cat->name"/>
        @endif
    @endforeach


{{--    <x-user.categories.menu icon="fal fa-tshirt" title="Fashion">--}}

{{--        <x-user.categories.sub-menu title="New Arrivals">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Best Sellers"/>--}}

{{--        <x-user.categories.sub-menu title="Trending">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Clothing"/>--}}
{{--        <x-user.categories.link title="Bags"/>--}}
{{--        <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--        <x-user.categories.link title="TV & Videos"/>--}}
{{--        <x-user.categories.link title="Camera"/>--}}

{{--        <x-user.categories.sub-menu title="Photos & Videos">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}
{{--    </x-user.categories.menu>--}}

{{--    <x-user.categories.menu icon="fas fa-tv" title="Electronics">--}}
{{--        <x-user.categories.sub-menu title="New Arrivals">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}

{{--        </x-user.categories.sub-menu>--}}
{{--        <x-user.categories.link title="Best Sellers"/>--}}

{{--        <x-user.categories.sub-menu title="Trending">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Clothing"/>--}}
{{--        <x-user.categories.link title="Bags"/>--}}
{{--        <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--        <x-user.categories.link title="TV & Videos"/>--}}
{{--        <x-user.categories.link title="Camera"/>--}}

{{--        <x-user.categories.sub-menu title="Photos & Videos">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}
{{--    </x-user.categories.menu>--}}

{{--    <x-user.categories.menu icon="fas fa-chair-office" title="Furniture">--}}
{{--        <x-user.categories.sub-menu title="New Arrivals">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Best Sellers"/>--}}

{{--        <x-user.categories.sub-menu title="Trending">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Clothing"/>--}}
{{--        <x-user.categories.link title="Bags"/>--}}
{{--        <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--        <x-user.categories.link title="TV & Videos"/>--}}
{{--        <x-user.categories.link title="Camera"/>--}}

{{--        <x-user.categories.sub-menu title="Photos & Videos">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}
{{--    </x-user.categories.menu>--}}

{{--    <x-user.categories.menu icon="fal fa-mobile" title="Smart Phones">--}}
{{--        <x-user.categories.sub-menu title="New Arrivals">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Best Sellers"/>--}}

{{--        <x-user.categories.sub-menu title="Trending">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}

{{--        <x-user.categories.link title="Clothing"/>--}}
{{--        <x-user.categories.link title="Bags"/>--}}
{{--        <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--        <x-user.categories.link title="TV & Videos"/>--}}
{{--        <x-user.categories.link title="Camera"/>--}}

{{--        <x-user.categories.sub-menu title="Photos & Videos">--}}
{{--            <x-user.categories.link title="New Arrivals"/>--}}
{{--            <x-user.categories.link title="Best Sellers"/>--}}
{{--            <x-user.categories.link title="Trending"/>--}}
{{--            <x-user.categories.link title="Clothing"/>--}}
{{--            <x-user.categories.link title="Bags"/>--}}
{{--            <x-user.categories.link title="Home Audio & Theaters"/>--}}
{{--            <x-user.categories.link title="TV & Videos"/>--}}
{{--            <x-user.categories.link title="Camera"/>--}}
{{--            <x-user.categories.link title="Photos & Videos"/>--}}
{{--        </x-user.categories.sub-menu>--}}
{{--    </x-user.categories.menu>--}}

{{--    <x-user.categories.link icon="fas fa-home-lg-alt" title="Home & Garden"/>--}}
{{--    <x-user.categories.link icon="fas fa-camera" title="Accessories"/>--}}
{{--    <x-user.categories.link icon="fas fa-heartbeat" title="Healthy & Beauty"/>--}}
{{--    <x-user.categories.link icon="fas fa-gift-card" title="Gift Ideas"/>--}}
{{--    <x-user.categories.link icon="fas fa-gamepad-alt" title="Toy & Games"/>--}}
{{--    <x-user.categories.link icon="fas fa-gem" title=" View All Categories"/>--}}
</div>
