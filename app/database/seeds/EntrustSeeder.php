<?php 

class EntrustSeeder extends Seeder {
	public function run()
	{
		$admin = new Role();
		$admin->name 	= 'admin';
		// $admin->display_name = 'User Administrator';
		// $admin->description = 'User is allowed to manage and edit other users and their posts.';
		$admin->save();

		$brewer = new Role();
		$brewer->name 	= 'brewer';
		// $brewer->display_name = 'Brewery';
		// $brewer->description = 'Brewery is allowed to make persistent brews to database and can edit their own brews.';
		$brewer->save();

		$anewfan = new Role();
        $anewfan->name    = 'anewfan';
        // $anewfan->display_name = 'User anewfanistrator';
        // $anewfan->description = 'User is allowed to manage and edit other users and their posts.';
        $anewfan->save();

        $user = User::where('username', '=', 'RyanSki')->first();
        $user->roles()->attach( $admin->id );
        $user->roles()->attach( $brewer->id );
        $user->roles()->attach( $anewfan->id );

        $seconduser = User::where('username', '=', 'Garrett')->first();
        $seconduser->roles()->attach( $brewer->id );
        $seconduser->roles()->attach( $anewfan->id );
        
      
      	$thirduser = User::where('username', '=', 'Robot')->first();
      	$thirduser->roles()->attach( $anewfan->id );
      	

        // Permissions

        $createIdea = new Permission();
        $createIdea->name         = 'Idea-create';
        $createIdea->display_name = 'Create Ideas';
        // $createIdea->description  = 'create new idea';
        $createIdea->save();

        $createIdeaOnce = new Permission();
        $createIdeaOnce->name         = 'Idea-create-once';
        $createIdeaOnce->display_name = 'Create Single Idea';
        // $createIdeaOnce->description  = 'create a new idea';
        $createIdeaOnce->save();

        $editIdea = new Permission();
        $editIdea->name         = 'Idea-edit';
        $editIdea->display_name = 'Edit Ideas';
        // $editIdea->description  = 'edit any Idea on the website';
        $editIdea->save();

        $editOwnIdea = new Permission();
        $editOwnIdea->name         = 'Idea-edit-own';
        $editOwnIdea->display_name = 'Edit Your Own Ideas';
        // $editOwnIdea->description  = 'edit any Idea you have created';
        $editOwnIdea->save();

        $destroyIdea = new Permission();
        $destroyIdea->name         = 'Idea-destroy';
        $destroyIdea->display_name = 'Soft Delete A Idea';
        // $destroyIdea->description  = 'soft delete Ideas on webpage made by any user, admin only permission';
        $destroyIdea->save();

        $createBrew = new Permission();
        $createBrew->name         = 'Brew-create';
        $createBrew->display_name = 'Create Brews';
        // $createBrew->description  = 'create new Brew';
        $createBrew->save();

        $createBrewOnce = new Permission();
        $createBrewOnce->name         = 'Brew-create-once';
        $createBrewOnce->display_name = 'Create Single Brew';
        // $createBrewOnce->description  = 'create a new Brew';
        $createBrewOnce->save();

        $editBrew = new Permission();
        $editBrew->name         = 'Brew-edit';
        $editBrew->display_name = 'Edit Brews';
        // $editBrew->description  = 'edit any Brew on the website';
        $editBrew->save();

        $editOwnBrew = new Permission();
        $editOwnBrew->name         = 'Brew-edit-own';
        $editOwnBrew->display_name = 'Edit Your Own Brews';
        // $editOwnBrew->description  = 'edit any Brew you have created';
        $editOwnBrew->save();
        
    	$destroyBrew = new Permission();
        $destroyBrew->name         = 'Brew-destroy';
        $destroyBrew->display_name = 'Soft Delete A Brew';
        // $destroyBrew->description  = 'soft delete Brews on webpage made by any user, admin only permission';
        $destroyBrew->save();

        $editUser = new Permission();
        $editUser->name         = 'user-edit';
        $editUser->display_name = 'Edit Users';
        // $editUser->description  = 'Edit All User Account details, admin only permission';
        $editUser->save();

        $editOwnUser = new Permission();
        $editOwnUser->name         = 'user-edit-own';
        $editOwnUser->display_name = 'Edit Own User';
        // $editOwnUser->description  = 'Edit your user account details';
        $editOwnUser->save();

        $editRoles = new Permission();
        $editRoles->name         = 'edit-user-roles';
        $editRoles->display_name = 'Edit User Roles';
        // $editRoles->description  = 'Add role or edit existing role for users. admin only permission.';
        $editRoles->save();

        $admin->attachPermissions(array($editIdea, $editBrew, $destroyIdea, $destroyBrew, $editUser, $editRoles));
        $brewer->attachPermissions(array($createBrew, $editOwnBrew, $editOwnUser));
        $anewfan->attachPermissions(array($editOwnUser, $createIdea, $editOwnIdea));
	}
}