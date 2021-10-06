@extends('frontend.layout.master')
@section('content')
    <div class="home__content-body mt30">
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
                        <div class="modal__body">
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
                        <img class="DxFarilxDash__find-header-avt-img" src="https://dxsale.network/assets/img/dx-logos/dx-lock.png" alt="">
                    </div>
                    <h2 class="DxFarilxDash__find-header-title DxFarilxDash__find-header-title--flex1">View All Lockers in DxLock</h2>
                </div>
                
                <div class="DxFarilxDash__fins-details">
                    <div class="DxMint__body-nav-block">
                        <div class="active__tab-nav DxMint__body-nav no-mb">
                            <div class="active__tab-item DxMint__body-nav-item active__tab-item DxMint__body-nav-item--view-lock active">
                                Liquidity Locker
                            </div>
                            <div class="active__tab-item DxMint__body-nav-item active__tab-item DxMint__body-nav-item--view-lock">
                                Token Locker
                            </div>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="active__tab-content">
                        <div class="active__tab-pane DxMint__body-pane active">
                            <div class="DxFarilxDash__find-body">
                                <div class="DxFarilxDash__find-body-btn-block DxFarilxDash__find-body-btn-block--mb">
                                    <a href="../components/DxFariLauch__Star.html"  class="DxFarilxDash__find-body-btn h36 btn btn--blue">Lock or Manage Liquidity</a>
                                </div>
                                <div class="DxFarilxDash__find-body-input-block">
                                    <input type="text" class="DxFarilxDash__find-body-input" placeholder="Search by token address for liquidity lock!">
                                    <div class="DxFarilxDash__find-body-icon-block">
                                        <i class="DxFarilxDash__find-body-icon fal fa-search"></i>
                                        <div class="DxFarilxDash__find-body-icon-ttip ttip">
                                            Search for presales by token address!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="archives__dxl-list">
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time1" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time2" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time3" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time4" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd archives__dxl-item-time--green">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time5" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-time bsd archives__dxl-item-time--green">
                                            <div class="archives__dxl-item-time-title">DxLock Liquidity Locker</div>
                                            <div id="back__time6" class="archives__dxl-item-time-details"></div>
                                        </div>
                                        <div class="archives__dxl-item-desc">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="active__tab-pane DxMint__body-pane">
                            <div class="DxFarilxDash__find-body">
                                <div class="DxFarilxDash__find-body-btn-block DxFarilxDash__find-body-btn-block--mb">
                                    <a href="../components/DxFariLauch__Star.html"  class="DxFarilxDash__find-body-btn h36 btn btn--blue">Lock or Manage Tokens</a>
                                </div>
                                <div class="DxFarilxDash__find-body-input-block">
                                    <input type="text" class="DxFarilxDash__find-body-input" placeholder="Search by token address for token lock!">
                                    <div class="DxFarilxDash__find-body-icon-block">
                                        <i class="DxFarilxDash__find-body-icon fal fa-search"></i>
                                        <div class="DxFarilxDash__find-body-icon-ttip ttip">
                                            Search by token address for token lock!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="archives__dxl-list">
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="archives__dxl-item">
                                    <a href="" class="archives__dxl-item-link bsd">
                                        <div class="archives__dxl-item-title">BABYJESUS/WETH</div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M3 0h1v3H3V0z"></path><path fill="currentColor" d="M11 0h1v3h-1V0z"></path><path fill="currentColor" d="M6.6 14H1V6h13v.6c.4.2.7.4 1 .7V1h-2v3h-3V1H5v3H2V1H0v14h7.3c-.3-.3-.5-.6-.7-1z"></path><path fill="currentColor" d="M14 12h-3V9h1v2h2z"></path><path fill="currentColor" d="M11.5 8c1.9 0 3.5 1.6 3.5 3.5S13.4 15 11.5 15S8 13.4 8 11.5S9.6 8 11.5 8zm0-1C9 7 7 9 7 11.5S9 16 11.5 16s4.5-2 4.5-4.5S14 7 11.5 7z"></path></svg>
                                            29 Nov 2021 at 01:58
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="currentColor"><path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"></path></g></svg>
                                            375:15:55:10
                                        </div>
                                        <div class="archives__dxl-item-date archives__dxl-item-date--mt">
                                            <svg class="archives__dxl-item-date-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="icons" id="lighter" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.8 15c.6 0 1.2.6 1.2 1.3v3.5c0 .6-.6 1.2-1.3 1.2h-5.5c-.6 0-1.2-.6-1.2-1.3v-3.5c0-.6.6-1.2 1.2-1.2v-1.5c0-1.4 1.4-2.5 2.8-2.5s2.8 1.1 2.8 2.5V15m-1.3 0v-1.5c0-.8-.7-1.3-1.5-1.3s-1.5.5-1.5 1.3V15h3M2 6h18v3.1L19 9c-.82 0-1.59.2-2.27.54C16.28 9.18 16 8.62 16 8H6c0 1.11-.89 2-2 2v4a2 2 0 0 1 2 2h7.04l-.04.5V18H2V6m9 3c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3z" fill="currentColor"></path></svg>
                                            5000000
                                        </div>
                                        <div class="archives__dxl-item-date">
                                            Vesting Percent:4
                                        </div>
                                        <div class="archives__dxl-item-desc archives__dxl-item-desc--no-bt">
                                            <div class="archives__dxl-item-desc-title">Token Address:</div>
                                            <div class="archives__dxl-item-desc-text">0x4225...2e99</div>
                                        </div>
                                    </a>
                                </div>
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