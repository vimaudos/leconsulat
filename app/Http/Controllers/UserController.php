<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userRepository;

    protected $nbrPerPage = 4;

    public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
        $this->middleware('auth');
	}

	public function index()
	{
		$users = $this->userRepository->getPaginate($this->nbrPerPage);
		$links = $users->render();

		return view('backoffice.userIndex', compact('users', 'links'));
	}

	public function create()
	{
		return view('backoffice.userCreate');
	}

	public function store(UserCreateRequest $request)
	{
		$this->setAdmin($request);

		$user = $this->userRepository->store($request->all());

		return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
	}

	public function show($id)
	{
		$user = $this->userRepository->getById($id);

		return view('backoffice.userShow',  compact('user'));
	}

	public function edit($id)
	{
		$user = $this->userRepository->getById($id);

		return view('backoffice.userEdit',  compact('user'));
	}

	public function update(UserUpdateRequest $request, $id)
	{
		$this->setAdmin($request);

		$this->userRepository->update($id, $request->all());
		
		return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
	}

	public function destroy($id)
	{
		$this->userRepository->destroy($id);

		return redirect()->back();
	}

	private function setAdmin($request)
	{
		if(!$request->has('admin'))
		{
			$request->merge(['admin' => 0]);
		}		
	}

}