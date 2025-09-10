<?php
/* Smarty version 5.4.3, created on 2025-01-10 01:13:11
  from 'file:dashboard/widgets/modals/add.ai.key.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.3',
  'unifunc' => 'content_678003a799e726_42019564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a04fbcff6cbba2fe08470559f38f3578eba879fb' => 
    array (
      0 => 'dashboard/widgets/modals/add.ai.key.tpl',
      1 => 1736441060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_678003a799e726_42019564 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/admin/web/ignite.rocketsuite.cloud/public_html/templates/dashboard/widgets/modals';
?><form system-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_api_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("and_dash_api_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_aikey_provider_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_aikey_provider_desc");?>
"></i>
                    </label>
                    <select name="provider" class="form-control" system-ai-provider>
                        <option value="openai" selected>OpenAI</option>
                        <option value="geminiai">GeminiAI</option>
                        <option value="claudeai">ClaudeAI</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_initailprompt_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_initailprompt_desc");?>
"></i>
                    </label>
                    <textarea name="prompt" rows="5" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_initailprompt_placeholder");?>
"></textarea>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_postprompt_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_postprompt_desc");?>
"></i>
                    </label>
                    <textarea name="post_prompt" rows="5" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_postprompt_placeholder");?>
"></textarea>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_vision_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_vision_desc");?>
"></i>
                    </label>
                    <select name="vision" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12" system-transcription-openai>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaiapikey_transcriptiontitle");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaiapikey_transcriptiondesc");?>
"></i>
                    </label>
                    <select name="transcription" class="form-control">
                        <option value="1"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_enable");?>
</option>
                        <option value="2" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12" system-models-openai>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_desc");?>
"></i>
                    </label>
                    <select name="model_openai" class="form-control">
                        <option value="gpt-4o" data-content="gpt-4o <span class='badge badge-success'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
</span>">gpt-4o (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
)</option>
                        <option value="gpt-4o-mini" data-content="gpt-4o-mini <span class='badge badge-warning'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
</span>" selected>gpt-4o-mini (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
)</option>
                        <option value="gpt-4-turbo">gpt-4-turbo</option>
                    </select>
                </div>

                <div class="form-group col-12" system-models-geminiai>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_desc");?>
"></i>
                    </label>
                    <select name="model_geminiai" class="form-control">
                        <option value="gemini-1.5-pro" data-content="gemini-1.5-pro <span class='badge badge-success'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
</span>">gemini-1.5-pro (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
)</option>
                        <option value="gemini-1.5-flash">gemini-1.5-flash</option>
                        <option value="gemini-1.5-flash-8b" data-content="gemini-1.5-flash-8b <span class='badge badge-warning'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
</span>" selected>gemini-1.5-flash-8b (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
)</option>
                    </select>
                </div>

                <div class="form-group col-12" system-models-claudeai>
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_model_desc");?>
"></i>
                    </label>
                    <select name="model_claudeai" class="form-control">
                        <option value="claude-3-5-sonnet-latest" data-content="claude-3-5-sonnet-latest <span class='badge badge-success'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
</span>">claude-3-5-sonnet-latest (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelsmartest");?>
)</option>
                        <option value="claude-3-5-haiku-latest" data-content="claude-3-5-haiku-latest <span class='badge badge-warning'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
</span> <span class='badge badge-danger'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_aikey_provider_visionoff");?>
</span>" selected>claude-3-5-haiku-latest (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_modelcheapest");?>
) (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_aikey_provider_visionoff");?>
)</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_historythreshold_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_historythreshold_desc");?>
"></i>
                    </label>
                    <input type="number" name="history" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_historythreshold_placeholder");?>
" value="50">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_apikey_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("form_addaikey_apikey_desc");?>
"></i>
                    </label>
                    <input type="text" name="apikey" class="form-control" placeholder="eg. sk-proj-DOSWJC4GeNM5VcLcJILhyObypIrBvRdTChHq-2dJoo0A6fiaE2y4EF">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
