    <!-- Javascript files-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

        }

        $("#main").click(function() {
            $("#navbarSupportedContent").toggleClass("nav-normal")
        })
    </script>
