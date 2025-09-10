<div class="main-content" system-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("and_dashboard_modules_header_line45")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-bullhorn la-lg"></i> {__("and_admin_mark_3")}
                        </h1>
                    </div>
                    
                    <div class="col-auto">
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="{__("and_admin_mark_6")}" system-trash="administration.marketing">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("dashboard_adminmarketing_pushbtndesc")}" system-toggle="add.push">
                            <i class="la la-android la-lg"></i> {__("and_admin_mark_12")}
                        </button>
            
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("dashboard_adminmarketing_notifybtndesc")}" system-toggle="add.notify">
                            <i class="la la-chrome la-lg"></i> {__("and_admin_mark_17")}
                        </button>
            
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("dashboard_adminmarketing_mailerbtndesc")}" system-toggle="add.mailer">
                            <i class="la la-envelope la-lg"></i> {__("and_admin_mark_22")}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table" system-table="administration.marketing"></table>
                </div>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>
