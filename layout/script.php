<script>

    jQuery(".owl-carousel-banner").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 50,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,

        dots: false,
        responsive: {
            0: {
                items: 1,

            },

        }
    });
</script>
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/code.jquery.com/jquery-3.5.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugin/chartist/chartist.min.js"></script>
    <script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/js/demo.js"></script>

    <!-- ------------------ -->
    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );
$(document).ready(function() {
    $('table.display').DataTable();
} );
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/validate.js"></script>
    <script>
        var counter = 1;
        setInterval(function(){
            document.getElementById('btm'+ counter).checked = true;
            counter++;
            if(counter > 5) {
                counter = 1;
            }
         }, 5000);
    </script>
    <script>
        $(document).on('change', '.facultyID', function(e){
            e.preventDefault();

            var fID = $(this).val();
            //console.log(fID);
            // var id = $(this).attr('name');
            $.post({
                url      : 'server/selectClass.php',
                type     : 'post',
                dataType : 'html',
                data     : {fID : fID},

                success : function(data){
                    //console.log("true");
                    $("#resultClass").html(data);
                },

                error : function(){
                
                },
                always : function(){
                    
                }
            });
        });

    </script>