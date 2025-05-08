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
    <!-- SEO Meta Tags -->
    <title>Future of Translations | AI Subtitle Translator | Gemini Powered</title>
    <meta name="description" content="Translate .srt, .ass, or .txt subtitle files (including from .zip & .xz archives) professionally using Google Gemini AI. Customize temperature for balance between quality and fluency. Preserves timing & format.">
    <meta name="keywords" content="subtitle translator, ai translation, gemini api, gemini, srt translator, ass translator, text translator, zip subtitle, xz subtitle, archive translation, ai subtitle, machine translation, localization, global, professional translation, tryigit, screen wake lock, temperature setting, translation quality, translation fluency">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/translate" />

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Custom Configuration -->
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
                        'dm-bg': '#000000',
                        'dm-card': '#111111',
                        'dm-text-primary': '#e5e5e5',
                        'dm-text-secondary': '#a3a3a3',
                        'dm-text-muted': '#737373',
                        'dm-border': '#333333',
                        'dm-input-bg': '#1a1a1a',
                        'dm-input-border': '#404040',
                        'dm-input-placeholder': '#737373',
                        'dm-status-bg': '#0a0a0a',
                        'dm-status-border': '#2a2a2a',
                        'dm-status-text': '#cccccc',
                    },
                    boxShadow: {
                         'input-focus': '0 0 0 3px rgba(109, 40, 217, 0.3)',
                         'btn': '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                         'btn-hover': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                         'dark-input-focus': '0 0 0 3px rgba(147, 51, 234, 0.5)',
                         'dark-btn': '0 4px 6px -1px rgba(255, 255, 255, 0.05), 0 2px 4px -2px rgba(255, 255, 255, 0.05)',
                         'dark-btn-hover': '0 10px 15px -3px rgba(255, 255, 255, 0.07), 0 4px 6px -4px rgba(255, 255, 255, 0.07)',
                    }
                },
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {
            html.dark { color-scheme: dark; }
            body { @apply bg-gray-100 font-sans antialiased text-gray-800 dark:bg-dm-bg dark:text-dm-text-primary transition-colors duration-300; }
            label { @apply block mb-1.5 text-sm font-semibold text-gray-700 dark:text-dm-text-secondary; }
            input[type="text"], input[type="password"], input[type="number"], select, textarea {
                @apply block w-full px-4 py-2.5 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition duration-150 ease-in-out sm:text-sm
                       dark:bg-dm-input-bg dark:border-dm-input-border dark:text-dm-text-primary dark:placeholder-dm-input-placeholder dark:focus:ring-primary-light/50 dark:focus:border-primary-light dark:shadow-none;
            }
             select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                 background-position: right 0.7rem center; background-repeat: no-repeat; background-size: 1.25em 1.25em;
                 -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 2.8rem;
             }
             html.dark select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23a3a3a3' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
             }
            textarea { @apply min-h-[90px] leading-relaxed; }
            fieldset { @apply border border-gray-200 rounded-lg p-5 pt-3 dark:border-dm-border dark:bg-dm-card; }
            legend { @apply px-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary; }
            .description { @apply mt-1.5 text-xs text-gray-600 dark:text-dm-text-muted; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline dark:text-primary-light dark:hover:text-purple-400; }
            .warning { @apply text-amber-600 dark:text-yellow-400 font-medium; }
            #statusPanel::-webkit-scrollbar { width: 6px; }
            #statusPanel::-webkit-scrollbar-track { @apply bg-dm-status-border rounded; }
            #statusPanel::-webkit-scrollbar-thumb { @apply bg-gray-600 dark:bg-gray-700 rounded; }
            #statusPanel::-webkit-scrollbar-thumb:hover { @apply bg-gray-500 dark:bg-gray-600; }
            input[type="range"]::-webkit-slider-thumb {
                -webkit-appearance: none; appearance: none;
                width: 16px; height: 16px;
                @apply bg-primary dark:bg-primary-light;
                cursor: pointer; border-radius: 50%;
            }
            input[type="range"]::-moz-range-thumb {
                width: 16px; height: 16px;
                @apply bg-primary dark:bg-primary-light;
                cursor: pointer; border-radius: 50%; border: none;
            }
            input[type="range"] {
                 @apply w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary/50 dark:focus:ring-primary-light/50 dark:focus:ring-offset-dm-bg;
            }
            .custom-checkbox {
                @apply w-5 h-5 text-primary dark:text-primary-light bg-white dark:bg-dm-input-bg border-gray-300 dark:border-dm-input-border rounded focus:ring-primary dark:focus:ring-primary-light focus:ring-offset-0 dark:focus:ring-offset-dm-card;
            }
            .custom-checkbox:checked {
                @apply bg-primary dark:bg-primary-light border-primary dark:border-primary-light;
            }
             .archive-file-item {
                @apply flex items-center justify-between p-2.5 rounded-md bg-gray-50 dark:bg-dm-input-bg hover:bg-gray-100 dark:hover:bg-opacity-75 cursor-pointer transition-colors duration-150; /* Padding reduced to p-2.5 */
            }
        }
        @layer components {
            .file-input-area { @apply relative block w-full p-6 text-center border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-primary/70 transition-colors duration-200 ease-in-out
                                   dark:bg-dm-card dark:border-dm-border dark:hover:bg-opacity-75 dark:hover:border-primary-light/70; }
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
    <!-- Reklam kodu -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490"
     crossorigin="anonymous"></script>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B1N2MBK3GT"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B1N2MBK3GT');
</script>
<!-- End Google Analytics -->
</head>
<body class="bg-gray-100 dark:bg-dm-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <header class="text-center mb-10 md:mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-dm-text-primary">
                 Future of Subtitle Translations <span class="text-primary dark:text-primary-light">AI</span>
             </h1>
             <p class="mt-3 text-lg text-gray-600 dark:text-dm-text-secondary max-w-2xl mx-auto">
                 Translate subtitles effortlessly (SRT, ASS, TXT, ZIP, XZ) while preserving timing and quality, powered by Google Gemini.
             </p>
         </header>

        <form id="translateForm" onsubmit="return false;" class="space-y-8">
            <!-- API Configuration -->
            <fieldset>
                <legend>API Configuration</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                        <label for="apiKey">Gemini API Key:</label>
                        <div class="flex rounded-lg">
                             <input type="password" id="apiKey" name="apiKey" required placeholder="Enter your Google AI Studio key" class="flex-1 min-w-0 rounded-none rounded-l-lg focus:z-10">
                             <button type="button" id="toggleApiKey" title="Show/Hide Key" class="inline-flex items-center px-3 py-2 text-gray-500 bg-gray-50 border border-l-0 border-gray-300 rounded-r-lg hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary dark:bg-dm-input-bg dark:text-dm-text-muted dark:border-dm-input-border dark:hover:bg-opacity-75 dark:focus:ring-primary-light dark:focus:border-primary-light">
                                <i data-feather="eye" class="w-4 h-4"></i>
                            </button>
                        </div>
                         <p class="description">
                             Get your key from
                             <a href="https://aistudio.google.com/apikey" target="_blank" rel="noopener noreferrer">Google AI Studio</a>.
                             Stored locally.
                         </p>
                    </div>
                     <div>
                        <label for="modelId">Gemini Model ID:</label>
                        <input type="text" id="modelId" name="modelId" placeholder="e.g., gemini-2.5-pro-exp-03-25">
                        <p class="description">Currently using: <code class="font-medium text-primary-dark dark:text-primary-light"><span id="currentModelDisplay"></span></code></p>
                    </div>
                 </div>
            </fieldset>

            <!-- Translation Settings -->
             <fieldset>
                <legend>Translation Settings</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                        <label for="targetLanguage">Target Language:</label>
                        <select id="targetLanguage" name="targetLanguage">
                              <option value="Turkish">Turkish</option>
                              <option value="English">English</option>
                              <option value="Spanish">Spanish</option>
                              <option value="French">French</option>
                              <option value="German">German</option>
                              <option value="Japanese">Japanese</option>
                              <option value="Korean">Korean</option>
                              <option value="Chinese (Simplified)">Chinese (Simplified)</option>
                              <option value="Portuguese (Brazil)">Portuguese (Brazil)</option>
                              <option value="Russian">Russian</option>
                              <option value="Arabic">Arabic</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customTargetLanguage" name="customTargetLanguage" placeholder="Enter language if 'Other'" class="mt-2 hidden">
                         <p class="description">Language for the translated output. Saved locally.</p>
                    </div>
                     <div>
                        <label for="contentType">Content Type:</label>
                        <select id="contentType" name="contentType">
                              <option value="Anime">Anime</option>
                              <option value="Movie">Movie</option>
                              <option value="TV Series">TV Series</option>
                              <option value="Donghua">Donghua</option>
                              <option value="Video Game">Video Game</option>
                              <option value="Documentary">Documentary</option>
                              <option value="Educational">Educational</option>
                              <option value="General">General/Text</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customContentType" name="customContentType" placeholder="Enter type if 'Other'" class="mt-2 hidden">
                         <p class="description">Provides context to the AI. Saved locally.</p>
                    </div>
                 </div>
            </fieldset>

            <!-- Input File -->
             <fieldset>
                <legend>Input File</legend>
                <div class="mt-4">
                    <label for="subtitleFile" class="sr-only">Subtitle File (.srt, .ass, .txt, .zip, .xz)</label>
                    <label for="subtitleFile" class="file-input-area group">
                        <i data-feather="upload-cloud" class="icon"></i>
                         <span class="text-main">Click to upload or drag & drop</span>
                         <span class="text-sub">Supports .SRT, .ASS, .TXT, .ZIP, .XZ files</span>
                         <input type="file" id="subtitleFile" name="subtitleFile" accept=".srt,.ass,.txt,.zip,.xz,.tar.gz,.gz,.tar.xz,.7z" required>
                     </label>
                     <div id="fileNameDisplay" class="mt-3 text-sm font-medium text-gray-600 dark:text-dm-text-secondary text-center truncate px-2">No file selected</div>
                </div>
                <div id="archiveContentsDisplay" class="mt-4 hidden">
                    <label class="block mb-2 text-sm font-semibold text-gray-700 dark:text-dm-text-secondary">Files in archive (select .srt/.ass to translate):</label>
                    <div id="archiveFilesList" class="max-h-60 overflow-y-auto space-y-1.5 rounded-lg border border-gray-300 dark:border-dm-border p-2 bg-white dark:bg-dm-input-bg shadow-sm">
                        <!-- File items will be dynamically added here -->
                    </div>
                    <div class="mt-2.5 flex justify-between items-center px-1">
                        <button type="button" id="selectAllArchiveFiles" class="text-xs font-medium text-primary dark:text-primary-light hover:underline focus:outline-none">Select All</button>
                        <button type="button" id="deselectAllArchiveFiles" class="text-xs font-medium text-primary dark:text-primary-light hover:underline focus:outline-none">Deselect All</button>
                    </div>
                </div>
            </fieldset>

            <!-- Optional Context & Temperature -->
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
                         <p class="description mt-2">
                             Controls randomness. Default <strong class="text-primary-dark dark:text-primary-light">0.45</strong> is optimized via simulation for <strong class="text-primary-dark dark:text-primary-light">Netflix-level quality</strong> (balanced accuracy & fluency). Higher values increase fluency/creativity but also risk errors/hallucinations, likely requiring <strong class="text-amber-600 dark:text-yellow-400">post-editing</strong>. Use high values for specific creative needs or highly professional/niche content where manual review is planned.
                         </p>
                     </div>
                 </div>
             </fieldset>

            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" id="submitButton" class="w-full btn-primary">
                     <i data-feather="zap" class="w-5 h-5 mr-2 icon"></i>
                     <span class="button-text">Start Translation</span>
                     <div class="spinner hidden ml-2"></div>
                </button>
            </div>
        </form>

        <!-- Status Panel -->
        <div class="mt-10">
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Processing Log</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-gray-900 text-gray-200 border border-gray-700 dark:bg-dm-status-bg dark:text-dm-status-text dark:border-dm-status-border font-mono text-sm shadow-inner leading-relaxed">
                <div class="text-gray-400 dark:text-dm-text-muted">Awaiting your command...</div>
            </div>
        </div>

        <!-- Download Section -->
        <div id="downloadSection" class="mt-8 hidden space-y-4">
            <div>
                <button id="downloadAllButton" class="w-full btn-secondary">
                    <i data-feather="download-cloud" class="w-5 h-5 mr-2"></i>
                    <span id="downloadAllButtonText">Download Results</span>
                </button>
            </div>
            <div id="individualDownloadsContainer" class="hidden">
                <p class="text-sm font-medium text-gray-700 dark:text-dm-text-secondary mb-2">Individual translated files:</p>
                <div id="individualDownloadsList" class="space-y-2 max-h-48 overflow-y-auto rounded-md border border-gray-300 dark:border-dm-border p-3 bg-gray-50 dark:bg-dm-card">
                    <!-- Individual download links/buttons will appear here -->
                </div>
            </div>
        </div>

         <footer class="mt-10 pt-6 border-t border-gray-200 dark:border-dm-border text-center text-xs text-gray-500 dark:text-dm-text-muted">
             API key, settings, and file content are processed locally in your browser and sent directly to the Google API. No data is stored on our servers. Tool by Yiğit.
         </footer>
    </div>

    <!-- Theme Toggle Button -->
    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-5 right-5 z-50 p-2.5 rounded-full bg-primary dark:bg-primary-light text-white dark:text-black shadow-lg hover:opacity-90 transition-opacity">
        <i data-feather="sun" class="w-5 h-5"></i>
    </button>

    <!-- External Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xz-wasm/dist/xz.min.js"></script>

    <script>
        // --- JavaScript Code ---

        // --- Element References ---
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


        // --- localStorage Keys ---
        const STORAGE_PREFIX = 'aiSubtitleTranslator_v6_';
        const API_KEY_KEY = STORAGE_PREFIX + 'apiKey';
        const MODEL_ID_KEY = STORAGE_PREFIX + 'modelId';
        const TARGET_LANG_KEY = STORAGE_PREFIX + 'targetLanguage';
        const CUSTOM_TARGET_LANG_KEY = STORAGE_PREFIX + 'customTargetLanguage';
        const CONTENT_TYPE_KEY = STORAGE_PREFIX + 'contentType';
        const CUSTOM_CONTENT_TYPE_KEY = STORAGE_PREFIX + 'customContentType';
        const TEMPERATURE_KEY = STORAGE_PREFIX + 'temperature';
        const THEME_KEY = STORAGE_PREFIX + 'theme';

        // --- State Variables ---
        let processedResults = [];
        let currentArchiveEntries = [];
        const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25';
        const DEFAULT_TEMPERATURE = 0.45;
        let isXZWasmLoaded = false;

        // --- Wake Lock Variable ---
        let wakeLock = null;

        // --- Helper Functions ---
        function updateStatus(message, type = 'info') {
            const timestamp = new Date().toLocaleTimeString('en-GB');
            const statusLine = document.createElement('div');
            let typeClass = 'text-gray-400 dark:text-dm-text-muted';
            let icon = '';

            switch (type) {
                case 'success':
                    typeClass = 'text-green-500 dark:text-green-400';
                    icon = '<i data-feather="check-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                    break;
                case 'error':
                    typeClass = 'text-red-500 dark:text-red-400 font-semibold';
                    icon = '<i data-feather="alert-triangle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                    break;
                case 'warning':
                    typeClass = 'text-yellow-500 dark:text-yellow-400';
                    icon = '<i data-feather="alert-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                    break;
                case 'info':
                    typeClass = 'text-blue-500 dark:text-blue-400';
                    icon = '<i data-feather="info" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                    break;
                case 'system':
                     typeClass = 'text-purple-500 dark:text-purple-400';
                     icon = '<i data-feather="tool" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                     break;
                 case 'api':
                     typeClass = 'text-cyan-500 dark:text-cyan-400';
                     icon = '<i data-feather="send" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>';
                     break;
            }
            statusLine.className = `py-0.5 ${typeClass}`;
            statusLine.innerHTML = `${icon}[${timestamp}] ${message}`;

            const initialMsg = statusPanel.querySelector('div:only-child.text-gray-400, div:only-child.dark\\:text-dm-text-muted');
            if (initialMsg && (initialMsg.textContent.includes('Awaiting your command...') || initialMsg.textContent.includes('Waiting for input...'))) {
                statusPanel.innerHTML = '';
            }
            statusPanel.appendChild(statusLine);
            statusPanel.scrollTop = statusPanel.scrollHeight;
            if (icon) feather.replace();
        }


         function setButtonLoading(isLoading) {
             submitButton.disabled = isLoading;
             if (isLoading) {
                 submitButtonText.textContent = 'Processing...';
                 submitButtonIcon?.classList.add('hidden');
                 submitButtonSpinner.classList.remove('hidden');
                 submitButton.classList.add('cursor-wait', 'opacity-70');
             } else {
                 submitButtonText.textContent = 'Start Translation';
                 submitButtonIcon?.classList.remove('hidden');
                 submitButtonSpinner.classList.add('hidden');
                 submitButton.classList.remove('cursor-wait', 'opacity-70');
             }
         }

        function toggleCustomInput(selectElement, inputElement) {
             if (selectElement.value === 'Other') {
                 inputElement.classList.remove('hidden');
                 inputElement.required = true;
             } else {
                 inputElement.classList.add('hidden');
                 inputElement.required = false;
                 inputElement.value = '';
             }
        }

        // --- Settings Management ---
        function saveSettings() {
             try {
                 localStorage.setItem(API_KEY_KEY, apiKeyInput.value.trim());
                 localStorage.setItem(MODEL_ID_KEY, modelIdInput.value.trim() || DEFAULT_MODEL);
                 localStorage.setItem(TARGET_LANG_KEY, targetLanguageSelect.value);
                 localStorage.setItem(CUSTOM_TARGET_LANG_KEY, customTargetLanguageInput.value.trim());
                 localStorage.setItem(CONTENT_TYPE_KEY, contentTypeSelect.value);
                 localStorage.setItem(CUSTOM_CONTENT_TYPE_KEY, customContentTypeInput.value.trim());
                 localStorage.setItem(TEMPERATURE_KEY, temperatureInput.value);
                 updateCurrentModelDisplay();
             } catch (e) {
                 console.error("LocalStorage Error (Save):", e);
                 updateStatus("Could not save settings to local storage.", "warning");
             }
        }

        function loadSettings() {
            try {
                apiKeyInput.value = localStorage.getItem(API_KEY_KEY) || '';
                modelIdInput.value = localStorage.getItem(MODEL_ID_KEY) || DEFAULT_MODEL;

                const savedLang = localStorage.getItem(TARGET_LANG_KEY);
                if (savedLang) targetLanguageSelect.value = savedLang;
                customTargetLanguageInput.value = localStorage.getItem(CUSTOM_TARGET_LANG_KEY) || '';
                toggleCustomInput(targetLanguageSelect, customTargetLanguageInput);

                const savedType = localStorage.getItem(CONTENT_TYPE_KEY);
                if (savedType) contentTypeSelect.value = savedType;
                customContentTypeInput.value = localStorage.getItem(CUSTOM_CONTENT_TYPE_KEY) || '';
                toggleCustomInput(contentTypeSelect, customContentTypeInput);

                const savedTemp = localStorage.getItem(TEMPERATURE_KEY);
                const tempValue = savedTemp !== null ? parseFloat(savedTemp) : DEFAULT_TEMPERATURE;
                const clampedTempValue = Math.max(0.0, Math.min(2.0, tempValue));
                temperatureInput.value = clampedTempValue.toFixed(2);
                temperatureSlider.value = clampedTempValue.toFixed(2);
                temperatureDisplay.textContent = clampedTempValue.toFixed(2);

                updateCurrentModelDisplay();
            } catch (e) {
                console.error("LocalStorage Error (Load):", e);
                updateStatus("Could not load settings. Using defaults.", "warning");
                modelIdInput.value = DEFAULT_MODEL;
                temperatureInput.value = DEFAULT_TEMPERATURE.toFixed(2);
                temperatureSlider.value = DEFAULT_TEMPERATURE.toFixed(2);
                temperatureDisplay.textContent = DEFAULT_TEMPERATURE.toFixed(2);
                updateCurrentModelDisplay();
            }
        }

        function updateCurrentModelDisplay() {
            currentModelDisplay.textContent = modelIdInput.value.trim() || DEFAULT_MODEL;
        }

        // --- Theme Management ---
        function applyTheme(theme) {
            if (theme === 'dark') {
                htmlElement.classList.add('dark');
                themeToggleIcon.setAttribute('data-feather', 'sun');
                themeToggleButton.classList.remove('bg-primary');
                themeToggleButton.classList.add('dark:bg-primary-light');
                themeToggleButton.classList.remove('text-white');
                themeToggleButton.classList.add('dark:text-black');
            } else {
                htmlElement.classList.remove('dark');
                themeToggleIcon.setAttribute('data-feather', 'moon');
                themeToggleButton.classList.add('bg-primary');
                themeToggleButton.classList.remove('dark:bg-primary-light');
                themeToggleButton.classList.add('text-white');
                themeToggleButton.classList.remove('dark:text-black');
            }
            feather.replace();
        }

        function toggleTheme() {
            const currentTheme = htmlElement.classList.contains('dark') ? 'dark' : 'light';
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            applyTheme(newTheme);
            try {
                localStorage.setItem(THEME_KEY, newTheme);
            } catch (e) {
                console.error("LocalStorage Error (Theme Save):", e);
                updateStatus("Could not save theme preference.", "warning");
            }
        }

        function loadTheme() {
            let savedTheme = 'dark';
            try {
                const storedTheme = localStorage.getItem(THEME_KEY);
                if (storedTheme === 'light') {
                    savedTheme = 'light';
                }
            } catch (e) {
                console.error("LocalStorage Error (Theme Load):", e);
                updateStatus("Theme preference issue. Defaulting to dark.", "warning");
            }
            applyTheme(savedTheme);
        }

        // --- Archive Handling ---
        async function decompressXZ(file) {
            if (!isXZWasmLoaded || !window.XZWASM || !window.XZWASM.XzReadableStream) {
                throw new Error("XZ decompression library (XZWASM) is not available or failed to load. Your browser probably doesn't support it, or an extension could be blocking resources from 'cdn.jsdelivr.net'. Please check your internet connection, try disabling browser extensions, or manually decompress the .xz file before uploading.");
            }
            const { XzReadableStream } = window.XZWASM;
            const xzReadableStream = new XzReadableStream(file.stream());
            const decompressedBlob = await new Response(xzReadableStream).blob();
            return decompressedBlob;
        }

        async function processUploadedFile(file) {
            currentArchiveEntries = [];
            archiveFilesList.innerHTML = '';
            archiveContentsDisplay.classList.add('hidden');

            const fileName = file.name;
            const fileType = fileName.split('.').pop().toLowerCase();
            const secondLastExt = fileName.split('.').slice(-2).join('.');

            if (['zip', 'xz', 'gz', 'tar.gz', 'tar.xz', '7z'].includes(fileType) || ['tar.gz', 'tar.xz'].includes(secondLastExt)) {
                updateStatus(`Processing archive: ${fileName}...`, 'info');
                try {
                    let archive;
                    let entries = [];

                    if (fileType === 'zip') {
                        archive = await JSZip.loadAsync(file);
                        for (const [relativePath, zipEntry] of Object.entries(archive.files)) {
                            if (!zipEntry.dir) {
                                const entryName = zipEntry.name;
                                const entryExt = entryName.split('.').pop().toLowerCase();
                                if (['srt', 'ass'].includes(entryExt)) {
                                    entries.push({
                                        name: entryName,
                                        dataGetter: async () => zipEntry.async('string'),
                                        type: entryExt
                                    });
                                }
                            }
                        }
                    } else if (fileType === 'xz' && !fileName.endsWith('.tar.xz')) {
                        if (!isXZWasmLoaded) {
                             updateStatus("XZ decompression library is not loaded. Cannot process .xz file. Please check previous warnings or try manually decompressing.", "error");
                             return;
                        }
                        const decompressedBlob = await decompressXZ(file);
                        const entryName = fileName.replace(/\.xz$/, '');
                        const entryExt = entryName.split('.').pop().toLowerCase();
                        if (['srt', 'ass'].includes(entryExt)) {
                             entries.push({
                                name: entryName,
                                dataGetter: async () => decompressedBlob.text(),
                                type: entryExt
                            });
                        } else {
                            updateStatus(`Decompressed .xz file '${entryName}' is not .srt or .ass.`, 'warning');
                        }
                    } else {
                        updateStatus(`Archive type .${fileType} (or ${secondLastExt}) is recognized but internal file extraction is not yet supported. Please extract .srt/.ass files manually first.`, 'warning');
                        return;
                    }


                    if (entries.length > 0) {
                        currentArchiveEntries = entries;
                        populateArchiveFilesList(entries);
                        archiveContentsDisplay.classList.remove('hidden');
                        updateStatus(`Found ${entries.length} subtitle file(s) in archive. Select files to translate.`, 'success');
                    } else {
                        updateStatus(`No .srt or .ass files found in '${fileName}'.`, 'warning');
                    }
                } catch (error) {
                    updateStatus(`Error processing archive '${fileName}': ${error.message}`, 'error');
                    console.error("Archive processing error:", error);
                }
            } else if (['srt', 'ass', 'txt'].includes(fileType)) {
                // Single file, handled by main logic
            } else {
                updateStatus(`Unsupported file type: .${fileType}. Please upload .srt, .ass, .txt, .zip, or .xz.`, 'error');
                fileInput.value = '';
                fileNameDisplay.textContent = 'No file selected';
            }
        }

        function populateArchiveFilesList(entries) {
            archiveFilesList.innerHTML = '';
            entries.forEach((entry, index) => {
                const item = document.createElement('div');
                item.className = 'archive-file-item';

                const textWrapper = document.createElement('div');
                textWrapper.className = 'flex-grow min-w-0 mr-2'; // min-w-0 is crucial for flex item wrapping

                const fileNameSpan = document.createElement('span');
                fileNameSpan.className = 'text-sm text-gray-800 dark:text-dm-text-primary break-all'; // Use break-all for aggressive breaking
                fileNameSpan.textContent = entry.name;

                const fileTypeSpan = document.createElement('span');
                fileTypeSpan.className = 'text-xs text-gray-500 dark:text-dm-text-muted ml-1 whitespace-nowrap';
                fileTypeSpan.textContent = ` (.${entry.type})`;

                textWrapper.appendChild(fileNameSpan);
                textWrapper.appendChild(fileTypeSpan);

                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.id = `archiveFile_${index}`;
                checkbox.dataset.entryIndex = String(index);
                checkbox.className = 'custom-checkbox flex-shrink-0';
                checkbox.checked = true;

                item.appendChild(textWrapper);
                item.appendChild(checkbox);
                archiveFilesList.appendChild(item);

                item.addEventListener('click', (event) => {
                    if (event.target.tagName === 'INPUT' && event.target.type === 'checkbox') {
                        return;
                    }
                    const cb = item.querySelector('input[type="checkbox"]');
                    if (cb) {
                        cb.checked = !cb.checked;
                    }
                });
            });
            feather.replace();
        }


        selectAllArchiveFilesButton.addEventListener('click', () => {
            archiveFilesList.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = true);
        });

        deselectAllArchiveFilesButton.addEventListener('click', () => {
            archiveFilesList.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
        });


        // --- Event Listeners ---
        document.addEventListener('DOMContentLoaded', () => {
            loadTheme();
            loadSettings();
            feather.replace();

            setTimeout(() => {
                if (typeof XZWASM !== 'undefined' && typeof XZWASM.XzReadableStream !== 'undefined') {
                    isXZWasmLoaded = true;
                    updateStatus("XZ decompression library (XZWASM) loaded. .xz files can be processed.", "system");
                } else {
                    isXZWasmLoaded = false;
                    console.warn("XZWASM library not loaded or not fully available after page load.");
                    updateStatus("XZ decompression features might be unavailable. Your browser probably doesn't support it, or an extension is blocking resources from 'cdn.jsdelivr.net'. If .xz support is needed, try disabling extensions, use a different browser, or decompress .xz files manually before uploading.", "warning");
                }
            }, 1500);
        });

        apiKeyInput.addEventListener('change', saveSettings);
        modelIdInput.addEventListener('change', saveSettings);
        targetLanguageSelect.addEventListener('change', () => { toggleCustomInput(targetLanguageSelect, customTargetLanguageInput); saveSettings(); });
        customTargetLanguageInput.addEventListener('change', saveSettings);
        contentTypeSelect.addEventListener('change', () => { toggleCustomInput(contentTypeSelect, customContentTypeInput); saveSettings(); });
        customContentTypeInput.addEventListener('change', saveSettings);

        temperatureInput.addEventListener('input', () => {
            let value = parseFloat(temperatureInput.value);
            if (isNaN(value)) { value = DEFAULT_TEMPERATURE; }
            value = Math.max(0.0, Math.min(2.0, value));
            temperatureInput.value = value.toFixed(2);
            temperatureSlider.value = value.toFixed(2);
            temperatureDisplay.textContent = value.toFixed(2);
            saveSettings();
        });

        temperatureSlider.addEventListener('input', () => {
            const value = parseFloat(temperatureSlider.value);
            temperatureInput.value = value.toFixed(2);
            temperatureDisplay.textContent = value.toFixed(2);
            saveSettings();
        });

        toggleApiKey.addEventListener('click', () => {
            const type = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password';
            apiKeyInput.setAttribute('type', type);
            toggleApiKeyIcon.setAttribute('data-feather', type === 'password' ? 'eye' : 'eye-off');
            feather.replace();
        });

        fileInput.addEventListener('change', async () => {
            downloadSection.classList.add('hidden');
            individualDownloadsContainer.classList.add('hidden');
            individualDownloadsList.innerHTML = '';
            processedResults = [];
            archiveContentsDisplay.classList.add('hidden');
            archiveFilesList.innerHTML = '';
            currentArchiveEntries = [];

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const displayName = file.name.length > 40
                    ? `${file.name.substring(0, 18)}...${file.name.substring(file.name.length - 18)}`
                    : file.name;
                fileNameDisplay.textContent = `Selected: ${displayName} (${(file.size / 1024).toFixed(1)} KB)`;
                fileNameDisplay.classList.remove('text-gray-600', 'dark:text-dm-text-secondary');
                fileNameDisplay.classList.add('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
                await processUploadedFile(file);
            } else {
                fileNameDisplay.textContent = 'No file selected';
                fileNameDisplay.classList.add('text-gray-600', 'dark:text-dm-text-secondary');
                fileNameDisplay.classList.remove('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
            }
        });

        themeToggleButton.addEventListener('click', toggleTheme);

        // --- Wake Lock Functions ---
        const requestWakeLock = async () => {
            if ('wakeLock' in navigator) {
                try {
                    wakeLock = await navigator.wakeLock.request('screen');
                    updateStatus('Screen kept active during translation.', 'system');
                    wakeLock.addEventListener('release', () => {
                        if (wakeLock) {
                           updateStatus('Screen activity lock released by browser (e.g. tab hidden).', 'warning');
                           wakeLock = null;
                        }
                    });
                } catch (err) {
                    console.error(`Wake Lock Error: ${err.name}, ${err.message}`);
                    updateStatus(`Could not keep screen active: ${err.message}`, 'warning');
                    wakeLock = null;
                }
            } else {
                updateStatus('Screen Wake Lock API not supported by this browser.', 'warning');
            }
        };

        const releaseWakeLock = async () => {
            if (wakeLock !== null) {
                const tempLock = wakeLock;
                wakeLock = null;
                try {
                    await tempLock.release();
                    updateStatus('Screen activity lock no longer needed.', 'system');
                } catch (err) {
                    console.error(`Wake Lock Release Error: ${err.name}, ${err.message}`);
                }
            }
        };


        // --- Core Translation Logic ---
        async function translateSingleContent(fileContent, originalName, originalExtension, translationParams) {
            const { apiKey, modelId, targetLanguage, contentType, optionalNotes, temperature } = translationParams;

            updateStatus(`Preparing '${originalName}' for translation to ${targetLanguage}...`, 'info');

            let system_prompt = `You are an expert subtitle translator specializing in translating {contentType} content into fluent, natural-sounding {targetLanguage}.
Your task is to translate the provided subtitle file content ({fileExtension} format).

RULES (Strictly Follow):
1. Translate the dialogue text accurately and naturally into {targetLanguage}.
2. Preserve the original subtitle format ({fileExtension}) STRICTLY.
    - For SRT: Maintain the sequence numbers, timecodes (start --> end), and line breaks exactly as in the original, replacing only the text content.
    - For ASS: Maintain ALL original [Script Info], [V4+ Styles], and [Events] formatting lines (Style, Name, MarginL, MarginR, MarginV, Effect, etc.). ONLY translate the text part of the 'Dialogue:' lines. Preserve the original Layer, Start, End, Style, Name, MarginL, MarginR, MarginV, Effect fields for each Dialogue event.
    - For TXT: Translate each line, preserving the original line structure.
3. Adjust ASS timing slightly ONLY IF NECESSARY for {targetLanguage} reading speed, but prioritize maintaining original sync. Keep short lines short on screen.
4. Maintain consistency in character names, places, and specific terminology mentioned in the optional notes (if provided).
5. CRITICAL: Output ONLY the raw, fully translated subtitle content in the original {fileExtension} format. Do NOT include ANY introductory text, explanations, summaries, apologies, markdown formatting (like \`\`\`ass ... \`\`\`), or concluding remarks in your response. Your entire output must be ONLY the translated subtitle data, ready to be saved as a .{fileExtension} file.

{optionalNotesSection}

Translate the following subtitle content:
`;
            system_prompt = system_prompt.replace(/{contentType}/g, contentType);
            system_prompt = system_prompt.replace(/{targetLanguage}/g, targetLanguage);
            system_prompt = system_prompt.replace(/{fileExtension}/g, originalExtension);
            system_prompt = system_prompt.replace('{optionalNotesSection}', optionalNotes ? `- Additional User Instructions:\n${optionalNotes}` : '');

            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`;
            const requestData = {
                systemInstruction: { parts: [{ text: system_prompt }] },
                contents: [{ role: 'user', parts: [{ text: fileContent }] }],
                generationConfig: { responseMimeType: 'text/plain', temperature: temperature },
                safetySettings: [
                    { category: "HARM_CATEGORY_HARASSMENT", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_HATE_SPEECH", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_SEXUALLY_EXPLICIT", threshold: "BLOCK_NONE" },
                    { category: "HARM_CATEGORY_DANGEROUS_CONTENT", threshold: "BLOCK_NONE" }
                ]
            };

            updateStatus(`Sending '${originalName}' to Gemini (${modelId}, Temp: ${temperature.toFixed(2)})...`, 'api');

            try {
                const response = await fetch(apiUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', },
                    body: JSON.stringify(requestData),
                });

                const responseBody = await response.text();

                if (!response.ok) {
                    let errorDetails = `HTTP status ${response.status}`;
                    try {
                        const errorJson = JSON.parse(responseBody);
                        errorDetails = errorJson?.error?.message || JSON.stringify(errorJson);
                    } catch (parseError) {
                        errorDetails += ` - ${responseBody.substring(0, 200)}`;
                    }
                    throw new Error(`API Error: ${errorDetails}`);
                }

                updateStatus(`Response for '${originalName}' received, processing...`, 'api');
                let translatedText = null;

                try {
                    const responseData = JSON.parse(responseBody);
                    const candidates = responseData?.candidates;
                    if (candidates && candidates.length > 0) {
                        const content = candidates[0]?.content;
                        if (content && content.parts && content.parts.length > 0) {
                            translatedText = content.parts[0]?.text;
                        }
                    }

                    if (!translatedText) {
                         const finishReason = candidates?.[0]?.finishReason;
                         if (finishReason && finishReason !== 'STOP') {
                             let reasonMessage = `Translation for '${originalName}' stopped by API. Reason: ${finishReason}.`;
                             const safetyRatings = candidates?.[0]?.safetyRatings;
                             if (safetyRatings) {
                                 console.warn("Safety Ratings:", safetyRatings);
                                 reasonMessage += ` Details: ${JSON.stringify(safetyRatings)}`;
                             }
                             throw new Error(reasonMessage);
                         } else {
                             throw new Error(`Failed to extract translated text for '${originalName}' from API response.`);
                         }
                    }
                } catch (e) {
                    console.error('Error parsing API response for ' + originalName + ':', responseBody);
                    throw new Error(`Error parsing API response for '${originalName}': ${e.message}`);
                }

                if (translatedText && translatedText.trim().length > 0) {
                    let looksValid = true;
                    if (originalExtension === 'srt' && !translatedText.match(/^\d+\s*\n\d{2}:\d{2}:\d{2},\d{3} --> \d{2}:\d{2}:\d{2},\d{3}/m)) {
                        updateStatus(`Warning: Translated '${originalName}' might not be valid SRT format.`, 'warning');
                        looksValid = false;
                    } else if (originalExtension === 'ass' && !translatedText.includes('[Events]')) {
                        updateStatus(`Warning: Translated '${originalName}' might not be valid ASS format (missing [Events]).`, 'warning');
                        looksValid = false;
                    }

                    if (looksValid) updateStatus(`'${originalName}' translated successfully!`, 'success');
                    return translatedText;
                } else {
                    throw new Error(`Received empty or whitespace-only translation for '${originalName}'.`);
                }

            } catch (error) {
                updateStatus(`Translation failed for '${originalName}': ${error.message}`, 'error');
                console.error(`API Request or Processing Failed for ${originalName}:`, error);
                throw error;
            }
        }


        // --- Form Submission ---
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            setButtonLoading(true);
            downloadSection.classList.add('hidden');
            individualDownloadsContainer.classList.add('hidden');
            individualDownloadsList.innerHTML = '';
            processedResults = [];
            statusPanel.innerHTML = '';
            updateStatus('Translation process initiated.', 'info');

            const apiKey = apiKeyInput.value.trim();
            const modelIdToUse = modelIdInput.value.trim() || DEFAULT_MODEL;
            const mainFile = fileInput.files[0];
            let targetLanguage = targetLanguageSelect.value === 'Other' ? customTargetLanguageInput.value.trim() : targetLanguageSelect.value;
            let contentType = contentTypeSelect.value === 'Other' ? customContentTypeInput.value.trim() : contentTypeSelect.value;
            const optionalNotes = optionalNotesInput.value.trim();
            const temperature = parseFloat(temperatureInput.value) || DEFAULT_TEMPERATURE;

            let valid = true;
            if (!apiKey) { updateStatus('API Key is required.', 'error'); valid = false; }
            if (!modelIdToUse) { updateStatus('Model ID is required.', 'error'); valid = false; }
            if (!mainFile) { updateStatus('Please select a file or archive.', 'error'); valid = false; }
            if (!targetLanguage) { updateStatus('Target Language is required.', 'error'); valid = false; }
            if (!contentType) { updateStatus('Content Type is required.', 'error'); valid = false; }
            if (isNaN(temperature) || temperature < 0.0 || temperature > 2.0) {
                updateStatus('Invalid Temperature. Must be 0.0-2.0.', 'error'); valid = false;
            }

            if (!valid) {
                setButtonLoading(false);
                return;
            }

            updateStatus(`Using model: ${modelIdToUse}, Target: ${targetLanguage}, Content: ${contentType}, Temp: ${temperature.toFixed(2)}.`, 'system');
            if (optionalNotes) updateStatus(`Additional AI instructions provided.`, 'system');
            updateStatus(`Permissive content safety filters are active.`, 'warning');


            await requestWakeLock();

            let filesToTranslate = [];

            if (currentArchiveEntries.length > 0) {
                const selectedCheckboxes = archiveFilesList.querySelectorAll('input[type="checkbox"]:checked');
                if (selectedCheckboxes.length === 0) {
                    updateStatus('No files selected from the archive for translation.', 'warning');
                    setButtonLoading(false);
                    await releaseWakeLock();
                    return;
                }
                selectedCheckboxes.forEach(cb => {
                    const entryIndex = parseInt(cb.dataset.entryIndex);
                    if (entryIndex >= 0 && entryIndex < currentArchiveEntries.length) {
                        const entry = currentArchiveEntries[entryIndex];
                        filesToTranslate.push({
                            name: entry.name,
                            contentGetter: entry.dataGetter,
                            extension: entry.type
                        });
                    }
                });
                updateStatus(`Processing ${filesToTranslate.length} file(s) selected from archive...`, 'info');
            } else {
                const mainFileName = mainFile.name;
                const mainFileExtension = mainFileName.split('.').pop()?.toLowerCase();

                if (mainFileExtension === 'xz') {
                    if (!isXZWasmLoaded) {
                        updateStatus(`Cannot process .xz file: XZ decompression library (XZWASM) is not loaded or failed. Please check your internet, browser extensions, or try manually decompressing the file first.`, 'error');
                        setButtonLoading(false);
                        await releaseWakeLock();
                        return;
                    }
                    updateStatus(`Attempting to process single .xz file: ${mainFileName}...`, 'info');
                    await processUploadedFile(mainFile);
                    if (currentArchiveEntries.length > 0) {
                         currentArchiveEntries.forEach(entry => {
                            filesToTranslate.push({
                                name: entry.name,
                                contentGetter: entry.dataGetter,
                                extension: entry.type
                            });
                        });
                        if(filesToTranslate.length === 0) {
                             updateStatus(`No .srt or .ass file found within the .xz archive '${mainFileName}'.`, 'warning');
                             setButtonLoading(false); await releaseWakeLock(); return;
                        }
                        updateStatus(`Processing ${filesToTranslate.length} file(s) from .xz archive...`, 'info');
                    } else {
                         updateStatus(`Could not extract a valid subtitle file from '${mainFileName}'. It might be empty or not contain .srt/.ass.`, 'error');
                         setButtonLoading(false); await releaseWakeLock(); return;
                    }
                } else if (['srt', 'ass', 'txt'].includes(mainFileExtension)) {
                    filesToTranslate.push({
                        name: mainFileName,
                        contentGetter: () => new Promise((resolve, reject) => {
                            const reader = new FileReader();
                            reader.onload = (e) => resolve(e.target.result);
                            reader.onerror = (e) => reject(e.target.error);
                            reader.readAsText(mainFile, 'UTF-8');
                        }),
                        extension: mainFileExtension
                    });
                    updateStatus(`Processing single file: ${mainFileName} (${(mainFile.size / 1024).toFixed(1)} KB).`, 'info');
                } else {
                    updateStatus(`Invalid file type: .${mainFileExtension}. Only .srt, .ass, .txt, .zip, .xz allowed.`, 'error');
                    setButtonLoading(false);
                    await releaseWakeLock();
                    return;
                }
            }

            if (filesToTranslate.length === 0 && currentArchiveEntries.length === 0) {
                updateStatus('No valid files to translate.', 'warning');
                setButtonLoading(false);
                await releaseWakeLock();
                return;
            }


            const translationParams = { apiKey, modelId: modelIdToUse, targetLanguage, contentType, optionalNotes, temperature };
            let successCount = 0;

            for (let i = 0; i < filesToTranslate.length; i++) {
                const fileTask = filesToTranslate[i];
                updateStatus(`Translating file ${i + 1} of ${filesToTranslate.length}: '${fileTask.name}'...`, 'info');
                try {
                    const fileContent = await fileTask.contentGetter();
                    if (!fileContent) {
                        throw new Error("File content is empty or could not be read.");
                    }
                    const translatedText = await translateSingleContent(fileContent, fileTask.name, fileTask.extension, translationParams);
                    processedResults.push({
                        originalName: fileTask.name,
                        translatedText: translatedText,
                        error: null,
                        originalExtension: fileTask.extension
                    });
                    successCount++;
                } catch (error) {
                    processedResults.push({
                        originalName: fileTask.name,
                        translatedText: null,
                        error: error.message || "Unknown translation error",
                        originalExtension: fileTask.extension
                    });
                    if (error.message && error.message.toLowerCase().includes("api key not valid")) {
                         updateStatus("Critical API Key Error. Aborting further translations.", "error");
                         break;
                    }
                     if (error.message && (error.message.includes("quota") || error.message.includes("limit"))) {
                        updateStatus("API quota/limit likely reached. Further translations may fail.", "error");
                    }
                }
            }

            if (filesToTranslate.length > 0) {
                 updateStatus(`Batch processing complete. ${successCount} of ${filesToTranslate.length} files translated successfully.`, successCount === filesToTranslate.length ? 'success' : (successCount > 0 ? 'warning' : 'error'));
            }


            if (processedResults.some(r => r.translatedText)) {
                setupDownloadSection();
            } else if (filesToTranslate.length > 0) {
                updateStatus('No files were successfully translated.', 'error');
            }


            setButtonLoading(false);
            await releaseWakeLock();
        });

        // --- Download Section Setup ---
        function setupDownloadSection() {
            downloadSection.classList.remove('hidden');
            individualDownloadsList.innerHTML = '';
            let successfulTranslations = processedResults.filter(r => r.translatedText);

            if (successfulTranslations.length === 0) {
                downloadSection.classList.add('hidden');
                return;
            }

            if (successfulTranslations.length > 1) {
                downloadAllButtonText.textContent = `Download All (${successfulTranslations.length}) as ZIP`;
                individualDownloadsContainer.classList.remove('hidden');

                successfulTranslations.forEach(result => {
                    const item = document.createElement('div');
                    item.className = 'flex items-center justify-between p-2.5 rounded-md bg-white dark:bg-dm-input-bg border border-gray-200 dark:border-dm-border shadow-sm';
                    const baseName = result.originalName.substring(0, result.originalName.lastIndexOf('.')) || result.originalName;
                    const langCode = getLanguageCode();
                    const outputFilename = `${baseName}_${langCode}.${result.originalExtension}`;

                    item.innerHTML = `
                        <span class="text-sm text-gray-700 dark:text-dm-text-primary break-all flex-grow pr-2">${outputFilename}</span>
                        <button data-filename="${outputFilename}" data-content="${escape(result.translatedText)}" class="btn btn-secondary !px-3 !py-1.5 !text-xs individual-download-btn">
                            <i data-feather="download" class="w-4 h-4 mr-1.5"></i>Download
                        </button>
                    `;
                    individualDownloadsList.appendChild(item);
                });
                feather.replace();

                individualDownloadsList.querySelectorAll('.individual-download-btn').forEach(button => {
                    button.addEventListener('click', (e) => {
                        const btn = e.currentTarget;
                        const filename = btn.dataset.filename;
                        const content = unescape(btn.dataset.content);
                        downloadSingleFile(content, filename);
                    });
                });

            } else if (successfulTranslations.length === 1) {
                const result = successfulTranslations[0];
                const baseName = result.originalName.substring(0, result.originalName.lastIndexOf('.')) || result.originalName;
                const langCode = getLanguageCode();
                const outputFilename = `${baseName}_${langCode}.${result.originalExtension}`;
                downloadAllButtonText.textContent = `Download ${outputFilename}`;
                individualDownloadsContainer.classList.add('hidden');
            }
        }

        function getLanguageCode() {
            let langCode = 'tr';
            const selectedLang = targetLanguageSelect.value;
            if (selectedLang === 'Other') {
                 langCode = customTargetLanguageInput.value.trim().substring(0, 3).toLowerCase().replace(/[^a-z]/g, '') || 'unk';
            } else {
                 const langMap = { 'Turkish': 'tr', 'English': 'en', 'Spanish': 'es', 'French': 'fr', 'German': 'de', 'Japanese': 'ja', 'Korean': 'ko', 'Chinese (Simplified)': 'zh-cn', 'Portuguese (Brazil)': 'pt-br', 'Russian': 'ru', 'Arabic': 'ar' };
                 langCode = langMap[selectedLang] || selectedLang.substring(0, 2).toLowerCase();
            }
            return langCode;
        }

        function downloadSingleFile(content, filename) {
            if (!content || content.trim().length === 0) {
                updateStatus(`No content to download for ${filename}.`, 'error');
                return;
            }
            try {
                const BOM = "\uFEFF";
                const blob = new Blob([BOM + content], { type: 'text/plain;charset=utf-8' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none'; a.href = url; a.download = filename;
                document.body.appendChild(a); a.click();
                window.URL.revokeObjectURL(url); document.body.removeChild(a);
                updateStatus(`Download initiated for "${filename}".`, 'success');
            } catch(e) {
                 updateStatus(`Error creating download for "${filename}": ${e.message}`, 'error');
                 console.error("Download Error:", e);
            }
        }

        downloadAllButton.addEventListener('click', async () => {
            const successfulTranslations = processedResults.filter(r => r.translatedText);
            if (successfulTranslations.length === 0) {
                updateStatus('No successfully translated files to download.', 'error');
                return;
            }

            if (successfulTranslations.length === 1) {
                const result = successfulTranslations[0];
                const baseName = result.originalName.substring(0, result.originalName.lastIndexOf('.')) || result.originalName;
                const langCode = getLanguageCode();
                const outputFilename = `${baseName}_${langCode}.${result.originalExtension}`;
                downloadSingleFile(result.translatedText, outputFilename);
            } else {
                updateStatus('Preparing ZIP file for download...', 'info');
                try {
                    const zip = new JSZip();
                    const langCode = getLanguageCode();
                    const BOM = "\uFEFF";

                    successfulTranslations.forEach(result => {
                        const baseName = result.originalName.substring(0, result.originalName.lastIndexOf('.')) || result.originalName;
                        const outputFilename = `${baseName}_${langCode}.${result.originalExtension}`;
                        zip.file(outputFilename, BOM + result.translatedText);
                    });

                    const zipBlob = await zip.generateAsync({ type: "blob", compression: "DEFLATE", compressionOptions: { level: 6 } });
                    const archiveBaseName = fileInput.files[0] ? (fileInput.files[0].name.substring(0, fileInput.files[0].name.lastIndexOf('.')) || fileInput.files[0].name) : 'translations';
                    const zipFilename = `${archiveBaseName}_${langCode}_all.zip`;

                    const url = URL.createObjectURL(zipBlob);
                    const a = document.createElement('a');
                    a.style.display = 'none'; a.href = url; a.download = zipFilename;
                    document.body.appendChild(a); a.click();
                    window.URL.revokeObjectURL(url); document.body.removeChild(a);
                    updateStatus(`ZIP file "${zipFilename}" download initiated.`, 'success');
                } catch (e) {
                    updateStatus(`Error creating ZIP file: ${e.message}`, 'error');
                    console.error("ZIP Creation Error:", e);
                }
            }
        });

    </script>
</body>
</html>
