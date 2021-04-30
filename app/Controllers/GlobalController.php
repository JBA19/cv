<?php namespace App\Controllers;

class GlobalController extends BaseController
{

	public function view($page)
	{
		if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
    {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }

    echo view($page);
	}

}
