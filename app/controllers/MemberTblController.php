<?php

class MemberTblController extends \BaseController {

      //  public $restful = true;
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    
    //add count function
	public function index()
	{
		//
                
            $firstName = Request::get('firstName');
            $surname = Request::get('surname');
            $email = Request::get('email');
            
            if($firstName == "" && $surname == "" && $email == ""){
             return $users = User::all();
//              return Response::json(array(
//                            'error' => false,
//                            'details' => User::all()),
//                            200
//                        );  
                
            }
            else
            {
                    

            $users = User::orWhere('firstName', '=', $firstName)
                    ->orWhere('surname', '=', $surname)
                    ->orWhere('email', '=', $surname)
                    ->get();

          //  $users = User::where('firstName', '=', $firstName)->or_where('surname', '=', $surname)->get();
  return $users;
            
//                    foreach ($users as $user)
//                    {
//                        
//                        
//                        return Response::json(array(
//                            'error' => false,
//                            'details' => $user->toArray()),
//                            200
//                        );
//                        
//                    }
                                }
	}
        
        public function search()
	{
		//
                
            $firstName = Request::get('firstName');
            $surname = Request::get('surname');
            $email = Request::get('email');
            
            if($firstName == "" && $surname == "" && $email == ""){
             return $users = User::all();
//              return Response::json(array(
//                            'error' => false,
//                            'details' => User::all()),
//                            200
//                        );  
                
            }
            else
            {
                    

            $users = User::Where('firstName', '=', $firstName)
                    ->Where('surname', '=', $surname)
                    ->Where('email', '=', $surname)
                    ->get();

          //  $users = User::where('firstName', '=', $firstName)->or_where('surname', '=', $surname)->get();
  return $users;
            
//                    foreach ($users as $user)
//                    {
//                        
//                        
//                        return Response::json(array(
//                            'error' => false,
//                            'details' => $user->toArray()),
//                            200
//                        );
//                        
//                    }
                                }
	}
        
        public function count()
	{
		//
                //return 'Hello API';
            $firstName = Request::get('firstName');
            $surname = Request::get('surname');
            $email = Request::get('email');
            
            if($firstName == "" && $surname == "" && $email == ""){
             return $count = User::all()->count();
//              return Response::json(array(
//                            'error' => false,
//                            'details' => User::all()),
//                            200
//                        );  
                
            }
            else
            {
                    

            $count = User::orWhere('firstName', '=', $firstName)
                    ->orWhere('surname', '=', $surname)
                    ->orWhere('email', '=', $surname)
                    ->count();

                return $count;

            }
                     
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

            
            $user = new User;
        $user->firstName =  Request::get('fname');
        $user->surname =  Request::get('surname');
        $user->email =  Request::get('email');
        $user->password = Hash::make('password');

        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.

        $user->save();

        return Response::json(array(
            'error' => false,
            'details' => $user->toArray()),
            200
                );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        return 'Store API';		
//
            /*
	
        $user = new User;
        $user->firstName = 'fname';
        $user->surname = 'Stamp';
        $user->uanme = 'Adrian';
        //$member->email = Request::get('email');
        //$member->username = Request::get('uname');
        $user->password = Hash::make('password');

        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.

        $user->save();
/*
        return Response::json(array(
            'error' => false,
            'details' => $user->toArray()),
            200
                );*/
        }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
           $user = User::find($id);

            
            return Response::json(array(
            'error' => false,
            'details' => $user->toArray()),
            200
                );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
            
            $user = User::find($id);

            $user->email =  Request::get('email');
        
            $user->save();
            
                      
            return Response::json(array(
            'error' => false,
            'details' => $user->toArray()),
            200
                );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
            return 'Update API';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            
		//
            
            $user = User::find($id);

            $user->delete();
            
            return Response::json(array(
            'error' => false,
            'deleted' => $id),
            200
                );
              
            
	}

}