<?php

namespace Laralum\PDF\Controllers;

use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Response;

class PDFController extends Controller
{
    /**
     * Display the custom PDF creator form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laralum_pdf::index');
    }

    /**
     * Download the PDF.
     *
     * @param string                   $name
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request, $name = 'output')
    {
        $pdf = PDF::loadView('laralum_pdf::pdf', ['text' => $request->text]);

        return $pdf->download("$name.pdf");
    }

    /**
     * Display the PDF.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pdf = PDF::loadView('laralum_pdf::pdf', ['text' => $request->text]);

        return Response::make($pdf->download('output.pdf'), 200, ['content-type' => 'application/pdf']);
    }
}
