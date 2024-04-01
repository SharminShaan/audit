<?php

namespace App\Http\Controllers;

use App\Models\ThemeOptions;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function companyprofile()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.company-profile', compact('setting'));
    }
    public function meetourteam()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.meetourteam', compact('setting'));
    }
    public function affiliation()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.affiliation', compact('setting'));
    }
    public function enlistment()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.enlistment', compact('setting'));
    }
    public function membership()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.aboutus.membership', compact('setting'));
    }
    public function auditassurance()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.auditassurance', compact('setting'));
    }
    public function taxationvat()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.taxationvat', compact('setting'));
    }
    public function advisory()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.advisory', compact('setting'));
    }
    public function secretariallicensingcompliance()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.secretariallicensingcompliance', compact('setting'));
    }
    public function businessservice()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.businessservice', compact('setting'));
    }
    public function humanresource()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.humanresource', compact('setting'));
    }

    public function trainingdevelopment()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.services.trainingdevelopment', compact('setting'));
    }
    // client menu page start
    public function financialinstitutions()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.financialinstitutions', compact('setting'));
    }
    public function govtSemiGovtlistedcompanies()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.listedcompanies', compact('setting'));
    }

    public function Foreignclient()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.foreignclient', compact('setting'));
    }

    public function internationalclients()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.client.internationalclients', compact('setting'));
    }

    // media Tab
    public function newsletter()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.newsletter', compact('setting'));
    }
    public function blog()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.blog', compact('setting'));
    }
    public function blogDetails($id)
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.blog-details', compact('setting'));
    }

    public function publication()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.publication', compact('setting'));
    }

    public function gallery()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.gallery', compact('setting'));
    }

    public function events()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.media.events', compact('setting'));
    }

    public function professional()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.career.professional', compact('setting'));
    }

    public function articleship()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.career.articleship', compact('setting'));
    }

    public function regulators()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.regulators', compact('setting'));
    }

    public function contact()
    {
        $setting = ThemeOptions::findOrFail(1);
        return view('frontend.pages.contact', compact('setting'));
    }

//  publication gallery events professional articleship regulators contact



}
