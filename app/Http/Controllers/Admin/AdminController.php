<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteDraft;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function quotes(Request $request)
    {
        $query = QuoteDraft::query()->orderByDesc('submitted_at')->orderByDesc('created_at');

        if ($status = $request->query('status')) {
            $query->where('status', $status);
        }

        $leads = $query->paginate(20)->withQueryString();

        return view('admin.quotes.index', [
            'leads' => $leads,
            'status' => $status ?? '',
        ]);
    }

    public function showQuote(QuoteDraft $quoteDraft)
    {
        return view('admin.quotes.show', ['lead' => $quoteDraft]);
    }
}
