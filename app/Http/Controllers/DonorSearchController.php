<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonorSearchRequest;
use App\Models\BloodGroup;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class DonorSearchController extends Controller
{


    public function index(Request $request)
    {
        $request->flush();
        $cities = City::all();
        $bloodGroups = BloodGroup::all();
        $allReadyToGiveDonors = User::getReadyDonors();

        return view('searchForm', compact('cities', 'bloodGroups', 'allReadyToGiveDonors'));
    }


    public function search(Request $request)
    {

        $city = City::where('id', $request->city_id)->first();
        $city_name = $city->name;


        $blog_group = BloodGroup::where('id', $request->blood_group_id)->first();
        $blog_group_name = $blog_group->BloodGroup;

        $allReadyToGiveDonors = User::getReadyDonors();
        $cities = City::all();
        $bloodGroups = BloodGroup::all();

        /* dd($city_name);
        exit(); */

        $users = User::all();


        //dd($request->all());
        //exit();

        $request->flash();

        $query = User::with('city', 'bloodGroup')
            ->filter(request([$city_name, $blog_group_name]))
            ->inRandomOrder();

        /* $query = User::with('city', 'bloodGroup')
            ->filter(request(['blood_group', 'city']))
            ->inRandomOrder(); */

        $donors = $query->paginate(10);

        /* dd($donors);
        exit(); */

        return view('searchResults', [
            'searchedBloodGroup' => $blog_group_name,
            'searchedCity' => $city_name,
            'donors' => $donors,
            'allReadyToGiveDonors' => $allReadyToGiveDonors,
            'cities' => $cities,
            'bloodGroups' => $bloodGroups,
            //'otherDonors' => User::getOtherDonorsCanDonateTo($request->blood_group_id, $request->city_id),
        ]);
    }


    public function showDonors()
    {
        $donors = User::getAllReadyToGiveDonors();

        return view('donors', compact('donors'));
    }
}
