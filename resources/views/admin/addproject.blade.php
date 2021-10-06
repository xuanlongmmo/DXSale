@extends('frontend.layout.master')
@section('content')
    <form action="{{ route('paddproject') }}" method="POST" id="form__control" class="DxFarilxStart__import">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div id="DxFarilxStart__import__1__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__1" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">1</div>
                Token Address
            </div>
            <div id="DxFarilxStart__import__1__son" class="DxFarilxStart__import-son ">
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label">Enter your token address</label>
                    <input name="token" id="token" value="{{ old('token') }}" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 0x">
                    <label for="" class="DxFarilxStart__import-son-label">Enter your token name</label>
                    <input name="token_name" id="token_name" value="{{ old('token_name') }}" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 0x">
                    <label for="" class="DxFarilxStart__import-son-label">Enter your token symbol</label>
                    <input name="token_symbol" id="token_symbol" value="{{ old('token_symbol') }}" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 0x">
                    <label for="" class="DxFarilxStart__import-son-label">Enter your token decimal</label>
                    <input name="token_decimal" id="token_decimal" value="{{ old('token_decimal') }}" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 0x">
                    {{-- <div class="DxFarilxStart__import-son-desc">
                        <div class="DxFarilxStart__import-son-desc-item">Token Name:</div>
                        <div class="DxFarilxStart__import-son-desc-item">Token Symbol: </div>
                        <div class="DxFarilxStart__import-son-desc-item">Token Decimal: </div>
                    </div> --}}
                    <div class="DxFarilxStart__import-son-ac">
                        <div onclick="return btn__prev(this)" id="DxFarilxStart__import__1__back" class="DxFarilxStart__import-son-ac btn btn--no-ac">Back</div>
                        <div onclick="return btn__next(this, ['token', 'token_name', 'token_symbol', 'token_decimal'])" id="DxFarilxStart__import__1__btn" class="DxFarilxStart__import-son-ac btn btn--blue">Next</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__2__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__2" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">2</div>
                Presale Rate
            </div>
            <div id="DxFarilxStart__import__2__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label">Enter your presale price: (If I pay 1 ETH, how many tokens do I get?)</label>
                    <input onblur="return setvalue(this)" id="price" name="price" value="{{ old('price') }}" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 500">
                    <div class="DxFarilxStart__import-son-ac">
                        <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__2__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                        <div onclick="return btn__next(this, [])" id="DxFarilxStart__import__2__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__3__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__3" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">3</div>
                Soft/Hard Cap
            </div>
            <div id="DxFarilxStart__import__3__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-title">Enter presale caps: (Must be whole numbers with no decimal places) Softcap must be >= 50% of Hardcap!</div>
                <div class="DxFarilxStart__import-son-group-block">
                    <div class="DxFarilxStart__import-son-group">
                        <label for="" class="DxFarilxStart__import-son-label">Soft Cap:</label>
                        <input value="{{ old('soft') }}" onblur="return setvalue(this)" name="soft" id="soft" type="text" class="DxFarilxStart__import-son-input" placeholder="Soft Cap ex. 20">
                    </div>
                    <div class="DxFarilxStart__import-son-group">
                        <label for="" class="DxFarilxStart__import-son-label">Hard Cap:</label>
                        <input value="{{ old('hard') }}" onblur="return setvalue(this)" id="hard" name="hard" type="text" class="DxFarilxStart__import-son-input" placeholder="Hard Cap ex. 100">
                    </div>                                       
                </div>
                <div class="DxFarilxStart__import-son-ac">
                    <div onclick="return btn__prev(this)" id="DxFarilxStart__import__3__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                    <div onclick="return btn__next(this, ['soft', 'hard'])" id="DxFarilxStart__import__3__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__4__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__4" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">4</div>
                Contribution Limits
            </div>
            <div id="DxFarilxStart__import__4__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-title">Enter the minimum and maximum amounts each wallet can contribute: (min,max)</div>
                <div class="DxFarilxStart__import-son-group-block">
                    <div class="DxFarilxStart__import-son-group">
                        <label for="" class="DxFarilxStart__import-son-label">Minimum Contribution Limit:</label>
                        <input value="{{ old('min') }}" onblur="return setvalue(this)" id="min" name="min" type="text" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                    </div>
                    <div class="DxFarilxStart__import-son-group">
                        <label for="" class="DxFarilxStart__import-son-label">Maximum Contribution Limit:</label>
                        <input value="{{ old('max') }}" onblur="return setvalue(this)" id="max" name="max" type="text" class="DxFarilxStart__import-son-input" placeholder="Maximum contribution Ex. 10">
                    </div>                                       
                </div>
                <div class="DxFarilxStart__import-son-ac">
                    <div onclick="return btn__prev(this)" id="DxFarilxStart__import__4__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                    <div onclick="return btn__next(this, [])" id="DxFarilxStart__import__4__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__5__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__5" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">5</div>
                Uniswap Liquidity
            </div>
            <div id="DxFarilxStart__import__5__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label">Enter the percentage of raised funds that should be allocated to Liquidity on Uniswap (Min 51%, Max 100%, We recommend > 70%)</label>
                    <input value="{{ old('liquidity') }}" onblur="return setvalue(this)" id="liquidity" name="liquidity" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 60">
                    <div class="DxFarilxStart__import-son-ac">
                        <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__5__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                        <div onclick="return btn__next(this, ['liquidity'])" id="DxFarilxStart__import__5__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__6__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__6" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">6</div>
                Uniswap Listing Rate
            </div>
            <div id="DxFarilxStart__import__6__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label">Enter the Uniswap listing price: (If I buy 1 ETH worth on Uniswap how many tokens do I get? Usually this amount is lower than presale rate to allow for a higher listing price on Uniswap)</label>
                    <input value="{{ old('rate') }}" onblur="return setvalue(this)" id="rate" name="rate" type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 400">
                    <div class="DxFarilxStart__import-son-ac">
                        <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__6__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                        <div onclick="return btn__next(this, [])" id="DxFarilxStart__import__6__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__7__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__7" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">7</div>
                Contribution Limits
            </div>
            <div id="DxFarilxStart__import__7__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-title">Please fill out the additional information below to display it on your presale. (Information in this section is optional, but a description and logo link is recommended)</div>
                <div class="DxFarilxStart__import-son-title">Note the information in this section can be updated at any time by the presale creator while the presale is active. Any links left blank will not be displayed on your sale.</div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Logo Link: (URL must end with a supported image extension png, jpg, jpeg or gif)</label>
                    <input value="{{ old('logo_link') }}" id="logo_link" name="logo_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://dxsale.network/assets/media/logoIcon_256.png">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Website Link:</label>
                    <input value="{{ old('website_link') }}" id="website_link" name="website_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://dxsale.network">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Github Link:</label>
                    <input value="{{ old('github_link') }}" id="github_link" name="github_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://github.com/OpenZeppelin/openzeppelin-contracts">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Twitter Link:</label>
                    <input value="{{ old('twitter_link') }}" id="twitter_link" name="twitter_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://twitter.com/dxsale">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Reddit Link:</label>
                    <input value="{{ old('reddit_link') }}" id="reddit_link" name="reddit_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://reddit.com/r/cryptocurrency">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Telegram Link:</label>
                    <input value="{{ old('telegram_link') }}" id="telegram_link" name="telegram_link" type="text" class="DxFarilxStart__import-son-input" placeholder="https://t.me/dxsale">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Project Description:</label>
                    <input value="{{ old('description') }}" id="description" name="description" type="text" class="DxFarilxStart__import-son-input" placeholder="DxSale is a completely decentralized and permissionless launchpad with instant Listing and liquidity locking!">
                </div>
                <div class="DxFarilxStart__import-son-group">
                    <label for="" class="DxFarilxStart__import-son-label no-mb">Any update you want to provide to participants:</label>
                    <input value="{{ old('parti') }}" name="parti" type="text" class="DxFarilxStart__import-son-input" placeholder="Join us on twitter for a special airdrop giveaway!">
                </div>
                <div class="DxFarilxStart__import-son-ac">
                    <div onclick="return btn__prev(this)" id="DxFarilxStart__import__7__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                    <div onclick="return btn__next(this, [])" id="DxFarilxStart__import__7__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                </div>
            </div>
        </div>
        <div id="DxFarilxStart__import__8__banner" class="DxFarilxStart__import-item active">
            <div onclick="return showximport(this)" id="DxFarilxStart__import__8" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">8</div>
                Timings
            </div>
            <div id="DxFarilxStart__import__8__son" class="DxFarilxStart__import-son none">
                <div class="DxFarilxStart__import-son-title">Please set the start and end time for the following parameters!</div>
                <div class="DxFarilxStart__import-son-title">Presale Start/End Time</div>
                <div class="DxFarilxStart__import-son-group-block">
                    <?php $date = date('Y-m-d\TH:i'); ?>
                    <div class="DxFarilxStart__import-son-group">
                        <input hidden type="checkbox" id="checkstart">
                        <input hidden type="checkbox" id="checkend">
                        <input hidden type="checkbox" id="checklock">
                        <input value="{{ old('start') }}" onblur="return setvalue(this)" name="start" id="start" value="{{ $date }}" type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                    </div>
                    <div class="DxFarilxStart__import-son-group">
                        <input value="{{ old('end') }}" onblur="return setvalue(this)" name="end" id="end" value="{{ $date }}" type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Maximum contribution Ex. 10">
                    </div>   
                </div>
                <div class="DxFarilxStart__import-son-title">Liquidity Lockup Time</div>
                <div class="DxFarilxStart__import-son-group-block">
                    <div class="DxFarilxStart__import-son-group half">
                        <input value="{{ old('lock') }}" onblur="return setvalue(this)" name="lock" id="lock" value="{{ $date }}" type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                    </div>
                </div>
                <div class="DxFarilxStart__import-son-ac">
                    <div onclick="return btn__prev(this)" id="DxFarilxStart__import__8__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                    <div onclick="show__table()" id="DxFarilxStart__import__8__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">FINISH</div>
                </div>
            </div>
        </div>
        <div onclick="return openfinish()" id="DxFarilxStart__import9__banner" class="DxFarilxStart__import-item active">
            <div id="DxFarilxStart__import9" class="DxFarilxStart__import-item-title">
                <div class="DxFarilxStart__import-item-title-hot">9</div>
                Finalize
            </div>
        </div>                              
    </form>

    <div id="show__table" class="DxFarilxStart__table-block">
        <div class="DxFarilxStart__table-title">Review your details below then press submit to create your presale on the DxSale deployer! Or press edit to go back and edit information. Warning: once submitted this information can never be changed!</div>
        <div class="DxFarilxStart__table-desc">
            <div class="DxFarilxStart__table-desc-title">Note: You will need atleast <span class="DxFarilxStart__table-desc-title-hot">1530 tokens</span> (1000 for Presale, 480 for Uniswap Listing and 20 for platform fees and an extra 2% to avoid issues due to fees or exploits) in your wallet to start this sale.</div>
            <ul class="DxFarilxStart__table-desc-list">
                <li class="DxFarilxStart__table-desc-item">You can adjust your total number of tokens required by adjusting the presale rate, uniswap rate or your hardcap!</li>
                <li class="DxFarilxStart__table-desc-item">Tokens that are not used will remain locked in the presale contract (consider them burned)!</li>
            </ul>
        </div>
        <table class="DxFarilxStart__table">
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Token Name</td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Token Symbol</td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Presale Rate (Per ETH)</td>
                <td id="value_price" class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Soft/Hard Caps (ETH)</td>
                <td class="DxFarilxStart__table-td">Soft Cap: <span id="value_soft"></span></td>
                <td class="DxFarilxStart__table-td">Hard Cap: <span id="value_hard"></span></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Contribution Limits (ETH)</td>
                <td class="DxFarilxStart__table-td">Min: <span id="value_min"></span></td>
                <td class="DxFarilxStart__table-td">Max: <span id="value_max"></span></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Presale Timings</td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td">Starts: <span id="value_start"></span></td>
                <td class="DxFarilxStart__table-td">Ends: <span id="value_end"></span></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Uniswap Liquidity</td>
                <td class="DxFarilxStart__table-td"><span id="value_liquidity"></span> %</td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td">Unlocks: <span id="value_lock"></span></td>
            </tr>
            <tr class="DxFarilxStart__table-tr">
                <td class="DxFarilxStart__table-td">Uniswap Rate (Per ETH)</td>
                <td id="value_rate" class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
                <td class="DxFarilxStart__table-td"></td>
            </tr>
        </table>         
        <div class="DxFarilxStart__import-son-ac">
            <div id="DxFarilxStart__edit" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Edit</div>
            <button id="DxFarilxStart__import10__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">SUBMIT</button>
        </div>                     
    </div>
@endsection

@section('script')
    <script>
        autoopen('td10', 'addproject');

        var form = document.getElementById("form__control");
        document.getElementById("DxFarilxStart__import10__btn").addEventListener("click", function () {
            form.submit();
        });

        var start = $('#start').val();
        var end = $('#end').val();
        var lock = $('#lock').val();
        converttime('start', start);
        converttime('end', end);
        converttime('lock', lock);
    </script>
@endsection