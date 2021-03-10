@extends('sticky.layout.master')


@push('head')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
    <style>
        .cc_title {
            font-size: 23px;
            font-weight: bold;
            width: auto;
            padding-bottom: 10px;
            text-align: center;
            color: black;
        }

        .switch-field {
            display: flex;
            overflow: hidden;
            border-radius: 30px;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            border: 0;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #b6bdc3b3;
            color: #fff;
            font-size: 14px;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: none;
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked + label {
            background-color: #320b82 !important;
            box-shadow: none;
        }

        .switch-field label:first-of-type {
            /*border-top-left-radius: 30px;*/
            /*border-bottom-left-radius: 30px;*/
        }

        .switch-field label:last-of-type {
            /*border-top-right-radius: 30px;*/
            /*border-bottom-right-radius: 30px;*/
        }

        [type="radio"]:checked + .switch-field label:before, [type="radio"]:not(:checked) + .switch-field label:before, .switch-field label:before {
            width: 0px !important;
            height: 0px !important;
            border: none !important;
        }

        [type="radio"]:checked + .switch-field label:after, [type="radio"]:not(:checked) + .switch-field label:after, .switch-field label:after {
            width: 0px !important;
            height: 0px !important;
            border: none !important;
        }


        .modal--safari-required .modal__container {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-top: -152px;
            margin-left: -215px;
            padding: 40px 50px;
            width: 430px;
            min-height: 304px;
            background: #fff;
            border-radius: 3px;
            -webkit-box-shadow: 0 2px 13px 0 #444;
            box-shadow: 0 2px 13px 0 #444;
            -webkit-font-smoothing: antialiased;
        }

        .onoffswitch {
            position: relative;
            width: 93px;
            height: 22px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
        }

        .onoffswitch-checkbox {
            display: none;
        }

        .onoffswitch-label {
            display: block;
            overflow: hidden;
            cursor: pointer;
            border-radius: 5px;
        }

        .onoffswitch-inner {
            display: block;
            width: 200%;
            margin-left: -100%;
            transition: margin 0.3s ease-in 0s;
        }

        .onoffswitch-inner:before, .onoffswitch-inner:after {
            display: block;
            float: left;
            width: 50%;
            height: 32px;
            padding: 0;
            font-size: 14px;
            color: black;
            font-weight: bold;
            box-sizing: border-box;
        }

        .onoffswitch-inner:after {
            content: "{{__('yearly')}}  ";
            padding-left: 6px;
            background-color: #320b82;
            color: #FFFFFF;
        }

        .onoffswitch-inner:before {
            content: "{{__('monthly')}}  ";
            padding-left: 6px;
            background-color: #888;
            color: #000;
            text-align: left;
        }

        .onoffswitch-switch {
            display: block;
            width: 12px;
            height: 12px;
            margin: 5px;
            background: #FFFFFF;
            position: absolute;
            top: 4px;
            bottom: 0;
            right: 5px;
            border: 2px solid #FFFFFF;
            border-radius: 20px;
            transition: all 0.3s ease-in 0s;
        }

        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
            margin-left: 0;
        }

        .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
            right: 0px;
        }


        .purchase_summary {
            background: #f1f1f1;
            padding: 35px 0;
        }

        .widget-wrapper {
            width: 860px;
            margin: auto;
            margin-top: 20px;
        }

        #badges-line {
            width: 860px;
            margin: 0 auto;
            padding-bottom: 40px;
        }

        .payment-badge-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
        }

        .payment-badge-block .payment-badge--business {
            width: 78px;
            height: 79px;
            cursor: default;
            background-image: url(https://static-ak.pdffiller.com/img/payment-page/sprites/badges-sprite-db9768a434.png);
            background-position: -253px -5px;

        }

        .payment-badge-block .payment-badge--godaddy {
            width: 132px;
            height: 31px;
            cursor: default;
            background-image: url(https://static-ak.pdffiller.com/img/payment-page/sprites/badges-sprite-db9768a434.png);
            background-position: -111px -5px;
        }

        .payment-badge-block .payment-badge--trustpilot {
            width: 103px;
            height: 60px;
            background-image: url(https://static-ak.pdffiller.com/img/payment-page/sprites/badges-sprite-db9768a434.png);
            background-position: -341px -5px;
        }

        .payment-badge-block .payment-badge {
            display: inline-block;
            background-repeat: no-repeat;
        }

        .payment-badge-block .payment-badge--trustpilot {
            width: 103px;
            height: 60px;
            background-image: url(https://static-ak.pdffiller.com/img/payment-page/sprites/badges-sprite-db9768a434.png);
            background-position: -341px -5px;
        }

        .free-trial-accent {
            color: #320b82;
        }

        .nav-items {
            width: 100%;
        }

        .ana .nav .nav-item .nav-link {
            padding: 11px !important;
            font-size: 17px;
        }

        .stick .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff !important;
            background: #320b82 !important;
        }

        .stick .nav .nav-item .nav-link {
            padding: 5px;
            color: #000;
            font-weight: bold;
            border: 4px solid #320b82;
            background: #fff;
            border-radius: 2px;
            text-align: center;
            width: 96%;
            height: 60px;
            margin: auto;
        }

        .ana .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff !important;
            background: #320b82 !important;
        }

        .ana .nav .nav-item .nav-link {
            padding: 5px;
            color: #000;
            font-weight: bold;
            border: 4px solid #320b82;
            background: #fff;
            border-radius: 2px;
            text-align: center;
            width: 96%;
            height: 60px;
            margin: auto;
        }

        .payment-steps-ul {
            text-align: left;
            padding-left: 20px;
            font-size: 16px;
            height: 100%;
            margin: 0;
        }

        .payment-steps-ul li {
            list-style: disc;
            font-size: 15px;
            padding: 5px 0;
            color: #000;
        }

        .stick .card {
            border: 0 !important;
        }

        .ana .card {
            border: 0 !important;
        }

        .card-header {
            background: #fff;
            border: 0 !important;
        }

        .box_shadow {
            border-radius: 0 !important;
        }

        .formbg-white {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
        }

        .form-control {
            height: 38px !important;
        }

        .payment-steps-colbg {
            font-weight: bold;
            text-align: center;
            background: #320b82;
            color: #fff;
            font-size: 24px;
            height: 53px;
            justify-content: center;
            align-items: center;
            display: flex;
        }

        .subscribe-btn {
            font-size: 22px;
            background: #320b82;
            border: none !important;
            color: #fff;
            height: 38px;
        }

        .subscribe-btn-com {
            line-height: 1;
            font-size: 22px;
            color: #fff;
            height: 38px;
            background: linear-gradient(90deg, #33a3fb, #7c07bd);
            border: none !important;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .fs-16 {
            font-size: 16px;
        }

        .fs-10 {
            font-size: 10px;
            line-height: 1.8;
        }

        .switch-div:hover .switch-text-div {
            position: absolute;
            left: 180px;
            top: -5px;
            visibility: visible;
            opacity: 1;
            transform: translateX(0%) translateY(0px);
            width: 225px;
            padding: 11px 15px;
            font-size: 12px;
            z-index: 22;
            text-align: left;
            border: 1px solid #320b82;
            background: #fff;
            border-radius: 3px;
            height: 255px;
            color: #000;
        }

        .switchbtn-mov {
            background: #320b82 !important;
            color: #fff !important;
        }

        .switch-div .switch-text-div {
            position: absolute;
            bottom: 0;
            visibility: hidden;
            opacity: 0;
        }

        .switch-div .switch-text-div::before {
            content: '';
            position: absolute;
            display: block;
            width: 0px;
            left: 4px;
            top: 25px;
            border: 10px solid transparent;
            border-left: 0;
            border-right: 15px solid #320b82;
            transform: translate(calc(-100% - 5px), -50%);
        }

        .circle-div:hover .info-mark__content {
            position: absolute;
            left: 39px;
            top: -11px;
            visibility: visible;
            opacity: 1;
            transform: translateX(0%) translateY(0px);
            width: 180px;
            padding: 11px 14px;
            font-size: 12px;
            z-index: 22;
            text-align: left;
            border: 1px solid #320b82;
            background: #fff;
            border-radius: 3px;
            height: 185px;
            color: #000;
        }

        .circle-div .info-mark__content {
            position: absolute;
            bottom: 0;
            visibility: hidden;
            opacity: 0;
        }

        .circle-div .info-mark__content::before {
            content: '';
            position: absolute;
            display: block;
            width: 0px;
            left: 4px;
            top: 25px;
            border: 10px solid transparent;
            border-left: 0;
            border-right: 15px solid #320b82;
            transform: translate(calc(-100% - 5px), -50%);
        }

        .first-charge-text {
            position: relative;
        }

        .credit-ul {
            font-size: 10px;
            line-height: 2;
            padding: 0;
        }

        [data-title]:hover:after {
            opacity: 1;
            transition: all 0.1s ease 0.5s;
            visibility: visible;
        }

        [data-title]:after {
            content: attr(data-title);
            background-color: #00FF00;
            color: #111;
            font-size: 150%;
            position: absolute;
            padding: 1px 5px 2px 5px;
            bottom: -1.6em;
            left: 100%;
            white-space: nowrap;
            box-shadow: 1px 1px 3px #222222;
            opacity: 0;
            border: 1px solid #111111;
            z-index: 99999;
            visibility: hidden;
        }

        [data-title] {
            position: relative;
        }

        .stick .apple-pay-button {
            width: 145px;
            margin-left: -6px;
            height: 52px;
            background: url(https://static-ak.pdffiller.com/img/payment-page/svg/apple-pay-payment-mark.svg) #000 50% no-repeat;
            border-radius: 3px;
            margin-top: -4px;
        }

        .stick .google-pay-button {
            width: 142px;
            display: block;
            height: 52px;
            margin-top: -4px;
            margin-left: -5px;
            background: url(https://static-ak.pdffiller.com/img/payment-page/svg/android-pay-caption.svg) 50% no-repeat #fff;
            border: 1px solid #ddd;
            border-radius: 2px;
        }

        .ana .google-pay-button {
            width: 145px;
            display: block;
            height: 52px;
            margin-top: -11px;
            margin-right: -6px;
            margin-left: -11px;
            background: url(https://static-ak.pdffiller.com/img/payment-page/svg/android-pay-caption.svg) 50% no-repeat #fff;
            border: 1px solid #ddd;
            border-radius: 2px;
        }

        .ana .apple-pay-button {
            width: 148px;
            margin-left: -13px;
            margin-right: -9px;
            height: 52px;
            background: url(https://static-ak.pdffiller.com/img/payment-page/svg/apple-pay-payment-mark.svg) #000 50% no-repeat;
            border-radius: 3px;
            margin-top: -11px;
        }

        .paypal-button.paypal-button-color-blue {
            background: #009cde;
            color: #fff;
        }

        .paypal-button-label-container {
            display: inline-flex;
            margin-top: 5px;
        }

        .purchase-summary__partners-titles .bold {
            font-weight: 700;
            font-size: 12px;
        }

        .purchase-summary__partners-titles .main-partners {
            color: #9c33c3;
        }

        .summary-purchase-subscription-name {
            display: block;
            margin: 0 0 14px;
            font-size: 16px;
            line-height: 24px;
            color: #333;
            font-weight: 700;
        }

        .summary-purchase-current-charge {
            margin: 0 0 14px;
            font-size: 20px;
            line-height: 20px;
            font-weight: 700;
            color: #320b82;
            -webkit-font-smoothing: antialiased;
        }

        .summary-purchase-period__note {
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #888;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #320b82;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(55px);
            -ms-transform: translateX(55px);
            transform: translateX(55px);
        }

        /*------ ADDED CSS ---------*/
        .on {
            display: none;
        }

        .on, .off {
            color: white;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 10px;
            font-family: Verdana, sans-serif;
        }

        input:checked + .slider .on {
            display: block;
        }

        input:checked + .slider .off {
            display: none;
        }

        /*--------- END --------*/

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .circle-div i {
            color: #320b82;
        }

        .pos-rel {
            position: relative;
        }

        @media (max-width: 567px) {
            .payment-page-section-subtitle {
                font-size: 15px;
            }

            .js-mobile-start {
                justify-content: start;
            }

            .summary-purchase-current-charge {
                padding-top: 5px;
            }

            .col {
                padding: 0;
            }

            .stick .apple-pay-button {
                width: 97px;
            }

            .stick .google-pay-button {
                width: 96px;
            }

            .stick .visa-class {
                margin-top: 8px;
                width: 77px;
                margin-left: -2px;
            }

            .stick .meeza-class {
                padding: 5px 10px;
            }

            .ana .apple-pay-button {
                width: 106px;
            }

            .ana .google-pay-button {
                width: 105px;
            }

            .ana .visa-class {
                margin-top: 9px;
                width: 95px;
                margin-left: -2px;
            }

            .ana .meeza-class {
                padding: 5px 10px;
            }

            .mob-a-class {
                width: 104px !important;
            }

            .mob-class {
                width: 35px;
                margin-top: 5px;
            }

            .no-padding {
                padding: 0;
            }
        }

        .mainBg {
            background: linear-gradient(90deg, #320b82, #9c33c3);
            color: #fff;
        }

        .tag-line {
            color: #310150;
            background: #eee;
        }

        .red {
            color: red;
        }

        .pkTitle {
            font-size: 15px;
            color: #fff;
        }

        .servicePackage {
            cursor: pointer;
        }

        .glow {
            color: #fff;
            text-align: center;
            -webkit-animation: glow 1s ease-in-out infinite alternate;
            -moz-animation: glow 1s ease-in-out infinite alternate;
            animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
            from {
                text-shadow: 0 0 50px #ff4da6;
            }
            to {
                text-shadow: 0 0 10px #ff4da6;
            }
        }

        .payButton {
            background: linear-gradient(90deg, #320b82, #9c33c3);
            color: #fff !important;
            font-size: 20px;
        }
        .nav .nav-item .nav-link {
            color: #000;
            background: #ccc;
            font-size: 17px;
            padding: 8px 25px;
            border-radius: 0px !important;
        }

        .w-30 {
            width: 30%;
        }
    </style>
    <style>
        @media (max-width: 567px) {
            .oauth-wrap {
                top: 7% !important;
                left: 0% !important;
            }

            .flex-accordion {
                height: auto !important;

            }

            .flex-accordion ul li.is-open {
                height: 560px;
            }
        }

        .flex-accordion {
            width: 100%;
            height: 500px;
            padding: 10px 0;
        }

        #content {
            width: 100% !important;
            padding-bottom: 0 !important;
        }

        .custom-control {
            display: flex;
            align-items: center;
        }

        .custom-control-label {
            line-height: 1.3;
        }

        .custom-control-label::before {
            right: 0;
            left: -22px;
            top: 0;
        }

        .pure-checkbox input[type="checkbox"] + label:before, .pure-radiobutton input[type="checkbox"] + label:before, .pure-checkbox input[type="radio"] + label:before, .pure-radiobutton input[type="radio"] + label:before {
            top: 50%;
        }

        .oauth-wrap .oauth-form .nav-tabs li {
            padding: 0px !important;
        }

        .oauth-wrap .oauth-form .nav-tabs li > a {
            padding: 2px;
            border-radius: 5px 5px 0px 0px;
        }

        .site-header.header-one {
            background: linear-gradient(-145deg, #320b82 0, #9c33c3 100%) !important;
        }

        @media (min-width: 567px) {
            body {
                font-size: 16px;
                color: #777b92;
            }

            a:active,
            a:hover,
            a:focus,
            a:visited {
                text-decoration: none;
            }

            .page-wrapper {
                position: relative;
                margin: 0 auto;
                width: 100%;
                min-width: 300px;
            }


            hr.style-one {
                margin: 0;
                border-top: 1px solid #EAEAEA;
            }

            .block-title {
                margin-bottom: 15px;
            }

            .block-title h2 {
                margin: 0;
                color: #320b82;
                font-size: 46px;
                margin-top: 10px;
                font-weight: 400;
            }

            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff;
            }

            .scroll-to-top {
                display: inline-block;
                width: 45px;
                height: 45px;
                background: #320b82;
                border-radius: 4px;
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 99;
                text-align: center;
                transition: all .4s ease;
                display: none;
            }

            .scroll-to-top i {
                font-size: 18px;
                line-height: 45px;
                color: #fff;
            }

            .scroll-to-top:hover {
                background: #273167;
            }

            .header-navigation {
                background-color: transparent;
                margin-bottom: 0;
                border: none;
                border-radius: 0;
                padding: 7px 0;
                position: relative;
                background-color: transparent;
            }

            .header-navigation .container {
                background: transparent;
                position: relative;
                display: block;
            }

            .header-navigation .container .navbar-brand {
                height: auto;
                margin: 0;
            }

            .header-navigation .container .menu-toggler {
                display: none;
            }

            .header-navigation .container .right-side-box {
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
                right: 15px;
            }

            .header-navigation .main-navigation {
                float: right;
                text-align: right;
            }

            @media (min-width: 1200px) {
                .header-navigation .main-navigation {
                    display: block !important;
                }
            }

            .header-navigation ul.navigation-box {
                margin: 0;
                padding: 0;
                list-style: none;
                display: flex;
                align-items: center;
            }

            .header-navigation ul.navigation-box li a .sub-nav-toggler {
                display: none;
            }

            .header-navigation ul.navigation-box > li {
                position: relative;
                padding: 0px 0;
                display: inline-block;
                vertical-align: middle;
                /* Second Level Menu */
                /* Thrid Level Menu */
            }

            .header-navigation ul.navigation-box > li:first-child {
                padding-left: 0;
            }

            .header-navigation ul.navigation-box > li:last-child {
                padding-right: 0;
            }

            .header-navigation ul.navigation-box > li > a {
                font-weight: 500;
                font-size: 16px;
                color: #777B92;
                padding: 0;
                transition: all .4s ease;
                position: relative;
            }

            .header-navigation ul.navigation-box > li.current > a:before, .header-navigation ul.navigation-box > li:hover > a:before {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transform-origin: left center;
                transform-origin: left center;
            }

            .header-navigation ul.navigation-box > li > .sub-menu {
                position: absolute;
                top: 100%;
                left: 0;
                z-index: 1000;
                float: left;
                min-width: 220px;
                padding: 0px 0px;
                text-align: left;
                list-style: none;
                background-color: #273167;
                background-clip: padding-box;
                opacity: 0;
                border-radius: 0px;
                visibility: hidden;
                transition: opacity .4s ease, visibility .4s ease;
                box-shadow: 0px 10px 18px rgba(0, 0, 0, 0.1);
            }

            @media (min-width: 1200px) {
                .header-navigation ul.navigation-box > li > .sub-menu {
                    display: block !important;
                }
            }
            .header-navigation ul.navigation-box > li > .sub-menu.right-align {
                left: auto;
                right: 0;
            }

            .header-navigation ul.navigation-box > li > .sub-menu.center-align {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li {
                display: block;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li + li {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li > a {
                font-size: 15px;
                color: #fff;
                font-weight: 500;
                padding: 12px 30px;
                display: block;
                line-height: 26px;
                white-space: nowrap;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > .sub-menu > li:hover > a {
                color: #273167;
                background: #fff;
            }

            .header-navigation ul.navigation-box > li:hover:before {
                -webkit-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transform-origin: left bottom;
                transform-origin: left bottom;
            }

            .header-navigation ul.navigation-box > li:hover > .sub-menu {
                opacity: 1;
                visibility: visible;
            }

            .header-navigation ul.navigation-box > li > ul > li {
                /* no more nested showen */
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu {
                position: absolute;
                top: 0%;
                left: 100%;
                z-index: 1000;
                float: left;
                min-width: 220px;
                padding: 0px 0px;
                text-align: left;
                list-style: none;
                background-color: #273167;
                background-clip: padding-box;
                opacity: 0;
                border-radius: 0px;
                visibility: hidden;
                transition: opacity .4s ease, visibility .4s ease;
                box-shadow: 0px 10px 18px rgba(0, 0, 0, 0.1);
            }

            @media (min-width: 1200px) {
                .header-navigation ul.navigation-box > li > ul > li > .sub-menu {
                    display: block !important;
                }
            }
            .header-navigation ul.navigation-box > li > ul > li > .sub-menu.right-align {
                left: auto;
                right: 100%;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu.center-align {
                left: 50%;
                -webkit-transform: translateX(-50%);
                transform: translateX(-50%);
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li {
                display: block;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li + li {
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li > a {
                font-size: 15px;
                color: #fff;
                font-weight: 500;
                padding: 12px 30px;
                display: block;
                line-height: 26px;
                white-space: nowrap;
                position: relative;
                transition: all .4s ease;
            }

            .header-navigation ul.navigation-box > li > ul > li > .sub-menu > li:hover > a {
                color: #273167;
                background: #fff;
            }

            .header-navigation ul.navigation-box > li > ul > li:hover > .sub-menu {
                opacity: 1;
                visibility: visible;
            }

            .header-navigation ul.navigation-box > li > ul > li ul {
                display: none;
            }

            .header-navigation.stricky-fixed {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 991;
                background: #273167;
                border-bottom: 0;
            }

            .site-header.header-one {
                background-color: transparent;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 99;
            }

            .site-header.header-one .header-navigation {
                background: transparent;
            }

            .site-header.header-one .header-navigation.stricky-fixed {
                background-color: #fff;
                box-shadow: 0px 5px 30px 0px rgba(233, 79, 202, 0.05);
            }

            .site-header.header-one .header-navigation ul.navigation-box > li.current > a,
            .site-header.header-one .header-navigation ul.navigation-box > li:hover > a {
                color: #E94FCA;
            }

            .site-header.header-one .header-navigation .header-btn {
                vertical-align: middle;
                border-radius: 5px;
                background-color: white !important;
                color: #320B82 !important;
                font-size: 16px;
                font-weight: 500;
                padding: 2px 6px 3px !important;
                line-height: 1.3;
            }

            .site-header.header-one .header-navigation.stricky-fixed ul.navigation-box > li {
                padding: 3px 0;
            }

            .site-header.home-page-two .header-navigation.stricky-fixed {
                background-image: linear-gradient(-145deg, #320b82 0%, #9c33c3 100%);
                box-shadow: 0px 10px 60px 0px rgba(0, 0, 0, 0.15);
            }

            .site-header.home-page-two .header-navigation ul.navigation-box > li > a {
                color: #fff;
            }

            .site-header.home-page-two .header-navigation ul.navigation-box > li.current > a,
            .site-header.home-page-two .header-navigation ul.navigation-box > li:hover > a {
                color: #fff;
            }

            .site-header.home-page-two .header-navigation .right-side-box .header-btn:hover {
                color: #fff;
                background-color: #E94FCA;
                border-color: #E94FCA;
            }

        }

        .nav-tabs .nav-link {
            border: none;
        }

        .oauth-wrap .oauth-form .nav-tabs .active {
            color: #fff;
        }

        #myTab1 .active {
            background: linear-gradient(90deg, #33a3fb, #7c07bd)
        }

        #myTab2 .active {
            background: linear-gradient(90deg, #FF9800, #f8f900)
        }

        #myTab3 .active {
            background: linear-gradient(90deg, #369e36, #c2fc03)
        }

        #myTab4 .active {
            background: linear-gradient(90deg, #e09d0d, #d707f3)
        }

        label {
            direction: ltr;
        }

        .pure-checkbox {
            font-size: 12px;
        }

        .lds-ring {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;
        }

        .lds-ring img {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 64px;
            height: 64px;
            margin: 8px;
            border-radius: 50%;
            animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #fff transparent transparent transparent;
        }

        @keyframes lds-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .model-tabs {
            background-color: #f3eaf7;
            padding: 2px 11px;
            border-radius: 3px;
        }

        .line-h-2 {
            line-height: 2;
        }

        .line-h-1 {
            line-height: 1.8;
        }

        .alig-it {
            align-items: center;
        }

        .colo-r {
            color: red;
        }

        .f-s-15 {
            font-size: 15px;
        }

        .f-s-10 {
            font-size: 10px;
        }

        .m-0 {
            margin: 0;
        }

        .t-d-u {
            text-decoration: underline;

        }

        .color-b {
            color: #673ab7;
        }

        .f-w-b {
            font-weight: bold;
        }

        .back-l {
            background: linear-gradient(90deg, #320b82, #9c33c3);
        }

        .m-a {
            margin: auto;
        }

        .bor-n {
            border: none;
        }

        .colo-w {
            color: white;
        }

        .pad-12 {
            padding: 12px;
        }

        .hei-36 {
            height: 36px;
        }

        .pad-20-10 {
            padding: 20px 10px;
        }

        .m-15-0 {
            margin: 15px 0;
        }

        .text-ali {
            text-align: center;
        }

        .dis-n {
            display: none;
        }

        .mar-t-4 {
            margin-top: 4px;
        }

        .backg {
            background: rgba(0, 0, 0, 0.7);
        }

        .pad-t-60 {
            padding-top: 40px;
        }

        .close-btn {
            position: absolute;
            top: 18px;
            right: 12px;
        }

        .logo {
            width: 49px;
            z-index: 10;
        }

        .colo-y {
            color: #f9c412;
        }

        .dir-l {
            direction: ltr;
        }

        .f-s-12 {
            font-size: 12px;
        }

        .hei-24 {
            height: 24px;
        }

        .just-cont-c {
            justify-content: center;
        }

        .just-cont-sp {
            justify-content: space-between;
        }

        .wid-100 {
            width: 100%;
        }

        .dis-f {
            display: flex;

        }

        .flex-dir-c {
            flex-direction: column;
        }

        .hei-35 {
            height: 35px;

        }

        .bor-r-5 {
            border-radius: 5px;
        }

        .f-s-r {
            font-size: 1.5rem;
        }

        .f-w-600 {
            font-weight: 600;
        }

        .backg-w {
            background: #f9c412 !important;
        }

        .mar-r-15 {
            margin-right: 15px;
        }

        .mar-l-15 {
            margin-left: 15px;
        }

        .wid-192 {
            width: 192px;
        }

        .text-mauv-footer {
            color: #320b82 !important;
            font-weight: 800;
            margin-top: 5rem;
        }

        label {
            margin-bottom: 0;
        }

        #pills-register {
            border-radius: 30px;
            font-family: Cairo;
            color: #FFFFF0;
            background: linear-gradient(90deg, #320b82, #9c33c3);

        }

        .lh-15 {
            line-height: 1.5;
        }

        #payment-iframe {
            width: 100vw;
            height: 100vh;
            border: none;
            padding-top: 100px;
        }
    </style>
    <style>

        .loader {
            top: 50vh !important;
            bottom: 50vh !important;
            left: 50vw;
            right: 50vw;
            display: none;
            background: linear-gradient(90deg, #33a3fb, #7c07bd);
            color: #7c07bd;
            font-size: 6rem;
            text-indent: -9999em;
            overflow: hidden;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            margin: 72px auto;
            position: absolute;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
            animation: load6 1.7s infinite ease, round 1.7s infinite ease;
            z-index: 999999999999999999;
        }

        @-webkit-keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }
            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }
            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }
            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }

        @keyframes load6 {
            0% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            5%,
            95% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
            10%,
            59% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
            }
            20% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
            }
            38% {
                box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
            }
            100% {
                box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
            }
        }

        @-webkit-keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes round {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>
    <style>
        .btn-secondary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #320b82;
        }
    </style>
    <style>
    .nav-item {
        margin: 4px;
    }
    .btn-secondary {
        color: #000;
        background-color: #ccc;
        border-color: #ccc;
    }
     .sticky-active-background{
        background: linear-gradient(90deg,#320b82, #9c33c3 )!important;
        color: #fff!important;
        border:none;
    }
    .autoactivity-active-background{
        background: linear-gradient(90deg, #e09d0d, #d707f3)!important;
        color: #fff!important;
        border:none;
    }
    .analyze-active-background{
        background: linear-gradient(90deg, #7c07bd, #33a3fb)!important;
        color: #fff!important;    
        border:none;
    }
    .family-active-background{
        background: linear-gradient(90deg, #FF9800, #f8f900)!important;
        color: #000!important;
        border:none;
    }
    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: none;
    }
    .priceGroup{
        direction:ltr!important;
    }
    @media(max-width:567px){
      .purchase_summary {
            padding: 20px;
        }
     .cc_title{
         text-align:start;
     }    
    }
</style>

@endpush



@section('body')
    <div class="loader">

    </div>

    <!--<----------------------------------Packages--------------------------------------------->

    <div class="cardSection mt-5 {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}" id="choose_payment">

        <div class="container p-0">
            <div id="payment-container" class="row mx-0 justify-content-center">
                <div class="col-md-12 mx-auto p-0 mt-5">
                    <ul class="nav nav-pills nav-justified flex-column flex-sm-row mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active sticky-active-background" onclick="ChangeBg(this.id)" id="pills-sticky-tab" data-toggle="pill" href="#pills-sticky" role="tab" aria-controls="pills-sticky" aria-selected="true">{{__('stickyposts')}}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" onclick="ChangeBg(this.id)" id="pills-auto-tab" data-toggle="pill" href="#pills-auto" role="tab" aria-controls="pills-auto" aria-selected="false">{{__('b_AutoActivity')}}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" onclick="ChangeBg(this.id)" id="pills-analayzer-tab" data-toggle="pill" href="#pills-analayzer" role="tab" aria-controls="pills-analayzer" aria-selected="false">{{__('b_Competitors')}}</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" onclick="ChangeBg(this.id)" id="pills-family-tab" data-toggle="pill" href="#pills-family" role="tab" aria-controls="pills-family" aria-selected="false">{{__('b_FamilyService')}}</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-sticky" role="tabpanel" aria-labelledby="pills-sticky-tab">
                        <div class="row justify-content-center">
                          @foreach($packages as $package)
                           @if ($package->slug=='econimcal' || $package->slug=='special' || $package->slug=='professional' || $package->slug=='super-professional')
                             <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 my-2">
                                    <div class="single-pricing-one">
                                        <div class="top-block priceContainer" dir="ltr">
                                            <h2 class="mainBg">
                                                <input class="package" type="radio"
                                                       value="{{$package->slug}}" id="{{$package->slug}}"
                                                       name="package" data-slug="{{$package->slug}}"
                                                       data-price-annually="{{$package->price_annually}}"
                                                       data-price-monthly="{{$package->price_monthly}}"
                                                       required>
                                                <label for="{{$package->id}}" class="pkTitle">{{$package->info['title'] ??''}}</label>
                                            </h2>
                                            <p class="price m-0" dir="ltr"> {{$package->price_annually}} EGP </p>
                                            <div data-package-id="{{$package->slug}}"
                                                 class="my-2 justify-content-center btn-group btn-group-toggle priceGroup"
                                                 data-toggle="buttons" >


                                                <label data-period="yearly"
                                                       class="btn btn-sm btn-secondary active">
                                                    <input type="radio" value="yearly" name="options"
                                                           id="option1" autocomplete="off"
                                                           checked> {{__('yearly')}}
                                                </label>
                                                <label data-period="monthly"
                                                       class="btn btn-sm btn-secondary">
                                                    <input type="radio" value="monthly" name="options"
                                                           id="option2"
                                                           autocomplete="off"> {{__('monthly')}}
                                                </label>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="feature-lists text-start mx-2" dir="ltr">

                                            @foreach($package->info['features']??[] as $feature)
                                                <li><span class="red">*</span>{{$feature}}</li>
                                            @endforeach

                                        </ul>
                                        <div class="bottom-block">
                                            <h5 class="tag-line text-center">{!!__('fam-No Extra')!!}
                                                </h5>
                                            <p>{{__('fam-Extra Free Trial')}}</p>
                                        </div>
                                    </div>

                                </div>  
                           @endif
                          @endforeach  
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-auto" role="tabpanel" aria-labelledby="pills-auto-tab">
                        <div class="row justify-content-center">
                          @foreach($packages as $package)
                           @if ($package->slug=='econimcal-autoactivity' || $package->slug=='special-autoactivity')
                             <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 my-2">
                                    <div class="single-pricing-one">
                                        <div class="top-block priceContainer" dir="ltr">
                                            <h2 class="mainBg">
                                                <input class="package" type="radio"
                                                       value="{{$package->slug}}" id="{{$package->slug}}"
                                                       name="package" data-slug="{{$package->slug}}"
                                                       data-price-annually="{{$package->price_annually}}"
                                                       data-price-monthly="{{$package->price_monthly}}"
                                                       required>
                                                <label for="{{$package->id}}" class="pkTitle">{{$package->info['title'] ??''}}</label>
                                            </h2>
                                            <p class="price m-0" dir="ltr"> {{$package->price_annually}} EGP </p>
                                            <div data-package-id="{{$package->slug}}"
                                                 class="my-2 justify-content-center btn-group btn-group-toggle priceGroup"
                                                 data-toggle="buttons" >


                                                <label data-period="yearly"
                                                       class="btn btn-sm btn-secondary active">
                                                    <input type="radio" value="yearly" name="options"
                                                           id="option1" autocomplete="off"
                                                           checked> {{__('yearly')}}
                                                </label>
                                                <label data-period="monthly"
                                                       class="btn btn-sm btn-secondary">
                                                    <input type="radio" value="monthly" name="options"
                                                           id="option2"
                                                           autocomplete="off"> {{__('monthly')}}
                                                </label>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="feature-lists text-start mx-2" dir="ltr">

                                            @foreach($package->info['features']??[] as $feature)
                                                <li><span class="red">*</span>{{$feature}}</li>
                                            @endforeach

                                        </ul>
                                        <div class="bottom-block">
                                            <h5 class="tag-line text-center">{!!__('fam-No Extra')!!}
                                                </h5>
                                            <p>{{__('fam-Extra Free Trial')}}</p>
                                        </div>
                                    </div>

                                </div>  
                           @endif
                          @endforeach  
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-analayzer" role="tabpanel" aria-labelledby="pills-analayzer-tab">
                          <div class="row justify-content-center">
                          @foreach($packages as $package)
                           @if ($package->slug=='econimcal-analyzer' || $package->slug=='special-analyzer' || $package->slug=='professional-analyzer')
                             <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 my-2">
                                    <div class="single-pricing-one">
                                        <div class="top-block priceContainer" dir="ltr">
                                            <h2 class="mainBg">
                                                <input class="package" type="radio"
                                                       value="{{$package->slug}}" id="{{$package->slug}}"
                                                       name="package" data-slug="{{$package->slug}}"
                                                       data-price-annually="{{$package->price_annually}}"
                                                       data-price-monthly="{{$package->price_monthly}}"
                                                       required>
                                                <label for="{{$package->id}}" class="pkTitle">{{$package->info['title'] ??''}}</label>
                                            </h2>
                                            <p class="price m-0" dir="ltr"> {{$package->price_annually}} EGP </p>
                                            <div data-package-id="{{$package->slug}}"
                                                 class="my-2 justify-content-center btn-group btn-group-toggle priceGroup"
                                                 data-toggle="buttons" >


                                                <label data-period="yearly"
                                                       class="btn btn-sm btn-secondary active">
                                                    <input type="radio" value="yearly" name="options"
                                                           id="option1" autocomplete="off"
                                                           checked> {{__('yearly')}}
                                                </label>
                                                <label data-period="monthly"
                                                       class="btn btn-sm btn-secondary">
                                                    <input type="radio" value="monthly" name="options"
                                                           id="option2"
                                                           autocomplete="off"> {{__('monthly')}}
                                                </label>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                        <ul class="feature-lists text-start mx-2" dir="ltr">

                                            @foreach($package->info['features']??[] as $feature)
                                                <li><span class="red">*</span>{{$feature}}</li>
                                            @endforeach

                                        </ul>
                                        <div class="bottom-block">
                                            <h5 class="tag-line text-center">{!!__('fam-No Extra')!!}
                                                </h5>
                                            <p>{{__('fam-Extra Free Trial')}}</p>
                                        </div>
                                    </div>

                                </div>  
                           @endif
                          @endforeach  
                        </div>
                      </div>
                      <div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
                         <div class="row justify-content-center">
                                      @foreach($packages as $package)
                                       @if ($package->slug=='family')
                                         <div class="col-sm-12 col-md-3 col-lg-3 col-xs-12 my-2">
                                                <div class="single-pricing-one">
                                                    <div class="top-block priceContainer" dir="ltr">
                                                        <h2 class="mainBg">
                                                            <input class="package" type="radio"
                                                                   value="{{$package->slug}}" id="{{$package->slug}}"
                                                                   name="package" data-slug="{{$package->slug}}"
                                                                   data-price-annually="{{$package->price_annually}}"
                                                                   data-price-monthly="{{$package->price_monthly}}"
                                                                   required>
                                                            <label for="{{$package->id}}" class="pkTitle" style="color:#000;">{{$package->info['title'] ??''}}</label>
                                                        </h2>
                                                        <p class="price m-0" dir="ltr"> {{$package->price_annually}} EGP </p>
                                                        <div data-package-id="{{$package->slug}}"
                                                             class="my-2 justify-content-center btn-group btn-group-toggle priceGroup"
                                                             data-toggle="buttons" >


                                                            <label data-period="yearly"
                                                                   class="btn btn-sm btn-secondary active">
                                                                <input type="radio" value="yearly" name="options"
                                                                       id="option1" autocomplete="off"
                                                                       checked> {{__('yearly')}}
                                                            </label>
                                                            <label data-period="monthly"
                                                                   class="btn btn-sm btn-secondary">
                                                                <input type="radio" value="monthly" name="options"
                                                                       id="option2"
                                                                       autocomplete="off"> {{__('monthly')}}
                                                            </label>
                                                        </div>
                                                        <div class="line"></div>
                                                    </div>
                                                    <ul class="feature-lists text-start mx-2" dir="ltr">

                                                        @foreach($package->info['features']??[] as $feature)
                                                            <li><span class="red">*</span>{{$feature}}</li>
                                                        @endforeach

                                                    </ul>
                                                    <div class="bottom-block">
                                                        <h5 class="tag-line text-center">{!!__('fam-No Extra')!!}
                                                            </h5>
                                                        <p>{{__('fam-Extra Free Trial')}}</p>
                                                    </div>
                                                </div>

                                            </div>  
                                       @endif
                                      @endforeach  
                                    </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<----------------------------------switch to Premium--------------------------------------------->
        <div class="purchase_summary {{  getCurrentLangIdiom() == 'ar' ? 'text-right'  : '' }}" id="purchase">
            <div class="cc_title pt-md-4 pt-2" id="subscription-form">
                {{__('p1')}}
            </div>
            <div class="payment-page-section-subtitle js-free-trial-subtitle d-flex justify-content-center">
                <p class="first-charge-text">  {{__('p2')}} <span class="free-trial-accent font-weight-bold">{{__('p24')}}  </span> {{__('p3')}}
                <div class="circle-div pl-2 pos-rel d-lg-block d-none">
                    <i class="fa fa-question-circle"></i>
                    <div class="info-mark__content">
                        <div class="info-mark__info-title font-weight-bold lh-15">{{__('p4')}}  </div>
                        <ul class="credit-ul">
                            <li>{{__('p6')}}  </li>
                            <li>{{__('p7')}}  </li>
                        </ul>
                    </div>
                </div>
                </p>
            </div>
            <div class="summary m-auto">
                <div class="container px-md-1 px-0">
                    <div class="row justify-content-center js-mobile-start">
                        <div class="col-md-3 col-12 px-sm-0">
                            <p class="summary-purchase-subscription-name">{{__('p8')}}  </p>
                        </div>
                        <div class="col-md-7 col-12 text-start px-sm-0">
                            <div class="form__row-column">
                                <div class="show-month">
                                    <p class="summary-purchase-subscription-name">
                                        <span class="purchase-summary__name-accent js-subscription-plan-period">{{__('p9')}}  </span>
                                </div>
                                <div class="show-year" style="display:none">
                                    <p class="summary-purchase-subscription-name">
                                        <span class="purchase-summary__name-accent js-subscription-plan-period">{{__('p10')}}  </span>
                                        <span class="purchase-summary__signnow-title purchase-summary__partners-titles purchase-summary__partners-titles--small"
                                              style="display: none;">
                                <span class="main-partners text-nowrap"><span class="bold">{{__('p11')}}  </span></span>
                                <span class="text-nowrap">&amp; <span class="bold">{{__('p12')}}  </span></span>
                            </span>
                                    </p>
                                </div>
                                <div class="row m-auto">
                                    <div class="col-md-6 p-0">
                                        <div class="summary-purchase-switch-to-premium purchase-summary__premium-plan-benefits">
                                            <div class="purchase-summary__partners-titles purchase-summary__partners-titles--small">
                                                <p class="mb-0">{{__('p13')}}  </p>

                                                <span class="main-partners text-nowrap"><span
                                                            class="bold">{{__('p11')}}  </span></span>
                                                <span class="text-nowrap">&amp; <span
                                                            class="bold">{{__('p12')}}  </span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 p-0">
                                        <div class="switch-div pos-rel pl-md-2 pl-0">
                                            <button type="button" class="btn-Premium  btn btn-secondary switchbtn-mov">{{__('p23')}}  </button>
                                            <div class="switch-text-div d-lg-block d-none">
                                                <div class="signnow-offer-title fs-10 font-weight-bold">{{__('p15')}}  </div>
                                                <div class="signnow-offer-text fs-10">{{__('p16')}} <span
                                                            class="nobr">{{__('p17')}}  </span> {{__('p18')}}  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="summary-purchase-current-charge mt-3">{{__('p19')}}
                                        <span class="summary-purchase-current-charge-value">0.00 $</span></p>
                                </div>
                                <div class="summary-purchase-switch-to-premium__action">

                                    <div class="signnow-offer-details" style="display: none;">
                                        <div class="signnow-offer-title">{{__('p15')}}  </div>
                                        <div class="signnow-offer-text">{{__('p16')}}
                                        <span class="nobr">{{__('p17')}}  </span> {{__('p18')}}  </div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-purchase-period row m-auto">
                                <div class="show-month col-md-6 p-0">
                                    <div class="summary-purchase-period__note">

                                        <span class="js-charge-amount pr-1">{{__('p20')}}</span>
                                        <span class="js-charge-amount pr-1">30 $</span>
                                        <span class="js-charge-amount-notice"></span>
                                        <span class="js-charge-period summary-purchase-period__charge"> {{__('p21')}}  </span>
                                        <div class="js-charge-amount-notice-text summary-purchase-period__tax-note"></div>
                                    </div>
                                </div>
                                <div class="show-year col-md-6 p-0" style="display:none">
                                    <div class="summary-purchase-period__note">
                                        {{__('p20')}} <span class="js-charge-amount pr-1">30 $</span>
                                        <span class="js-charge-amount-notice"></span>
                                        <span class="js-charge-period summary-purchase-period__charge"> {{__('p22')}}  </span>
                                        <div class="js-charge-amount-notice-text summary-purchase-period__tax-note"></div>
                                    </div>
                                </div>
                                <div class="plans-period-switcher-area col-md-6 p-0">
                                    <div class="row align-items-center mx-md-2 mx-auto">
                                        <div class="switch-field">

                                            <div class="justify-content-center btn-group btn-group-toggle premiumToggle"
                                                 data-toggle="buttons">
                                                <label id="premiumToggleYearly" data-period="yearly"
                                                       class="btn btn-sm btn-secondary active">
                                                    <input type="radio" value="yearly" name="options2" id="option11"
                                                           autocomplete="off" checked> {{__('yearly')}}
                                                </label>
                                                <label id="premiumToggleMonthly" data-period="monthly"
                                                       class="btn btn-sm btn-secondary">
                                                    <input type="radio" value="monthly" name="options2" id="option22"
                                                           autocomplete="off"> {{__('monthly')}}
                                                </label>
                                            </div>


                                        </div>
                                        <div class="show-year" style="display:none">
                                            <div class="plan-period-switcher__caption js-plan-period-caption"></div>
                                            <div class="plan-period-switcher__discount js-plan-period-discount mx-3 text-black">
                                                70% {{__('p25')}}  </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--<----------------------------------Pay Button--------------------------------------------->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center my-4">
                <a id="payment-button" class="btn payButton w-100" href="javascript:loadPayment()">
                    {{__('pay')}} <i class="fa fa-lock"></i>
                </a>
            </div>
        </div>
    </div>

    <!--<----------------------------------Payment Methods--------------------------------------------->
@endsection

@push('scripts')
    <script>
        let selectedPackage = {period: "monthly", "priceMonthly": 0, "priceAnnually": 0};
        let currentprice = 0;

        function updateUi($period) {
            if ($period === "monthly") {
                $("#premiumToggleMonthly").addClass("active")
                $("#premiumToggleYearly").removeClass("active")
                currentprice = selectedPackage.priceMonthly
            } else {
                currentprice = selectedPackage.priceAnnually;
                $("#premiumToggleMonthly").removeClass("active")
                $("#premiumToggleYearly").addClass("active")

            }

            $('.summary-purchase-current-charge-value').text(currentprice + " EGP")
        }

        $('.priceGroup').on('change', '.btn', function () {
            selectedPackage = $(this).closest('.priceContainer').find('input[name="package"]').first().data();
            selectedPackage.period = $(this).data().period;
            updateUi(selectedPackage.period)

            $(this).parent().closest('.priceContainer').find(".price").first().text(currentprice + " EGP");

        });

        $('.mainBg').on('click', function () {

            selectedPackage = $(this).closest('.priceContainer').find('input[name="package"]').first().data();
            selectedPackage.period = $(this).parent().closest('.priceContainer').find(".btn-secondary.active").first().data().period;

            let currentprice = selectedPackage.period === "monthly" ? selectedPackage.priceMonthly : selectedPackage.priceAnnually;
            updateUi(selectedPackage.period)
            $('.summary-purchase-current-charge-value').text(currentprice + " EGP")
            $(this).parent().closest('.priceContainer').find('.package').first().prop("checked", true);

        });

        var csrfName = '{{getci()->security->get_csrf_token_name() }}',
            csrfHash = '{{ getci()->security->get_csrf_hash() }}';

        function loadPayment() {


            if (selectedPackage.slug == null) {
                alert('Please Select Your Package ! First ,')
            } else {
                $('<div class="modal-backdrop fade show"></div>').appendTo(document.body);
                $('.loader').show();
                $.ajax({
                    url: "/ajax/pay",
                    type: 'post',
                    data: {[csrfName]: csrfHash, slug: selectedPackage.slug , period:selectedPackage.period },
                    success: function (data) {
                        csrfName = data.csrfName;
                        csrfHash = data.csrfHash;


                        var iframe = document.createElement('iframe');
                        iframe.id = "payment-iframe"
                        iframe.className = "mx-5"
                        iframe.onload = function () {
                            $(".modal-backdrop").remove();
                            $('.loader').hide();
                        };
                        iframe.src = data.url;

                        document.getElementById('payment-container').parentElement.parentElement.replaceWith(iframe)


                    }
                });
            }

        }


        $('.premiumToggle').on('change', '.btn', function () {
            selectedPackage.period = $(this).data().period;
            let currentprice = selectedPackage.period === "monthly" ? selectedPackage.priceMonthly : selectedPackage.priceAnnually;
            $('.summary-purchase-current-charge-value').text(currentprice + " EGP")


        });


        $(document).ready(function () {
            $("input[name=switch-one]:radio").change(function () {
                var radioValue = $("input[name='switch-one']:checked").val();
                if (radioValue == "no") {
                    $(".show-month").css("display", "block");
                    $(".show-year").css("display", "none");

                } else if (radioValue == "yes") {
                    $(".show-month").css("display", "none");
                    $(".show-year").css("display", "block");
                }
            });
        });
        $(".btn-Premium").click(function () {
            $('html,body').animate({
                    scrollTop: $("#payment-container").offset().top
                },
                'slow');
        });


    </script>
        <script>
               function ChangeBg(clicked_id) {
                  var str = clicked_id;
                  if(str=="pills-sticky-tab"){
                    $("#pills-sticky-tab").addClass("sticky-active-background");
                    $("#pills-auto-tab").removeClass("autoactivity-active-background");
                    $("#pills-analayzer-tab").removeClass("analyze-active-background");
                    $("#pills-family-tab").removeClass("family-active-background");
                    $(".mainBg").addClass("sticky-active-background");
                    $(".mainBg").removeClass("autoactivity-active-background");
                    $(".mainBg").removeClass("analyze-active-background");
                    $(".mainBg").removeClass("family-active-background");

                  }
                  else if(str=="pills-auto-tab"){
                    $("#pills-auto-tab").addClass("autoactivity-active-background");
                    $("#pills-sticky-tab").removeClass("sticky-active-background");
                    $("#pills-analayzer-tab").removeClass("analyze-active-background");
                    $("#pills-family-tab").removeClass("family-active-background");
                    $(".mainBg").addClass("autoactivity-active-background");
                    $(".mainBg").removeClass("sticky-active-background");
                    $(".mainBg").removeClass("analyze-active-background");
                    $(".mainBg").removeClass("family-active-background");
                  }
                   else if(str=="pills-analayzer-tab"){
                    $("#pills-analayzer-tab").addClass("analyze-active-background");
                    $("#pills-sticky-tab").removeClass("sticky-active-background");
                    $("#pills-auto-tab").removeClass("autoactivity-active-background");
                    $("#pills-family-tab").removeClass("family-active-background");
                    $(".mainBg").addClass("analyze-active-background");
                    $(".mainBg").removeClass("sticky-active-background");
                    $(".mainBg").removeClass("autoactivity-active-background");
                    $(".mainBg").removeClass("family-active-background");
                  }
                  else {
                    $("#pills-family-tab").addClass("family-active-background");
                    $("#pills-sticky-tab").removeClass("sticky-active-background");
                    $("#pills-auto-tab").removeClass("autoactivity-active-background");
                    $("#pills-analayzer-tab").removeClass("analyze-active-background");
                    $(".mainBg").addClass("family-active-background");
                    $(".mainBg").removeClass("sticky-active-background");
                    $(".mainBg").removeClass("autoactivity-active-background");
                    $(".mainBg").removeClass("analyze-active-background");
                  }
               }
            </script>

    <script src="https://banquemisr.gateway.mastercard.com/checkout/version/57/checkout.js" data-error="errorCallback"
            data-complete="completeCallback" data-cancel="cancelCallback"></script>

@endpush
