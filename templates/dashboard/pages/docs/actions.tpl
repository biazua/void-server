<div class="main-content" system-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            {__("and_dash_pg_doc_line10")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-robot la-lg"></i> {__("and_doc_act_3")}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <iframe class="pb-3 w-100 border-0" system-iframe="{site_url}/templates/_mkdocs/actions/index.html"></iframe>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>