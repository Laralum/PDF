<?php

namespace Laralum\PDF\Controllers;
use App\Http\Controllers\Controller;
use Laralum\PDF\Models\Permission;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Response;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('laralum_pdf::index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pdf  = PDF::loadView('laralum_pdf::pdf', ['text' => $request->text]);
        return Response::make($pdf->download('output.pdf'), 200, array('content-type' => 'application/pdf'));
    }


}
