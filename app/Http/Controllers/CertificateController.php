<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function verify(Request $request)
    {
        $request->validate([
            'certificate_number' => 'required|string|max:100',
        ]);

        $certificate = Certificate::where(
            'certificate_number',
            $request->certificate_number
        )->first();

        if (!$certificate) {
            return back()
                ->withInput()
                ->with(
                    'certificate_error',
                    'Certificate not found. Please check the certificate number and try again.'
                );
        }

        // Revoked certificates are never considered valid
        if ($certificate->status === 'revoked') {
            return back()
                ->withInput()
                ->with(
                    'certificate_error',
                    'This certificate has been revoked.'
                );
        }

        // Manually marked expired certificates are not valid
        if ($certificate->status === 'expired') {
            return back()
                ->withInput()
                ->with(
                    'certificate_error',
                    'This certificate has expired.'
                );
        }

        // Automatically check expiry date
        // The certificate remains valid on its expiry date.
        if (
            $certificate->expiry_date &&
            $certificate->expiry_date->isBefore(today())
        ) {
            return back()
                ->withInput()
                ->with(
                    'certificate_error',
                    'This certificate has expired.'
                );
        }

        return back()->with('certificate', $certificate);
    }
}