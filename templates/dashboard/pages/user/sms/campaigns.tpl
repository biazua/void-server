<div class="main-content" system-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("dashpages_sms_headertitle")}
                        </h6>
                        
                        <h1 class="header-title">
                            <i class="la la-coffee la-lg"></i> {__("pages_smscampaigns_header")}
                        </h1>
                    </div>

                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="{__("table_btn_refresh")}" system-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="{__("and_droid_sent_19")}" system-toggle="sms.bulk">
                            <i class="la la-mail-bulk la-lg"></i> {__("and_droid_sent_21")}
                        </button>
                        <button class="btn btn-primary lift" title="{__("and_droid_sent_24")}" system-toggle="sms.excel">
                            <i class="la la-file-excel la-lg"></i> {__("btn_bulkexcel")}
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
                    <table class="table table-striped" system-table="sms.campaigns"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>