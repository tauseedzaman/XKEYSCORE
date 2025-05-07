<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Activity;
use App\Models\Credential;
use App\Models\Interest;
use App\Models\Location;
use App\Models\Message;
use App\Models\Purchase;
use App\Models\SearchLog;
use App\Models\Social;
use Illuminate\Http\Request;

class DashobardController extends Controller
{
    public function dashboard(Request $request)
    {
        $accountsCount = \App\Models\Account::count();
        $activitiesCount = \App\Models\Activity::count();
        $messagesCount = \App\Models\Message::count();
        $locationsCount = \App\Models\Location::count();
        $credentialsCount = \App\Models\Credential::count();
        $socialsCount = \App\Models\Social::count();

        // Optional: Chart data (users created over the last 7 days)
        $userStats = \App\Models\User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $userChartLabels = $userStats->pluck('date')->toArray();
        $userChartData = $userStats->pluck('count')->toArray();

        return view('dashboard', compact(
            'accountsCount',
            'activitiesCount',
            'messagesCount',
            'locationsCount',
            'credentialsCount',
            'socialsCount',
            'userChartLabels',
            'userChartData'
        ));
    }

    public function results(Request $request)
    {
        $query = $request->input('query');

        $accounts = Account::where(function ($q) use ($query) {
            $q->where('email', 'like', "%$query%")
                ->orWhere('username', 'like', "%$query%")
                ->orWhere('phone', 'like', "%$query%")
                ->orWhere('ip_address', 'like', "%$query%")
                ->orWhere('device', 'like', "%$query%")
                ->orWhere('location', 'like', "%$query%")
                ->orWhere('occupation', 'like', "%$query%")
                ->orWhere('income_range', 'like', "%$query%")
                ->orWhere('marital_status', 'like', "%$query%")
                ->orWhere('education', 'like', "%$query%")
                ->orWhere('bio', 'like', "%$query%")
                ->orWhere('website', 'like', "%$query%");
        })->paginate(15);

        $messages = Message::where(function ($q) use ($query) {
            $q->where('content', 'like', "%$query%")
                ->orWhere('type', 'like', "%$query%")
                ->orWhere('status', 'like', "%$query%")
                ->orWhere('source_info', 'like', "%$query%");
        })->paginate(15);

        $purchases = Purchase::where(function ($q) use ($query) {
            $q->where('item', 'like', "%$query%")
                ->orWhere('category', 'like', "%$query%")
                ->orWhere('currency', 'like', "%$query%")
                ->orWhere('payment_method', 'like', "%$query%")
                ->orWhere('status', 'like', "%$query%")
                ->orWhere('ip_address', 'like', "%$query%")
                ->orWhere('device', 'like', "%$query%")
                ->orWhere('location', 'like', "%$query%")
                ->orWhere('source_info', 'like', "%$query%")
                ->orWhere('browser', 'like', "%$query%")
                ->orWhere('os', 'like', "%$query%");
        })->paginate(15);


        $locations = Location::where(function ($q) use ($query) {
            $q->where('ip_address', 'like', "%$query%")
                ->orWhere('device', 'like', "%$query%")
                ->orWhere('country', 'like', "%$query%")
                ->orWhere('region', 'like', "%$query%")
                ->orWhere('city', 'like', "%$query%")
                ->orWhere('postal_code', 'like', "%$query%")
                ->orWhere('timezone', 'like', "%$query%")
                ->orWhere('isp', 'like', "%$query%")
                ->orWhere('organization', 'like', "%$query%")
                ->orWhere('source_info', 'like', "%$query%");
        })->paginate(15);

        $credentials = Credential::where(function ($q) use ($query) {
            $q->where('email', 'like', "%$query%")
                ->orWhere('password', 'like', "%$query%")
                ->orWhere('ip_address', 'like', "%$query%")
                ->orWhere('device', 'like', "%$query%")
                ->orWhere('location', 'like', "%$query%")
                ->orWhere('source_info', 'like', "%$query%")
                ->orWhere('browser', 'like', "%$query%")
                ->orWhere('os', 'like', "%$query%");
        })->paginate(15);


        return view('search.results', compact(
            'query',
            'accounts',
            'messages',
            'purchases',
            'locations',
            'credentials',
        ));
    }

    public function accounts_show($uuid)
    {
        $account = Account::with(['messages', 'credentials', 'activities', 'locations', 'purchases', 'socials'])->where('uuid',$uuid)->firstOrFail();
        return view('accounts.show', compact('account'));
    }
}
