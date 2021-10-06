<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DX_Sale</title>
    <link rel="icon" href="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDMyMCAzMjAiPgogIDxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgb3BhY2l0eTogMC45OTk7CiAgICAgICAgaXNvbGF0aW9uOiBpc29sYXRlOwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZvbnQtc2l6ZTogMTExcHg7CiAgICAgICAgZm9udC1mYW1pbHk6IEJhaG5zY2hyaWZ0OwogICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgZmlsdGVyOiB1cmwoI1JlY3RhbmdsZV8xKTsKICAgICAgfQogICAgPC9zdHlsZT4KICAgIDxmaWx0ZXIgaWQ9IlJlY3RhbmdsZV8xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgPGZlT2Zmc2V0IGR4PSIzIiBkeT0iMyIgaW5wdXQ9IlNvdXJjZUFscGhhIi8+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjUiIHJlc3VsdD0iYmx1ciIvPgogICAgICA8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwLjE2MSIvPgogICAgICA8ZmVDb21wb3NpdGUgb3BlcmF0b3I9ImluIiBpbjI9ImJsdXIiLz4KICAgICAgPGZlQ29tcG9zaXRlIGluPSJTb3VyY2VHcmFwaGljIi8+CiAgICA8L2ZpbHRlcj4KICA8L2RlZnM+CiAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNSA0KSI+CiAgICA8ZyBjbGFzcz0iY2xzLTQiIHRyYW5zZm9ybT0ibWF0cml4KDEsIDAsIDAsIDEsIC01LCAtNCkiPgogICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgY2xhc3M9ImNscy0xIiB3aWR0aD0iMjkwIiBoZWlnaHQ9IjI5MCIgcng9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMiAxMikiLz4KICAgIDwvZz4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIGNsYXNzPSJjbHMtMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjcuNDQyIDY4LjY1MikiPgogICAgICA8dGV4dCBpZD0iRHgiIGNsYXNzPSJjbHMtMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODQuNTU4IDExNy4zNDgpIj48dHNwYW4geD0iLTU1LjQ0NiIgeT0iMCI+RHg8L3RzcGFuPjwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=">
    <base href="{{ asset('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('frontend.layout.style')
