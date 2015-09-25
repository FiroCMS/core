<header class="c-header">
    <div class="o-wrapper">
        <h1 class="c-header__item c-header__logo">
            <a href="{{ route('firo.dashboard') }}">Firo</a>
        </h1>

        <div class="c-header__item c-primary-nav">
            {!! nav('primary', $activeView, 'c-primary-nav') !!}
        </div>

        <div class="[ c-header__item c-header__item--right ] [ o-join o-join--force o-join--small ]">
            <a href="" class="c-header__new c-btn c-btn--positive">
                <i class="fa fa-plus"></i>
            </a>

            <div class="c-header__dropdown">
                <div class="c-header__dropdown-toggle">
                    <i class="fa fa-cog"></i>
                </div>

                <div class="c-header__dropdown-content">
                    <ul class="o-nav">
                        {!! nav('header-dropdown', null) !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /.o-wrapper -->
</header>
<!-- /.c-header -->