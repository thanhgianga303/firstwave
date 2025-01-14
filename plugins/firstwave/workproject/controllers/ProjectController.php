<?php namespace Firstwave\Workproject\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Http\Request;
use Response;
use Firstwave\Workproject\Models\Work;
/**
 * Project Controller Back-end Controller
 */
class ProjectController extends \Illuminate\Routing\Controller
{
    public function getByProjectDeliverables($id)
    {
        $works = Work::whereHas('project_deliverables', function($query, $id) {
            $query->where('id', $id);
        })->get();
        // Process the request and fetch data
        // Return JSON response
        return response()->json($works);
    }
    public function getByCategory($id) {
        $works = Work::whereHas('category', function($query) use ($id) {
            $query->where('id', $id);
        })->get();
        return response()->json($works);
    }
}
