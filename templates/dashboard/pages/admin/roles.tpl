<div class="main-content" system-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            {__("and_dashboard_modules_header_line45")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-shield la-lg"></i> {__("dashboard_roles_title")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" system-toggle="add.role">
                            <i class="la la-shield la-lg"></i> {__("dashboard_roles_addrole")}
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
                    <table class="table" system-table="administration.roles"></table>
                </div>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>