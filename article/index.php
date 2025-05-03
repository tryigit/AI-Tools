<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>AI Article Generator | Human-Like SEO Content</title> <!-- Title updated -->
    <meta name="description" content="Generate high-quality, human-like, SEO-optimized articles less detectable by AI checkers. Compatible with WordPress & CMS. Uses Google Gemini AI. Upload files, define topic, persona, audience, keywords for unique, rank-worthy content."> <!-- Description updated -->
    <meta name="keywords" content="ai article generator, seo content writer, human-like ai content, undetectable ai writer, blog post generator, cms content, wordpress content, gemini api, gemini-2.5-pro, content creation, ai writing tool, seo optimization, tryigit"> <!-- Keywords updated -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/article" /> <!-- Update if URL changes -->

    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Custom Configuration (Consistent with Translator) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
                    },
                    colors: {
                        primary: { light: '#7c3aed', DEFAULT: '#6d28d9', dark: '#5b21b6' },
                        secondary: { light: '#2dd4bf', DEFAULT: '#14b8a6', dark: '#0d9488' },
                        'status-bg': '#111827', 'status-text': '#e5e7eb', 'status-border': '#374151',
                    },
                    boxShadow: {
                        'input-focus': '0 0 0 3px rgba(109, 40, 217, 0.3)',
                        'btn': '0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1)',
                        'btn-hover': '0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1)',
                    }
                },
            }
        }
    </script>

    <style type="text/tailwindcss">
        /* Base and Component styles (Consistent with Translator) */
        @layer base {
            body { @apply bg-gray-100 font-sans antialiased; }
            label { @apply block mb-1.5 text-sm font-semibold text-gray-700; }
            input[type="text"], input[type="password"], select, textarea {
                @apply block w-full px-4 py-2.5 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition duration-150 ease-in-out sm:text-sm;
            }
             select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                 background-position: right 0.7rem center; background-repeat: no-repeat; background-size: 1.25em 1.25em;
                 -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 2.8rem;
             }
            textarea { @apply min-h-[90px] leading-relaxed; }
            fieldset { @apply border border-gray-200 rounded-lg p-5 pt-3; }
            legend { @apply px-2 text-base font-semibold text-gray-800; }
            .description { @apply mt-1.5 text-xs text-gray-600; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline; }
            .warning { @apply text-amber-600 font-medium; }
            #statusPanel::-webkit-scrollbar { width: 6px; }
            #statusPanel::-webkit-scrollbar-track { @apply bg-status-border rounded; }
            #statusPanel::-webkit-scrollbar-thumb { @apply bg-gray-500 rounded; }
            #statusPanel::-webkit-scrollbar-thumb:hover { @apply bg-gray-400; }
        }
        @layer components {
            .file-input-area { @apply relative block w-full p-6 text-center border-2 border-gray-300 border-dashed rounded-xl cursor-pointer bg-gray-50 hover:bg-gray-100 hover:border-primary/70 transition-colors duration-200 ease-in-out; }
            .file-input-area .icon { @apply w-10 h-10 mx-auto text-gray-400 group-hover:text-primary/80 transition-colors; }
            .file-input-area .text-main { @apply mt-2 block text-sm font-semibold text-gray-700; }
            .file-input-area .text-sub { @apply block text-xs text-gray-500; }
            .file-input-area input[type="file"] { @apply absolute inset-0 w-full h-full opacity-0 cursor-pointer; }
            .btn { @apply inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-btn focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out disabled:opacity-60 disabled:cursor-not-allowed; }
            .btn-primary { @apply btn text-white bg-primary hover:bg-primary-dark focus:ring-primary; }
            .btn-secondary { @apply btn text-sm px-4 py-2 bg-gray-200 text-gray-700 hover:bg-gray-300 focus:ring-gray-400; }
             @keyframes spin { to { transform: rotate(360deg); } }
             .spinner { animation: spin 1s linear infinite; @apply inline-block w-5 h-5 border-[3px] border-current border-t-transparent rounded-full; }
        }
    </style>
    <!-- AdSense Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490"
         crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <header class="text-center mb-10 md:mb-12">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900">
                 AI Article Generator
             </h1>
             <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
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
                        <div class="flex rounded-lg shadow-sm">
                             <input type="password" id="apiKey" name="apiKey" required placeholder="Enter your Google AI Studio key" class="flex-1 min-w-0 rounded-none rounded-l-lg focus:z-10">
                             <button type="button" id="toggleApiKey" title="Show/Hide Key" class="inline-flex items-center px-3 py-2 text-gray-500 bg-gray-50 border border-l-0 border-gray-300 rounded-r-lg hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary">
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
                        <!-- DİKKAT: Varsayılan değer isteğiniz üzerine 'gemini-2.5-pro-exp-03-25' olarak bırakıldı -->
                        <input type="text" id="modelId" name="modelId" placeholder="Default: gemini-2.5-pro-exp-03-25">
                        <p class="description">Using: <code class="font-medium text-primary-dark"><span id="currentModelDisplay"></span></code> (Default cannot be changed per request)</p> <!-- Added note -->
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
                              <!-- Add more languages as needed -->
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
                              <option value="Photographer">Photographer / Visual Artist</option> <!-- Example Added -->
                              <option value="Developer">Developer / Technical</option> <!-- Example Added -->
                              <option value="Marketer">Marketer / Persuasive</option>
                              <option value="Casual">Casual / Conversational</option>
                              <option value="Formal">Formal / Academic</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customAuthorPersona" name="customAuthorPersona" placeholder="Describe persona vividly if 'Other'" class="mt-2 hidden">
                         <p class="description">Crucial for tone & style. Be specific! (e.g., 'Skeptical Tech Reviewer'). Saved locally.</p> <!-- Description updated -->
                    </div>
                 </div>
                 <div class="mt-5">
                     <label for="articleTopic">Article Topic / Prompt:</label>
                     <textarea id="articleTopic" name="articleTopic" rows="4" required placeholder="Enter the main topic, title idea, or a detailed prompt. E.g., 'Write a human-sounding blog post for photographers about the ethics of AI image generation.'"></textarea> <!-- Placeholder updated -->
                     <p class="description">Specificity matters for human-like, SEO content. Include target keywords if known.</p> <!-- Description updated -->
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
                             <span class="text-sub">PDF, DOCX, XLSX, TXT supported</span> <!-- DİKKAT: Dosya türleri orijinaldeki gibi bırakıldı -->
                             <input type="file" id="sourceFile" name="sourceFile" accept=".pdf,.doc,.docx,.xls,.xlsx,.txt">
                         </label>
                         <div id="sourceFileNameDisplay" class="mt-3 text-sm font-medium text-gray-600 text-center truncate px-2">No file selected</div>
                         <p class="description">AI will use this file's content to add unique context & perspective.</p> <!-- Description updated -->
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
                          <p class="description">Crucial for tailoring language and depth. Saved locally.</p> <!-- Description updated -->
                     </div>
                    <div>
                         <label for="primaryKeywords">Primary Keywords:</label>
                         <input type="text" id="primaryKeywords" name="primaryKeywords" placeholder="e.g., AI photo ethics, best landscape lenses">
                         <p class="description">List 1-3 main keywords/phrases (comma-separated). Saved locally.</p>
                    </div>
                     <div class="md:col-span-2">
                         <label for="callToAction">Call to Action (Optional):</label>
                         <input type="text" id="callToAction" name="callToAction" placeholder="e.g., Share your thoughts below, Check out our portfolio">
                          <p class="description">What should the reader do next? Keep it relevant. Saved locally.</p> <!-- Description updated -->
                     </div>
                </div>
            </fieldset>


            <!-- Submit Button -->
            <div class="pt-2">
                <button type="submit" id="generateButton" class="w-full btn-primary">
                     <i data-feather="zap" class="w-5 h-5 mr-2 icon"></i> <!-- Changed icon to Zap for 'generation' feel -->
                     <span class="button-text">Generate SEO Article</span> <!-- Text updated -->
                     <div class="spinner hidden ml-2"></div>
                </button>
            </div>
        </form>

        <!-- Status Panel -->
        <div class="mt-10">
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800">Generation Status</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-status-bg text-status-text border border-status-border font-mono text-sm shadow-inner leading-relaxed">
                <div class="text-gray-400">Waiting for input...</div>
            </div>
        </div>

        <!-- Output Section -->
        <div id="outputSection" class="mt-10">
            <label for="outputArticle" class="block mb-2 text-base font-semibold text-gray-800">Generated Article</label>
            <div class="output-area mb-3">
                <textarea id="outputArticle" rows="20" readonly placeholder="The generated article will appear here..." class="w-full p-4 bg-gray-50 border border-gray-300 rounded-lg shadow-sm font-sans text-sm leading-relaxed min-h-[400px]"></textarea> <!-- Increased min-height -->
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

         <footer class="mt-10 pt-6 border-t border-gray-200 text-center text-xs text-gray-500">
             API key, settings, and file content are processed locally in your browser and sent directly to the Google API. No data is stored on our servers. Tool by Yiğit.
         </footer>

    </div>

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
        const sourceFileInput = document.getElementById('sourceFile'); // File input
        const sourceFileNameDisplay = document.getElementById('sourceFileNameDisplay'); // File name display
        const sourceOwnerInput = document.getElementById('sourceOwner');
        const targetAudienceInput = document.getElementById('targetAudience');
        const primaryKeywordsInput = document.getElementById('primaryKeywords');
        const callToActionInput = document.getElementById('callToAction');
        const generateButton = document.getElementById('generateButton'); // Correct button ID
        const submitButtonText = generateButton.querySelector('.button-text');
        const submitButtonIcon = generateButton.querySelector('i.icon');
        const submitButtonSpinner = generateButton.querySelector('.spinner');
        const statusPanel = document.getElementById('statusPanel');
        const outputArticle = document.getElementById('outputArticle'); // Output textarea
        const outputSection = document.getElementById('outputSection'); // To potentially hide/show
        const copyButton = document.getElementById('copyButton');
        const downloadButton = document.getElementById('downloadButton');

        // --- localStorage Keys ---
        const STORAGE_PREFIX = 'aiArticleGenerator_v2_'; // Updated prefix for potential storage changes
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

        // --- State Variables ---
        let generatedArticleContent = null;
        let sourceFileContent = null; // To store read file content
        let sourceFile = null; // To store the File object
        // DİKKAT: Varsayılan model isteğiniz üzerine değiştirilmedi.
        const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25';

        // --- Helper Functions (Similar to Translator) ---
        function updateStatus(message, type = 'info') {
             const timestamp = new Date().toLocaleTimeString('en-GB'); const statusLine = document.createElement('div'); let typeClass = 'text-gray-400';
             switch (type) { case 'success': typeClass = 'text-green-400'; break; case 'error': typeClass = 'text-red-400 font-semibold'; break; case 'warning': typeClass = 'text-yellow-400'; break; case 'info': typeClass = 'text-blue-400'; break; }
             statusLine.className = `py-0.5 ${typeClass}`; statusLine.textContent = `[${timestamp}] ${message}`;
             const initialMsg = statusPanel.querySelector('div:only-child.text-gray-400'); if (initialMsg && initialMsg.textContent.includes('Waiting')) { statusPanel.innerHTML = ''; }
             statusPanel.appendChild(statusLine); statusPanel.scrollTop = statusPanel.scrollHeight; }
        function setButtonLoading(isLoading) {
             generateButton.disabled = isLoading;
             if (isLoading) { submitButtonText.classList.add('opacity-0'); submitButtonIcon?.classList.add('hidden'); submitButtonSpinner.classList.remove('hidden'); generateButton.classList.add('cursor-wait'); }
             else { submitButtonText.classList.remove('opacity-0'); submitButtonIcon?.classList.remove('hidden'); submitButtonSpinner.classList.add('hidden'); generateButton.classList.remove('cursor-wait'); } }
        function toggleCustomInput(selectElement, inputElement) {
             if (selectElement.value === 'Other') { inputElement.classList.remove('hidden'); inputElement.required = true; }
             else { inputElement.classList.add('hidden'); inputElement.required = false; inputElement.value = ''; } }

        // --- Settings Management (localStorage) ---
        function saveSettings() {
             try {
                localStorage.setItem(API_KEY_KEY, apiKeyInput.value.trim());
                localStorage.setItem(MODEL_ID_KEY, modelIdInput.value.trim() || DEFAULT_MODEL); // Keep default logic
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
                // DİKKAT: Varsayılan model yükleme mantığı korunuyor.
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

        // --- File Reading Logic ---
        function readFileContent(file) {
            return new Promise((resolve, reject) => {
                if (!file) { resolve(null); return; } // No file, resolve with null

                const reader = new FileReader();
                reader.onload = (e) => {
                    resolve(e.target.result);
                };
                reader.onerror = (e) => {
                     console.error("File Reading Error:", e);
                     reject(new Error(`Error reading file: ${file.name}`));
                };
                 // Keep reading as text, let AI handle structure.
                 reader.readAsText(file, 'UTF-8');
            });
        }

        // --- Event Listeners ---
        document.addEventListener('DOMContentLoaded', () => { loadSettings(); feather.replace(); });
        // Save settings on change/blur
        apiKeyInput.addEventListener('change', saveSettings); modelIdInput.addEventListener('change', saveSettings); articleLanguageSelect.addEventListener('change', () => { toggleCustomInput(articleLanguageSelect, customArticleLanguageInput); saveSettings(); }); customArticleLanguageInput.addEventListener('change', saveSettings); authorPersonaSelect.addEventListener('change', () => { toggleCustomInput(authorPersonaSelect, customAuthorPersonaInput); saveSettings(); }); customAuthorPersonaInput.addEventListener('change', saveSettings); sourceOwnerInput.addEventListener('change', saveSettings); targetAudienceInput.addEventListener('change', saveSettings); primaryKeywordsInput.addEventListener('change', saveSettings); callToActionInput.addEventListener('change', saveSettings);
        // Toggle API Key
        toggleApiKey.addEventListener('click', () => { const type = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password'; apiKeyInput.setAttribute('type', type); toggleApiKeyIcon.setAttribute('data-feather', type === 'password' ? 'eye' : 'eye-off'); feather.replace(); });
        // File Input Change
        sourceFileInput.addEventListener('change', (event) => {
             sourceFile = event.target.files[0]; // Store the file object
             if (sourceFile) {
                 const displayName = sourceFile.name.length > 40 ? sourceFile.name.substring(0, 15) + '...' + sourceFile.name.substring(sourceFile.name.length - 15) : sourceFile.name;
                 sourceFileNameDisplay.textContent = `Selected: ${displayName}`;
                 sourceFileNameDisplay.classList.remove('text-gray-600'); sourceFileNameDisplay.classList.add('text-primary-dark', 'font-semibold');
             } else {
                 sourceFileNameDisplay.textContent = 'No file selected'; sourceFileNameDisplay.classList.add('text-gray-600'); sourceFileNameDisplay.classList.remove('text-primary-dark', 'font-semibold');
                 sourceFileContent = null; // Clear content if file is deselected
                 sourceFile = null; // Clear file object
             }
         });

        // --- Form Submission ---
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            setButtonLoading(true);
            generatedArticleContent = null;
            outputArticle.value = ''; // Clear output area
            copyButton.disabled = true;
            downloadButton.disabled = true;
            // Reset copy button state immediately
            copyButton.classList.remove('bg-green-500', 'hover:bg-green-600', 'focus:ring-green-500', 'text-white'); // Reset styles
            copyButton.classList.add('text-gray-700', 'hover:bg-gray-300'); // Restore original text color
            copyButton.innerHTML = '<i data-feather="clipboard" class="w-4 h-4 mr-1.5"></i> Copy';
            feather.replace(); // Ensure icon is rendered correctly after reset
            statusPanel.innerHTML = ''; // Clear status

            // Get input values
            const apiKey = apiKeyInput.value.trim();
            // DİKKAT: Model ID, kullanıcı girdisi veya varsayılan olarak alınır.
            const modelId = modelIdInput.value.trim() || DEFAULT_MODEL;
            const articleTopic = articleTopicInput.value.trim();
            let articleLanguage = articleLanguageSelect.value === 'Other' ? customArticleLanguageInput.value.trim() : articleLanguageSelect.value;
            let authorPersonaValue = authorPersonaSelect.value;
            let authorPersonaText = authorPersonaValue === 'Other'
                ? customAuthorPersonaInput.value.trim()
                : authorPersonaSelect.options[authorPersonaSelect.selectedIndex].text; // Get text like "Expert / Informative"
            const sourceOwner = sourceOwnerInput.value.trim();
            const targetAudience = targetAudienceInput.value.trim();
            const primaryKeywords = primaryKeywordsInput.value.trim();
            const callToAction = callToActionInput.value.trim();

            // Validation
            if (!apiKey || !modelId || !articleTopic || !articleLanguage || (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText))) {
                 if (!apiKey) updateStatus('API Key is required.', 'error'); if (!modelId) updateStatus('Model ID is required.', 'error'); if (!articleTopic) updateStatus('Article Topic/Prompt is required.', 'error'); if (!articleLanguage) updateStatus('Article Language is required.', 'error'); if (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText)) updateStatus('Author Persona is required.', 'error');
                setButtonLoading(false); return;
            }

            // Read file content if a file is selected
            sourceFileContent = null; // Reset before reading
            if (sourceFile) {
                updateStatus(`Reading source file: ${sourceFile.name}...`, 'info');
                try {
                     sourceFileContent = await readFileContent(sourceFile);
                     if (!sourceFileContent) { updateStatus(`Source file '${sourceFile.name}' seems empty or unreadable. Proceeding without it.`, 'warning'); }
                     else { updateStatus(`Source file read successfully (${(sourceFileContent.length/1024).toFixed(1)} KB).`, 'info'); }
                 } catch (err) {
                     updateStatus(`Error reading source file: ${err.message}. Proceeding without it.`, 'error');
                     sourceFileContent = null; // Ensure it's null on error
                 }
            }

             updateStatus(`Generating article in ${articleLanguage} as a ${authorPersonaText}...`, 'info');
             updateStatus(`Using Model: ${modelId}.`, 'info');
             if (targetAudience) updateStatus(`Targeting Audience: ${targetAudience}.`, 'info');
             if (primaryKeywords) updateStatus(`Focusing on Keywords: ${primaryKeywords}.`, 'info');

            // --- Construct ENHANCED Prompt FOR HUMANIZATION ---
            // --- BU BÖLÜM "HUMANIZE" ÖZELLİĞİ İÇİN GÜNCELLENDİ ---
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
            // Ensure systemInstruction is correctly formatted for the API
            const requestData = {
                 contents: [{ role: 'user', parts: [{ text: "Generate the article based *strictly* on the detailed system instructions provided, focusing intensely on sounding human and avoiding AI detection." }] }], // User message triggering the system prompt
                 systemInstruction: { parts: [{ text: system_prompt }] },
                 generationConfig: {
                     // responseMimeType: 'text/plain' // Let API decide
                     // Temperature: Slightly higher might introduce more variability, potentially making it sound less robotic. Test carefully.
                     // temperature: 0.5,
                     // Top K / Top P: Can also influence randomness/creativity. Defaults are often good.
                 }
            };

            updateStatus('Sending request to Gemini API... Focusing on human-like generation.', 'info'); // Updated message
             try {
                // --- API Call & Processing (Robust logic - unchanged from previous correct version) ---
                 const response = await fetch(apiUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(requestData), });
                 const responseBody = await response.text(); // Get raw text first

                 if (!response.ok) {
                     let eM = `API Error (${modelId}/${response.status}): ${response.statusText}`; let eD = '';
                     try { const eJ = JSON.parse(responseBody); eD = eJ.error?.message || JSON.stringify(eJ.error); console.error("API Error JSON:", eJ);
                         if (eJ.error?.message?.toLowerCase().includes("api key not valid")) throw new Error("API Key invalid/unauthorized. Please check your key.");
                         if (eJ.error?.code === 404 || eJ.error?.message?.toLowerCase().includes("model") && eJ.error?.message?.toLowerCase().includes("not found")) throw new Error(`Model '${modelId}' not found or access denied. Check the Model ID.`); // Added more specific check
                         if (eJ.error?.code === 429) throw new Error("API Quota exceeded or rate limit reached.");
                         if (eJ.error?.code >= 500) throw new Error("Google API server error.");
                     } catch (pE) {
                         if (pE instanceof Error && (pE.message.includes("API Key invalid") || pE.message.includes("Model") ) ) { throw pE; } // Re-throw specific errors
                         else { eD = responseBody.substring(0, 300) + '...'; } // Fallback detail
                     }
                     throw new Error(`${eM} - ${eD}`);
                 }

                 updateStatus('Response received, processing article...', 'info');
                 generatedArticleContent = null;

                 try { // Process response - Expecting JSON containing text part
                     const result = JSON.parse(responseBody);
                     const candidate = result.candidates?.[0];
                     const blockReason = result.promptFeedback?.blockReason;
                     const safetyRatings = candidate?.safetyRatings || result.promptFeedback?.safetyRatings; // Check both places

                     if (blockReason) {
                         throw new Error(`Request blocked: ${blockReason}. ${safetyRatings ? `Details: ${JSON.stringify(safetyRatings)}` : ''}. Try revising the prompt or checking safety settings if applicable.`); // Added suggestion
                     }

                     if (candidate?.content?.parts?.[0]?.text) {
                         generatedArticleContent = candidate.content.parts[0].text;
                         // Refine finish reason messages slightly
                         if (candidate.finishReason === 'STOP') {
                             updateStatus('Article generation completed successfully.', 'success');
                         } else if (candidate.finishReason === 'MAX_TOKENS') {
                             updateStatus(`Article generation stopped due to MAX_TOKENS limit. Output may be incomplete.`, 'warning');
                             generatedArticleContent += `\n\n[SYSTEM WARNING: Output truncated due to maximum token limit.]`;
                         } else if (candidate.finishReason === 'SAFETY') {
                              updateStatus(`Article generation stopped due to SAFETY concerns. Output may be incomplete or empty. Details: ${JSON.stringify(safetyRatings || 'No specific rating details')}`, 'error');
                              if (!generatedArticleContent?.trim()) generatedArticleContent = `[Content Blocked due to Safety Concerns: ${blockReason || 'Reason unspecified'}]`; // Provide placeholder if empty
                         }
                          else {
                            updateStatus(`Generation finished with reason: ${candidate.finishReason}. ${safetyRatings ? `Safety: ${JSON.stringify(safetyRatings)}` : ''}`, 'warning');
                            if (!generatedArticleContent?.trim()) { // If no content despite non-STOP/SAFETY reason
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
                             updateStatus('Used plain text response. Content might be malformed.', 'warning'); // Downgrade status
                         } else {
                             throw new Error(`Non-JSON response was empty.`);
                         }
                     } else {
                         throw e; // Re-throw other errors
                     }
                 }

                 // Display result
                 if (generatedArticleContent?.trim()) {
                     outputArticle.value = generatedArticleContent.trim(); // Display in textarea
                     copyButton.disabled = false; downloadButton.disabled = false;
                     feather.replace(); // Ensure copy/download icons are shown correctly
                 } else {
                    // This case should ideally be caught by errors above, but as a fallback:
                    updateStatus('Failed to generate valid article content after processing.', 'error');
                    outputArticle.value = outputArticle.value || "Could not generate article. Check status panel for details."; // Keep existing error message if any
                 }

            } catch (error) {
                updateStatus(`Error: ${error.message}`, 'error');
                console.error('Operation Failed:', error);
                outputArticle.value = `Error generating article. Details:\n${error.message}`;
            }
            finally {
                setButtonLoading(false);
            }
        }); // end form submit

        // --- Copy/Download Functions (Unchanged) ---
        function copyOutput() {
            if (!outputArticle.value) return;
            navigator.clipboard.writeText(outputArticle.value)
                .then(() => {
                    copyButton.innerHTML = '<i data-feather="check" class="w-4 h-4 mr-1.5"></i> Copied!';
                    copyButton.classList.add('bg-green-500', 'text-white', 'hover:bg-green-600', 'focus:ring-green-500'); // Added text-white for contrast
                    copyButton.classList.remove('text-gray-700', 'hover:bg-gray-300');
                    feather.replace();
                    setTimeout(() => {
                        copyButton.innerHTML = '<i data-feather="clipboard" class="w-4 h-4 mr-1.5"></i> Copy';
                        copyButton.classList.remove('bg-green-500', 'text-white', 'hover:bg-green-600', 'focus:ring-green-500');
                        copyButton.classList.add('text-gray-700', 'hover:bg-gray-300'); // Restore original classes
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
            // Generate filename from topic if possible
            const filenameBase = articleTopicInput.value.trim().toLowerCase()
                                    .replace(/[^a-z0-9\s-]/g, '') // Remove special chars except space/hyphen
                                    .replace(/\s+/g, '-') // Replace spaces with hyphens
                                    .substring(0, 50) || 'ai-seo-article'; // Limit length
            const timestamp = new Date().toISOString().slice(0, 10);
            link.download = `${filenameBase}_${timestamp}.txt`;
            link.style.display = 'none'; document.body.appendChild(link); link.click(); document.body.removeChild(link); window.URL.revokeObjectURL(url);
            updateStatus(`File "${link.download}" download initiated.`, 'success');
        }

        copyButton.addEventListener('click', copyOutput);
        downloadButton.addEventListener('click', downloadOutput);

        // Initial icon setup
        feather.replace();
        // --- END: JavaScript Code ---
    </script>
</body>
</html>
