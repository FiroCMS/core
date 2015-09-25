@include('firo::shared.head')

<div class="c-page">
    @include('firo::shared.header')

    <main class="c-main">
        <div class="o-wrapper">
            <h1 class="u-kilo u-mb">{{ $title }}</h1>

            <section class="c-content">
                @yield('content')
            </section>
            <!-- /.c-content -->
        </div>
        <!-- /.o-wrapper -->
    </main>
    <!-- /.c-main -->
</div>
<!-- /.c-page -->

@include('firo::shared.footer')