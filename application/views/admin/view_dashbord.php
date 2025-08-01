
        
        <div class="container conbre">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url().'dashbord'?>">Dashbord</a></li>
                <li class="active">Item list</li>
            </ol>
            <div id="respose-text">
                
            </div>
        </div>
        
        
        <div class="container well rounded-0" style="margin-top: -15px; width: 83.5%; padding-bottom: 15px;">
            <div class="row clearfix" style="border-bottom: 1px solid #ddd; padding-bottom: 4px;margin-bottom: 5px">
                <div class="col-md-12 column">
                    <a id="modal-666931" href="#modal-container-666931" role="button" class="btn btn-default btn-sm" data-toggle="modal">
                        <i class="glyphicon glyphicon-plus"></i> Create new entry</a>
                        
                        <a href="<?php echo base_url() ?>dashbord/searchTransaction" class="btn btn-default btn-sm pull-right"><i class="glyphicon glyphicon-search"></i>&nbsp;Advance search</a>
                </div>
                
            </div>
	<div class="row clearfix">
		<div class="col-md-12 column">
            <table class="table table-bordered table-stripped">
                <thead>
                    <tr>
                        <th><input id="selecctall" type="checkbox"></th>
                        <th>#</th>
                        <th>Item</th>
                        <th>Weight<small>&nbsp;<sup>(g)</sup></small></th>
                        <th>Quantity</th>
                        <th>Total weight<small>&nbsp;<sup>(g)</sup></small></th>
                        <th>Transaction type</th>
                        <th>Date</th>
                        <th>Notes</th>
                        <th>Action</th>
                    </tr>
                </thead>
				<tbody>
                    <?php $sno = 1; ?>
                    <?php foreach ($query->result() as $row): ?>
                    
                    <tr class="tbl_view">
                        <td>
                            <input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="<?php echo $row->id ?>">
                        </td>
						<td>
							<?php echo $sno; ?>
						</td>
						<td>
							<?=$row->item ?>
						</td>

						<td class="text-right">
							<?=$row->weight?><small></small>
						</td>
                        <td class="text-right">
							<?=$row->nug?>
						</td>
                        <td class="text-right">
							<?=$row->total_weight?>
						</td>
                        <td>
							<?=$row->transaction_type?>
						</td>
						<td>
							<?php 
                                                        $created = strtotime($row->created);
                                                        echo date('M d, Y', $created )?>
						</td>
                        <td>
							<?=$row->comment?>
						</td>
                        <td>
                            <div class="btn-group">
                                <a  db_id ='<?php echo $row->id ?>' href="<?php echo base_url() ?>dashbord/edit_entry/<?=$row->id?>/<?=$row->item?>"  role="button" data-toggle="modal" class="btn btn-default btn-sm" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>
                                <!--<a  db_id ='<?php echo $row->id ?>' href="<?php echo base_url() ?>index.php/itemlist/load_edit_view/<?=$row->id?>" data-target="#edit_model"  role="button" data-toggle="modal" class="btn btn-info btn-sm edit_btn" title="Edit"><i class="glyphicon glyphicon-pencil"></i></a>-->
                                <a db_id='<?php echo $row->id ?>' href="#delete" class="btn btn-default btn-sm btn_delete" title="Delete"><i class="glyphicon glyphicon-remove"></i></a>
                                </div>
                            
						</td>
					</tr>
                                        <?php $sno = $sno+1;  endforeach; ?>
					
                                        
                                    
					
				</tbody>
                                   
			</table>
            <div class="text-center">
                <button class="btn btn-primary btn-sm rounded-0" id="del_all">Delete Selected
            </div>
		</div>
	</div>
            
