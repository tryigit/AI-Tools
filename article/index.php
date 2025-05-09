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

    <title>Stealth Article Weaver | Undetectable AI SEO Content</title>
    <meta name="description" content="Forge superior, human-quality, SEO-driven articles that elude AI detection. Seamlessly integrate with any CMS. Powered by Google Gemini. Define your narrative, audience, and keywords for unparalleled content.">
    <meta name="keywords" content="ai article generator, undetectable ai writer, human-like ai content, seo content automation, stealth content, blog post generator, gemini api, tryigit, advanced ai writing, content alchemy">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://tryigit.dev/ai/article" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                        'dark-primary-bg': '#000000',
                        'dark-secondary-bg': '#0B0B0D',
                        'dark-card-bg': '#101013',
                        'dark-border': '#242429',
                        'dark-text-primary': '#F0F0F0',
                        'dark-text-secondary': '#A8A8A8',
                        'dark-text-muted': '#66666E',
                        'dark-input-bg': '#141417',
                        'dark-input-border': '#2D2D33',
                        'dark-accent-start': '#581c87', // Violet 800
                        'dark-accent-end': '#86198f',   // Fuchsia 800 (Darker, more intense)

                        'light-primary-bg': '#FFFFFF',
                        'light-secondary-bg': '#F7F8FA', // Very light gray
                        'light-card-bg': '#FFFFFF',
                        'light-border': '#E0E2E7',
                        'light-text-primary': '#1A1D26', // Near black
                        'light-text-secondary': '#4A5061',
                        'light-text-muted': '#7A8091',
                        'light-input-bg': '#FFFFFF',
                        'light-input-border': '#CED3DB',
                        'light-accent-start': '#1e293b', // Slate 800
                        'light-accent-end': '#0f172a',   // Slate 900 (Dark, sharp accent)
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
                            '0%, 100%': { filter: 'brightness(0.9) saturate(0.9)' },
                            '50%': { filter: 'brightness(1.15) saturate(1.15)' },
                        },
                    },
                    boxShadow: {
                        'focus-dark': '0 0 0 2px #000000, 0 0 0 4px #581c87', // Inner black, outer accent
                        'focus-light': '0 0 0 2px #FFFFFF, 0 0 0 4px #1e293b', // Inner white, outer accent
                        'card-dark': '0px 4px 25px -10px rgba(0, 0, 0, 0.5), 0px 0px 15px -8px rgba(88, 28, 135, 0.3)', // More pronounced shadow with accent hint
                        'card-light': '0px 5px 20px -10px rgba(26, 29, 38, 0.12)',
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
                -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;
            }
            h1, h2, h3, h4, h5, h6 { @apply font-heading; }

            ::-webkit-scrollbar { @apply w-2 h-2; }
            ::-webkit-scrollbar-track { @apply bg-transparent; }
            ::-webkit-scrollbar-thumb { @apply rounded-full bg-light-text-muted/30 dark:bg-dark-text-muted/30; }
            ::-webkit-scrollbar-thumb:hover { @apply bg-light-text-muted/50 dark:bg-dark-text-muted/50; }

            .form-section-wrapper {
                @apply bg-light-card-bg dark:bg-dark-card-bg p-6 sm:p-8 rounded-xl shadow-card-light dark:shadow-card-dark transition-all duration-300;
            }
            .form-section-title-text {
                @apply text-lg font-semibold mb-6 tracking-tight text-light-text-primary dark:text-dark-text-primary;
            }

            label {
                @apply block mb-2 text-sm font-semibold text-light-text-secondary dark:text-dark-text-secondary;
            }
            input[type="text"], input[type="password"], select, textarea:not(#outputArticle) {
                @apply block w-full px-4 py-3.5 rounded-lg shadow-sm transition-all duration-200 ease-in-out;
                @apply text-base text-light-text-primary placeholder-light-text-muted bg-light-input-bg border border-light-input-border;
                @apply dark:text-dark-text-primary dark:placeholder-dark-text-muted dark:bg-dark-input-bg dark:border-dark-input-border;
                @apply focus:outline-none focus:border-transparent focus:shadow-focus-light dark:focus:shadow-focus-dark;
            }
             select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%237A8091' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                 background-position: right 0.9rem center; background-repeat: no-repeat; background-size: 1.1em 1.1em;
                 -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 3rem;
             }
             html.dark select {
                 background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23A8A8A8' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
             }
            textarea:not(#outputArticle) { @apply min-h-[110px] leading-relaxed; }
            .form-input-description { @apply mt-2 text-xs text-light-text-muted dark:text-dark-text-muted; }
            .form-input-description a {
                @apply font-medium hover:underline text-light-accent-end dark:text-dark-accent-end;
            }

            #outputArticle {
                @apply w-full p-5 bg-light-input-bg dark:bg-dark-input-bg border border-light-border dark:border-dark-border rounded-lg shadow-inner font-sans text-base leading-relaxed min-h-[450px];
                @apply text-light-text-primary dark:text-dark-text-primary placeholder-light-text-muted dark:placeholder-dark-text-muted;
                @apply focus:outline-none focus:shadow-focus-light dark:focus:shadow-focus-dark;
            }
        }
        @layer components {
            .title-gradient-text {
                @apply bg-clip-text text-transparent bg-gradient-to-r from-light-accent-start to-light-accent-end dark:from-dark-accent-start dark:to-dark-accent-end;
            }
            html.dark .title-gradient-text {
                animation: pulseAccent 3s infinite ease-in-out;
            }
            .link-text-light { @apply text-light-accent-start hover:text-light-accent-end; }
            .dark .link-text-dark { @apply text-dark-accent-start hover:text-dark-accent-end; }


            .file-upload-area {
                @apply relative block w-full p-8 text-center border-2 border-light-border dark:border-dark-border border-dashed rounded-xl cursor-pointer transition-all duration-200 ease-in-out;
                @apply bg-light-secondary-bg hover:bg-light-card-bg dark:bg-dark-secondary-bg dark:hover:bg-dark-card-bg hover:border-light-accent-start dark:hover:border-dark-accent-start;
            }
            .file-upload-area .icon-upload { @apply w-10 h-10 mx-auto text-light-text-muted dark:text-dark-text-muted group-hover:text-light-accent-start dark:group-hover:text-dark-accent-start transition-colors; }
            .file-upload-area .text-main-upload { @apply mt-3 block text-sm font-semibold text-light-text-secondary dark:text-dark-text-secondary; }
            .file-upload-area .text-sub-upload { @apply block text-xs text-light-text-muted dark:text-dark-text-muted; }
            .file-upload-area input[type="file"] { @apply absolute inset-0 w-full h-full opacity-0 cursor-pointer; }

            .btn-submit-primary {
                @apply inline-flex items-center justify-center px-8 py-4 border border-transparent text-base font-semibold rounded-lg shadow-lg focus:outline-none transition-all duration-300 ease-in-out disabled:opacity-40 disabled:cursor-not-allowed disabled:shadow-none;
                @apply text-white bg-gradient-to-r from-light-accent-start to-light-accent-end hover:shadow-xl hover:brightness-110;
                @apply dark:from-dark-accent-start dark:to-dark-accent-end dark:hover:brightness-110;
                @apply focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-primary-bg dark:focus:ring-offset-dark-primary-bg focus:ring-light-accent-end dark:focus:ring-dark-accent-end;
            }
            .btn-submit-primary .spinner-animation {
                @apply border-white border-t-transparent;
            }

            .btn-action-secondary {
                @apply inline-flex items-center justify-center px-6 py-2.5 border-2 text-sm font-medium rounded-lg transition-all duration-200 ease-in-out disabled:opacity-50;
                @apply border-light-border text-light-text-secondary hover:bg-light-border/60 focus:border-light-text-primary;
                @apply dark:border-dark-border dark:text-dark-text-secondary dark:hover:bg-dark-border/60 dark:focus:border-dark-text-primary;
                @apply focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-light-primary-bg dark:focus:ring-offset-dark-primary-bg;
            }
            .btn-action-secondary.success-state {
                @apply bg-emerald-500 text-white border-emerald-500 hover:bg-emerald-600 focus:border-emerald-600;
                @apply dark:bg-emerald-500 dark:text-white dark:border-emerald-500 dark:hover:bg-emerald-600 dark:focus:border-emerald-600;
            }

            .input-group-button {
                @apply inline-flex items-center justify-center rounded-r-lg px-3.5 h-[54px] transition-colors duration-150 ease-in-out; /* Match input height */
                @apply text-light-text-muted hover:text-light-text-primary bg-light-input-bg border border-l-0 border-light-input-border;
                @apply dark:text-dark-text-muted dark:hover:text-dark-text-primary dark:bg-dark-input-bg dark:border-l-0 dark:border-dark-input-border;
                @apply focus:outline-none focus:z-10 focus:shadow-focus-light dark:focus:shadow-focus-dark;
            }

            .spinner-animation { @apply inline-block w-5 h-5 border-[3px] rounded-full animate-spin; }
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1N2MBK3GT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-B1N2MBK3GT');
    </script>
</head>
<body class="dark:bg-dark-primary-bg bg-light-primary-bg">

    <div class="container max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10 md:py-16">
        <header class="text-center mb-12 md:mb-16 animate-fade-in-deep">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tighter text-light-text-primary dark:text-dark-text-primary">
                 Stealth Article <span class="title-gradient-text">Weaver</span>
             </h1>
             <p class="mt-5 text-lg md:text-xl text-light-text-secondary dark:text-dark-text-secondary max-w-2xl mx-auto">
                 Forge superior, human-quality articles that master SEO and elude AI detection. Your narrative, amplified.
             </p>
         </header>

        <form id="articleForm" onsubmit="return false;" class="space-y-10">

            <div class="form-section-wrapper animate-slide-in-up-strong" style="animation-delay: 0.1s;">
                <h2 class="form-section-title-text">Core Configuration</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    <div>
                        <label for="apiKey">Gemini API Key:</label>
                        <div class="flex">
                             <input type="password" id="apiKey" name="apiKey" required placeholder="Your Google AI Studio Key" class="rounded-r-none flex-1">
                             <button type="button" id="toggleApiKey" title="Show/Hide Key" class="input-group-button">
                                <i data-feather="eye" class="w-5 h-5"></i>
                            </button>
                        </div>
                         <p class="form-input-description">
                             Access via <a href="https://aistudio.google.com/apikey" target="_blank" rel="noopener noreferrer" class="link-text-light dark:link-text-dark">Google AI Studio</a>. Stored locally.
                         </p>
                    </div>
                     <div>
                        <label for="modelId">Gemini Model ID:</label>
                        <input type="text" id="modelId" name="modelId" placeholder="Default: gemini-2.5-pro-exp-03-25">
                        <p class="form-input-description">Current: <code class="font-semibold"><span id="currentModelDisplay"></span></code>. Default: <code class="font-semibold">gemini-2.5-pro-exp-03-25</code>.</p>
                    </div>
                 </div>
            </div>

            <div class="form-section-wrapper animate-slide-in-up-strong" style="animation-delay: 0.2s;">
                <h2 class="form-section-title-text">Article Blueprint</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                     <div>
                        <label for="articleLanguage">Output Language:</label>
                        <select id="articleLanguage" name="articleLanguage">
                              <option value="English">English</option>
                              <option value="Turkish">Turkish</option>
                              <option value="Spanish">Spanish</option>
                              <option value="French">French</option>
                              <option value="German">German</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customArticleLanguage" name="customArticleLanguage" placeholder="Specify language" class="mt-2 hidden">
                         <p class="form-input-description">Language for the generated article.</p>
                    </div>
                     <div>
                        <label for="authorPersona">Authorial Voice (Persona):</label>
                        <select id="authorPersona" name="authorPersona">
                              <option value="Expert">Expert / Informative</option>
                              <option value="Humorous">Humorous / Witty</option>
                              <option value="Journalist">Journalistic / Objective</option>
                              <option value="Storyteller">Storyteller / Narrative</option>
                              <option value="Developer">Developer / Technical</option>
                              <option value="Marketer">Marketer / Persuasive</option>
                              <option value="Casual">Casual / Conversational</option>
                              <option value="Other">Other (Specify)</option>
                        </select>
                        <input type="text" id="customAuthorPersona" name="customAuthorPersona" placeholder="Describe persona (e.g., 'Seasoned Tech Analyst')" class="mt-2 hidden">
                         <p class="form-input-description">Defines tone & style. Specificity is key.</p>
                    </div>
                 </div>
                 <div class="mt-6">
                     <label for="articleTopic">Core Topic / Detailed Prompt:</label>
                     <textarea id="articleTopic" name="articleTopic" rows="4" required placeholder="e.g., 'Craft an in-depth analysis of the future of decentralized finance, targeting crypto enthusiasts.'"></textarea>
                     <p class="form-input-description">The more detail, the more refined the output. Include keywords if desired.</p>
                 </div>
            </div>

            <div class="form-section-wrapper animate-slide-in-up-strong" style="animation-delay: 0.3s;">
                <h2 class="form-section-title-text">Contextual Foundation (Optional)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6 items-start">
                    <div>
                         <label for="sourceFile">Upload Context File:</label>
                         <label for="sourceFile" class="file-upload-area group">
                             <i data-feather="upload-cloud" class="icon-upload"></i>
                             <span class="text-main-upload">Click or Drag & Drop File</span>
                             <span class="text-sub-upload">PDF, DOCX, TXT supported (Max 5MB)</span>
                             <input type="file" id="sourceFile" name="sourceFile" accept=".pdf,.doc,.docx,.txt">
                         </label>
                         <div id="sourceFileNameDisplay" class="mt-3 text-sm font-medium text-light-text-secondary dark:text-dark-text-secondary text-center truncate px-2">No file selected</div>
                         <p class="form-input-description">Provide foundational material for unique insights.</p>
                    </div>
                     <div>
                         <label for="sourceOwner">Brand/Website Identity (Optional):</label>
                         <input type="text" id="sourceOwner" name="sourceOwner" placeholder="e.g., YourBrand.com or Innovatech Corp">
                          <p class="form-input-description">Aligns output with a specific brand voice.</p>
                     </div>
                </div>
            </div>

            <div class="form-section-wrapper animate-slide-in-up-strong" style="animation-delay: 0.4s;">
                <h2 class="form-section-title-text">SEO & Audience Targeting</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-6">
                    <div>
                         <label for="targetAudience">Target Audience Profile:</label>
                         <input type="text" id="targetAudience" name="targetAudience" placeholder="e.g., Tech-savvy early adopters, Novice investors">
                          <p class="form-input-description">Define who you're speaking to.</p>
                     </div>
                    <div>
                         <label for="primaryKeywords">Primary Keywords/Phrases:</label>
                         <input type="text" id="primaryKeywords" name="primaryKeywords" placeholder="e.g., undetectable AI content, SEO article strategy">
                         <p class="form-input-description">Comma-separated (1-3 recommended).</p>
                    </div>
                     <div class="md:col-span-2">
                         <label for="callToAction">Desired Call to Action (Optional):</label>
                         <input type="text" id="callToAction" name="callToAction" placeholder="e.g., Explore our advanced features, Join the discussion">
                          <p class="form-input-description">Guide the reader's next step.</p>
                     </div>
                </div>
            </div>

            <div class="pt-4 text-center animate-slide-in-up-strong" style="animation-delay: 0.5s;">
                <button type="submit" id="generateButton" class="btn-submit-primary w-full sm:w-auto">
                     <span class="button-content-wrapper inline-flex items-center justify-center">
                        <i data-feather="feather" class="w-5 h-5 mr-2.5 icon-main-btn"></i>
                        <span class="button-text-main">Craft My Article</span>
                     </span>
                     <div class="spinner-animation hidden"></div>
                </button>
            </div>
        </form>

        <div id="outputSection" class="mt-12 hidden opacity-0 transition-opacity duration-500 ease-in-out animate-slide-in-up-strong" style="animation-delay: 0.6s;">
            <h3 class="text-xl font-semibold mb-4 text-light-text-primary dark:text-dark-text-primary">Crafted Article</h3>
            <div class="output-area-wrapper mb-4">
                <textarea id="outputArticle" rows="25" readonly placeholder="Your uniquely crafted article will manifest here..."></textarea>
            </div>
            <div class="output-actions-wrapper text-center mt-5 space-x-3">
                <button type="button" class="btn-action-secondary" id="copyButton" disabled title="Copy article">
                    <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy
                </button>
                <button type="button" class="btn-action-secondary" id="downloadButton" disabled title="Download as .txt">
                    <i data-feather="download" class="w-4 h-4 mr-2"></i> Download
                </button>
            </div>
        </div>

        <div id="statusSection" class="mt-12 hidden opacity-0 transition-opacity duration-500 ease-in-out animate-slide-in-up-strong" style="animation-delay: 0.7s;">
            <h3 class="text-xl font-semibold mb-4 text-light-text-primary dark:text-dark-text-primary">Generation Log</h3>
            <div id="statusPanel" class="h-60 p-4 overflow-y-auto rounded-lg bg-light-input-bg dark:bg-dark-input-bg border border-light-border dark:border-dark-border font-mono text-xs shadow-inner">
                <div class="text-light-text-muted dark:text-dark-text-muted">Awaiting instructions...</div>
            </div>
        </div>


         <footer class="mt-16 pt-8 border-t border-light-border dark:border-dark-border text-center text-xs text-light-text-muted dark:text-dark-text-muted animate-fade-in-deep" style="animation-delay: 0.8s;">
             API key, settings, and file content are processed locally and sent directly to Google API. No data stored on our servers. Tool by Yiğit.
         </footer>
    </div>

    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-6 right-6 z-50 p-3 rounded-full shadow-xl transition-all duration-300 ease-in-out transform hover:scale-110 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-light-primary-bg dark:focus:ring-offset-dark-primary-bg focus:ring-light-accent-end dark:focus:ring-dark-accent-end
        bg-gradient-to-br from-slate-700 to-slate-900 text-slate-100
        dark:bg-gradient-to-br dark:from-dark-accent-start dark:to-dark-accent-end dark:text-slate-100
    ">
        <i data-feather="sun" class="w-6 h-6 block dark:hidden"></i>
        <i data-feather="moon" class="w-6 h-6 hidden dark:block"></i>
    </button>

    <script>
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
        const submitButtonContentWrapper = generateButton.querySelector('.button-content-wrapper');
        const submitButtonSpinner = generateButton.querySelector('.spinner-animation');
        const statusPanel = document.getElementById('statusPanel');
        const statusSection = document.getElementById('statusSection');
        const outputArticle = document.getElementById('outputArticle');
        const outputSection = document.getElementById('outputSection');
        const copyButton = document.getElementById('copyButton');
        const downloadButton = document.getElementById('downloadButton');
        const themeToggleButton = document.getElementById('themeToggleButton');
        const htmlElement = document.documentElement;

        const STORAGE_PREFIX = 'stealthArticleWeaver_v5_';
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
        const THEME_KEY = STORAGE_PREFIX + 'theme';

        let generatedArticleContent = null;
        let sourceFileContent = null;
        let currentSourceFile = null;
        const DEFAULT_MODEL = 'gemini-2.5-pro-exp-03-25';
        const MAX_FILE_SIZE_MB = 5;
        const MAX_FILE_SIZE_BYTES = MAX_FILE_SIZE_MB * 1024 * 1024;


        function updateStatus(message, type = 'info') {
            if (statusSection.classList.contains('hidden')) {
                statusSection.classList.remove('hidden');
                setTimeout(() => statusSection.classList.remove('opacity-0'), 50);
            }
            const timestamp = new Date().toLocaleTimeString('en-GB');
            const statusLine = document.createElement('div');
            let typeClass = 'text-light-text-muted dark:text-dark-text-muted';
            let iconType = 'info';

            switch (type) {
                case 'success': typeClass = 'text-green-500 dark:text-green-400'; iconType = 'check-circle'; break;
                case 'error': typeClass = 'text-red-500 dark:text-red-400 font-medium'; iconType = 'x-circle'; break;
                case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-400'; iconType = 'alert-triangle'; break;
                case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; iconType = 'info'; break;
            }
            statusLine.className = `py-1 flex items-center ${typeClass} animate-fade-in-deep`;
            statusLine.innerHTML = `<i data-feather="${iconType}" class="w-4 h-4 mr-2 flex-shrink-0"></i><span>[${timestamp}] ${message}</span>`;
            
            const initialMsg = statusPanel.querySelector('div:only-child');
            if (initialMsg && initialMsg.textContent.includes('Awaiting instructions...')) {
                statusPanel.innerHTML = '';
            }
            statusPanel.appendChild(statusLine);
            statusPanel.scrollTop = statusPanel.scrollHeight;
            feather.replace();
        }

        function setButtonLoading(isLoading) {
             generateButton.disabled = isLoading;
             if (isLoading) {
                 submitButtonContentWrapper.classList.add('hidden');
                 submitButtonSpinner.classList.remove('hidden');
                 generateButton.classList.add('cursor-wait');
             } else {
                 submitButtonContentWrapper.classList.remove('hidden');
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
                const savedModelId = localStorage.getItem(MODEL_ID_KEY);
                modelIdInput.value = savedModelId ? savedModelId : DEFAULT_MODEL;

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

        function applyTheme(theme) {
            if (theme === 'dark') {
                htmlElement.classList.add('dark');
            } else {
                htmlElement.classList.remove('dark');
            }
            feather.replace();
        }

        function toggleTheme() {
            const newTheme = htmlElement.classList.contains('dark') ? 'light' : 'dark';
            applyTheme(newTheme);
            try { localStorage.setItem(THEME_KEY, newTheme); }
            catch (e) { console.error("LocalStorage Error (Theme Save):", e); }
        }

        function loadTheme() {
            let savedTheme = 'dark';
            try {
                const storedTheme = localStorage.getItem(THEME_KEY);
                if (storedTheme === 'light' || (storedTheme === null && !window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    savedTheme = 'light';
                }
            } catch (e) { console.error("LocalStorage Error (Theme Load):", e); }
            applyTheme(savedTheme);
        }

        function readFileContent(fileToRead) {
            return new Promise((resolve, reject) => {
                if (!fileToRead) { resolve(null); return; }
                if (fileToRead.size > MAX_FILE_SIZE_BYTES) {
                    reject(new Error(`File is too large (${(fileToRead.size / (1024*1024)).toFixed(1)}MB). Max ${MAX_FILE_SIZE_MB}MB.`));
                    return;
                }
                const reader = new FileReader();
                reader.onload = (e) => { resolve(e.target.result); };
                reader.onerror = (e) => { console.error("File Reading Error:", e); reject(new Error(`Error reading file: ${fileToRead.name}`)); };
                reader.readAsText(fileToRead, 'UTF-8');
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            loadTheme();
            loadSettings();
            feather.replace();
            document.querySelectorAll('.animate-fade-in-deep, .animate-slide-in-up-strong').forEach(el => {
                el.style.opacity = '0';
                setTimeout(() => el.style.opacity = '1', 50 + (parseFloat(el.style.animationDelay) || 0) * 1000);
            });
        });

        apiKeyInput.addEventListener('change', saveSettings);
        modelIdInput.addEventListener('change', saveSettings);
        articleLanguageSelect.addEventListener('change', () => { toggleCustomInput(articleLanguageSelect, customArticleLanguageInput); saveSettings(); });
        customArticleLanguageInput.addEventListener('change', saveSettings);
        authorPersonaSelect.addEventListener('change', () => { toggleCustomInput(authorPersonaSelect, customAuthorPersonaInput); saveSettings(); });
        customAuthorPersonaInput.addEventListener('change', saveSettings);
        sourceOwnerInput.addEventListener('change', saveSettings);
        targetAudienceInput.addEventListener('change', saveSettings);
        primaryKeywordsInput.addEventListener('change', saveSettings);
        callToActionInput.addEventListener('change', saveSettings);

        toggleApiKey.addEventListener('click', () => {
            const type = apiKeyInput.getAttribute('type') === 'password' ? 'text' : 'password';
            apiKeyInput.setAttribute('type', type);
            toggleApiKeyIcon.setAttribute('data-feather', type === 'password' ? 'eye' : 'eye-off');
            feather.replace();
        });

        sourceFileInput.addEventListener('change', (event) => {
             currentSourceFile = event.target.files[0];
             if (currentSourceFile) {
                 if (currentSourceFile.size > MAX_FILE_SIZE_BYTES) {
                    updateStatus(`File "${currentSourceFile.name}" is too large (Max ${MAX_FILE_SIZE_MB}MB). Please choose a smaller file.`, 'error');
                    sourceFileNameDisplay.textContent = `Error: File too large`;
                    sourceFileNameDisplay.classList.remove('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold');
                    sourceFileNameDisplay.classList.add('text-red-500', 'dark:text-red-400');
                    currentSourceFile = null;
                    sourceFileInput.value = '';
                    return;
                 }
                 const displayName = currentSourceFile.name.length > 35 ? currentSourceFile.name.substring(0, 15) + '...' + currentSourceFile.name.substring(currentSourceFile.name.length - 15) : currentSourceFile.name;
                 sourceFileNameDisplay.textContent = `Selected: ${displayName}`;
                 sourceFileNameDisplay.classList.add('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold');
                 sourceFileNameDisplay.classList.remove('text-red-500', 'dark:text-red-400');
             } else {
                 sourceFileNameDisplay.textContent = 'No file selected';
                 sourceFileNameDisplay.classList.remove('text-light-accent-start', 'dark:text-dark-accent-start', 'font-semibold', 'text-red-500', 'dark:text-red-400');
                 sourceFileContent = null;
                 currentSourceFile = null;
             }
         });

        themeToggleButton.addEventListener('click', toggleTheme);

        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            setButtonLoading(true);
            generatedArticleContent = null;
            outputArticle.value = '';
            copyButton.disabled = true;
            downloadButton.disabled = true;
            copyButton.classList.remove('success-state');
            copyButton.innerHTML = '<i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy';
            feather.replace();
            if (statusPanel.querySelector('div:only-child')?.textContent.includes('Awaiting instructions...')) {
                statusPanel.innerHTML = '';
            }

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

            if (!apiKey || !articleTopic || !articleLanguage || (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText))) {
                if (!apiKey) updateStatus('API Key is required.', 'error');
                if (!articleTopic) updateStatus('Article Topic/Prompt is required.', 'error');
                if (!articleLanguage) updateStatus('Article Language is required.', 'error');
                if (!authorPersonaValue || (authorPersonaValue === 'Other' && !authorPersonaText)) updateStatus('Author Persona is required.', 'error');
                setButtonLoading(false); return;
            }

            sourceFileContent = null;
            if (currentSourceFile) {
                updateStatus(`Reading source file: ${currentSourceFile.name}...`, 'info');
                try {
                     sourceFileContent = await readFileContent(currentSourceFile);
                     if (!sourceFileContent) { updateStatus(`Source file '${currentSourceFile.name}' seems empty. Proceeding without it.`, 'warning'); }
                     else { updateStatus(`Source file read successfully (${(sourceFileContent.length/1024).toFixed(1)} KB).`, 'info'); }
                 } catch (err) {
                     updateStatus(`Error reading source file: ${err.message}. Proceeding without it.`, 'error');
                     sourceFileContent = null;
                 }
            }

             updateStatus(`Initiating article weave in ${articleLanguage} as a ${authorPersonaText}...`, 'info');
             updateStatus(`Utilizing Model: ${modelId}.`, 'info');

            let system_prompt = `You are an AI tasked with writing a high-quality, engaging, comprehensive, and SEO-optimized article in **${articleLanguage}**. Your **absolute primary goal** is to create content that reads **exactly** as if written by a knowledgeable HUMAN, specifically embodying the persona of a **${authorPersonaText}**. The output **must be undetectable by AI content detectors** and indistinguishable from human writing by search engines and readers. Adhere to ALL instructions meticulously.

MAIN TOPIC/PROMPT:
${articleTopic}

ARTICLE REQUIREMENTS - Follow ALL instructions strictly:

1.  **Language & Persona:**
    *   Write the entire article ONLY in **${articleLanguage}**.
    *   **Deeply embody** the **${authorPersonaText}** persona. Think like them, write like them. Use their typical vocabulary, tone, sentence structures, and common expressions. (e.g., ${authorPersonaValue === 'Humorous' ? 'witty, use sophisticated humor, maybe sarcasm if appropriate' : authorPersonaValue === 'Developer' ? 'precise, logical, technical, use code examples if relevant' : 'appropriate for the specific persona'}). ${authorPersonaValue === 'Other' ? `Specifically act like: ${customAuthorPersonaInput.value.trim()}` : ''}.
    *   **Sound Human (CRITICAL):** Vary sentence length and structure naturally. Use contractions common in ${articleLanguage} (unless persona is strictly 'Formal'). Inject personality. Ensure natural flow and avoid robotic perfection or over-reliance on obvious transition words.

2.  **SEO & Structure (for Ranking):**
    *   **Keywords:** Naturally integrate: **${primaryKeywords || 'Not specified'}**. Focus on relevance and user intent, not stuffing. Use synonyms/LSI.
    *   **Title:** Generate a compelling, SEO-friendly title (unless given in prompt).
    *   **Headings:** Use clear H2, H3 (and H4 if needed) for structure.
    *   **Readability:** Concise paragraphs (3-5 sentences). Use lists/bold sparingly.
    *   **Content Quality:** Well-researched, informative, accurate, unique perspective. Add value.

3.  **Target Audience:**
    *   Tailor language, examples, depth for: **${targetAudience || 'a general audience'}**.

4.  **Context Integration (If Provided):**
    *   **Source File:** ${sourceFileContent ? `**Crucially, use the following text from the user-uploaded file** as foundational context, examples, or unique perspectives. Integrate this **smoothly and naturally**. Synthesize it. Build upon it.\n\`\`\`\n${sourceFileContent.substring(0, 8000) + (sourceFileContent.length > 8000 ? '...' : '')}\n\`\`\`\n` : 'No external file provided.'}
    *   **Source Owner/Website:** ${sourceOwner ? `Subtly align perspective with **${sourceOwner}** where relevant. Avoid overt promotion unless persona is 'Marketer'.` : ''}

5.  **Call to Action (If Provided):**
    *   ${callToAction ? `Naturally weave in or conclude with: "${callToAction}".` : ''}

6.  **ABSOLUTELY AVOID COMMON AI TELLS (ESSENTIAL FOR UNDETECTABILITY):**
    *   **Do NOT sound like a generic AI.** BE THE PERSONA.
    *   **Do NOT use overly complex vocabulary** unless persona requires.
    *   **Do NOT overuse transition words** unnaturally.
    *   **Do NOT write overly "perfect" or bland text.**
    *   **Do NOT output generic lists** unless essential.
    *   **Do NOT include preambles, apologies, self-corrections, or notes to the user.**
    *   **Do NOT use markdown code fences (\`\`\`)** in the final article.
    *   **Do NOT use repetitive sentence structures.**
    *   **Do NOT hedge excessively.**

7.  **Output Format:** ONLY the complete article content, starting with the title or first paragraph. Clean formatting for CMS. **No extra text before or after.**`;

            const apiUrl = `https://generativelanguage.googleapis.com/v1beta/models/${modelId}:generateContent?key=${apiKey}`;
            const requestData = {
                 contents: [{ role: 'user', parts: [{ text: "Generate the article based *strictly* on the detailed system instructions provided, focusing intensely on sounding human and avoiding AI detection." }] }],
                 systemInstruction: { parts: [{ text: system_prompt }] },
                 generationConfig: { temperature: 0.75, topP: 0.95, topK: 40 }
            };

            updateStatus('Sending request to Gemini API... This may take a moment.', 'info');
             try {
                 const response = await fetch(apiUrl, { method: 'POST', headers: { 'Content-Type': 'application/json', }, body: JSON.stringify(requestData), });
                 const responseBody = await response.text();

                 if (!response.ok) {
                     let eM = `API Error (${response.status}): ${response.statusText}`; let eD = '';
                     try { const eJ = JSON.parse(responseBody); eD = eJ.error?.message || JSON.stringify(eJ.error);
                         if (eJ.error?.message?.toLowerCase().includes("api key not valid")) throw new Error("API Key invalid/unauthorized.");
                         if (eJ.error?.code === 404 || eJ.error?.message?.toLowerCase().includes("model") && eJ.error?.message?.toLowerCase().includes("not found")) throw new Error(`Model '${modelId}' not found.`);
                         if (eJ.error?.code === 429) throw new Error("API Quota exceeded or rate limit.");
                         if (eJ.error?.code >= 500) throw new Error("Google API server error.");
                     } catch (pE) {
                         if (pE instanceof Error && (pE.message.includes("API Key") || pE.message.includes("Model") ) ) { throw pE; }
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
                         throw new Error(`Request blocked: ${blockReason}. ${safetyRatings ? `Details: ${JSON.stringify(safetyRatings)}` : ''}.`);
                     }
                     if (candidate?.content?.parts?.[0]?.text) {
                         generatedArticleContent = candidate.content.parts[0].text;
                         if (candidate.finishReason === 'STOP') updateStatus('Article weaving complete.', 'success');
                         else if (candidate.finishReason === 'MAX_TOKENS') {
                             updateStatus(`Article weaving stopped (MAX_TOKENS). Output may be incomplete.`, 'warning');
                             generatedArticleContent += `\n\n[SYSTEM WARNING: Output truncated due to maximum token limit.]`;
                         } else if (candidate.finishReason === 'SAFETY') {
                              updateStatus(`Article weaving stopped (SAFETY). Output may be incomplete/empty. Details: ${JSON.stringify(safetyRatings || 'N/A')}`, 'error');
                              if (!generatedArticleContent?.trim()) generatedArticleContent = `[Content Blocked (Safety): ${blockReason || 'Reason unspecified'}]`;
                         } else {
                            updateStatus(`Generation finished: ${candidate.finishReason}. ${safetyRatings ? `Safety: ${JSON.stringify(safetyRatings)}` : ''}`, 'warning');
                            if (!generatedArticleContent?.trim()) throw new Error(`Finished: ${candidate.finishReason}, but no content.`);
                         }
                     } else throw new Error('API success, but no valid text content found.');
                 } catch (e) {
                     if (e instanceof SyntaxError && responseBody?.trim()) {
                         updateStatus('API response not valid JSON. Using plain text.', 'warning');
                         generatedArticleContent = responseBody;
                     } else throw e;
                 }

                 if (generatedArticleContent?.trim()) {
                     outputArticle.value = generatedArticleContent.trim();
                     if (!outputSection.classList.contains('hidden')) {
                        outputSection.style.opacity = 0;
                        setTimeout(() => { outputSection.style.opacity = 1; }, 50);
                     } else {
                        outputSection.classList.remove('hidden');
                        setTimeout(() => outputSection.classList.remove('opacity-0'), 50);
                     }
                     copyButton.disabled = false; downloadButton.disabled = false;
                 } else {
                    updateStatus('Failed to generate valid article content.', 'error');
                    outputArticle.value = outputArticle.value || "Could not generate article. Check log.";
                 }

            } catch (error) {
                updateStatus(`Error: ${error.message}`, 'error');
                console.error('Operation Failed:', error);
                outputArticle.value = `Error generating article. Details:\n${error.message}`;
                 if (outputSection.classList.contains('hidden')) {
                    outputSection.classList.remove('hidden');
                    setTimeout(() => outputSection.classList.remove('opacity-0'), 50);
                 }
            }
            finally {
                setButtonLoading(false);
            }
        });

        function copyOutput() {
            if (!outputArticle.value) return;
            navigator.clipboard.writeText(outputArticle.value)
                .then(() => {
                    copyButton.innerHTML = '<i data-feather="check-circle" class="w-4 h-4 mr-2"></i> Copied!';
                    copyButton.classList.add('success-state');
                    feather.replace();
                    setTimeout(() => {
                        copyButton.innerHTML = '<i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy';
                        copyButton.classList.remove('success-state');
                        feather.replace();
                    }, 2500);
                })
                .catch(err => { console.error('Copy failed: ', err); updateStatus('Could not copy article.', 'error'); });
        }

        function downloadOutput() {
            if (!outputArticle.value) return;
            const textToSave = outputArticle.value;
            const BOM = "\uFEFF";
            const blob = new Blob([BOM + textToSave], { type: 'text/plain;charset=utf-8' });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a'); link.href = url;
            const filenameBase = articleTopicInput.value.trim().toLowerCase()
                                    .replace(/[^a-z0-9\s-]/g, '')
                                    .replace(/\s+/g, '-')
                                    .substring(0, 40) || 'stealth-article';
            const timestamp = new Date().toISOString().slice(0, 10);
            link.download = `${filenameBase}_${timestamp}.txt`;
            document.body.appendChild(link); link.click(); document.body.removeChild(link); window.URL.revokeObjectURL(url);
            updateStatus(`File "${link.download}" download initiated.`, 'success');
        }

        copyButton.addEventListener('click', copyOutput);
        downloadButton.addEventListener('click', downloadOutput);

        const observer = new MutationObserver((mutationsList, obs) => {
            for(const mutation of mutationsList) {
                if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
                    feather.replace();
                    return;
                }
            }
        });
        observer.observe(document.body, { childList: true, subtree: true });
    </script>
</body>
</html>
