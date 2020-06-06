<!doctype html>
{extends file=$conf->root_path|cat:"/app/View/templates/main.tpl"}

    
{block name=content}


<div style="margin: 60px 45%">
<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcProcess" method="post">
	<fieldset>
		<label for="value">Liczba w złotówkach: </label>
                <input id="value" type="text" placeholder="liczba" name="value" value="{$form->value}" />
		<label for="percent">Odsetki: </label>
		<select id ="percent" name="percent" >
			<option value="0.01">1%</option>
			<option value="0.02">2%</option>
			<option value="0.03">3%</option>
			<option value="0.04">4%</option>
			<option value="0.05">5%</option>
			<option value="0.06">6%</option>
			<option value="0.07">7%</option>        
			<option value="0.08">8%</option>
			<option value="0.09">9%</option>
			<option value="0.1">10%</option>
                        <option value="0.11">11%</option>
                        <option value="0.12">12%</option>
                        <option value="0.13">13%</option>
                        <option value="0.14">14%</option>
                        <option value="0.15">15%</option>
                        
		</select>
		<label for="years">Lata: </label>
                <input id="years" type="text" placeholder="lata" name="years" value="{$form->years}" />
	</fieldset>
    <div style="margin: 60px -10%">
	<input type="submit" value="Oblicz!" class="pure-button pure-button-primary" />
    </div>
</form>	
    
    
<div class="messages"   >


    {if $msgs->isError()}
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            {foreach $msgs->getErrors() as $err}
            {strip}
                    <li>{$err}</li>
            {/strip}
            {/foreach}
            </ol>
    {/if}

    {if $msgs->isInfo()}
            <h4>Informacje: </h4>
            <ol class="inf">
            {foreach $msgs->getInfos() as $inf}
            {strip}
                    <li>{$inf}</li>
            {/strip}
            {/foreach}
            </ol>
    {/if}

    {if isset($res->result)}
            <h4>Wynik</h4>
            <p class="res">
            {$res->result}
            </p>
    {/if}

</div>
</div>

{/block}
