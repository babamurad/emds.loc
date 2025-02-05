namespace App\Http\Livewire\Traits;

trait WithAuthorization
{
    public function authorize($permission)
    {
        if (!auth()->user()->hasPermission($permission)) {
            abort(403, 'Unauthorized action.');
        }
    }
}