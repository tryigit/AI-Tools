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
    <title>AI Article Generator | Human-Like SEO Content</title>
    <meta name="description" content="Generate high-quality, human-like, SEO-optimized articles less detectable by AI checkers. Compatible with WordPress & CMS. Uses Google Gemini AI. Upload files, define topic, persona, audience, keywords for unique, rank-worthy content.">
    <meta name="keywords" content="ai article generator, seo content writer, human-like ai content, undetectable ai writer, blog post generator, cms content, wordpress content, gemini api, content creation, ai writing tool, seo optimization, tryigit">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/article" />

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Custom Configuration (True Black Theme) -->
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
                        // True Black Theme Colors
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
                        'dm-output-bg': '#0f0f0f', // Slightly different for output area contrast
                        'dm-output-border': '#2f2f2f',
                        'dm-output-text': '#d4d4d4',
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
            input[type="text"], input[type="password"], select, textarea:not(#outputArticle) { /* Exclude output area from general textarea style */
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
            textarea:not(#outputArticle) { @apply min-h-[90px] leading-relaxed; } /* Apply min-height only to non-output textareas */
            fieldset { @apply border border-gray-200 rounded-lg p-5 pt-3 dark:border-dm-border dark:bg-dm-card; }
            legend { @apply px-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary; }
            .description { @apply mt-1.5 text-xs text-gray-600 dark:text-dm-text-muted; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline dark:text-primary-light dark:hover:text-purple-400; }
            .warning { @apply text-amber-600 dark:text-yellow-400 font-medium; }
            #statusPanel::-webkit-scrollbar, #outputArticle::-webkit-scrollbar { width: 6px; }
            #statusPanel::-webkit-scrollbar-track, #outputArticle::-webkit-scrollbar-track { @apply bg-dm-status-border rounded; }
            #statusPanel::-webkit-scrollbar-thumb, #outputArticle::-webkit-scrollbar-thumb { @apply bg-gray-600 dark:bg-gray-700 rounded; }
            #statusPanel::-webkit-scrollbar-thumb:hover, #outputArticle::-webkit-scrollbar-thumb:hover { @apply bg-gray-500 dark:bg-gray-600; }
            /* Specific style for output textarea */
            #outputArticle {
                @apply w-full p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm font-sans text-sm leading-relaxed min-h-[400px]
                       dark:bg-dm-output-bg dark:border-dm-output-border dark:text-dm-output-text dark:placeholder-dm-text-muted focus:outline-none focus:ring-1 focus:ring-primary-light/50 focus:border-primary-light;
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
            .btn-secondary { @apply btn text-sm px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:ring-gray-400
                                    dark:bg-dm-input-bg dark:text-dm-text-secondary dark:hover:bg-opacity-75 dark:focus:ring-gray-500 dark:border dark:border-dm-border dark:shadow-none; } /* Dark mode for secondary button */
             @keyframes spin { to { transform: rotate(360deg); } }
             .spinner { animation: spin 1s linear infinite; @apply inline-block w-5 h-5 border-[3px] border-current border-t-transparent rounded-full; }
        }
    </style>
    <!-- AdSense Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490"
         crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100 dark:bg-dm-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <header class="text-center mb-10 md:mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-dm-text-primary">
                 AI Article Generator
             </h1>
             <p class="mt-3 text-lg text-gray-600 dark:text-dm-text-secondary max-w-2xl mx-auto">
                 Create human-like, SEO-optimized articles from your context, powered by Google Gemini.
             </p>
         </header>

        <form id="articleForm" onsubmit="return false;" class="space-y-8">

            <!-- Section 1: API & Model -->
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
                        <input type="text" id="modelId" name="modelId" placeholder="Default: gemini-2.5-pro-exp-03-25">
                        <p class="description">Using: <code class="font-medium text-primary-dark dark:text-primary-light"><span id="currentModelDisplay"></span></code> (Default cannot be changed per request)</p>
                    </div>
                 </div>
            </fieldset>

             <!-- Section 2: Core Article Details -->
            <fieldset>
                <legend>Article Definition</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                     <div>
                        <label for="articleLanguage">Article Language:</label>
                        <select id="articleLanguage" name="articleLanguage">
                              <option value="English">English</option>
                              <option value="Turkish">Turkish</option>
                              <option value="Spanish">Spanish</option>
                              <option value="French">French</option>
                              <option value="German">German</option>
                              <option value="Japanese">Japanese</option>
                              <option value="Korean">Korean</option>
                              <option value="Chinese (Simplified)">Chinese (Simplified)</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customArticleLanguage" name="customArticleLanguage" placeholder="Enter language if 'Other'" class="mt-2 hidden">
                         <p class="description">The language of the generated article. Saved locally.</p>
                    </div>
                     <div>
                        <label for="authorPersona">Author Persona:</label>
                        <select id="authorPersona" name="authorPersona">
                              <option value="Expert">Expert / Informative</option>
                              <option value="Humorous">Humorous / Witty</option>
                              <option value="Journalist">Journalistic / Objective</option>
                              <option value="Storyteller">Storyteller / Narrative</option>
                              <option value="Researcher">Researcher / Data-Driven</option>
                              <option value="Photographer">Photographer / Visual Artist</option>
                              <option value="Developer">Developer / Technical</option>
                              <option value="Marketer">Marketer / Persuasive</option>
                              <option value="Casual">Casual / Conversational</option>
                              <option value="Formal">Formal / Academic</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customAuthorPersona" name="customAuthorPersona" placeholder="Describe persona vividly if 'Other'" class="mt-2 hidden">
                         <p class="description">Crucial for tone & style. Be specific! (e.g., 'Skeptical Tech Reviewer'). Saved locally.</p>
                    </div>
                 </div>
                 <div class="mt-5">
                     <label for="articleTopic">Article Topic / Prompt:</label>
                     <textarea id="articleTopic" name="articleTopic" rows="4" required placeholder="Enter the main topic, title idea, or a detailed prompt. E.g., 'Write a human-sounding blog post for photographers about the ethics of AI image generation.'"></textarea>
                     <p class="description">Specificity matters for human-like, SEO content. Include target keywords if known.</p>
                 </div>
            </fieldset>

            <!-- Section 3: Source Material & Ownership (Optional) -->
            <fieldset>
                <legend>Source & Context (Optional)</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                         <label for="sourceFile">Upload Source File (Context):</label>
                         <label for="sourceFile" class="file-input-area group">
                             <i data-feather="file-text" class="icon"></i>
                             <span class="text-main">Click or drag & drop file</span>
                             <span class="text-sub">PDF, DOCX, XLSX, TXT supported</span>
                             <input type="file" id="sourceFile" name="sourceFile" accept=".pdf,.doc,.docx,.xls,.xlsx,.txt">
                         </label>
                         <div id="sourceFileNameDisplay" class="mt-3 text-sm font-medium text-gray-600 dark:text-dm-text-secondary text-center truncate px-2">No file selected</div>
                         <p class="description">AI will use this file's content to add unique context & perspective.</p>
                    </div>
                     <div>
                         <label for="sourceOwner">Website / Owner (Optional):</label>
                         <input type="text" id="sourceOwner" name="sourceOwner" placeholder="e.g., YourCompanyName or yourwebsite.com">
                          <p class="description">Helps AI align with a specific brand voice or link contextually. Saved locally.</p>
                     </div>
                </div>
            </fieldset>

             <!-- Section 4: SEO & Target (Unique Feature) -->
            <fieldset>
                <legend>SEO & Target Audience</legend>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5 mt-4">
                    <div>
                         <label for="targetAudience">Target Audience:</label>
                         <input type="text" id="targetAudience" name="targetAudience" placeholder="e.g., Beginner photographers, Experienced marketers">
                          <p class="description">Crucial for tailoring language and depth. Saved locally.</p>
                     </div>
                    <div>
                         <label for="primaryKeywords">Primary Keywords:</label>
                         <input type="text" id="primaryKeywords" name="primaryKeywords" placeholder="e.g., AI photo ethics, best landscape lenses">
                         <p class="description">List 1-3 main keywords/phrases (comma-separated). Saved locally.</p>
                    </div>
                     <div class="md:col-span-2">
                         <label for="callToAction">Call to Action (Optional):</label>
                         <input type="text" id="callToAction" name="callToAction" placeholder="e.g., Share your thoughts below, Check out our portfolio">
                          <p class="description">What should the reader do next? Keep it relevant. Saved locally.</p>
                     </div>
                </div>
            </fieldset>


            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" id="generateButton" class="w-full btn-primary">
                     <i data-feather="zap" class="w-5 h-5 mr-2 icon"></i>
                     <span class="button-text">Generate SEO Article</span>
                     <div class="spinner hidden ml-2"></div>
                </button>
            </div>
        </form>

        <!-- Status Panel -->
        <div class="mt-10">
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Generation Status</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-gray-900 text-gray-200 border border-gray-700 dark:bg-dm-status-bg dark:text-dm-status-text dark:border-dm-status-border font-mono text-sm shadow-inner leading-relaxed">
                <div class="text-gray-400 dark:text-dm-text-muted">Waiting for input...</div>
            </div>
        </div>

        <!-- Output Section -->
        <div id="outputSection" class="mt-10">
            <label for="outputArticle" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Generated Article</label>
            <div class="output-area mb-3">
                <textarea id="outputArticle" rows="20" readonly placeholder="The generated article will appear here..."></textarea>
            </div>
            <div class="output-actions text-center mt-4 space-x-3">
                <button type="button" class="btn-secondary" id="copyButton" disabled title="Copy article to clipboard">
                    <i data-feather="clipboard" class="w-4 h-4 mr-1.5"></i> Copy
                </button>
                <button type="button" class="btn-secondary" id="downloadButton" disabled title="Download article as .txt">
                    <i data-feather="download" class="w-4 h-4 mr-1.5"></i> Download (.txt)
                </button>
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

    <script>
        // --- START: JavaScript Code ---

        // --- Element References ---
        const form = document.getElementById('articleForm');
        const apiKeyInput = document.getElementById('apiKey');
        const toggleApiKey = document.getElementById('toggleApiKey');
        const toggleApiKeyIcon = toggleApiKey.querySelector('i');
        const modelIdInput = document.getElementById('modelId');
        const currentModelDisplay = document.getElementById('currentModelDisplay');
        const articleLanguageSelect = document.getElementById('articleLanguage');
        const customArticleLanguageInput = document.getElementById('customArticleLanguage');
        const authorPersonaSelect = document.getElementById('authorPersona');
        const customAuthorPersonaInput = document.getElementById('customAuthorPersona');
        const articleTopicInput = document.getElementById('articleTopic');
        const sourceFileInput = document.getElementById('sourceFile');
        const sourceFileNameDisplay = document.getElementById('sourceFileNameDisplay');
        const sourceOwnerInput = document.getElementById('sourceOwner');
        const targetAudienceInput = document.getElementById('targetAudience');
        const primaryKeywordsInput = document.getElementById('primaryKeywords');
        const callToActionInput = document.getElementById('callToAction');
        const generateButton = document.getElementById('generateButton');
        const submitButtonText = generateButton.querySelector('.button-text');
        const submitButtonIcon = generateButton.querySelector('i.icon');
        const submitButtonSpinner = generateButton.querySelector('.spinner');
        const statusPanel = document.getElementById('statusPanel');
        const outputArticle = document.getElementById('outputArticle');
        const outputSection = document.getElementById('outputSection');
        const copyButton = document.getElementById('copyButton');
        const downloadButton = document.getElementById('downloadButton');
        const themeToggleButton = document.getElementById('themeToggleButton'); // Theme Toggle Button
        const themeToggleIcon = themeToggleButton.querySelector('i'); // Theme Toggle Icon
        const htmlElement = document.documentElement; // HTML Element

        // --- localStorage Keys ---
        const STORAGE_PREFIX = 'aiArticleGenerator_v3_'; // Incremented version
        const API_KEY_KEY = STORAGE_PREFIX + 'apiKey';
        const MODEL_ID_KEY = STORAGE_PREFIX + 'modelId';
        const ARTICLE_LANG_KEY = STORAGE_PREFIX + 'articleLanguage';
        const CUSTOM_ARTICLE_LANG_KEY = STORAGE_PREFIX + 'customArticleLanguage';
        const PERSONA_KEY = STORAGE_PREFIX + 'authorPersona';
        const CUSTOM_PERSONA_KEY = STORAGE_PREFIX + 'customAuthorPersona';
        const SOURCE_OWNER_KEY = STORAGE_PREFIX + 'sourceOwner';
        const TARGET_AUDIENCE_KEY = STORAGE_PREFIX + 'targetAudience';
        const KEYWORDS_KEY = STORAGE_PREFIX + 'primaryKeywords';
        const CTA_KEY = STORAGE_PREFIX + 'callToAction';
        const THEME_KEY = STORAGE_PREFIX + 'theme'; // Theme Key

        // --- State Variables ---
        let generatedArticleContent = null;
        let sourceFileContent = null;
        let sourceFile = null;
        const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25';

        // --- Helper Functions ---
        function updateStatus(message, type = 'info') {
            const timestamp = new Date().toLocaleTimeString('en-GB');
            const statusLine = document.createElement('div');
            let typeClass = 'text-gray-400 dark:text-dm-text-muted';
             switch (type) {
                case 'success': typeClass = 'text-green-500 dark:text-green-400'; break;
                case 'error': typeClass = 'text-red-500 dark:text-red-400 font-semibold'; break;
                case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-300'; break;
                case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; break;
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
             generateButton.disabled = isLoading;
             if (isLoading) {
                 // Use opacity for text to avoid layout shift
                 submitButtonText.classList.add('opacity-0');
                 submitButtonIcon?.classList.add('hidden');
                 submitButtonSpinner.classList.remove('hidden');
                 generateButton.classList.add('cursor-wait');
             } else {
                 submitButtonText.classList.remove('opacity-0');
                 submitButtonIcon?.classList.remove('hidden');
                 submitButtonSpinner.classList.add('hidden');
                 generateButton.classList.remove('cursor-wait');
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
                localStorage.setItem(ARTICLE_LANG_KEY, articleLanguageSelect.value);
                localStorage.setItem(CUSTOM_ARTICLE_LANG_KEY, customArticleLanguageInput.value.trim());
                localStorage.setItem(PERSONA_KEY, authorPersonaSelect.value);
                localStorage.setItem(CUSTOM_PERSONA_KEY, customAuthorPersonaInput.value.trim());
                localStorage.setItem(SOURCE_OWNER_KEY, sourceOwnerInput.value.trim());
                localStorage.setItem(TARGET_AUDIENCE_KEY, targetAudienceInput.value.trim());
                localStorage.setItem(KEYWORDS_KEY, primaryKeywordsInput.value.trim());
                localStorage.setItem(CTA_KEY, callToActionInput.value.trim());
                updateCurrentModelDisplay();
             } catch (e) { console.error("LocalStorage Error (Save):", e); updateStatus("Could not save settings.", "warning"); }
        }

        function loadSettings() {
            try {
                apiKeyInput.value = localStorage.getItem(API_KEY_KEY) || '';
                modelIdInput.value = localStorage.getItem(MODEL_ID_KEY) || DEFAULT_MODEL;

                const savedLang = localStorage.getItem(ARTICLE_LANG_KEY);
                if (savedLang) articleLanguageSelect.value = savedLang;
                customArticleLanguageInput.value = localStorage.getItem(CUSTOM_ARTICLE_LANG_KEY) || '';
                toggleCustomInput(articleLanguageSelect, customArticleLanguageInput);

                const savedPersona = localStorage.getItem(PERSONA_KEY);
                if (savedPersona) authorPersonaSelect.value = savedPersona;
                customAuthorPersonaInput.value = localStorage.getItem(CUSTOM_PERSONA_KEY) || '';
                toggleCustomInput(authorPersonaSelect, customAuthorPersonaInput);

                sourceOwnerInput.value = localStorage.getItem(SOURCE_OWNER_KEY) || '';
                targetAudienceInput.value = localStorage.getItem(TARGET_AUDIENCE_KEY) || '';
                primaryKeywordsInput.value = localStorage.getItem(KEYWORDS_KEY) || '';
                callToActionInput.value = localStorage.getItem(CTA_KEY) || '';

                 updateCurrentModelDisplay();
            } catch (e) { console.error("LocalStorage Error (Load):", e); updateStatus("Could not load settings.", "warning"); }
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

        // --- File Reading Logic ---
        function readFileContent(file) {
            return new Promise((resolve, reject) => {
                if (!file) { resolve(null); return; }
                const reader = new FileReader();
                reader.onload = (e) => { resolve(e.target.result); };
                reader.onerror = (e) => { console.error("File Reading Error:", e); reject(new Error(`Error reading file: ${file.name}`)); };
                 reader.readAsText(file, 'UTF-8');
            });
        }

        // --- Event Listeners ---
        document.addEventListener('DOMContentLoaded', () => {
            loadTheme(); // Load theme first
            loadSettings();
            feather.replace(); // Initial icon render
        });

        // Save settings on change
        apiKeyInput.addEventListener('change', saveSettings); modelIdInput.addEventListener('change', saveSettings); articleLanguageSelect.addEventListener('change', () => { toggleCustomInput(articleLanguageSelect, customArticleLanguageInput); saveSettings(); }); customArticleLanguageInput.addEventListener('change', saveSettings); authorPersonaSelect.addEventListener('change', () => { toggleCustomInput(authorPersonaSelect, customAuthorPersonaInput); saveSettings(); }); customAuthorPersonaInput.addEventListener('change', saveSettings); sourceOwnerInput.addEventListener('change', saveSettings); targetAudienceInput.addEventListener('change', saveSettings); primaryKeywordsInput.addEventListener('change', saveSettings); callToActionInput.addEventListener('change', saveSettings);

        // Toggle API Key visibility
        toggleApiKey.addEventListener('click', () => { const type = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password'; apiKeyInput.setAttribute('type', type); toggleApiKeyIcon.setAttribute('data-feather', type === 'password' ? 'eye' : 'eye-off'); feather.replace(); });

        // File Input Change Handler
        sourceFileInput.addEventListener('change', (event) => {
             sourceFile = event.target.files[0];
             if (sourceFile) {
                 const displayName = sourceFile.name.length > 40 ? sourceFile.name.substring(0, 15) + '...' + sourceFile.name.substring(sourceFile.name.length - 15) : sourceFile.name;
                 sourceFileNameDisplay.textContent = `Selected: ${displayName}`;
                 sourceFileNameDisplay.classList.remove('text-gray-600', 'dark:text-dm-text-secondary');
                 sourceFileNameDisplay.classList.add('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
             } else {
                 sourceFileNameDisplay.textContent = 'No file selected';
                 sourceFileNameDisplay.classList.add('text-gray-600', 'dark:text-dm-text-secondary');
                 sourceFileNameDisplay.classList.remove('text-primary-dark', 'dark:text-primary-light', 'font-semibold');
                 sourceFileContent = null;
                 sourceFile = null;
             }
         });

        // Theme Toggle Listener
        themeToggleButton.addEventListener('click', toggleTheme);

        // --- Form Submission ---
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            setButtonLoading(true);
            generatedArticleContent = null;
            outputArticle.value = '';
            copyButton.disabled = true;
            downloadButton.disabled = true;
            // Reset copy button state
            copyButton.classList.remove('bg-green-500', 'hover:bg-green-600', 'focus:ring-green-500', 'text-white', 'dark:bg-green-600', 'dark:text-white');
            copyButton.classList.add('text-gray-700', 'hover:bg-gray-300', 'dark:text-dm-text-secondary', 'dark:hover:bg-opacity-75'); // Restore original styles including dark
            copyButton.innerHTML = '<i data-feather="clipboard" class="w-4 h-4 mr-1.5"></i> Copy';
            feather.replace();
            statusPanel.innerHTML = '';

            // Get input values
            const apiKey = apiKeyInput.value.trim();
            const modelId = modelIdInput.value.trim() || DEFAULT_MODEL;
            const articleTopic = articleTopicInput.value.trim();
            let articleLanguage = articleLanguageSelect.value === 'Other' ? customArticleLanguageInput.value.trim() : articleLanguageSelect.value;
            let authorPersonaValue = authorPersonaSelect.value;
            let authorPersonaText = authorPersonaValue === 'Other'
                ? customAuthorPersonaInput.value.trim()
                : authorPersonaSelect.options[authorPersonaSelect.selectedIndex].text;
            const sourceOwner = sourceOwnerInput.value.trim();
            const targetAudience = targetAudienceInput.value.trim();
            const primaryKeywords = primaryKeywordsInput.value.trim();
            const callToAction = callToActionInput.value.trim();

            // Validation
            if (!apiKey || !modelId || !articleTopic || !articleLanguage || (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText))) {
                 if (!apiKey) updateStatus('API Key is required.', 'error'); if (!modelId) updateStatus('Model ID is required.', 'error'); if (!articleTopic) updateStatus('Article Topic/Prompt is required.', 'error'); if (!articleLanguage) updateStatus('Article Language is required.', 'error'); if (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText)) updateStatus('Author Persona is required.', 'error');
                setButtonLoading(false); return;
            }

            // Read file content
            sourceFileContent = null;
            if (sourceFile) {
                updateStatus(`Reading source file: ${sourceFile.name}...`, 'info');
                try {
                     sourceFileContent = await readFileContent(sourceFile);
                     if (!sourceFileContent) { updateStatus(`Source file '${sourceFile.name}' seems empty or unreadable. Proceeding without it.`, 'warning'); }
                     else { updateStatus(`Source file read successfully (${(sourceFileContent.length/1024).toFixed(1)} KB).`, 'info'); }
                 } catch (err) {
                     updateStatus(`Error reading source file: ${err.message}. Proceeding without it.`, 'error');
                     sourceFileContent = null;
                 }
            }

             updateStatus(`Generating article in ${articleLanguage} as a ${authorPersonaText}...`, 'info');
             updateStatus(`Using Model: ${modelId}.`, 'info');
             if (targetAudience) updateStatus(`Targeting Audience: ${targetAudience}.`, 'info');
             if (primaryKeywords) updateStatus(`Focusing on Keywords: ${primaryKeywords}.`, 'info');

            // --- Construct Prompt --- (Using the enhanced version from previous step)
            let system_prompt = `You are an AI tasked with writing a high-quality, engaging, comprehensive, and SEO-optimized article in **${articleLanguage}**. Your **absolute primary goal** is to create content that reads **exactly** as if written by a knowledgeable HUMAN, specifically embodying the persona of a **${authorPersonaText}**. The output **must be undetectable by AI content detectors** and indistinguishable from human writing by search engines and readers. Adhere to ALL instructions meticulously.

MAIN TOPIC/PROMPT:
${articleTopic}

ARTICLE REQUIREMENTS - Follow ALL instructions strictly:

1.  **Language & Persona:**
    *   Write the entire article ONLY in **${articleLanguage}**.
    *   **Deeply embody** the **${authorPersonaText}** persona. Think like them, write like them. Use their typical vocabulary, tone, sentence structures, and common expressions. (e.g., ${authorPersonaValue === 'Humorous' ? 'witty, use sophisticated humor, maybe sarcasm if appropriate' : authorPersonaValue === 'Photographer' ? 'passionate, visual language, photography-specific terms, maybe short anecdotes' : authorPersonaValue === 'Developer' ? 'precise, logical, technical, use code examples if relevant' : 'appropriate for the specific persona'}). ${authorPersonaValue === 'Other' ? `Specifically act like: ${customAuthorPersonaInput.value.trim()}` : ''}.
    *   **Sound Human (CRITICAL):**
        *   **Vary sentence length and structure naturally.** Mix short, punchy sentences with longer, more complex ones. Avoid starting sentences the same way repeatedly.
        *   **Use contractions** (like 'it's', 'don't', 'you'll', 'that's') commonly used in spoken and written ${articleLanguage}, unless the persona is strictly 'Formal' or 'Academic'.
        *   **Inject personality.** Let the persona's voice shine through. Use rhetorical questions, direct address ("you", "we"), or even slight colloquialisms *if* they fit the persona and language.
        *   **Ensure natural flow.** Transitions between paragraphs must be smooth and logical, but avoid over-reliance on obvious transition words ('Moreover', 'Furthermore', 'In addition', 'However', 'In conclusion'). Use them sparingly and vary them. Sometimes a paragraph break implies the transition.
        *   **Avoid robotic perfection.** While grammar and spelling should be correct, the overall feel should be natural, not stiff or overly polished like a machine wrote it. Introduce slight variations in phrasing.

2.  **SEO & Structure (for Ranking):**
    *   **Keywords:** Naturally and semantically integrate the primary keywords/phrases: **${primaryKeywords || 'Not specified'}**. Focus on topic relevance and user intent. **DO NOT STUFF KEYWORDS.** Weave them in where they make sense contextually. Use synonyms and related terms (LSI).
    *   **Title:** Generate a compelling, natural-sounding, SEO-friendly title (unless a specific title is given in the prompt). It should promise value and ideally incorporate a keyword naturally.
    *   **Headings:** Use clear, logical H2 and H3 headings (and maybe H4 if needed for depth) to structure the content. Headings should be engaging and reflect potential user search queries related to the section's content.
    *   **Readability:** Write concise paragraphs (generally 3-5 sentences). Use bullet points or numbered lists *only* when it significantly improves clarity for lists of items or steps. Use **bold** text very sparingly for true emphasis on critical terms or takeaways.
    *   **Content Quality:** The article must be well-researched (based on your internal knowledge and any provided context), informative, accurate, and offer a unique perspective or deeper insights beyond generic summaries. Aim for comprehensiveness appropriate for the target audience. Add value.

3.  **Target Audience:**
    *   Tailor the language, examples, depth, and complexity specifically for: **${targetAudience || 'a general audience'}**. Write as if you are having a conversation with someone from this group. Anticipate their questions and level of understanding.

4.  **Context Integration (If Provided):**
    *   **Source File:** ${sourceFileContent ? `**Crucially, use the following text from the user-uploaded file** as foundational context, specific examples, data points, or unique perspectives. Integrate this information **smoothly and naturally** into the article's flow. Do not just list or quote it directly unless essential. Synthesize it. Build upon it significantly.\n\`\`\`\n${sourceFileContent.substring(0, 6000) + (sourceFileContent.length > 6000 ? '...' : '')}\n\`\`\`\n` : 'No external file provided. Rely solely on your general knowledge and the prompt details.'}
    *   **Source Owner/Website:** ${sourceOwner ? `Subtly align the perspective, tone, or examples with the identity of **${sourceOwner}** where relevant and natural. Avoid overt promotion unless the persona is explicitly 'Marketer'. The connection should feel organic.` : 'No specific source owner/website context provided.'}

5.  **Call to Action (If Provided):**
    *   ${callToAction ? `Naturally weave in or conclude with a relevant and non-generic call to action: "${callToAction}". Make it fit the article's flow and tone.` : 'No specific call to action requested.'}

6.  **ABSOLUTELY AVOID COMMON AI TELLS (ESSENTIAL FOR UNDETECTABILITY):**
    *   **Do NOT sound like a generic AI assistant, language model, or chatbot.** BE THE PERSONA.
    *   **Do NOT use overly complex or academic vocabulary** unless the persona (e.g., Researcher, Formal) specifically requires it. Prefer clear, common language.
    *   **Do NOT overuse transition words** unnaturally (especially 'Moreover', 'Furthermore', 'In conclusion', 'Additionally', 'However'). Find more organic ways to connect ideas.
    *   **Do NOT write overly "perfect", sanitized, or bland text.** Allow for a natural, slightly imperfect human voice.
    *   **Do NOT output generic lists** unless they are essential and well-integrated into the surrounding text. Avoid "listicles" unless the topic demands it.
    *   **Do NOT include any preambles, apologies, self-corrections, summaries *about* the article you just wrote, or notes to the user.**
    *   **Do NOT use markdown code fences (\`\`\`)** around the final article content or any part of it.
    *   **Do NOT use repetitive sentence structures or phrasing.** Introduce variety.
    *   **Do NOT hedge excessively** (e.g., "it may be possible that," "some might suggest"). Be reasonably confident where appropriate for the persona.

7.  **Output Format:** Generate ONLY the complete article content, starting directly with the title (if you generate one) or the first paragraph if a title was in the prompt. Ensure clean formatting suitable for direct pasting into a CMS like WordPress (standard paragraphs, headings). **No extra text before or after the article.**`;

            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`;
            const requestData = {
                 contents: [{ role: 'user', parts: [{ text: "Generate the article based *strictly* on the detailed system instructions provided, focusing intensely on sounding human and avoiding AI detection." }] }],
                 systemInstruction: { parts: [{ text: system_prompt }] },
                 generationConfig: { /* Optional: temperature, topK, topP */ }
            };

            updateStatus('Sending request to Gemini API... Focusing on human-like generation.', 'info');
             try {
                 const response = await fetch(apiUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(requestData), });
                 const responseBody = await response.text();

                 if (!response.ok) {
                     let eM = `API Error (${modelId}/${response.status}): ${response.statusText}`; let eD = '';
                     try { const eJ = JSON.parse(responseBody); eD = eJ.error?.message || JSON.stringify(eJ.error); console.error("API Error JSON:", eJ);
                         if (eJ.error?.message?.toLowerCase().includes("api key not valid")) throw new Error("API Key invalid/unauthorized. Please check your key.");
                         if (eJ.error?.code === 404 || eJ.error?.message?.toLowerCase().includes("model") && eJ.error?.message?.toLowerCase().includes("not found")) throw new Error(`Model '${modelId}' not found or access denied. Check the Model ID.`);
                         if (eJ.error?.code === 429) throw new Error("API Quota exceeded or rate limit reached.");
                         if (eJ.error?.code >= 500) throw new Error("Google API server error.");
                     } catch (pE) {
                         if (pE instanceof Error && (pE.message.includes("API Key invalid") || pE.message.includes("Model") ) ) { throw pE; }
                         else { eD = responseBody.substring(0, 300) + '...'; }
                     }
                     throw new Error(`${eM} - ${eD}`);
                 }

                 updateStatus('Response received, processing article...', 'info');
                 generatedArticleContent = null;

                 try {
                     const result = JSON.parse(responseBody);
                     const candidate = result.candidates?.[0];
                     const blockReason = result.promptFeedback?.blockReason;
                     const safetyRatings = candidate?.safetyRatings || result.promptFeedback?.safetyRatings;

                     if (blockReason) {
                         throw new Error(`Request blocked: ${blockReason}. ${safetyRatings ? `Details: ${JSON.stringify(safetyRatings)}` : ''}. Try revising the prompt or checking safety settings if applicable.`);
                     }

                     if (candidate?.content?.parts?.[0]?.text) {
                         generatedArticleContent = candidate.content.parts[0].text;
                         if (candidate.finishReason === 'STOP') {
                             updateStatus('Article generation completed successfully.', 'success');
                         } else if (candidate.finishReason === 'MAX_TOKENS') {
                             updateStatus(`Article generation stopped due to MAX_TOKENS limit. Output may be incomplete.`, 'warning');
                             generatedArticleContent += `\n\n[SYSTEM WARNING: Output truncated due to maximum token limit.]`;
                         } else if (candidate.finishReason === 'SAFETY') {
                              updateStatus(`Article generation stopped due to SAFETY concerns. Output may be incomplete or empty. Details: ${JSON.stringify(safetyRatings || 'No specific rating details')}`, 'error');
                              if (!generatedArticleContent?.trim()) generatedArticleContent = `[Content Blocked due to Safety Concerns: ${blockReason || 'Reason unspecified'}]`;
                         }
                          else {
                            updateStatus(`Generation finished with reason: ${candidate.finishReason}. ${safetyRatings ? `Safety: ${JSON.stringify(safetyRatings)}` : ''}`, 'warning');
                            if (!generatedArticleContent?.trim()) {
                                throw new Error(`Generation finished with reason ${candidate.finishReason} but no content was returned.`);
                            }
                         }
                     } else {
                         console.error("API Response Structure Problem:", result);
                         throw new Error('API returned a successful response, but no valid text content was found in the expected structure.');
                     }
                 } catch (e) {
                     if (e instanceof SyntaxError) {
                         updateStatus('API response was not valid JSON. Trying to use as plain text.', 'warning');
                         if (responseBody?.trim()) {
                             generatedArticleContent = responseBody;
                             updateStatus('Used plain text response. Content might be malformed.', 'warning');
                         } else {
                             throw new Error(`Non-JSON response was empty.`);
                         }
                     } else {
                         throw e;
                     }
                 }

                 if (generatedArticleContent?.trim()) {
                     outputArticle.value = generatedArticleContent.trim();
                     copyButton.disabled = false; downloadButton.disabled = false;
                     feather.replace();
                 } else {
                    updateStatus('Failed to generate valid article content after processing.', 'error');
                    outputArticle.value = outputArticle.value || "Could not generate article. Check status panel for details.";
                 }

            } catch (error) {
                updateStatus(`Error: ${error.message}`, 'error');
                console.error('Operation Failed:', error);
                outputArticle.value = `Error generating article. Details:\n${error.message}`;
            }
            finally {
                setButtonLoading(false);
            }
        });

        // --- Copy/Download Functions ---
        function copyOutput() {
            if (!outputArticle.value) return;
            navigator.clipboard.writeText(outputArticle.value)
                .then(() => {
                    copyButton.innerHTML = '<i data-feather="check" class="w-4 h-4 mr-1.5"></i> Copied!';
                    // Apply success styles for both light and dark mode
                    copyButton.classList.remove('text-gray-700', 'hover:bg-gray-300', 'dark:text-dm-text-secondary', 'dark:hover:bg-opacity-75');
                    copyButton.classList.add('bg-green-500', 'text-white', 'hover:bg-green-600', 'focus:ring-green-500', 'dark:bg-green-600', 'dark:text-white');
                    feather.replace();
                    setTimeout(() => {
                        copyButton.innerHTML = '<i data-feather="clipboard" class="w-4 h-4 mr-1.5"></i> Copy';
                        // Restore original styles for both light and dark mode
                        copyButton.classList.remove('bg-green-500', 'text-white', 'hover:bg-green-600', 'focus:ring-green-500', 'dark:bg-green-600', 'dark:text-white');
                        copyButton.classList.add('text-gray-700', 'hover:bg-gray-300', 'dark:text-dm-text-secondary', 'dark:hover:bg-opacity-75');
                        feather.replace();
                    }, 2000);
                })
                .catch(err => { console.error('Copy failed: ', err); updateStatus('Could not copy article to clipboard.', 'error'); });
        }

        function downloadOutput() {
            if (!outputArticle.value) return;
            const textToSave = outputArticle.value;
            const blob = new Blob([textToSave], { type: 'text/plain;charset=utf-8' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a'); link.href = url;
            const filenameBase = articleTopicInput.value.trim().toLowerCase()
                                    .replace(/[^a-z0-9\s-]/g, '')
                                    .replace(/\s+/g, '-')
                                    .substring(0, 50) || 'ai-seo-article';
            const timestamp = new Date().toISOString().slice(0, 10);
            link.download = `${filenameBase}_${timestamp}.txt`;
            link.style.display = 'none'; document.body.appendChild(link); link.click(); document.body.removeChild(link); window.URL.revokeObjectURL(url);
            updateStatus(`File "${link.download}" download initiated.`, 'success');
        }

        copyButton.addEventListener('click', copyOutput);
        downloadButton.addEventListener('click', downloadOutput);

        // --- END: JavaScript Code ---
    </script>
</body>
</html>
