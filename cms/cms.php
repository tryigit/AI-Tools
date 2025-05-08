<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- === Favicons & Manifest (tryigit.dev) === -->
    <link rel="apple-touch-icon" sizes="180x180" href="/ai/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/ai/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/ai/favicon-16x16.png">
    <link rel="manifest" href="/ai/site.webmanifest">
    <link rel="shortcut icon" href="/ai/favicon.ico">
    <!-- === End Favicons === -->

    <!-- === SEO Meta Tags (Tool Specific - Needs Update) === -->
    <!-- TODO: Update Title, Description, Keywords for the specific tool -->
    <title>AI Tool Template | tryigit.dev</title>
    <meta name="description" content="A template for building AI-powered tools on tryigit.dev.">
    <meta name="keywords" content="ai tool, template, tryigit, artificial intelligence">
    <meta name="robots" content="index, follow">
    <!-- TODO: Update canonical link if needed -->
    <link rel="canonical" href="https://tryigit.dev/ai/new-tool" />
    <!-- === End SEO Meta Tags === -->

    <!-- === CSS & Fonts === -->
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!-- Google Fonts (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- === End CSS & Fonts === -->

    <!-- === Tailwind Custom Configuration === -->
    <!-- Defines base theme, dark mode colors, and custom styles -->
    <script>
        tailwind.config = {
            darkMode: 'class', // Enables dark mode based on 'dark' class on <html>
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', '"Segoe UI"', 'Roboto', '"Helvetica Neue"', 'Arial', '"Noto Sans"', 'sans-serif', '"Apple Color Emoji"', '"Segoe UI Emoji"', '"Segoe UI Symbol"', '"Noto Color Emoji"'],
                        mono: ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
                    },
                    colors: {
                        // Primary and Secondary colors (can be customized)
                        primary: { light: '#9333ea', DEFAULT: '#6d28d9', dark: '#5b21b6' },
                        secondary: { light: '#2dd4bf', DEFAULT: '#14b8a6', dark: '#0d9488' },
                        // Dark Mode Palette (True Black Theme)
                        'dm-bg': '#000000', 'dm-card': '#111111', 'dm-text-primary': '#e5e5e5', 'dm-text-secondary': '#a3a3a3', 'dm-text-muted': '#737373', 'dm-border': '#333333', 'dm-input-bg': '#1a1a1a', 'dm-input-border': '#404040', 'dm-input-placeholder': '#737373', 'dm-status-bg': '#0a0a0a', 'dm-status-border': '#2a2a2a', 'dm-status-text': '#cccccc',
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
    <!-- === End Tailwind Config === -->

    <!-- === Base Styles === -->
    <!-- Defines base styles for elements and common components -->
    <style type="text/tailwindcss">
        @layer base {
            html.dark { color-scheme: dark; }
            body { @apply bg-gray-100 font-sans antialiased text-gray-800 dark:bg-dm-bg dark:text-dm-text-primary transition-colors duration-300; }
            label { @apply block mb-1.5 text-sm font-semibold text-gray-700 dark:text-dm-text-secondary; }
            input[type="text"], input[type="password"], input[type="number"], select, textarea { @apply block w-full px-4 py-2.5 text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/50 focus:border-primary transition duration-150 ease-in-out sm:text-sm dark:bg-dm-input-bg dark:border-dm-input-border dark:text-dm-text-primary dark:placeholder-dm-input-placeholder dark:focus:ring-primary-light/50 dark:focus:border-primary-light dark:shadow-none; }
            select { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e"); background-position: right 0.7rem center; background-repeat: no-repeat; background-size: 1.25em 1.25em; -webkit-appearance: none; -moz-appearance: none; appearance: none; padding-right: 2.8rem; }
            html.dark select { background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23a3a3a3' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e"); }
            textarea { @apply min-h-[90px] leading-relaxed; }
            fieldset, .fieldset-replacement { @apply border border-gray-200 rounded-lg p-5 pt-3 dark:border-dm-border dark:bg-dm-card; } /* Use .fieldset-replacement for divs styled like fieldsets */
            legend, .legend-replacement { @apply px-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary; } /* Use .legend-replacement for p/h3 styled like legends */
            .description { @apply mt-1.5 text-xs text-gray-600 dark:text-dm-text-muted; }
            .description a { @apply text-primary font-medium hover:text-primary-dark hover:underline dark:text-primary-light dark:hover:text-purple-400; }
            .warning { @apply text-amber-600 dark:text-yellow-400 font-medium; }
            #statusPanel::-webkit-scrollbar { width: 6px; } #statusPanel::-webkit-scrollbar-track { @apply bg-dm-status-border rounded; } #statusPanel::-webkit-scrollbar-thumb { @apply bg-gray-600 dark:bg-gray-700 rounded; } #statusPanel::-webkit-scrollbar-thumb:hover { @apply bg-gray-500 dark:bg-gray-600; }
        }
        @layer components {
            .btn { @apply inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg shadow-btn focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out disabled:opacity-60 disabled:cursor-not-allowed dark:focus:ring-offset-dm-bg dark:shadow-dark-btn; }
            .btn:hover:not(:disabled) { @apply dark:shadow-dark-btn-hover; }
            .btn-primary { @apply btn text-white bg-primary hover:bg-primary-dark focus:ring-primary dark:bg-primary dark:hover:bg-primary-dark; }
            .btn-secondary { @apply btn text-white bg-secondary hover:bg-secondary-dark focus:ring-secondary dark:bg-secondary dark:hover:bg-secondary-dark; }
             @keyframes spin { to { transform: rotate(360deg); } }
             .spinner { animation: spin 1s linear infinite; @apply inline-block w-5 h-5 border-[3px] border-current border-t-transparent rounded-full; }
            /* Add any other reusable components here */
        }
    </style>
    <!-- === End Base Styles === -->

    <!-- === Ads & Analytics (Keep As Is) === -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1500862170490490" crossorigin="anonymous"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1N2MBK3GT"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-B1N2MBK3GT'); </script>
    <!-- === End Ads & Analytics === -->

</head>
<body class="bg-gray-100 dark:bg-dm-bg">

    <div class="container max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">

        <!-- === Header (Customize Title/Description) === -->
        <header class="text-center mb-10 md:mb-12">
            <!-- TODO: Update Header Text -->
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-gray-900 dark:text-dm-text-primary">
                 Your AI Tool Name <span class="text-primary dark:text-primary-light">AI</span>
             </h1>
             <p class="mt-3 text-lg text-gray-600 dark:text-dm-text-secondary max-w-2xl mx-auto">
                 Brief description of what this specific AI tool does.
             </p>
         </header>
        <!-- === End Header === -->

        <!-- === Main Content Area (Add Tool Specific UI Here) === -->
        <main id="app-content" class="space-y-8">

            <!--
            DEVELOPER NOTE:
            This is where the main user interface for your specific AI tool goes.
            You can use <fieldset> or <div class="fieldset-replacement"> for grouping inputs.
            Use standard HTML form elements (input, select, textarea, button).
            Tailwind CSS classes are available for styling.
            -->

            <div class="fieldset-replacement">
                <p class="legend-replacement mb-4">Tool Configuration</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="toolInput1">Example Input:</label>
                        <input type="text" id="toolInput1" name="toolInput1" placeholder="Enter something...">
                        <p class="description">Description for this input field.</p>
                    </div>
                    <div>
                        <label for="toolSelect1">Example Select:</label>
                        <select id="toolSelect1" name="toolSelect1">
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                         <p class="description">Description for this select field.</p>
                    </div>
                </div>
            </div>

            <div class="fieldset-replacement">
                 <p class="legend-replacement mb-4">Another Section</p>
                 <div>
                     <label for="toolTextarea">Example Text Area:</label>
                     <textarea id="toolTextarea" name="toolTextarea" rows="4" placeholder="Enter larger text..."></textarea>
                 </div>
            </div>

            <!-- Example Submit Button -->
            <div class="pt-2">
                <button type="button" id="processButton" class="w-full btn-primary">
                     <i data-feather="play" class="w-5 h-5 mr-2 icon"></i>
                     <span class="button-text">Process Data</span>
                     <div class="spinner hidden ml-2"></div>
                </button>
            </div>

        </main>
        <!-- === End Main Content Area === -->


        <!-- === Status Panel (Keep for Logging) === -->
        <div class="mt-10">
            <label for="statusPanel" class="block mb-2 text-base font-semibold text-gray-800 dark:text-dm-text-primary">Processing Log</label>
            <div id="statusPanel" class="h-56 p-4 overflow-y-auto rounded-lg bg-gray-900 text-gray-200 border border-gray-700 dark:bg-dm-status-bg dark:text-dm-status-text dark:border-dm-status-border font-mono text-sm shadow-inner leading-relaxed">
                <div class="text-gray-400 dark:text-dm-text-muted">Waiting for action...</div>
            </div>
        </div>
        <!-- === End Status Panel === -->

        <!-- === Results/Download Area (Add If Needed) === -->
        <!--
        DEVELOPER NOTE:
        If your tool generates downloadable results or displays output,
        add the necessary HTML structure here (similar to the original downloadSection).
        You'll need corresponding JavaScript to populate and show this section.
        -->
        <div id="resultsSection" class="mt-8 hidden space-y-4">
             <h3 class="text-lg font-semibold text-gray-800 dark:text-dm-text-primary">Results</h3>
             <div id="resultsOutput" class="p-4 rounded-lg bg-gray-50 dark:bg-dm-card border border-gray-200 dark:border-dm-border">
                 <!-- Results will be displayed here -->
             </div>
             <button id="downloadResultButton" class="w-full btn-secondary hidden">
                 <i data-feather="download" class="w-5 h-5 mr-2"></i> Download Result
             </button>
        </div>
        <!-- === End Results Area === -->


        <!-- === Footer (Keep As Is) === -->
         <footer class="mt-10 pt-6 border-t border-gray-200 dark:border-dm-border text-center text-xs text-gray-500 dark:text-dm-text-muted">
             API key, settings, and file content are processed locally in your browser and sent directly to the Google API (if applicable). No data is stored on our servers. Tool by Yiğit.
         </footer>
        <!-- === End Footer === -->

    </div>

    <!-- === Theme Toggle Button (Keep As Is) === -->
    <button id="themeToggleButton" title="Toggle Theme" class="fixed bottom-5 right-5 z-50 p-2.5 rounded-full bg-primary dark:bg-primary-light text-white dark:text-black shadow-lg hover:opacity-90 transition-opacity">
        <i data-feather="sun" class="w-5 h-5"></i>
    </button>
    <!-- === End Theme Toggle Button === -->

    <!-- === External Libraries (Add More If Needed) === -->
    <!-- Add any other external JS libraries required by your specific tool here -->
    <!-- Example: <script src="..."></script> -->
    <!-- === End External Libraries === -->

    <!-- === Core JavaScript (Keep and Extend) === -->
    <script>
        // --- Element References (Add Specific Tool Elements) ---
        const statusPanel = document.getElementById('statusPanel');
        const themeToggleButton = document.getElementById('themeToggleButton');
        const themeToggleIcon = themeToggleButton.querySelector('i');
        const htmlElement = document.documentElement;
        // TODO: Add references to your tool's specific inputs, buttons, and output areas
        const processButton = document.getElementById('processButton');
        const processButtonText = processButton.querySelector('.button-text');
        const processButtonIcon = processButton.querySelector('i.icon');
        const processButtonSpinner = processButton.querySelector('.spinner');
        const resultsSection = document.getElementById('resultsSection');
        const resultsOutput = document.getElementById('resultsOutput');
        const downloadResultButton = document.getElementById('downloadResultButton');

        // --- localStorage Keys (Customize Prefix) ---
        // TODO: Change STORAGE_PREFIX for each new tool to avoid conflicts
        const STORAGE_PREFIX = 'aiToolTemplate_v1_';
        const THEME_KEY = STORAGE_PREFIX + 'theme';
        // TODO: Add keys for any settings specific to your tool that need saving

        // --- State Variables (Add Tool Specific State) ---
        // TODO: Add any state variables your tool needs

        // --- Helper Functions (Keep/Modify as needed) ---
        function updateStatus(message, type = 'info') {
            const timestamp = new Date().toLocaleTimeString('en-GB');
            const statusLine = document.createElement('div');
            let typeClass = 'text-gray-400 dark:text-dm-text-muted';
            let icon = '';
            switch (type) {
                case 'success': typeClass = 'text-green-500 dark:text-green-400'; icon = '<i data-feather="check-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
                case 'error': typeClass = 'text-red-500 dark:text-red-400 font-semibold'; icon = '<i data-feather="alert-triangle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
                case 'warning': typeClass = 'text-yellow-500 dark:text-yellow-400'; icon = '<i data-feather="alert-circle" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
                case 'info': typeClass = 'text-blue-500 dark:text-blue-400'; icon = '<i data-feather="info" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
                case 'system': typeClass = 'text-purple-500 dark:text-purple-400'; icon = '<i data-feather="tool" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
                case 'api': typeClass = 'text-cyan-500 dark:text-cyan-400'; icon = '<i data-feather="send" class="inline-block w-4 h-4 mr-1.5 -mt-0.5"></i>'; break;
            }
            statusLine.className = `py-0.5 ${typeClass}`;
            statusLine.innerHTML = `${icon}[${timestamp}] ${message}`;
            const initialMsg = statusPanel.querySelector('div:only-child.text-gray-400, div:only-child.dark\\:text-dm-text-muted');
            if (initialMsg && (initialMsg.textContent.includes('Awaiting action...') || initialMsg.textContent.includes('Waiting for action...'))) { statusPanel.innerHTML = ''; }
            statusPanel.appendChild(statusLine);
            statusPanel.scrollTop = statusPanel.scrollHeight;
            if (icon) feather.replace();
        }

        function setToolButtonLoading(isLoading) {
             processButton.disabled = isLoading;
             if (isLoading) {
                 processButtonText.textContent = 'Processing...';
                 processButtonIcon?.classList.add('hidden');
                 processButtonSpinner.classList.remove('hidden');
                 processButton.classList.add('cursor-wait', 'opacity-70');
             } else {
                 processButtonText.textContent = 'Process Data'; // Or your tool's action
                 processButtonIcon?.classList.remove('hidden');
                 processButtonSpinner.classList.add('hidden');
                 processButton.classList.remove('cursor-wait', 'opacity-70');
             }
         }

        // --- Settings Management (Add Tool Specific Settings) ---
        function saveToolSettings() {
             try {
                 // TODO: Save tool-specific settings to localStorage
                 // Example: localStorage.setItem(STORAGE_PREFIX + 'mySetting', mySettingInput.value);
             } catch (e) { console.error("LS Save Error:", e); updateStatus("Could not save settings.", "warning"); }
        }

        function loadToolSettings() {
            try {
                 // TODO: Load tool-specific settings from localStorage
                 // Example: mySettingInput.value = localStorage.getItem(STORAGE_PREFIX + 'mySetting') || 'defaultValue';
            } catch (e) { console.error("LS Load Error:", e); updateStatus("Could not load settings.", "warning"); }
        }

        // --- Theme Management (Keep As Is) ---
        function applyTheme(theme) { if (theme === 'dark') { htmlElement.classList.add('dark'); themeToggleIcon.setAttribute('data-feather', 'sun'); themeToggleButton.classList.remove('bg-primary'); themeToggleButton.classList.add('dark:bg-primary-light'); themeToggleButton.classList.remove('text-white'); themeToggleButton.classList.add('dark:text-black'); } else { htmlElement.classList.remove('dark'); themeToggleIcon.setAttribute('data-feather', 'moon'); themeToggleButton.classList.add('bg-primary'); themeToggleButton.classList.remove('dark:bg-primary-light'); themeToggleButton.classList.add('text-white'); themeToggleButton.classList.remove('dark:text-black'); } feather.replace(); }
        function toggleTheme() { const currentTheme = htmlElement.classList.contains('dark') ? 'dark' : 'light'; const newTheme = currentTheme === 'dark' ? 'light' : 'dark'; applyTheme(newTheme); try { localStorage.setItem(THEME_KEY, newTheme); } catch (e) { console.error("LS Theme Error:", e); updateStatus("Theme save failed.", "warning"); } }
        function loadTheme() { let savedTheme = 'dark'; try { const storedTheme = localStorage.getItem(THEME_KEY); if (storedTheme === 'light') { savedTheme = 'light'; } } catch (e) { console.error("LS Theme Load Error:", e); updateStatus("Theme load failed.", "warning"); } applyTheme(savedTheme); }

        // --- Tool-Specific Logic Start ---
        // DEVELOPER NOTE: Add your tool's core functions, API calls, event handlers etc. here.

        function processData() {
            // Example function triggered by the process button
            setToolButtonLoading(true);
            resultsSection.classList.add('hidden');
            resultsOutput.textContent = '';
            downloadResultButton.classList.add('hidden');
            statusPanel.innerHTML = ''; // Clear previous logs
            updateStatus('Processing started...', 'info');

            // TODO: Get input values
            const input1 = document.getElementById('toolInput1').value;
            const select1 = document.getElementById('toolSelect1').value;
            const textarea1 = document.getElementById('toolTextarea').value;

            // TODO: Add validation if necessary
            if (!input1) {
                updateStatus('Example Input is required.', 'error');
                setToolButtonLoading(false);
                return;
            }

            updateStatus(`Inputs received: ${input1}, ${select1}, ${textarea1.substring(0,20)}...`, 'system');

            // TODO: Perform the AI task (e.g., make an API call)
            // Replace this timeout with your actual async logic
            setTimeout(() => {
                try {
                    // --- Simulate successful processing ---
                    const resultData = `Processed result based on: ${input1} and ${select1}`;
                    updateStatus('Processing successful!', 'success');

                    // Display results
                    resultsOutput.textContent = resultData;
                    resultsSection.classList.remove('hidden');

                    // Optionally enable download
                    // downloadResultButton.classList.remove('hidden');
                    // downloadResultButton.onclick = () => { downloadData(resultData, 'result.txt'); };

                    setToolButtonLoading(false);
                    // --- End Simulation ---

                } catch (error) {
                     updateStatus(`Processing failed: ${error.message}`, 'error');
                     console.error("Processing Error:", error);
                     setToolButtonLoading(false);
                }
            }, 1500); // Simulate network delay
        }

        // Example download function (if needed)
        function downloadData(content, filename) {
             if (!content || content.trim().length === 0) { updateStatus(`No content to download for ${filename}.`, 'error'); return; }
             try {
                 const blob = new Blob([content], { type: 'text/plain;charset=utf-8' });
                 const url = URL.createObjectURL(blob);
                 const a = document.createElement('a');
                 a.style.display = 'none'; a.href = url; a.download = filename;
                 document.body.appendChild(a); a.click();
                 window.URL.revokeObjectURL(url); document.body.removeChild(a);
                 updateStatus(`Download initiated: "${filename}".`, 'success');
             } catch(e) { updateStatus(`Download error: ${e.message}`, 'error'); console.error("Download Error:", e); }
        }


        // --- Tool-Specific Logic End ---


        // --- Event Listeners (Add Tool Specific Listeners) ---
        document.addEventListener('DOMContentLoaded', () => {
            loadTheme();
            loadToolSettings(); // Load any saved tool settings
            feather.replace();
            updateStatus("Tool ready.", "system"); // Initial ready message
        });

        themeToggleButton.addEventListener('click', toggleTheme);

        // TODO: Add event listeners for your tool's inputs and buttons
        processButton.addEventListener('click', processData);

        // Example: Save settings when an input changes
        // const toolInput1 = document.getElementById('toolInput1');
        // if(toolInput1) {
        //    toolInput1.addEventListener('change', saveToolSettings);
        // }


    </script>
</body>
</html>
