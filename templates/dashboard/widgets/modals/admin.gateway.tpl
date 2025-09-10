<form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-android la-lg"></i> {$title}
            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>
                        {__("admin_gateway_formapktitle")} <i class="la la-info-circle la-lg" title="{__("admin_gateway_formapkdesc")}"></i>
                    </label>
                    <input type="file" name="apk_file" class="form-control pb-5">
                </div>

                <div class="form-group col-md-12">
                    <label>
                        {__("and_admin_build_line75")} <i class="la la-info-circle la-lg" title="{__("and_admin_build_line75_1")}"></i>
                        {if $data.firebase}<span class="badge badge-success">{__("form_uploaded")}</span>{else}<span class="badge badge-danger">{__("form_notuploaded")}</span>{/if}
                    </label>
                    <input type="file" name="firebase" class="form-control pb-5">
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