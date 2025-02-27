<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordtoPDFController extends Controller
{
    public function index()
    {
        return view('wordtopdf');
    }

    public function convert(Request $request)
    {
        $file = $request->file('wordFile'); // Updated to match the form input name
        if (!$file) {
            return back()->withErrors(['wordFile' => 'Please upload a Word file.']);
        }

        $file_name = time() . '.' . $file->getClientOriginalName();

        $destinationPath = public_path('/');
        $file->move($destinationPath, $file_name);

        $dompdf = base_path('vendor/dompdf/dompdf');
        \PhpOffice\PhpWord\Settings::setPdfRendererPath($dompdf);
        \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

        $content = \PhpOffice\PhpWord\IOFactory::load(public_path($file_name));
        $pdf_writer = \PhpOffice\PhpWord\IOFactory::createWriter($content, 'PDF');
        $pdf_writer->save(public_path('pdf/' . $file_name . '.pdf'));

        // Delete the Word file after conversion
        unlink(public_path($file_name));

        return view('pdfview', ['file_name' => $file_name]);
    }
}
