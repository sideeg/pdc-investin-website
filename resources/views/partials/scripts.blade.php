
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scrollspy.min.js') }}"></script>
        <!-- easing -->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <!-- Read More -->
        <script src="{{ asset('js/jquery.show-more.js') }}"></script>
        <!-- Portfolio -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/portfolio-filter.js') }}"></script> 
        <!-- Carousel -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/owlcarousel.init.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script> 
        <script src="{{ asset('js/slick.init.js') }}"></script> 
        <!-- VIDEO ICON -->
        <script src="{{ asset('js/magnific.init.js') }}"></script>
        <!-- COUNTER -->
        <script src="{{ asset('js/counter.init.js') }}"></script>
        <!-- CONTACT -->
        <script src="{{ asset('js/contact.js') }}"></script>
        <!--custom script-->
        <script src="{{ asset('js/app.js') }}"></script>
        
        <script>
            
            $(document).ready(function() {
                $('#history').showMore({
                    minheight: 200,
                    buttontxtmore: "readmore",
                    buttontxtless: "readless",
                    buttoncss: 'my-button-css btn btn-buttons btn-round',
                    animationspeed: 250
                });
            });
        </script>