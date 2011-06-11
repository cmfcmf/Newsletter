
{include file='newsletter_admin_header.tpl'}

{ajaxheader modname='Newsletter' filename='newsletter.js'}

<div class="z-admincontainer">
    <div class="z-adminpageicon">{img modname='Newsletter' src='admin.png' alt='' height='22'}</div>

    <h3>{gt text='Available Plugins'}</h3>

    <form id="nwplugins" class="z-form" action="{modurl modname='Newsletter' type='adminform' func='edit'}" method="post" enctype="application/x-www-form-urlencoded">
        <input type="hidden" id="authid" name="authid" value="{insert name='generateauthkey' module='Newsletter'}" />
        <input type="hidden" name="ot" value="plugin" />

        {assign var='i' value=1}
        {foreach from=$objectArray item='plugin'}
        {modgetvar assign="pluginActive" module="Newsletter" name="plugin_`$plugin`" default=0}
        <fieldset>
            <legend>
                {$plugin|safehtml}
                <input type="checkbox" id="enable_{$i}" name="plugin[{$plugin}]" value="1" {if $pluginActive}checked="checked"{/if} />
            </legend>
            <div id="plugin_{$i}">
                {if $plugin neq 'NewsletterMessage'}
                <div class="z-formrow z-nw-numitemsrow">
                    <label for="plugin{$i}_numitems">{gt text='Number of items'}</label>
                    <div>
                        {modgetvar assign='pluginItems' module='Newsletter' name="plugin_`$plugin`_nItems" default=3}
                        <input id="plugin{$i}_numitems" name="plugin[{$plugin}_nItems]" type="text" value="{$pluginItems}" size="3" maxlength="2" />
                    </div>
                </div>
                {/if}
                {if $plugin_parameters.$plugin.number ne 0}
                    {include file="newsletter_plugin_`$plugin`_config.tpl"}
                {/if}
            </div>
        </fieldset>
        {assign var='i' value=$i+1}
        {/foreach}

        {include file='newsletter_inc_form_actions.tpl'}
    </form>
</div>