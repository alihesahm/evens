<?php

namespace App\Http\Controllers;

use App\Imports\InviteImport;
use App\Mail\HafalatSoft;
use App\Mail\mymails;
use App\Models\invite;
use App\Models\party;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Intervention\Image\ImageManager;
use PDF;

// use Barryvdh\DomPDF\Facade as PDF;
// use Intervention\Image\ImageManagerStatic as image;
use Intervention\Image\Facades\Image;
// use Intervention\Image\
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;
// use Barryvdh\DomPDF\Facade ;
// use Barryvdh\DomPDF\PDF;
// use Intervention\Image\Facades\Image;

// use Barryvdh\DomPDF\Facade;
// use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
// use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
// use Barryvdh\DomPDF\Facade as PDF;

// use Illuminate\Support\Facades\Response;
// use Barryvdh\DomPDF\Facade as PDF;
// use Illuminate\Support\Facades\Storage;
// use BaconQrCode\Encoder\QrCode;
// use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
// use Maatwebsite\Excel\Facades\Excel;
use Mpdf\Mpdf;

// use SimpleSoftwareIO\QrCode\Facades\QrCode;

// use SimpleSoftwareIO\QrCode\Facades\QrCode as FacadesQrCode;

class invitesController extends Controller
{
    //
    public function show()
    {

        $user_id = auth()->user()->id;

        $invites = Invite::whereHas('party', function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        })->get();

