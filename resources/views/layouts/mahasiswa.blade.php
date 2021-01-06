@include('includes.mahasiswa.header')

<body>
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        @include('includes.mahasiswa.topbar')
        @include('includes.mahasiswa.sidebar')
        <div class="main-content">
            <section class="section">
                @yield('content')
                <footer class="main-footer">
                    <div class="footer-center">
                        Copyright &copy; 2020 <div class="bullet"></div><a href="https://tik.uns.ac.id"
                            target="_blank">Rendi Jaka Susanto</a>
                    </div>
                </footer>
        </div>
    </div>
</body>
@include('includes.mahasiswa.script')
@stack('addon-script')

</html>