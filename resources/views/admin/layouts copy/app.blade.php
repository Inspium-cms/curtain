<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-compact layout-menu-fixed" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets') }}/" data-template="vertical-menu-template"
    data-style="light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>
        @yield('title', 'Curtains & Blinds')
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <!-- Core CSS -->
    <link href="{{ asset('assets/css2') }}" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/flag-icons.css') }}" />

    <!-- Demo CSS -->
    <link rel="stylesheet" href="{{ asset('assets/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/form-validation.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/apex-charts.css') }}" />
    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('assets/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/buttons.bootstrap5.css') }}">
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ asset('assets/rowgroup.bootstrap5.css') }}">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/card-analytics.css') }}" />

    <!-- Helpers JS -->
    <script src="{{ asset('assets/helpers.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Dropzone CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet" />

<!-- Dropzone JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
            top: 62px !important;
        }

        .layout-page {
            padding-top: 62px !important;
        }

        .content-wrapper {
            padding-bottom: 54px !important;
        }
    </style>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="{{ asset('assets/template-customizer.js') }}"></script> --}}
    <style>
        #template-customizer {
            font-family: "Open Sans", BlinkMacSystemFont, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol" !important;
            font-size: inherit !important;
            position: fixed;
            top: 0;
            right: 0;
            height: 100%;
            z-index: 99999999;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 400px;
            -webkit-box-shadow: 0px 0.3125rem 1.375rem 0px rgba(34, 48, 62, 0.18);
            box-shadow: 0px 0.3125rem 1.375rem 0px rgba(34, 48, 62, 0.18);
            -webkit-transition: all 0.2s ease-in;
            -o-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
            -webkit-transform: translateX(420px);
            -ms-transform: translateX(420px);
            transform: translateX(420px);
        }

        .dark-style #template-customizer {
            -webkit-box-shadow: 0px 0.3125rem 1.375rem 0px rgba(20, 20, 29, 0.26);
            box-shadow: 0px 0.3125rem 1.375rem 0px rgba(20, 20, 29, 0.26);
        }

        #template-customizer h5 {
            position: relative;
            font-size: 11px;
        }

        #template-customizer>h5 {
            flex: 0 0 auto;
        }

        #template-customizer .disabled {
            color: #d1d2d3 !important;
        }

        #template-customizer .form-label {
            font-size: 0.9375rem;
            font-weight: 500;
        }

        #template-customizer .form-check-label {
            font-size: 0.8125rem;
        }

        #template-customizer.template-customizer-open {
            -webkit-transition-delay: 0.1s;
            -o-transition-delay: 0.1s;
            transition-delay: 0.1s;
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important;
        }

        #template-customizer.template-customizer-open .custom-option.checked {
            color: var(--bs-primary);
            border-width: 2px;
            margin: 0;
        }

        #template-customizer .template-customizer-header a:hover {
            color: inherit !important;
        }

        #template-customizer .template-customizer-open-btn {
            position: absolute;
            top: 180px;
            left: 0;
            z-index: -1;
            display: block;
            width: 38px;
            height: 38px;
            border-top-left-radius: 0.375rem;
            border-bottom-left-radius: 0.375rem;
            background: var(--bs-primary);
            box-shadow: 0px 0.125rem 0.25rem 0px rgba(105, 108, 255, 0.4);
            color: #fff !important;
            text-align: center;
            font-size: 18px !important;
            line-height: 38px;
            opacity: 1;
            -webkit-transition: all 0.1s linear 0.2s;
            -o-transition: all 0.1s linear 0.2s;
            transition: all 0.1s linear 0.2s;
            -webkit-transform: translateX(-58px);
            -ms-transform: translateX(-58px);
            transform: translateX(-58px);
        }

        @media (max-width: 991.98px) {
            #template-customizer .template-customizer-open-btn {
                top: 145px;
            }
        }

        .dark-style #template-customizer .template-customizer-open-btn {
            background: var(--bs-primary);
        }

        #template-customizer .template-customizer-open-btn::before {
            content: "";
            width: 22px;
            height: 22px;
            display: block;
            background-size: 100% 100%;
            position: absolute;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .customizer-hide #template-customizer .template-customizer-open-btn {
            display: none;
        }

        [dir="rtl"] #template-customizer .template-customizer-open-btn {
            border-radius: 0;
            border-top-right-radius: 0.375rem;
            border-bottom-right-radius: 0.375rem;
        }

        [dir="rtl"] #template-customizer .template-customizer-open-btn::before {
            margin-left: -2px;
        }

        #template-customizer.template-customizer-open .template-customizer-open-btn {
            opacity: 0;
            -webkit-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: none !important;
            -ms-transform: none !important;
            transform: none !important;
        }
        label.required:after {
    content: " *";
    color: red;
    font-weight: bold;
}
        #template-customizer .template-customizer-inner {
            position: relative;
            overflow: auto;
            -webkit-box-flex: 0;
            -ms-flex: 0 1 auto;
            flex: 0 1 auto;
            opacity: 1;
            -webkit-transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            transition: opacity 0.2s;
        }

        #template-customizer .template-customizer-inner>div:first-child>hr:first-of-type {
            display: none !important;
        }

        #template-customizer .template-customizer-inner>div:first-child>h5:first-of-type {
            padding-top: 0 !important;
        }

        #template-customizer .template-customizer-themes-inner {
            position: relative;
            opacity: 1;
            -webkit-transition: opacity 0.2s;
            -o-transition: opacity 0.2s;
            transition: opacity 0.2s;
        }

        #template-customizer .template-customizer-theme-item {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -ms-flex-align: center;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 100%;
            flex: 1 1 100%;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            margin-bottom: 10px;
            padding: 0 24px;
            width: 100%;
            cursor: pointer;
        }

        #template-customizer .template-customizer-theme-item input {
            position: absolute;
            z-index: -1;
            opacity: 0;
        }

        #template-customizer .template-customizer-theme-item input~span {
            opacity: 0.25;
            -webkit-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
        }

        #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
            display: inline-block;
            width: 6px;
            height: 12px;
            border-right: 1px solid;
            border-bottom: 1px solid;
            opacity: 0;
            -webkit-transition: all 0.2s;
            -o-transition: all 0.2s;
            transition: all 0.2s;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        [dir="rtl"] #template-customizer .template-customizer-theme-item .template-customizer-theme-checkmark {
            border-right: none;
            border-left: 1px solid;
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span,
        #template-customizer .template-customizer-theme-item:hover input:not([disabled])~span {
            opacity: 1;
        }

        #template-customizer .template-customizer-theme-item input:checked:not([disabled])~span .template-customizer-theme-checkmark {
            opacity: 1;
        }

        #template-customizer .template-customizer-theme-colors span {
            display: block;
            margin: 0 1px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
        }

        #template-customizer.template-customizer-loading .template-customizer-inner,
        #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner {
            opacity: 0.2;
        }

        #template-customizer.template-customizer-loading .template-customizer-inner::after,
        #template-customizer.template-customizer-loading-theme .template-customizer-themes-inner::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 999;
            display: block;
        }

        @media (max-width: 1200px) {
            #template-customizer {
                display: none;
                visibility: hidden !important;
            }
        }

        @media (max-width: 575.98px) {
            #template-customizer {
                width: 300px;
                -webkit-transform: translateX(320px);
                -ms-transform: translateX(320px);
                transform: translateX(320px);
            }
        }

        .layout-menu-100vh #template-customizer {
            height: 100vh;
        }

        [dir="rtl"] #template-customizer {
            right: auto;
            left: 0;
            -webkit-transform: translateX(-420px);
            -ms-transform: translateX(-420px);
            transform: translateX(-420px);
        }

        [dir="rtl"] #template-customizer .template-customizer-open-btn {
            right: 0;
            left: auto;
            -webkit-transform: translateX(58px);
            -ms-transform: translateX(58px);
            transform: translateX(58px);
        }

        [dir="rtl"] #template-customizer .template-customizer-close-btn {
            right: auto;
            left: 0;
        }

        #template-customizer .template-customizer-layouts-options[disabled] {
            opacity: 0.5;
            pointer-events: none;
        }

        [dir="rtl"] .template-customizer-t-style_switch_light {
            padding-right: 0 !important;
        }
    </style>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/config.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" type="text/css" href="./assets/theme-default.css" class="template-customizer-theme-css" />

    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
        }

        .apexcharts-inner {
            position: relative;
        }

        .apexcharts-text tspan {
            font-family: inherit;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.2;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex;
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-box,
        .apexcharts-custom-tooltip {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse;
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-box span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1;
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair;
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move;
        }

        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center;
        }

        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6e8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76);
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008ffb;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7);
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-annotation-rect,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line,
        .apexcharts-zoom-rect,
        .apexcharts-toolbar svg,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Resize generated styles */

        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
    <script type="text/javascript" src="./assets/api.min.js" async="" data-user="252882" data-account="269977"></script>
    <link rel="stylesheet" href="./assets/api.min.css" id="omapi-css" media="all" />
