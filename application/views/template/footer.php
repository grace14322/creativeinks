       
      <!-- jQuery -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url(); ?>plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/morrisjs/morris.min.js"></script>
    <script>
        
    $(function() {

        Morris.Area({
            element: 'morris-area-chart',
            data: [{
                period: '2010 Q1',
                brancha: 2666,
                branchb: 212412412,
            }, {
                period: '2010 Q2',
                brancha: 2778,
                branchb: 2294,
            }, {
                period: '2010 Q3',
                brancha: 4912,
                branchb: 1969,
            }, {
                period: '2010 Q4',
                brancha: 3767,
                branchb: 3597,
            },{
                period: '2011 Q1',
                brancha: 124123241,
                branchb: 1231,
            }, {
                period: '2011 Q2',
                brancha: 531436,
                branchb: 22436,
            }, {
                period: '2011 Q3',
                brancha: 32426,
                branchb: 192269,
            }, {
                period: '2011 Q4',
                brancha: 371167,
                branchb: 352697,
            },{
                period: '2012 Q1',
                brancha: 35513,
                branchb: 12523531,
            }, {
                period: '2012 Q2',
                brancha: 532436,
                branchb: 22435636,
            }, {
                period: '2012 Q3',
                brancha: 32413226,
                branchb: 19221269,
            }, {
                period: '2012 Q4',
                brancha: 37151167,
                branchb: 35697,
            }],
            xkey: 'period',
            ykeys: ['brancha', 'branchb'],
            labels: ['Branch A', 'Branch B'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
    </script>
    <!-- DataTables JavaScript -->
<script src="<?php echo base_url(); ?>plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/datatables-responsive/js/dataTables.responsive.js"></script>
<script>
$(document).ready(function() {
    $('#dataTables-productss').DataTable();
});
</script>
<script src="<?php echo base_url(); ?>js/custom.js"></script>
<script src="<?php echo base_url(); ?>node_modules/vue/dist/vue.min.js"></script>
<script>
    
   var app = new Vue({
        el:'body',
        
        data:{
            total:0,
            items:[
                {
                    item_id:"1",
                    item_code:"03210",
                    item_quantity:3,
                    item_name:"T-shirtColarSm",
                    item_price:50.75,
                },
                {
                    item_id:"1",
                    item_code:"03210",
                    item_quantity:2,
                    item_name:"T-shirtColarMedium",
                    item_price:100,
                },
                {
                    item_id:"1",
                    item_code:"03210",
                    item_quantity:2,
                    item_name:"T-Plain",
                    item_price:100.10,
                },
                {
                    item_id:"1",
                    item_code:"03210",
                    item_quantity:10,
                    item_name:"Teejeans",
                    item_price:25.30,
                },
                {
                    item_id:"1",
                    item_code:"03210",
                    item_quantity:1,
                    item_name:"T-weasr",
                    item_price:100,
                },
            ],
        },
        methods:{
           
        },
        filters:{
            pluckSum: function(list, key1, key2){
               
                return list.reduce(function(total, item) {
                    
                    return total + (item[key1] * item[key2])
                }, 0)
            }
        }
    })
</script>
</body>

</html>
