<?php 
namespace App\Http\ViewComposers;

use Illuminate\View\View;

class HomepageComposer
{
    public function __construct()
    {
    	
    }
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
    	$user = 'Kakalot';
        $view->with('supersayan', $user);
    }
}

 ?>