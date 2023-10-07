<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=noto-sans-jp:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body>
    <main id="content" role="main" class="relative max-w-3xl px-4 sm:px-6 lg:px-8 flex flex-col justify-center sm:items-center mx-auto w-full h-full before:absolute before:top-0 before:left-1/2 before:bg-[url('../svg/component/squared-bg-element-dark.svg')] before:bg-no-repeat before:bg-top before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="text-center py-8 px-4 sm:px-6 lg:px-8">
            <svg class="w-20 sm:w-28 h-auto mx-auto mb-4 sm:mb-8" width="116" height="41" viewBox="0 0 116 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M33.5696 34.3182V14.8182H37.4474V17.2003H37.6229C37.7952 16.8187 38.0445 16.4309 38.3707 16.0369C38.7031 15.6368 39.134 15.3045 39.6634 15.0398C40.1989 14.7689 40.8636 14.6335 41.6577 14.6335C42.6918 14.6335 43.6458 14.9044 44.5199 15.446C45.3939 15.9815 46.0926 16.791 46.6158 17.8743C47.139 18.9515 47.4006 20.3026 47.4006 21.9276C47.4006 23.5095 47.1451 24.8452 46.6342 25.9347C46.1295 27.018 45.4401 27.8397 44.5661 28.3999C43.6982 28.9538 42.7256 29.2308 41.6484 29.2308C40.8852 29.2308 40.2358 29.1046 39.7003 28.8523C39.1709 28.5999 38.737 28.2829 38.3984 27.9013C38.0599 27.5135 37.8014 27.1226 37.6229 26.7287H37.5028V34.3182H33.5696ZM37.4197 21.9091C37.4197 22.7524 37.5367 23.4879 37.7706 24.1158C38.0045 24.7436 38.343 25.233 38.7862 25.5838C39.2294 25.9285 39.768 26.1009 40.402 26.1009C41.0421 26.1009 41.5838 25.9254 42.027 25.5746C42.4702 25.2176 42.8056 24.7251 43.0334 24.0973C43.2673 23.4633 43.3842 22.7339 43.3842 21.9091C43.3842 21.0904 43.2704 20.3703 43.0426 19.7486C42.8149 19.1269 42.4794 18.6406 42.0362 18.2898C41.593 17.9389 41.0483 17.7635 40.402 17.7635C39.7618 17.7635 39.2202 17.9328 38.777 18.2713C38.34 18.6098 38.0045 19.09 37.7706 19.7116C37.5367 20.3333 37.4197 21.0658 37.4197 21.9091ZM49.2427 29V14.8182H53.0559V17.2926H53.2037C53.4622 16.4124 53.8961 15.7476 54.5055 15.2983C55.1149 14.8428 55.8166 14.6151 56.6106 14.6151C56.8076 14.6151 57.02 14.6274 57.2477 14.652C57.4754 14.6766 57.6755 14.7105 57.8478 14.7536V18.2436C57.6632 18.1882 57.4077 18.139 57.0815 18.0959C56.7553 18.0528 56.4567 18.0312 56.1859 18.0312C55.6073 18.0312 55.0903 18.1574 54.6348 18.4098C54.1854 18.656 53.8284 19.0007 53.5638 19.4439C53.3052 19.8871 53.176 20.398 53.176 20.9766V29H49.2427ZM64.9043 29.277C63.4455 29.277 62.1898 28.9815 61.1373 28.3906C60.0909 27.7936 59.2845 26.9503 58.7182 25.8608C58.1519 24.7652 57.8688 23.4695 57.8688 21.9737C57.8688 20.5149 58.1519 19.2346 58.7182 18.1328C59.2845 17.031 60.0816 16.1723 61.1096 15.5568C62.1437 14.9413 63.3563 14.6335 64.7474 14.6335C65.683 14.6335 66.5539 14.7843 67.3603 15.0859C68.1728 15.3814 68.8806 15.8277 69.4839 16.4247C70.0932 17.0218 70.5672 17.7727 70.9057 18.6776C71.2443 19.5762 71.4135 20.6288 71.4135 21.8352V22.9155H59.4384V20.478H67.7111C67.7111 19.9117 67.588 19.41 67.3418 18.973C67.0956 18.536 66.754 18.1944 66.317 17.9482C65.8861 17.6958 65.3844 17.5696 64.812 17.5696C64.2149 17.5696 63.6856 17.7081 63.2239 17.9851C62.7684 18.2559 62.4114 18.6222 62.1529 19.0838C61.8944 19.5393 61.762 20.0471 61.7559 20.6072V22.9247C61.7559 23.6264 61.8851 24.2327 62.1437 24.7436C62.4083 25.2545 62.7807 25.6484 63.2608 25.9254C63.741 26.2024 64.3103 26.3409 64.9689 26.3409C65.406 26.3409 65.8061 26.2794 66.1692 26.1562C66.5324 26.0331 66.8432 25.8485 67.1018 25.6023C67.3603 25.3561 67.5572 25.0545 67.6927 24.6974L71.3304 24.9375C71.1458 25.8116 70.7672 26.5748 70.1948 27.2273C69.6285 27.8736 68.896 28.3783 67.9974 28.7415C67.1048 29.0985 66.0738 29.277 64.9043 29.277ZM77.1335 10.0909V29H73.2003V10.0909H77.1335ZM79.5043 29V14.8182H83.4375V29H79.5043ZM81.4801 12.9901C80.8954 12.9901 80.3937 12.7962 79.9752 12.4084C79.5628 12.0144 79.3566 11.5436 79.3566 10.9957C79.3566 10.4541 79.5628 9.98935 79.9752 9.60156C80.3937 9.20762 80.8954 9.01065 81.4801 9.01065C82.0649 9.01065 82.5635 9.20762 82.9759 9.60156C83.3944 9.98935 83.6037 10.4541 83.6037 10.9957C83.6037 11.5436 83.3944 12.0144 82.9759 12.4084C82.5635 12.7962 82.0649 12.9901 81.4801 12.9901ZM89.7415 20.8011V29H85.8083V14.8182H89.5569V17.3203H89.723C90.037 16.4955 90.5632 15.843 91.3019 15.3629C92.0405 14.8767 92.9361 14.6335 93.9887 14.6335C94.9735 14.6335 95.8322 14.849 96.5647 15.2798C97.2971 15.7107 97.8665 16.3262 98.2728 17.1264C98.679 17.9205 98.8821 18.8684 98.8821 19.9702V29H94.9489V20.6719C94.9551 19.804 94.7335 19.1269 94.2841 18.6406C93.8348 18.1482 93.2162 17.902 92.4283 17.902C91.8989 17.902 91.4311 18.0159 91.0249 18.2436C90.6248 18.4714 90.3109 18.8037 90.0831 19.2408C89.8615 19.6716 89.7477 20.1918 89.7415 20.8011ZM107.665 29.277C106.206 29.277 104.951 28.9815 103.898 28.3906C102.852 27.7936 102.045 26.9503 101.479 25.8608C100.913 24.7652 100.63 23.4695 100.63 21.9737C100.63 20.5149 100.913 19.2346 101.479 18.1328C102.045 17.031 102.842 16.1723 103.87 15.5568C104.905 14.9413 106.117 14.6335 107.508 14.6335C108.444 14.6335 109.315 14.7843 110.121 15.0859C110.934 15.3814 111.641 15.8277 112.245 16.4247C112.854 17.0218 113.328 17.7727 113.667 18.6776C114.005 19.5762 114.174 20.6288 114.174 21.8352V22.9155H102.199V20.478H110.472C110.472 19.9117 110.349 19.41 110.103 18.973C109.856 18.536 109.515 18.1944 109.078 17.9482C108.647 17.6958 108.145 17.5696 107.573 17.5696C106.976 17.5696 106.446 17.7081 105.985 17.9851C105.529 18.2559 105.172 18.6222 104.914 19.0838C104.655 19.5393 104.523 20.0471 104.517 20.6072V22.9247C104.517 23.6264 104.646 24.2327 104.905 24.7436C105.169 25.2545 105.542 25.6484 106.022 25.9254C106.502 26.2024 107.071 26.3409 107.73 26.3409C108.167 26.3409 108.567 26.2794 108.93 26.1562C109.293 26.0331 109.604 25.8485 109.863 25.6023C110.121 25.3561 110.318 25.0545 110.454 24.6974L114.091 24.9375C113.907 25.8116 113.528 26.5748 112.956 27.2273C112.389 27.8736 111.657 28.3783 110.758 28.7415C109.866 29.0985 108.835 29.277 107.665 29.277Z" fill="white" />
                <path d="M1 33V20C1 13.3726 6.37258 8 13 8C19.6274 8 25 13.3726 25 20C25 26.6274 19.6274 32 13 32H12" stroke="white" stroke-width="2" />
                <path d="M5 33V20.16C5 15.6534 8.58172 12 13 12C17.4183 12 21 15.6534 21 20.16C21 24.6666 17.4183 28.32 13 28.32H12" stroke="white" stroke-width="2" />
                <circle cx="13" cy="20.0215" r="5" fill="white" />
            </svg>
            <h1 class="text-2xl text-white sm:text-4xl">
                {{__('messages.hello')}}
            </h1>
            <h2 class="mt-1 sm:mt-3 text-4xl font-bold text-white sm:text-6xl">
                <span class="bg-clip-text bg-gradient-to-tr from-blue-600 to-purple-400 text-transparent">Preline PRO</span>
            </h2>

            <form>
                <div class="mt-8 space-y-4">
                    <div>
                        <label for="hs-cover-with-gradient-form-name-1" class="sr-only">Full name</label>
                        <div class="relative">
                            <input type="text" id="hs-cover-with-gradient-form-name-1" class="py-3 ps-11 pe-4 block w-full bg-white/[.03] border-white/20 text-white placeholder:text-white rounded-md text-sm focus:border-white/30 focus:ring-white/30 sm:p-4 sm:ps-11" placeholder="Full name">
                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 ps-4">
                                <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="hs-cover-with-gradient-form-email-1" class="sr-only">Email address</label>
                        <div class="relative">
                            <input type="email" id="hs-cover-with-gradient-form-email-1" class="py-3 ps-11 pe-4 block w-full bg-white/[.03] border-white/20 text-white placeholder:text-white rounded-md text-sm focus:border-white/30 focus:ring-white/30 sm:p-4 sm:ps-11" placeholder="Email address">
                            <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 ps-4">
                                <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="grid">
                        <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md bg-white/10 border border-transparent font-medium text-white hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white/30 transition-all text-sm sm:p-4">
                            Join the waitlist
                            <svg class="w-3 h-3" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.27921 2L10.9257 7.64645C11.1209 7.84171 11.1209 8.15829 10.9257 8.35355L5.27921 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            <figure class="bg-slate-100 rounded-xl p-8 dark:bg-slate-800">
                <img class="w-24 h-24 rounded-full mx-auto" src="/sarah-dayan.jpg" alt="" width="384" height="512">
                <div class="pt-6 space-y-4">
                    <blockquote>
                        <p class="text-lg">
                            “Tailwind CSS is the only framework that I've seen scale
                            on large teams. It’s easy to customize, adapts to any design,
                            and the build size is tiny.”
                        </p>
                    </blockquote>
                    <figcaption>
                        <div>
                            Sarah Dayan
                        </div>
                        <div>
                            Staff Engineer, Algolia
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>
    </main>
    <footer class="text-gray-600 body-font">
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">&copy; 2023 hiroshiMraz</p>
            </div>
        </div>
    </footer>

</body>

</html>