        return view('invites.Index', compact('invites'));
    }
    public function create()
    {
        // $party=party::all();

        $userid = auth()->user()->id;

        $name = 'funny';
        // Mail::to('abdo99669@mail.com')->send(new mymails($name));
        // dd($userid);
        $partyuser = party::all()->where('user_id', '==', $userid);

        // $concerts=party::all()->where('user_id',$currentuserid);

        // echo (json_encode($partyuser));
        return view('invites.Add', compact('partyuser'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => ['required', 'digits:9']
        ]);

        $data = $request->all();

        $invite = invite::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "phone_number" => $data["phone_number"],
            "status" => 0,
            "party_id" => $request->party_id
        ]);

        $invite->save();
        $qrcode = QrCode::size(200)->generate($invite->id);
        $qr = $qrcode;

        $link = "public/uploads/$invite->id.svg";
        Storage::put("public/uploads/$invite->id.svg", $qr);
        // img src='public'
        $qrCodeSvg = QrCode::size(100)->generate($invite->id);

        $filePath = public_path("storage/public/uploads/{$invite->id}.pdf");

        $name = 'تم دعوتك لحضور حفلة';
        $pdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4-L',
            'title' => $invite->name,
            'author' => 'عبدالرحمن باجعمان',


        ]);


        // dd($customer);
        // $pdf->WriteHTML(view('invites.pdf', compact('qrCodeSvg', 'invite')));
        // // $pdf = PDF::loadView('pdf.document', $qrCodeSvg);
        // $filePath = public_path("storage/public/uploads/{$invite->id}.pdf");
        // $pdf->Output($filePath, 'F');

        // // Storage::put("storage/public/uploads/$invite->id.pdf", $x);

        // $data = [
        //     'body' => "$invite->name يسعدنا حضورك",
        //     'attachment' => $filePath
        //     // 'image'=>
        // ];

        // Mail::to('abdo99669@gmail.com')->send(new HafalatSoft($data));
        // return $pdf->Output();

        // dd('Mail send successfully.');
        // $data=[
        //     'body'=>'here we go',
        //     'attachment'=> 'Hello from attachment'
        // ];
        // Mail::to('abdo99669@gmail.com')->send(new HafalatSoft($data['attachment']));

        if ($invite) {

            return redirect()->route('invite.show')->with('createdsyccess', 'تم انشاء الدعوه بنجاح!');
        } else {
            return redirect()->route('invite.show')->with('errordelete', 'فشل انشاء الدعوه');
        }


    }
    public function showdetails($id)
    {
        $invite = invite::find($id);
        // $invites=DB::table("invites")->get();

        // dd($invites);

        // foreach ($invites as $invite) {
        //     dd($invite->name);
        // }

        return view('invites.Showdetails', compact('invite'));

    }
    public function edit($id)
    {
        $invite = invite::find($id);
        $currentuserid = auth()->user()->id;
        $concerts = party::all()->where('user_id', $currentuserid);

        return view('invites.Edit', compact('invite', 'concerts'));

    }

    public function update(Request $request, $id)
    {
        $concert_ID = invite::find($id);
        $concert_ID->update($request->all());


        if ($concert_ID) {
            return redirect()->route('invite.show')->with('success', 'تم تعديل الدعوه بنجاح!');
        } else {
            return redirect()->route('invite.show')->with('error', 'فشل تعديل الدعوه.');
        }

    }

    public function delete($id)
    {

        $invite = invite::find($id);


        // return response()->json(['message'=>'The Invitation has been deleted']);
        if ($invite) {
            $invite->delete();

            return redirect()->route('invite.show')->with('successdelete', 'تم حذف الدعوه بنجاح!');
        } else {
            return redirect()->route('invite.show')->with('errordelete', 'فشل حذف الدعوه.');
        }

    }
    public function pdf($id)
    {

        $invite = Invite::find($id);

        // Generate QR code as an SVG string
        $qrCodeSvg = QrCode::size(300)->generate($invite->id);

        // Convert SVG to PNG image
        // $image = Image::make($qrCodeSvg)->encode('png');

        // Load HTML content with QR code

        // $pdf=Mpdf::loadView('pdf.codyment',$qrCodeSvg);

        $pdf = new Mpdf([
            'mode' => 'utf-8',
            // 'format' => 'A4-L',
            // 'title' => $invite->name,
            // 'author' => 'عبدالرحمن باجعمان',
            'showImageErrors' => true,


        ]);


        // dd($customer);
        $pdf->WriteHTML(view('invites.pdf', compact('qrCodeSvg', 'invite')));
        return $pdf->Output();

        // $pdf = PDF::loadView('pdf.document', $qrCodeSvg);
        $filePath = public_path("storage/public/uploads/{$invite->id}.pdf");
        $pdf->Output($filePath, 'F');

        // Storage::put("storage/public/uploads/$invite->id.pdf", $x);

        $data = [
            'body' => "We are learning Laravel 10 mail from laravelia.com",
            'attachment' => $filePath
        ];

        Mail::to('abdo99669@gmail.com')->send(new HafalatSoft($data));

        // $html = view('invites.pdf', compact( 'qrCodeSvg','invite'))->render();

        // Generate the PDF using Dompdf
        // $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadHTML($html);
        // $pdf->setPaper('A4', 'portrait');
        // $pdf->render();

        // Generate the file name
        // $fileName = 'qr.pdf';

        // // Generate the response with the PDF content and headers for download
        // return Response::make($pdf->output(), 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        // ]);
    }

    public function ExcelCreateForm(){
        return view('invites.Excel');
    }

    public function SaveDataFromExcel(Request $request){
        // dd($request->file);
        // Excel::import(new InviteImport,$request->file);
        // // Excel::import(new InviteImport,$request->file('excel'));
        // return redirect()->route('invite.show')->with('createdsyccess', 'تم انشاء الدعوات بنجاح!');


    }
    public function search(Request $request)
    {
            $searchOption = $request->input('search_option');
            $searchValue = $request->input('search_value');
            $user_id = auth()->user()->id;



        $user_id = auth()->user()->id;

        // $invites = Invite::whereHas('party', function ($query) use ($user_id) {
        //     $query->where('user_id', $user_id);
        // })->get();
            if($searchValue == 'all'){


                $results=$this->show();

                // return response()->json(['message'=>$results]);
            } else {
                $results = Invite::where(function ($query) use ($searchOption, $searchValue) {
                    $query->where($searchOption, 'like', '%' . $searchValue . '%')
                        ->orWhere($searchOption, 'like', $searchValue . '%');
                })
                ->whereHas('party', function ($query) use ($user_id) {
                    $query->where('user_id', $user_id);
                })
                ->get();

            }


            // echo (json_encode($results));

            return response()->json(['message' => $results]);

    }
}
