<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index()
    {
        $data = [];

        // check whether they have filled the data or not

        $tempModel = new UserModel();
        $userData = session()->get();
        $queryData = $tempModel->getUserAttribute($userData['id']);
        $dataInsert = [
            'isDataCompleted' => ($queryData != false && $queryData->height != null && $queryData->age != null && $queryData->weight != null)
        ];


        if ($dataInsert['isDataCompleted'] == true) {

            // check wheter isDataCompleted is exist in session or not
            $prev = session()->get('isDataCompleted');


            // data processing for queryData because it is still and object

            // Specify the properties you want to extract
            $propertiesToExtract = ['height', 'weight', 'age'];

            // Initialize an empty array to hold the extracted values
            $extractedArray = [];

            // Loop through the specified properties and extract their values
            foreach ($propertiesToExtract as $property) {
                // Check if the property exists in the object before trying to access it
                if (property_exists($queryData, $property)) {
                    // Add the property and its value to the extracted array
                    $extractedArray[$property] = $queryData->$property;
                }
            }

            // $extractedArray now contains the values of the specified properties
            
            session()->set($extractedArray);
            session()->set($dataInsert);
            //return redirect()->to('/profile');

            if($prev == false) return redirect()->to('/profile');
        }


        echo view('templates/header', $data);
        echo view('/profile');
        echo view('templates/footer');
    }

    public function updateUser()
    {

        $dataToView = [];
        $request = \Config\Services::request();
        $data = $request->getPost();

        $loggedUserData = session()->get();
        $userModel = new UserModel();

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // print($data['weight']);

        // $data['age'] = (int)$data['age'];
        // $data['height'] = (int)$data['height'];
        // $data['weight'] = (int)$data['weight'];


        $userModel->updateUserAttribute($loggedUserData['id'], $data);
        return redirect()->to('/profile');

    }
}


