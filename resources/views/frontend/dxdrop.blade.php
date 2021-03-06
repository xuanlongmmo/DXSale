@extends('frontend.layout.master')
@section('content')
    <div id="home__content" class="home__content-body mt30">

        <!-- content page  -->
        <div class="home__content-body mt30">
            <input type="checkbox" name="" id="modal__box" class="modal__box" hidden>
            <div class="DxFarilxDash__public">
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
            <!-- login  -->
            <div class="home__login-header bsd">
                <div class="home__login-header-item-block">
                    <div class="home__login-header-item">
                        <div class="home__login-header-item-title">Wallet</div>
                        <div class="home__login-header-item-btn btn btn--diss">0xc454...8cFE</div>
                    </div>
                </div>
                <div class="home__login-header-item-block">
                    <div class="home__login-header-item">
                        <div class="home__login-header-item-title">ETH Network</div>
                        <input type="checkbox" name="" id="ETH__network" class="ETH__network" hidden>
                        <label for="ETH__network" class="home__login-header-item-btn btn btn--blue">Change Network</label>
                        <div class="modal">
                            <label for="ETH__network" class="modal__overlay"></label>
                            <div class="modal__body">
                                <div class="network-block">
                                    <div class="network">
                                        <div class="network__header">
                                            <h1 class="network__header-title">Select a Supported Network</h1>
                                        </div>
                                        <div class="network__body">
                                            <div class="network__body-box">
                                                <div class="network__body-box-title">Main Networks</div>
                                                <div class="network__body-box-list">
                                                    <div class="network__body-box-item item--bla">
                                                        <img class="network__body-box-item-img" src="data:image/png;base64,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" alt="">
                                                        ETH
                                                    </div>
                                                    <div class="network__body-box-item item--yel">
                                                        <img src="https://dxsale.app/914a348e586f88b728b30816eb418da9.png" alt="" class="network__body-box-item-img">
                                                        BSC
                                                    </div>
                                                    <div class="network__body-box-item item--pin">
                                                        <img src="https://dxsale.app/624f14b2c69a85bd6c4cca8b49031c3c.png" alt="" class="network__body-box-item-img">
                                                        Polygon
                                                    </div>
                                                    <div class="network__body-box-item item--gre">
                                                        <img src="https://dxsale.app/e6d01ed910c54b20d9201f043962ea52.png" alt="" class="network__body-box-item-img">
                                                        KCC
                                                    </div>
                                                    <div class="network__body-box-item item--gre-o2">
                                                        <img src="data:image/png;base64,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" alt="" class="network__body-box-item-img">
                                                        xDAI
                                                    </div>
                                                    <div class="network__body-box-item item--red">
                                                        <img src="https://dxsale.app/78440cf7e4ba179da182689d6c3ee107.png" alt="" class="network__body-box-item-img">
                                                        AVAX
                                                    </div>
                                                    <div class="network__body-box-item item--blu">
                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJkAAAD+CAYAAAApradYAAAAAXNSR0IArs4c6QAAADhlWElmTU0AKgAAAAgAAYdpAAQAAAABAAAAGgAAAAAAAqACAAQAAAABAAAAmaADAAQAAAABAAAA/gAAAABbQ2VDAAAYRklEQVR4Ae2d7XXjRtKFZ/a8/5cZuJUBHcGCGdARCIrAmggIRiA6AoIRjBwBqAikjQBkBKYj8Ptcme2dkUYSPqsBsOuc6wbARlfVrQt0q0nbnz5Fq8zAX3/9tQIluK58U+wYGajCAKJansVF8489cpRUuT/2iQy8yYBEBArwnhV86N4cJH4QGfgRAxIN2II6dkfn2Y/Gi9ciA/8wIJGAFfgDNDHd9+s/A8aDyMC3DCCOa1CCLqxkkOTb8ePxBTMgMYAC9GEFg84vmN7LTp3ia931FVjYFidxvXYpklOxwQpYm9Zrq0vh+WLzpMjXoOminls7sZJRlhdbhKkmTlG17noEQ7KCYJKpcn4xeVFErbtUzCHbluDcxRRlKolSNK277sBY7Hm9RrDxj4MxiJBC/QpUtDFaSdDxy/ehCo3iaN2lIk3BCpJIhsr1xcVFMeZARZmifSUpN/ai/musCUC+1l1b4n8EiWEevxv60lZHSZ4rENdrhsR/OpNuve7a49cpT1q9PXVuaco3rtf6FhokL0EJLO2Asx9unnI9BSfLYPD1CJK+ub648UUqKIClSTzZR2TTZwY2loGdfRW07qP44ucfMCASwRZY2z0OaxWQ/nOwtw4Uf3cgrtc+0NKrj0UaWAHrddcBn8mrgGpc4P4UnICliaf4Y8mqdYKsa1ACS5MosqoxftSPsfSQZJYJnH2VtMlH8V3s5yIHFMDa7nHo+iBe44K9dUL4K8C8j5xGOSZkqBBfgbUdcJhYkIafJZA/a9vi8HLXa0oerIC1nXCYWYjrWx/4VL6ZdbL403rt8n4sSdLX5+RpTC3HW9AnG/8O7E2z/ttZSbP8VviTPCbJBDwCa3vCYTIkUolnCQ7WROCvAIPiopO6kJSeXiVnbZoabztJoodBiM1PoYrT2rY4dD2kZTskSYjEOxDCcpwGnRqrsk2cegjvA5D0vF4bC0+v+CTwX4GSsLYnHCavAhrBBcUNDtaE4a8E4/nynWBFlIK2Nk05g50a62icPDKgfKytwOFwH1CCmwMFGcI2OB3F1FhVbOTjwH0IMvH5Vf6rxtp7P4KZgS0IYXuczntPMqAD8tPMcAhBLj5XIOzDew4ixLrrhO80YO3NXZNvBpS3tam+9us1nC5BCULYBqdhny5zif3tUHmDPATp+HwESe+pywkoQAjb43TSU2PVAsKD6vAUogj4LICrGmvlfhoUbEEIO+E0rRzsBXWEl1sgfkLYHU7bzygaBKxAiHUXbp/XIe0TmbDw4Eg1ykVWAJMumv9YkpuvQQlCmKZGN2FtdJ4afIWcQkv5r5zUOdiCNoQdcLqsHGzs+IoB+As5hRb4f3vdzIcOfAWhLMNxnBpfyab+BfEINqEKid8t+F8tdQJWIJTtcezqUxnv+IgBeJ0D8RvCtF57/rHkZw7+INj/qe6jyLv7/MhQt58/f77vbsg40o8YoMYp1zfg3z/6vOdrB4nsr56dvBz+Ty4o4Q0CO738MJ73wwBlnjFyBpr/Ndg0NInM0O7x5ZrGGu9rzwD8m0+hn4wEdsBP0p6iOEJXDFCPFJws6t+3yJRE1hUxcZxuGaA2M9Wnb6H1LbK0W1riaH0wgMhu+xRa3yJT7Np7c32QE8dsxwB1mYMC9GoWIvMJrDjQXzjRAjOgOoAtMDFLkSkhbdDZ/wAucFGH5B7+V+c60NhYiH0ycf4EvrBPttdJtP4ZQE5LvNwB17+37z2EEpmP4p4Die3gL8S2WwYQ15wRJa6k25GrjxZaZD7SjIPf4jcAno72LeKaMYrElbYfrd0IQxGZsjgBfZe5a5dSvBuB6YvpWyChBbchicyT8cRBXK95Nmq0Iddd74U5RJH5eO85iOs1z8Y77RDWXe+E92nIIvNxZxzE9Zpn45t2SOuub8J6dTgGkSnoE4jrtW/KN7R11zehvToci8h84Be/XhvqussX6Edt2/+B15pB9QtXK5vjqIDoi/s+lJyfv2ck/6/AASt7wFGr/2lZW5Ht2XJwBPEF6BevVrbEUQnxKzCzchrCj/IDW3w/gsQwBtXzhvrKp2aQxtZWZM+OCWTDgQO75wt2/8hwVVKESX4fSl7a7ypBCixtjTNHXfMunHYiMgVCQCeQcvgzeABWpjdZTkEeQWLltE8/5LEEElcGLN/UqtsVdczAieNOrDOR+WgI7gkknN+Ao79u0M7xUVCc0a7XiD3Uukt1Wqhu4NB1rToXmQ+QYHOOVfi1v2bULvFTUrAVmBn5bOVGcYItg4RYd62plQP7Vkm8c3NvIpNPAtcUmnF4BX4HlpbhrKR415ZO6/oivpXiBGnde1v233G/xJW1HOfD23sVmfdOIgegN8wCHP11g1ZvskGu1xBXyHXXgnqk4GRQg08mIvOJkNQeOM6/AP2JbGVzHBUUNvh6jRhCrbvE9w38J6qDFfHyYyoynxhJbjh2YOevGbVL/JQUegVmRj6f3cgfCLHukv81cPCe68TagohMSZJwqC0Puc9ASdFN1mv4CbXueiDPK7jOxDfHQSyYyHy2JB9qy0Nvsl7Xa4gr1LrrSG4LuE3AwXMdqg0uMp84ZOQcz4Fe7ZYmnwWC6Gy9xlgh111ruHRgb0nie74GIzIFCTEhtzyWhFAikBXQW6626T4Qat21I2CJK6sdeM83DEpkPleIOgAVfQGO/rpRm+GnRCy11mv0D7nuWsBXCk5GHNVyM0iR+QwgbQ8c59ZbHnqTVVqvIa5Q665gWxJwU8sGLTKfCULbcOzAzl8zauf4KRDSq/Ua10Ktu5T6GmhqzHUydBuFyEQihIbc8lgSQomwVsCBUOuuB+K4gotMfIiXMdhoRObJhNxQWx4KIQMlSIGlHXG2IPcEHCwdd+FrdCLzSUN2zrGmM00dUzWtu9bk6sB+rEmOVmQiHOJDbnn0XfMdDiSurG9HfY8/apF5cijEAWjdtABHf32k7YPyIJ8UjGbd9R7XkxCZT5Ci7IHj3HrLw4fQph3NlkTdJCclMp88Qttw7MDOXxt4uyY+TY35wONsFN4kRSYmKFjILY+qxXig4xWxZoq36k1j6zdZkflCULyQWx4+jJftkQsLYkvA4eWHUzufvMh8wShmzvEcaGoKZZPYkqhL3sWI7EzMjPY/dUnqsP+/GesnfWvQ4ZiDH+oiREZR9RMc/yuJJHBVUvw/nuMJHIqN+8mLjGJeQ6W+CspsKK3kRW/UjNhKsKx0x4g7TVZkFC8BBbXJgYo6RHMEpV94FEDHk7TJiYxi+V+nSmDJSKqmOEtiv1P8I4m5cpiTEhkFWqlYIK3MwLA63hKOxHY9rLDaRTMJkVEUTY0SVwbG/iZQ/Dn56I+DhOPR26hFRhEcKKiC4EZfje8TmHNakN8WjDq3UYoM0oe0JfG9NLo/Sxly1FseoxMZAtN6xU+N3Zd0mCNqCs3IvQTLYYb4dlSjERnkat2laTEHIv0SzZH06LY8Bi8yhDXGLYm+H4AEByXcjGLLY9Aig8SVyAQpsDJ9id3G9AsLK7vFkcR2beWwiZ9BigzSNDVKXBmwmhqff5mKv1ZrHn7t4RhDv/RoK1aGqGTiJ4evwW55DEpkEOVAAWmCA1b2G47c+edArX0yTsYgc7BrPVj1AeSvgL8tcNVv67/nIEQGKaG2JB6g+ApR3IJTl3Qz3gGkjLkA/+1y7A/GSvl8UFsewUWGwLSe8FPjB/x19vGRkX5BBL3/MhUfe6C3zA2wnEIzuC3BsjPWGg4UTGQkr3WXpsUczBrGX/c2FXlN0R24r3tzm/74y7nfAU3NVuZwFHzLw1xkCCvUlsQOwucUO6MNYvjWv9xyi/Mr8GAYRIKvEu6DbHmYiowkV0oWpMDKtB5aUNwUHKycvudHcYCEPr+A43t9O/5MApfYrjse993hTERGUpoaJa4MWE6NNxRTb689fgdnxHUPHIGtgaZyCxP/OfUw2/LoVWQk4kBBUoIDVqZ1j9ZduZXDNn6IM+P+Odi1GafmvfJXUJ8tcDXvrdW9F5ER9OS2JGqx2qAzQtMUmnLrAmiKt7IUR71ueXQuMgSm+d5PjVZEHXFksiXRd0IIbQ/0lrkBllNoRu1KsOw6x85ERnBad2lazMGs60DfGE9FWFMUTY33b/QZ5WXyyQncAU39VuZw1PmWR2uRIayL3ZLou/IIbRJbHp8RyV8tyNLbIwFWby6FqvXKLQXY66Rrg46EMfVGbmTE9bnRjRVuIrYl3Tbgpwrdu+pyYqAnkDQdsK3Imvptcp+mRokrb3Jz1XuGLDKfAzFmHN8C/WcPBm+tp0ujDLUuGc2WRN+c8KBl+JiDXd++uhh/6CJ7IMkrSNUbTK/taGcG4OMAUk4XQEuIwdpQRXaEsUlsSfRdeYS2B3qr3QAtKQZnQxOZSFpDmqbG+8GxNeCA4CsnPAe0tBiUDUlkO5iZQ1Y2KIZGFAzcncAtIV+Bh6GEPgSRaT2xgJwUHIZCzJjjEI8gIYdfwDF0LiFFpqnxBjL09tqHJmKK/uH1HjhyWwPxHcRCiew3stW6Kw+S9YU5heeMlPXHwS5E6tYieyDJK5K+BacQCV+qT/jWFJqS/wL815IHK5EdSSpuSVhW9g1fCG0P9Fa7ASZTaN8iUxJrktLUeP9G3vFyAAaoR45bB7R06dX6FpmmxazXDOLgjRmgNidwywBfGg9S4ca+Rbbly1z9PslViCV2MWaAusyBfnFy16frvkWm2JegJJkVmPWZTBy7GgOqA5CwHkFS7a7mvSxE5qPLONBvya/9hdjaMwD/v+K1BJomTcxSZErIAf3rWAWY60I0GwbgWz+P15trA0xnFGuReUYTDvRW2wLThH0Al9LCrwNfyVdrryAPdiiR+RqnHJSQoFd4tA4ZgFP/ryXq7bXscOjaQ4UWmQLWm2wDKRJbogvR2jEAjxKVxJUB8RvUhiAyT4DjoICguOXhGanZwp3fktD06Gre3lv3IYnMJ6mnsISwFQj+FPqghtyKJ3BHjHp7JUOLdYgi8xxlHMQtD8/GGy3i+pWPTLck3gjlzctDFpmCdiBueYiJF4a4gm1JvAjlw9Ohi8wnkHAQtzwgAXEF35LwRanathXZGkfHqs466JcyRnmeIjoYbjxDkHOoLYkHWPq9DVNtRabfJjkC0Lf4fwIL0x8DF7XlgcD0x5AW9Rmw+mNIL48b6pvQPoHG1lZkz44JZMOBA7vnCzb/kL+CAkx2y4PcQm1JrOF2Tl1z2tbWicgUBQHpt0kphz+DB2BlespLCrICVk95r7kpDxBiS0LT4hV1zMCpqyQ7E5kPiOCeQML5DTj66wZtho/Rb3kgrhBbEqrTgrotwYHjTq1zkfnoCDbneA7W/ppB6/Axyi0PxBViS0Lr6C/UyoE9x71YbyJTtASuKTTj8AroVWxlCY5GseWBuEJtSezgSOLa9F2UXkXmgyeRA1hyvgBHf92gTfFRnqcgA3fVXRBTyC2Jn6lHCjpbd72XuYnIfAAktQeO8y9Ar2oLm+FkUFseCEwPXLAtCWrwZEG892EqMu+UJDccO7Dz1wxa+SsocLAtD3xPYkuibq2CiExBIrSL2fJAXJPakhiNyHygenWDhPMbcPTXDdoMH71veSCwyW1J1K1NsDfZy0ARWs61OVi//KzHc8fYvWx5IK7JbknUrcdgRKbAz1NoxuEVCLLlgd8ZaGyIa/JbEnXJGZTIfPCI7QCWnC+A5RSa4u8raGP6q1GxW9kDjky3JOomNkiR+SQQ2h44zi23PLz7pm2rN2ENp3r4buAnAU817jPvOmiReTYgccOxAzt/7cLbNfnP4SUfAw+jEJmIhNBQWx5DqqPWqVdwkYmPIQX2XiyjEZlPAnJDbXn4EEK0mhoX5L4EhxABtPE5OpH5ZCE753gONHVM1fTVW++/kuibvNGKTMQgNE2hGYdXwHLLA3e92w4Pjvy0Hh21jVpknnkKcQBLzhfg6K+PtH0g7kFvSdTldRIi80kjtD1wnI9py8OHr4fjhvgT8OQvTqGdlMh8QSiSphgHdv7awNs18c2JOx94nI3Cm6TIxAQF03ot5fBn8ACGaFpHXhFnBk5DDLCLmCYrMk8OxXsCCec34OivB24Vx4K4luAQOJbe3U9eZJ5BiplzPAdrfy1A+yc+R78lUZe3ixGZiEFomkIzDq+ApipL2+HM4V/rxYuyixKZryyFPoAl5wtw9Nd7ah8Yd1JbEnV5ukiReZIQ2h44zr8ATWVdmsR7w/gJeOpy4LGNddEi88VCBJrCHNj5ay3bNffPGTdvOc4kbo8iO5cRQWi9lnL6M3g4X67baJ13xTgZONW9ear9o8heVBZxPIGEyzfg+OLjt07Vb8F9S3B4q9OlXo8ie6PyiCXnozlYv9FFl7WOu7gtiXf4+OFHUWQ/pOXviwhNU2jG2RXQVPit7ThxfK71XLR3GIgie4cc/xFCOoAl5wsgsV30loTnpWr7f1U7xn7Pm7l7eBCi1WAgvslqkBW7NmMgiqwZb/GuGgxEkdUgK3ZtxkAUWTPe4l01GIgiq0FW7NqMgSiyZrzFu2owEEVWg6zYtRkDUWTNeIt31WAgiqwGWbFrMwaiyJrxFu+qwUAUWQ2yYtdmDESRNeMt3lWDgSiyGmTFrs0YiCJrxlu8qwYDUWQ1yIpdmzEQRdaMt3hXDQaiyGqQFbs2YyCKrBlv8a4aDESR1SArdm3GQBRZM97iXTUYiCKrQVbs2oyBKLJmvMW7ajAQRVaDrNi1GQNRZM14i3fVYCCKrAZZsWszBtqKTP9BkmjTZ+CnVinyf5ptawUDuFZBxJsHyQB11f/iWvVtZZ9a3f39zXeczgbJVgyqFgOqI9iCTqxLkSmgP8B1rYxi50ExQP1W5zrSdGNdi8xH9chBMij2YjDvMqB6gRJ0bn2JzAe65cC9m138MCgDqg8oQG/Wt8gUuKbQVVAmo/NXDFATrbtWoHezEJlPouRA/7XCaIEZoA7XQA+/iUlkGTiZePvbSUHjAvN8ke7hPQHi38qkq9tnsjlwILfyfPZzRxu3PAzkLp7BFljaBmev68vFOdgbRqJXdtzy6FFo8LsCZlMjvu6B+zAlOi3BAVjZI46SDwOLHSozID5BCazsCUf1a8hNGThZRYmfLXCVmYwdXzEg/kABrEz6SF8FUucCA8xAbhUxfvRqj1sedYpEXzhTnVbA0vQSer3uqhn7P90ZTE/I3jCDEl/LfwKIB28yAE/XwHLdlePPvRlQ2w8YPAEHYGUFjvpLqC0hAe+HF9VC/FjZHkeJWco4uwWaj63sDkfdvZrNmOrekXgAW2Bleqmk3WdSYUQcK9mNVab40ZRw0Vse5L8680DTu+klkoHwDzdBOHAPrOwRR0mF52AyXZQvKIGV5ThygyOQoETEkxUL+NmC4RHRYWWUHyiAle1xNO8whX6GIsgU6FVrYZpCJ7flQU4z5QWs7ICjcf01T8AiKbNiCD8lGBdJbzzj5HEN9PBYmF4G2RuhjOMyCTiQW7B19lHQunGw832UxJ0AxW9lqkv4Rf33NDQ/IxkRuLdiDz93YBQEKk6wBVamOrjm1Rz4nSSXgoMRm5pyBr3lQXwrYDU1ivdk4BLpJjwS9es1rQcs7BEngyJX8YASWJh4vu2meiMbhcQdyC1YPvvY0rqQNMk/KICVbXA0imVDr3WBhDnYG7Guqcl8ywOfM/kFVnaPo6APVK+iaTo4pCzBwagKpfw1jbXOffi5Blbrrid8JXXiu8i+kJSBE7CwAieuD6IZNwEa38LEV9pHHpMdE8JmILeoztnHnXx2QajGAVtgZXooO4m9i/xHNwbkObA3qpamtFZbHty/AlZTox5CN7qiDjVgyEzAAVjYI06SOlyoPyiBhe1xUiu+OrlcfF/IvQVaf1jYFifuPdL1OSiAhekhS9+LJ37WEQMQrTXPxqKq+NDU92rLg2uKYQUsTA9VBuK6qyMNVR4G0vUW2QMLK3HyvOVBew3iuqtypSbQkYIn4AlYWGnhBB96eOYTKM+0UqAoKdDUMmY7EPzzG3Na1ZlQNhRIa6VshCp7XndNqBTTTwWROXA/ErHlxBkX9WOVJcVLwH6gYlNcbqzcxrhfMEAxU3AYiNgUR/IixHg6BQYorF+vaf0TwuT3dgpcxhw+YIBCO5Abq2yDv7ju+qA2k/uYoidg37PY7hnfTY68mFA9BhDBEhw6FtsT4yX1Iom9J88AosjAqaXYdH86ebJigs0ZQCAzkDcUmkQa113N6b+sOxHLHOwrik2idJfFUMy2MwYQTwIOb4hNIkw6cxYHumwGENMt0HpLJtGll81IzL4XBhCW1mup2l4cTHTQ/weFezYxvTIimgAAAABJRU5ErkJggg==" alt="" class="network__body-box-item-img">
                                                        FTM
                                                    </div>
                                                    <div class="network__body-box-item item--gre-o3">
                                                        <img src="https://dxsale.app/24b1aa7727818277cec2d3d17bced5ec.png" alt="" class="network__body-box-item-img">
                                                        ONE
                                                    </div>
                                                    <div class="network__body-box-item item--yel-o1">
                                                        <img src="https://dxsale.app/be285e34c2b4be18d7f687bf77a2e004.png" alt="" class="network__body-box-item-img">
                                                        Celo
                                                    </div>
                                                    <div class="network__body-box-item item--bla">
                                                        <img src="https://dxsale.app/97ef932ba551cc59226567be32460026.png" alt="" class="network__body-box-item-img">
                                                        Arbitrum
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="network__body-box">
                                                <div class="network__body-box-title">Test Networks</div>
                                                <div class="network__body-box-list">
                                                    <div class="network__body-box-item item--bla">
                                                        <img class="network__body-box-item-img" src="data:image/png;base64,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" alt="">
                                                        Ropsten
                                                    </div>
                                                    <div class="network__body-box-item item--yel">
                                                        <img src="https://dxsale.app/914a348e586f88b728b30816eb418da9.png" alt="" class="network__body-box-item-img">
                                                        BSC TST
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="network__body-box">
                                                <div class="network__body-box-title">Coming Soon</div> 
                                                <div class="network__body-box-list">
                                                    <div class="network__body-box-item item--o-gre">
                                                        <img class="network__body-box-item-img" src="https://dxsale.app/098db440a5a02293b0a5a26f4f1fcf46.png" alt="">
                                                        Heco
                                                    </div>
                                                    <div class="network__body-box-item item--o-blu">
                                                        <img src="https://dxsale.app/1b8dba637e62daa0886c5b0a4d867615.png" alt="" class="network__body-box-item-img">
                                                        OKEx
                                                    </div>
                                                    <div class="network__body-box-item item--o-blue">
                                                        <img src="https://dxsale.app/dae3839d1c65ac02a8e5ecb7cb51ed05.png" alt="" class="network__body-box-item-img">
                                                        Moonriver
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <label for="ETH__network" class="network__control">
                                            <i class="fal fa-times"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home__login-header-item-block">
                    <div class="home__login-header-item">
                        <div class="home__login-header-item-title">ETH Balance</div>
                        <div class="home__login-header-item-btn btn btn--diss">0.0000 ETH</div>
                    </div>
                </div>
            </div>
            <!-- login  -->
            <div class="DxDrop bsd">
                <div class="DxDrop__header">
                    <div class="DxFarilxDash__find-header">
                        <div class="DxFarilxDash__find-header-logo-block">
                            <svg class="DxFarilxDash__find-header-logo sc-bdVaJa fUuvxv" fill="#000000" width="22px" height="22px" viewBox="0 0 1024 1024" rotate="0"><path d="M704 296c-74-104-145-165-192-200-46.2 32-117.2 96.2-191.6 199.6s-125.8 215.6-128.2 340c0 2.4-0.2 5-0.2 7.4 0 36.6 7.8 71.6 21.8 103.6 8.2 18.6 18.4 36 30.4 52.4 57 77.6 155.6 128.8 267.6 128.8 176.8 0 320.2-127.6 320.2-284.8 0-126.6-54-243-128-347zM531.8 822c-31.6 0-65.4-2.8-91.8-14.8 174-27.2 238-91.2 279.6-244.4 10.4 22.4 12.4 47.4 12.4 73.6 0 102.4-89.6 185.6-200.2 185.6z"></path></svg>
                        </div>
                        <h2 class="DxFarilxDash__find-header-title">DxDrop - Airdrop your token instantly!</h2>
                    </div>
                </div>
                <div class="DxDrop__body">
                    <h2 class="DxDrop__body-title">Use DxDrop to airdrop your token to all your users with the click of a button!</h2>
                    <div class="DxDrop__body-box-block row">
                        <div class="DxDrop__body-box bsd bsd--bold col-12 col-lg-6 offset-lg-3">
                            <div class="DxDrop__body-box-select">
                                <div id="drop__select__bb" class="custom-select-block">
                                    <div class="custom-title">Token Type</div>
                                    <select class="custom-select" id="select__contro" name="">
                                        <option value="1">Airdrop Tokens</option>
                                        <option value="2">Airdrop ETH</option>
                                    </select>
                                </div>
                            </div> 
                            <div class="DxDrop__body-box-list">
                                <div id="tab__show__1" class="DxDrop__body-box-item active">
                                    <div class="custom-select--desc DxDrop__body-box-details-desc">
                                        <div class="box__desc-bold">
                                            Airdrop Instructions:
                                        </div>
                                        <ul class="box__desc-list">
                                            <li class="box__desc-item">
                                                Airdrop tokens to as many users as desired
                                            </li>
                                            <li class="box__desc-item">
                                                If you are running a sale make sure tokens are not airdropped until after!
                                            </li>
                                            <li class="box__desc-item">
                                                Enter your token address first
                                            </li>
                                            <li class="box__desc-item">
                                                Enter a list of users to airdrop followed by amount (comma separated)
                                            </li>
                                        </ul>
                                        <div class="box__desc-title">
                                            Airdrop Fees: 0 nan
                                        </div>
                                    </div>
                                    <form class="DxMint__body-create-form">
                                        <div class="DxMint__body-create-form-group form__group form_v3 no-mb">
                                            <input class="form__input" placeholder="Ex. 0xF063fE1aB7a291c5d06a86e14730b00BF24cB589">
                                            <span class="form__label-wrap">
                                            <span class="form__label">Enter Token Address</span>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                                <div id="tab__show__2" class="DxDrop__body-box-item">
                                    <div class="custom-select--desc DxDrop__body-box-details-desc">
                                        <div class="box__desc-bold">
                                            Airdrop Instructions:
                                        </div>
                                        <ul class="box__desc-list">
                                            <li class="box__desc-item">
                                                Airdrop tokens to as many users as desired
                                            </li>
                                            <li class="box__desc-item">
                                                Enter a list of users to airdrop followed by amount (comma separated)
                                            </li>
                                        </ul>
                                        <div class="box__desc-title">
                                            Airdrop Fees: 0 nan
                                        </div>
                                    </div>
                                    <form class="DxMint__body-create-form">
                                        <div class="DxMint__body-create-form-group form__group form_v3 DxDrop__body-box-item--no-mb">
                                            <textarea class="form__input form__input--textarea" name="" id="" cols="30" rows="10" 
                                            placeholder="Ex.0x2b047107fcb1d600dda60071d82d4a8b7c99b6e8,10x9f8ccdafcc39f3c7d6ebf637c9151673cbc36b88,0.50x47BAcf935066b802EAA0067eC14AB035B24eB78b,0.1"></textarea>
                                            <span class="form__label-wrap">
                                            <span class="form__label form__label--mt">Enter Token Address</span>
                                            </span>
                                        </div>
                                        <div class="form__note">For best results we recommend you do a maximum of 250 Addresses at a time!</div>
                                        <div class="form__desc">
                                            Total nan being airdropped:
                                            <span class="form__desc-hot">0.0000</span>
                                        </div>
                                        <div class="DxMint__body-create-form-acti">
                                            <button class="DxMint__body-create-form-acti-btn btn btn--green">airdrop</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page  -->

        <div class="home__content-footer">
            <div class="home__content-footer-logo-block">
                <img src="https://dxsale.network/assets/media/dx-logo-200.png" alt="" class="home__content-footer-logo">
            </div>
            <div class="home__content-footer-desc">
                <a href="" class="home__content-footer-desc-text">Terms And Conditions</a>
                <a href="" class="home__content-footer-desc-text">Privacy Policy</a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        autoopen('td3', '');
    </script>
@endsection