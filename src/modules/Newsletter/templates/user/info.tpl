{userloggedin assign="loggedin"}
{if ($loggedin)}
  <fieldset>
    <legend>{gt text="Information"}</legend>
    <div class="nl-userformrow">
      <label for="user_name">{gt text="Username"}:</label>
      <span id="user_name"><strong>{usergetvar name="uname"}</strong></span>
    </div>

    <div class="nl-userformrow">
      <label for="user_email">{gt text="Email"}:</label>
      <span id="user_email"><strong>{usergetvar name="email"}</strong></span>
    </div>

    <div class="nl-userformrow">
      <label for="user_format">{gt text="Format"}:</label>
      {if ($user.type == 1)}
        <span id="user_format"><strong>{gt text="Text"}</strong></span>
      {elseif ($user.type == 2)}
        <span id="user_format"><strong>{gt text="HTML"}</strong></span>
      {elseif ($user.type == 3)}
        <span id="user_format"><strong>{gt text="Text with Link to Archive"}</strong></span>
      {else}
        <span id="user_format"><strong>?????? {$user.type}</strong></span>
      {/if}
    </div>

    <div class="nl-userformrow">
      <label for="user_frequency">{gt text="Frequency"}:</label>
      {if ($user.frequency == 0)}
        <span id="user_frequency"><strong>{gt text="Weekly"}</strong></span>
      {elseif ($user.frequency == 1)}
        <span id="user_frequency"><strong>{gt text="Monthly"}</strong></span>
      {elseif ($user.frequency == 2)}
        <span id="user_frequency"><strong>{gt text="Every 2 Months"}</strong></span>
      {elseif ($user.frequency == 3)}
        <span id="user_frequency"><strong>{gt text="Every 3 Months"}</strong></span>
      {elseif ($user.frequency == 6)}
        <span id="user_frequency"><strong>{gt text="Every 6 Months"}</strong></span>
      {elseif ($user.frequency == 9)}
        <span id="user_frequency"><strong>{gt text="Every 9 Months"}</strong></span>
      {elseif ($user.frequency == 12)}
        <span id="user_frequency"><strong>{gt text="Yearly"}</strong></span>
      {else}
        <span id="user_frequency"><strong>??????{$user.frequency}</strong></span>
      {/if}
    </div>
	
	{modgetvar assign="show_approval_status" module="Newsletter" name="show_approval_status" default="0"}
	{if ($show_approval_status)}
    <div class="nl-userformrow">
      <label for="user_approved">{gt text="Approval Status"}:</label>
      {if ($user.approved)}
        <span id="user_approved" style="color:green">{gt text="Approved"}</span>
      {else}
        <span id="user_approved" style="color:red">{gt text="Not Approved"}</span>
      {/if}
    </div>
	{/if}
	
    <div class="nl-userformrow">
      <label for="user_status">{gt text="Subscription Status"}:</label>
      {if ($user.active)}
        <span id="user_status" style="color:green">{gt text="Your Subscription is currently active!"}</span>
      {else}
        <span id="user_status" style="color:red">{gt text="Your Subscription is currently inactive!"}</span>
      {/if}
    </div>

    <div class="nl-userformrow">
      <label for="user_sent">{gt text="Last newsletter was sent to you on"}:</label>
      {if ($user.last_send_date)}
        <span id="user_sent" style="color:green">{$user.last_send_date}</span>
      {else}
        <span id="user_sent" style="color:red">{gt text="Never"}</span>
      {/if}
    </div>
  </fieldset>
{/if}


