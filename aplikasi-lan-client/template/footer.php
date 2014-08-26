    </div>
    </div>
    </div>
    <div class="container second-con">
    
    <footer>
        <div class="bottom-menu-wrapper">
            <ul class="horizontal-menu compact">
                <li>&copy; 2014 PERPUSTAKAAN</li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Legal</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Feedback</a></li>
            </ul>
        </div>
    </footer>
    </div>
</body>
<script>
        // This script fixes the shift that occurs in a centered layout when the page grows and forces scrollbars to appear.
        $(function () {
                var body = $("body");
             
                var previousWidth = null;
             
    // Function that applies padding to the body to adjust its position.
    var resizeBody = function () {
     var currentWidth = body.width();
         if (currentWidth != previousWidth) {
                    previousWidth = currentWidth;
         
            // Measure the scrollbar size
            body.css("overflow", "hidden");
            var scrollBarWidth = body.width() - currentWidth;
            body.css("overflow", "auto");
 
            body.css("margin-left", scrollBarWidth + "px");
        }
    };
 
    // setInterval is required because the resize event is not fired when a scrollbar appears or disappears.
    setInterval(resizeBody, 100);
    resizeBody(); 
});
        $('a').each(function(){$(this).attr('href',this.href); });
        $(document).ready(function() {

            $(".am-remote-link").adaptiveModal({
                success: function(data) {
                    
                    $(".am-remote").html(data);
                }
            });
        });


    </script>
    </html>