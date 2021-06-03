<?php

namespace Modules\Walet\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Master\Entities\Bill;
use Illuminate\Routing\Controller;
use Illuminate\Contracts\Support\Renderable;
use Modules\Master\Repository\BillRepository;

class WaletController extends Controller
{
    protected $bill;

    public function __construct(
        BillRepository $bill
    ) {
        $this->bill = $bill;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function income()
    {
        return view('walet::income.index', [
            'title' => 'Pemasukan',
            'bills' => $this->bill->all(),
        ]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function spending()
    {
        return view('walet::spending.index', [
            'title' => 'Pengeluaran'
        ]);
    }
}
