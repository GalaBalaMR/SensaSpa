<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\InfoMailRequest;
use App\Mail\InfoMailMarkdown;

class MailController extends Controller
{
    public function infomail(InfoMailRequest $request)
    {
        $request->validated();

        $info = $request;

        Mail::to( env('MAIL_USERNAME'))->send( new InfoMailMarkdown($info));

        if($request->ajax())
        {
            return response()->json(['flash' => 'Podarilo sa odoslať email.',
                                     'name'  => $request->name ,
                                     'status'=> 'succes',
                                     'success' => 1,
                                    ]);
        }
        return redirect('/')->with(['flash' => 'Podarilo sa odoslať email.',
                                 'name'  => $request->name ,
                                 'status'=> 'ok'
                                 ]);
    }
}
