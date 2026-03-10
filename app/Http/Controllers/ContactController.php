<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Throwable;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Honeypot: if bot fills it, pretend success.
        if ($request->filled('website')) {
            return $this->success($request);
        }

        // Time trap: if posted too fast, pretend success.
        $loadedAt = (int) $request->input('form_loaded_at', 0);
        if ($loadedAt > 0) {
            $elapsedMs = now()->valueOf() - $loadedAt;
            if ($elapsedMs < 2500) {
                return $this->success($request);
            }
        }

        try {
            $validated = $request->validate([
                'fname'   => ['required','string','max:255'],
                'lname'   => ['nullable','string','max:255'],
                'phone'   => ['nullable','string','max:30'],
                'email'   => ['required','email','max:255'],
                'event'   => ['required','string','max:255'],
                'date'    => ['required','date','date_format:Y-m-d','after_or_equal:today'],
                'venue'   => ['nullable','string','max:255'],
                'package' => ['nullable','in:Not sure yet,Essential,Signature,Luxury'],
                'body'    => ['nullable','string','max:2000'],

                // traps
                'website'        => ['nullable','string','max:0'],
                'form_loaded_at' => ['nullable','string','max:32'],
            ]);
        } catch (ValidationException $e) {
            return $this->validationFail($request, $e);
        }

        $to = env('MAIL_TO_ADDRESS', 'contact@xprtevents.com');

        try {
            Mail::to($to)->send(new ContactMail(
                $validated['fname'],
                $validated['lname'] ?? null,
                $validated['phone'] ?? null,
                $validated['email'],
                $validated['event'],
                $validated['body'] ?? null,
                $validated['date'],
                $validated['venue'] ?? null,
                $validated['package'] ?? null
            ));
        } catch (Throwable $e) {
            Log::error('Contact mail send failed', [
                'error' => $e->getMessage(),
            ]);

            return $this->fail($request, 'We couldn’t send your message right now. Please try again in a few minutes.');
        }

        return $this->success($request);
    }

    private function success(Request $request)
    {
        $msg = 'Thanks — we’ll reply within 1 business day.';

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['success' => true, 'message' => $msg], 200);
        }

        return back()->with('success', $msg);
    }

    private function validationFail(Request $request, ValidationException $e)
    {
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => false,
                'message' => 'Please fix the highlighted fields.',
                'errors' => $e->errors(),
            ], 422);
        }

        return back()->withErrors($e->errors())->withInput();
    }

    private function fail(Request $request, string $msg)
    {
        if ($request->expectsJson() || $request->ajax()) {
            return response()->json(['success' => false, 'message' => $msg], 500);
        }

        return back()->withErrors(['form' => $msg])->withInput();
    }

    public function index()
    {
        return view('contact');
    }
}