<!-- filepath: /c:/xampp/htdocs/laravel-wordtopdf/resources/views/wordtopdf.blade.php -->
<!DOCTYPE html>
<html lang="en" class="theme-light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Word to PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .theme-light {
            --bg-color: #f0f0f0;
            --text-color: #333;
            --button-bg: #4a90e2;
            --button-hover-bg: #357ab8;
            --form-bg: #ffffff;
            --form-text-color: #333;
        }
        .theme-dark {
            --bg-color: #1a202c;
            --text-color: #f0f0f0;
            --button-bg: #357ab8;
            --button-hover-bg: #4a90e2;
            --form-bg: #2d3748;
            --form-text-color: #f0f0f0;
        }
        body {
            background-color: var(--bg-color);
            color: var(--text-color);
        }
        .btn {
            background-color: var(--button-bg);
        }
        .btn:hover {
            background-color: var(--button-hover-bg);
        }
        .cartoon-border {
            border: 4px solid #000;
            border-radius: 8px;
            box-shadow: 4px 4px 0 #000;
        }
        .pixel-font {
            font-family: 'Poppins', sans-serif;
        }
        .theme-toggle {
            position: absolute;
            top: 1rem;
            left: 1rem;
            display: flex;
            align-items: center;
            background: none;
            border: none;
            cursor: pointer;
            outline: none;
        }
        .toggle-switch {
            width: 40px;
            height: 20px;
            background-color: #ccc;
            border-radius: 10px;
            position: relative;
            margin: 0 8px;
            transition: background-color 0.3s;
        }
        .toggle-switch::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: #fff;
            border-radius: 50%;
            top: 1px;
            left: 1px;
            transition: transform 0.3s;
        }
        .theme-dark .toggle-switch {
            background-color: #4a90e2;
        }
        .theme-dark .toggle-switch::before {
            transform: translateX(20px);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center min-h-screen relative">
    <button id="theme-toggle" class="theme-toggle">
        <svg id="sun-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
        </svg>
        <div class="toggle-switch"></div>
        <svg id="moon-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
        </svg>
    </button>
    <div class="p-8 rounded-lg shadow-lg w-full max-w-md cartoon-border" style="background-color: var(--form-bg); color: var(--form-text-color);">
        <h2 class="text-3xl font-bold mb-12 text-center pixel-font">Convert Word to PDF</h2>
        <form action="{{ route('word_to_pdf') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="wordFile" class="block text-sm font-medium pixel-font">Upload Word File</label>
                <input type="file" name="wordFile" id="wordFile" accept=".doc,.docx" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div>
                <button type="submit" class="w-full py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition btn pixel-font">Convert to PDF</button>
            </div>
        </form>
    </div>

    <footer class="mt-12 text-center">
        <h3 class="text-xl font-semibold pixel-font">My Tools</h3>
        <ul class="mt-4 space-y-2">
            <li><a href="https://github.com/alii16" target="_blank" class="text-indigo-200 hover:underline pixel-font">Check out my projects on GitHub</a></li>
        </ul>
        <p class="text-sm mt-6 pixel-font">&copy; 2024 by Alii16. All Rights Reserved.</p>
    </footer>

    <script>
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('theme-dark');
            document.documentElement.classList.toggle('theme-light');
        });
    </script>
</body>
</html>