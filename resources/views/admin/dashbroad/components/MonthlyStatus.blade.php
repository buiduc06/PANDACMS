<div class="row">
    <div class="col">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Monthly Status</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn  btn-box-tool dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="fa fa-wrench"></i>
                       </button>
                       <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <p class="text-center">
                        <strong>Sales: 1 Jan, 2017 - 30 Jul, 2017</strong>
                    </p>

                    <div class="chart">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" style="height: 180px;"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                </div>
                {{-- /.col --}}
                <div class="col-md-12 col-lg-4">
                    <p class="text-center">
                        <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                        <span class="progress-text">Add Products to Bag</span>
                        <span class="progress-number"><b>140</b>/200</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-aqua" style="width: 70%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Complete Purchase</span>
                        <span class="progress-number"><b>300</b>/400</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-red" style="width: 75%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Visit Page</span>
                        <span class="progress-number"><b>400</b>/800</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-green" style="width: 50%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                        <span class="progress-text">Send Inquiries</span>
                        <span class="progress-number"><b>425</b>/500</span>

                        <div class="progress sm">
                            <div class="progress-bar progress-bar-yellow" style="width: 85%"></div>
                        </div>
                    </div>
                    <!-- /.progress-group -->
                </div>
                {{-- /.col --}}
            </div>
            {{-- /.row --}}
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$3,249.43</h5>
                        <span class="description-text">TOTAL REVENUE</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-sm-3">
                    <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 70%</span>
                        <h5 class="description-header">$2,376.90</h5>
                        <span class="description-text">TOTAL COST</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-sm-3">
                    <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 80%</span>
                        <h5 class="description-header">$1,795.53</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-sm-3">
                    <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 28%</span>
                        <h5 class="description-header">1800</h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                    </div>
                    <!-- /.description-block -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-footer -->
    </div>
    <!-- /.box -->
</div>
</div>