@extends('frontend.layout.master')
@section('content')
    <div class="home__content-body mt30">
        <div class="DxFarilxStart">
            <input type="checkbox" name="" id="modal__dxf__start__input" class="modal__dxf__start__input" hidden>
            <div id="dxf__start__first" class="DxFarilxStart__open bsd">
                <div class="DxFarilxDash__open-title">Disclaimer not accepted. Please accept the disclaimer to continue!</div>
                <br> <br>
                <label onclick="dxf__Start__modal()" for="modal__dxf__start__input">
                    <span class="DxFarilxDash__open__btn btn bgr--blu">OPEN DISCLAIMER</span>
                </label>    
            </div>
            <div id="modal__dxf__start__note" class="modal">
                <label onclick="dxf__Start__modal()" id="modal__dxf__start__note__overlay" for="modal__dxf__start__input" class="modal__overlay dxf__overlay"></label>
                <div id="modal__dxf__start__note__body" class="modal__body modal__body--mr">
                    <div id="modal__dxf__start__note__content" class="DxFarilxDash__box-modal DxFarilxDash__box-modal--dxf__tb">
                        <div class="DxFarilxDash__box-modal-header">
                            Disclaimer
                        </div>
                        <div class="DxFarilxDash__box-modal-body">

                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check1" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check1" class="DxFarilxDash__start-root-desc">
                                    I have tested my token with the DxSale app on a test network. (Ex. Ropsten)
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check2" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check2" class="DxFarilxDash__start-root-desc">
                                    My token has a function to disable special transfers or has no special transfers
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check3" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check3" class="DxFarilxDash__start-root-desc">
                                    My token is not already listed on  and I have not given out any tokens to users
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check4" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check4" class="DxFarilxDash__start-root-desc">
                                    I understand what a Fair Launch is and that my personal funds will be used to provide liquidity!
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check5" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check5" class="DxFarilxDash__start-root-desc">
                                    I understand fees paid to launch a SALE are non-recoverable
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check6" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check6" class="DxFarilxDash__start-root-desc">
                                    I understand that I have to finalize my sale within 10 minutes of my selected launch time!
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check7" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check7" class="DxFarilxDash__start-root-desc">
                                    I am using DxSale as a software tool only and am alone responsible for anything I create on it
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check8" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check8" class="DxFarilxDash__start-root-desc">
                                    I understand that I am responsible for following my local laws and regulations including KYC and AML practices.
                                </label>
                            </div>
                            <div class="DxFarilxDash__start-root">
                                <input type="checkbox" id="dxfs__root__check9" class="DxFarilxDash__start-root-input">
                                <label for="dxfs__root__check9" class="DxFarilxDash__start-root-desc">
                                    I have read and agree to the terms and conditions
                                </label>
                            </div>
                            <div  class="DxFarilxDash__start-root">
                                <input onchange="dxf__start__check__root()" type="checkbox" id="dxfs__root__check10" class="DxFarilxDash__start-root-inputa">
                                <label for="dxfs__root__check10" class="DxFarilxDash__start-root-desc DxFarilxDash__start-root-desc--hot">
                                    Agree to all
                                </label>
                            </div>
                        </div>
                        <div class="DxFarilxDash__box-modal-footer">
                            <div class="DxFarilxDash__box-modal-footer-btn-block">
                                <label onclick="dxf__Start__modal()" for="modal__dxf__start__input" class="DxFarilxDash__box-modal-footer-btn btn btn--diss">cancel</label>
                            </div>
                            <div class="DxFarilxDash__box-modal-footer-btn-block">
                                <button onclick="dxf__start__sencond()" id="dxf__start__btn" class="DxFarilxDash__box-modal-footer-btn btn btn--diss">confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="dxf__start__second" class="DxFarilxStart__details">
                <div class="DxFarilxStart__details-active">
                    <div class="DxFarilxDash__active no--mr flex-column bsd">
                        <button class="DxFarilxDash__active-btn mb btn btn--blue">Connect Wallet to Start</button>
                        <div class="DxFarilxDash__active-btn-block">
                            <input type="checkbox" name="" id="dxf__start__id__qr" class="dxf__start__id__qr" hidden>
                            <label for="dxf__start__id__qr" class="DxFarilxDash__active-btn btn btn--green">
                                Walletconnect                                
                            </label>
                            <div class="modal">
                                <label for="dxf__start__id__qr" class="modal__overlay"></label>
                                <div class="modal__body">
                                    <div class="DxFarilxDash__modal-qr">
                                        <div class="DxFarilxDash__modal-qr-header">
                                            <div class="DxFarilxDash__modal-qr-header-i4">
                                                <img src="data:image/svg+xml,%3C?xml version='1.0' encoding='UTF-8'?%3E %3Csvg width='300px' height='185px' viewBox='0 0 300 185' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E %3C!-- Generator: Sketch 49.3 (51167) - http://www.bohemiancoding.com/sketch --%3E %3Ctitle%3EWalletConnect%3C/title%3E %3Cdesc%3ECreated with Sketch.%3C/desc%3E %3Cdefs%3E%3C/defs%3E %3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E %3Cg id='walletconnect-logo-alt' fill='%233B99FC' fill-rule='nonzero'%3E %3Cpath d='M61.4385429,36.2562612 C110.349767,-11.6319051 189.65053,-11.6319051 238.561752,36.2562612 L244.448297,42.0196786 C246.893858,44.4140867 246.893858,48.2961898 244.448297,50.690599 L224.311602,70.406102 C223.088821,71.6033071 221.106302,71.6033071 219.883521,70.406102 L211.782937,62.4749541 C177.661245,29.0669724 122.339051,29.0669724 88.2173582,62.4749541 L79.542302,70.9685592 C78.3195204,72.1657633 76.337001,72.1657633 75.1142214,70.9685592 L54.9775265,51.2530561 C52.5319653,48.8586469 52.5319653,44.9765439 54.9775265,42.5821357 L61.4385429,36.2562612 Z M280.206339,77.0300061 L298.128036,94.5769031 C300.573585,96.9713 300.573599,100.85338 298.128067,103.247793 L217.317896,182.368927 C214.872352,184.763353 210.907314,184.76338 208.461736,182.368989 C208.461726,182.368979 208.461714,182.368967 208.461704,182.368957 L151.107561,126.214385 C150.496171,125.615783 149.504911,125.615783 148.893521,126.214385 C148.893517,126.214389 148.893514,126.214393 148.89351,126.214396 L91.5405888,182.368927 C89.095052,184.763359 85.1300133,184.763399 82.6844276,182.369014 C82.6844133,182.369 82.684398,182.368986 82.6843827,182.36897 L1.87196327,103.246785 C-0.573596939,100.852377 -0.573596939,96.9702735 1.87196327,94.5758653 L19.7936929,77.028998 C22.2392531,74.6345898 26.2042918,74.6345898 28.6498531,77.028998 L86.0048306,133.184355 C86.6162214,133.782957 87.6074796,133.782957 88.2188704,133.184355 C88.2188796,133.184346 88.2188878,133.184338 88.2188969,133.184331 L145.571,77.028998 C148.016505,74.6345347 151.981544,74.6344449 154.427161,77.028798 C154.427195,77.0288316 154.427229,77.0288653 154.427262,77.028899 L211.782164,133.184331 C212.393554,133.782932 213.384814,133.782932 213.996204,133.184331 L271.350179,77.0300061 C273.79574,74.6355969 277.760778,74.6355969 280.206339,77.0300061 Z' id='WalletConnect'%3E%3C/path%3E %3C/g%3E %3C/g%3E %3C/svg%3E" alt="" class="DxFarilxDash__modal-qr-header-i4-img">
                                                <span class="DxFarilxDash__modal-qr-header-name">WalletConnect</span>
                                            </div>
                                            <label for="dxf__start__id__qr" class="DxFarilxDash__modal-qr-header-close">
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
                <div class="DxFarilxStart__details-stt bsd">
                    <div class="DxFarilxDash__find-header">
                        <div class="DxFarilxDash__find-header-logo-block">
                            <svg class="DxFarilxDash__find-header-logo sc-bdVaJa fUuvxv" fill="#000000" width="22px" height="22px" viewBox="0 0 1024 1024" rotate="0"><path d="M288 832h448v-544h-32v64h-384v-64h-32z M641.6 192h-33.6c0-11.2-2-22-5.4-32-4.2-12-10.6-22.8-18.8-32-17.6-19.8-43.2-32-71.8-32s-54.2 12.2-71.8 32c-8.2 9.2-14.6 20-18.8 32-3.4 10-5.4 20.8-5.4 32h-29c-17.6 0-35 12.4-35 30v98h320v-98c-0-17.6-12.8-30-30.4-30zM512 223.4c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32c0 17.6-14.4 32-32 32z M704 222c0 0.6 0 1.4 0 2v-2z M800 128h-184.2c8.2 9.2 14.6 20 18.8 32l0.2 0.2c1.6-0.2 3.4-0.2 5.2-0.2 34.6 0 62.8 27.6 64 62v0 34h64v608h-512v-608h64v-22c0-35.4 23.4-68 64-68 0.8 0 1.8 0 2.6 0 1 0 1.8 0 2.8 0 3.4-18 10.6-28.8 18.8-38h-184.2c-17.6 0-32 14.4-32 32v736c0 17.6 14.4 32 32 32h576c17.6 0 32-14.4 32-32v-736c0-17.6-14.4-32-32-32z"></path></svg>
                        </div>
                        <div class="DxFarilxDash__find-header-desc">
                            <h2 class="DxFarilxDash__find-header-title">Schedule Your FairLaunch</h2>
                            <h2 class="DxFarilxDash__find-header-text">Get started in just a few simple steps!</h2>
                        </div>
                    </div>
                    <div class="DxFarilxStart__details-stt-box">
                        Awaiting Wallet Connection...
                    </div>
                </div>
                <div class="DxFarilxStart__details-stt-end bsd">
                    Current Fees: 0.1  + 2% of Tokens ListedCurrent Fees: 
                </div>
                <form id="form__control" class="DxFarilxStart__import">
                    <div id="DxFarilxStart__import__1__banner" class="DxFarilxStart__import-item active">
                        <div onclick="return showximport(this)" id="DxFarilxStart__import__1" class="DxFarilxStart__import-item-title">
                            <div class="DxFarilxStart__import-item-title-hot">1</div>
                            Token Address
                        </div>
                        <div id="DxFarilxStart__import__1__son" class="DxFarilxStart__import-son ">
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label">Enter your token address</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 0x">
                                <div class="DxFarilxStart__import-son-desc">
                                    <div class="DxFarilxStart__import-son-desc-item">Token Name:</div>
                                    <div class="DxFarilxStart__import-son-desc-item">Token Symbol: </div>
                                    <div class="DxFarilxStart__import-son-desc-item">Token Decimal: </div>
                                </div>
                                <div class="DxFarilxStart__import-son-ac">
                                    <div onclick="return btn__prev(this)" id="DxFarilxStart__import__1__back" class="DxFarilxStart__import-son-ac btn btn--no-ac">Back</div>
                                    <div onclick="return btn__next(this)" id="DxFarilxStart__import__1__btn" class="DxFarilxStart__import-son-ac btn btn--blue">Next</div>
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
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 500">
                                <div class="DxFarilxStart__import-son-ac">
                                    <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__2__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                    <div onclick="return btn__next(this)" id="DxFarilxStart__import__2__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
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
                                    <input type="text" class="DxFarilxStart__import-son-input" placeholder="Soft Cap ex. 20">
                                </div>
                                <div class="DxFarilxStart__import-son-group">
                                    <label for="" class="DxFarilxStart__import-son-label">Hard Cap:</label>
                                    <input type="text" class="DxFarilxStart__import-son-input" placeholder="Hard Cap ex. 100">
                                </div>                                       
                            </div>
                            <div class="DxFarilxStart__import-son-ac">
                                <div onclick="return btn__prev(this)" id="DxFarilxStart__import__3__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                <div onclick="return btn__next(this)" id="DxFarilxStart__import__3__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
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
                                    <input type="text" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                                </div>
                                <div class="DxFarilxStart__import-son-group">
                                    <label for="" class="DxFarilxStart__import-son-label">Maximum Contribution Limit:</label>
                                    <input type="text" class="DxFarilxStart__import-son-input" placeholder="Maximum contribution Ex. 10">
                                </div>                                       
                            </div>
                            <div class="DxFarilxStart__import-son-ac">
                                <div onclick="return btn__prev(this)" id="DxFarilxStart__import__4__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                <div onclick="return btn__next(this)" id="DxFarilxStart__import__4__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
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
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 60">
                                <div class="DxFarilxStart__import-son-ac">
                                    <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__5__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                    <div onclick="return btn__next(this)" id="DxFarilxStart__import__5__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
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
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="Ex. 400">
                                <div class="DxFarilxStart__import-son-ac">
                                    <div onclick="return btn__prev(this)"  id="DxFarilxStart__import__6__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                    <div onclick="return btn__next(this)" id="DxFarilxStart__import__6__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
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
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://dxsale.network/assets/media/logoIcon_256.png">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Website Link:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://dxsale.network">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Github Link:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://github.com/OpenZeppelin/openzeppelin-contracts">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Twitter Link:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://twitter.com/dxsale">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Reddit Link:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://reddit.com/r/cryptocurrency">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Telegram Link:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="https://t.me/dxsale">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Project Description:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="DxSale is a completely decentralized and permissionless launchpad with instant Listing and liquidity locking!">
                            </div>
                            <div class="DxFarilxStart__import-son-group">
                                <label for="" class="DxFarilxStart__import-son-label no-mb">Any update you want to provide to participants:</label>
                                <input type="text" class="DxFarilxStart__import-son-input" placeholder="Join us on twitter for a special airdrop giveaway!">
                            </div>
                            <div class="DxFarilxStart__import-son-ac">
                                <div onclick="return btn__prev(this)" id="DxFarilxStart__import__7__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                <div onclick="return btn__next(this)" id="DxFarilxStart__import__7__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">Next</div>
                            </div>
                        </div>
                    </div>
                    <div id="DxFarilxStart__import__8__banner" class="DxFarilxStart__import-item active">
                        <div onclick="return showximport(this)" id="DxFarilxStart__import__8" class="DxFarilxStart__import-item-title">
                            <div class="DxFarilxStart__import-item-title-hot">8</div>
                            Uniswap Listing Rate
                        </div>
                        <div id="DxFarilxStart__import__8__son" class="DxFarilxStart__import-son none">
                            <div class="DxFarilxStart__import-son-title">Please set the start and end time for the following parameters!</div>
                            <div class="DxFarilxStart__import-son-title">Presale Start/End Time</div>
                            <div class="DxFarilxStart__import-son-group-block">
                                <div class="DxFarilxStart__import-son-group">
                                    <input type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                                </div>
                                <div class="DxFarilxStart__import-son-group">
                                    <input type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Maximum contribution Ex. 10">
                                </div>                                       
                            </div>
                            <div class="DxFarilxStart__import-son-title">Liquidity Lockup Time</div>
                            <div class="DxFarilxStart__import-son-group-block">
                                <div class="DxFarilxStart__import-son-group half">
                                    <input type="datetime-local" class="DxFarilxStart__import-son-input" placeholder="Minimum contribution Ex. 0.1">
                                </div>
                            </div>
                            <div class="DxFarilxStart__import-son-ac">
                                <div onclick="return btn__prev(this)" id="DxFarilxStart__import__8__back" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Back</div>
                                <div id="DxFarilxStart__import__8__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">FINISH</div>
                            </div>
                        </div>
                    </div>
                    <div id="DxFarilxStart__import9__banner" class="DxFarilxStart__import-item active">
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
                            <td class="DxFarilxStart__table-td">500</td>
                            <td class="DxFarilxStart__table-td"></td>
                            <td class="DxFarilxStart__table-td"></td>
                        </tr>
                        <tr class="DxFarilxStart__table-tr">
                            <td class="DxFarilxStart__table-td">Soft/Hard Caps (ETH)</td>
                            <td class="DxFarilxStart__table-td">Soft Cap: 1</td>
                            <td class="DxFarilxStart__table-td">Hard Cap: 2</td>
                            <td class="DxFarilxStart__table-td"></td>
                        </tr>
                        <tr class="DxFarilxStart__table-tr">
                            <td class="DxFarilxStart__table-td">Contribution Limits (ETH)</td>
                            <td class="DxFarilxStart__table-td">Min: 0.1</td>
                            <td class="DxFarilxStart__table-td">Max: 10</td>
                            <td class="DxFarilxStart__table-td"></td>
                        </tr>
                        <tr class="DxFarilxStart__table-tr">
                            <td class="DxFarilxStart__table-td">Presale Timings</td>
                            <td class="DxFarilxStart__table-td"></td>
                            <td class="DxFarilxStart__table-td">Starts: 1 OCT 2021 at 08:35</td>
                            <td class="DxFarilxStart__table-td">Ends: 6 OCT 2021 at 08:35</td>
                        </tr>
                        <tr class="DxFarilxStart__table-tr">
                            <td class="DxFarilxStart__table-td">Uniswap Liquidity</td>
                            <td class="DxFarilxStart__table-td">60%</td>
                            <td class="DxFarilxStart__table-td"></td>
                            <td class="DxFarilxStart__table-td">Unlocks: 7 NOV 2021 at 08:35</td>
                        </tr>
                        <tr class="DxFarilxStart__table-tr">
                            <td class="DxFarilxStart__table-td">Uniswap Rate (Per ETH)</td>
                            <td class="DxFarilxStart__table-td">400</td>
                            <td class="DxFarilxStart__table-td"></td>
                            <td class="DxFarilxStart__table-td"></td>
                        </tr>
                    </table>         
                    <div class="DxFarilxStart__import-son-ac">
                        <div id="DxFarilxStart__edit" class="DxFarilxStart__import-son-ac-item btn btn--no-bgr">Edit</div>
                        <div id="DxFarilxStart__import10__btn" class="DxFarilxStart__import-son-ac-item btn btn--blue">SUBMIT</div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        autoopen('td5', 'faircreatesale');
    </script>
@endsection