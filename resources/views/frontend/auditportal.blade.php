@extends('frontend.layout.master')
@section('content')
    <div class="home__content-body mt30">
        <input type="checkbox" name="" id="modal__box" class="modal__box" hidden>
        <div class="DxFarilxDash__public">
            <div id="dxdash__first__active" class="DxFarilxDash__active DxFarilxDash__active--pc bsd">
                <button class="DxFarilxDash__active-btn btn btn--blue">Connect Wallet to Start</button>
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
            <div id="dxdash__first__active" class="DxFarilxDash__active DxFarilxDash__active--mb flex-column bsd">
                <button class="DxFarilxDash__active-btn btn mb btn--blue">Connect Wallet to Start</button>
                <div id="dxdash__first__active__btn" class="DxFarilxDash__active-btn-block">
                    <input type="checkbox" name="" id="id__qr1" class="id__qr" hidden>
                    <label for="id__qr1" class="DxFarilxDash__active-btn btn btn--green">
                        Walletconnect                                
                    </label>
                    <div class="modal">
                        <label for="id__qr1" class="modal__overlay"></label>
                        <div class="modal__body">
                            <div class="DxFarilxDash__modal-qr">
                                <div class="DxFarilxDash__modal-qr-header">
                                    <div class="DxFarilxDash__modal-qr-header-i4">
                                        <img src="data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='300px' height='185px' viewBox='0 0 300 185' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E %3C!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch --%3E %3Ctitle%3EWalletConnect%3C/title%3E %3Cdesc%3ECreated with Sketch.%3C/desc%3E %3Cdefs%3E%3C/defs%3E %3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='walletconnect-logo-alt' fill='%233B99FC' fill-rule='nonzero'%3E %3Cpath d='M61.4385429,36.2562612 C110.349767,-11.6319051 189.65053,-11.6319051 238.561752,36.2562612 L244.448297,42.0196786 C246.893858,44.4140867 246.893858,48.2961898 244.448297,50.690599 L224.311602,70.406102 C223.088821,71.6033071 221.106302,71.6033071 219.883521,70.406102 L211.782937,62.4749541 C177.661245,29.0669724 122.339051,29.0669724 88.2173582,62.4749541 L79.542302,70.9685592 C78.3195204,72.1657633 76.337001,72.1657633 75.1142214,70.9685592 L54.9775265,51.2530561 C52.5319653,48.8586469 52.5319653,44.9765439 54.9775265,42.5821357 L61.4385429,36.2562612 Z M280.206339,77.0300061 L298.128036,94.5769031 C300.573585,96.9713 300.573599,100.85338 298.128067,103.247793 L217.317896,182.368927 C214.872352,184.763353 210.907314,184.76338 208.461736,182.368989 C208.461726,182.368979 208.461714,182.368967 208.461704,182.368957 L151.107561,126.214385 C150.496171,125.615783 149.504911,125.615783 148.893521,126.214385 C148.893517,126.214389 148.893514,126.214393 148.89351,126.214396 L91.5405888,182.368927 C89.095052,184.763359 85.1300133,184.763399 82.6844276,182.369014 C82.6844133,182.369 82.684398,182.368986 82.6843827,182.36897 L1.87196327,103.246785 C-0.573596939,100.852377 -0.573596939,96.9702735 1.87196327,94.5758653 L19.7936929,77.028998 C22.2392531,74.6345898 26.2042918,74.6345898 28.6498531,77.028998 L86.0048306,133.184355 C86.6162214,133.782957 87.6074796,133.782957 88.2188704,133.184355 C88.2188796,133.184346 88.2188878,133.184338 88.2188969,133.184331 L145.571,77.028998 C148.016505,74.6345347 151.981544,74.6344449 154.427161,77.028798 C154.427195,77.0288316 154.427229,77.0288653 154.427262,77.028899 L211.782164,133.184331 C212.393554,133.782932 213.384814,133.782932 213.996204,133.184331 L271.350179,77.0300061 C273.79574,74.6355969 277.760778,74.6355969 280.206339,77.0300061 Z' id='WalletConnect'%3E%3C/path%3E %3C/g%3E %3C/g%3E %3C/svg%3E" alt="" class="DxFarilxDash__modal-qr-header-i4-img">
                                        <span class="DxFarilxDash__modal-qr-header-name">WalletConnect</span>
                                    </div>
                                    <label for="id__qr1" class="DxFarilxDash__modal-qr-header-close">
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
        <div class="DxMint">
            <div class="DxMint__header bsd bsd--b">
                <div class="DxFarilxDash__find-header">
                    <div class="DxFarilxDash__find-header-logo-block">
                        <svg class="DxFarilxDash__find-header-logo sc-bdVaJa fUuvxv" fill="#000000" width="22px" height="22px" viewBox="0 0 1024 1024" rotate="0"><path d="M512 64c-141.4 0-256 114.6-256 256s114.6 256 256 256 256-114.6 256-256-114.6-256-256-256zM512 480c-88.4 0-160-71.6-160-160s71.6-160 160-160 160 71.6 160 160-71.6 160-160 160z M387.4 614.8c-38.2-16.2-72.4-39.2-101.6-68.6-2.8-2.8-5.6-5.6-8.2-8.6l-149.6 262.4h192l96 160 147-324c-16.8 2.6-33.8 4-51 4-43.2 0-85-8.4-124.6-25.2z M746.6 537.8c-2.6 2.8-5.4 5.8-8.2 8.6-29.2 29.2-63.4 52.4-101.4 68.4l-49 107.6-43.8 96.8 63.8 140.8 96-160h192l-149.4-262.2z"></path></svg>
                    </div>
                    <h2 class="DxFarilxDash__find-header-title">Auditor Panel - Submit audit reports</h2>
                </div>
                <h3 class="active__tab-title">Submit an audit report for a token to have your report displayed on the token's launch page</h3>

                <div class="DxMint__body-create-block row">
                    <div class="DxMint__body-create bsd bsd--bold col-lg-8 offset-lg-2 col-12">
                        <div class="custom-select--desc box__desc">
                            <div class="box__desc-bold">
                                Submission Instructions:
                            </div>
                            <ul class="box__desc-list">
                                <li class="box__desc-item">
                                    Make sure you are connected with a whitelisted wallet
                                </li>
                                <li class="box__desc-item">
                                    Start by entering the token address
                                </li>
                                <li class="box__desc-item">
                                    Enter a summary of the audit results highlighting high risk items
                                </li>
                                <li class="box__desc-item">
                                    Enter the link to your official website for a more detailed report
                                </li>
                                <li class="box__desc-item">
                                    Enter an overall audit score
                                </li>
                            </ul>
                        </div>
                        <form class="DxMint__body-create-form">
                            <div class="DxMint__body-create-form-group form__group form_v3">
                                <input class="form__input" placeholder="Ex. 0xF063fE1aB7a291c5d06a86e14730b00BF24cB589">
                                <span class="form__label-wrap">
                                <span class="form__label">Enter Token Address - Only for whitelisted auditors</span>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        autoopen('td7', 'auditportal');
    </script>
@endsection