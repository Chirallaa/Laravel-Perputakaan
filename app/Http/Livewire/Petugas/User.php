<?php

namespace App\Http\Livewire\Petugas;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Http\Request;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public  $petugas, $peminjam, $search, $currentUser;
    public $create, $delete, $edit, $name, $user_id, $username, $password, $password_confirmation;

    protected $validationAttributes = [
        'name' => 'nama',
        'password_confirmation' => 'ulangi password'
    ];

    protected function rules()
    {
        return [
            'name' => 'required',
            'username' => ['required', 'username', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)],
            'password_confirmation' => 'required',
        ];
    }
  
    public function petugas()
    {
        $this->format();
        $this->petugas = true;
    }
  
    public function peminjam()
    {
        $this->format();
        $this->peminjam = true;
    }

    public function create()
    {
        $this->create = true;
    }
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render(Request $request)
    {
        
        $currentUser = Auth::user();
        $user = ModelsUser::where('id', '!=', $currentUser->id)->get();

        if ($this->search) {
           if ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->where('name', 'like', '%'. $this->search .'%')->paginate(10);
            } else {
                $user = ModelsUser::where('name', 'like', '%' . $this->search . '%')->paginate(10);
            }
        } else {
             if ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->paginate(10);
            } else {
                $user = ModelsUser::paginate(10);
            }
        }
        
        return view('livewire.Petugas.user', compact('user'));
    }

    public function edit(ModelsUser $user)
    {
        $this->format();
        $this->edit = true;

        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->username = $user->username;
        $this->password = $user->password;
    }

    public function update(ModelsUser $user)
    {
        $user->update(['name' => $this->name,
            'username' => $this->username,
            'password' => bcrypt($this->password)
    ]);

        session()->flash('sukses', 'Data berhasil diubah.');

        $this->format();

    }
        public function delete($id) {
            $user = ModelsUser::findOrFail($id);
            $user -> Roles() -> detach();
            $user -> delete();
        session()->flash('sukses', 'Data berhasil dihapus.');
        $this->format();

        return $user->delete();
    }

    
    public function format()
    {
        $this->petugas = false;
        $this->peminjam = false;
        unset($this->create);
        unset($this->delete);
        unset($this->show);
        unset($this->edit);
        unset($this->name);
        unset($this->username);
        unset($this->password);
        unset($this->password_confirmation);
    }
}
