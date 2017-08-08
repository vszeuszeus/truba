<?php

namespace App\Http\Controllers;

use App\Availability_status;
use App\Constraction_status;
use Illuminate\Http\Request;
use App\User_request;
use Illuminate\Support\Facades\Session;

class UserRequestsController extends Controller
{
    public function show(Request $request)
    {
        $this->authorize('show', User_request::class);
        If($request->has('list'))
        {
            switch($request->list)
            {
                case "ended" :
                    $requests = User_request::where('status', 1)->get();
                    $title = 'Завершенные';
                    break;
                case "noended" :
                    $requests = User_request::where('status', 0)->get();
                    $title = 'Незавершенные';
                    break;
                default:
                    $requests = User_request::all();
                    $title = 'Все заявки';
                    break;
            }
        }
        else
        {
            $requests = User_request::all();
            $title = 'Все заявки';
        }
        return view('admin.requests.show', [
            'requests' => $requests,
            'title_section' => $title
        ]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'name' => 'string|max:100|min:3',
            'phone' => 'string|max:20|min:6'
        ]);

        $rqu = new User_request();
        $rqu->name = $request->name;
        $rqu->phone = $request->phone;
        $rqu->status = 0;
        $rqu->save();

        $request->session()->flash('status',['']);
        return redirect()->back();
    }

    public function set_complite(User_request $user_request, Request $request)
    {
        $this->authorize('set_complite', User_request::class);

        $user_request->status = 1;
        $user_request->save();

        $request->session()->flash('status', ['Заявка завершена','Заявка перешла в раздел завершенных заявок','positive']);
        return redirect()->back();
    }

    public function destroy(User_request $user_request, Request $request)
    {
        $this->authorize('destroy', User_request::class);

        $user_request->delete();

        $request->session()->flash('status', ['Заявка удалена','Заявка перешла в раздел удаленных заявок','positive']);
        return redirect()->back();
    }
}
