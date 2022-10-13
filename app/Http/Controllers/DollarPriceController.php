<?php

namespace App\Http\Controllers;

use App\Models\DollarPrice;
use App\Http\Requests\StoreDollarPriceRequest;
use App\Http\Requests\UpdateDollarPriceRequest;

class DollarPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $filePath = "./../uploads/dollar-prices-default.csv";

            $file = fopen($filePath, "r"); //Open file
            $fileData = [];
                        
            $i = 0;

            // Read through the file and store the contents as an array      
            while (($curData = fgetcsv($file, 1000, ",")) !== FALSE) 
            {
                // Skip first row (Because that is the title)
                if ($i != 0) $fileData[]  = $curData;
                $i++;
            }

            fclose($file); //Close after reading

            return response()->json(["data" => $fileData]);

        }catch(Exception $error)
        {
            return response()->json(["error" => $error->getMessage], 400);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDollarPriceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDollarPriceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DollarPrice  $dollarPrice
     * @return \Illuminate\Http\Response
     */
    public function show(DollarPrice $dollarPrice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DollarPrice  $dollarPrice
     * @return \Illuminate\Http\Response
     */
    public function edit(DollarPrice $dollarPrice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDollarPriceRequest  $request
     * @param  \App\Models\DollarPrice  $dollarPrice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDollarPriceRequest $request, DollarPrice $dollarPrice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DollarPrice  $dollarPrice
     * @return \Illuminate\Http\Response
     */
    public function destroy(DollarPrice $dollarPrice)
    {
        //
    }
}
