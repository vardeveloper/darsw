<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function contact()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        //Mail::send(new SendContact($request));
        //return redirect()->back()->withFlashSuccess(__('alerts.frontend.contact.sent'));

        if ($request->isMethod('post')) {

            $rules = [
                'name' => ['required', 'string', 'min:2'],
                //'phone' => ['nullable', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
                'email' => ['required', 'email'],
                'comments' => ['required', 'min:10']
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->all()
                ]);
            }

            $data = $request->all();
            $name = $request->input('name');
            $data['app_url'] = env('APP_URL', 'http://darvincalcantara.com');
            $data['mensaje'] = $request->input('comments');

            Mail::send('mail.contact', $data, function ($mail) use ($name) {
                $mail->from(config('mail.from.address'), config('mail.from.name'));
                $mail->to(config('mail.from.address'));
                $mail->subject('Contacto - ' . $name);
            });
            
            if (Mail::failures()) {
                $resp = [
                    'status' => false,
                    'message' => 'Error mail!'
                ];
                return response()->json($resp, 201);
            }

            $message = "<fieldset>";
            $message .= "<div id='success_page'>";
            $message .= "<h2>Email Sent Successfully.</h2>";
            $message .= "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
            $message .= "</div>";
            $message .= "</fieldset>";
            echo $message;
            return;

            $resp = [
                'status' => true,
                'message' => 'El mensaje fue enviado con éxito!'
            ];
            return response()->json($resp, 201);
        }

        $resp = [
            'status' => false,
            'message' => 'Unauthorized.'
        ];
        return response()->json($resp, 401);
    }

    public function newsletter(Request $request)
    {
        if ($request->isMethod('post')) {
            DB::table('newsletters')->updateOrInsert(
                [
                    'email' => $request->input('email')
                ],
                [
                    'email' => $request->input('email'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            );
            $resp = ['error' => false];
            return response()->json($resp, 201);
        }
        $resp = ['error' => true];
        return response()->json($resp, 401);
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

}