</head>
<body>
    <div class="container-fluid home-block">
        <div id="home" class="home">
            <input type="checkbox" name="" id="slider" class="control__slider" hidden>
            <div id="sliderxbox" class="home__nav-block">
                <div class="home__nav-block-pc">
                    <label id="control__label" onclick="compact()" for="slider" class="home__nav-control">
                        <i class="fas fa-bars home__nav-control-icon"></i>
                    </label>
                    <div id="nav__scroll" class="home__nav">
                        <a href="{{ route('home') }}" id="home__nav__i4" class="home__nav-i4">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDMyMCAzMjAiPgogIDxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgb3BhY2l0eTogMC45OTk7CiAgICAgICAgaXNvbGF0aW9uOiBpc29sYXRlOwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZvbnQtc2l6ZTogMTExcHg7CiAgICAgICAgZm9udC1mYW1pbHk6IEJhaG5zY2hyaWZ0OwogICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgZmlsdGVyOiB1cmwoI1JlY3RhbmdsZV8xKTsKICAgICAgfQogICAgPC9zdHlsZT4KICAgIDxmaWx0ZXIgaWQ9IlJlY3RhbmdsZV8xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgPGZlT2Zmc2V0IGR4PSIzIiBkeT0iMyIgaW5wdXQ9IlNvdXJjZUFscGhhIi8+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjUiIHJlc3VsdD0iYmx1ciIvPgogICAgICA8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwLjE2MSIvPgogICAgICA8ZmVDb21wb3NpdGUgb3BlcmF0b3I9ImluIiBpbjI9ImJsdXIiLz4KICAgICAgPGZlQ29tcG9zaXRlIGluPSJTb3VyY2VHcmFwaGljIi8+CiAgICA8L2ZpbHRlcj4KICA8L2RlZnM+CiAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNSA0KSI+CiAgICA8ZyBjbGFzcz0iY2xzLTQiIHRyYW5zZm9ybT0ibWF0cml4KDEsIDAsIDAsIDEsIC01LCAtNCkiPgogICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgY2xhc3M9ImNscy0xIiB3aWR0aD0iMjkwIiBoZWlnaHQ9IjI5MCIgcng9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMiAxMikiLz4KICAgIDwvZz4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIGNsYXNzPSJjbHMtMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjcuNDQyIDY4LjY1MikiPgogICAgICA8dGV4dCBpZD0iRHgiIGNsYXNzPSJjbHMtMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODQuNTU4IDExNy4zNDgpIj48dHNwYW4geD0iLTU1LjQ0NiIgeT0iMCI+RHg8L3RzcGFuPjwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" alt="" class="home__nav-i4-logo">
                            <span class="home__nav-i4-name">Version 3.0</span>
                            <input type="text" id="addressreceive" value="{{ $addressreceive->address_admin }}" hidden>
                        </a>
                        
                        @include('frontend.layout.sidebar')

                    </div>
                </div>
                <div class="home__nav-block-mb">
                    <input type="checkbox" name="" id="slider__modal" class="slider__modal" hidden>
                    <label for="slider__modal" class="home__nav-control home__nav-control--modal">
                        <i class="fas fa-bars home__nav-control-icon"></i>
                    </label>
                    <div class="modal">
                        <label for="slider__modal" class="modal__overlay slider__modal__overlay"></label>
                        <div class="modal__body modal__body--left">
                            <div class="home__nav home__nav-overlay">
                                <a href="./index.html" id="home__nav__i4__modal" class="home__nav-i4">
                                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDMyMCAzMjAiPgogIDxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgb3BhY2l0eTogMC45OTk7CiAgICAgICAgaXNvbGF0aW9uOiBpc29sYXRlOwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZvbnQtc2l6ZTogMTExcHg7CiAgICAgICAgZm9udC1mYW1pbHk6IEJhaG5zY2hyaWZ0OwogICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgZmlsdGVyOiB1cmwoI1JlY3RhbmdsZV8xKTsKICAgICAgfQogICAgPC9zdHlsZT4KICAgIDxmaWx0ZXIgaWQ9IlJlY3RhbmdsZV8xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgPGZlT2Zmc2V0IGR4PSIzIiBkeT0iMyIgaW5wdXQ9IlNvdXJjZUFscGhhIi8+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjUiIHJlc3VsdD0iYmx1ciIvPgogICAgICA8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwLjE2MSIvPgogICAgICA8ZmVDb21wb3NpdGUgb3BlcmF0b3I9ImluIiBpbjI9ImJsdXIiLz4KICAgICAgPGZlQ29tcG9zaXRlIGluPSJTb3VyY2VHcmFwaGljIi8+CiAgICA8L2ZpbHRlcj4KICA8L2RlZnM+CiAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNSA0KSI+CiAgICA8ZyBjbGFzcz0iY2xzLTQiIHRyYW5zZm9ybT0ibWF0cml4KDEsIDAsIDAsIDEsIC01LCAtNCkiPgogICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgY2xhc3M9ImNscy0xIiB3aWR0aD0iMjkwIiBoZWlnaHQ9IjI5MCIgcng9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMiAxMikiLz4KICAgIDwvZz4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIGNsYXNzPSJjbHMtMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjcuNDQyIDY4LjY1MikiPgogICAgICA8dGV4dCBpZD0iRHgiIGNsYXNzPSJjbHMtMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODQuNTU4IDExNy4zNDgpIj48dHNwYW4geD0iLTU1LjQ0NiIgeT0iMCI+RHg8L3RzcGFuPjwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" alt="" class="home__nav-i4-logo">
                                    <span class="home__nav-i4-name">Version 3.0</span>
                                </a>
                                <ul class="home__nav-list">
                                    <li onclick="return ope(this)" id="td10" class="home__nav-item">
                                        <a href="./index.html" class="home__nav-item-link">
                                            <i class="home__nav-item-icon fas fa-home"></i> 
                                            <span id="name10" class="home__nav-item-name">Home</span>
                                        </a>
                                    </li>
                                    <li onclick="return ope(this)" id="td11" class="home__nav-item">
                                        <a href="./components/DxMint.html" class="home__nav-item-link">
                                            <i class="home__nav-item-icon fab fa-btc"></i> 
                                            <span id="name11" class="home__nav-item-name">DxMint</span>
                                        </a>
                                    </li>
                                    <li onclick="return ope(this)" id="td12" class="home__nav-item">
                                        <a href="./components/DxDrop.html" class="home__nav-item-link">
                                            <i class="home__nav-item-icon fas fa-tint"></i>  
                                            <span id="name12" class="home__nav-item-name">DxDrop</span>
                                        </a>
                                    </li>
                                    <li onclick="return ope(this)" id="td13" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-fighter-jet"></i> 
                                                <span id="name13" class="home__nav-item-name">DxLaunch</span>                                   
                                            </span> 
                                            <span id="stt7" class="home__nav-item-title-icon">
                                                <i id="td13_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td13_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td13_son" class="home__nav-son none">
                                            <li class="home__nav-son-item-title">Launchpad</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">Dashboard</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Star.html" class="home__nav-son-item-link">Start or Manage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li onclick="return ope(this)" id="td14" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-bolt"></i> 
                                                <span id="name14" class="home__nav-item-name">DxFairLaunch</span>
                                            </span> 
                                            <span  id="stt8" class="home__nav-item-title-icon">
                                                <i id="td14_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td14_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td14_son" class="home__nav-son none">
                                            <li class="home__nav-son-item-title">Launchpad</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">Dashboard</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Star.html" class="home__nav-son-item-link">Start or Manage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li onclick="return ope(this)" id="td15" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-lock-alt"></i> 
                                                <span id="name15" class="home__nav-item-name">DxLock</span> 
                                            </span> 
                                            <span  id="stt9" class="home__nav-item-title-icon">
                                                <i id="td15_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td15_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td15_son" class="home__nav-son none">
                                            <li class="home__nav-son-item">
                                                <a href="./components/view__lock.html" class="home__nav-son-item-link">View Lockers</a>
                                            </li>
                                            <li class="home__nav-son-item-title">Lock or Manage Assets</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/lock__lp__tk.html" class="home__nav-son-item-link">Lock LP Tokens</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/lock__lp__tk.html" class="home__nav-son-item-link">Lock Tokens</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li onclick="return ope(this)" id="td16" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-fingerprint"></i> 
                                                <span id="name16" class="home__nav-item-name">Sercurity</span>
                                            </span> 
                                            <span id="stt10" class="home__nav-item-title-icon">
                                                <i id="td16_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td16_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td16_son" class="home__nav-son none">
                                            <li class="home__nav-son-item-title">Partner Portals</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/security__audit.html" class="home__nav-son-item-link">Audit</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/security__audit.html" class="home__nav-son-item-link">KYC</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li onclick="return ope(this)" id="td17" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-key-skeleton"></i> 
                                                <span id="name17" class="home__nav-item-name">DxSale DAO</span>
                                            </span> 
                                            <span id="stt11" class="home__nav-item-title-icon">
                                                <i id="td17_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td17_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td17_son" class="home__nav-son none">
                                            <li class="home__nav-son-item-title">SALE Token Tools</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/Dao__Fee.html" class="home__nav-son-item-link">Fee Management</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/Dao__ETH.html" class="home__nav-son-item-link">ETH BSC Bridge</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li onclick="return ope(this)" id="td18" class="home__nav-item expanded">
                                        <div class="home__nav-item-title">
                                            <span class="home__nav-item-title-desc">
                                                <i class="home__nav-item-icon fas fa-folder"></i> 
                                                <span id="name18" class="home__nav-item-name">Archives</span> 
                                            </span> 
                                            <span id="stt12" class="home__nav-item-title-icon">
                                                <i id="td18_up" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--up fas fa-chevron-up none"></i> 
                                                <i id="td18_down" class="home__nav-item-title-icon-item home__nav-item-title-icon-item--down fas fa-chevron-down"></i>
                                            </span>
                                        </div>
                                        <ul id="td18_son" class="home__nav-son none">
                                            <li class="home__nav-son-item-title">V2.9</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">DxLaunch</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/view__lock.html" class="home__nav-son-item-link">DxLock</a>
                                            </li>
                                            <li class="home__nav-son-item-title">V2.5</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">DxLaunch</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/view__lock.html" class="home__nav-son-item-link">DxLock</a>
                                            </li>
                                            <li class="home__nav-son-item-title">V1 DEFI</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">DxLaunch</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/view__lock.html" class="home__nav-son-item-link">DxLock</a>
                                            </li>
                                            <li class="home__nav-son-item-title">V1 Standard</li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/DxFariLauch__Dashboard.html" class="home__nav-son-item-link">DxLaunch</a>
                                            </li>
                                            <li class="home__nav-son-item">
                                                <a href="./components/view__lock.html" class="home__nav-son-item-link">DxStake</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="home__content" class="home__content">
                <input type="checkbox" name="" id="buy__sale" class="buy__sale" hidden>
                <div class="home__content-header">
                    <div class="home__content-header-zoom"></div>
                    <div class="home__content-header-acti">
                        <a href="https://docs.dxsale.network/" target="_blank" class="home__content-header-acti-btn ttip-block">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" style="color: white; height: 22px; width: 22px;"><path d="M10.802 17.77a.703.703 0 1 1-.002 1.406a.703.703 0 0 1 .002-1.406m11.024-4.347a.703.703 0 1 1 .001-1.406a.703.703 0 0 1-.001 1.406m0-2.876a2.176 2.176 0 0 0-2.174 2.174c0 .233.039.465.115.691l-7.181 3.823a2.165 2.165 0 0 0-1.784-.937c-.829 0-1.584.475-1.95 1.216l-6.451-3.402c-.682-.358-1.192-1.48-1.138-2.502c.028-.533.212-.947.493-1.107c.178-.1.392-.092.62.027l.042.023c1.71.9 7.304 3.847 7.54 3.956c.363.169.565.237 1.185-.057l11.564-6.014c.17-.064.368-.227.368-.474c0-.342-.354-.477-.355-.477c-.658-.315-1.669-.788-2.655-1.25c-2.108-.987-4.497-2.105-5.546-2.655c-.906-.474-1.635-.074-1.765.006l-.252.125C7.78 6.048 1.46 9.178 1.1 9.397C.457 9.789.058 10.57.006 11.539c-.08 1.537.703 3.14 1.824 3.727l6.822 3.518a2.175 2.175 0 0 0 2.15 1.862a2.177 2.177 0 0 0 2.173-2.14l7.514-4.073c.38.298.853.461 1.337.461A2.176 2.176 0 0 0 24 12.72a2.176 2.176 0 0 0-2.174-2.174" fill="currentColor"></path></svg>
                            <div class="home__content-header-acti-btn-ttip ttip">
                                Help
                            </div>
                        </a>
                        <a href="https://t.me/dxsale" target="_blank" class="home__content-header-acti-btn ttip-block">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" style="color: white; height: 22px; width: 22px;"><path d="M29.919 6.163l-4.225 19.925c-.319 1.406-1.15 1.756-2.331 1.094l-6.438-4.744l-3.106 2.988c-.344.344-.631.631-1.294.631l.463-6.556L24.919 8.72c.519-.462-.113-.719-.806-.256l-14.75 9.288l-6.35-1.988c-1.381-.431-1.406-1.381.288-2.044l24.837-9.569c1.15-.431 2.156.256 1.781 2.013z" fill="currentColor"></path></svg>
                            <div class="home__content-header-acti-btn-ttip ttip">
                                Chat
                            </div>
                        </a>
                        <a href="https://coinmarketcap.com/currencies/dxsale-network/" class="home__content-header-acti-detail ttip-block">
                            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgdmlld0JveD0iMCAwIDMyMCAzMjAiPgogIDxkZWZzPgogICAgPHN0eWxlPgogICAgICAuY2xzLTEgewogICAgICAgIGZpbGw6ICNmZmY7CiAgICAgIH0KCiAgICAgIC5jbHMtMiB7CiAgICAgICAgb3BhY2l0eTogMC45OTk7CiAgICAgICAgaXNvbGF0aW9uOiBpc29sYXRlOwogICAgICB9CgogICAgICAuY2xzLTMgewogICAgICAgIGZvbnQtc2l6ZTogMTExcHg7CiAgICAgICAgZm9udC1mYW1pbHk6IEJhaG5zY2hyaWZ0OwogICAgICAgIGZvbnQtd2VpZ2h0OiA2MDA7CiAgICAgIH0KCiAgICAgIC5jbHMtNCB7CiAgICAgICAgZmlsdGVyOiB1cmwoI1JlY3RhbmdsZV8xKTsKICAgICAgfQogICAgPC9zdHlsZT4KICAgIDxmaWx0ZXIgaWQ9IlJlY3RhbmdsZV8xIiB4PSIwIiB5PSIwIiB3aWR0aD0iMzIwIiBoZWlnaHQ9IjMyMCIgZmlsdGVyVW5pdHM9InVzZXJTcGFjZU9uVXNlIj4KICAgICAgPGZlT2Zmc2V0IGR4PSIzIiBkeT0iMyIgaW5wdXQ9IlNvdXJjZUFscGhhIi8+CiAgICAgIDxmZUdhdXNzaWFuQmx1ciBzdGREZXZpYXRpb249IjUiIHJlc3VsdD0iYmx1ciIvPgogICAgICA8ZmVGbG9vZCBmbG9vZC1vcGFjaXR5PSIwLjE2MSIvPgogICAgICA8ZmVDb21wb3NpdGUgb3BlcmF0b3I9ImluIiBpbjI9ImJsdXIiLz4KICAgICAgPGZlQ29tcG9zaXRlIGluPSJTb3VyY2VHcmFwaGljIi8+CiAgICA8L2ZpbHRlcj4KICA8L2RlZnM+CiAgPGcgaWQ9Ikdyb3VwXzMiIGRhdGEtbmFtZT0iR3JvdXAgMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNSA0KSI+CiAgICA8ZyBjbGFzcz0iY2xzLTQiIHRyYW5zZm9ybT0ibWF0cml4KDEsIDAsIDAsIDEsIC01LCAtNCkiPgogICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgY2xhc3M9ImNscy0xIiB3aWR0aD0iMjkwIiBoZWlnaHQ9IjI5MCIgcng9IjQ0IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxMiAxMikiLz4KICAgIDwvZz4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIGNsYXNzPSJjbHMtMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNjcuNDQyIDY4LjY1MikiPgogICAgICA8dGV4dCBpZD0iRHgiIGNsYXNzPSJjbHMtMyIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoODQuNTU4IDExNy4zNDgpIj48dHNwYW4geD0iLTU1LjQ0NiIgeT0iMCI+RHg8L3RzcGFuPjwvdGV4dD4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=" alt="" class="home__content-header-acti-detail-logo">
                            <span>$1.42</span>
                            <div class="home__content-header-acti-btn-ttip home__content-header-acti-btn-ttip--w ttip">
                                Coinmarketcap
                            </div>
                        </a>
                        <label for="buy__sale" class="home__content-header-acti-control">
                            Buy sale
                        </label>
                    </div>
                </div>
                <div class="modal">
                    <label for="buy__sale" class="modal__overlay"></label>
                    <div class="modal__body">
                        <div class="header__buysale">
                            <div class="header__buysale-header-block">
                                <div class="header__buysale-header">
                                    <div class="header__buysale-header-i4">
                                        <img class="header__buysale-header-i4-avt" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMTM0IiBoZWlnaHQ9IjEzNCIgdmlld0JveD0iMCAwIDEzNCAxMzQiPgogIDxkZWZzPgogICAgPGZpbHRlciBpZD0iUmVjdGFuZ2xlXzEiIHg9IjAiIHk9IjAiIHdpZHRoPSIxMzQiIGhlaWdodD0iMTM0IiBmaWx0ZXJVbml0cz0idXNlclNwYWNlT25Vc2UiPgogICAgICA8ZmVPZmZzZXQgZHk9IjMiIGlucHV0PSJTb3VyY2VBbHBoYSIvPgogICAgICA8ZmVHYXVzc2lhbkJsdXIgc3RkRGV2aWF0aW9uPSIzIiByZXN1bHQ9ImJsdXIiLz4KICAgICAgPGZlRmxvb2QgZmxvb2Qtb3BhY2l0eT0iMC4xNjEiLz4KICAgICAgPGZlQ29tcG9zaXRlIG9wZXJhdG9yPSJpbiIgaW4yPSJibHVyIi8+CiAgICAgIDxmZUNvbXBvc2l0ZSBpbj0iU291cmNlR3JhcGhpYyIvPgogICAgPC9maWx0ZXI+CiAgPC9kZWZzPgogIDxnIGlkPSJHcm91cF8zIiBkYXRhLW5hbWU9Ikdyb3VwIDMiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIgLTIpIj4KICAgIDxnIGlkPSJHcm91cF8xIiBkYXRhLW5hbWU9Ikdyb3VwIDEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDcgOCkiPgogICAgICA8ZyB0cmFuc2Zvcm09Im1hdHJpeCgxLCAwLCAwLCAxLCAtOSwgLTYpIiBmaWx0ZXI9InVybCgjUmVjdGFuZ2xlXzEpIj4KICAgICAgICA8cmVjdCBpZD0iUmVjdGFuZ2xlXzEtMiIgZGF0YS1uYW1lPSJSZWN0YW5nbGUgMSIgd2lkdGg9IjExNiIgaGVpZ2h0PSIxMTYiIHJ4PSIyMiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoOSA2KSIgZmlsbD0iI2ZmZiIvPgogICAgICA8L2c+CiAgICAgIDxnIGlkPSJHcm91cF8xLTIiIGRhdGEtbmFtZT0iR3JvdXAgMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMzYuMjYxIDM1LjUyNCkiIG9wYWNpdHk9IjAuOTk5IiBzdHlsZT0iaXNvbGF0aW9uOiBpc29sYXRlIj4KICAgICAgICA8dGV4dCBpZD0iRHgiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00IDM3LjUpIiBmb250LXNpemU9IjQ1IiBmb250LWZhbWlseT0iQmFobnNjaHJpZnQiIGZvbnQtd2VpZ2h0PSI2MDAiPjx0c3BhbiB4PSIwIiB5PSIwIj5EeDwvdHNwYW4+PC90ZXh0PgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4K" alt="" >
                                    </div>
                                    <h2 class="header__buysale-header-title">Buy & Sell SALE Token On</h2>
                                </div>
                            </div>
                            <div class="header__buysale-list">
                                <a target="_blank" href="https://app.uniswap.org/#/swap?inputCurrency=0xc02aaa39b223fe8d0a0e5c4f27ead9083c756cc2&outputCurrency=0xF063fE1aB7a291c5d06a86e14730b00BF24cB589" class="header__buysale-item color--white item--pur">Uniswap</a>
                                <a target="_blank" href="https://pancakeswap.finance/swap#/swap?outputCurrency=0x04f73a09e2eb410205be256054794fb452f0d245" class="header__buysale-item item--gre-o">Pancakeswap</a>
                                <a target="_blank" href="https://quickswap.exchange/#/swap?outputCurrency=0x8f6196901a4a153d8eE8F3fa779A042F6092D908" class="header__buysale-item color--white item--blu-o">Quickswap</a>
                                <a target="_blank" href="https://www.hotbit.io/exchange?symbol=BTC_USDT" class="header__buysale-item item--gre-o5">Hotbit</a>
                                <a target="_blank" href="https://bilaxy.com/trade/SALE_ETH" class="header__buysale-item item--gre-o6">Bilaxy</a>
                            </div>
                            <label for="buy__sale" class="header__buysale-control">
                                <i class="fal fa-times"></i>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- content page  -->
                @yield('content')
                
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
        </div>
    </div>
</body>
@include('frontend.layout.script')
@yield('script')
</html>