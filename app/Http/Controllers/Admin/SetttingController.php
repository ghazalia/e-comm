<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Traits\UploadAble;
use Illuminate\Http\Request;

class SetttingController extends BaseController
{
    use UploadAble;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->setPageTitle('Settings', 'Manage Settings');
        return view('admin.settings.index');
    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {
    }
}
