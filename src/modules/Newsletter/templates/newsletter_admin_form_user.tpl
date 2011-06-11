
{include file='newsletter_admin_header.tpl'}

{newsletter_selector_frequency assign="frequency_values" return_keys=true}
{newsletter_selector_frequency assign="frequency_output" return_keys=false}
{newsletter_selector_type assign="type_values" return_keys=true}
{newsletter_selector_type assign="type_output" return_keys=false}
{modgetvar assign="enable_multilingual" module="Newsletter" name="enable_multilingual"}
{configgetvar assign="defaultlang" name="language" default="eng"}

{ml assign="pageTitle" name="Edit a User / Add a User"}
{pagesetvar name="title" value=$pageTitle}

  <h2>{$pageTitle}</h2>

  <form class="z-adminform" action="{modurl modname="Newsletter" type="adminform" func="edit"}" method="post" enctype="application/x-www-form-urlencoded">
    <input type="hidden" name="authid" value="{secgenauthkey module="Newsletter"}" />
    <input type="hidden" name="ot" value="user" />
    {if ($user.id)}
      <input type="hidden" name="user[id]" value="{$user.id}" />
    {/if}
    <input type="hidden" name="user[uid]" value="{$user.uid}" />


    <fieldset>
      <legend>{gt text="Newsletter Configuration"}</legend>
      {if ($user.uid)}
        <div class="z-formrow">
          <label for="user_name">{gt text="Username"}</label>
	  <span id="user_name">{$user.user_name}</span>
        </div>
      {else}
        <div class="z-formrow">
          <label for="user_name">{gt text="Username"}</label>
	  <input name="user[name]" type="text" value="{$user.name}" size="20" maxlength="64" />
        </div>
      {/if}
      <div class="z-formrow">
        <label for="user_email">{gt text="Email"}</label>
		<input name="user[email]" type="text" value="{$user.email}" size="30" maxlength="128" />
      </div>
      {if ($enable_multilingual)}
        <div class="z-formrow">
          <label for="user_lang">{gt text="Language"}</label>
          {html_select_languages id="user_lang" name="user[lang]" installed=true selected=$user.lang|default:$defaultlang}
        </div>
      {/if}
      <div class="z-formrow">
        <label for="user_type">{gt text="Type"}</label>
        <select id="user_type" name="user[type]">{html_options values=$type_values output=$type_output selected=$user.type}</select>
      </div>
      {modgetvar module="Newsletter" name="allow_frequency_change" assign="change_allowed"}
      {if ($change_allowed)}
        <div class="z-formrow">
          <label for="user_frequency">{gt text="Frequency"}</label>
          <select id="user_frequency" name="user[frequency]">{html_options values=$frequency_values output=$frequency_output selected=$user.frequency}</select>
        </div>
      {else}
        <div class="z-formrow">
          <label for="user_frequency">{gt text="Frequency"}:</label>
          <span class="z-informationmsg" id="user_frequency">{gt text="User-based frequency changes have been disabled by the site administrator"}</span>
        </div>
      {/if}
      <div class="z-formrow">
        <label for="user_approved"><b>{gt text="Approved"}</b></label>
        <input type="checkbox" id="user_approved" name="user[approved]" value="1" {if ($user.approved)}checked="checked"{/if} />
      </div>
      <div class="z-formrow">
        <label for="user_active"><b>{gt text="Active"}</b></label>
        <input type="checkbox" id="user_active" name="user[active]" value="1" {if ($user.active)}checked="checked"{/if} />
      </div>
      {include file="newsletter_inc_form_actions.tpl"}
	</fieldset>
  </form>

{include file="newsletter_std_footer.tpl"}