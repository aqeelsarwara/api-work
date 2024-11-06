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



class ReportStatusController extends Controller
{
    //

    
    protected $serverIp;

    public function __construct()
    {
        $this->serverIp = HostClass::getserverIp();
    }

    public function index()
    {
        if (!session()->has('apiUserData')) {
            $notification = [
                'message' => 'Session Expired',
                'alert-type' => 'error',
            ];
            return redirect()->route('Login.login')->with($notification);
        }

        $forms = session('apiUserData.forms', []);
        $requiredRoute = 'ReportStatus';
        $hasRouteAccess = collect($forms)->contains(function ($form) use ($requiredRoute) {
            return isset($form['webUrl']) && $form['webUrl'] === $requiredRoute;
        });

        if (!$hasRouteAccess) {
            return view('404error.403error');
        }

        $apiData = [
            'sessionId' => '101',
            'orgId' => session('apiUserData.user.organizationId'),
            'userId' => session('apiUserData.user.id'),
            'orderStatusId' => '1003,1044,1008,1011,1018'
        ];

        $LocationData = [
            'sessionId' => '101',
            'orgId' => session('apiUserData.user.organizationId'),
            'userId' => session('apiUserData.user.id'),
        ];

        try {
            $selectSectionWisePendingOrders = $this->callApi('/selectSectionWisePendingOrders', $apiData);
            $LOVS = $this->callApi('/selectLocations', $LocationData);


            return view('RADIOLOGY.ReportStatus', compact('selectSectionWisePendingOrders', 'LOVS'));
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            $notification = [
                'message' => $errorMessage,
                'alert-type' => 'error',
            ];

            session()->flash('message', $errorMessage);
            session()->flash('alert-type', 'error');
            return view('RADIOLOGY.ReportStatus')->with($notification);
        }
    }

    private function callApi($endpoint, $data, $method = 'post')
    {
        $url = "http://{$this->serverIp}{$endpoint}";

        try {
            if ($method === 'post') {
                $response = Http::post($url, $data);
            } else {
                $response = Http::get($url, $data);
            }

            if ($response->successful()) {
                return $response->json();
            } else {
                $errorMessage = $response->json()['error'] ?? 'An error occurred during API call';
                throw new \Exception($errorMessage);
            }
        } catch (\Exception $e) {
            throw new \Exception('Failed to connect to the API: ' . $e->getMessage());
        }
    }


    public function PatientOrder(Request $request)
    {
    //    dd($request);
        // Validate the input fields
        $request->validate([
            'Id' => 'required|string',
            'location' => 'string',
            'section' => 'string',
            'from_date' => 'nullable|string',  
            'to_date' => 'nullable|string',   
        ]);
    
        
        $patId = $request->input('Id');
        $patientId = $request->input('Id');
        $contractId = "ALL";
        $locationId = $request->input('location', 'ALL');
        $departmentId = "ALL";
        $sectionId = $request->input('section', 'ALL');
        $statusId = $request->input('status', 'ALL');
        $orderStatusId = "ALL";
        $orderType = "ALL";
        $fromDate = $request->input('from_date');
        if ($fromDate === null) {
            $fromDate = '';
        }
        
        $toDate = $request->input('to_date');
        if ($toDate === null) {
            $toDate = '';
        }
        
        $userId = "101"; 
        $sessionId = "101";
  
    //  dd($toDate);
        
        $apiData = [
            "patId" => $patId,  
            "patientId" => $patientId,
            "contractId" => $contractId,
            "locationId" => $locationId,
            "departmentId" => $departmentId,
            "sectionId" => $sectionId,
            "statusId" => $statusId,
            "orderStatusId" => $orderStatusId,
            "orderType" => $orderType,
            "fromDate" => $fromDate,
            "toDate" => $toDate,
            "userId" => $userId,
            "sessionId" => $sessionId
        ];
  
    //   dd($apiData);
    
       
        Log::info('API Data:', $apiData);
    
        try {
          
           
           
            $response = Http::post('http://122.129.85.69:5000/selectPatientOrders', $apiData);
                //    $res = $response->json();
                //    dd($res);
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
    
  
    public function getPatientDetails(Request $request)
    {
        $orderId = $request->input('orderId');
      //   dd($orderId);
        $actionId = "ALL";
        $sessionId = "101";
  
        // Use orderId to fetch patient details from an API or database
        // Replace this with your actual logic to fetch patient details
        $apiData = [
            'orderId' => $orderId,
            'actionId' => $actionId, // Replace with actual data
            'sessionId' => $sessionId // Replace with actual data
            
        ];
  
  
  try {
            // Make the HTTP request to the external API
           
           
            $response = Http::get('http://122.129.85.69:5000/selectOrderActions', $apiData);
                  //   $res = $response->json();
                  //    dd($res);
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
   
}
