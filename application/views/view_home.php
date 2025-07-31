
<style>
    /*ul.home-grid{margin-left: 10%}*/
    ul.home-grid li{display: inline-block ; list-style: none; margin:10px 5px}
</style>
<div style="background-color: #efeae3; margin-top: -5px">
    <div class="container" style="margin-top: 4%">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row">
                        <?php foreach ($query->result() as $row): ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <a  href="<?php echo base_url() ?>report/<?=$row->item ?>/<?=$row->id ?>" class="rep-anchor">
                                <div class="view-report">
                                    <div class="text-center"><?=$row->item ?></div>
                                    <div><small>(Click here for see report)</small></div>
                                </div>
                            </a>

                        </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