</div>
        
        
        <!-- Add new item Model -->
        

       
        <div class="modal fade" id="modal-container-666931" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Create new entry</h4>
                    </div>

                    <div class="modal-body">
                        <div id='ret'></div>
                        
                          <form class="form-horizontal cus-form" id="Add_transaction" method="POST" action="<?php echo base_url().'dashbord/add_transaction' ?>">
                        
                        <table class="table table-bordered">
                        <tr>
                            <td colspan="2">
                                <label>Select Item</label>
                                <select id="name" name="item" class="form-control input-sm">
                                    <option selected="selected" value=""></option>
                                <?php foreach ($listquery->result() as $row): ?>
                                    <option value="<?=$row->id ?>"><?=$row->item ?></option>
                                <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Weight <sup>grams</sup></label>  
                                <input id="weight" name="weight" class="form-control input-sm" type="number" step="any" autocomplete="off">
                
                            </td>
                            <td>
                                <label>Quantity</label>  
                                <input id="nug" name="nug" class="form-control input-sm" type="number" step="any" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                <label>Transaction type</label>  
                                </div>
                                <div class="tran-type">
                                <label>
                                    <input type="radio" name="transaction_type" value="sale" checked="checked">
                                    Sale
                                  </label>
                                <label>
                                    <input type="radio" name="transaction_type" value="buy">
                                    Buy
                                  </label>
                                </div>
                            </td>
                            
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Date</label>
                                <input type="text" id="datepicker" name="date" class="form-control input-sm"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label>Comment</label>
                                <textarea class="form-control" id="comment" name="comment" placeholder="Any related notes"></textarea>
                            </td>
                        </tr>
                        
                        
                    </table>
                    <div class="text-center mb-3">
                        <button type="submit" name="submit" class="btn btn-primary rounded-0">Save</button>
                        <button id="cancle" name="cancle" class="btn btn-default rounded-0" data-dismiss="modal" aria-hidden="true">Cancel</button>                
                    </div>
                        
                </form>
                    </div>

                    </div>
                    
                </div>

            </div>

        
        
        <!-- Load Edit Model -->             
        
<div class="modal fade" id="edit_model" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
        </div>
    </div>
</div>
       
 
 
 <!--Add item script-->       
 <script>
    $(function(){
        $( "#Add_transaction" ).submit(function( event ) {
           var url = $(this).attr('action');
                $.ajax({
                url: url,
                data: $("#Add_transaction").serialize(),
                type: $(this).attr('method')
              }).done(function(data) {
                  $('#ret').html(data);
//                  window.location.reload();
                $('#Add_transaction')[0].reset();
              });
            event.preventDefault();
        });
        
$( "#datepicker" ).datepicker({
defaultDate: "+1w",
changeMonth: true,
numberOfMonths: 1,
dateFormat: "yy-mm-dd",
onClose: function( selectedDate ) {
$( "#to" ).datepicker( "option", "minDate", selectedDate );
}
});

});
</script>

<!--Refresh window when modal close-->
<script>
$("#modal-container-666931").on('hidden.bs.modal', function(e){window.location.reload();});
</script>

<!--Edit enrty script-->
<script>
    $(document).ready(function (){
$('.edit_btn').on('click', function(e) {
        e.preventDefault();
        var data = $(this).attr('db_id');
        var url = $(this).attr('href');
        $.ajax({
            url: url,
            type:"POST",
            data:'id='+data
        }).done(function(data){
            
        });
 });
 });
</script>


<a class="confirmLink" href="#"></a>
<div id="dialog" title="Confirmation Required">
  Are you sure about this?
</div>
<script>
$(document).ready(function (){
$("#dialog").dialog({
      autoOpen: false,
      modal: true
    });


  $(".confirmLink").click(function(e) {
    e.preventDefault();
    var targetUrl = $(this).attr("href");

    $("#dialog").dialog({
      buttons : {
        "Confirm" : function() {
         $(this).dialog("close");
         delfun();
          
        },
        "Cancel" : function() {
          $(this).dialog("close");
          return false;
        }
      }
    });

    $("#dialog").dialog("open");
  });
  
});
</script>

<!--Delete enrty script-->
<script>
$(document).ready(function (){
$('.btn_delete').on('click', function(e) {
        e.preventDefault();
        delid = $(this).attr('db_id');
        $('.confirmLink').trigger('click'); return false;
        });
        
 delfun = function(){
    var url = '<?php echo base_url() ?>dashbord/delete_entry';
    var data = delid
    $.ajax({
        url: url,
        type:"POST",
        data:'id='+data
        }).done(function(data){
        window.location.reload();
        });
};
        
 
 $('#selecctall').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
    
    
    
$("#del_all").on('click', function (e){
    e.preventDefault();
    if($('.checkbox1:checked').length <= 0){
        alert("Please select atleast 1 item first.");
        return false;
    }
    if(confirm("Are you sure to delete all the selected Items?") === false)
    return false;
    var checkValues = $('.checkbox1:checked').map(function()
    {
        return $(this).val();
    }).get();
    //console.log(checkValues); return  false;
    $.ajax({
            url: '<?php echo base_url() ?>dashbord/batchDelete',
            type: 'post',
            data: 'ids='+checkValues
            }).done(function(data){
                window.location.reload();
    //            $("#respose-text").html(data);
            });
        });
    });    
</script>


    </body>
</html>