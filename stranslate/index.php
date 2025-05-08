<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/ai/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ai/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ai/favicon-16x16.png">
    <link rel="manifest" href="/ai/site.webmanifest">
    <link rel="shortcut icon" href="/ai/favicon.ico">
    <title>Future of Translations | AI Subtitle Translator | Gemini Powered</title>
    <meta name="description" content="Translate .srt, .ass, or .txt subtitle files (including from .zip & .xz archives) professionally using Google Gemini AI. Customize temperature for balance between quality and fluency. Preserves timing & format.">
    <meta name="keywords" content="subtitle translator, ai translation, gemini api, gemini, srt translator, ass translator, text translator, zip subtitle, xz subtitle, archive translation, ai subtitle, machine translation, localization, global, professional translation, tryigit, screen wake lock, temperature setting, translation quality, translation fluency">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/translate" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
                    },
                    colors: {
                        primary: { light: '#9333ea', DEFAULT: '#6d28d9', dark: '#5b21b6' },
                        secondary: { light: '#2dd4bf', DEFAULT: '#14b8a6', dark: '#0d9488' },
                        'dm-bg': '#000000', 'dm-card': '#111111', 'dm-text-primary': '#e5e5e5', 'dm-text-secondary': '#a3a3a3', 'dm-text-muted': '#737373', 'dm-border': '#333333', 'dm-input-bg': '#1a1a1a', 'dm-input-border': '#404040', 'dm-input-placeholder': '#737373', 'dm-status-bg': '#0a0a0a', 'dm-status-border': '#2a2a2a', 'dm-status-text': '#cccccc',
                    },
                    boxShadow: { 'input-focus': '0 0 0 3px rgba(109, 40, 217, 0.3)', 'btn': '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)', 'btn-hover': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)', 'dark-input-focus': '0 0 0 3px rgba(147, 51, 234, 0.5)', 'dark-btn': '0 4px 6px -1px rgba(255, 255, 255, 0.05), 0 2px 4px -2px rgba(255, 255, 255, 0.05)', 'dark-btn-hover': '0 10px 15px -3px rgba(255, 255, 255, 0.07), 0 4px 6px -4px rgba(255, 255, 255, 0.07)', }
                },
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            html.dark { color-scheme: dark; }
            body { @apply bg-gray-100 font-sans antialiased text-gray-800 dark:bg-dm-bg dark:text-dm-text-primary transition-colors duration-300; }
            label { @apply block mb-1.5 text-sm font-semibold text-gray-700 dark:text-dm-text-secondary; }
            input[type="text"], input[type="password"], input[type="number"], select, textarea { @apply block w-full px-4 py-2.5 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition duration-150 ease-in-out sm:text-sm dark:bg-dm-input-bg dark:border-dm-input-border dark:text-dm-text-primary dark:placeholder-dm-input-placeholder dark:focus:ring-primary-light/50 dark:focus:border-primary-light dark:shadow-none; }
            select { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e"); background-position: right 0.7rem center; background-repeat: no-repeat; background-size: 1.25em 1.25em; -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 2.8rem; }
            html.dark select { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23a3a3a3' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e"); }
            textarea { @apply min-h-[90px] leading-relaxed; }
            fieldset, .fieldset-replacement { @apply border border-gray-200 rounded-lg p-5 pt-3 dark:border-dm-border dark:bg-dm-card; }
            legend, .legend-replacement { @apply px-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary; }
            .description { @apply mt-1.5 text-xs text-gray-600 dark:text-dm-text-muted; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline dark:text-primary-light dark:hover:text-purple-400; }
            .warning { @apply text-amber-600 dark:text-yellow-400 font-medium; }
            #statusPanel::-webkit-scrollbar { width: 6px; } #statusPanel::-webkit-scrollbar-track { @apply bg-dm-status-border rounded; } #statusPanel::-webkit-scrollbar-thumb { @apply bg-gray-600 dark:bg-gray-700 rounded; } #statusPanel::-webkit-scrollbar-thumb:hover { @apply bg-gray-500 dark:bg-gray-600; }
            input[type="range"]::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 16px; height: 16px; @apply bg-primary dark:bg-primary-light; cursor: pointer; border-radius: 50%; }
            input[type="range"]::-moz-range-thumb { width: 16px; height: 16px; @apply bg-primary dark:bg-primary-light; cursor: pointer; border-radius: 50%; border: none; }
            input[type="range"] { @apply w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary/50 dark:focus:ring-primary-light/50 dark:focus:ring-offset-dm-bg; }
            .custom-checkbox { @apply w-5 h-5 text-primary dark:text-primary-light bg-white dark:bg-dm-input-bg border-gray-300 dark:border-dm-input-border rounded focus:ring-primary dark:focus:ring-primary-light focus:ring-offset-0 dark:focus:ring-offset-dm-card; }
            .custom-checkbox:checked { @apply bg-primary dark:bg-primary-light border-primary dark:border-primary-light; }
            .archive-file-item { @apply grid grid-cols-[minmax(0,1fr)_auto] gap-x-3 items-center p-2.5 rounded-md bg-gray-50 dark:bg-dm-input-bg hover:bg-gray-100 dark:hover:bg-opacity-75 cursor-pointer transition-colors duration-150; }
            .filename-text-container { @apply min-w-0 overflow-hidden; }
            .filename-text { @apply block text-sm text-gray-800 dark:text-dm-text-primary overflow-hidden whitespace-nowrap text-ellipsis; }
            #archiveFilesList { @apply max-h-60 overflow-y-auto overflow-x-hidden space-y-1.5 rounded-lg border border-gray-300 dark:border-dm-border p-2 bg-white dark:bg-dm-input-bg shadow-sm; }
        }
        @layer components {
            .file-input-area { @apply relative block w-full p-6 text-center border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-primary/70 transition-colors duration-200 ease-in-out dark:bg-dm-card dark:border-dm-border dark:hover:bg-opacity-75 dark:hover:border-primary-light/70; }
            .file-input-area .icon { @apply w-10 h-10 mx-auto text-gray-400 group-hover:text-primary/80 transition-colors dark:text-dm-text-muted dark:group-hover:text-primary-light/80; }
            .file-input-area .text-main { @apply mt-2 block text-sm font-semibold text-gray-700 dark:text-dm-text-secondary; }
            .file-input-area .text-sub { @apply block text-xs text-gray-500 dark:text-dm-text-muted; }
            .file-input-area input[type="file"] { @apply absolute inset-0 w-full h-full opacity-0 cursor-pointer; }
            .btn { @apply inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-btn focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out disabled:opacity-60 disabled:cursor-not-allowed dark:focus:ring-offset-dm-bg dark:shadow-dark-btn; }
            .btn:hover:not(:disabled) { @apply dark:shadow-dark-btn-hover; }
            .btn-primary { @apply btn text-white bg-primary hover:bg-primary-dark focus:ring-primary dark:bg-primary dark:hover:bg-primary-dark; }
            .btn-secondary { @apply btn text-white bg-secondary hover:bg-secondary-dark focus:ring-secondary dark:bg-secondary dark:hover:bg-secondary-dark; }
             @keyframes spin { to { transform: rotate(360deg); } }
             .spinner { animation: spin 1s linear infinite; @apply inline-block w-5 h-5 border-[3px] border-current border-t-transparent rounded-full; }
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1N2MBK3GT"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-B1N2MBK3GT'); </script>
</head>
<body class="bg-gray-100 dark:bg-dm-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <header class="text-center mb-10 md:mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-dm-text-primary"> Future of Subtitle Translations <span class="text-primary dark:text-primary-light">AI</span> </h1>
            <p class="mt-3 text-lg text-gray-600 dark:text-dm-text-secondary max-w-2xl mx-auto"> Translate subtitles effortlessly (SRT, ASS, TXT, ZIP, XZ) while preserving timing and quality, powered by Google Gemini. </p>
        </header>

        <form id="translateForm" onsubmit="return false;" class="space-y-8">
            <fieldset>
                <legend>API Configuration</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                        <label for="apiKey">Gemini API Key:</label>
                        <div class="flex rounded-lg">
                             <input type="password" id="apiKey" name="apiKey" required placeholder="Enter your Google AI Studio key" class="flex-1 min-w-0 rounded-none rounded-l-lg focus:z-10">
                             <button type="button" id="toggleApiKey" title="Show/Hide Key" class="inline-flex items-center px-3 py-2 text-gray-500 bg-gray-50 border border-l-0 border-gray-300 rounded-r-lg hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary dark:bg-dm-input-bg dark:text-dm-text-muted dark:border-dm-input-border dark:hover:bg-opacity-75 dark:focus:ring-primary-light dark:focus:border-primary-light"> <i data-feather="eye" class="w-4 h-4"></i> </button>
                        </div>
                         <p class="description"> Get your key from <a href="https://aistudio.google.com/apikey" target="_blank" rel="noopener noreferrer">Google AI Studio</a>. Stored locally. </p>
                    </div>
                     <div>
                        <label for="modelId">Gemini Model ID:</label>
                        <input type="text" id="modelId" name="modelId" placeholder="e.g., gemini-2.5-pro-exp-03-25">
                        <p class="description">Currently using: <code class="font-medium text-primary-dark dark:text-primary-light"><span id="currentModelDisplay"></span></code></p>
                    </div>
                 </div>
            </fieldset>

             <fieldset>
                <legend>Translation Settings</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                        <label for="targetLanguage">Target Language:</label>
                        <select id="targetLanguage" name="targetLanguage"> <option value="Turkish">Turkish</option> <option value="English">English</option> <option value="Spanish">Spanish</option> <option value="French">French</option> <option value="German">German</option> <option value="Japanese">Japanese</option> <option value="Korean">Korean</option> <option value="Chinese (Simplified)">Chinese (Simplified)</option> <option value="Portuguese (Brazil)">Portuguese (Brazil)</option> <option value="Russian">Russian</option> <option value="Arabic">Arabic</option> <option value="Other">Other (Specify)</option> </select>
                        <input type="text" id="customTargetLanguage" name="customTargetLanguage" placeholder="Enter language if 'Other'" class="mt-2 hidden">
                         <p class="description">Language for the translated output. Saved locally.</p>
                    </div>
                     <div>
                        <label for="contentType">Content Type:</label>
                        <select id="contentType" name="contentType"> <option value="Anime">Anime</option> <option value="Movie">Movie</option> <option value="TV Series">TV Series</option> <option value="Donghua">Donghua</option> <option value="Video Game">Video Game</option> <option value="Documentary">Documentary</option> <option value="Educational">Educational</option> <option value="General">General/Text</option> <option value="Other">Other (Specify)</option> </select>
                        <input type="text" id="customContentType" name="customContentType" placeholder="Enter type if 'Other'" class="mt-2 hidden">
                         <p class="description">Provides context to the AI. Saved locally.</p>
                    </div>
                 </div>
            </fieldset>

             <div class="fieldset-replacement">
                <p class="legend-replacement mb-4">Input File</p>
                <div class="mt-4 overflow-hidden">
                    <label for="subtitleFile" class="sr-only">Subtitle File (.srt, .ass, .txt, .zip, .xz)</label>
                    <label for="subtitleFile" class="file-input-area group">
                        <i data-feather="upload-cloud" class="icon"></i>
                         <span class="text-main">Click to upload or drag & drop</span>
                         <span class="text-sub">Supports .SRT, .ASS, .TXT, .ZIP, .XZ files</span>
                         <input type="file" id="subtitleFile" name="subtitleFile" accept=".srt,.ass,.txt,.zip,.xz,.tar.gz,.gz,.tar.xz,.7z" required>
                     </label>
                </div>
                 <div class="mt-3 overflow-hidden">
                     <div id="fileNameDisplay" class="text-sm font-medium text-gray-600 dark:text-dm-text-secondary text-center truncate px-2">No file selected</div>
                 </div>
                <div id="archiveContentsDisplay" class="mt-4 hidden overflow-hidden">
                    <label class="block mb-2 text-sm font-semibold text-gray-700 dark:text-dm-text-secondary">Files in archive (select .srt/.ass to translate):</label>
                    <div id="archiveFilesList" class="max-h-60 overflow-y-auto overflow-x-hidden space-y-1.5 rounded-lg border border-gray-300 dark:border-dm-border p-2 bg-white dark:bg-dm-input-bg shadow-sm">
                    </div>
                    <div class="mt-2.5 flex justify-between items-center px-1">
                        <button type="button" id="selectAllArchiveFiles" class="text-xs font-medium text-primary dark:text-primary-light hover:underline focus:outline-none">Select All</button>
                        <button type="button" id="deselectAllArchiveFiles" class="text-xs font-medium text-primary dark:text-primary-light hover:underline focus:outline-none">Deselect All</button>
                    </div>
                </div>
            </div>

             <fieldset>
                 <legend>Optional Settings</legend>
                 <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                     <div>
                         <label for="optionalNotes">Additional Notes for AI:</label>
                         <textarea id="optionalNotes" name="optionalNotes" rows="3" placeholder="e.g., Define specific terms..."></textarea>
                         <p class="description warning">Usually not necessary. Use sparingly.</p>
                     </div>
                     <div>
                         <label for="temperatureSetting">AI Temperature (0.0 - 2.0):</label>
                         <div class="flex items-center space-x-3">
                             <input type="number" id="temperatureSetting" name="temperatureSetting" min="0.0" max="2.0" step="0.05" class="w-24 px-2 py-1.5 text-center !shadow-none focus:!ring-primary-light/50">
                             <span id="temperatureValueDisplay" class="font-semibold text-gray-800 dark:text-dm-text-primary w-10 text-center tabular-nums">0.45</span>
                             <input type="range" id="temperatureSlider" min="0.0" max="2.0" step="0.05">
                         </div>
                         <p class="description mt-2"> Controls randomness. Default <strong class="text-primary-dark dark:text-primary-light">0.45</strong> is optimized via simulation for <strong class="text-primary-dark dark:text-primary-light">Netflix-level quality</strong> (balanced accuracy & fluency). Higher values increase fluency/creativity but also risk errors/hallucinations, likely requiring <strong class="text-amber-600 dark:text-yellow-400">post-editing</strong>. Use high values for specific creative needs or highly professional/niche content where manual review is planned. </p>
                     </div>
                 </div>
             </fieldset>

            <div class="pt-2">
                <button type="submit" id="submitButton" class="w-full btn-primary"> <i data-feather="zap" class="w-5 h-5 mr-2 icon"></i> <span class="button-text">Start Translation</span> <div class="spinner hidden ml-2"></div> </button>
            </div>
        </form>

        <div class="mt-10">
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Processing Log</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-gray-900 text-gray-200 border border-gray-700 dark:bg-dm-status-bg dark:text-dm-status-text dark:border-dm-status-border font-mono text-sm shadow-inner leading-relaxed"> <div class="text-gray-400 dark:text-dm-text-muted">Awaiting your command...</div> </div>
        </div>

        <div id="downloadSection" class="mt-8 hidden space-y-4">
            <div> <button id="downloadAllButton" class="w-full btn-secondary"> <i data-feather="download-cloud" class="w-5 h-5 mr-2"></i> <span id="downloadAllButtonText">Download Results</span> </button> </div>
            <div id="individualDownloadsContainer" class="hidden"> <p class="text-sm font-medium text-gray-700 dark:text-dm-text-secondary mb-2">Individual translated files:</p> <div id="individualDownloadsList" class="space-y-2 max-h-48 overflow-y-auto rounded-md border border-gray-300 dark:border-dm-border p-3 bg-gray-50 dark:bg-dm-card"> </div> </div>
        </div>

         <footer class="mt-10 pt-6 border-t border-gray-200 dark:border-dm-border text-center text-xs text-gray-500 dark:text-dm-text-muted"> API key, settings, and file content are processed locally in your browser and sent directly to the Google API. No data is stored on our servers. Tool by Yiğit. </footer>
    </div>

    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-5 right-5 z-50 p-2.5 rounded-full bg-primary dark:bg-primary-light text-white dark:text-black shadow-lg hover:opacity-90 transition-opacity"> <i data-feather="sun" class="w-5 h-5"></i> </button>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xz-wasm/dist/xz.min.js"></script>

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
        const fileNameDisplay = document.getElementById('fileNameDisplay');
        const optionalNotesInput = document.getElementById('optionalNotes');
        const temperatureInput = document.getElementById('temperatureSetting');
        const temperatureDisplay = document.getElementById('temperatureValueDisplay');
        const temperatureSlider = document.getElementById('temperatureSlider');
        const submitButton = document.getElementById('submitButton');
        const submitButtonText = submitButton.querySelector('.button-text');
        const submitButtonIcon = submitButton.querySelector('i.icon');
        const submitButtonSpinner = submitButton.querySelector('.spinner');
        const statusPanel = document.getElementById('statusPanel');
        const downloadSection = document.getElementById('downloadSection');
        const downloadAllButton = document.getElementById('downloadAllButton');
        const downloadAllButtonText = document.getElementById('downloadAllButtonText');
        const individualDownloadsContainer = document.getElementById('individualDownloadsContainer');
        const individualDownloadsList = document.getElementById('individualDownloadsList');
        const themeToggleButton = document.getElementById('themeToggleButton');
        const themeToggleIcon = themeToggleButton.querySelector('i');
        const htmlElement = document.documentElement;
        const archiveContentsDisplay = document.getElementById('archiveContentsDisplay');
        const archiveFilesList = document.getElementById('archiveFilesList');
        const selectAllArchiveFilesButton = document.getElementById('selectAllArchiveFiles');
        const deselectAllArchiveFilesButton = document.getElementById('deselectAllArchiveFiles');

        const STORAGE_PREFIX = 'aiSubtitleTranslator_v11_';
        const API_KEY_KEY = STORAGE_PREFIX + 'apiKey'; const MODEL_ID_KEY = STORAGE_PREFIX + 'modelId'; const TARGET_LANG_KEY = STORAGE_PREFIX + 'targetLanguage'; const CUSTOM_TARGET_LANG_KEY = STORAGE_PREFIX + 'customTargetLanguage'; const CONTENT_TYPE_KEY = STORAGE_PREFIX + 'contentType'; const CUSTOM_CONTENT_TYPE_KEY = STORAGE_PREFIX + 'customContentType'; const TEMPERATURE_KEY = STORAGE_PREFIX + 'temperature'; const THEME_KEY = STORAGE_PREFIX + 'theme';
        let processedResults = []; let currentArchiveEntries = []; const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25'; const DEFAULT_TEMPERATURE = 0.45; let isXZWasmLoaded = false; let wakeLock = null;

        function updateStatus(message, type = 'info') { const timestamp = new Date().toLocaleTimeString('en-GB'); const statusLine = document.createElement('div'); let typeClass = 'text-gray-400 dark:text-dm-text-muted'; let icon = ''; switch (type) { case 'success': typeClass = 'text-green-500 dark:text-green-400'; icon = '<i data-feather="check-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; case 'error': typeClass = 'text-red-500 dark:text-red-400 font-semibold'; icon = '<i data-feather="alert-triangle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-400'; icon = '<i data-feather="alert-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; icon = '<i data-feather="info" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; case 'system': typeClass = 'text-purple-500 dark:text-purple-400'; icon = '<i data-feather="tool" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; case 'api': typeClass = 'text-cyan-500 dark:text-cyan-400'; icon = '<i data-feather="send" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break; } statusLine.className = `py-0.5 ${typeClass}`; statusLine.innerHTML = `${icon}[${timestamp}] ${message}`; const initialMsg = statusPanel.querySelector('div:only-child.text-gray-400, div:only-child.dark\\:text-dm-text-muted'); if (initialMsg && (initialMsg.textContent.includes('Awaiting your command...') || initialMsg.textContent.includes('Waiting for input...'))) { statusPanel.innerHTML = ''; } statusPanel.appendChild(statusLine); statusPanel.scrollTop = statusPanel.scrollHeight; if (icon) feather.replace(); }
        function setButtonLoading(isLoading) { submitButton.disabled = isLoading; if (isLoading) { submitButtonText.textContent = 'Processing...'; submitButtonIcon?.classList.add('hidden'); submitButtonSpinner.classList.remove('hidden'); submitButton.classList.add('cursor-wait', 'opacity-70'); } else { submitButtonText.textContent = 'Start Translation'; submitButtonIcon?.classList.remove('hidden'); submitButtonSpinner.classList.add('hidden'); submitButton.classList.remove('cursor-wait', 'opacity-70'); } }
        function toggleCustomInput(selectElement, inputElement) { if (selectElement.value === 'Other') { inputElement.classList.remove('hidden'); inputElement.required = true; } else { inputElement.classList.add('hidden'); inputElement.required = false; inputElement.value = ''; } }
        function saveSettings() { try { localStorage.setItem(API_KEY_KEY, apiKeyInput.value.trim()); localStorage.setItem(MODEL_ID_KEY, modelIdInput.value.trim() || DEFAULT_MODEL); localStorage.setItem(TARGET_LANG_KEY, targetLanguageSelect.value); localStorage.setItem(CUSTOM_TARGET_LANG_KEY, customTargetLanguageInput.value.trim()); localStorage.setItem(CONTENT_TYPE_KEY, contentTypeSelect.value); localStorage.setItem(CUSTOM_CONTENT_TYPE_KEY, customContentTypeInput.value.trim()); localStorage.setItem(TEMPERATURE_KEY, temperatureInput.value); updateCurrentModelDisplay(); } catch (e) { console.error("LS Save Error:", e); updateStatus("Settings save failed.", "warning"); } }
        function loadSettings() { try { apiKeyInput.value = localStorage.getItem(API_KEY_KEY) || ''; modelIdInput.value = localStorage.getItem(MODEL_ID_KEY) || DEFAULT_MODEL; const savedLang = localStorage.getItem(TARGET_LANG_KEY); if (savedLang) targetLanguageSelect.value = savedLang; customTargetLanguageInput.value = localStorage.getItem(CUSTOM_TARGET_LANG_KEY) || ''; toggleCustomInput(targetLanguageSelect, customTargetLanguageInput); const savedType = localStorage.getItem(CONTENT_TYPE_KEY); if (savedType) contentTypeSelect.value = savedType; customContentTypeInput.value = localStorage.getItem(CUSTOM_CONTENT_TYPE_KEY) || ''; toggleCustomInput(contentTypeSelect, customContentTypeInput); const savedTemp = localStorage.getItem(TEMPERATURE_KEY); const tempValue = savedTemp !== null ? parseFloat(savedTemp) : DEFAULT_TEMPERATURE; const clampedTempValue = Math.max(0.0, Math.min(2.0, tempValue)); temperatureInput.value = clampedTempValue.toFixed(2); temperatureSlider.value = clampedTempValue.toFixed(2); temperatureDisplay.textContent = clampedTempValue.toFixed(2); updateCurrentModelDisplay(); } catch (e) { console.error("LS Load Error:", e); updateStatus("Settings load failed.", "warning"); modelIdInput.value = DEFAULT_MODEL; temperatureInput.value = DEFAULT_TEMPERATURE.toFixed(2); temperatureSlider.value = DEFAULT_TEMPERATURE.toFixed(2); temperatureDisplay.textContent = DEFAULT_TEMPERATURE.toFixed(2); updateCurrentModelDisplay(); } }
        function updateCurrentModelDisplay() { currentModelDisplay.textContent = modelIdInput.value.trim() || DEFAULT_MODEL; }
        function applyTheme(theme) { if (theme === 'dark') { htmlElement.classList.add('dark'); themeToggleIcon.setAttribute('data-feather', 'sun'); themeToggleButton.classList.remove('bg-primary'); themeToggleButton.classList.add('dark:bg-primary-light'); themeToggleButton.classList.remove('text-white'); themeToggleButton.classList.add('dark:text-black'); } else { htmlElement.classList.remove('dark'); themeToggleIcon.setAttribute('data-feather', 'moon'); themeToggleButton.classList.add('bg-primary'); themeToggleButton.classList.remove('dark:bg-primary-light'); themeToggleButton.classList.add('text-white'); themeToggleButton.classList.remove('dark:text-black'); } feather.replace(); }
        function toggleTheme() { const currentTheme = htmlElement.classList.contains('dark') ? 'dark' : 'light'; const newTheme = currentTheme === 'dark' ? 'light' : 'dark'; applyTheme(newTheme); try { localStorage.setItem(THEME_KEY, newTheme); } catch (e) { console.error("LS Theme Error:", e); updateStatus("Theme save failed.", "warning"); } }
        function loadTheme() { let savedTheme = 'dark'; try { const storedTheme = localStorage.getItem(THEME_KEY); if (storedTheme === 'light') { savedTheme = 'light'; } } catch (e) { console.error("LS Theme Load Error:", e); updateStatus("Theme load failed.", "warning"); } applyTheme(savedTheme); }
        async function decompressXZ(file) { if (!isXZWasmLoaded || !window.XZWASM || !window.XZWASM.XzReadableStream) { throw new Error("XZ library not available."); } const { XzReadableStream } = window.XZWASM; const xzReadableStream = new XzReadableStream(file.stream()); return await new Response(xzReadableStream).blob(); }
        async function processUploadedFile(file) {
            currentArchiveEntries = []; archiveFilesList.innerHTML = ''; archiveContentsDisplay.classList.add('hidden');
            const fileName = file.name; const fileType = fileName.split('.').pop().toLowerCase(); const secondLastExt = fileName.split('.').slice(-2).join('.');
            if (['zip', 'xz', 'gz', 'tar.gz', 'tar.xz', '7z'].includes(fileType) || ['tar.gz', 'tar.xz'].includes(secondLastExt)) {
                updateStatus(`Processing archive: ${fileName}...`, 'info');
                try {
                    let archive; let entries = [];
                    if (fileType === 'zip') { archive = await JSZip.loadAsync(file); for (const [relativePath, zipEntry] of Object.entries(archive.files)) { if (!zipEntry.dir) { const entryName = zipEntry.name; const entryExt = entryName.split('.').pop().toLowerCase(); if (['srt', 'ass'].includes(entryExt)) { entries.push({ name: entryName, getContent: async () => zipEntry.async('string'), extension: entryExt }); } } } } // Use getContent, extension
                    else if (fileType === 'xz' && !fileName.endsWith('.tar.xz')) { if (!isXZWasmLoaded) { updateStatus("XZ library not loaded.", "error"); return; } const decompressedBlob = await decompressXZ(file); const entryName = fileName.replace(/\.xz$/, ''); const entryExt = entryName.split('.').pop().toLowerCase(); if (['srt', 'ass'].includes(entryExt)) { entries.push({ name: entryName, getContent: async () => decompressedBlob.text(), extension: entryExt }); } else { updateStatus(`Decompressed .xz not .srt/.ass.`, 'warning'); } } // Use getContent, extension
                    else { updateStatus(`Archive type .${fileType} not fully supported.`, 'warning'); return; }
                    if (entries.length > 0) { currentArchiveEntries = entries; populateArchiveFilesList(entries); archiveContentsDisplay.classList.remove('hidden'); updateStatus(`Found ${entries.length} file(s).`, 'success'); }
                    else { updateStatus(`No .srt/.ass found in '${fileName}'.`, 'warning'); }
                } catch (error) { updateStatus(`Archive error: ${error.message}`, 'error'); console.error("Archive error:", error); }
            } else if (!['srt', 'ass', 'txt'].includes(fileType)) { updateStatus(`Unsupported type: .${fileType}.`, 'error'); fileInput.value = ''; fileNameDisplay.textContent = 'No file selected'; }
        }
        function populateArchiveFilesList(entries) {
            archiveFilesList.innerHTML = '';
            entries.forEach((entry, index) => {
                const item = document.createElement('div'); item.className = 'archive-file-item';
                const textContainer = document.createElement('div'); textContainer.className = 'min-w-0 overflow-hidden';
                const fileNameSpan = document.createElement('span'); fileNameSpan.className = 'filename-text'; fileNameSpan.textContent = entry.name; fileNameSpan.title = entry.name;
                const fileTypeSpan = document.createElement('span'); fileTypeSpan.className = 'text-xs text-gray-500 dark:text-dm-text-muted ml-1 whitespace-nowrap'; fileTypeSpan.textContent = ` (.${entry.extension})`; // Use extension
                fileNameSpan.appendChild(fileTypeSpan); textContainer.appendChild(fileNameSpan);
                const checkbox = document.createElement('input'); checkbox.type = 'checkbox'; checkbox.id = `archiveFile_${index}`; checkbox.dataset.entryIndex = String(index); checkbox.className = 'custom-checkbox'; checkbox.checked = true;
                item.appendChild(textContainer); item.appendChild(checkbox); archiveFilesList.appendChild(item);
                item.addEventListener('click', (event) => { if (event.target.tagName === 'INPUT' && event.target.type === 'checkbox') { return; } const cb = item.querySelector('input[type="checkbox"]'); if (cb) { cb.checked = !cb.checked; } });
            });
        }
        selectAllArchiveFilesButton.addEventListener('click', () => { archiveFilesList.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = true); });
        deselectAllArchiveFilesButton.addEventListener('click', () => { archiveFilesList.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false); });
        document.addEventListener('DOMContentLoaded', () => { loadTheme(); loadSettings(); feather.replace(); setTimeout(() => { if (typeof XZWASM !== 'undefined' && typeof XZWASM.XzReadableStream !== 'undefined') { isXZWasmLoaded = true; updateStatus("XZ library loaded.", "system"); } else { isXZWasmLoaded = false; console.warn("XZWASM not loaded."); updateStatus("XZ features unavailable.", "warning"); } }, 1500); });
        apiKeyInput.addEventListener('change', saveSettings); modelIdInput.addEventListener('change', saveSettings); targetLanguageSelect.addEventListener('change', () => { toggleCustomInput(targetLanguageSelect, customTargetLanguageInput); saveSettings(); }); customTargetLanguageInput.addEventListener('change', saveSettings); contentTypeSelect.addEventListener('change', () => { toggleCustomInput(contentTypeSelect, customContentTypeInput); saveSettings(); }); customContentTypeInput.addEventListener('change', saveSettings);
        temperatureInput.addEventListener('input', () => { let v = parseFloat(temperatureInput.value); if (isNaN(v)) { v = DEFAULT_TEMPERATURE; } v = Math.max(0.0, Math.min(2.0, v)); temperatureInput.value = v.toFixed(2); temperatureSlider.value = v.toFixed(2); temperatureDisplay.textContent = v.toFixed(2); saveSettings(); });
        temperatureSlider.addEventListener('input', () => { const v = parseFloat(temperatureSlider.value); temperatureInput.value = v.toFixed(2); temperatureDisplay.textContent = v.toFixed(2); saveSettings(); });
        toggleApiKey.addEventListener('click', () => { const t = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password'; apiKeyInput.setAttribute('type', t); toggleApiKeyIcon.setAttribute('data-feather', t === 'password' ? 'eye' : 'eye-off'); feather.replace(); });
        fileInput.addEventListener('change', async () => {
            downloadSection.classList.add('hidden'); individualDownloadsContainer.classList.add('hidden'); individualDownloadsList.innerHTML = ''; processedResults = []; archiveContentsDisplay.classList.add('hidden'); archiveFilesList.innerHTML = ''; currentArchiveEntries = [];
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0]; const fullFileName = file.name; const displayFileName = fullFileName.length > 50 ? `${fullFileName.substring(0, 25)}...${fullFileName.substring(fullFileName.length - 20)}` : fullFileName;
                fileNameDisplay.textContent = `Selected: ${displayFileName} (${(file.size / 1024).toFixed(1)} KB)`; fileNameDisplay.title = fullFileName;
                fileNameDisplay.classList.remove('text-gray-600', 'dark:text-dm-text-secondary'); fileNameDisplay.classList.add('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
                await processUploadedFile(file);
            } else { fileNameDisplay.textContent = 'No file selected'; fileNameDisplay.title = ''; fileNameDisplay.classList.add('text-gray-600', 'dark:text-dm-text-secondary'); fileNameDisplay.classList.remove('text-primary-dark', 'dark:text-primary-light', 'font-semibold'); }
        });
        themeToggleButton.addEventListener('click', toggleTheme);
        const requestWakeLock = async () => { if ('wakeLock' in navigator) { try { wakeLock = await navigator.wakeLock.request('screen'); updateStatus('Screen kept active.', 'system'); wakeLock.addEventListener('release', () => { if (wakeLock) { updateStatus('Screen lock released by browser.', 'warning'); wakeLock = null; } }); } catch (err) { console.error(`Wake Lock Error: ${err.name}, ${err.message}`); updateStatus(`Could not keep screen active.`, 'warning'); wakeLock = null; } } else { updateStatus('Wake Lock API not supported.', 'warning'); } };
        const releaseWakeLock = async () => { if (wakeLock !== null) { const tempLock = wakeLock; wakeLock = null; try { await tempLock.release(); updateStatus('Screen lock released.', 'system'); } catch (err) { console.error(`Wake Lock Release Error: ${err.name}, ${err.message}`); } } };
        async function translateSingleContent(fileContent, originalName, fileExtension, translationParams) { // Changed parameter name
            const { apiKey, modelId, targetLanguage, contentType, optionalNotes, temperature } = translationParams; const displayName = originalName.includes('/') ? originalName.substring(originalName.lastIndexOf('/') + 1) : originalName; updateStatus(`Preparing '${displayName}'...`, 'info');
            let system_prompt = `You are an expert subtitle translator specializing in translating {contentType} content into fluent, natural-sounding {targetLanguage}. Your task is to translate the provided subtitle file content ({fileExtension} format). RULES (Strictly Follow): 1. Translate the dialogue text accurately and naturally into {targetLanguage}. 2. Preserve the original subtitle format ({fileExtension}) STRICTLY. - For SRT: Maintain the sequence numbers, timecodes (start --> end), and line breaks exactly as in the original, replacing only the text content. - For ASS: Maintain ALL original [Script Info], [V4+ Styles], and [Events] formatting lines (Style, Name, MarginL, MarginR, MarginV, Effect, etc.). ONLY translate the text part of the 'Dialogue:' lines. Preserve the original Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect fields for each Dialogue event. - For TXT: Translate each line, preserving the original line structure. 3. Adjust ASS timing slightly ONLY IF NECESSARY for {targetLanguage} reading speed, but prioritize maintaining original sync. Keep short lines short on screen. 4. Maintain consistency in character names, places, and specific terminology mentioned in the optional notes (if provided). 5. CRITICAL: Output ONLY the raw, fully translated subtitle content in the original {fileExtension} format. Do NOT include ANY introductory text, explanations, summaries, apologies, markdown formatting (like \`\`\`ass ... \`\`\`), or concluding remarks in your response. Your entire output must be ONLY the translated subtitle data, ready to be saved as a .{fileExtension} file. {optionalNotesSection} Translate the following subtitle content: `;
            system_prompt = system_prompt.replace(/{contentType}/g, contentType).replace(/{targetLanguage}/g, targetLanguage).replace(/{fileExtension}/g, fileExtension).replace('{optionalNotesSection}', optionalNotes ? `- Additional User Instructions:\n${optionalNotes}` : ''); // Use fileExtension
            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`; const requestData = { systemInstruction: { parts: [{ text: system_prompt }] }, contents: [{ role: 'user', parts: [{ text: fileContent }] }], generationConfig: { responseMimeType: 'text/plain', temperature: temperature }, safetySettings: [{ category: "HARM_CATEGORY_HARASSMENT", threshold: "BLOCK_NONE" },{ category: "HARM_CATEGORY_HATE_SPEECH", threshold: "BLOCK_NONE" },{ category: "HARM_CATEGORY_SEXUALLY_EXPLICIT", threshold: "BLOCK_NONE" },{ category: "HARM_CATEGORY_DANGEROUS_CONTENT", threshold: "BLOCK_NONE" }] };
            updateStatus(`Sending '${displayName}' to Gemini (${modelId})...`, 'api');
            try {
                const response = await fetch(apiUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(requestData), }); const responseBody = await response.text();
                if (!response.ok) { let err = `HTTP ${response.status}`; try { const j = JSON.parse(responseBody); err = j?.error?.message || JSON.stringify(j); } catch (p) { err += ` - ${responseBody.substring(0, 200)}`; } throw new Error(`API Error: ${err}`); }
                updateStatus(`Response for '${displayName}' received.`, 'api'); let translatedText = null;
                try { const d = JSON.parse(responseBody); const c = d?.candidates; if (c && c.length > 0) { const ct = c[0]?.content; if (ct && ct.parts && ct.parts.length > 0) { translatedText = ct.parts[0]?.text; } } if (!translatedText) { const fr = c?.[0]?.finishReason; if (fr && fr !== 'STOP') { let msg = `API stop: ${fr}.`; const sr = c?.[0]?.safetyRatings; if (sr) { console.warn("Safety:", sr); msg += ` Details: ${JSON.stringify(sr)}`; } throw new Error(msg); } else { throw new Error(`Failed text extraction.`); } } } catch (e) { console.error('Parse Error:', responseBody); throw new Error(`Parse Error: ${e.message}`); }
                if (translatedText && translatedText.trim().length > 0) { let valid = true; if (fileExtension === 'srt' && !translatedText.match(/^\d+\s*\n\d{2}:\d{2}:\d{2},\d{3} --> \d{2}:\d{2}:\d{2},\d{3}/m)) { updateStatus(`Warn: '${displayName}' invalid SRT?`, 'warning'); valid = false; } else if (fileExtension === 'ass' && !translatedText.includes('[Events]')) { updateStatus(`Warn: '${displayName}' invalid ASS?`, 'warning'); valid = false; } if (valid) updateStatus(`'${displayName}' translated!`, 'success'); return translatedText; } // Use fileExtension
                else { throw new Error(`Empty translation for '${displayName}'.`); }
            } catch (error) { updateStatus(`Failed '${displayName}': ${error.message}`, 'error'); console.error(`Error for ${displayName}:`, error); throw error; }
        }
        form.addEventListener('submit', async (event) => {
            event.preventDefault(); setButtonLoading(true); downloadSection.classList.add('hidden'); individualDownloadsContainer.classList.add('hidden'); individualDownloadsList.innerHTML = ''; processedResults = []; statusPanel.innerHTML = ''; updateStatus('Translation process initiated.', 'info');
            const apiKey = apiKeyInput.value.trim(); const modelIdToUse = modelIdInput.value.trim() || DEFAULT_MODEL; const mainFile = fileInput.files[0]; let targetLanguage = targetLanguageSelect.value === 'Other' ? customTargetLanguageInput.value.trim() : targetLanguageSelect.value; let contentType = contentTypeSelect.value === 'Other' ? customContentTypeInput.value.trim() : contentTypeSelect.value; const optionalNotes = optionalNotesInput.value.trim(); const temperature = parseFloat(temperatureInput.value) || DEFAULT_TEMPERATURE;
            let valid = true; if (!apiKey) { updateStatus('API Key required.', 'error'); valid = false; } if (!modelIdToUse) { updateStatus('Model ID required.', 'error'); valid = false; } if (!mainFile) { updateStatus('Please select a file.', 'error'); valid = false; } if (!targetLanguage) { updateStatus('Target Language required.', 'error'); valid = false; } if (!contentType) { updateStatus('Content Type required.', 'error'); valid = false; } if (isNaN(temperature) || temperature < 0.0 || temperature > 2.0) { updateStatus('Invalid Temperature.', 'error'); valid = false; } if (!valid) { setButtonLoading(false); return; }
            updateStatus(`Using model: ${modelIdToUse}, Target: ${targetLanguage}, Temp: ${temperature.toFixed(2)}.`, 'system'); if (optionalNotes) updateStatus(`Notes provided.`, 'system'); updateStatus(`Safety filters: BLOCK_NONE.`, 'warning');
            await requestWakeLock(); let filesToProcess = [];
            if (currentArchiveEntries.length > 0) { const selectedCheckboxes = archiveFilesList.querySelectorAll('input[type="checkbox"]:checked'); if (selectedCheckboxes.length === 0) { updateStatus('No files selected from archive.', 'warning'); setButtonLoading(false); await releaseWakeLock(); return; } selectedCheckboxes.forEach(cb => { const idx = parseInt(cb.dataset.entryIndex); if (idx >= 0 && idx < currentArchiveEntries.length) { filesToProcess.push(currentArchiveEntries[idx]); } }); updateStatus(`Processing ${filesToProcess.length} selected file(s)...`, 'info'); }
            else { const mainFileName = mainFile.name; const mainFileExtension = mainFileName.split('.').pop()?.toLowerCase(); if (mainFileExtension === 'xz') { if (!isXZWasmLoaded) { updateStatus(`Cannot process .xz: XZ library not loaded.`, 'error'); setButtonLoading(false); await releaseWakeLock(); return; } updateStatus(`Processing single .xz file...`, 'info'); await processUploadedFile(mainFile); if (currentArchiveEntries.length > 0) { currentArchiveEntries.forEach(entry => { filesToProcess.push(entry); }); if(filesToProcess.length === 0) { updateStatus(`No .srt/.ass in .xz.`, 'warning'); setButtonLoading(false); await releaseWakeLock(); return; } updateStatus(`Processing ${filesToProcess.length} file(s) from .xz...`, 'info'); } else { updateStatus(`Could not extract from .xz.`, 'error'); setButtonLoading(false); await releaseWakeLock(); return; } } else if (['srt', 'ass', 'txt'].includes(mainFileExtension)) { filesToProcess.push({ name: mainFileName, getContent: () => mainFile.text(), extension: mainFileExtension }); updateStatus(`Processing single file: ${mainFileName}`, 'info'); } else { updateStatus(`Invalid file type: .${mainFileExtension}.`, 'error'); setButtonLoading(false); await releaseWakeLock(); return; } }
            if (filesToProcess.length === 0) { updateStatus('No valid files to translate.', 'warning'); setButtonLoading(false); await releaseWakeLock(); return; }

            let tasksWithContent = []; updateStatus(`Reading content of ${filesToProcess.length} file(s)...`, 'system');
            try {
                for (const fileTask of filesToProcess) {
                    const displayName = fileTask.name.includes('/') ? fileTask.name.substring(fileTask.name.lastIndexOf('/') + 1) : fileTask.name;
                    updateStatus(`Reading '${displayName}'...`, 'system');
                    const fileContent = await fileTask.getContent(); // Use standardized getContent
                    if (!fileContent) { throw new Error(`Content empty for ${displayName}`); }
                    tasksWithContent.push({ name: fileTask.name, content: fileContent, extension: fileTask.extension }); // Use standardized extension
                }
            } catch (error) { updateStatus(`Error reading file content: ${error.message}`, 'error'); setButtonLoading(false); await releaseWakeLock(); return; }

            const translationParams = { apiKey, modelId: modelIdToUse, targetLanguage, contentType, optionalNotes, temperature }; let successCount = 0;
            for (let i = 0; i < tasksWithContent.length; i++) {
                const task = tasksWithContent[i]; const displayName = task.name.includes('/') ? task.name.substring(task.name.lastIndexOf('/') + 1) : task.name; updateStatus(`Translating ${i + 1}/${tasksWithContent.length}: '${displayName}'...`, 'info');
                try {
                    const translatedText = await translateSingleContent(task.content, task.name, task.extension, translationParams); // Pass task.extension
                    processedResults.push({ originalName: task.name, translatedText: translatedText, error: null, extension: task.extension }); // Store extension
                    successCount++;
                } catch (error) {
                    processedResults.push({ originalName: task.name, translatedText: null, error: error.message || "Unknown error", extension: task.extension }); // Store extension
                    if (error.message && error.message.toLowerCase().includes("api key not valid")) { updateStatus("API Key Error. Aborting.", "error"); break; }
                    if (error.message && (error.message.includes("quota") || error.message.includes("limit"))) { updateStatus("API limit likely reached.", "error"); }
                }
            }
            if (tasksWithContent.length > 0) { updateStatus(`Batch complete: ${successCount}/${tasksWithContent.length} successful.`, successCount === tasksWithContent.length ? 'success' : (successCount > 0 ? 'warning' : 'error')); }
            if (processedResults.some(r => r.translatedText)) { setupDownloadSection(); } else if (tasksWithContent.length > 0) { updateStatus('No files translated successfully.', 'error'); }
            setButtonLoading(false); await releaseWakeLock();
        });
        function setupDownloadSection() {
            downloadSection.classList.remove('hidden'); individualDownloadsList.innerHTML = ''; let successfulTranslations = processedResults.filter(r => r.translatedText); if (successfulTranslations.length === 0) { downloadSection.classList.add('hidden'); return; }
            if (successfulTranslations.length > 1) {
                downloadAllButtonText.textContent = `Download All (${successfulTranslations.length}) as ZIP`; individualDownloadsContainer.classList.remove('hidden');
                successfulTranslations.forEach(result => { const item = document.createElement('div'); item.className = 'grid grid-cols-[minmax(0,1fr)_auto] gap-x-2 items-center p-2.5 rounded-md bg-white dark:bg-dm-input-bg border border-gray-200 dark:border-dm-border shadow-sm'; const originalBaseName = result.originalName.includes('/') ? result.originalName.substring(result.originalName.lastIndexOf('/') + 1) : result.originalName; const baseName = originalBaseName.substring(0, originalBaseName.lastIndexOf('.')) || originalBaseName; const langCode = getLanguageCode(); const outputFilename = `${baseName}_${langCode}.${result.extension}`; const textDiv = document.createElement('div'); textDiv.className = 'min-w-0 overflow-hidden'; textDiv.innerHTML = `<span class="block text-sm text-gray-700 dark:text-dm-text-primary overflow-hidden whitespace-nowrap text-ellipsis" title="${outputFilename}">${outputFilename}</span>`; const button = document.createElement('button'); button.dataset.filename = outputFilename; button.dataset.content = escape(result.translatedText); button.className = 'btn btn-secondary !px-3 !py-1.5 !text-xs individual-download-btn'; button.innerHTML = `<i data-feather="download" class="w-4 h-4 mr-1.5"></i>Download`; item.appendChild(textDiv); item.appendChild(button); individualDownloadsList.appendChild(item); }); // Use result.extension
                feather.replace(); individualDownloadsList.querySelectorAll('.individual-download-btn').forEach(button => { button.addEventListener('click', (e) => { const btn = e.currentTarget; const filename = btn.dataset.filename; const content = unescape(btn.dataset.content); downloadSingleFile(content, filename); }); });
            } else if (successfulTranslations.length === 1) { const result = successfulTranslations[0]; const originalBaseName = result.originalName.includes('/') ? result.originalName.substring(result.originalName.lastIndexOf('/') + 1) : result.originalName; const baseName = originalBaseName.substring(0, originalBaseName.lastIndexOf('.')) || originalBaseName; const langCode = getLanguageCode(); const outputFilename = `${baseName}_${langCode}.${result.extension}`; downloadAllButtonText.textContent = `Download ${outputFilename}`; individualDownloadsContainer.classList.add('hidden'); } // Use result.extension
        }
        function getLanguageCode() { let langCode = 'tr'; const selectedLang = targetLanguageSelect.value; if (selectedLang === 'Other') { langCode = customTargetLanguageInput.value.trim().substring(0, 3).toLowerCase().replace(/[^a-z]/g, '') || 'unk'; } else { const langMap = { 'Turkish': 'tr', 'English': 'en', 'Spanish': 'es', 'French': 'fr', 'German': 'de', 'Japanese': 'ja', 'Korean': 'ko', 'Chinese (Simplified)': 'zh-cn', 'Portuguese (Brazil)': 'pt-br', 'Russian': 'ru', 'Arabic': 'ar' }; langCode = langMap[selectedLang] || selectedLang.substring(0, 2).toLowerCase(); } return langCode; }
        function downloadSingleFile(content, filename) { if (!content || content.trim().length === 0) { updateStatus(`No content for ${filename}.`, 'error'); return; } try { const BOM = "\uFEFF"; const blob = new Blob([BOM + content], { type: 'text/plain;charset=utf-8' }); const url = URL.createObjectURL(blob); const a = document.createElement('a'); a.style.display = 'none'; a.href = url; a.download = filename; document.body.appendChild(a); a.click(); window.URL.revokeObjectURL(url); document.body.removeChild(a); updateStatus(`Download: "${filename}".`, 'success'); } catch(e) { updateStatus(`Download error: ${e.message}`, 'error'); console.error("Download Error:", e); } }
        downloadAllButton.addEventListener('click', async () => {
            const successfulTranslations = processedResults.filter(r => r.translatedText); if (successfulTranslations.length === 0) { updateStatus('No files to download.', 'error'); return; }
            if (successfulTranslations.length === 1) { const result = successfulTranslations[0]; const originalBaseName = result.originalName.includes('/') ? result.originalName.substring(result.originalName.lastIndexOf('/') + 1) : result.originalName; const baseName = originalBaseName.substring(0, originalBaseName.lastIndexOf('.')) || originalBaseName; const langCode = getLanguageCode(); const outputFilename = `${baseName}_${langCode}.${result.extension}`; downloadSingleFile(result.translatedText, outputFilename); } // Use result.extension
            else {
                updateStatus('Preparing ZIP...', 'info');
                try {
                    const zip = new JSZip(); const langCode = getLanguageCode(); const BOM = "\uFEFF";
                    successfulTranslations.forEach(result => {
                        const originalFullPath = result.originalName; const lastSlashIndex = originalFullPath.lastIndexOf('/'); const originalDir = lastSlashIndex > -1 ? originalFullPath.substring(0, lastSlashIndex + 1) : ''; const originalFilename = lastSlashIndex > -1 ? originalFullPath.substring(lastSlashIndex + 1) : originalFullPath; const baseName = originalFilename.substring(0, originalFilename.lastIndexOf('.')) || originalFilename; const outputFilename = `${baseName}_${langCode}.${result.extension}`; const finalZipPath = originalDir + outputFilename; // Use result.extension
                        let finalZipName = finalZipPath; let count = 1; while(zip.file(finalZipName)) { finalZipName = `${originalDir}${baseName}_${langCode}_(${count++}).${result.extension}`; } zip.file(finalZipName, BOM + result.translatedText); // Use result.extension
                    });
                    const zipBlob = await zip.generateAsync({ type: "blob", compression: "DEFLATE", compressionOptions: { level: 6 } }); const archiveBaseName = fileInput.files[0] ? (fileInput.files[0].name.substring(0, fileInput.files[0].name.lastIndexOf('.')) || fileInput.files[0].name) : 'translations'; const zipFilename = `${archiveBaseName}_${langCode}_all.zip`; const url = URL.createObjectURL(zipBlob); const a = document.createElement('a'); a.style.display = 'none'; a.href = url; a.download = zipFilename; document.body.appendChild(a); a.click(); window.URL.revokeObjectURL(url); document.body.removeChild(a); updateStatus(`ZIP download: "${zipFilename}".`, 'success');
                } catch (e) { updateStatus(`ZIP Error: ${e.message}`, 'error'); console.error("ZIP Error:", e); }
            }
        });
    </script>
</body>
</html>
