<?php

namespace App\Http\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Success;
use Livewire\WithPagination;

class Viewsuccesses extends Component
{
    use WithPagination;

    public array $successes = [];
    public string $search = '';
    public array $formattedArray = [];
    public int $successCount = 0;

    public function render()
    {
        $this->successes = [];
        $this->formattedArray = [];
        $this->successCount = Success::where('user_id', Auth::id())->count();
        $successData = Success::where('user_id', Auth::id())
            ->where('submission_date', 'like', '%' . $this->search . '%')
            ->get();
        foreach ($successData as $success) {
            $this->formattedArray[$success->submission_date][] = $success;
        }
        $this->successes = $this->formattedArray;
        $successPagination = $this->paginate($this->successes, 4);
        return view('livewire.viewsuccesses')->with(['successPagination' => $successPagination]);
    }

    public function deleteSuccess ($id) {
        if ($id) {
            Success::where('id', $id)->delete();
        }
    }

    public function paginate($items, $perPage = 4, $page = null)
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $total = count($items);
        $currentpage = $page;
        $offset = ($currentpage * $perPage) - $perPage ;
        $itemstoshow = array_slice($items , $offset , $perPage);
        return new LengthAwarePaginator($itemstoshow ,$total ,$perPage);
    }
}
