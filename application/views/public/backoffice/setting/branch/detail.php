<div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <div class="box-title">
                    Detail Branch
                </div>
                <div class="box-tools">
                </div>
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <table class="table table-detail table-hover table-bordered table-striped">
                     <tr>
                      <td>Country</td>
                      <td><?php echo $data->name;?></td>
                    </tr>
                    <tr>
                      <td>VPN  Address</td>
                      <td><?php echo $data->vpn;?></td>
                    </tr>
                    <tr>
                      <td>Token</td>
                      <td><?php echo $data->token;?></td>
                    </tr>
                     <tr>
                      <td>Location Address</td>
                      <td><?php echo $data->address;?></td>
                    </tr>
                </table>    
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <a class="btn btn-default btn-sm" href="<?php echo base_url($this->layout.'index');?>"><i class="fa fa-reply"></i> Back</a>  
                <a class="btn btn-default btn-sm" href="<?php echo base_url($this->layout.'add');?>"><i class="fa fa-plus"></i> Add New</a>
                <a class="btn btn-default btn-sm" href="<?php echo base_url($this->layout.'edit/'.$data->id_main);?>"><i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-default btn-sm delete" href="<?php echo base_url($this->layout.'delete/'.$data->id_main);?>"><i class="fa fa-trash"></i> Delete</a>
            </div>
        </div>
    </div>
</div>