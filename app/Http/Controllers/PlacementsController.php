<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HostClass;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Database\QueryException;
// use App\Http\Controllers\HostClass;
use Illuminate\Support\Facades\Log;


class PlacementsController extends Controller
{

    protected $serverIp;

    public function __construct()
    {
        $this->serverIp = HostClass::getserverIp();
    }
    /****************Save Placement****************/
public function savePlacement(Request $request) {
     //dd($request);

    $request->validate([
        'departmentId' => 'integer',
        'placement' => 'string',
        'extensionNo' => 'integer',
       
    ]);

    $departmentId = $request->input('departmentId');
    $description = $request->input('placement');
    $extensionNo = $request->input('extensionNo');
    $userId = 101;
    $locationId = 101;
    $orgId = 11;
    $sessionId = 101;
     //   dd($departmentId);
    
    $apiData = [
        "departmentId" => $departmentId,  
        "description" => $description,
        "extensionNo" => $extensionNo,
        "userId" => $userId,
        "locationId" => $locationId,
        "orgId" => $orgId,
        "sessionId" => $sessionId
    ];
      // dd($apiData);

    Log::info('API Data:', $apiData);
    $url = "http://{$this->serverIp}/insertDepartmentPlacement";

   
    
    try {
      
        $response = Http::post($url, $apiData);
           //  $res = $response->json();
           // dd($res);
        if ($response->successful()) {
            // Return the response data
            return response()->json(['data' => $response->json()]);
        } else {
            // Handle unsuccessful responses
            $errorMessage = $response->json('error') ?? 'Failed to fetch data';
            return response()->json(['error' => $errorMessage], $response->status());
        }
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    /****************Get Placement****************/
public function getPlacemets() {
 return view('placementSetup');
}

    /****************Search Placement****************/
public function searchPlacement(Request $request){

    // dd($request->all());

    $request->validate([
        'departmentId' => 'integer',
       
    ]);

    $departmentId = $request->input('departmentId');
    $userId = 101;
    $locationId = 101;
    $orgId = 11;
    $sessionId = 101;
    $active = "Y";
    //   dd($departmentId);
    
    $apiData = [
        "departmentId" => $departmentId,  
        "userId" => $userId,
        "locationId" => $locationId,
        "orgId" => $orgId,
        "sessionId" => $sessionId,
        "active" => $active
    ];

    //   dd($apiData);

    Log::info('API Data:', $apiData);

    $url = "http://{$this->serverIp}/selectDepartmentPlacements";

    try {
      
        // Make the HTTP POST request
        $response = Http::post($url, $apiData);
      
        // $response = Http::post('http://{$this->serverIp}/selectDepartmentPlacements', $apiData);
              // $res = $response->json();
              // dd($res);
        if ($response->successful()) {
            // Return the response data
            return response()->json(['data' => $response->json()]);
        } else {
            // Handle unsuccessful responses
            $errorMessage = $response->json('error') ?? 'Failed to fetch data';
            return response()->json(['error' => $errorMessage], $response->status());
        }
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
    }
      
}

      /****************Update Placement****************/
 public function updatePlacement(Request $request) {
    // dd($request);

    $request->validate([
        'Id' => 'integer',
        'departmentId' => 'integer',
        "placement" => "string",
    "extensionNo" => "integer"
       
    ]); 

  $Id = $request->input('Id');
  $placement = $request->input('placement');
  $extensionNo = $request->input('extensionNo');
    $departmentId = $request->input('departmentId');
    $userId = "PLC";
    $locationId = 101;
    $orgId = 11;
    $sessionId = 101;
    $active = "Y";
    

    $apiData = [
        "id" => $Id,
        "description"=>$placement,
        "extensionNo"=>$extensionNo,
        "departmentId" => $departmentId,  
        "userId" => $userId,
        "locationId" => $locationId,
        "orgId" => $orgId,
        "sessionId" => $sessionId,
        "active" => $active
    ];
    //  dd($apiData);

    Log::info('API Data:', $apiData);
    $url = "http://{$this->serverIp}/updateDepartmentPlacement";

   
    try {
      
        $response = Http::post($url, $apiData);
              // $res = $response->json();
              // dd($res);
        if ($response->successful()) {
            $responseData = $response->json();
            //  dd($responseData);
                    if ($responseData == true) {

            $departmentId = $request->input('departmentId');
    $userId = 101;
    $locationId = 101;
    $orgId = 11;
    $sessionId = 101;
    $active = "Y";
    //   dd($departmentId);
    
    $apiData = [
        "departmentId" => $departmentId,  
        "userId" => $userId,
        "locationId" => $locationId,
        "orgId" => $orgId,
        "sessionId" => $sessionId,
        "active" => $active
    ];

    //   dd($apiData);

    Log::info('API Data:', $apiData);

    $url = "http://{$this->serverIp}/selectDepartmentPlacements";

    try {
      
        // Make the HTTP POST request
        $response = Http::post($url, $apiData);
      
        // $response = Http::post('http://{$this->serverIp}/selectDepartmentPlacements', $apiData);
              // $res = $response->json();
              // dd($res);
        if ($response->successful()) {
            // Return the response data
            return response()->json(['data' => $response->json()]);
        } else {
            // Handle unsuccessful responses
            $errorMessage = $response->json('error') ?? 'Failed to fetch data';
            return response()->json(['error' => $errorMessage], $response->status());
        }
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
    }

        // Return the response data
        }else {
            // Handle unsuccessful responses for the first API call
            $errorMessage = $response->json('error') ?? 'Failed to update data';
            return response()->json(['error' => $errorMessage], $response->status());
        }
        } else {
            // Handle unsuccessful responses
            $errorMessage = $response->json('error') ?? 'Failed to fetch data';
            return response()->json(['error' => $errorMessage], $response->status());
        }
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
    }

}

}
