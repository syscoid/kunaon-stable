<div class="box">
    <div class="box-header with-border">
        <div class="box-title">
            <a href="<?php echo base_url();?>backoffice/reference/creditcard/add" class="btn btn-primary btn-sm" data-toggle="tooltip" 
                data-placement="top" title="Create Data">
                <i class="fa fa-plus"></i> Create
            </a>
            <a href="javascript:document.getElementById('FormDelete').submit()" class="btn btn-danger btn-sm btn-delete-all" data-toggle="tooltip" 
                data-placement="top" title="Delete Data">
                <i class="fa fa-trash"></i> Delete
            </a>
        </div>
        <div class="box-tools">
            <a href="<?php echo base_url();?>backoffice/reference/creditcard" class="btn btn-warning btn-sm pull-right" data-toggle="tooltip" 
                data-placement="top" title="Refresh">
                <i class="fa fa-refresh"></i> Refresh
            </a>
           <form method="POST" id="FormDelete" action="<?php echo base_url();?>backoffice/reference/creditcard/delete">
               <input type="hidden" name="dataDeleted" id="dataDeleted" value="">
           </form>
        </div>
    </div><!-- /.box-header -->
    <div class="box-body table-responsive">
         <div id="button-tools" class="col-md-12 no-padding"></div>
        <table class="table table-hover table-striped table-bordered" id="TableCreditCard">
            <thead>
                <tr>
                    <th><input type="checkbox" class="flat-red check-all"/></th>
                    <th>No</th>
                    <th>Credit Card</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>    
    </div><!-- /.box-body -->
</div>
