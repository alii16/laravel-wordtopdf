<!-- filepath: /c:/xampp/htdocs/laravel-wordtopdf/resources/views/pdfview.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF View</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full h-full max-w-full text-center">
        <h2 class="text-2xl font-bold mb-6">PDF File</h2>
        <embed src="{{ asset('pdf/' . $file_name . '.pdf') }}" type="application/pdf" width="100%" height="800px" />
        <a href="{{ asset('pdf/' . $file_name . '.pdf') }}" download class="mt-4 inline-block bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Download PDF</a>
    </div>
</body>
</html>