</head>

<body data-new-gr-c-s-check-loaded="14.1200.0" data-gr-ext-installed="" style="">
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin.layouts.sidebar')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('admin.layouts.nav')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin.layouts.footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"
            style="
          touch-action: pan-y;
          user-select: none;
          -webkit-user-drag: none;
          -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        ">
        </div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script src="{{ asset('assets/popper.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/hammer.js') }}"></script>
    <script src="{{ asset('assets/i18n.js') }}"></script>
    <script src="{{ asset('assets/typeahead.js') }}"></script>
    <script src="{{ asset('assets/menu.js') }}"></script>
    <!-- Vendors JS -->
    <script src="{{ asset('assets/select2.js') }}"></script>
    <script src="{{ asset('assets/bootstrap-select.js') }}"></script>
    <script src="{{ asset('assets/moment.js') }}"></script>
    <script src="{{ asset('assets/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/typeahead.js') }}"></script>
    <script src="{{ asset('assets/tagify.js') }}"></script>
    <script src="{{ asset('assets/popular.js') }}"></script>
    <script src="{{ asset('assets/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/auto-focus.js') }}"></script>
    <script src="{{ asset('assets/datatables-bootstrap5.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/form-validation.js') }}"></script>
    <!-- Vendors JS -->
@yield('script')
</body>

</html>