<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. It saves the user but does not log them in
    | after registration.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/home';  // This can be changed based on your needs

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'exists:roles,name'], // Validate that role exists
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        // Create the user
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Assign the role to the user
        if (Role::where('name', $data['role'])->exists()) {
            $user->assignRole("Super Admin");
        }

        // Return the created user instance
        return $user;
    }

    /**
     * Handle the registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(\Illuminate\Http\Request $request)
    {
        // Validate the incoming request
        $this->validator($request->all())->validate();

        // Create the user without logging them in
        $this->create($request->all());

        // Redirect to a thank you page or wherever you prefer
        return back()->with('success', 'User has been added successfully!');

    }

    public function user_list(){
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    /**
     * Update user details
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|string',
        ]);

        // Update user details
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        // Update role if changed
        if ($user->hasRole($validated['role'])) {
            // If the role hasn't changed, do nothing
            return back()->with('success', 'User updated successfully.');
        }

        // Assign the new role
        $user->syncRoles([$validated['role']]);

        return back()->with('success', 'User updated successfully.');
    }

    /**
     * Delete a user
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteUser(User $user)
    {
        $user->delete();
        return back()->with('success', 'User deleted successfully.');
    }

    /**
     * Change user status (Active/Inactive)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function changeStatus(Request $request, User $user)
    {
        $newStatus = ($user->status == 'Active') ? 'Inactive' : 'Active';
        $user->status = $newStatus;
        $user->save();

        return response()->json(['status' => $newStatus]);
    }

    /**
     * Change user password
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request, User $user)
    {
        $validated = $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        // Check if the current password matches
        if (!Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($validated['new_password']);
        $user->save();

        return back()->with('success', 'Password changed successfully.');
    }
    public function login(Request $request)
{
    // Validate form data
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
    ]);

    // Attempt to log the user in
    if (\Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        return redirect()->intended('/dashboard'); // Redirect to intended page
    }

    // If authentication fails, flash an error message and redirect back
    session()->flash('error', 'Invalid credentials, please try again.');

    // Redirect back with validation errors and old input
    return redirect()->back()->withInput();
}

}
