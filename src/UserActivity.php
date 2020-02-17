<?php
namespace Amar;

use Amar\Useractivity\Model\ActivityLog;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Request;
use Jenssegers\Agent\Agent;

class UserActivity
{

    public static function addToLog()
    {
		
		$agent = new Agent();
    	$log['url'] = Request::fullUrl();
    	$log['method'] = Request::method();
    	$log['ip'] = Request::ip();
		$log['platform'] = $agent->platform();
		$log['browser'] = $agent->browser();
		$log['device'] = $agent->device();
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	$log['created_at'] = Carbon::now();
    	ActivityLog::create($log);
    }


    public static function logActivityLists()
    {
    	return ActivityLog::latest()->get();
	}
	
	public function paginate($items, $perPage = 15, $page = null)
	{
		$pageName = 'page';
		$page     = $page ?: (Paginator::resolveCurrentPage($pageName) ?: 1);
		$items    = $items instanceof Collection ? $items : Collection::make($items);

		return new LengthAwarePaginator(
			$items->forPage($page, $perPage)->values(),
			$items->count(),
			$perPage,
			$page,
			[
				'path'     => Paginator::resolveCurrentPath(),
				'pageName' => $pageName,
			]
		);
	}


}