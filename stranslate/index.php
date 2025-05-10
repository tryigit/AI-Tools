<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/ai/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ai/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ai/favicon-16x16.png">
    <link rel="manifest" href="/ai/site.webmanifest">
    <link rel="shortcut icon" href="/ai/favicon.ico">
    <title>AI Subtitle Alchemist | Gemini Powered Translations</title>
    <meta name="description" content="Translate .srt, .ass, or .txt subtitle files (including from .zip archives) with unparalleled precision using Google Gemini AI. Customize for quality and fluency, preserving timing & format.">
    <meta name="keywords" content="subtitle translator, ai translation, gemini api, srt translator, ass translator, ai subtitle, machine translation, localization, professional translation, tryigit, subtitle alchemy">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/translate" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif'],
                        heading: ['Manrope', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
                    },
                    colors: {
                        'dark-primary-bg': '#03070A',
                        'dark-secondary-bg': '#0A0F14',
                        'dark-card-bg': '#0E1318',
                        'dark-border': '#1E293B',
                        'dark-text-primary': '#E8EFF5',
                        'dark-text-secondary': '#A0AEC0',
                        'dark-text-muted': '#64748B',
                        'dark-input-bg': '#12181E',
                        'dark-input-border': '#252D37',
                        'dark-accent-start': '#3b82f6',
                        'dark-accent-end': '#2563eb',
                        'dark-accent-error': '#c53030',

                        'light-primary-bg': '#FFFFFF',
                        'light-secondary-bg': '#F8F9FC',
                        'light-card-bg': '#FFFFFF',
                        'light-border': '#E4E7F0',
                        'light-text-primary': '#0F131A',
                        'light-text-secondary': '#424959',
                        'light-text-muted': '#71788A',
                        'light-input-bg': '#FFFFFF',
                        'light-input-border': '#CED3DB',
                        'light-accent-start': '#1e3a8a',
                        'light-accent-end': '#1e40af',
                        'light-accent-error': '#b91c1c',
                    },
                    animation: {
                        'fade-in-deep': 'fadeInDeep 0.8s ease-out forwards',
                        'slide-in-up-strong': 'slideInUpStrong 0.7s ease-out forwards',
                        'pulse-accent': 'pulseAccent 2.8s infinite ease-in-out',
                        'spin': 'spin 1s linear infinite',
                    },
                    keyframes: {
                        fadeInDeep: { '0%': { opacity: 0.1 }, '100%': { opacity: 1 } },
                        slideInUpStrong: { '0%': { opacity: 0, transform: 'translateY(12px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                        pulseAccent: {
                            '0%, 100%': { filter: 'brightness(0.95) saturate(0.95)' },
                            '50%': { filter: 'brightness(1.1) saturate(1.1)' },
                        },
                    },
                    boxShadow: {
                        'focus-dark': '0 0 0 2px #03070A, 0 0 0 4px #3b82f6',
                        'focus-light': '0 0 0 2px #FFFFFF, 0 0 0 4px #1e40af',
                        'card-dark': '0px 6px 28px -10px rgba(0, 0, 0, 0.65), 0px 0px 18px -8px rgba(59, 130, 246, 0.25)',
                        'card-light': '0px 6px 25px -12px rgba(15, 19, 26, 0.15)',
                        'modal-dark': '0 10px 35px -10px rgba(0, 0, 0, 0.6), 0 0 25px -10px rgba(59, 130, 246, 0.2)',
                        'modal-light': '0 10px 30px -10px rgba(15, 19, 26, 0.2)',
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            html { @apply scroll-smooth; }
            body {
                @apply bg-light-primary-bg text-light-text-primary dark:bg-dark-primary-bg dark:text-dark-text-primary;
                @apply font-sans antialiased transition-colors duration-300 ease-in-out;
            }
            h1,h2,h3,h4,h5,h6 { @apply font-heading; }

            ::-webkit-scrollbar { @apply w-2 h-2; }
            ::-webkit-scrollbar-track { @apply bg-transparent; }
            ::-webkit-scrollbar-thumb { @apply rounded-full bg-light-text-muted/30 dark:bg-dark-text-muted/30; }
            ::-webkit-scrollbar-thumb:hover { @apply bg-light-text-muted/50 dark:bg-dark-text-muted/50; }

            .form-section-container {
                @apply bg-light-card-bg dark:bg-dark-card-bg p-6 sm:p-8 rounded-xl shadow-card-light dark:shadow-card-dark transition-all duration-300;
            }
            .form-section-header {
                @apply text-lg font-semibold mb-6 tracking-tight text-light-text-primary dark:text-dark-text-primary;
            }

            label {
                @apply block mb-2 text-sm font-semibold text-light-text-secondary dark:text-dark-text-secondary;
            }
            input[type="text"], input[type="password"], input[type="number"], select, textarea {
                @apply block w-full px-4 py-3.5 rounded-lg shadow-sm transition-all duration-200 ease-in-out;
                @apply text-base text-light-text-primary placeholder-light-text-muted bg-light-input-bg border border-light-input-border;
                @apply dark:text-dark-text-primary dark:placeholder-dark-text-muted dark:bg-dark-input-bg dark:border-dark-input-border;
                @apply focus:outline-none focus:border-transparent focus:shadow-focus-light dark:focus:shadow-focus-dark;
            }
            select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2371788A' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                 background-position: right 0.9rem center; background-repeat: no-repeat; background-size: 1.1em 1.1em;
                 -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 3rem;
             }
            html.dark select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23A0AEC0' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
             }
            textarea { @apply min-h-[100px] leading-relaxed; }
            .input-field-description { @apply mt-2 text-xs text-light-text-muted dark:text-dark-text-muted; }
            .input-field-description a {
                @apply font-medium hover:underline text-light-accent-end dark:text-dark-accent-end;
            }
            .input-field-description .warning-text { @apply text-light-accent-error dark:text-dark-accent-error; }

            input[type="range"]::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 18px; height: 18px; @apply bg-light-accent-start dark:bg-dark-accent-start; cursor: grab; border-radius: 50%; transition: background-color 0.15s ease-in-out; }
            input[type="range"]::-moz-range-thumb { width: 18px; height: 18px; @apply bg-light-accent-start dark:bg-dark-accent-start; cursor: grab; border-radius: 50%; border: none; transition: background-color 0.15s ease-in-out;}
            input[type="range"]:active::-webkit-slider-thumb { @apply bg-light-accent-end dark:bg-dark-accent-end; cursor: grabbing; }
            input[type="range"]:active::-moz-range-thumb { @apply bg-light-accent-end dark:bg-dark-accent-end; cursor: grabbing; }
            input[type="range"] { @apply w-full h-2.5 bg-light-border dark:bg-dark-border rounded-lg appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-light-accent-start/50 dark:focus:ring-dark-accent-start/50 dark:focus:ring-offset-dark-primary-bg; }

            .custom-form-checkbox { @apply w-5 h-5 text-light-accent-start dark:text-dark-accent-start bg-light-input-bg dark:bg-dark-input-bg border-light-input-border dark:border-dark-input-border rounded focus:ring-light-accent-start dark:focus:ring-dark-accent-start focus:ring-offset-0 dark:focus:ring-offset-dark-card-bg; }
            .custom-form-checkbox:checked { @apply bg-light-accent-start dark:bg-dark-accent-start border-light-accent-start dark:border-dark-accent-start; }
            .custom-form-checkbox:indeterminate { @apply bg-light-accent-start/60 border-light-accent-start/60 dark:bg-dark-accent-start/60 dark:border-dark-accent-start/60; background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e"); }

            .modal-backdrop { @apply fixed inset-0 bg-transparent z-40 opacity-0 pointer-events-none transition-opacity duration-300 ease-out; }
            .modal-dialog-container { @apply fixed inset-0 z-50 flex items-center justify-center p-4 opacity-0 pointer-events-none transition-opacity duration-300 ease-out; }
            .modal-dialog-content { @apply bg-light-card-bg dark:bg-dark-card-bg rounded-xl shadow-modal-light dark:shadow-modal-dark w-full max-w-lg max-h-[90vh] flex flex-col overflow-hidden transform scale-95 transition-transform duration-300 ease-out; }
            .modal-dialog-container.is-active { @apply opacity-100 pointer-events-auto; }
            .modal-dialog-container.is-active .modal-backdrop { @apply opacity-100; }
            .modal-dialog-container.is-active .modal-dialog-content { @apply scale-100 opacity-100; }
            .modal-dialog-header { @apply p-5 border-b border-light-border dark:border-dark-border flex justify-between items-center; }
            .modal-dialog-title { @apply text-lg font-semibold text-light-text-primary dark:text-dark-text-primary; }
            .modal-dialog-close { @apply text-light-text-muted hover:text-light-text-primary dark:text-dark-text-muted dark:hover:text-dark-text-primary transition-colors; }
            .modal-dialog-body { @apply p-5 overflow-y-auto flex-grow; }
            .modal-dialog-footer { @apply p-5 border-t border-light-border dark:border-dark-border flex flex-wrap justify-end gap-3; }
            .modal-directory-header { @apply flex items-center gap-x-2 py-2.5 px-1.5 sticky top-0 bg-light-secondary-bg dark:bg-dark-secondary-bg z-10 rounded-md -mx-1.5; }
            .modal-directory-name-label { @apply font-semibold text-sm text-light-text-secondary dark:text-dark-text-secondary cursor-pointer; }
            .modal-file-item { @apply grid grid-cols-[minmax(0,1fr)_auto] gap-x-3 items-center pl-8 pr-3 py-2.5 rounded-md bg-light-secondary-bg/50 dark:bg-dark-secondary-bg/50 hover:bg-light-border/50 dark:hover:bg-dark-border/40 cursor-pointer transition-colors duration-150; }
            .modal-file-name { @apply block text-sm text-light-text-primary dark:text-dark-text-primary overflow-hidden whitespace-nowrap text-ellipsis; }
            .modal-file-list::-webkit-scrollbar { width: 6px; } .modal-file-list::-webkit-scrollbar-track { @apply bg-light-border/50 dark:bg-dark-border/50 rounded; } .modal-file-list::-webkit-scrollbar-thumb { @apply bg-light-text-muted/50 dark:bg-dark-text-muted/50 rounded; } .modal-file-list::-webkit-scrollbar-thumb:hover { @apply bg-light-text-muted/70 dark:bg-dark-text-muted/70; }
        }
        @layer components {
            .page-title-gradient {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-light-accent-start to-light-accent-end dark:from-dark-accent-start dark:to-dark-accent-end;
            }
            html.dark .page-title-gradient {
                animation: pulse-accent 2.8s infinite ease-in-out;
            }
            .link-text {
                @apply font-medium hover:underline text-light-accent-end dark:text-dark-accent-end;
            }

            .file-upload-input-area {
                @apply relative block w-full p-8 text-center border-2 border-light-border dark:border-dark-border border-dashed rounded-xl cursor-pointer transition-all duration-200 ease-in-out;
                @apply bg-light-secondary-bg hover:bg-light-card-bg dark:bg-dark-secondary-bg dark:hover:bg-dark-card-bg hover:border-light-accent-start dark:hover:border-dark-accent-start;
            }
            .file-upload-input-area .upload-icon { @apply w-10 h-10 mx-auto text-light-text-muted dark:text-dark-text-muted group-hover:text-light-accent-start dark:group-hover:text-dark-accent-start transition-colors; }
            .file-upload-input-area .upload-text-main { @apply mt-3 block text-sm font-semibold text-light-text-secondary dark:text-dark-text-secondary; }
            .file-upload-input-area .upload-text-sub { @apply block text-xs text-light-text-muted dark:text-dark-text-muted; }
            .file-upload-input-area input[type="file"] { @apply absolute inset-0 w-full h-full opacity-0 cursor-pointer; }

            .btn-execute-action {
                @apply inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-semibold rounded-lg shadow-lg focus:outline-none transition-all duration-300 ease-in-out disabled:opacity-40 disabled:cursor-not-allowed disabled:shadow-none;
                @apply text-white bg-gradient-to-r from-light-accent-start to-light-accent-end hover:shadow-xl hover:brightness-110;
                @apply dark:from-dark-accent-start dark:to-dark-accent-end dark:hover:brightness-110;
                @apply focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-primary-bg dark:focus:ring-offset-dark-primary-bg focus:ring-light-accent-end dark:focus:ring-dark-accent-end;
            }
            .btn-execute-action .spinner-animation {
                @apply border-white border-t-transparent;
            }

            .btn-utility {
                @apply inline-flex items-center justify-center px-5 py-2 border-2 text-sm font-medium rounded-lg transition-all duration-200 ease-in-out disabled:opacity-50;
                @apply border-light-border text-light-text-secondary hover:bg-light-border/60 focus:border-light-text-primary;
                @apply dark:border-dark-border dark:text-dark-text-secondary dark:hover:bg-dark-border/60 dark:focus:border-dark-text-primary;
                @apply focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-light-primary-bg dark:focus:ring-offset-dark-primary-bg;
            }
            .btn-utility.success-state {
                @apply bg-emerald-500 text-white border-emerald-500 hover:bg-emerald-600 focus:border-emerald-600;
                @apply dark:bg-emerald-500 dark:text-white dark:border-emerald-500 dark:hover:bg-emerald-600 dark:focus:border-emerald-600;
            }
            .btn-utility-sm { @apply !px-4 !py-1.5 !text-xs; }


            .input-group-button-style {
                @apply inline-flex items-center justify-center rounded-r-lg px-3.5 h-[54px] transition-colors duration-150 ease-in-out;
                @apply text-light-text-muted hover:text-light-text-primary bg-light-input-bg border border-l-0 border-light-input-border;
                @apply dark:text-dark-text-muted dark:hover:text-dark-text-primary dark:bg-dark-input-bg dark:border-l-0 dark:border-dark-input-border;
                @apply focus:outline-none focus:z-10 focus:shadow-focus-light dark:focus:shadow-focus-dark;
            }
            .spinner-animation { @apply inline-block w-5 h-5 border-[3px] rounded-full animate-spin; }
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1N2MBK3GT"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-B1N2MBK3GT'); </script>
</head>
<body class="dark:bg-dark-primary-bg bg-light-primary-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <header class="text-center mb-12 md:mb-16 animate-fade-in-deep">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tighter text-light-text-primary dark:text-dark-text-primary">
                AI Subtitle <span class="page-title-gradient">Alchemist</span>
            </h1>
            <p class="mt-5 text-lg md:text-xl text-light-text-secondary dark:text-dark-text-secondary max-w-2xl mx-auto">
                Transmute subtitles with unparalleled precision. SRT, ASS, TXT, ZIP – powered by Google Gemini.
            </p>
        </header>

        <form id="translateForm" onsubmit="return false;" class="space-y-10">
            <div class="form-section-container animate-slide-in-up-strong" style="animation-delay: 0.1s;">
                <h2 class="form-section-header">Core Configuration</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    <div>
                        <label for="apiKey">Gemini API Key:</label>
                        <div class="flex">
                             <input type="password" id="apiKey" name="apiKey" required placeholder="Your Google AI Studio Key" class="rounded-r-none flex-1">
                             <button type="button" id="toggleApiKey" title="Show/Hide Key" class="input-group-button-style"> <i data-feather="eye" class="w-5 h-5"></i> </button>
                        </div>
                         <p class="input-field-description"> Get key from <a href="https://aistudio.google.com/apikey" target="_blank" rel="noopener noreferrer" class="link-text">Google AI Studio</a>. Stored locally. </p>
                    </div>
                     <div>
                        <label for="modelId">Gemini Model ID:</label>
                        <input type="text" id="modelId" name="modelId" placeholder="e.g., gemini-2.5-pro-exp-03-25">
                        <p class="input-field-description">Current: <code class="font-semibold"><span id="currentModelDisplay"></span></code>. Default: <code class="font-semibold">gemini-2.5-pro-exp-03-25</code>.</p>
                    </div>
                 </div>
            </div>

             <div class="form-section-container animate-slide-in-up-strong" style="animation-delay: 0.2s;">
                <h2 class="form-section-header">Translation Parameters</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    <div>
                        <label for="targetLanguage">Target Language:</label>
                        <select id="targetLanguage" name="targetLanguage"> <option value="Turkish">Turkish</option> <option value="English">English</option> <option value="Spanish">Spanish</option> <option value="French">French</option> <option value="German">German</option> <option value="Japanese">Japanese</option> <option value="Korean">Korean</option> <option value="Chinese (Simplified)">Chinese (Simplified)</option> <option value="Portuguese (Brazil)">Portuguese (Brazil)</option> <option value="Russian">Russian</option> <option value="Arabic">Arabic</option> <option value="Other">Other (Specify)</option> </select>
                        <input type="text" id="customTargetLanguage" name="customTargetLanguage" placeholder="Enter language if 'Other'" class="mt-2 hidden">
                         <p class="input-field-description">Language for the translated output.</p>
                    </div>
                     <div>
                        <label for="contentType">Content Type:</label>
                        <select id="contentType" name="contentType"> <option value="Anime">Anime</option> <option value="Movie">Movie</option> <option value="TV Series">TV Series</option> <option value="Donghua">Donghua</option> <option value="Video Game">Video Game</option> <option value="Documentary">Documentary</option> <option value="Educational">Educational</option> <option value="General">General/Text</option> <option value="Other">Other (Specify)</option> </select>
                        <input type="text" id="customContentType" name="customContentType" placeholder="Enter type if 'Other'" class="mt-2 hidden">
                         <p class="input-field-description">Provides context to the AI for better nuance.</p>
                    </div>
                 </div>
            </div>

             <div class="form-section-container animate-slide-in-up-strong" style="animation-delay: 0.3s;">
                <h2 class="form-section-header">Input File</h2>
                <div class="mt-1">
                    <label for="subtitleFile" class="sr-only">Subtitle File</label>
                    <label for="subtitleFile" class="file-upload-input-area group">
                        <i data-feather="upload-cloud" class="upload-icon"></i>
                         <span class="upload-text-main">Click to upload or drag & drop</span>
                         <span class="upload-text-sub">Supports .SRT, .ASS, .TXT, .ZIP files</span>
                         <input type="file" id="subtitleFile" name="subtitleFile" accept=".srt,.ass,.txt,.zip,.tar.gz,.gz,.7z" required>
                     </label>
                </div>
                 <div id="fileSelectionDisplay" class="mt-4 text-center overflow-hidden flex flex-col items-center pb-1">
                     <span id="fileNameDisplay" class="text-sm font-medium text-light-text-secondary dark:text-dark-text-secondary truncate px-2 inline-block align-middle w-full">No file selected</span>
                     <div class="mt-2.5 flex items-center justify-center">
                         <button type="button" id="showArchiveModalButton" class="hidden btn-utility btn-utility-sm">
                             <i data-feather="list" class="w-4 h-4 mr-1.5"></i>Select Files
                         </button>
                         <span id="archiveSelectionSummary" class="text-sm text-light-text-muted dark:text-dark-text-muted ml-2 align-middle inline-block"></span>
                     </div>
                 </div>
            </div>

             <div class="form-section-container animate-slide-in-up-strong" style="animation-delay: 0.4s;">
                 <h2 class="form-section-header">Refinement Options</h2>
                 <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                     <div>
                         <label for="optionalNotes">Additional Notes for AI (Optional):</label>
                         <textarea id="optionalNotes" name="optionalNotes" rows="3" placeholder="e.g., Define specific terms, character names..."></textarea>
                         <p class="input-field-description"><span class="warning-text">Use sparingly.</span> Usually not needed for common content.</p>
                     </div>
                     <div>
                         <label for="temperatureSetting">AI Temperature (0.0 - 2.0):</label>
                         <div class="flex items-center space-x-3 mt-1">
                             <input type="number" id="temperatureSetting" name="temperatureSetting" min="0.0" max="2.0" step="0.05" class="w-24 px-2 py-1.5 text-center !shadow-none">
                             <span id="temperatureValueDisplay" class="font-semibold text-light-text-primary dark:text-dark-text-primary w-10 text-center tabular-nums">0.45</span>
                             <input type="range" id="temperatureSlider" min="0.0" max="2.0" step="0.05">
                         </div>
                         <p class="input-field-description mt-2.5 mb-10 md:mb-8">
                             Default <strong class="text-light-accent-start dark:text-dark-accent-start font-semibold">0.45</strong> is optimized via simulation for <strong class="text-light-accent-start dark:text-dark-accent-start font-semibold">Netflix-level quality</strong> (balanced accuracy & fluency). Higher values increase fluency/creativity but also risk errors/hallucinations, likely requiring <strong class="warning-text font-semibold">post-editing</strong>. Use high values for specific creative needs or highly professional/niche content where manual review is planned.
                         </p>
                     </div>
                 </div>
            </div>

            <div class="pt-4 text-center animate-slide-in-up-strong" style="animation-delay: 0.5s;">
                <button type="submit" id="submitButton" class="btn-execute-action w-full sm:w-auto">
                    <span class="button-content-wrapper inline-flex items-center justify-center">
                        <i data-feather="zap" class="w-5 h-5 mr-2.5 icon-main-btn"></i>
                        <span class="button-text-main">Transmute Subtitles</span>
                    </span>
                    <div class="spinner-animation hidden"></div>
                </button>
            </div>
        </form>

        <div id="downloadSection" class="mt-10 hidden space-y-4 animate-slide-in-up-strong" style="animation-delay: 0.6s;">
            <div>
                <button type="button" id="downloadAllButton" class="w-full btn-execute-action !bg-gradient-to-r !from-emerald-500 !to-green-500 dark:!from-emerald-600 dark:!to-green-600 hover:!brightness-110 focus:!ring-emerald-500">
                    <i data-feather="download-cloud" class="w-5 h-5 mr-2"></i>
                    <span id="downloadAllButtonText">Download Results</span>
                </button>
            </div>
        </div>

        <div id="statusSection" class="mt-10 animate-slide-in-up-strong" style="animation-delay: 0.7s;">
            <h3 class="text-xl font-semibold mb-4 text-light-text-primary dark:text-dark-text-primary">Processing Log</h3>
            <div id="statusPanel" class="h-60 p-4 overflow-y-auto rounded-lg bg-light-input-bg dark:bg-dark-input-bg border border-light-border dark:border-dark-border font-mono text-xs shadow-inner">
                <div class="text-light-text-muted dark:text-dark-text-muted">Awaiting your command...</div>
            </div>
        </div>


         <footer class="mt-16 pt-8 border-t border-light-border dark:border-dark-border text-center text-xs text-light-text-muted dark:text-dark-text-muted animate-fade-in-deep" style="animation-delay: 0.8s;">
            API key, settings, and file content are processed locally and sent directly to Google API. No data stored on our servers. Tool by Yiğit.
         </footer>
    </div>

    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-6 right-6 z-50 p-3 rounded-full shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2
        bg-gradient-to-br from-slate-800 to-slate-950 text-slate-100 focus:ring-slate-500 focus:ring-offset-light-primary-bg
        dark:bg-gradient-to-br dark:from-dark-accent-start dark:to-dark-accent-end dark:text-slate-100 dark:focus:ring-dark-accent-end dark:focus:ring-offset-dark-primary-bg
    ">
        <i data-feather="sun" class="w-6 h-6 block dark:hidden"></i>
        <i data-feather="moon" class="w-6 h-6 hidden dark:block"></i>
    </button>

    <div id="archiveModal" class="modal-dialog-container hidden">
        <div class="modal-backdrop" id="archiveModalOverlay"></div>
        <div class="modal-dialog-content">
            <div class="modal-dialog-header">
                <h3 class="modal-dialog-title" id="archiveModalTitle">Select Files from Archive</h3>
                 <button type="button" class="modal-dialog-close" id="modalCloseButton" aria-label="Close modal"> <i data-feather="x" class="w-5 h-5"></i> </button>
            </div>
            <div class="modal-dialog-body modal-file-list space-y-1.5" id="archiveModalList"> </div>
            <div class="modal-dialog-footer">
                <div class="flex-grow flex space-x-3">
                     <button type="button" id="modalSelectAll" class="btn-utility btn-utility-sm">Select All</button>
                     <button type="button" id="modalDeselectAll" class="btn-utility btn-utility-sm">Deselect All</button>
                </div>
                <button type="button" id="modalCancelButton" class="btn-utility btn-utility-sm !bg-light-secondary-bg dark:!bg-dark-secondary-bg">Cancel</button>
                <button type="button" id="modalConfirmButton" class="btn-execute-action !px-5 !py-2 !text-sm">Confirm Selection</button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <script>
        const form = document.getElementById('translateForm');
        const apiKeyInput = document.getElementById('apiKey');
        const toggleApiKey = document.getElementById('toggleApiKey');
        const toggleApiKeyIcon = toggleApiKey.querySelector('i');
        const modelIdInput = document.getElementById('modelId');
        const currentModelDisplay = document.getElementById('currentModelDisplay');
        const targetLanguageSelect = document.getElementById('targetLanguage');
        const customTargetLanguageInput = document.getElementById('customTargetLanguage');
        const contentTypeSelect = document.getElementById('contentType');
        const customContentTypeInput = document.getElementById('customContentType');
        const fileInput = document.getElementById('subtitleFile');
        const fileSelectionDisplay = document.getElementById('fileSelectionDisplay');
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        const showArchiveModalButton = document.getElementById('showArchiveModalButton');
        const archiveSelectionSummary = document.getElementById('archiveSelectionSummary');
        const optionalNotesInput = document.getElementById('optionalNotes');
        const temperatureInput = document.getElementById('temperatureSetting');
        const temperatureDisplay = document.getElementById('temperatureValueDisplay');
        const temperatureSlider = document.getElementById('temperatureSlider');
        const submitButton = document.getElementById('submitButton');
        const submitButtonContentWrapper = submitButton.querySelector('.button-content-wrapper');
        const submitButtonSpinner = submitButton.querySelector('.spinner-animation');
        const statusPanel = document.getElementById('statusPanel');
        const statusSection = document.getElementById('statusSection');
        const downloadSection = document.getElementById('downloadSection');
        const downloadAllButton = document.getElementById('downloadAllButton');
        const downloadAllButtonText = document.getElementById('downloadAllButtonText');
        const themeToggleButton = document.getElementById('themeToggleButton');
        const htmlElement = document.documentElement;
        const archiveModal = document.getElementById('archiveModal');
        const archiveModalOverlay = document.getElementById('archiveModalOverlay');
        const archiveModalList = document.getElementById('archiveModalList');
        const archiveModalTitle = document.getElementById('archiveModalTitle');
        const modalCloseButton = document.getElementById('modalCloseButton');
        const modalSelectAll = document.getElementById('modalSelectAll');
        const modalDeselectAll = document.getElementById('modalDeselectAll');
        const modalCancelButton = document.getElementById('modalCancelButton');
        const modalConfirmButton = document.getElementById('modalConfirmButton');

        const STORAGE_PREFIX = 'aiSubtitleAlchemist_v3_';
        const API_KEY_KEY = STORAGE_PREFIX + 'apiKey'; const MODEL_ID_KEY = STORAGE_PREFIX + 'modelId'; const TARGET_LANG_KEY = STORAGE_PREFIX + 'targetLanguage'; const CUSTOM_TARGET_LANG_KEY = STORAGE_PREFIX + 'customTargetLanguage'; const CONTENT_TYPE_KEY = STORAGE_PREFIX + 'contentType'; const CUSTOM_CONTENT_TYPE_KEY = STORAGE_PREFIX + 'customContentType'; const TEMPERATURE_KEY = STORAGE_PREFIX + 'temperature'; const THEME_KEY = STORAGE_PREFIX + 'theme';
        let processedResults = []; let currentArchiveEntries = []; let selectedArchiveIndices = []; let currentArchiveFilename = ''; const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25'; const DEFAULT_TEMPERATURE = 0.45; let wakeLock = null;

        function updateStatus(message, type = 'info') {
            if (statusSection.classList.contains('hidden')) {
                statusSection.classList.remove('hidden');
                setTimeout(() => statusSection.classList.remove('opacity-0'), 50);
            }
            const timestamp = new Date().toLocaleTimeString('en-GB'); const statusLine = document.createElement('div'); let typeClass = 'text-light-text-muted dark:text-dark-text-muted'; let iconType = 'info';
            switch (type) {
                case 'success': typeClass = 'text-green-500 dark:text-green-400'; iconType = 'check-circle'; break;
                case 'error': typeClass = 'text-light-accent-error dark:text-dark-accent-error font-medium'; iconType = 'alert-triangle'; break;
                case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-400'; iconType = 'alert-circle'; break;
                case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; iconType = 'info'; break;
                case 'system': typeClass = 'text-purple-500 dark:text-purple-400'; iconType = 'tool'; break;
                case 'api': typeClass = 'text-cyan-500 dark:text-cyan-400'; iconType = 'send'; break;
            }
            statusLine.className = `py-1 flex items-center ${typeClass} animate-fade-in-deep`; statusLine.innerHTML = `<i data-feather="${iconType}" class="w-4 h-4 mr-2 flex-shrink-0"></i><span>[${timestamp}] ${message}</span>`;
            const initialMsg = statusPanel.querySelector('div:only-child'); if (initialMsg && initialMsg.textContent.includes('Awaiting your command...')) { statusPanel.innerHTML = ''; }
            statusPanel.appendChild(statusLine); statusPanel.scrollTop = statusPanel.scrollHeight; feather.replace();
        }
        function setButtonLoading(isLoading) {
            submitButton.disabled = isLoading;
            if (isLoading) {
                submitButtonContentWrapper.classList.add('hidden');
                submitButtonSpinner.classList.remove('hidden');
                submitButton.classList.add('cursor-wait', 'opacity-75');
            } else {
                submitButtonContentWrapper.classList.remove('hidden');
                submitButtonSpinner.classList.add('hidden');
                submitButton.classList.remove('cursor-wait', 'opacity-75');
            }
        }
        function toggleCustomInput(selectElement, inputElement) { if (selectElement.value === 'Other') { inputElement.classList.remove('hidden'); inputElement.required = true; } else { inputElement.classList.add('hidden'); inputElement.required = false; inputElement.value = ''; } }
        function saveSettings() { try { localStorage.setItem(API_KEY_KEY, apiKeyInput.value.trim()); localStorage.setItem(MODEL_ID_KEY, modelIdInput.value.trim() || DEFAULT_MODEL); localStorage.setItem(TARGET_LANG_KEY, targetLanguageSelect.value); localStorage.setItem(CUSTOM_TARGET_LANG_KEY, customTargetLanguageInput.value.trim()); localStorage.setItem(CONTENT_TYPE_KEY, contentTypeSelect.value); localStorage.setItem(CUSTOM_CONTENT_TYPE_KEY, customContentTypeInput.value.trim()); localStorage.setItem(TEMPERATURE_KEY, temperatureInput.value); updateCurrentModelDisplay(); } catch (e) { console.error("LS Save Error:", e); updateStatus("Settings save failed.", "warning"); } }
        function loadSettings() { try { apiKeyInput.value = localStorage.getItem(API_KEY_KEY) || ''; modelIdInput.value = localStorage.getItem(MODEL_ID_KEY) || DEFAULT_MODEL; const savedLang = localStorage.getItem(TARGET_LANG_KEY); if (savedLang) targetLanguageSelect.value = savedLang; customTargetLanguageInput.value = localStorage.getItem(CUSTOM_TARGET_LANG_KEY) || ''; toggleCustomInput(targetLanguageSelect, customTargetLanguageInput); const savedType = localStorage.getItem(CONTENT_TYPE_KEY); if (savedType) contentTypeSelect.value = savedType; customContentTypeInput.value = localStorage.getItem(CUSTOM_CONTENT_TYPE_KEY) || ''; toggleCustomInput(contentTypeSelect, customContentTypeInput); const savedTemp = localStorage.getItem(TEMPERATURE_KEY); const tempValue = savedTemp !== null ? parseFloat(savedTemp) : DEFAULT_TEMPERATURE; const clampedTempValue = Math.max(0.0, Math.min(2.0, tempValue)); temperatureInput.value = clampedTempValue.toFixed(2); temperatureSlider.value = clampedTempValue.toFixed(2); temperatureDisplay.textContent = clampedTempValue.toFixed(2); updateCurrentModelDisplay(); } catch (e) { console.error("LS Load Error:", e); updateStatus("Settings load failed.", "warning"); modelIdInput.value = DEFAULT_MODEL; temperatureInput.value = DEFAULT_TEMPERATURE.toFixed(2); temperatureSlider.value = DEFAULT_TEMPERATURE.toFixed(2); temperatureDisplay.textContent = DEFAULT_TEMPERATURE.toFixed(2); updateCurrentModelDisplay(); } }
        function updateCurrentModelDisplay() { currentModelDisplay.textContent = modelIdInput.value.trim() || DEFAULT_MODEL; }
        function applyTheme(theme) { if (theme === 'dark') { htmlElement.classList.add('dark'); } else { htmlElement.classList.remove('dark'); } feather.replace(); }
        function toggleTheme() { const currentTheme = htmlElement.classList.contains('dark') ? 'dark' : 'light'; const newTheme = currentTheme === 'dark' ? 'light' : 'dark'; applyTheme(newTheme); try { localStorage.setItem(THEME_KEY, newTheme); } catch (e) { console.error("LS Theme Error:", e); } }
        function loadTheme() { let savedTheme = 'dark'; try { const storedTheme = localStorage.getItem(THEME_KEY); if (storedTheme === 'light' || (storedTheme === null && !window.matchMedia('(prefers-color-scheme: dark)').matches)) { savedTheme = 'light'; } } catch (e) { console.error("LS Theme Load Error:", e); } applyTheme(savedTheme); }
        function displaySelectedFile(file) { const fullFileName = file.name; const displayFileName = fullFileName.length > 50 ? `${fullFileName.substring(0, 25)}...${fullFileName.substring(fullFileName.length - 20)}` : fullFileName; fileNameDisplay.textContent = `Selected: ${displayFileName} (${(file.size / 1024).toFixed(1)} KB)`; fileNameDisplay.title = fullFileName; fileNameDisplay.classList.remove('text-light-text-secondary', 'dark:text-dark-text-secondary'); fileNameDisplay.classList.add('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold'); showArchiveModalButton.classList.add('hidden'); archiveSelectionSummary.textContent = ''; }
        function displayArchiveSelection(file, count) { const fullFileName = file.name; const displayFileName = fullFileName.length > 50 ? `${fullFileName.substring(0, 25)}...${fullFileName.substring(fullFileName.length - 20)}` : fullFileName; fileNameDisplay.textContent = `Archive: ${displayFileName}`; fileNameDisplay.title = fullFileName; fileNameDisplay.classList.remove('text-light-text-secondary', 'dark:text-dark-text-secondary'); fileNameDisplay.classList.add('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold'); showArchiveModalButton.classList.remove('hidden'); feather.replace({ width: '1em', height: '1em', class: 'inline-block -mt-0.5' }); updateArchiveSelectionSummary(); }
        function updateArchiveSelectionSummary() { const count = selectedArchiveIndices.length; archiveSelectionSummary.textContent = count > 0 ? `(${count} file${count > 1 ? 's' : ''} selected)` : '(No files selected)'; }
        function openArchiveModal() { populateArchiveModalList(); archiveModal.classList.remove('hidden'); requestAnimationFrame(() => { archiveModal.classList.add('is-active'); }); }
        function closeArchiveModal() { archiveModal.classList.remove('is-active'); setTimeout(() => { archiveModal.classList.add('hidden'); }, 300); }
        function getDirectory(path) { const lastSlash = path.lastIndexOf('/'); return lastSlash > -1 ? path.substring(0, lastSlash) : ''; }
        function getBaseName(path) { return path.substring(path.lastIndexOf('/') + 1); }
        function populateArchiveModalList() { archiveModalList.innerHTML = ''; archiveModalTitle.textContent = `Select Files from ${currentArchiveFilename}`; const filesByDirectory = currentArchiveEntries.reduce((acc, entry, index) => { const dir = getDirectory(entry.name); if (!acc[dir]) { acc[dir] = []; } acc[dir].push({ ...entry, originalIndex: index }); return acc; }, {}); Object.keys(filesByDirectory).sort().forEach(dir => { const files = filesByDirectory[dir]; const dirId = `dir-${dir.replace(/[^a-zA-Z0-9]/g, '-') || 'root'}`; const dirHeader = document.createElement('div'); dirHeader.className = 'modal-directory-header'; const dirCheckbox = document.createElement('input'); dirCheckbox.type = 'checkbox'; dirCheckbox.id = dirId; dirCheckbox.className = 'custom-form-checkbox dir-checkbox'; dirCheckbox.dataset.directory = dir; const dirNameLabel = document.createElement('label'); dirNameLabel.htmlFor = dirId; dirNameLabel.className = 'modal-directory-name-label'; dirNameLabel.textContent = dir === '' ? '(Root Directory)' : dir; dirHeader.appendChild(dirCheckbox); dirHeader.appendChild(dirNameLabel); archiveModalList.appendChild(dirHeader); files.forEach(entry => { const item = document.createElement('div'); item.className = 'modal-file-item'; item.dataset.directory = dir; const textContainer = document.createElement('div'); textContainer.className = 'min-w-0 overflow-hidden'; const fileNameSpan = document.createElement('span'); fileNameSpan.className = 'modal-file-name'; fileNameSpan.textContent = getBaseName(entry.name); fileNameSpan.title = entry.name; const fileTypeSpan = document.createElement('span'); fileTypeSpan.className = 'text-xs text-light-text-muted dark:text-dark-text-muted ml-1 whitespace-nowrap'; fileTypeSpan.textContent = ` (.${entry.extension})`; fileNameSpan.appendChild(fileTypeSpan); textContainer.appendChild(fileNameSpan); const fileCheckbox = document.createElement('input'); fileCheckbox.type = 'checkbox'; fileCheckbox.id = `modalFile_${entry.originalIndex}`; fileCheckbox.value = String(entry.originalIndex); fileCheckbox.className = 'custom-form-checkbox file-checkbox'; fileCheckbox.checked = selectedArchiveIndices.includes(entry.originalIndex); fileCheckbox.dataset.directory = dir; item.appendChild(textContainer); item.appendChild(fileCheckbox); archiveModalList.appendChild(item); item.addEventListener('click', (event) => { if (event.target.tagName === 'INPUT' && event.target.type === 'checkbox') { return; } const cb = item.querySelector('input[type="checkbox"]'); if (cb) { cb.checked = !cb.checked; updateDirectoryCheckboxState(dir); } }); fileCheckbox.addEventListener('change', () => { updateDirectoryCheckboxState(dir); }); }); dirCheckbox.addEventListener('change', (e) => { const isChecked = e.target.checked; archiveModalList.querySelectorAll(`.file-checkbox[data-directory="${dir}"]`).forEach(cb => { cb.checked = isChecked; }); }); updateDirectoryCheckboxState(dir); }); }
        function updateDirectoryCheckboxState(dir) { const dirCheckbox = archiveModalList.querySelector(`.dir-checkbox[data-directory="${dir}"]`); if (!dirCheckbox) return; const fileCheckboxes = archiveModalList.querySelectorAll(`.file-checkbox[data-directory="${dir}"]`); const totalFiles = fileCheckboxes.length; let checkedCount = 0; fileCheckboxes.forEach(cb => { if (cb.checked) checkedCount++; }); if (checkedCount === 0) { dirCheckbox.checked = false; dirCheckbox.indeterminate = false; } else if (checkedCount === totalFiles) { dirCheckbox.checked = true; dirCheckbox.indeterminate = false; } else { dirCheckbox.checked = false; dirCheckbox.indeterminate = true; } }
        async function processUploadedFile(file) {
            currentArchiveEntries = []; selectedArchiveIndices = []; currentArchiveFilename = file.name;
            const fileName = file.name; const fileType = fileName.split('.').pop().toLowerCase();
            const secondLastExt = fileName.split('.').slice(-2).join('.');
            showArchiveModalButton.classList.add('hidden'); archiveSelectionSummary.textContent = '';

            if (['zip', 'gz', 'tar.gz', '7z'].includes(fileType) || ['tar.gz'].includes(secondLastExt)) {
                updateStatus(`Processing archive: ${fileName}...`, 'info');
                try {
                    let archive; let entries = [];
                    if (fileType === 'zip') {
                        archive = await JSZip.loadAsync(file);
                        for (const [relativePath, zipEntry] of Object.entries(archive.files)) {
                            if (!zipEntry.dir) {
                                const entryName = zipEntry.name;
                                const entryExt = entryName.split('.').pop().toLowerCase();
                                if (['srt', 'ass', 'txt'].includes(entryExt)) {
                                    entries.push({ name: entryName, getContent: async () => zipEntry.async('string'), extension: entryExt });
                                }
                            }
                        }
                    } else {
                        updateStatus(`Archive type .${fileType} not fully supported for direct multi-file extraction. Please extract and upload files individually.`, 'warning');
                        displaySelectedFile(file); return;
                    }

                    if (entries.length > 0) {
                        currentArchiveEntries = entries; selectedArchiveIndices = entries.map((_, i) => i);
                        displayArchiveSelection(file, entries.length);
                        updateStatus(`Found ${entries.length} subtitle/text file(s). Click 'Select Files' to modify.`, 'success');
                    } else {
                        updateStatus(`No .srt/.ass/.txt found in '${fileName}'.`, 'warning');
                        displaySelectedFile(file);
                    }
                } catch (error) {
                    updateStatus(`Archive error: ${error.message}`, 'error'); console.error("Archive error:", error);
                    displaySelectedFile(file);
                }
            } else if (['srt', 'ass', 'txt'].includes(fileType)) {
                displaySelectedFile(file); currentArchiveEntries = []; selectedArchiveIndices = [];
            } else {
                updateStatus(`Unsupported type: .${fileType}.`, 'error');
                fileInput.value = ''; fileNameDisplay.textContent = 'No file selected'; fileNameDisplay.title = '';
                showArchiveModalButton.classList.add('hidden'); archiveSelectionSummary.textContent = '';
            }
        }
        document.addEventListener('DOMContentLoaded', () => { loadTheme(); loadSettings(); feather.replace(); });
        apiKeyInput.addEventListener('change', saveSettings); modelIdInput.addEventListener('change', saveSettings); targetLanguageSelect.addEventListener('change', () => { toggleCustomInput(targetLanguageSelect, customTargetLanguageInput); saveSettings(); }); customTargetLanguageInput.addEventListener('change', saveSettings); contentTypeSelect.addEventListener('change', () => { toggleCustomInput(contentTypeSelect, customContentTypeInput); saveSettings(); }); customContentTypeInput.addEventListener('change', saveSettings);
        temperatureInput.addEventListener('input', () => { let v = parseFloat(temperatureInput.value); if (isNaN(v)) { v = DEFAULT_TEMPERATURE; } v = Math.max(0.0, Math.min(2.0, v)); temperatureInput.value = v.toFixed(2); temperatureSlider.value = v.toFixed(2); temperatureDisplay.textContent = v.toFixed(2); saveSettings(); });
        temperatureSlider.addEventListener('input', () => { const v = parseFloat(temperatureSlider.value); temperatureInput.value = v.toFixed(2); temperatureDisplay.textContent = v.toFixed(2); saveSettings(); });
        toggleApiKey.addEventListener('click', () => { const t = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password'; apiKeyInput.setAttribute('type', t); toggleApiKeyIcon.setAttribute('data-feather', t === 'password' ? 'eye' : 'eye-off'); feather.replace(); });
        fileInput.addEventListener('change', async () => { downloadSection.classList.add('hidden'); processedResults = []; currentArchiveEntries = []; selectedArchiveIndices = []; currentArchiveFilename = ''; showArchiveModalButton.classList.add('hidden'); archiveSelectionSummary.textContent = ''; if (fileInput.files.length > 0) { await processUploadedFile(fileInput.files[0]); } else { fileNameDisplay.textContent = 'No file selected'; fileNameDisplay.title = ''; fileNameDisplay.classList.add('text-light-text-secondary', 'dark:text-dark-text-secondary'); fileNameDisplay.classList.remove('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold'); } });
        themeToggleButton.addEventListener('click', toggleTheme);
        showArchiveModalButton.addEventListener('click', openArchiveModal);
        archiveModalOverlay.addEventListener('click', closeArchiveModal);
        modalCloseButton.addEventListener('click', closeArchiveModal);
        modalCancelButton.addEventListener('click', closeArchiveModal);
        modalSelectAll.addEventListener('click', () => { archiveModalList.querySelectorAll('input[type="checkbox"].file-checkbox').forEach(cb => { cb.checked = true; }); archiveModalList.querySelectorAll('.dir-checkbox').forEach(cb => { cb.checked = true; cb.indeterminate = false; }); });
        modalDeselectAll.addEventListener('click', () => { archiveModalList.querySelectorAll('input[type="checkbox"]').forEach(cb => { cb.checked = false; cb.indeterminate = false; }); });
        modalConfirmButton.addEventListener('click', () => { selectedArchiveIndices = []; archiveModalList.querySelectorAll('.file-checkbox:checked').forEach(cb => { selectedArchiveIndices.push(parseInt(cb.value)); }); updateArchiveSelectionSummary(); closeArchiveModal(); if (selectedArchiveIndices.length === 0) { updateStatus("Warning: No files selected from archive.", "warning"); } });
        const requestWakeLock = async () => { if ('wakeLock' in navigator) { try { wakeLock = await navigator.wakeLock.request('screen'); updateStatus('Screen kept active during translation.', 'system'); wakeLock.addEventListener('release', () => { if (wakeLock) { updateStatus('Screen lock auto-released by browser.', 'warning'); wakeLock = null; } }); } catch (err) { console.error(`Wake Lock Error: ${err.name}, ${err.message}`); updateStatus(`Could not keep screen active.`, 'warning'); wakeLock = null; } } else { updateStatus('Wake Lock API not supported on this browser.', 'warning'); } };
        const releaseWakeLock = async () => { if (wakeLock !== null) { const tempLock = wakeLock; wakeLock = null; try { await tempLock.release(); updateStatus('Screen lock released.', 'system'); } catch (err) { console.error(`Wake Lock Release Error: ${err.name}, ${err.message}`); } } };

        function assToSrtConverter(assContent) {
            const eventsRegex = /\[Events\]\s*Format:(.*)\n([\s\S]*)/i;
            const dialogueRegexGlobal = /^Dialogue:\s*([^,]+),([^,]+),([^,]+),([^,]*),([^,]*),([^,]*),([^,]*),([^,]*),([^,]*),(.*)/gim;

            const eventsMatch = assContent.match(eventsRegex);
            if (!eventsMatch || eventsMatch.length < 3) {
                console.warn("ASS to SRT: [Events] section not found or malformed.");
                return { srt: null, originalDialogueDetails: [] };
            }

            const dialoguesSection = eventsMatch[2];
            let srtOutput = "";
            let srtCounter = 1;
            const originalDialogueDetails = [];

            let match;
            while ((match = dialogueRegexGlobal.exec(dialoguesSection)) !== null) {
                const layer = match[1].trim();
                const startTimeAss = match[2].trim();
                const endTimeAss = match[3].trim();
                const style = match[4].trim() || "Default";
                const name = match[5].trim();
                const marginL = match[6].trim();
                const marginR = match[7].trim();
                const marginV = match[8].trim();
                const effect = match[9].trim();
                let text = match[10].trim();

                text = text.replace(/\{[^}]*\}/g, "").replace(/\\N/g, "\n").trim();

                if (!text) continue;

                const formatAssTime = (assTime) => {
                    const parts = assTime.split(':');
                    const h = parts[0];
                    const m = parts[1];
                    const s_cs = parts[2].split('.');
                    const s = s_cs[0];
                    const cs = s_cs[1].padEnd(2, '0');
                    const ms = parseInt(cs) * 10;
                    return `${h.padStart(2, '0')}:${m.padStart(2, '0')}:${s.padStart(2, '0')},${String(ms).padStart(3, '0')}`;
                };

                try {
                    const startTimeSrt = formatAssTime(startTimeAss);
                    const endTimeSrt = formatAssTime(endTimeAss);

                    srtOutput += `${srtCounter}\n`;
                    srtOutput += `${startTimeSrt} --> ${endTimeSrt}\n`;
                    srtOutput += `${text}\n\n`;

                    originalDialogueDetails.push({
                        originalIndex: srtCounter - 1,
                        layer,
                        startTimeAss,
                        endTimeAss,
                        style,
                        name,
                        marginL,
                        marginR,
                        marginV,
                        effect
                    });
                    srtCounter++;
                } catch (e) {
                    console.warn(`ASS to SRT: Error formatting time for line: ${match[0]}. Error: ${e.message}`);
                }
            }
            if (srtCounter === 1) {
                console.warn("ASS to SRT: No valid dialogue lines found to convert.");
                return { srt: null, originalDialogueDetails: [] };
            }
            return { srt: srtOutput.trim(), originalDialogueDetails };
        }

        function srtToAssConverter(translatedSrtContent, originalAssHeaderSections, originalEventsFormatLine, originalDialogueDetails) {
            if (!translatedSrtContent || !originalAssHeaderSections || !originalEventsFormatLine || !originalDialogueDetails) {
                console.error("SRT to ASS: Missing one or more required inputs.");
                return null;
            }

            let finalAssContent = originalAssHeaderSections;
            finalAssContent += "\n\n[Events]\n";
            finalAssContent += `Format: ${originalEventsFormatLine}\n`;

            const srtBlockRegex = /(\d+)\s*\n(\d{2}:\d{2}:\d{2},\d{3})\s*-->\s*(\d{2}:\d{2}:\d{2},\d{3})\s*\n([\s\S]*?)(?=\n\n\d+|\s*$)/g;
            let match;
            let srtLineCounter = 0;
            while ((match = srtBlockRegex.exec(translatedSrtContent)) !== null) {
                const translatedText = match[4].replace(/\n/g, "\\N");
                const detail = originalDialogueDetails[srtLineCounter];

                if (detail) {
                    const startTime = detail.startTimeAss;
                    const endTime = detail.endTimeAss;
                    finalAssContent += `Dialogue: ${detail.layer},${startTime},${endTime},${detail.style},${detail.name},${detail.marginL},${detail.marginR},${detail.marginV},${detail.effect},${translatedText}\n`;
                } else {
                    console.warn(`SRT to ASS: No original details found for SRT line index ${srtLineCounter}. Skipping.`);
                }
                srtLineCounter++;
            }
            if (srtLineCounter === 0) {
                console.warn("SRT to ASS: No SRT blocks found in translated content. Returning header and empty Events.");
            }

            return finalAssContent.trim();
        }

        async function translateSingleContent(fileContent, originalName, fileExtension, translationParams) {
            const { apiKey, modelId, targetLanguage, contentType, optionalNotes, temperature } = translationParams;
            const displayName = originalName.includes('/') ? originalName.substring(originalName.lastIndexOf('/') + 1) : originalName;
            updateStatus(`Preparing '${displayName}' (as ${fileExtension})...`, 'info');

            let system_prompt_text = "";
            const user_content_text = fileContent;

            if (fileExtension === 'ass') {
                system_prompt_text = `You are an expert .ASS subtitle file translator. Your ONLY task is to translate the text content of the provided .ASS file into {targetLanguage}, while STRICTLY preserving ALL original formatting, structure, and metadata.

Content Type Context: {contentType}
{optionalNotesSection}

CRITICAL RULES - YOU MUST FOLLOW THESE EXACTLY:

1.  **DO NOT CHANGE STRUCTURE OR METADATA:**
    *   ALL section headers (e.g., '[Script Info]', '[V4+ Styles]', '[Events]') MUST remain IDENTICAL and in their original positions.
    *   ALL lines within '[Script Info]' (e.g., 'Title:', 'ScriptType:', 'WrapStyle:') MUST remain IDENTICAL.
    *   ALL lines within '[V4+ Styles]' (e.g., 'Format: Name, Fontname, ...', 'Style: Default,Arial,20,...') MUST remain IDENTICAL.
    *   Within the '[Events]' section:
        *   The 'Format: Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect, Text' line (or similar) MUST remain IDENTICAL.
        *   Any lines starting with 'Comment:' MUST remain IDENTICAL.

2.  **TRANSLATE ONLY THE DIALOGUE TEXT FIELD:**
    *   Your SOLE focus for translation is lines starting with 'Dialogue:'.
    *   A 'Dialogue:' line has multiple comma-separated fields (e.g., 'Dialogue: 0,0:00:01.23,0:00:04.56,Default,,0,0,0,,Original Text Here').
    *   You MUST translate ONLY the VERY LAST field (the 'Text' field) of these 'Dialogue:' lines.
    *   ALL other fields in 'Dialogue:' lines (Layer, Start time, End time, Style, Name, MarginL, MarginR, MarginV, Effect) MUST remain ABSOLUTELY UNCHANGED from the original. DO NOT alter timecodes, style names, actor names, margins, or effect data.

3.  **OUTPUT REQUIREMENTS (EXTREMELY IMPORTANT):**
    *   Your entire response MUST be ONLY the fully translated .ASS file content.
    *   There should be NO introductory phrases, NO explanations, NO apologies, NO summaries, NO markdown code blocks (like \`\`\`ass ... \`\`\`), and NO text whatsoever before or after the .ASS content.
    *   The output MUST be a valid .ASS file, ready to be saved directly.

Failure to adhere to these rules, especially regarding preserving formatting and outputting only the .ASS content, will result in an unusable translation.

Translate the following .ASS content into {targetLanguage} according to these rules:`;

            } else if (fileExtension === 'srt') {
                system_prompt_text = `You are an expert .SRT subtitle file translator. Your ONLY task is to translate the text content of the provided .SRT file into {targetLanguage}, while STRICTLY preserving ALL original formatting (sequence numbers, timecodes).

Content Type Context: {contentType}
{optionalNotesSection}

CRITICAL RULES - YOU MUST FOLLOW THESE EXACTLY:

1.  **DO NOT CHANGE STRUCTURE OR TIMING:**
    *   Subtitle sequence numbers (e.g., '1', '2', '3') MUST remain IDENTICAL.
    *   Timecodes (e.g., '00:00:01,234 --> 00:00:05,678') MUST remain ABSOLUTELY UNCHANGED.
2.  **TRANSLATE ONLY THE SUBTITLE TEXT:**
    *   For each subtitle block, translate only the text lines that appear below the timecode.
3.  **OUTPUT REQUIREMENTS (EXTREMELY IMPORTANT):**
    *   Your entire response MUST be ONLY the fully translated .SRT file content.
    *   There should be NO introductory phrases, NO explanations, NO apologies, NO summaries, NO markdown code blocks (like \`\`\`srt ... \`\`\`), and NO text whatsoever before or after the .SRT content.
    *   The output MUST be a valid .SRT file, ready to be saved directly.

Translate the following .SRT content into {targetLanguage} according to these rules:`;

            } else if (fileExtension === 'txt') {
                system_prompt_text = `You are a text line translator. Your task is to translate the provided text content into {targetLanguage}, line by line.

Content Type Context: {contentType}
{optionalNotesSection}

CRITICAL RULES - YOU MUST FOLLOW THESE EXACTLY:

1.  Translate the text content of each line.
2.  Preserve the line-by-line structure.
3.  **OUTPUT REQUIREMENTS (EXTREMELY IMPORTANT):**
    *   Your entire response MUST be ONLY the translated text.
    *   There should be NO introductory phrases, NO explanations, NO apologies, NO summaries, NO markdown code blocks, and NO text whatsoever before or after the translated content.

Translate the following text content into {targetLanguage} according to these rules:`;
            } else {
                updateStatus(`Unsupported file extension: ${fileExtension} for API translation.`, 'error');
                throw new Error(`Unsupported file extension for API translation: ${fileExtension}`);
            }

            const final_system_prompt = system_prompt_text
                .replace(/{targetLanguage}/g, targetLanguage)
                .replace(/{contentType}/g, contentType)
                .replace('{optionalNotesSection}', optionalNotes ? `\nConsider these User Notes:\n${optionalNotes}` : '');

            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`;
            const requestData = {
                systemInstruction: { parts: [{ text: final_system_prompt }] },
                contents: [{ role: 'user', parts: [{ text: user_content_text }] }],
                generationConfig: { responseMimeType: 'text/plain', temperature: temperature },
                safetySettings: [
                    { category: "HARM_CATEGORY_HARASSMENT", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_HATE_SPEECH", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_SEXUALLY_EXPLICIT", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_DANGEROUS_CONTENT", threshold: "BLOCK_NONE" }
                ]
            };

            updateStatus(`Sending '${displayName}' (as ${fileExtension}) to Gemini (${modelId})...`, 'api');

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', },
                    body: JSON.stringify(requestData),
                });
                const responseBody = await response.text();

                if (!response.ok) {
                    let errDetail = responseBody;
                    try {
                        const jsonError = JSON.parse(responseBody);
                        errDetail = jsonError?.error?.message || responseBody;
                        if (jsonError?.error?.details) {
                            errDetail += ` Details: ${JSON.stringify(jsonError.error.details)}`;
                        }
                    } catch (e) { /* no-op */ }
                    throw new Error(`API Error HTTP ${response.status}: ${errDetail.substring(0, 1000)}`);
                }

                updateStatus(`Response for '${displayName}' (as ${fileExtension}) received. Processing...`, 'api');
                let translatedText = null;
                try {
                    const d = JSON.parse(responseBody);
                    const candidates = d?.candidates;
                    if (candidates && candidates.length > 0) {
                        const candidate = candidates[0];
                        if (candidate.finishReason === "SAFETY") {
                             updateStatus(`Translation for '${displayName}' blocked due to safety reasons. Ratings: ${JSON.stringify(candidate.safetyRatings)}`, 'error');
                             throw new Error(`Content blocked by safety filters for '${displayName}'.`);
                        }
                        if (candidate.finishReason === "MAX_TOKENS") {
                            updateStatus(`Translation for '${displayName}' may be incomplete: MAX_TOKENS reached.`, 'warning');
                        }
                         if (candidate.finishReason && candidate.finishReason !== 'STOP' && candidate.finishReason !== 'MAX_TOKENS') {
                            updateStatus(`Translation for '${displayName}' stopped due to: ${candidate.finishReason}. Safety: ${JSON.stringify(candidate.safetyRatings)}`, 'warning');
                        }

                        const content = candidate?.content;
                        if (content && content.parts && content.parts.length > 0) {
                            translatedText = content.parts[0]?.text;
                        } else if (candidate.finishReason !== 'SAFETY') {
                            throw new Error(`Empty content parts in API response for '${displayName}'. Finish Reason: ${candidate.finishReason}`);
                        }
                    } else {
                        throw new Error(`No candidates in API response for '${displayName}'. Full response: ${responseBody.substring(0, 200)}`);
                    }
                } catch (e) {
                    console.error(`Error parsing API response for ${displayName}:`, e, "\nRaw Response Body (first 500 chars):\n", responseBody.substring(0,500));
                    throw new Error(`API Response Parse/Process Error for '${displayName}': ${e.message}`);
                }

                if (translatedText && translatedText.trim().length > 0) {
                    const markdownRegex = /^```(?:[a-zA-Z0-9]+)?\s*\n([\s\S]*?)\n```$/;
                    const match = translatedText.match(markdownRegex);
                    if (match && match[1]) {
                        updateStatus(`Markdown detected and stripped from '${displayName}' response.`, 'system');
                        translatedText = match[1].trim();
                    } else {
                        translatedText = translatedText.trim();
                    }

                    let isValid = true;
                    if (fileExtension === 'srt') {
                        if (!translatedText.match(/^\d+\s*\r?\n\d{2}:\d{2}:\d{2},\d{3} --> \d{2}:\d{2}:\d{2},\d{3}/m)) {
                            updateStatus(`Warning: Output for '${displayName}' (SRT) might be invalid. Review carefully. Start of AI response: ${translatedText.substring(0,150)}...`, 'warning');
                            isValid = false;
                        }
                    } else if (fileExtension === 'ass') {
                        if (!translatedText.toLowerCase().includes('[events]') || !translatedText.toLowerCase().includes('dialogue:')) {
                            updateStatus(`Warning: Output for '${displayName}' (ASS) seems invalid (missing [Events] or Dialogue:). Review carefully. Start of AI response: ${translatedText.substring(0,150)}...`, 'warning');
                            isValid = false;
                        }
                        if (user_content_text.toLowerCase().includes('[script info]') && !translatedText.toLowerCase().includes('[script info]')) {
                            updateStatus(`Warning: '[Script Info]' section might be missing in translated ASS for '${displayName}'.`, 'warning');
                        }
                         if (user_content_text.toLowerCase().includes('[v4+ styles]') && !translatedText.toLowerCase().includes('[v4+ styles]')) {
                            updateStatus(`Warning: '[V4+ Styles]' section might be missing in translated ASS for '${displayName}'.`, 'warning');
                        }
                    }

                    if (isValid) {
                        updateStatus(`'${displayName}' (as ${fileExtension}) translated!`, 'success');
                    }
                    return translatedText;
                } else if (processedResults.find(r => r.originalName === originalName && r.error && r.error.includes("Content blocked by safety filters"))) {
                    return "";
                }
                else {
                    throw new Error(`Empty translation content received for '${displayName}' after processing.`);
                }
            } catch (error) {
                if (!statusPanel.innerHTML.includes(error.message.substring(0,50))) {
                    updateStatus(`Translation failed for '${displayName}': ${error.message}`, 'error');
                }
                console.error(`Full error during translation attempt for ${displayName}:`, error);
                throw error;
            }
        }

        form.addEventListener('submit', async (event) => {
            event.preventDefault(); setButtonLoading(true); downloadSection.classList.add('hidden'); processedResults = []; statusPanel.innerHTML = ''; updateStatus('Translation process initiated.', 'info');
            const apiKey = apiKeyInput.value.trim(); const modelIdToUse = modelIdInput.value.trim() || DEFAULT_MODEL; const mainFile = fileInput.files[0]; let targetLanguage = targetLanguageSelect.value === 'Other' ? customTargetLanguageInput.value.trim() : targetLanguageSelect.value; let contentType = contentTypeSelect.value === 'Other' ? customContentTypeInput.value.trim() : contentTypeSelect.value; const optionalNotes = optionalNotesInput.value.trim(); const temperature = parseFloat(temperatureInput.value) || DEFAULT_TEMPERATURE;
            let valid = true; if (!apiKey) { updateStatus('API Key required.', 'error'); valid = false; } if (!modelIdToUse) { updateStatus('Model ID required.', 'error'); valid = false; } if (!mainFile && currentArchiveEntries.length === 0) { updateStatus('Please select a file.', 'error'); valid = false; } if (!targetLanguage) { updateStatus('Target Language required.', 'error'); valid = false; } if (!contentType) { updateStatus('Content Type required.', 'error'); valid = false; } if (isNaN(temperature) || temperature < 0.0 || temperature > 2.0) { updateStatus('Invalid Temperature value.', 'error'); valid = false; } if (!valid) { setButtonLoading(false); return; }
            updateStatus(`Using model: ${modelIdToUse}, Target: ${targetLanguage}, Temp: ${temperature.toFixed(2)}.`, 'system'); if (optionalNotes) updateStatus(`Additional notes provided.`, 'system'); updateStatus(`Safety filters are set to BLOCK_NONE. Please ensure your input is appropriate.`, 'warning');
            await requestWakeLock(); let filesToProcess = [];
            if (currentArchiveEntries.length > 0 && selectedArchiveIndices.length > 0) { selectedArchiveIndices.forEach(index => { if (index >= 0 && index < currentArchiveEntries.length) { filesToProcess.push(currentArchiveEntries[index]); } }); updateStatus(`Processing ${filesToProcess.length} selected file(s) from archive...`, 'info'); }
            else if (mainFile) { const mainFileName = mainFile.name; const mainFileExtension = mainFileName.split('.').pop()?.toLowerCase(); if (['srt', 'ass', 'txt'].includes(mainFileExtension)) { filesToProcess.push({ name: mainFileName, getContent: () => mainFile.text(), extension: mainFileExtension }); updateStatus(`Processing single file: ${mainFileName}`, 'info'); } else if (!['zip', 'tar.gz', 'gz', '7z'].includes(mainFileExtension) && !['tar.gz'].includes(mainFileName.split('.').slice(-2).join('.'))) { updateStatus(`Invalid file type: .${mainFileExtension}. Supported: SRT, ASS, TXT, ZIP.`, 'error'); setButtonLoading(false); await releaseWakeLock(); return; } else if (currentArchiveEntries.length === 0 && mainFile) { updateStatus('File is an archive, but no specific files were selected. Please use "Select Files" or upload a non-archive subtitle file.', 'warning'); setButtonLoading(false); await releaseWakeLock(); return; } } else { updateStatus('No file selected or no files chosen from archive.', 'error'); setButtonLoading(false); await releaseWakeLock(); return; }
            if (filesToProcess.length === 0) { updateStatus('No valid files to translate.', 'warning'); setButtonLoading(false); await releaseWakeLock(); return; }

            let tasksWithContent = [];
            updateStatus(`Reading and pre-processing content of ${filesToProcess.length} file(s)...`, 'system');
            let originalAssDataCache = {};

            try {
                for (const fileTask of filesToProcess) {
                    const displayName = fileTask.name.includes('/') ? fileTask.name.substring(fileTask.name.lastIndexOf('/') + 1) : fileTask.name;
                    updateStatus(`Reading '${displayName}'...`, 'system');
                    let fileContent = await fileTask.getContent();
                    let effectiveExtensionForApi = fileTask.extension;
                    let contentForApi = fileContent;

                    if (fileTask.extension === 'ass') {
                        updateStatus(`Converting '${displayName}' from ASS to SRT for translation...`, 'system');
                        
                        const eventsSectionRegex = /\[Events\]/i;
                        const eventsIndex = fileContent.search(eventsSectionRegex);
                        let originalHeaderSections = "";
                        let eventsFormatLine = "Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect, Text";

                        if (eventsIndex !== -1) {
                            originalHeaderSections = fileContent.substring(0, eventsIndex).trim();
                            const eventsContentAfterHeader = fileContent.substring(eventsIndex);
                            const formatLineRegex = /Format:\s*([^\n\r]+)/i;
                            const formatMatch = eventsContentAfterHeader.match(formatLineRegex);
                            if (formatMatch && formatMatch[1]) {
                                eventsFormatLine = formatMatch[1].trim();
                            }
                        } else {
                            updateStatus(`Warning: '[Events]' section start not clearly found in '${displayName}'. Header might be incomplete.`, "warning");
                            originalHeaderSections = fileContent; 
                        }
                        
                        const conversionResult = assToSrtConverter(fileContent);
                        if (conversionResult && conversionResult.srt) {
                            contentForApi = conversionResult.srt;
                            effectiveExtensionForApi = 'srt';
                            originalAssDataCache[fileTask.name] = {
                                headerSections: originalHeaderSections,
                                dialogueDetails: conversionResult.originalDialogueDetails,
                                eventsFormat: eventsFormatLine
                            };
                            updateStatus(`'${displayName}' converted to SRT successfully.`, 'success');
                        } else {
                            updateStatus(`Failed to convert '${displayName}' to SRT. Will attempt to translate as ASS directly.`, 'warning');
                        }
                    }
                    if (!contentForApi) { throw new Error(`Content empty for ${displayName} after pre-processing`); }
                    tasksWithContent.push({ name: fileTask.name, originalExtension: fileTask.extension, content: contentForApi, extensionForApi: effectiveExtensionForApi });
                }
            }
            catch (error) {
                updateStatus(`Error reading or pre-processing file content: ${error.message}`, 'error');
                setButtonLoading(false); await releaseWakeLock(); return;
            }

            const translationParams = { apiKey, modelId: modelIdToUse, targetLanguage, contentType, optionalNotes, temperature };
            let successCount = 0;

            for (let i = 0; i < tasksWithContent.length; i++) {
                const task = tasksWithContent[i];
                const displayName = task.name.includes('/') ? task.name.substring(task.name.lastIndexOf('/') + 1) : task.name;
                updateStatus(`Translating ${i + 1}/${tasksWithContent.length}: '${displayName}' (as ${task.extensionForApi})...`, 'info');
                try {
                    let translatedApiContent = await translateSingleContent(task.content, task.name, task.extensionForApi, translationParams);
                    let finalTranslatedText = translatedApiContent;
                    let finalExtension = task.originalExtension;


                    if (task.originalExtension === 'ass' && task.extensionForApi === 'srt' && originalAssDataCache[task.name]) {
                        updateStatus(`Converting translated SRT back to ASS for '${displayName}'...`, 'system');
                        const assCache = originalAssDataCache[task.name];
                        const reconvertedAss = srtToAssConverter(translatedApiContent, assCache.headerSections, assCache.eventsFormat, assCache.dialogueDetails);
                        if (reconvertedAss) {
                            finalTranslatedText = reconvertedAss;
                            updateStatus(`'${displayName}' successfully reconverted to ASS.`, 'success');
                        } else {
                            updateStatus(`Failed to reconvert '${displayName}' to ASS. Result will be the translated SRT.`, 'warning');
                            finalExtension = 'srt';
                        }
                    }

                    processedResults.push({ originalName: task.name, translatedText: finalTranslatedText, error: null, extension: finalExtension });
                    successCount++;
                } catch (error) {
                    processedResults.push({ originalName: task.name, translatedText: null, error: error.message || "Unknown error", extension: task.originalExtension });
                    if (error.message && error.message.toLowerCase().includes("api key not valid")) { updateStatus("API Key Error. Aborting further translations.", "error"); break; }
                    if (error.message && (error.message.includes("quota") || error.message.includes("limit"))) { updateStatus("API limit likely reached. Further translations may fail.", "error"); }
                }
            }
            if (tasksWithContent.length > 0) { updateStatus(`Batch complete: ${successCount}/${tasksWithContent.length} successful.`, successCount === tasksWithContent.length ? 'success' : (successCount > 0 ? 'warning' : 'error')); }
            if (processedResults.some(r => r.translatedText)) { setupDownloadSection(); } else if (tasksWithContent.length > 0) { updateStatus('No files translated successfully.', 'error'); }
            setButtonLoading(false); await releaseWakeLock();
        });

        function setupDownloadSection() {
            downloadSection.classList.remove('hidden');
            let successfulTranslations = processedResults.filter(r => r.translatedText);
            if (successfulTranslations.length === 0) {
                downloadSection.classList.add('hidden');
                return;
            }
            if (successfulTranslations.length > 1) {
                downloadAllButtonText.textContent = `Download All (${successfulTranslations.length}) as ZIP`;
            } else if (successfulTranslations.length === 1) {
                downloadAllButtonText.textContent = `Download`;
            }
        }
        function getLanguageCode() { let langCode = 'tr'; const selectedLang = targetLanguageSelect.value; if (selectedLang === 'Other') { langCode = customTargetLanguageInput.value.trim().substring(0, 3).toLowerCase().replace(/[^a-z]/g, '') || 'unk'; } else { const langMap = { 'Turkish': 'tr', 'English': 'en', 'Spanish': 'es', 'French': 'fr', 'German': 'de', 'Japanese': 'ja', 'Korean': 'ko', 'Chinese (Simplified)': 'zh-cn', 'Portuguese (Brazil)': 'pt-br', 'Russian': 'ru', 'Arabic': 'ar' }; langCode = langMap[selectedLang] || selectedLang.substring(0, 2).toLowerCase(); } return langCode; }
        function downloadSingleFile(content, filename) { if (!content || content.trim().length === 0) { updateStatus(`No content for ${filename}.`, 'error'); return; } try { const BOM = "\uFEFF"; const blob = new Blob([BOM + content], { type: 'text/plain;charset=utf-8' }); const url = URL.createObjectURL(blob); const a = document.createElement('a'); a.style.display = 'none'; a.href = url; a.download = filename; document.body.appendChild(a); a.click(); window.URL.revokeObjectURL(url); document.body.removeChild(a); updateStatus(`Download initiated: "${filename}".`, 'success'); } catch(e) { updateStatus(`Download error: ${e.message}`, 'error'); console.error("Download Error:", e); } }
        downloadAllButton.addEventListener('click', async (event) => {
            event.stopPropagation();
            const successfulTranslations = processedResults.filter(r => r.translatedText); if (successfulTranslations.length === 0) { updateStatus('No files to download.', 'error'); return; } if (successfulTranslations.length === 1) { const result = successfulTranslations[0]; const originalBaseName = result.originalName.includes('/') ? result.originalName.substring(result.originalName.lastIndexOf('/') + 1) : result.originalName; const baseName = originalBaseName.substring(0, originalBaseName.lastIndexOf('.')) || originalBaseName; const langCode = getLanguageCode(); const outputFilename = `${baseName}_${langCode}.${result.extension}`; downloadSingleFile(result.translatedText, outputFilename); } else { updateStatus('Preparing ZIP archive...', 'info'); try { const zip = new JSZip(); const langCode = getLanguageCode(); const BOM = "\uFEFF"; successfulTranslations.forEach(result => { const originalFullPath = result.originalName; const lastSlashIndex = originalFullPath.lastIndexOf('/'); const originalDir = lastSlashIndex > -1 ? originalFullPath.substring(0, lastSlashIndex + 1) : ''; const originalFilename = lastSlashIndex > -1 ? originalFullPath.substring(lastSlashIndex + 1) : originalFullPath; const baseName = originalFilename.substring(0, originalFilename.lastIndexOf('.')) || originalFilename; const outputFilename = `${baseName}_${langCode}.${result.extension}`; let finalZipPath = originalDir + outputFilename; let count = 1; while(zip.file(finalZipPath)) { finalZipPath = `${originalDir}${baseName}_${langCode}_(${count++}).${result.extension}`; } zip.file(finalZipPath, BOM + result.translatedText); }); const zipBlob = await zip.generateAsync({ type: "blob", compression: "DEFLATE", compressionOptions: { level: 6 } }); const archiveBaseName = fileInput.files[0] ? (fileInput.files[0].name.substring(0, fileInput.files[0].name.lastIndexOf('.')) || fileInput.files[0].name) : 'translations'; const zipFilename = `${archiveBaseName}_${langCode}_all.zip`; const url = URL.createObjectURL(zipBlob); const a = document.createElement('a'); a.style.display = 'none'; a.href = url; a.download = zipFilename; document.body.appendChild(a); a.click(); window.URL.revokeObjectURL(url); document.body.removeChild(a); updateStatus(`ZIP download initiated: "${zipFilename}".`, 'success'); } catch (e) { updateStatus(`ZIP creation error: ${e.message}`, 'error'); console.error("ZIP Error:", e); } } });
        const observer = new MutationObserver((mutationsList, obs) => { for(const mutation of mutationsList) { if (mutation.type === 'childList' && mutation.addedNodes.length > 0) { feather.replace(); return; } } }); observer.observe(document.body, { childList: true, subtree: true });
    </script>
</body>
</html>
