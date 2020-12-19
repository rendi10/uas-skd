@include('includes.dosen.header')

<body>
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        @include('includes.dosen.topbar')
        @include('includes.dosen.sidebar')
        <div class="main-content">
            <section class="section">
                @yield('content')
                <footer class="main-footer">
                    <div class="footer-center">
                        Copyright &copy; 2020 <div class="bullet"></div><a href="https://tik.uns.ac.id"
                            target="_blank">Maganger UPT TIK UNS</a>
                    </div>
                </footer>
        </div>
    </div>
</body>
@include('includes.dosen.script')
@stack('addon-script')

</html>