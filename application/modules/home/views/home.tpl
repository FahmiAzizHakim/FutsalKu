<div class="row col-md-12">
<div class="panel panel-default">                                
    <div class="panel-body">
        <h2>Dashboard Booking</h2> <p>Pilih Tanggal</p>
        <div class="form-group">                                                                    
            <div class="col-md-8">
                <div class="input-group">
                    
                    <div class="input-group">
                        <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                        <input id="date" type="text" class="form-control datepicker" value="{$date}"/>
                    </div>
                    <br />
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row col-md-12">
<div class="panel panel-default">                                
    <div class="panel-body">
        <h2>Lapangan 1</h2> <p>Rumput Sintetis / Indoor</p>
        <div class="form-group">
            <div class="col-md-12">
                <label>JAM : </label> 
                <div class="btn-group btn-group-justified">
                {if $time_booking1 == '1'}
                    {foreach from=$time_default item=$row}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.code_time}</a>
                    {/foreach}
                {else}
                    {foreach from=$time_booking1 item=$row}
                    {if $row.status_time == 'on'}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.time_booking}</a>
                    {else}
                    <a href="#" class="btn btn-primary" style = "background-color : #8B0000">{$row.time_booking}</a>
                    {/if}
                    {/foreach}
                {/if}
                </div>                                         
            </div>
        </div>
    </div>
</div>
</div>

<div class="row col-md-12">
<div class="panel panel-default">                                
    <div class="panel-body">
        <h2>Lapangan 2</h2> <p>Rumput Sintetis / Indoor</p>
        <div class="form-group">
            <div class="col-md-12">
                <label>JAM : </label> 
                <div class="btn-group btn-group-justified">
                {if $time_booking2 == '2'}
                    {foreach from=$time_default item=$row}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.code_time}</a>
                    {/foreach}
                {else}
                    {foreach from=$time_booking2 item=$row}
                    {if $row.status_time == 'on'}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.time_booking}</a>
                    {else}
                    <a href="#" class="btn btn-primary" style = "background-color : #8B0000">{$row.time_booking}</a>
                    {/if}
                    {/foreach}
                {/if}
                </div>                                         
            </div>
        </div>
    </div>
</div>
</div>

<div class="row col-md-12">
<div class="panel panel-default">                                
    <div class="panel-body">
        <h2>Lapangan 3</h2> <p>Rumput Sintetis / Indoor</p>
        <div class="form-group">
            <div class="col-md-12">
                <label>JAM : </label> 
                <div class="btn-group btn-group-justified">
                {if $time_booking3 == '3'}
                    {foreach from=$time_default item=$row}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.code_time}</a>
                    {/foreach}
                {else}
                    {foreach from=$time_booking3 item=$row}
                    {if $row.status_time == 'on'}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.time_booking}</a>
                    {else}
                    <a href="#" class="btn btn-primary" style = "background-color : #8B0000">{$row.time_booking}</a>
                    {/if}
                    {/foreach}
                {/if}
                </div>                                         
            </div>
        </div>
    </div>
</div>
</div>

<div class="row col-md-12">
<div class="panel panel-default">                                
    <div class="panel-body">
        <h2>Lapangan 4</h2> <p>Rumput Sintetis / Indoor</p>
        <div class="form-group">
            <div class="col-md-12">
                <label>JAM : </label> 
                <div class="btn-group btn-group-justified">
                {if $time_booking4 == '4'}
                    {foreach from=$time_default item=$row}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.code_time}</a>
                    {/foreach}
                {else}
                    {foreach from=$time_booking4 item=$row}
                    {if $row.status_time == 'on'}
                    <a href="{$base_url}booking/add" class="btn btn-primary">{$row.time_booking}</a>
                    {else}
                    <a href="#" class="btn btn-primary" style = "background-color : #8B0000">{$row.time_booking}</a>
                    {/if}
                    {/foreach}
                {/if}
                </div>                                         
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(function(){
        $("#date").change(function(){
            date = $("#date").val();
            window.location.replace("{$base_url}?date="+date);
        });
    });
</script>