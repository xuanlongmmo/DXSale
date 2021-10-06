@extends('frontend.layout.master')
@section('content')
    <div class="home__content-body mt30 home__content-body--pd">
        <input type="checkbox" name="" id="modal__box" class="modal__box" hidden>
        <div class="DxFarilxDash__public">
            <div id="dxdash__first__active" class="DxFarilxDash__active flex-column bsd">
                <button class="DxFarilxDash__active-btn btn mb btn--blue">Connect Wallet to Start</button>
                <div id="dxdash__first__active__btn" class="DxFarilxDash__active-btn-block">
                    <input type="checkbox" name="" id="id__qr" class="id__qr" hidden>
                    <label for="id__qr" class="DxFarilxDash__active-btn btn btn--green">
                        Walletconnect                                
                    </label>
                    <div class="modal">
                        <label for="id__qr" class="modal__overlay"></label>
                        <div class="modal__body row">
                            <div class="DxFarilxDash__modal-qr">
                                <div class="DxFarilxDash__modal-qr-header">
                                    <div class="DxFarilxDash__modal-qr-header-i4">
                                        <img src="data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='300px' height='185px' viewBox='0 0 300 185' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E %3C!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch --%3E %3Ctitle%3EWalletConnect%3C/title%3E %3Cdesc%3ECreated with Sketch.%3C/desc%3E %3Cdefs%3E%3C/defs%3E %3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='walletconnect-logo-alt' fill='%233B99FC' fill-rule='nonzero'%3E %3Cpath d='M61.4385429,36.2562612 C110.349767,-11.6319051 189.65053,-11.6319051 238.561752,36.2562612 L244.448297,42.0196786 C246.893858,44.4140867 246.893858,48.2961898 244.448297,50.690599 L224.311602,70.406102 C223.088821,71.6033071 221.106302,71.6033071 219.883521,70.406102 L211.782937,62.4749541 C177.661245,29.0669724 122.339051,29.0669724 88.2173582,62.4749541 L79.542302,70.9685592 C78.3195204,72.1657633 76.337001,72.1657633 75.1142214,70.9685592 L54.9775265,51.2530561 C52.5319653,48.8586469 52.5319653,44.9765439 54.9775265,42.5821357 L61.4385429,36.2562612 Z M280.206339,77.0300061 L298.128036,94.5769031 C300.573585,96.9713 300.573599,100.85338 298.128067,103.247793 L217.317896,182.368927 C214.872352,184.763353 210.907314,184.76338 208.461736,182.368989 C208.461726,182.368979 208.461714,182.368967 208.461704,182.368957 L151.107561,126.214385 C150.496171,125.615783 149.504911,125.615783 148.893521,126.214385 C148.893517,126.214389 148.893514,126.214393 148.89351,126.214396 L91.5405888,182.368927 C89.095052,184.763359 85.1300133,184.763399 82.6844276,182.369014 C82.6844133,182.369 82.684398,182.368986 82.6843827,182.36897 L1.87196327,103.246785 C-0.573596939,100.852377 -0.573596939,96.9702735 1.87196327,94.5758653 L19.7936929,77.028998 C22.2392531,74.6345898 26.2042918,74.6345898 28.6498531,77.028998 L86.0048306,133.184355 C86.6162214,133.782957 87.6074796,133.782957 88.2188704,133.184355 C88.2188796,133.184346 88.2188878,133.184338 88.2188969,133.184331 L145.571,77.028998 C148.016505,74.6345347 151.981544,74.6344449 154.427161,77.028798 C154.427195,77.0288316 154.427229,77.0288653 154.427262,77.028899 L211.782164,133.184331 C212.393554,133.782932 213.384814,133.782932 213.996204,133.184331 L271.350179,77.0300061 C273.79574,74.6355969 277.760778,74.6355969 280.206339,77.0300061 Z' id='WalletConnect'%3E%3C/path%3E %3C/g%3E %3C/g%3E %3C/svg%3E" alt="" class="DxFarilxDash__modal-qr-header-i4-img">
                                        <span class="DxFarilxDash__modal-qr-header-name">WalletConnect</span>
                                    </div>
                                    <label for="id__qr" class="DxFarilxDash__modal-qr-header-close">
                                        <i class="fal fa-times"></i>
                                    </label>
                                </div>
                                <div class="DxFarilxDash__modal-qr-content">
                                    <p class="DxFarilxDash__modal-qr-content-desc">Scan QR code with a WalletConnect-compatible wallet</p>
                                    <div class="DxFarilxDash__modal-qr-content-avt">
                                        <svg class="DxFarilxDash__modal-qr-content-avt-img walletconnect-qrcode__image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" shape-rendering="crispEdges"><path fill="#ffffff" d="M0 0h53v53H0z"></path><path stroke="#000000" d="M0 0.5h7m4 0h1m1 0h2m1 0h3m1 0h2m1 0h1m1 0h2m1 0h1m1 0h1m1 0h2m2 0h1m5 0h1m3 0h7M0 1.5h1m5 0h1m3 0h2m1 0h4m1 0h1m7 0h2m3 0h1m2 0h4m1 0h1m2 0h2m2 0h1m5 0h1M0 2.5h1m1 0h3m1 0h1m1 0h3m4 0h3m5 0h1m1 0h2m5 0h1m3 0h1m1 0h1m1 0h1m2 0h1m2 0h1m1 0h3m1 0h1M0 3.5h1m1 0h3m1 0h1m1 0h4m2 0h1m1 0h3m1 0h2m8 0h2m3 0h1m1 0h1m1 0h1m2 0h1m1 0h1m1 0h1m1 0h3m1 0h1M0 4.5h1m1 0h3m1 0h1m1 0h1m1 0h2m1 0h6m3 0h7m1 0h2m1 0h1m3 0h1m3 0h2m3 0h1m1 0h3m1 0h1M0 5.5h1m5 0h1m1 0h4m2 0h1m1 0h1m3 0h1m3 0h1m3 0h2m1 0h1m2 0h2m2 0h5m3 0h1m5 0h1M0 6.5h7m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h7M8 7.5h3m1 0h1m2 0h1m3 0h1m3 0h2m3 0h1m2 0h1m1 0h2m3 0h1m1 0h4M0 8.5h1m1 0h5m3 0h2m1 0h1m1 0h2m3 0h2m2 0h5m1 0h1m4 0h2m5 0h1m1 0h1m1 0h5M1 9.5h2m4 0h1m3 0h2m2 0h1m1 0h1m2 0h3m1 0h1m2 0h5m1 0h1m3 0h1m2 0h4m1 0h1m5 0h2M2 10.5h2m1 0h2m1 0h2m4 0h3m1 0h1m1 0h2m12 0h1m1 0h3m1 0h1m2 0h1m2 0h5M0 11.5h1m1 0h2m8 0h1m3 0h2m4 0h3m2 0h3m1 0h2m2 0h1m3 0h2m3 0h2m1 0h1m1 0h1m2 0h1M1 12.5h1m2 0h5m2 0h7m2 0h2m1 0h4m6 0h4m1 0h1m2 0h2m1 0h1m3 0h1m1 0h1M0 13.5h1m3 0h2m7 0h1m1 0h3m2 0h1m1 0h1m1 0h1m3 0h2m5 0h3m3 0h3m1 0h1m1 0h6M0 14.5h2m2 0h1m1 0h3m1 0h1m2 0h2m1 0h2m2 0h2m4 0h1m3 0h1m2 0h4m1 0h1m1 0h1m3 0h1m1 0h1m1 0h1M0 15.5h6m3 0h1m1 0h1m1 0h4m2 0h1m1 0h5m1 0h2m1 0h4m3 0h1m2 0h6m1 0h1m1 0h1m2 0h1M1 16.5h1m1 0h1m1 0h2m3 0h6m1 0h2m1 0h2m1 0h1m2 0h2m1 0h2m5 0h1m2 0h1m1 0h2m1 0h1m1 0h1m1 0h1m1 0h1M1 17.5h1m1 0h2m6 0h7m1 0h2m1 0h4m2 0h1m1 0h1m2 0h1m1 0h1m3 0h1m1 0h3m3 0h2m3 0h1M1 18.5h6m1 0h9m1 0h1m2 0h1m4 0h2m1 0h1m2 0h1m3 0h4m4 0h3m1 0h2m1 0h1M0 19.5h3m2 0h1m1 0h5m2 0h3m3 0h1m2 0h2m2 0h1m1 0h2m2 0h1m3 0h3m1 0h2m2 0h2m2 0h1m1 0h1M0 20.5h1m1 0h2m1 0h3m1 0h1m1 0h3m1 0h3m3 0h1m1 0h1m1 0h2m2 0h3m1 0h1m1 0h2m1 0h1m1 0h6m1 0h2m1 0h3M5 21.5h1m1 0h1m2 0h4m1 0h1m1 0h1m1 0h1m4 0h2m4 0h1m1 0h1m3 0h7m2 0h1m2 0h2m1 0h2M2 22.5h1m3 0h1m2 0h1m1 0h1m1 0h1m6 0h2m1 0h3m1 0h1m1 0h1m3 0h4m3 0h1m3 0h1m1 0h3m1 0h1M0 23.5h1m2 0h2m2 0h1m1 0h3m3 0h2m1 0h4m2 0h1m4 0h2m1 0h2m1 0h2m3 0h1m1 0h1m4 0h1M1 24.5h1m2 0h5m1 0h1m1 0h1m2 0h1m4 0h2m1 0h7m1 0h1m2 0h1m1 0h4m1 0h2m1 0h8M1 25.5h4m3 0h3m4 0h1m1 0h4m1 0h1m1 0h1m3 0h4m3 0h2m5 0h3m3 0h1m2 0h2M1 26.5h1m1 0h2m1 0h1m1 0h3m4 0h2m1 0h1m3 0h1m1 0h1m1 0h1m1 0h1m4 0h1m2 0h3m2 0h1m1 0h2m1 0h1m1 0h3M2 27.5h3m3 0h3m3 0h1m1 0h3m1 0h3m1 0h1m3 0h1m1 0h1m3 0h2m1 0h1m1 0h4m1 0h1m3 0h1m2 0h2M0 28.5h1m2 0h8m1 0h1m1 0h1m9 0h5m2 0h2m3 0h1m4 0h11M2 29.5h4m1 0h6m2 0h3m2 0h1m1 0h2m1 0h3m1 0h2m1 0h2m2 0h2m1 0h2m1 0h3m3 0h2m2 0h1M0 30.5h8m1 0h1m3 0h1m3 0h2m2 0h2m1 0h1m3 0h1m2 0h2m1 0h1m1 0h3m1 0h2m2 0h1m3 0h2M2 31.5h2m3 0h1m1 0h1m1 0h4m1 0h1m1 0h1m6 0h1m1 0h1m2 0h3m4 0h1m2 0h4m1 0h2m1 0h2m1 0h1M0 32.5h1m1 0h2m1 0h2m1 0h1m4 0h3m1 0h2m1 0h2m2 0h1m3 0h3m2 0h7m2 0h1m2 0h1m4 0h1m1 0h1M0 33.5h2m1 0h3m1 0h3m1 0h4m1 0h1m1 0h1m1 0h1m1 0h2m1 0h1m1 0h1m2 0h1m4 0h1m5 0h2m3 0h5m1 0h1M3 34.5h1m2 0h1m1 0h4m1 0h2m1 0h5m6 0h5m1 0h2m3 0h1m4 0h1m1 0h1m1 0h1m3 0h1M3 35.5h1m1 0h1m1 0h1m2 0h1m2 0h5m2 0h7m4 0h2m1 0h2m1 0h1m2 0h1m1 0h3m1 0h1m1 0h2m1 0h1M0 36.5h4m2 0h1m1 0h2m2 0h1m1 0h2m3 0h3m2 0h1m2 0h1m2 0h1m2 0h7m1 0h1m4 0h2m2 0h3M0 37.5h3m1 0h1m4 0h2m3 0h2m1 0h2m1 0h1m1 0h2m1 0h2m3 0h2m2 0h1m1 0h1m4 0h4m1 0h1m1 0h1m3 0h1M0 38.5h3m3 0h1m1 0h2m3 0h1m3 0h2m1 0h1m1 0h1m1 0h1m1 0h3m2 0h1m1 0h1m2 0h3m1 0h2m1 0h2m2 0h2m1 0h2M1 39.5h2m1 0h1m7 0h1m2 0h2m1 0h2m1 0h2m2 0h1m4 0h3m2 0h1m3 0h1m1 0h9m1 0h2M2 40.5h3m1 0h3m3 0h4m1 0h2m1 0h1m1 0h1m2 0h1m1 0h2m4 0h1m2 0h2m1 0h1m1 0h2m3 0h1m3 0h1M0 41.5h1m2 0h3m1 0h2m2 0h1m1 0h1m3 0h1m3 0h1m1 0h2m1 0h1m2 0h3m1 0h1m1 0h2m3 0h4m2 0h3m1 0h3M0 42.5h2m1 0h6m6 0h1m2 0h3m6 0h2m1 0h2m1 0h3m1 0h1m1 0h1m8 0h1M1 43.5h2m4 0h3m4 0h1m1 0h3m1 0h1m3 0h1m1 0h1m2 0h2m1 0h2m2 0h1m2 0h11m2 0h1M3 44.5h1m2 0h1m1 0h1m2 0h1m3 0h1m1 0h5m2 0h5m2 0h1m3 0h1m5 0h2m1 0h5m1 0h1M8 45.5h1m2 0h1m1 0h1m2 0h4m2 0h1m1 0h1m3 0h4m1 0h1m5 0h1m1 0h4m3 0h1m1 0h3M0 46.5h7m2 0h1m2 0h1m1 0h1m2 0h1m2 0h2m2 0h1m1 0h1m1 0h1m2 0h5m2 0h1m5 0h1m1 0h1m1 0h1m1 0h1M0 47.5h1m5 0h1m1 0h2m2 0h1m5 0h2m3 0h2m3 0h4m1 0h3m1 0h1m1 0h2m3 0h1m3 0h1M0 48.5h1m1 0h3m1 0h1m1 0h1m4 0h2m1 0h1m1 0h1m1 0h2m1 0h6m4 0h1m2 0h1m2 0h1m2 0h11M0 49.5h1m1 0h3m1 0h1m1 0h4m1 0h2m2 0h1m1 0h1m9 0h3m1 0h1m2 0h2m1 0h1m2 0h4m1 0h1m1 0h1M0 50.5h1m1 0h3m1 0h1m1 0h1m1 0h2m1 0h2m1 0h1m1 0h1m3 0h2m1 0h2m1 0h1m5 0h1m2 0h2m7 0h4m1 0h2M0 51.5h1m5 0h1m2 0h2m3 0h3m1 0h1m2 0h1m1 0h1m1 0h1m1 0h1m1 0h1m1 0h2m4 0h1m1 0h5m1 0h1m1 0h3m1 0h1M0 52.5h7m1 0h2m2 0h5m1 0h5m1 0h3m1 0h1m4 0h1m1 0h2m1 0h1m2 0h1m4 0h3"></path></svg>
                                    </div>
                                    <input type="text" value="wc:0672a9e9-dbde-470b-9782-0ad1db0f0ddd@1?bridge=https%3A%2F%2Fbridge.walletconnect.org&key=7cb698e888ced53375cac0f3ff70b39133f547989c7938e25c98e207a8b7bf0a" id="qr__copy" >
                                    <div onclick="copy__qr()" class="DxFarilxDash__modal-qr-content-desc DxFarilxDash__modal-qr-content-desc--copy">
                                        Copy to clipboard
                                    </div>
                                </div>         
                                <div id="notify__qr" class="DxFarilxDash__modal-qr-content-notify">
                                    Copied to clipboard
                                </div>                                 
                            </div> 
                        </div>
                    </div>
                </div>   
            </div>
        </div>
        <div id="dxdash__first" class="DxFarilxDash">                   
            <div class="DxFarilxDash__find bsd">
                <div class="DxFarilxDash__find-header">
                    <div class="DxFarilxDash__find-header-avt">
                        <img class="DxFarilxDash__find-header-avt-img" src="https://dxsale.network/assets/img/dx-logos/dx-launch.png" alt="">
                    </div>
                    <h2 class="DxFarilxDash__find-header-title DxFarilxDash__find-header-title--flex1">Decentralized Launchpad With Instant Listing And Liquidity Locking</h2>
                </div>
                <div class="DxFarilxDash__find-body archives__find">
                    <div class="DxFarilxDash__find-body-btn-block">
                        <a href="../components/DxFariLauch__Star.html"  class="DxFarilxDash__find-body-btn btn btn--blue">Start or Manage Sale</a>
                    </div>
                    <div class="DxFarilxDash__find-body-input-block">
                        <input type="text" class="DxFarilxDash__find-body-input" placeholder="Search by token address (Ex. 0x97bb08ba41f033beaac315169fc566ac9e0daf52)">
                        <div class="DxFarilxDash__find-body-icon-block">
                            <i class="DxFarilxDash__find-body-icon fal fa-search"></i>
                            <div class="DxFarilxDash__find-body-icon-ttip ttip">
                                Search for presales by token address!
                            </div>
                        </div>
                    </div>
                    <div class="DxFarilxDash__find-body-hot-block">
                        <div class="DxFarilxDash__find-body-hot ttip-block">
                            V1 CONTRACTS
                            <div class="DxFarilxDash__find-body-hot-ttip ttip">Switch to V1 contracts</div>
                        </div>
                    </div>
                </div>
                <div class="DxFarilxDash__find-footer col-6 offset-3">
                    <div class="DxFarilxDash__find-footer-item">
                        <button class="DxFarilxDash__find-footer-btn btn btn--nobgr">UPCOMING <i class="fal fa-play-circle"></i></button>
                    </div>
                    <div class="DxFarilxDash__find-footer-item">
                        <button class="DxFarilxDash__find-footer-btn btn btn--nobgr">SUCCESS <i class="fal fa-check-circle"></i></button>
                    </div>
                    <div class="DxFarilxDash__find-footer-item">
                        <button class="DxFarilxDash__find-footer-btn btn btn--nobgr">FAILED <i class="fal fa-times-circle"></i></button>
                    </div>
                </div>
            </div>
            <div class="DxFarilxDash__box-block row">
                <div class="DxFarilxDash__box bsd col-xs-12 col-sm-12 col-md-12 col-lg-3 col-12">
                    <div class="DxFarilxDash__box-header">
                        <div class="DxFarilxDash__box-header-avt">
                            <img class="DxFarilxDash__box-header-avt-img" src="https://i.ibb.co/HqRhtDq/logo-Placeholder.png" alt="">
                        </div>
                        <div class="DxFarilxDash__box-header-desc">
                            <h2 class="DxFarilxDash__box-header-desc-name blu-hot-h2">TST</h2>
                            <h2 class="DxFarilxDash__box-header-desc-name">Tester</h2>
                        </div>
                    </div>
                    
                    <label onclick="modal__ac()" for="modal__box" id="box__body" class="DxFarilxDash__box-body">
                        <div class="DxFarilxDash__box-body-stt-block">
                            <canvas id="myChart__dxf__d" width="180" height="180"></canvas>
                            <div id="stt__btn" class="DxFarilxDash__box-body-stt-btn btn">Launch Success</div>
                        </div>
                        <div class="DxFarilxDash__box-body-details">
                            <span class="DxFarilxDash__box-body-details-hot">Token %: 100</span>
                            <span class="DxFarilxDash__box-body-details-number">Liquidity: 0.01 ETH</span>
                            <span class="DxFarilxDash__box-body-details-stt">✅ DxMint Verified</span>
                        </div>
                    </label>
                    
                    <div class="DxFarilxDash__box-footer">
                        <div class="DxFarilxDash__box-footer-icon">
                            <i class="fal fa-star"></i>
                        </div>
                        <span class="DxFarilxDash__box-footer-text">
                            Token <br> Launched
                        </span>
                        <a href="" class="DxFarilxDash__box-footer-link">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none"><path d="M6.25 4.75a1.5 1.5 0 0 0-1.5 1.5v11.5a1.5 1.5 0 0 0 1.5 1.5h11.5a1.5 1.5 0 0 0 1.5-1.5v-4a1 1 0 1 1 2 0v4a3.5 3.5 0 0 1-3.5 3.5H6.25a3.5 3.5 0 0 1-3.5-3.5V6.25a3.5 3.5 0 0 1 3.5-3.5h4a1 1 0 1 1 0 2h-4zm6.5-1a1 1 0 0 1 1-1h6.5a1 1 0 0 1 1 1v6.5a1 1 0 1 1-2 0V6.164l-4.793 4.793a1 1 0 1 1-1.414-1.414l4.793-4.793H13.75a1 1 0 0 1-1-1z" fill="currentColor"></path></g></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row DxFarilxDash__stt-block bsd">
                <div class="DxFarilxDash__stt col-6 offset-3">
                    <button class="DxFarilxDash__stt-btn btn btn--diss">LOAD 4</button>
                    <span class="DxFarilxDash__stt-number">1/1</span>
                    <button class="DxFarilxDash__stt-btn btn btn--diss">LOAD 20</button>
                </div>
            </div>
        </div>
        <div id="modal__note" class="modal">
            <label onclick="modal__ac()" id="modal__note__overlay" for="modal__box" class="modal__overlay dxf__overlay "></label>
            <div id="modal__note__body" class="modal__body modal__body--pd modal__body--mr row">
                <div id="modal__note__content" class="DxFarilxDash__box-modal col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="DxFarilxDash__box-modal-header">
                        Disclaimer
                    </div>
                    <div class="DxFarilxDash__box-modal-body">
                        <p class="DxFarilxDash__box-modal-body-desc">
                            DxSale is a decentralized software tool. Anyone can create a fair launch using their own token.
                            <br><br>
                            Tokens can be clones and can have the same name as existing coins. Token creators can pretend to be owners of the real project. Please use provided social links to research and examine every project to avoid scams.
                            <br><br>
                            In the fair launch zone project owners can load arbitrary token contracts. Please take extra caution and do your research when interacting with arbitrary tokens.
                            <br><br>
                            Please pay close attention to all token metrics shared on the SALE's page.
                            <br><br>
                            <a class="DxFarilxDash__box-modal-body-desc-link" href="https://dxsale.app/app/termsandconditions" target="_blank">Terms and Conditions</a>
                            <br><br>
                        </p>
                        <!-- <input type="checkbox" name="" id="input__second" > -->
                        <div class="DxFarilxDash__box-modal-body-root">
                            <div class="DxFarilxDash__box-modal-body-root-input-block">
                                <input onclick="check__ac()" type="checkbox" id="root__check" class="DxFarilxDash__box-modal-body-root-input">
                            </div>
                            <label onclick="check__ac()" for="root__check" class="DxFarilxDash__box-modal-body-root-desc">
                                I have read and agree to the Terms and Conditions and I understand that I am responsible for doing my own research!
                            </label>
                        </div>
                    </div>
                    <div class="DxFarilxDash__box-modal-footer">
                        <div class="DxFarilxDash__box-modal-footer-btn-block">
                            <label onclick="modal__ac()" for="modal__box" class="DxFarilxDash__box-modal-footer-btn btn btn--diss">cancel</label>
                        </div>
                        <div class="DxFarilxDash__box-modal-footer-btn-block">
                            <btn onclick="modal__second()" id="btn__active" class="DxFarilxDash__box-modal-footer-btn btn btn--diss">confirm</btn>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="dxdash__second" class="DxFarilxDash__open bsd">
            <div class="DxFarilxDash__open-title">Disclaimer not accepted. Please accept the disclaimer to continue!</div>
            <br> <br>
            <label onclick="modal__ac()" for="modal__box">
                <span class="DxFarilxDash__open__btn btn bgr--blu">OPEN DISCLAIMER</span>
            </label>
        </div>
        <div id="dxdash__thrid" class="DxFarilxDash__details-block">
            <div class="DxFarilxDash__details container-fluid">
                <div class="DxFarilxDash__details-hr bsd"></div>
                <div class="DxFarilxDash__box row">
                    <div class="DxFarilxDash__box-left col-lg-3 col-md-3 col-12">
                        <div class="DxFarilxDash__box-left-item bsd">
                            <div class="DxFarilxDash__box-left-item-title">Useful Links</div>
                            <div class="DxFarilxDash__box-left-item-desc">
                                <div class="DxFarilxDash__box-left-item-desc-link-block">
                                    <a class="DxFarilxDash__box-left-item-desc-link" href="https://dextools.io/app/uniswap/pair-explorer/0xE23c6D73c586dC25A4a37f546DC181207e9b7b1d">Dextools Charts</a>  📈
                                </div>
                                <p class="DxFarilxDash__box-left-item-desc-text">
                                    https://dextools.io/app/uniswap/pair-explorer/0xE23c6D73c586dC25A4a37f546DC181207e9b7b1d
                                </p>
                            </div>
                        </div>
                        <div class="DxFarilxDash__box-left-item bsd">
                            <div class="DxFarilxDash__box-left-item-title">DxSale Automated Warning System</div>
                            <div class="DxFarilxDash__box-left-item-desc">
                                <div class="DxFarilxDash__box-left-item-desc-number">1  Warnings Detected</div>
                                <div class="DxFarilxDash__box-left-item-desc-text">
                                    <div class="DxFarilxDash__box-left-item-desc-text-hot">Liquidity Time Warning</div>
                                    Liquidity of this sale unlocks in a very short timespan.
                                </div>
                            </div>
                        </div>
                        <div class="DxFarilxDash__box-left-item bsd">
                            <div class="DxFarilxDash__box-left-item-i4">
                                <img src="https://pbs.twimg.com/profile_images/1384336008179687424/VQqhKKxu_400x400.jpg" alt="" class="DxFarilxDash__box-left-item-i4-img">
                                <div class="DxFarilxDash__box-left-item-i4-title">TokenSniffer Scan</div>
                                <div class="DxFarilxDash__box-left-item-i4-desc">Sniff Score:  100</div>
                            </div>
                            <div class="DxFarilxDash__box-left-item-noti">
                                <div class="DxFarilxDash__box-left-item-noti-title">Tests:</div>
                                <div class="DxFarilxDash__box-left-item-noti-list">
                                    <div class="DxFarilxDash__box-left-item-noti-item">
                                        <i class="DxFarilxDash__box-left-item-noti-item-icon fas fa-ban"></i> nan
                                    </div>
                                    <div class="DxFarilxDash__box-left-item-noti-item">
                                        <i class="DxFarilxDash__box-left-item-noti-item-icon fas fa-ban"></i> nan
                                    </div>
                                    <div class="DxFarilxDash__box-left-item-noti-item">
                                        <i class="DxFarilxDash__box-left-item-noti-item-icon fas fa-ban"></i> nan
                                    </div>
                                    <div class="DxFarilxDash__box-left-item-noti-item">
                                        <i class="DxFarilxDash__box-left-item-noti-item-icon fas fa-ban"></i> nan
                                    </div>
                                </div>
                            </div>
                            <div class="DxFarilxDash__box-left-item-btn-block">
                                <button class="DxFarilxDash__box-left-item-btn btn btn--green">full report</button>
                            </div>
                            <div class="DxFarilxDash__box-left-item-note">
                                This report does not guarantee safety of the token contract or token owner. The user is still required to do thorough research and should look for audited contracts and audited team.
                            </div>
                        </div>
                    </div>
                    <div class="DxFarilxDash__box-bet-block col-lg-6 col-md-6 col-12">
                        <div class="DxFairlxDash__box-bet bsd">
                            <div class="DxFarilxDash__box-header DxFairlxDash__box-bet-item DxFairlxDash__box-bet-item--mbm">
                                <div class="DxFarilxDash__box-header-avt">
                                    <img class="DxFarilxDash__box-header-avt-img" src="https://i.ibb.co/HqRhtDq/logo-Placeholder.png" alt="">
                                </div>
                                <div class="DxFarilxDash__box-header-desc">
                                    <h2 class="DxFairlxDash__box-bet-item-name blu-hot-h2">TST</h2>
                                    <h2 class="DxFairlxDash__box-bet-item-name">Tester</h2>
                                </div>
                            </div>
                            <div class="DxFairlxDash__box-bet-item">
                                <div class="DxFairlxDash__box-bet-item-desc">
                                    <div class="DxFairlxDash__box-bet-item-desc-text">
                                        <div class="">Token Address:</div>
                                        <a class="DxFairlxDash__box-bet-item-desc-text-link" href="">0xCA4037256e869cc40F66555fd54c5d02A772F937</a>
                                        <div class="DxFairlxDash__box-bet-item-desc-text-hot">Do not send ETH to the token address!</div>
                                    </div>
                                    <div class="DxFairlxDash__box-bet-item-desc-text">
                                        ✅ This token is DxMint Verified (Standard Token)
                                    </div>
                                    <div class="DxFairlxDash__box-bet-item-desc-text z13">
                                        This token has already launched! Use the links below to trade the token.
                                    </div>
                                    <div class="DxFairlxDash__box-bet-item-btn-block">
                                        <a class="DxFairlxDash__box-bet-item-btn DxFairlxDash__box-bet-item-btn--h btn btn--blue" target="_blank" href="https://app.uniswap.org/#/swap?inputCurrency=0xCA4037256e869cc40F66555fd54c5d02A772F937">
                                            <img class="DxFairlxDash__box-bet-item-btn-icon" src="https://app.uniswap.org/static/media/logo_white.811f9ef7.svg" alt="">
                                            Trade on Uniswap
                                        </a>
                                    </div>
                                    <div class="DxFairlxDash__box-bet-item-btn-block">
                                        <a target="_blank" href="../components/DxSale__lock.html" class="DxFairlxDash__box-bet-item-btn DxFairlxDash__box-bet-item-btn-diss btn btn--diss-b">
                                            Dxlock locker
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                            <table class="DxFairlxDash__box-bet-table">
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Sale ID</th>
                                    <td class="DxFairlxDash__box-bet-td">0</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Total Supply</th>
                                    <td class="DxFairlxDash__box-bet-td">100000.00 TST</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Tokens For Launch</th>
                                    <td class="DxFairlxDash__box-bet-td">100000.00 TST</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Initial Liquidity</th>
                                    <td class="DxFairlxDash__box-bet-td">0.01 ETH</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Listing Rate</th>
                                    <td class="DxFairlxDash__box-bet-td">9999999.999999998 TST/ETH</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Launch Time </th>
                                    <td class="DxFairlxDash__box-bet-td">29 Aug 2021 at 12:10</td>
                                </tr>
                                <tr class="DxFairlxDash__box-bet-tr">
                                    <th class="DxFairlxDash__box-bet-th">Liquidity Unlock Date</th>
                                    <td class="DxFairlxDash__box-bet-td">30 Sep 2021 at 11:57</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="DxFarilxDash__box-right col-lg-3 col-md-3 col-12">
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
        </div>
    </div>
@endsection

@section('script')
    <script>
        autoopen('td9', '');
    </script>
@endsection