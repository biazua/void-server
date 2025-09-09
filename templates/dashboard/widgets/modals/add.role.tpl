<form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-shield la-lg"></i> {$title}
            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        {__("form_name")} <i class="la la-info-circle" title="{__("and_role_line17")}"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="{__("and_role_line19")}">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        {__("form_permissions")} <i class="la la-info-circle" title="{__("and_role_line24")}"></i>
                    </label>
                    <select name="permissions[]" class="form-control" data-live-search="true" multiple>
                        <option value="manage_users" selected>manage_users</option>
                        <option value="manage_roles" selected>manage_roles</option>
                        <option value="manage_packages">manage_packages</option>
                        <option value="manage_vouchers">manage_vouchers</option>
                        <option value="manage_subscriptions">manage_subscriptions</option>
                        <option value="manage_transactions">manage_transactions</option>
                        <option value="manage_payouts">manage_payouts</option>
                        <option value="manage_pages">manage_pages</option>
                        <option value="manage_marketing">manage_marketing</option>
                        <option value="manage_languages">manage_languages</option>
                        <option value="manage_gateways">manage_gateways</option>
                        <option value="manage_shorteners">manage_shorteners</option>
                        <option value="manage_plugins">manage_plugins</option>
                        <option value="manage_templates">manage_templates</option>
                        <option value="manage_api">manage_api</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> {__("btn_submit")}
            </button>
        </div>
    </div>
</form>