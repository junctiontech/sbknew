<!-- footer content --> 
<div class="clearfix"></div> 
<footer>                  
	<div class="">                    
		<p class="pull-right">Developed and maintain by <a>junctiotech.in</a>. |                      
			<span class="lead"> <i class="fa fa-paw"></i> Searchb4kharch</span>                      
		</p>					
		<a href="#top" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a> 
	</div>				
	<div class="clearfix"></div>              
</footer>

<!-- /footer content -->
<div id="custom_notifications" class="custom-notifications dsp_none">     
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">       
	</ul>      
	<div class="clearfix"></div>       
	<div id="notif-group" class="tabbed_notifications"></div>   
</div>

<script src="<?=base_url();?>frontend/js/sb4k.js"></script>						
<script src="<?=base_url();?>frontend/js/Filter_product.js"></script>						
<!--	<script  src="<?=base_url();?>admin/js/moment.min2.js"></script>-->						
<!--<script  src="<?=base_url();?>frontend/js/datepicker/bootstrap-datepicker.js"></script>-->						
<link rel="stylesheet" href="<?=base_url();?>frontend/js/daterangepicker/daterangepicker-bs3.css">						
<link rel="stylesheet" href="<?=base_url();?>frontend/js/select2/select2.css">						
<link rel="stylesheet" href="<?=base_url();?>frontend/js/select2/select2-bootstrap.css">							
<link rel="stylesheet" href="<?=base_url();?>frontend/js/multiselect/css/multi-select.css">						
<!-- Imported scripts on this page daterangepicker-->						
<script src="<?=base_url();?>frontend/js/daterangepicker/daterangepicker.js"></script>							
<script src="<?=base_url();?>frontend/js/datepicker/bootstrap-datepicker.js"></script>						
<!--<script src="<?=base_url();?>frontend/js/timepicker/bootstrap-timepicker.min.js"></script>						
<script src="<?=base_url();?>frontend/js/colorpicker/bootstrap-colorpicker.min.js"></script>-->								
<script src="<?=base_url();?>frontend/js/select2/select2.min.js"></script>							
<!--<script src="<?=base_url();?>frontend/js/jquery-ui/jquery-ui.min.js"></script>							
<script src="<?=base_url();?>frontend/js/selectboxit/jquery.selectBoxIt.min.js"></script>  							
<script src="<?=base_url();?>frontend/js/tagsinput/bootstrap-tagsinput.min.js"></script> 							
<script src="<?=base_url();?>frontend/js/typeahead.bundle.js"></script>							
<script src="<?=base_url();?>frontend/js/handlebars.min.js"></script>-->							
<script src="<?=base_url();?>frontend/js/multiselect/js/jquery.multi-select.js"></script>
<script src="<?=base_url();?>frontend/js/jquery-validate/jquery.validate.min.js"></script>
<script src="<?=base_url();?>frontend/js/bootstrap.min.js"></script>							
<script src="<?=base_url();?>frontend/js/TweenMax.min.js"></script>							
<script src="<?=base_url();?>frontend/js/resizeable.js"></script>							
<script src="<?=base_url();?>frontend/js/joinable.js"></script>							
<script src="<?=base_url();?>frontend/js/xenon-api.js"></script>							
<script src="<?=base_url();?>frontend/js/xenon-toggles.js"></script>							
<!-- JavaScripts initializations and stuff -->							
<script src="<?=base_url();?>frontend/js/xenon-custom.js"></script>
<!--    <script>
        $(function () {
            var day_data = [
                {
                    "period": "Jan",
                    "Hours worked": 80
                },
                {
                    "period": "Feb",
                    "Hours worked": 125
                },
                {
                    "period": "Mar",
                    "Hours worked": 176
                },
                {
                    "period": "Apr",
                    "Hours worked": 224
                },
                {
                    "period": "May",
                    "Hours worked": 265
                },
                {
                    "period": "Jun",
                    "Hours worked": 314
                },
                {
                    "period": "Jul",
                    "Hours worked": 347
                },
                {
                    "period": "Aug",
                    "Hours worked": 287
                },
                {
                    "period": "Sep",
                    "Hours worked": 240
                },
                {
                    "period": "Oct",
                    "Hours worked": 211
                }
    ];
            Morris.Bar({
                element: 'graph_bar',
                data: day_data,
                xkey: 'period',
                hideHover: 'auto',
                barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
                ykeys: ['Hours worked', 'sorned'],
                labels: ['Hours worked', 'SORN'],
                xLabelAngle: 60
            });
        });
    </script>-->
    <!-- datepicker -->
   <!-- <script type="text/javascript">
        $(document).ready(function () {

            var cb = function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
            }

            var optionSet1 = {
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: {
                    days: 60
                },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'left',
                buttonClasses: ['btn btn-default'],
                applyClass: 'btn-small btn-primary',
                cancelClass: 'btn-small',
                format: 'MM/DD/YYYY',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Clear',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            };
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
            $('#reportrange').daterangepicker(optionSet1, cb);
            $('#reportrange').on('show.daterangepicker', function () {
                console.log("show event fired");
            });
            $('#reportrange').on('hide.daterangepicker', function () {
                console.log("hide event fired");
            });
            $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
            });
            $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                console.log("cancel event fired");
            });
            $('#options1').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
            });
            $('#options2').click(function () {
                $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
            });
            $('#destroy').click(function () {
                $('#reportrange').data('daterangepicker').remove();
            });
        });
    </script>-->
    <!-- /datepicker -->
</body>

</html>
