<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    //Funzione di Creazione dell'utente
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'nation' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'string', 'max:5'],
            'phone' => ['required', 'string', 'max:10'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'surname' => $input['surname'],
            'date' => $input['date'],
            'city' => $input['city'],
            'nation' => $input['nation'],
            'address' => $input['address'],
            'postalCode' => $input['postalCode'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }

    //Funzione di Edit dell'utente registrato
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    //Funzione di Update dei dati utente registrato
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $users = User::find($id);
        $users->update(
            [
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'date' => $request->input('date'),
                'city' => $request->input('city'),
                'nation' => $request->input('nation'),
                'address' => $request->input('address'),
                'postalCode' => $request->input('postalCode'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]
        );
        return redirect()->route('home');
    }

    //Funzione di Delete dei dati utente
    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('home');
    }

    //Funzione di Ricerca dell'utente
    public function searchUsers(Request $request){
        $users = User::search($request->searched)->where('is_accepted', true)->paginate(6);
        return view('home', compact('users'));
    }

}
