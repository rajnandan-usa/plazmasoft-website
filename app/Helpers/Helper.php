<?php

use App\Models\Category;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\Setting;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

// get counts 

class GetCount
{

    public static function UserCount()
    {
        return User::count();
    }
}


// get the setting from db 
function getSetting($key, $default = null)
{
    $setting = Setting::where('key', $key)->first();
    return $setting ? $setting->value : $default;
}

// download sample csv file 
function downloadSampleCsvFile($table = null)
{
    if ($table) {
        $callback = generateCsv($table);
    } else {
        return redirect()->back()->with("error", "Invalid table!");
    }

    // Return the CSV file as a download response
    return Response::stream($callback, 200, [
        "Content-type" => "text/csv",
        "Content-Disposition" => "attachment; filename=sample_$table.csv",
        "Pragma" => "no-cache",
        "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
        "Expires" => "0"
    ]);
}


// generate new sample csv file 
function generateCsv($table = null)
{
    // get the table header 
    $headers = null;
    if ($table) {
        $headers = Schema::getColumnListing($table);
    } else {
        return redirect()->back()->with("error", "Invalid table!");
    }
    // remove id from header 
    $headers = array_diff($headers, ["id", "created_at", "updated_at"]);


    // create sample data 
    if ($table == 'users') {
    } else {
        $data = [];
    }

    // map array keys (from $headers) and values (from $data) 
    $sampleData = [];
    try {
        foreach ($data as $row) {
            $sampleData[] = array_combine($headers, $row);
        }
    } catch (\Throwable $th) {
        $data = [];
        foreach ($data as $row) {
            $sampleData[] = array_combine($headers, $row);
        }
    }

    // Create a callback to generate the CSV content
    $callback = function () use ($sampleData, $headers) {
        $file = fopen('php://output', 'w');
        // Add the header row
        fputcsv($file, $headers);
        // Add the data rows
        foreach ($sampleData as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    };

    return $callback;
}




function importCsvFile($file = null, $table = null, $timestamp = true, $truncate = false)
{
    if (!Schema::hasTable($table)) {
        return redirect()->back()->with('error', 'No such table exists!');
    }

    // Open and read the CSV file
    $fileHandle = fopen($file, 'r');
    $headers = fgetcsv($fileHandle, 1000, ',');

    DB::beginTransaction();
    // empty table data before import 
    if ($truncate) {
        DB::statement('TRUNCATE TABLE ' . $table);
    }
    try {
        while ($row = fgetcsv($fileHandle, 1000, ',')) {
            if (count($row) !== count($headers)) {
                return redirect()->back()->with('error', 'Invalid csv file!');
            }

            $arrayFinal = array_combine($headers, $row);
            if ($timestamp) {
                $arrayFinal["created_at"] = now();
                $arrayFinal["updated_at"] = now();
            }
            // insert each csv row in table 
            DB::table($table)->insert($arrayFinal);
        }

        DB::commit();
        return redirect()->back()->with('success', 'CSV data imported successfully.');
    } catch (\Exception $e) {
        DB::rollback();
        return redirect()->back()->with('error', 'Try with Correct field names!');
    } finally {
        fclose($fileHandle);
    }
}




if (!function_exists('successResponse')) {
    /**
     * Generate a standardized success response.
     *
     * @param string $message
     * @param mixed $data
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */

    function successResponse($message = "success", $statusCode = 200, $data = null)
    {
        $response = ["success" => true, "statusCode" => $statusCode, "message" => $message];

        if ($data) {
            $response['data'] = $data;
        }

        return response()->json($response, $statusCode);
    }
}

if (!function_exists('errorResponse')) {
    /**
     * Generate a standardized error response.
     *
     * @param string $message
     * @param int $statusCode
     * @param mixed $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function errorResponse(string $message, int $statusCode = 500, $errors = null)
    {
        $response = ["success" => false, "statusCode" => $statusCode, "message" => $message];

        if ($errors) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $statusCode);
    }
}
