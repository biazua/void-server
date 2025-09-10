<form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-terminal la-lg"></i> {$title}
            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="alert alert-info d-flex mt-3 mb-0">
                <i class="la la-info-circle la-lg mr-2 my-auto"></i> This is not translated because it is only for setup purposes.
            </div>

            <ul class="nav nav-tabs nav-fill" id="myTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Linux</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Windows</a>
                </li>
            </ul>
            
            <div class="tab-content p-3">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                    <p>1. Select your server architecture:</p>
                    <div class="mb-3">
                        <select id="wa_arch" class="form-control">
                            <option value="linux">AMD64 (Ubuntu, CentOS)</option>
                            <option value="arm64">ARM64 (Raspberry Pi, Android)</option>
                        </select>
                    </div>
                    <p class="mt-3">2. Setup the WhatsApp Server files by running this command:</p>
                    <div class="bg-dark text-white p-3 overflow-auto text-nowrap rounded">
                        <p class="m-0">
                            wget --no-cache {titansys_cdn}/wa/<span class="final_arch">linux</span>.zip && unzip -o <span class="final_arch">linux</span>.zip && chmod -R 777 . && chmod +x ./titansys-whatsapp-<span class="final_arch">linux</span> && rm <span class="final_arch">linux</span>.zip
                        </p>
                    </div>
                    <div class="alert alert-primary d-flex mt-3 mb-0">
                        <i class="la la-info-circle la-lg mr-2 my-auto"></i> This command can also be used to update the WhatsApp server files.
                    </div>
                    <p class="mt-3">3. Start the WhatsApp Server by running this command:</p>
                    <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                        <p class="m-0">
                            ./titansys-whatsapp-<span class="final_arch">linux</span> --pcode="{__s("system_purchase_code")}" --key="{$data.waserver.secret}" --host="0.0.0.0" --port="{if empty($data.waserver.port)}8899{else}{$data.waserver.port}{/if}"
                        </p>
                    </div>
                    <p class="mt-3">4. If you want to run the WhatsApp server in the background, please read <a class="font-weight-bold" href="https://support.titansystems.ph/help-center/articles/9/12/10/whatsapp-server#background-script" target="_blank">this</a> before you proceed below.</p>
                    <p class="mt-3">5. Generate your background script:</p>
                    <div class="mb-3">
                        <label for="wa_path">WhatsApp Binary Folder</label>
                        <input type="text" id="wa_path" class="form-control" placeholder="eg. /your/whatsapp/server/folder">
                    </div>
                    <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                        <p class="m-0">
                            #!/bin/bash<br><br>
                            if ! pgrep -x "whatsapp" > /dev/null<br>
                            then<br>
                            &nbsp;&nbsp;cd <span id="final_path">/your/whatsapp/server/folder</span><br>
                            &nbsp;&nbsp;./titansys-whatsapp-<span class="final_arch">linux</span> --pcode="{__s("system_purchase_code")}" --key="{$data.waserver.secret}" --host="0.0.0.0" --port="{if empty($data.waserver.port)}8899{else}{$data.waserver.port}{/if}" &<br>
                            fi                        
                        </p>
                    </div>
                    <div class="alert alert-primary d-flex mt-3 mb-0">
                        <i class="la la-info-circle la-lg mr-2 my-auto"></i> This background script will keep the WhatsApp server running and automatically restart when it stops. It will also start the server when the server reboots.
                    </div>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                    <p>1. Download the windows zip file: <a class="font-weight-bold" href="{titansys_cdn}/wa/windows.zip?v={time()}" target="_blank">Click here</a></p>
                    <p class="mt-3">2. Extract it to a folder and run the <strong>App.exe</strong> as administrator.</p>
                    <p class="mt-3">3. Enter the following in the settings:</p>
                    <div class="bg-dark text-white p-3 pt-0 overflow-auto text-nowrap rounded">
                        <p class="m-0">
                            Purchase Code: <span class="text-warning">{__s("system_purchase_code")}</span><br>
                            Secret Key: <span class="text-warning">{$data.waserver.secret}</span><br>
                            Port: <span class="text-warning">{if empty($data.waserver.port)}8899{else}{$data.waserver.port}{/if}</span>
                        </p>
                    </div>
                    <p class="mt-3">4. Click the <strong>Start</strong> button.</p>
                    <p class="mt-3">5. It is recommended to use Ngrok if your modem doesn't have a public IP. Please read <a class="font-weight-bold" href="https://support.titansystems.ph/help-center/articles/9/12/10/whatsapp-server#using-with-ngrok" target="_blank">this</a>.</p>
                </div>
            </div>
        </div>
    </div>
</form>