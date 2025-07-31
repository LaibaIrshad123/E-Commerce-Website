<div class="container" style="margin-top: 53px;">
            <div class="col-md-12">
                <div class="text-right">
                    <a href="<?php echo base_url()?>" class="btn btn-lg btn-default rounded-0 mb-3">Back to List</a>
                </div>
                <div id="report-response" style="">
                <div id="loader" style="text-align: center; margin-top: 15%; display: none; position: absolute; z-index: 9999 ">
                    <img src="<?php echo base_url()?>bootstrap/images/loader2.gif" alt="loading.."/>&nbsp;&nbsp;<b>Loading data..</b>
                </div>
                    
                    <table class="metro table table-bordered">
                        <thead>
                        <tr><td colspan="6" style="padding: 0px;"><span class="table-heading"><?php echo $item ?> - transaction report</span></td></tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>WEIGHT<small><sup>(g)</sup></small></th>
                                <th>QUANTITY</th>
                                <th>TOTAL Weight<small><sup>(g)</sup></small></th>
                                <th>TYPE</th>
                                <th>DATE</th>
                        </tr>
                        </thead>
                        <tbody>
                       <?php 
                       if(count($query->result())>0)
                       {$srno = 0;
                       foreach ($query->result() as $row){
                          $srno = $srno+1;
                          $created = strtotime($row->created);
                          $created =  date('M d, Y', $created );
                        echo'<tr><td>'.$srno.'</td><td>'.$row->weight.'</td><td>'.$row->nug.'</td><td>'.$row->total_weight.'</td><td>'.$row->transaction_type.'</td><td>'.$created.'</td></tr>';
                        }
                       }
                       else{
                           echo'<tr><th colspan="6" class="text-center">No record found</th></tr>';
                       }
                        echo '</tbody>';
                        ?>
                </table>
                    <div id="result" style="width: 100%; background: #F8F8F8; padding:12px;">
                        <fieldset class="well">
                            <legend>Remaining stock</legend>
                            <div><h4 class=""><b>Total Quantity:</b> <?php echo $quantity ?></h4></div>
                            <div><h4 class=""><b>Total Weight:</b> <?php echo $weight ?><small> <sup>(g)</sup></small></h4></div>
                        </fieldset>
                       
                    </div>
            </div>
            </div>
            
        </div>

<script>
$(document).ready(function (){
    $("#back").on('click', function (e){
    e.preventDefault();
    window.history.back();
    });
    
    $(".print").click(function (){
        window.print();
    });
});
</script>

<style>
    .spntext{
        font-size:18px; text-transform:uppercase; font-weight:bold; color: #3498db;
    } 
    .spanval{
        
    }
</style>