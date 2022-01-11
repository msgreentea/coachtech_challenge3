<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChallengeRequest;
use App\Models\Contact;

class ChallengeController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function confirm(ChallengeRequest $request)
    {

        $fullname = $request->input('familyname') . " " . $request->input('lastname');
        $gender = $request->input('gender');
        $email = $request->input('email');
        $postcode = $request->input('address');
        $address = $request->input('address');
        $building_name = $request->input('building_name');
        $opinion = $request->input('opinion');

        $items = [
            'fullname' => $fullname,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $building_name,
            'opinion' => $opinion
        ];

        // $items = $request->all();

        return view('confirm', $items);
    }

    public function register(ChallengeRequest $request)
    {
        $items = $request->all();
        Contact::create($items);
        return view('thanks');
    }
}