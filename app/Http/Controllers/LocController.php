<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Pharmacy;
use App\Models\Lab;

class LocController extends Controller
{

    //////////////////////////////////////Get User Lat and Long (LOCATION)
    public function getLoc($ip){


         $position = Location::get($ip);  //'41.37.92.88'
         $userLocation = [
            'userLat' => $position->latitude,
            'userLong' => $position->longitude
         ];
         return $userLocation;
    }

            ///////////////////////////////////////////Get Distance Between Lats and Longs 
    public function calcDistance($lat1, $long1, $lat2, $long2){
        $theta = $long1 - $long2;
        $miles = (sin(deg2rad($lat1))) * sin(deg2rad($lat2)) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $result['miles'] = $miles * 60 * 1.1515;
        $result['feet'] = $result['miles']*5280;
        $result['yards'] = $result['feet']/3;
        $result['kilometers'] = $result['miles']*1.609344;
        $result['meters'] = $result['kilometers']*1000;
        return $result['meters'];
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////Get An Ordered List Of Nearby Doctors 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function getNearDoctors($user_ip){
        $userLocation = $this->getLoc($user_ip);
        $data = Doctor::select('lat', 'long', 'id')->get();

        //////////////////////////////////////////Pushing Distances In An Array Called (distances)
        $distances = [];
        for($i = 0; $i < count($data); $i++){

            $dist = $this->calcDistance($userLocation['userLat'], $userLocation['userLong'], $data[$i]['lat'], $data[$i]['long']);
            array_push($distances, $dist);
        }
        //////////////////////////////////////Distances Sorted By Values 
        asort($distances);

        /////////////////////////////////////////////////
        $nearDoctors = [];
        foreach($distances as $key => $values){
            ///////////////////////////////////////Get Ordered Near Doctors By (id)
            $nearDocsData = Doctor::where('id', $data[$key]['id'])->get();
            //////////////////////////////////////Pushing Nearby Doctors Data In An Array Called (nearDoctors)
            array_push($nearDoctors, $nearDocsData);
        }

        if(!$nearDoctors){
            $response = [
                'status' => TRUE,
                'Message' => "No Data Available"
            ];
        }else{
            $response = [
                'status' => TRUE,
                'Data' => $nearDoctors
            ];
        }
        
        
        return response($response,201);
    }



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////Get An Ordered List Of Nearby Hospitals 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    public function getNearHospitals($user_ip){
      $userLocation = $this->getLoc($user_ip);
      $data = Hospital::select('lat', 'long', 'id')->get();

     //////////////////////////////////////////Pushing Distances In An Array Called (distances)
        $distances = [];
      for($i = 0; $i < count($data); $i++){

        $dist = $this->calcDistance($userLocation['userLat'], $userLocation['userLong'], $data[$i]['lat'], $data[$i]['long']);
        array_push($distances, $dist);
        }
     //////////////////////////////////////Distances Sorted By Values 
     asort($distances);

      /////////////////////////////////////////////////
      $nearHospitals = [];
     foreach($distances as $key => $values){
          ///////////////////////////////////////Get Ordered Near Hospitals By (id)
            $nearHospData = Hospital::where('id', $data[$key]['id'])->get();
            //////////////////////////////////////Pushing Nearby Hospitals Data In An Array Called (nearHospitals)
            array_push($nearHospitals, $nearHospData);
        }

      if(!$nearHospitals){
         $response = [
                'status' => TRUE,
                'Message' => "No Data Available"
          ];
      }else{
          $response = [
             'status' => TRUE,
             'Data' => $nearHospitals
         ];
     }
    
    
     return response($response,201);
    }



    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////Get An Ordered List Of Nearby Pharmacies 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
public function getNearPharmacies($user_ip){
    $userLocation = $this->getLoc($user_ip);
    $data = Pharmacy::select('lat', 'long', 'id')->get();

   //////////////////////////////////////////Pushing Distances In An Array Called (distances)
      $distances = [];
    for($i = 0; $i < count($data); $i++){

      $dist = $this->calcDistance($userLocation['userLat'], $userLocation['userLong'], $data[$i]['lat'], $data[$i]['long']);
      array_push($distances, $dist);
      }
   //////////////////////////////////////Distances Sorted By Values 
   asort($distances);

    /////////////////////////////////////////////////
    $nearPharmacies = [];
   foreach($distances as $key => $values){
        ///////////////////////////////////////Get Ordered Near Pharmacies By (id)
          $nearPharmData = Pharmacy::where('id', $data[$key]['id'])->get();
          //////////////////////////////////////Pushing Nearby Pharmacies Data In An Array Called (nearPharmacies)
          array_push($nearPharmacies, $nearPharmData);
      }

    if(!$nearPharmacies){
       $response = [
              'status' => TRUE,
              'Message' => "No Data Available"
        ];
    }else{
        $response = [
           'status' => TRUE,
           'Data' => $nearPharmacies
       ];
   }
  
  
   return response($response,201);
  }







  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////Get An Ordered List Of Nearby Labs 
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
public function getNearLabs($user_ip){
    $userLocation = $this->getLoc($user_ip);
    $data = Lab::select('lat', 'long', 'id')->get();

   //////////////////////////////////////////Pushing Distances In An Array Called (distances)
      $distances = [];
    for($i = 0; $i < count($data); $i++){

      $dist = $this->calcDistance($userLocation['userLat'], $userLocation['userLong'], $data[$i]['lat'], $data[$i]['long']);
      array_push($distances, $dist);
      }
   //////////////////////////////////////Distances Sorted By Values 
   asort($distances);

    /////////////////////////////////////////////////
    $nearLabs = [];
   foreach($distances as $key => $values){
        ///////////////////////////////////////Get Ordered Near Labs By (id)
          $nearLabData = Lab::where('id', $data[$key]['id'])->get();
          //////////////////////////////////////Pushing Nearby Labs Data In An Array Called (nearLabs)
          array_push($nearLabs, $nearLabData);
      }

    if(!$nearLabs){
       $response = [
              'status' => TRUE,
              'Message' => "No Data Available"
        ];
    }else{
        $response = [
           'status' => TRUE,
           'Data' => $nearLabs
       ];
   }
  
  
   return response($response,201);
  }


}
