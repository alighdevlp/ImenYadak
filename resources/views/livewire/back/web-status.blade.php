<div>
    <div class="swichermainleft border-bottom">
        <h4>وضعیت وب سایت </h4>
        <div class="switch_section">
            <div class="switch-toggle d-flex">
                <span class="me-auto">روشن</span>
                <div class="onoffswitch2">
                        <input type="radio" id="offWebSite1" class="onoffswitch2-checkbox" wire:click='OnStatus' name="OffoOn" @if($setting->site_status == 1) checked @else  @endif>
                        <label for="offWebSite1" class="onoffswitch2-label"></label>
                </div>

            </div>

            <div class="switch-toggle d-flex">
                <span class="me-auto">خاموش </span>
                <div class="onoffswitch2"><input type="radio" id="offWebSite2" name="OffoOn"
                        class="onoffswitch2-checkbox" wire:click="OffStatus"
                        @if($setting->site_status == 0) checked @else  @endif>
                    <label for="offWebSite2" class="onoffswitch2-label"></label>
                </div>
            </div>
        </div>
    </div>


</div>
