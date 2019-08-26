<script src="./admin/assets/js/jquery.min.js"></script>
    <script>
        // my Sticky Menu
        window.onscroll = function () { myFunction() };

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
        // My script for pop up such as login, show_img
        // Quantity
        $(document).ready(function () {
            $('.add').click(function () {
                if ($(this).prev().val() < 10) {
                $(this).prev().val(+$(this).prev().val() + 1);
                }
            });
            $('.sub').click(function () {
                    if ($(this).next().val() > 1) {
                    if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
                    }
            });
            // Color(Page Detail)
            $('.small_color').click(function(){
                let item =  $(this).attr('src');
                $(".big_img").attr('src', item);
            });
            // Big Image(Page Detail)
            $(".big_img").click(function(){
                $('.big_img_show').css("display", "block");
                $('#bg_body').css("display", "block");
                let item =  $(this).attr('src');
                $(".popup_img").attr('src', item);
            });
            // order remove
            $('.btn_order_removie').click(function () {
                $('.msg_popup').css("display", "block");
                $('#bg_body').css("display", "block");
            });
            // login
            $('#btn_login').click(function () {
                $('#login_form').css("display", "block");
                $('#bg_body').css("display", "block");
            });
            
            // register
            $('#btn_register').click(function () {
                $('#register_form').css("display", "block");
                $('#bg_body').css("display", "block");
            });
            $('.btn-close').click(function () {
                $('.login_register').css("display", "none");
                $('.login_form').css("display", "none");
                $('.big_img_show').css("display", "none");
                $('.msg_popup').css("display", "none");
                $('#bg_body').css("display", "none");
            });

            $('#bg_body').click(function () {
                $('.login_register').css("display", "none");
                $('.login_form').css("display", "none");
                $('.big_img_show').css("display", "none");
                $('.msg_popup').css("display", "none");
                $('#bg_body').css("display", "none");
            });

            $('.cancel').click(function () {
                $('.login_register').css("display", "none");
                $('.login_form').css("display", "none");
                $('#bg_body').css("display", "none");
                $('.msg_popup').css("display", "none");
                $('.cancel').attr('type', 'reset');
            });
            
            // onmouse over menu
            $('.tabcontent').mouseout(function () {
                $('.tabcontent').css("display", "none");
            });
            // Check Signup Validation
            $('#btn_signup').click(function () {
                var username = $("#username").val(),
                    pass = $("#pass").val(),
                    repass = $("#repass").val();
                if (username == "" || username == 0) {
                    alert("Input Your Username, Please!");
                }else if (pass == "" || pass == 0) {
                    alert("Input Your Password, Please!");
                }else if (repass == "" || repass == 0) {
                    alert("Input Your Re-Password, Please!");
                }else if (pass != repass) {
                    alert("Your Password Not Match!");
                }else{
                    $('#btn_signup').attr('type', 'submit');
                }
            });

            $('#btn_signin').click(function () {
                var username = $("#login_username").val(),
                    pass = $("#login_password").val();

                if (username == "" || username == 0) {
                    alert("Input Your Username, Please!");
                }else if (pass == "" || pass == 0) {
                    alert("Input Your Password, Please!");
                }else{
                    $('#btn_signin').attr('type', 'submit');
                }
            });

        });
    </script>
     <!-- jssor slider scripts-->
     <script type="text/javascript" src="./admin/assets/js/jssor.slider.min.js"></script>
    <script>

        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $Idle: 2000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
                $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth) {
                    jssor_slider1.$ScaleWidth(parentWidth - 30);
                }
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        // Javascript for menu icon
        function openCity(evt, cityName) {
            var i, tabcontent, menu_buttons;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            menu_buttons = document.getElementsByClassName("menu_button");
            for (i = 0; i < menu_buttons.length; i++) {
                menu_buttons[i].className = menu_buttons[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>