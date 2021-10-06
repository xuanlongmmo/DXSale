<?php use Carbon\Carbon; ?>
<div id="dxdash__thrid__content" class="DxFarilxDash__details">
    <div class="DxFarilxDash__details-hr bsd"></div>
    <div class="DxFarilxDash__box row">
        <div class="DxFarilxDash__box-left col-3">
            <div class="DxFarilxDash__box-left-item bsd">
                <p style="font-size: 1.1rem;" class="DxFarilxDash__box-left-item-desc-text">
                    DxSale Automated Warning System<br><br>
                    7 Warnings Detected
                    <br><br><p style="color: red">DeFi Zone Warning</p>
                    This sale is listed in the DeFi Zone. Presales in this area use custom contracts that are not vetted by the DxSale team. Developers of tokens in this area can block transfers, can stop users from claiming tokens, can stop trading on exchanges and requires extra vetting. Participate at your own risk!
                    <p style="color: red">(You could lose your funds)</p>

                    <br><br><p style="color: red">Soft Cap Warning</p>
                    The softcap of this sale is very low.

                    <br><br><p style="color: red">Token Dump Warning</p>
                    Too many tokens are held outside this sale. Make sure these tokens are burned, locked or the owner has a valid reason to hold them. Tokens held by teams can be sold to pull out liquidity and should be carefully examined.

                    <br><br><p style="color: red">Liquidity Percentage Warning</p>
                    This sale has a very low liquidity percentage.

                    <br><br><p style="color: red">Liquidity Time Warning</p>
                    Liquidity of this sale unlocks in a very short timespan.

                    <br><br><p style="color: red">Sale Endtime Warning</p>
                    The end time for this sale is longer than 2 hours.

                    <br><br><p style="color: red">Max Contribution Warning</p>
                    This sale has a very high maximum contribution ratio to hardcap allotment. A few users might be able to buy large portions of the supply
                </p>
            </div>
            <div class="DxFarilxDash__box-left-item bsd">
                <div align="center" justify="center">
                    <img width="50" height="50" border-radius="50px" src="https://pbs.twimg.com/profile_images/1384336008179687424/VQqhKKxu_400x400.jpg">
                    <h4 style="font-weight: bold;font-size: 17px;padding-top: 10px;">TokenSniffer Scan</h4>
                    
                </div>
            </div>
        </div>
        <div class="DxFarilxDash__box-bet-block col-6">
            <div class="DxFairlxDash__box-bet bsd">
                <div class="DxFarilxDash__box-header DxFairlxDash__box-bet-item--mbm">
                    <div class="DxFarilxDash__box-header-avt">
                        <img class="DxFarilxDash__box-header-avt-img" src="{{ $dxlaunch->infor->logo_link }}" alt="">
                    </div>
                    <div class="DxFarilxDash__box-header-desc">
                        <h2 class="DxFairlxDash__box-bet-item-name blu-hot-h2">TST</h2>
                        <h2 class="DxFairlxDash__box-bet-item-name">Tester</h2>
                    </div>
                </div>
                @if ($dxlaunch->description != null)
                    <div style="padding-bottom: 40px" class="">
                        <span>{{ $dxlaunch->description }}</span>
                    </div>
                @endif
                <div class="DxFairlxDash__box-bet-item"></div>
                <div class="DxFairlxDash__box-bet-item">
                    <div class="DxFairlxDash__box-bet-item-desc">
                        <div class="DxFairlxDash__box-bet-item-desc-text">
                            Token Address: {{ $dxlaunch->token }}
                            <div class="DxFairlxDash__box-bet-item-desc-text-hot">Do not send ETH to the token address!</div>
                        </div>
                        <div class="DxFairlxDash__box-bet-item-desc-text">
                            ✅ This token is DxMint Verified (Standard Token)
                        </div>
                        <div class="DxFairlxDash__box-bet-item-desc-text z13">
                            This token has already launched! Use the links below to trade the token.
                        </div>
                        <div class="DxFairlxDash__box-bet-item-btn-block">
                            <a target="_blank" href="https://app.uniswap.org/#/swap?inputCurrency=0xCA4037256e869cc40F66555fd54c5d02A772F937" class="DxFairlxDash__box-bet-item-btn btn bgr--blu">
                                <img class="DxFairlxDash__box-bet-item-btn-icon" src="https://app.uniswap.org/static/media/logo_white.811f9ef7.svg" alt="">
                                Trade on Uniswap
                            </a>
                        </div>
                        <div class="DxFairlxDash__box-bet-item-btn-block">
                            <a target="_blank" href="../components/DxSale__lock.html" class="DxFairlxDash__box-bet-item-btn btn btn--diss-b">
                                Dxlock locker
                            </a>
                        </div>
                    </div>
                    
                </div>
                <table class="DxFairlxDash__box-bet-table">
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Sale ID</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->id }}</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Total Supply</th>
                        <td class="DxFairlxDash__box-bet-td">100000.00 TST</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Tokens For Launch</th>
                        <td class="DxFairlxDash__box-bet-td">8,000,000,000,000 TST</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Tokens For Liquidity</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->liquidity }} ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Soft Cap</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->soft }} ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Hard Cap</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->hard }} ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Presale Rate</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->rate }} per ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Uniswap Listing Rate</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->rate }} per ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Uniswap Liquidity %</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->liquidity }}</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Minimum Contribution</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->min }} ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Maximum Contribution</th>
                        <td class="DxFairlxDash__box-bet-td">{{ $dxlaunch->max }} ETH</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Presale Start Time</th>
                        <td class="DxFairlxDash__box-bet-td">{{ Carbon::parse($dxlaunch->end)->format('d F Y') }} at {{ Carbon::parse($dxlaunch->end)->format('H:i') }}</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Presale End Time</th>
                        <td class="DxFairlxDash__box-bet-td">{{ Carbon::parse($dxlaunch->start)->format('d F Y') }} at {{ Carbon::parse($dxlaunch->start)->format('H:i') }}</td>
                    </tr>
                    <tr class="DxFairlxDash__box-bet-tr">
                        <th class="DxFairlxDash__box-bet-th">Liquidity Unlock Date</th>
                        <td class="DxFairlxDash__box-bet-td">{{ Carbon::parse($dxlaunch->lock)->format('d F Y') }} at {{ Carbon::parse($dxlaunch->lock)->format('H:i') }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="DxFarilxDash__box-right col-3">
            <div class="DxFarilxDash__box-right-item bsd">
                <div class="DxFarilxDash__box-right-item-avt">
                    <svg class="DxFarilxDash__box-right-item-avt-img" style="background: url(&quot;https://c.disquscdn.com/next/embed/assets/img/disqus-social-icon-dark.a621bea3e02c9fa04fd3965a3d6f424d.svg&quot;) center center / contain no-repeat; display: block; margin: auto; width: 80px; height: 80px;"></svg>
                </div>
                <div class="DxFarilxDash__box-right-item-desc">
                    Disqus seems to be taking longer than usual. 
                </div>
                <div class="DxFarilxDash__box-right-item-desc-link-block">
                    <a href="" class="DxFarilxDash__box-right-item-desc-link">Reload</a>?
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var totalSupplyHex = web3.sha3('totalSupply()').substring(0,10);
    var contractAddress = "0x5a65585ce8213d1c9433e63d53d4e468540a5019";
    var totalSupplyCall = getDataObj(contractAddress, totalSupplyHex, []);
    var totalSupply = web3.eth.call(totalSupplyCall);
    console.log(totalSupply);
</script>