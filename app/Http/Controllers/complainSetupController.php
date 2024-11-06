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
use Illuminate\Support\Facades\Log;
use App\Models\LocalDB;


class complainSetupController extends Controller
{

    public function __construct()
    {
        $this->serverIp = HostClass::getserverIp();
    }
    public function complainSetupView(){
        return view('complainSetup');
    }

    public function saveComplain(Request $request)
{
    // dd($request);


    $request->validate([
        'departmentId' => 'integer',
        'description' => 'string',
    ]);
    //dd($request);

    $departmentId = $request->input('departmentId');
    $description = $request->input('description');
    $userId = "PLC";
    $orgId = "11";
    $sessionId = "101";
    
    //   dd($userId);
    
    $apiData = [
        "departmentId" => $departmentId,  
        "description" => $description,
        "userId" => $userId,
        "orgId" => $orgId,
        "sessionId" => $sessionId
    ];
      // dd($apiData);

    Log::info('API Data:', $apiData);

    $url = "http://{$this->serverIp}/insertDepartmentWiseComplaint";

    
    try {
      
        $response = Http::post($url, $apiData);
             //  $res = $response->json();
             //  dd($res);
             if ($response->successful()) {
                // Insert into localDB
                return response()->json(['data' => $response->json()]);
            } else {
                $errorMessage = $response->json('error') ?? 'Failed to fetch data';
                return response()->json(['error' => $errorMessage], $response->status());
            }
    } catch (\Exception $e) {
        // Handle exceptions
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
    /*******************Search Complain****************/
    public function searchComplain(Request $request){
       // dd($request);
        $request->validate([
            'departmentId' => 'integer',
           
        ]);
    
        $departmentId = $request->input('departmentId');
        $userId = 101;
      //  $locationId = 101;
        $orgId = 11;
        $sessionId = 101;
        $active = "Y";
        //   dd($departmentId);
        
        $apiData = [
            "departmentId" => $departmentId,  
            "userId" => $userId,
           // "locationId" => $locationId,
            "orgId" => $orgId,
            "sessionId" => $sessionId,
            "active" => $active
        ];
    
        //   dd($apiData);
    
        Log::info('API Data:', $apiData);
    
        $url = "http://{$this->serverIp}/selectDepartmentWiseComplaints";

      
        try {
          
            $response = Http::post($url, $apiData);
                //   $res = $response->json();
                 //  dd($res);
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



    public function updateComplain(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'Id' => 'integer',
            'departmentId' => 'integer',
            'description' => 'string',
            'active' => 'string'
        ]);
    
        
        // Retrieve input values from the request
        $Id = $request->input('Id');
        $description = $request->input('description');
        $departmentId = $request->input('departmentId');
        $userId = "PLC";
        $locationId = 101;
        $orgId = 11;
        $sessionId = 101;
        $active = $request->input('active');

        try {
            $localDb = new LocalDB();
            $localDb->id = $Id;
            $localDb->departmentId = $departmentId;
            $localDb->description = $description;
            $localDb->userId = $userId;
            $localDb->orgId = $orgId;
            $localDb->sessionId = $sessionId;
            $localDb->save();
            return response()->json(['success' => true, 'message' => 'Data saved successfully.']);
            // LocalDB::create($apiData);
        } catch (\Exception $e) {
            Log::error('Database insert error:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Failed to save data to local DB'], 500);
        }
        
        
    }
    


}

