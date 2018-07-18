 </div>
                    <div class="clearfix"></div>
                    <div class="footer">
                        <div class="float-right">
                            10GB of <strong>250GB</strong> Free.
                        </div>
                        <div>
                            <strong>Copyright</strong> Onlineforu Ltd © 2018
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- /wrapper -->


        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>


        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div><!-- /PRELOADER -->


        <!-- JAVASCRIPT FILES -->

        <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="assets/plugins/metis-menu/metisMenu.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/tether.min.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/slim-scroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/c3/d3.v3.min.js" charset="utf-8"></script>       
        <script src="assets/plugins/c3/c3.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="assets/plugins/calendar/moment.min.js"></script>
        <script src="assets/plugins/calendar/fullcalendar.min.js"></script>
        <script src="assets/plugins/ui/jquery-ui.js"></script>


        <!-- PAGE LEVEL FILES -->
        <script src="assets/plugins/data-tables/jquery.dataTables.js"></script>
        <script src="assets/plugins/data-tables/dataTables.tableTools.js"></script>

        <!-- <script src="assets/plugins/data-tables/dataTables.bootstrap.js"></script> -->
        <script type="text/javascript" src="assets/plugins/data-tables/dataTables.bootstrap4.min.js"></script>

        <script src="assets/plugins/data-tables/dataTables.responsive.js"></script>
        <script src="assets/plugins/data-tables/tables-data.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb0X-HAAey-LDpdZ26SWV5flKuZb8mr4o"></script>

        <!-- Custom FILES -->
        <script type="text/javascript" src="assets/js/custom.js"></script>
        <script src="assets/js/gmaps.min.js"></script>

        <script type="text/javascript" src="assets/js/gmaps.js"></script>


        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>

<!-- charts -->

        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.stack.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.crosshair.min.js"></script>


          <!--  Charts JavaScript -->

        <script src="assets/plugins/chartjs/Chart.min.js"></script>

        <script src="assets/plugins/select/select2.js"></script>

       
      
        <?php 
            if(isset($this -> js)){
                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src=" '.URL . '/views/'.$js. '"></script>';
                }
            }
        ?>
        
    </body>
</html>