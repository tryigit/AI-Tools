<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Future of Translations | AI Subtitle Translator | Gemini Powered</title>
    <meta name="description" content="Translate .srt, .ass, or .txt subtitle files professionally using Google Gemini AI. Customize temperature for balance between quality and fluency. Preserves timing & format.">
    <meta name="keywords" content="subtitle translator, ai translation, gemini api, gemini, srt translator, ass translator, text translator, ai subtitle, machine translation, localization, global, professional translation, tryigit, screen wake lock, temperature setting, translation quality, translation fluency">
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
                        primary: { light: '#9333ea', DEFAULT: '#6d28d9', dark: '#5b21b6' }, // Adjusted light primary for better contrast on black
                        secondary: { light: '#2dd4bf', DEFAULT: '#14b8a6', dark: '#0d9488' },
                        // True Black Theme Colors
                        'dm-bg': '#000000', // True black background
                        'dm-card': '#111111', // Very dark gray for cards/fieldsets
                        'dm-text-primary': '#e5e5e5', // Light gray for primary text (slightly brighter)
                        'dm-text-secondary': '#a3a3a3', // Medium gray for secondary text
                        'dm-text-muted': '#737373', // Darker gray for muted text
                        'dm-border': '#333333', // Subtle border color
                        'dm-input-bg': '#1a1a1a', // Slightly lighter than card for inputs
                        'dm-input-border': '#404040', // Slightly lighter border for inputs
                        'dm-input-placeholder': '#737373', // Muted text color for placeholders
                        'dm-status-bg': '#0a0a0a', // Very dark, almost black status panel
                        'dm-status-border': '#2a2a2a',
                        'dm-status-text': '#cccccc', // Default status text
                    },
                    boxShadow: {
                         'input-focus': '0 0 0 3px rgba(109, 40, 217, 0.3)',
                         'btn': '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                         'btn-hover': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                         'dark-input-focus': '0 0 0 3px rgba(147, 51, 234, 0.5)', // primary-light/50
                         'dark-btn': '0 4px 6px -1px rgba(255, 255, 255, 0.05), 0 2px 4px -2px rgba(255, 255, 255, 0.05)', // Subtle glow for buttons on black
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
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23a3a3a3' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e"); /* dm-text-secondary */
             }
            textarea { @apply min-h-[90px] leading-relaxed; }
            fieldset { @apply border border-gray-200 rounded-lg p-5 pt-3 dark:border-dm-border dark:bg-dm-card; } /* Added dark bg */
            legend { @apply px-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary; }
            .description { @apply mt-1.5 text-xs text-gray-600 dark:text-dm-text-muted; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline dark:text-primary-light dark:hover:text-purple-400; } /* Adjusted dark hover */
            .warning { @apply text-amber-600 dark:text-yellow-400 font-medium; } /* Adjusted dark warning */
            #statusPanel::-webkit-scrollbar { width: 6px; }
            #statusPanel::-webkit-scrollbar-track { @apply bg-dm-status-border rounded; } /* Use status border */
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
        }
        @layer components {
            .file-input-area { @apply relative block w-full p-6 text-center border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-primary/70 transition-colors duration-200 ease-in-out
                                   dark:bg-dm-card dark:border-dm-border dark:hover:bg-opacity-75 dark:hover:border-primary-light/70; } /* Adjusted dark hover */
            .file-input-area .icon { @apply w-10 h-10 mx-auto text-gray-400 group-hover:text-primary/80 transition-colors dark:text-dm-text-muted dark:group-hover:text-primary-light/80; }
            .file-input-area .text-main { @apply mt-2 block text-sm font-semibold text-gray-700 dark:text-dm-text-secondary; }
            .file-input-area .text-sub { @apply block text-xs text-gray-500 dark:text-dm-text-muted; }
            .file-input-area input[type="file"] { @apply absolute inset-0 w-full h-full opacity-0 cursor-pointer; }
            .btn { @apply inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-btn focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out disabled:opacity-60 disabled:cursor-not-allowed dark:focus:ring-offset-dm-bg dark:shadow-dark-btn; }
            .btn:hover:not(:disabled) { @apply dark:shadow-dark-btn-hover; }
            .btn-primary { @apply btn text-white bg-primary hover:bg-primary-dark focus:ring-primary dark:bg-primary dark:hover:bg-primary-dark; } /* Ensure dark bg uses primary */
            .btn-secondary { @apply btn text-white bg-secondary hover:bg-secondary-dark focus:ring-secondary dark:bg-secondary dark:hover:bg-secondary-dark; } /* Ensure dark bg uses secondary */
             @keyframes spin { to { transform: rotate(360deg); } }
             .spinner { animation: spin 1s linear infinite; @apply inline-block w-5 h-5 border-[3px] border-current border-t-transparent rounded-full; }
        }
    </style>
    <!-- Reklam kodu -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490"
     crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 dark:bg-dm-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <header class="text-center mb-10 md:mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-dm-text-primary">
                 Future of Subtitle Translations <span class="text-primary dark:text-primary-light">AI</span>
             </h1>
             <p class="mt-3 text-lg text-gray-600 dark:text-dm-text-secondary max-w-2xl mx-auto">
                 Translate subtitles effortlessly while preserving timing and quality, powered by Google Gemini.
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
                    <label for="subtitleFile" class="sr-only">Subtitle File (.srt, .ass, .txt)</label>
                    <label for="subtitleFile" class="file-input-area group">
                        <i data-feather="upload-cloud" class="icon"></i>
                         <span class="text-main">Click to upload or drag & drop</span>
                         <span class="text-sub">Supports .SRT, .ASS, and .TXT files</span>
                         <input type="file" id="subtitleFile" name="subtitleFile" accept=".srt,.ass,.txt" required>
                     </label>
                     <div id="fileNameDisplay" class="mt-3 text-sm font-medium text-gray-600 dark:text-dm-text-secondary text-center truncate px-2">No file selected</div>
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
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Processing Status</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-gray-900 text-gray-200 border border-gray-700 dark:bg-dm-status-bg dark:text-dm-status-text dark:border-dm-status-border font-mono text-sm shadow-inner leading-relaxed">
                <div class="text-gray-400 dark:text-dm-text-muted">Waiting for input...</div>
            </div>
        </div>

        <!-- Download Section -->
        <div id="downloadSection" class="mt-6 hidden">
            <button id="downloadButton" class="w-full btn-secondary">
                 <i data-feather="download" class="w-5 h-5 mr-2"></i>
                 Download Translated File
            </button>
        </div>

         <footer class="mt-10 pt-6 border-t border-gray-200 dark:border-dm-border text-center text-xs text-gray-500 dark:text-dm-text-muted">
             API key, settings, and file content are processed locally in your browser and sent directly to the Google API. No data is stored on our servers. Tool by Yiğit.
         </footer>
    </div>

    <!-- Theme Toggle Button -->
    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-5 right-5 z-50 p-2.5 rounded-full bg-primary dark:bg-primary-light text-white dark:text-black shadow-lg hover:opacity-90 transition-opacity">
        <i data-feather="sun" class="w-5 h-5"></i>
    </button>

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
        const downloadButton = document.getElementById('downloadButton');
        const themeToggleButton = document.getElementById('themeToggleButton');
        const themeToggleIcon = themeToggleButton.querySelector('i');
        const htmlElement = document.documentElement;

        // --- localStorage Keys ---
        const STORAGE_PREFIX = 'aiSubtitleTranslator_v5_'; // Incremented version for new theme defaults
        const API_KEY_KEY = STORAGE_PREFIX + 'apiKey';
        const MODEL_ID_KEY = STORAGE_PREFIX + 'modelId';
        const TARGET_LANG_KEY = STORAGE_PREFIX + 'targetLanguage';
        const CUSTOM_TARGET_LANG_KEY = STORAGE_PREFIX + 'customTargetLanguage';
        const CONTENT_TYPE_KEY = STORAGE_PREFIX + 'contentType';
        const CUSTOM_CONTENT_TYPE_KEY = STORAGE_PREFIX + 'customContentType';
        const TEMPERATURE_KEY = STORAGE_PREFIX + 'temperature';
        const THEME_KEY = STORAGE_PREFIX + 'theme';

        // --- State Variables ---
        let translatedContent = null;
        let originalFilename = '';
        let fileExtension = '';
        const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25';
        const DEFAULT_TEMPERATURE = 0.45;

        // --- Wake Lock Variable ---
        let wakeLock = null;

        // --- Helper Functions ---
        function updateStatus(message, type = 'info') {
            const timestamp = new Date().toLocaleTimeString('en-GB');
            const statusLine = document.createElement('div');
            // Adjusted dark mode colors for better contrast on near-black status panel
            let typeClass = 'text-gray-400 dark:text-dm-text-muted';
             switch (type) {
                case 'success': typeClass = 'text-green-500 dark:text-green-400'; break; // Brighter green
                case 'error': typeClass = 'text-red-500 dark:text-red-400 font-semibold'; break; // Brighter red
                case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-300'; break; // Brighter yellow
                case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; break; // Brighter blue
            }
            statusLine.className = `py-0.5 ${typeClass}`;
            statusLine.textContent = `[${timestamp}] ${message}`;
            const initialMsg = statusPanel.querySelector('div:only-child.text-gray-400, div:only-child.dark\\:text-dm-text-muted');
            if (initialMsg && initialMsg.textContent.includes('Waiting')) {
                statusPanel.innerHTML = '';
            }
            statusPanel.appendChild(statusLine);
            statusPanel.scrollTop = statusPanel.scrollHeight;
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
                updateStatus("Could not load saved settings from local storage.", "warning");
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
                themeToggleButton.classList.add('dark:bg-primary-light'); // Ensure correct dark bg
                themeToggleButton.classList.remove('text-white');
                themeToggleButton.classList.add('dark:text-black'); // Ensure correct dark text
            } else {
                htmlElement.classList.remove('dark');
                themeToggleIcon.setAttribute('data-feather', 'moon');
                themeToggleButton.classList.add('bg-primary'); // Ensure correct light bg
                themeToggleButton.classList.remove('dark:bg-primary-light');
                themeToggleButton.classList.add('text-white'); // Ensure correct light text
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
            let savedTheme = 'dark'; // Default to dark
            try {
                const storedTheme = localStorage.getItem(THEME_KEY);
                if (storedTheme === 'light') {
                    savedTheme = 'light';
                }
            } catch (e) {
                console.error("LocalStorage Error (Theme Load):", e);
                updateStatus("Could not load theme preference, defaulting to dark.", "warning");
            }
            applyTheme(savedTheme);
        }

        // --- Event Listeners ---
        document.addEventListener('DOMContentLoaded', () => {
            loadTheme();
            loadSettings();
            feather.replace();
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

        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const displayName = file.name.length > 40
                    ? `${file.name.substring(0, 18)}...${file.name.substring(file.name.length - 18)}`
                    : file.name;
                fileNameDisplay.textContent = `Selected: ${displayName} (${(file.size / 1024).toFixed(1)} KB)`;
                fileNameDisplay.classList.remove('text-gray-600', 'dark:text-dm-text-secondary');
                fileNameDisplay.classList.add('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
            } else {
                fileNameDisplay.textContent = 'No file selected';
                fileNameDisplay.classList.add('text-gray-600', 'dark:text-dm-text-secondary');
                fileNameDisplay.classList.remove('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
            }
            downloadSection.classList.add('hidden');
            translatedContent = null;
        });

        themeToggleButton.addEventListener('click', toggleTheme);

        // --- Wake Lock Functions ---
        const requestWakeLock = async () => {
            if ('wakeLock' in navigator) {
                try {
                    wakeLock = await navigator.wakeLock.request('screen');
                    updateStatus('Screen wake lock activated.', 'info');
                    wakeLock.addEventListener('release', () => {
                        if (wakeLock) {
                           updateStatus('Screen wake lock released by browser (e.g., tab hidden).', 'warning');
                           wakeLock = null;
                        }
                    });
                } catch (err) {
                    console.error(`Wake Lock Error: ${err.name}, ${err.message}`);
                    updateStatus(`Could not acquire screen wake lock: ${err.message}`, 'warning');
                    wakeLock = null;
                }
            } else {
                updateStatus('Screen Wake Lock API not supported in this browser.', 'warning');
            }
        };

        const releaseWakeLock = async () => {
            if (wakeLock !== null) {
                const tempLock = wakeLock;
                wakeLock = null;
                try {
                    await tempLock.release();
                    updateStatus('Screen wake lock released.', 'info');
                } catch (err) {
                    console.error(`Wake Lock Release Error: ${err.name}, ${err.message}`);
                }
            }
        };


        // --- Form Submission ---
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            setButtonLoading(true);
            downloadSection.classList.add('hidden');
            translatedContent = null;
            statusPanel.innerHTML = '';
            updateStatus('Starting translation process...', 'info');

            const apiKey = apiKeyInput.value.trim();
            const modelId = modelIdInput.value.trim() || DEFAULT_MODEL;
            const file = fileInput.files[0];
            let targetLanguage = targetLanguageSelect.value === 'Other' ? customTargetLanguageInput.value.trim() : targetLanguageSelect.value;
            let contentType = contentTypeSelect.value === 'Other' ? customContentTypeInput.value.trim() : contentTypeSelect.value;
            const optionalNotes = optionalNotesInput.value.trim();
            const temperature = parseFloat(temperatureInput.value) || DEFAULT_TEMPERATURE;

            let valid = true;
            if (!apiKey) { updateStatus('API Key is required.', 'error'); valid = false; }
            if (!modelId) { updateStatus('Model ID is required.', 'error'); valid = false; }
            if (!file) { updateStatus('Please select a subtitle file.', 'error'); valid = false; }
            if (!targetLanguage) { updateStatus('Target Language is required (Specify if "Other").', 'error'); valid = false; }
            if (!contentType) { updateStatus('Content Type is required (Specify if "Other").', 'error'); valid = false; }
            if (isNaN(temperature) || temperature < 0.0 || temperature > 2.0) {
                updateStatus('Invalid Temperature value. Must be between 0.0 and 2.0.', 'error');
                valid = false;
            }

            if (!valid) {
                setButtonLoading(false);
                return;
            }

            originalFilename = file.name;
            fileExtension = originalFilename.split('.').pop()?.toLowerCase();

            if (!['srt', 'ass', 'txt'].includes(fileExtension)) {
                updateStatus(`Invalid file type: .${fileExtension}. Only .srt, .ass, .txt allowed.`, 'error');
                setButtonLoading(false);
                return;
            }

            updateStatus(`Reading file: ${originalFilename}...`, 'info');

            const reader = new FileReader();
            reader.onload = async (e) => {
                const fileContent = e.target.result;
                if (!fileContent) {
                    updateStatus('Error: File content is empty or could not be read.', 'error');
                    setButtonLoading(false);
                    return;
                }

                updateStatus(`File read (${(file.size / 1024).toFixed(1)} KB). Target=${targetLanguage}, Type=${contentType}, Model=${modelId}, Temp=${temperature.toFixed(2)}.`, 'info');
                 if (optionalNotes) updateStatus(`Optional notes provided.`, 'info');
                 updateStatus(`Safety filters set to BLOCK_NONE for all categories.`, 'warning');

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
                system_prompt = system_prompt.replace(/{fileExtension}/g, fileExtension);
                system_prompt = system_prompt.replace('{optionalNotesSection}', optionalNotes ? `- Additional User Instructions:\n${optionalNotes}` : '');

                updateStatus('Preparing request for Gemini API...', 'info');

                const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`;
                const requestData = {
                    systemInstruction: {
                        parts: [{ text: system_prompt }]
                    },
                    contents: [{
                        role: 'user',
                        parts: [{ text: fileContent }]
                    }],
                    generationConfig: {
                        responseMimeType: 'text/plain',
                        temperature: temperature
                    },
                    safetySettings: [
                        { category: "HARM_CATEGORY_HARASSMENT", threshold: "BLOCK_NONE" },
                        { category: "HARM_CATEGORY_HATE_SPEECH", threshold: "BLOCK_NONE" },
                        { category: "HARM_CATEGORY_SEXUALLY_EXPLICIT", threshold: "BLOCK_NONE" },
                        { category: "HARM_CATEGORY_DANGEROUS_CONTENT", threshold: "BLOCK_NONE" }
                    ]
                };

                await requestWakeLock();
                updateStatus(`Sending request to Gemini API (${modelId})...${wakeLock ? ' (Screen kept active)' : ''}`, 'info');

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
                            errorDetails += ` - ${responseBody}`;
                        }
                        throw new Error(`API Error: ${errorDetails}`);
                    }

                    updateStatus('Response received, processing...', 'info');
                    translatedContent = null;

                    try {
                        const responseData = JSON.parse(responseBody);
                        const candidates = responseData?.candidates;
                        if (candidates && candidates.length > 0) {
                            const content = candidates[0]?.content;
                            if (content && content.parts && content.parts.length > 0) {
                                translatedContent = content.parts[0]?.text;
                            }
                        }

                        if (!translatedContent) {
                             const finishReason = candidates?.[0]?.finishReason;
                             if (finishReason && finishReason !== 'STOP') {
                                 updateStatus(`Translation stopped by API. Reason: ${finishReason}`, 'error');
                                 const safetyRatings = candidates?.[0]?.safetyRatings;
                                 if (safetyRatings) {
                                     console.warn("Safety Ratings (despite BLOCK_NONE):", safetyRatings);
                                     updateStatus(`Potential Issue Detected by API: ${JSON.stringify(safetyRatings)}`, 'warning');
                                 }
                             } else {
                                 updateStatus('Failed to extract translated text from API response structure.', 'error');
                                 console.error('Unexpected API response structure:', responseData);
                             }
                        }

                    } catch (e) {
                        updateStatus(`Error parsing API response: ${e.message}`, 'error');
                        console.error('Failed to parse JSON response:', responseBody);
                        translatedContent = null;
                    }

                    if (translatedContent && translatedContent.trim().length > 0) {
                        let looksValid = true;
                        if (fileExtension === 'srt' && !translatedContent.match(/^\d+\s*\n\d{2}:\d{2}:\d{2},\d{3} --> \d{2}:\d{2}:\d{2},\d{3}/m)) {
                            updateStatus('Warning: Translated content might not be in valid SRT format.', 'warning');
                            looksValid = false;
                        } else if (fileExtension === 'ass' && !translatedContent.includes('[Events]')) {
                            updateStatus('Warning: Translated content might not be in valid ASS format (missing [Events] block).', 'warning');
                            looksValid = false;
                        }

                        if (looksValid) {
                             updateStatus('Translation processed successfully!', 'success');
                             downloadSection.classList.remove('hidden');
                        } else {
                             updateStatus('Translation content received, but format seems incorrect. Check the result carefully.', 'warning');
                             downloadSection.classList.remove('hidden');
                        }
                    } else if (!translatedContent) {
                        // Status already updated
                    } else {
                         updateStatus('Received empty or whitespace-only translation.', 'warning');
                    }

                } catch (error) {
                    updateStatus(`Operation Failed: ${error.message}`, 'error');
                    console.error('API Request or Processing Failed:', error);
                } finally {
                    setButtonLoading(false);
                    await releaseWakeLock();
                }
            };

            reader.onerror = (e) => {
                updateStatus(`Error reading file: ${e.target.error}`, 'error');
                setButtonLoading(false);
                releaseWakeLock();
            };

            reader.readAsText(file, 'UTF-8');

        });

        // --- Download Button Click ---
        downloadButton.addEventListener('click', () => {
            if (!translatedContent || translatedContent.trim().length === 0) {
                updateStatus('No valid translated content available to download.', 'error');
                return;
            }
            const baseName = originalFilename.substring(0, originalFilename.lastIndexOf('.')) || originalFilename;
            let langCode = 'tr';
            const selectedLang = targetLanguageSelect.value;
            if (selectedLang === 'Other') {
                 langCode = customTargetLanguageInput.value.trim().substring(0, 3).toLowerCase().replace(/[^a-z]/g, '') || 'unk';
            } else {
                 const langMap = { 'Turkish': 'tr', 'English': 'en', 'Spanish': 'es', 'French': 'fr', 'German': 'de', 'Japanese': 'ja', 'Korean': 'ko', 'Chinese (Simplified)': 'zh-cn', 'Portuguese (Brazil)': 'pt-br', 'Russian': 'ru', 'Arabic': 'ar' };
                 langCode = langMap[selectedLang] || selectedLang.substring(0, 2).toLowerCase();
            }
            const outputFilename = `${baseName}_${langCode}.${fileExtension}`;

            try {
                const BOM = "\uFEFF";
                const blob = new Blob([BOM + translatedContent], { type: 'text/plain;charset=utf-8' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.style.display = 'none'; a.href = url; a.download = outputFilename;
                document.body.appendChild(a); a.click();
                window.URL.revokeObjectURL(url); document.body.removeChild(a);
                updateStatus(`File "${outputFilename}" download initiated.`, 'success');
            } catch(e) {
                 updateStatus(`Error creating download link: ${e.message}`, 'error');
                 console.error("Download Error:", e);
            }
        });

    </script>
</body>
</html>
